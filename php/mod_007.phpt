<?php
function test($a) {
    for(;$a < -2;) {
      $n % $n = $a + $a;
    }
}
test(null);
?>
--EXPECTF--
Fatal error: Uncaught DivisionByZeroError: Modulo by zero in %smod_007.php:4
Stack trace:
#0 %smod_007.php(7): test(NULL)
#1 {main}
  thrown in %smod_007.php on line 4
