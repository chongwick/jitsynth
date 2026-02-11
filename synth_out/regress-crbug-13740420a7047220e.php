<?php
function f_0() {
    try {
        $var = -PHP_INT_MAX - 1;
        range($var,1,$var);
    } catch (Exception $e) {}
    if (true) {
        var_dump(scandir(''));
    }
}
$fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
$phar = new Phar($fname);
$phar->stopBuffering();
