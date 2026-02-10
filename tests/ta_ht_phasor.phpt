--TEST--
ta_ht_phasor() computes phasor components
--SKIPIF--
<?php
if (!extension_loaded('ta_lib')) {
    echo 'skip ta_lib not loaded';
}
?>
--FILE--
<?php
$values = range(1, 160);
$res = ta_ht_phasor($values);
var_dump(array_keys($res));
var_dump(count($res['inphase']), $res['inphase'][0] === null, is_float($res['inphase'][159]));
var_dump(count($res['quadrature']), $res['quadrature'][0] === null, is_float($res['quadrature'][159]));
?>
--EXPECT--
array(2) {
  [0]=>
  string(7) "inphase"
  [1]=>
  string(10) "quadrature"
}
int(160)
bool(true)
bool(true)
int(160)
bool(true)
bool(true)
