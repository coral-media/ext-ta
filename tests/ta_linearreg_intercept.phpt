--TEST--
ta_linearreg_intercept() computes LINEARREG_INTERCEPT
--SKIPIF--
<?php
if (!extension_loaded('ta_lib')) {
    echo 'skip ta_lib not loaded';
}
?>
--FILE--
<?php
$values = range(1, 200);
$values_b = array_map(fn($v) => $v * 2, $values);
$res = ta_linearreg_intercept($values);
var_dump(count($res), $res[0] === null, is_float($res[199]));

?>
--EXPECT--
int(200)
bool(true)
bool(true)

