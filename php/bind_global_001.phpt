<?php
function foo($a = '') {
    global $a;
}
foo();
var_dump($a);
?>
