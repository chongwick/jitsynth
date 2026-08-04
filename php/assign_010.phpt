<?php
function foo() {
    $a = array();
    $b =& $a;
    $a = $b;
}
foo();
echo "ok\n";
?>
