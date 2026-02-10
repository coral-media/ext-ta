--TEST--
ta_aroon() computes AROON
--SKIPIF--
<?php
if (!extension_loaded('ta_lib')) {
    echo 'skip ta_lib not loaded';
}
?>
--FILE--
<?php
$values = range(1, 200);
$open = $values;
$high = array_map(fn($v) => $v + 1, $values);
$low = array_map(fn($v) => $v - 1, $values);
$close = array_map(fn($v) => $v + 0.5, $values);
$volume = array_fill(0, 200, 1000);
$res = ta_aroon($high, $low);
var_dump(array_keys($res));
var_dump(count($res['down']), $res['down'][0] === null, is_float($res['down'][199]));
var_dump(count($res['up']), $res['up'][0] === null, is_float($res['up'][199]));

?>
--EXPECT--
array(2) {
  [0]=>
  string(4) "down"
  [1]=>
  string(2) "up"
}
int(200)
bool(true)
bool(true)
int(200)
bool(true)
bool(true)

