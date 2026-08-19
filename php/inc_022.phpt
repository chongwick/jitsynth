<?php
function inc($x) {
    return ++$x;
}
function dec($x) {
    return --$x;
}
var_dump(inc("abc"));
var_dump(inc("5"));
var_dump(inc(1.1));
var_dump(dec("5"));
var_dump(dec(1.1));
?>
--EXPECTF--
Deprecated: Increment on non-numeric string is deprecated, use str_increment() instead in %s on line %d
string(3) "abd"
int(6)
float(2.1)
int(4)
float(0.10000000000000009)
