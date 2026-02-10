--TEST--
ta_atan() computes vector atan
--SKIPIF--
<?php
if (!extension_loaded('ta_lib')) {
    echo 'skip ta_lib not loaded';
}
?>
--FILE--
<?php
$values = [-1.0, -0.5, 0.0, 0.5, 1.0];
$res = ta_atan($values);
var_dump(count($res), is_float($res[0]), is_float($res[4]));
?>
--EXPECT--
int(5)
bool(true)
bool(true)
