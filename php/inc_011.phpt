<?php
function foo() {
    $x = 1.0;
    $x += 0;
    ++$x; // mem -> reg
    return $x;
}
var_dump(foo());
?>
