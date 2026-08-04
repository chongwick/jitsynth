<?php
function foo (?int $x = null) {
    $a = (array)$x;
    $a[] = 42;
    var_dump($a);
}
foo(null);
?>
