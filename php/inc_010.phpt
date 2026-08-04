<?php
function foo() {
    $x = 1.0;
    ++$x; // reg -> mem
    var_dump($x);
}
foo();
?>
