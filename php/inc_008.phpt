<?php
function foo() {
    $x = 1;
    return ++$x; // reg -> reg, reg
}
var_dump(foo());
?>
