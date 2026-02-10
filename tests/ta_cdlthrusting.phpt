--TEST--
ta_cdlthrusting() computes CDLTHRUSTING
--SKIPIF--
<?php
if (!extension_loaded('ta_lib')) {
    echo 'skip ta_lib not loaded';
}
?>
--FILE--
<?php
$values = range(1, 200);
$open = $values;
$high = array_map(fn($v) => $v + 1, $values);
$low = array_map(fn($v) => $v - 1, $values);
$close = array_map(fn($v) => $v + 0.5, $values);
$res = ta_cdlthrusting($open, $high, $low, $close);
var_dump(count($res), $res[0] === null, is_int($res[199]));

?>
--EXPECT--
int(200)
bool(true)
bool(true)

