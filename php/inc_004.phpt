<?php
function foo() {
    $x = 1;
    ++$x; // reg -> reg
    return $x;
}
var_dump(foo());
?>
