<?php
function foo() {
    return match($y){1,6=>0};
}
foo();
?>
--EXPECTF--
Warning: Undefined variable $y in %smatch_001.php on line 3

Fatal error: Uncaught UnhandledMatchError: Unhandled match case NULL in %smatch_001.php:3
Stack trace:
#0 %smatch_001.php(5): foo()
#1 {main}
  thrown in %smatch_001.php on line 3
