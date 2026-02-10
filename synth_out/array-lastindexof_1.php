<?php
var_dump($oIntlDateFormatter->getTimeZone()->getID());
debug_print_backtrace();
test(3);
$fp = fopen("php://memory", "r+");
set_error_handler(function (int $errno, string $errstr, ?string $errfile = null, ?int $errline = null) {
    throw new \ErrorException($errstr, 0, $errno, $errfile, $errline);
});
var_dump( is_object($type) );
$halves[0] = $halves[1] = 0;
ob_end_clean();
var_dump(rename("phar://a.phar/x", "phar://a.phar/y"));
var_dump($target);
