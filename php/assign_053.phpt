<?php
class Test {
    public string $x;
}
$test=new Test;
$test->x = " $y ";
$r = &$test->x + ($r = $y);
?>
--EXPECTF--
Warning: Undefined variable $y in %sassign_053.php on line 6

Warning: Undefined variable $y in %sassign_053.php on line 7

Fatal error: Uncaught TypeError: Cannot assign null to reference held by property Test::$x of type string in %sassign_053.php:7
Stack trace:
#0 {main}
  thrown in %sassign_053.php on line 7
