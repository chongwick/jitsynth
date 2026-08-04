<?php
function foo() {
  $i = 1;
  $x = 2;
  var_dump($i=$x);
  return $i;
}
var_dump(foo());
?>
