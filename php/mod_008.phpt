<?php
function foo() {
    foo(1 / 0 % 0);
};
@foo();
?>
--EXPECTF--
Fatal error: Uncaught DivisionByZeroError: Division by zero in %smod_008.php:3
Stack trace:
#0 %smod_008.php(5): foo()
#1 {main}
  thrown in %smod_008.php on line 3
