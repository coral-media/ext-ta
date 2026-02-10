--TEST--
ta_stoch() computes STOCH
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
$res = ta_stoch($high, $low, $close);
var_dump(array_keys($res));
var_dump(count($res['slowk']), $res['slowk'][0] === null, is_float($res['slowk'][199]));
var_dump(count($res['slowd']), $res['slowd'][0] === null, is_float($res['slowd'][199]));
?>
--EXPECT--
array(2) {
  [0]=>
  string(5) "slowk"
  [1]=>
  string(5) "slowd"
}
int(200)
bool(true)
bool(true)
int(200)
bool(true)
bool(true)
