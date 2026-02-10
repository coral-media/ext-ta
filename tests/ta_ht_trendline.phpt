--TEST--
ta_ht_trendline() computes Hilbert Transform trendline
--SKIPIF--
<?php
if (!extension_loaded('ta_lib')) {
    echo 'skip ta_lib not loaded';
}
?>
--FILE--
<?php
$values = range(1, 160);
$res = ta_ht_trendline($values);
var_dump(count($res), $res[0] === null, is_float($res[159]));
?>
--EXPECT--
int(160)
bool(true)
bool(true)
