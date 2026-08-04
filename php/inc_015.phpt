<?php
function foo() {
    $x = 1.0;
    $x += 0;
    return ++$x; // mem -> reg, reg
}
var_dump(foo());
?>
