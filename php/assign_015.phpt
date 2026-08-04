<?php
function foo() {
    $a = 1;
    $b = 2;
    $c = $a = $b;
    var_dump($c);
}
foo();
?>
