<?php
function capture() {
    $GLOBALS["x"] = new Exception();
}
function test($a) {
    $a[1] = 1;
    $a[2] = 2;
    capture();
    $a[3] = 3;
    return $a;
}
var_dump(test([]));
?>
