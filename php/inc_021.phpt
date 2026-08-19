<?php
function inc(int|float $x) {
    return ++$x;
}
function dec(int|float $x) {
    return --$x;
}
var_dump(inc(PHP_INT_MAX));
var_dump(inc(1.1));
var_dump(dec(PHP_INT_MIN));
var_dump(dec(1.1));
?>
