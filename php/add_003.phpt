<?php
function foo($var) {
  $ret = $var + 1;
  var_dump($ret);
}
foo(PHP_INT_MAX);
?>
