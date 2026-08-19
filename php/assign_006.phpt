<?php
function foo() {
    $a = array();
    $c = array();
    $a = 1;
    $c = $a;
    return $c;
}
var_dump(foo());
?>
