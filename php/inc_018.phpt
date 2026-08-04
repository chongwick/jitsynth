<?php
function foo() {
    $x = false;
    return ++$x; // reg -> reg, reg
}
var_dump(foo());
?>
--EXPECTF--
Warning: Increment on type bool has no effect, this will change in the next major version of PHP in %sinc_018.php on line 4
bool(false)
