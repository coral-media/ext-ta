--TEST--
ta_midprice() computes midpoint price over period
--SKIPIF--
<?php
if (!extension_loaded('ta_lib')) {
    echo 'skip ta_lib not loaded';
}
?>
--FILE--
<?php
$values = range(1, 60);
$high = array_map(fn($v) => $v + 1, $values);
$low = $values;
$res = ta_midprice($high, $low, 10);
var_dump(count($res), $res[0] === null, is_float($res[59]));
?>
--EXPECT--
int(60)
bool(true)
bool(true)
