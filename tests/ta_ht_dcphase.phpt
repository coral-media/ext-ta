--TEST--
ta_ht_dcphase() computes dominant cycle phase
--SKIPIF--
<?php
if (!extension_loaded('ta')) {
    echo 'skip ta not loaded';
}
?>
--FILE--
<?php
$values = range(1, 160);
$res = ta_ht_dcphase($values);
var_dump(count($res), $res[0] === null, is_float($res[159]));
?>
--EXPECT--
int(160)
bool(true)
bool(true)
