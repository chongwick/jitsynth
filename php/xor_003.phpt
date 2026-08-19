<?php
function foo($a, $b) {
  $res = $a ^ $b;
  var_dump($res);
}
foo("abc", "\001\002\003");
?>
