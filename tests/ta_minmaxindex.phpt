--TEST--
ta_minmaxindex() computes min/max indexes over period
--SKIPIF--
<?php
if (!extension_loaded('ta_lib')) {
    echo 'skip ta_lib not loaded';
}
?>
--FILE--
<?php
$values = range(1, 60);
$res = ta_minmaxindex($values, 10);
var_dump(array_keys($res));
var_dump(count($res['min']), $res['min'][0] === null, is_int($res['min'][59]));
var_dump(count($res['max']), $res['max'][0] === null, is_int($res['max'][59]));
?>
--EXPECT--
array(2) {
  [0]=>
  string(3) "min"
  [1]=>
  string(3) "max"
}
int(60)
bool(true)
bool(true)
int(60)
bool(true)
bool(true)
