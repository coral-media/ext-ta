--TEST--
ta_macdext() computes MACDEXT
--SKIPIF--
<?php
if (!extension_loaded('ta_lib')) {
    echo 'skip ta_lib not loaded';
}
?>
--FILE--
<?php
$values = range(1, 200);
$res = ta_macdext($values);
var_dump(array_keys($res));
var_dump(count($res['macd']), $res['macd'][0] === null, is_float($res['macd'][199]));
var_dump(count($res['signal']), $res['signal'][0] === null, is_float($res['signal'][199]));
var_dump(count($res['hist']), $res['hist'][0] === null, is_float($res['hist'][199]));
?>
--EXPECT--
array(3) {
  [0]=>
  string(4) "macd"
  [1]=>
  string(6) "signal"
  [2]=>
  string(4) "hist"
}
int(200)
bool(true)
bool(true)
int(200)
bool(true)
bool(true)
int(200)
bool(true)
bool(true)
