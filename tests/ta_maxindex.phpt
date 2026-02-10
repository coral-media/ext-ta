--TEST--
ta_maxindex() computes highest value index over period
--SKIPIF--
<?php
if (!extension_loaded('ta_lib')) {
    echo 'skip ta_lib not loaded';
}
?>
--FILE--
<?php
$values = range(1, 60);
$res = ta_maxindex($values, 10);
var_dump(count($res), $res[0] === null, is_int($res[59]));
?>
--EXPECT--
int(60)
bool(true)
bool(true)
