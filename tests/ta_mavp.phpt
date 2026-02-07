--TEST--
ta_mavp() computes moving average with variable period
--SKIPIF--
<?php
if (!extension_loaded('ta')) {
    echo 'skip ta not loaded';
}
?>
--FILE--
<?php
$values = range(1, 60);
$periods = array_fill(0, 60, 10);
$res = ta_mavp($values, $periods, 2, 30, TA_MA_TYPE_SMA);
var_dump(count($res), $res[0] === null, is_float($res[59]));
?>
--EXPECT--
int(60)
bool(true)
bool(true)
