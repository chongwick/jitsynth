<?php
function foo() {
    $a[0][0] += 2;
    return $a[0];
}
var_dump(foo());
?>
--EXPECTF--
Warning: Undefined variable $a in %s on line %d

Warning: Undefined array key 0 in %sfetch_dim_rw_001.php on line 3

Warning: Undefined array key 0 in %sfetch_dim_rw_001.php on line 3
array(1) {
  [0]=>
  int(2)
}
