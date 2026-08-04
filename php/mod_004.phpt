<?php
$a = [];
$b = "";
$a["x{$b}y"] %= 0;
?>
--EXPECTF--
Warning: Undefined array key "xy" in %smod_004.php on line 4

Fatal error: Uncaught DivisionByZeroError: Modulo by zero in %smod_004.php:4
Stack trace:
#0 {main}
  thrown in %smod_004.php on line 4
