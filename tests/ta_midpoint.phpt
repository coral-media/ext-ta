--TEST--
ta_midpoint() computes midpoint over period
--SKIPIF--
<?php
if (!extension_loaded('ta')) {
    echo 'skip ta not loaded';
}
?>
--FILE--
<?php
$values = range(1, 60);
$res = ta_midpoint($values, 10);
var_dump(count($res), $res[0] === null, is_float($res[59]));
?>
--EXPECT--
int(60)
bool(true)
bool(true)
