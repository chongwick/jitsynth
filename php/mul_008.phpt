<?php
function foo(int $a){
    $a=$a%10;
    $a=$f=$a*(6158978401740);
    $a=$f=$a*(261740);
    $a%0;
}
foo(3);
?>
--EXPECTF--
Fatal error: Uncaught DivisionByZeroError: Modulo by zero in %smul_008.php:6
Stack trace:
#0 %smul_008.php(8): foo(%d)
#1 {main}
  thrown in %smul_008.php on line 6
