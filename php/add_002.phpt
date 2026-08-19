<?php
function foo($var) {
  $res = $var + 0x1000;
  var_dump($res);
}
foo(1);
?>
