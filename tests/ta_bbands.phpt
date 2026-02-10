--TEST--
ta_bbands() computes Bollinger Bands
--SKIPIF--
<?php
if (!extension_loaded('ta_lib')) {
    echo 'skip ta_lib not loaded';
}
?>
--FILE--
<?php
$values = range(1, 60);
$res = ta_bbands($values, 10);
var_dump(array_keys($res));
var_dump(count($res['upper']), $res['upper'][0] === null, is_float($res['upper'][59]));
var_dump(count($res['middle']), $res['middle'][0] === null, is_float($res['middle'][59]));
var_dump(count($res['lower']), $res['lower'][0] === null, is_float($res['lower'][59]));
?>
--EXPECT--
array(3) {
  [0]=>
  string(5) "upper"
  [1]=>
  string(6) "middle"
  [2]=>
  string(5) "lower"
}
int(60)
bool(true)
bool(true)
int(60)
bool(true)
bool(true)
int(60)
bool(true)
bool(true)
