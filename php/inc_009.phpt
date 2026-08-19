<?php
function foo() {
    $x = 1.0;
    $x += 0;
    ++$x; // mem -> mem
    var_dump($x);
}
foo();
?>
