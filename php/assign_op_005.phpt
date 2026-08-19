<?php
$a = ["xy" => 0];
$x = "";
$a["x{$x}y"] %= 0;
?>
--EXPECTF--
Fatal error: Uncaught DivisionByZeroError: Modulo by zero in %sassign_op_005.php:4
Stack trace:
#0 {main}
  thrown in %sassign_op_005.php on line 4
