<?php
function foo() {
    $x = true;
    return ++$x; // reg -> reg, reg
}
var_dump(foo());
?>
--EXPECTF--
Warning: Increment on type bool has no effect, this will change in the next major version of PHP in %sinc_017.php on line 4
bool(true)
