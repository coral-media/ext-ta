--TEST--
ta_ht_trendline() throws when input is <= lookback
--SKIPIF--
<?php
if (!extension_loaded('ta')) {
    echo 'skip ta not loaded';
}
?>
--FILE--
<?php
$values = range(1, TA_HT_TRENDLINE_LOOKBACK);
try {
    ta_ht_trendline($values);
    echo "no exception\n";
} catch (Throwable $e) {
    echo $e->getMessage(), "\n";
}
?>
--EXPECT--
Input length must be > TA_HT_TRENDLINE_LOOKBACK (63)
