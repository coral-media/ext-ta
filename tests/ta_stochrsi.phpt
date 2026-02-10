--TEST--
ta_stochrsi() computes STOCHRSI
--SKIPIF--
<?php
if (!extension_loaded('ta_lib')) {
    echo 'skip ta_lib not loaded';
}
?>
--FILE--
<?php
$values = range(1, 200);
$res = ta_stochrsi($values);
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
