--TEST--
ta_ht_sine() computes sine and lead sine
--SKIPIF--
<?php
if (!extension_loaded('ta')) {
    echo 'skip ta not loaded';
}
?>
--FILE--
<?php
$values = range(1, 160);
$res = ta_ht_sine($values);
var_dump(array_keys($res));
var_dump(count($res['sine']), $res['sine'][0] === null, is_float($res['sine'][159]));
var_dump(count($res['leadsine']), $res['leadsine'][0] === null, is_float($res['leadsine'][159]));
?>
--EXPECT--
array(2) {
  [0]=>
  string(4) "sine"
  [1]=>
  string(8) "leadsine"
}
int(160)
bool(true)
bool(true)
int(160)
bool(true)
bool(true)
