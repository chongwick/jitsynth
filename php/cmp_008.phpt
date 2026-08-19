<?php
function test() {
    for ($i = 0; $i < 10; $i %= -4 != -4 < ($a = $a + $a)) {
    }
}
test();
?>
--EXPECTF--
Warning: Undefined variable $a in %scmp_008.php on line 3

Warning: Undefined variable $a in %scmp_008.php on line 3

Fatal error: Uncaught DivisionByZeroError: Modulo by zero in %scmp_008.php:3
Stack trace:
#0 %scmp_008.php(6): test()
#1 {main}
  thrown in %scmp_008.php on line 3
