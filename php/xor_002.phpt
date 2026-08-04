<?php
function foo($var) {
  $res = $var ^ $var;
  var_dump($res);
}
foo(5);
?>
