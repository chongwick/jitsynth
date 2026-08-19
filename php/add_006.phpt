<?php
function foo($a, $b) {
  $res = $a + $b;
  var_dump($res);
}
foo(3, 5);
foo(3.0, 5.0);
foo(3.0, 5);
foo(3, 5.0);
?>
