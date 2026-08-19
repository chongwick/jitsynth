<?php
function foo() {
    $a = array();
    $b = 2;
    $c = $a = $b;
    var_dump($c);
}
foo();
?>
