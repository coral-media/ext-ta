--TEST--
ta_version() returns a string
--SKIPIF--
<?php
if (!extension_loaded('ta_lib')) {
    echo 'skip ta_lib not loaded';
}
?>
--FILE--
<?php
var_dump(is_string(ta_version()));
?>
--EXPECT--
bool(true)
