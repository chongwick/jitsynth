<?php
function foo() {
  var_dump("hello");
}
try {
    set_error_handler(function (int $errno, string $errstr, ?string $errfile = null, ?int $errline = null) {
        throw new \ErrorException($errstr, 0, $errno, $errfile, $errline);
    });
    foo();
} catch (Exception $e) {}
if (true) {
}
