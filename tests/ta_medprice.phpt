--TEST--
ta_medprice() computes median price
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
$res = ta_medprice($high, $low);
var_dump(count($res), is_float($res[0]), is_float($res[59]));
?>
--EXPECT--
int(60)
bool(true)
bool(true)
