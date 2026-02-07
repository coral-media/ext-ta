--TEST--
ta_cos() computes vector cos
--SKIPIF--
<?php
if (!extension_loaded('ta')) {
    echo 'skip ta not loaded';
}
?>
--FILE--
<?php
$values = [0.0, 0.5, 1.0, 1.5, 2.0];
$res = ta_cos($values);
var_dump(count($res), is_float($res[0]), is_float($res[4]));
?>
--EXPECT--
int(5)
bool(true)
bool(true)
