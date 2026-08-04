<?php
function foo() {
    $x = 1;
    ++$x; // reg -> mem
    var_dump($x);
}
foo();
?>
