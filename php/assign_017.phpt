<?php
function foo() {
    $a = array();
    $b = 2;
    $c = $a = $b;
    return $c;
}
var_dump(foo());
?>
