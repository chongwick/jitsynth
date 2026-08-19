<?php
function &foo() {
    $a = array(1);
    return $a[-1];
}

var_dump(foo());
?>
