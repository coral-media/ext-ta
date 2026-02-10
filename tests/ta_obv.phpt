--TEST--
ta_obv() computes On Balance Volume
--SKIPIF--
<?php
if (!extension_loaded('ta_lib')) {
    echo 'skip ta_lib not loaded';
}
?>
--FILE--
<?php
$values = range(1, 60);
$volume = array_fill(0, 60, 1000);
$res = ta_obv($values, $volume);
var_dump(count($res), is_float($res[0]), is_float($res[59]));
?>
--EXPECT--
int(60)
bool(true)
bool(true)
