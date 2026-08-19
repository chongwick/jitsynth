<?php
function foo() {
    $a = 1;
    $b = array();
    $c = $a = $b;
    var_dump($c);
}
foo();
?>
