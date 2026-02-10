--TEST--
ta_stochf() computes STOCHF
--SKIPIF--
<?php
if (!extension_loaded('ta_lib')) {
    echo 'skip ta_lib not loaded';
}
?>
--FILE--
<?php
$values = range(1, 200);
$high = array_map(fn($v) => $v + 1, $values);
$low = array_map(fn($v) => $v - 1, $values);
$close = array_map(fn($v) => $v + 0.5, $values);
$res = ta_stochf($high, $low, $close);
var_dump(array_keys($res));
var_dump(count($res['fastk']), $res['fastk'][0] === null, is_float($res['fastk'][199]));
var_dump(count($res['fastd']), $res['fastd'][0] === null, is_float($res['fastd'][199]));
?>
--EXPECT--
array(2) {
  [0]=>
  string(5) "fastk"
  [1]=>
  string(5) "fastd"
}
int(200)
bool(true)
bool(true)
int(200)
bool(true)
bool(true)
