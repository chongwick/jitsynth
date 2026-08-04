<?php
function test() {
    1.5%2%2%2/2%2;
}
test();
?>
DONE
--EXPECTF--
Deprecated: Implicit conversion from float 1.5 to int loses precision in %smul_007.php on line 3

Deprecated: Implicit conversion from float 0.5 to int loses precision in %smul_007.php on line 3
DONE
