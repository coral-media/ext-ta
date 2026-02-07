--TEST--
ta_log10() computes vector log10
--SKIPIF--
<?php
if (!extension_loaded('ta')) {
    echo 'skip ta not loaded';
}
?>
--FILE--
<?php
$values = [0.5, 1.0, 1.5, 2.0, 2.5];
$res = ta_log10($values);
var_dump(count($res), is_float($res[0]), is_float($res[4]));
?>
--EXPECT--
int(5)
bool(true)
bool(true)
