--TEST--
ta_var() computes VAR
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
$res = ta_var($values);
var_dump(count($res), $res[0] === null, is_float($res[199]));

?>
--EXPECT--
int(200)
bool(true)
bool(true)

