<?php
function foo($var) {
  $ret = $var + 200;
  var_dump($ret);
}
foo(PHP_INT_MAX);
?>
