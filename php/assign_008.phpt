<?php
function foo() {
    $a = 1.0;
    $c = 2.0;
    $c = $a;
    var_dump($a);
}
foo();
?>
