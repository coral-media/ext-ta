--TEST--
ta_asin() computes vector asin
--SKIPIF--
<?php
if (!extension_loaded('ta')) {
    echo 'skip ta not loaded';
}
?>
--FILE--
<?php
$values = [-1.0, -0.5, 0.0, 0.5, 1.0];
$res = ta_asin($values);
var_dump(count($res), is_float($res[0]), is_float($res[4]));
?>
--EXPECT--
int(5)
bool(true)
bool(true)
