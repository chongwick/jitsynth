<?php
function foo($a) {
    var_dump($a+$a=$a+$a=$a+$a=$a);
}
foo(PHP_INT_MAX);
?>
