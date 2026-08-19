<?php
function foo($var) {
  $res = $var + 2;
  var_dump($res);
}
foo("hello");
?>
--EXPECTF--
Fatal error: Uncaught TypeError: Unsupported operand types: string + int in %s:%d
Stack trace:
#0 %s(%d): foo('hello')
#1 {main}
  thrown in %s on line %d
