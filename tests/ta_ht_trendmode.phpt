--TEST--
ta_ht_trendmode() computes trend vs cycle mode
--SKIPIF--
<?php
if (!extension_loaded('ta_lib')) {
    echo 'skip ta_lib not loaded';
}
?>
--FILE--
<?php
$values = range(1, 160);
$res = ta_ht_trendmode($values);
var_dump(count($res), $res[0] === null, is_int($res[159]));
?>
--EXPECT--
int(160)
bool(true)
bool(true)
