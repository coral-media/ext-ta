--TEST--
ta_ceil() computes vector ceil
--SKIPIF--
<?php
if (!extension_loaded('ta_lib')) {
    echo 'skip ta_lib not loaded';
}
?>
--FILE--
<?php
$values = [1.1, 2.2, 3.3, 4.4, 5.5];
$res = ta_ceil($values);
var_dump(count($res), is_float($res[0]), is_float($res[4]));
?>
--EXPECT--
int(5)
bool(true)
bool(true)
