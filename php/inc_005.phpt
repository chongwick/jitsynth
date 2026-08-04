<?php
function foo() {
    $x = 1;
    $x += 0;
    var_dump(++$x); // mem -> mem, mem
    var_dump($x);
}
foo();
?>
