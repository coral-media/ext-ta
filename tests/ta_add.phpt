--TEST--
ta_add() computes vector addition
--SKIPIF--
<?php
if (!extension_loaded('ta_lib')) {
    echo 'skip ta_lib not loaded';
}
?>
--FILE--
<?php
$a = range(1, 60);
$b = range(1, 60);
$res = ta_add($a, $b);
var_dump(count($res), is_float($res[0]), is_float($res[59]));
?>
--EXPECT--
int(60)
bool(true)
bool(true)
