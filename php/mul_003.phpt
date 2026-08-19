<?php

function mul2_bound(int $a) {
  $res = $a * -2147483648;
  var_dump($res);
}

function mul1_bound(int $a) {
  $res = -2147483648 * $a;
  var_dump($res);
}

mul2_bound(3);
mul1_bound(3);
?>
