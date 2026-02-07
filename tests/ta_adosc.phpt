--TEST--
ta_adosc() computes Chaikin A/D Oscillator
--SKIPIF--
<?php
if (!extension_loaded('ta')) {
    echo 'skip ta not loaded';
}
?>
--FILE--
<?php
$values = range(1, 60);
$high = array_map(fn($v) => $v + 1, $values);
$low = $values;
$close = array_map(fn($v) => $v + 0.5, $values);
$volume = array_fill(0, 60, 1000);
$res = ta_adosc($high, $low, $close, $volume, 3, 10);
var_dump(count($res), $res[0] === null, is_float($res[59]));
?>
--EXPECT--
int(60)
bool(true)
bool(true)
