--TEST--
ta_version() returns a string
--SKIPIF--
<?php
if (!extension_loaded('ta')) {
    echo 'skip ta not loaded';
}
?>
--FILE--
<?php
var_dump(is_string(ta_version()));
?>
--EXPECT--
bool(true)
