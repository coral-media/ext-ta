--TEST--
ta_floor() computes vector floor
--SKIPIF--
<?php
if (!extension_loaded('ta')) {
    echo 'skip ta not loaded';
}
?>
--FILE--
<?php
$values = [1.1, 2.2, 3.3, 4.4, 5.5];
$res = ta_floor($values);
var_dump(count($res), is_float($res[0]), is_float($res[4]));
?>
--EXPECT--
int(5)
bool(true)
bool(true)
