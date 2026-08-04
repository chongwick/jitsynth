<?php
function foo($n) {
  $res = 0;
  for ($i = 1; $i < $n; $i++)
    $res = $res + $i;
  return $res;
}
print foo(5);
?>
