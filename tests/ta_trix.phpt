--TEST--
ta_trix() computes TRIX
--SKIPIF--
<?php
if (!extension_loaded('ta')) {
    echo 'skip ta not loaded';
}
?>
--FILE--
<?php
$values = range(1, 200);
$open = $values;
$high = array_map(fn($v) => $v + 1, $values);
$low = array_map(fn($v) => $v - 1, $values);
$close = array_map(fn($v) => $v + 0.5, $values);
$volume = array_fill(0, 200, 1000);
$res = ta_trix($values);
var_dump(count($res), $res[0] === null, is_float($res[199]));

?>
--EXPECT--
int(200)
bool(true)
bool(true)

