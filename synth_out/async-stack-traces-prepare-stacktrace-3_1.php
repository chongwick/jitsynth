<?php
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug54028_2" . DIRECTORY_SEPARATOR;
function f_0() {
    return 0;
}
function f_1() {
    try {
        $s1 = "some string";
        echo $e->getMessage(), "\n";
    } catch (Exception $e) {}
    if (true) {
        return new Exception;
    }
}
var_dump($body->lookupNamespaceURI(""));
