<?php
function foo() {
    $y === $y;
}
foo();
?>
DONE
--EXPECTF--
Warning: Undefined variable $y in %sidentical_004.php on line 3

Warning: Undefined variable $y in %sidentical_004.php on line 3
DONE
