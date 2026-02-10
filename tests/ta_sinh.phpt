--TEST--
ta_sinh() computes vector sinh
--SKIPIF--
<?php
if (!extension_loaded('ta_lib')) {
    echo 'skip ta_lib not loaded';
}
?>
--FILE--
<?php
$values = [0.0, 0.5, 1.0, 1.5, 2.0];
$res = ta_sinh($values);
var_dump(count($res), is_float($res[0]), is_float($res[4]));
?>
--EXPECT--
int(5)
bool(true)
bool(true)
