<?php
$data = ["k" => 0, 1, 2, 3];
function f_0() {
    return "Object1";
}
function f_1() {
    try {
        $g = 'hi';
        echo "ok\n";
    } catch (Exception $e) {}
    if (true) {
        return 0;
    }
}
set_exception_handler(function() {
    echo 'Fourth handler' . PHP_EOL;
});
