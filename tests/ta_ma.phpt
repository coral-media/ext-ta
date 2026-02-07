--TEST--
ta_ma() computes moving average
--SKIPIF--
<?php
if (!extension_loaded('ta')) {
    echo 'skip ta not loaded';
}
?>
--FILE--
<?php
$values = range(1, 60);
$res = ta_ma($values, 10, TA_MA_TYPE_SMA);
var_dump(count($res), $res[0] === null, is_float($res[59]));
?>
--EXPECT--
int(60)
bool(true)
bool(true)
