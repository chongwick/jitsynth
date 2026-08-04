<?php
function test1($a) {
    $a %= 0;
}
function test2($a) {
    $a <<= -1;
}
try {
    test1(1);
} catch (DivisionByZeroError $e) {
    echo $e->getMessage(), "\n";
}
try {
    test2(1);
} catch (ArithmeticError $e) {
    echo $e->getMessage(), "\n";
}
?>
