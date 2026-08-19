<?php
$a = 0;
for($i = 5; $i >= 0; $i--) {
    $a = 1 + ++$a - 5 % $i;
}
?>
--EXPECTF--
Fatal error: Uncaught DivisionByZeroError: Modulo by zero in %sreg_alloc_021.php:4
Stack trace:
#0 {main}
  thrown in %sreg_alloc_021.php on line 4
