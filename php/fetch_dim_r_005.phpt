<?php
$gens = [];
for ($i = 0; $i < 5; $i++) {
    $gens[] = $gens[-1];
}
var_dump($gens);
?>
--EXPECTF--
Warning: Undefined array key -1 in %sfetch_dim_r_005.php on line 4

Warning: Undefined array key -1 in %sfetch_dim_r_005.php on line 4

Warning: Undefined array key -1 in %sfetch_dim_r_005.php on line 4

Warning: Undefined array key -1 in %sfetch_dim_r_005.php on line 4

Warning: Undefined array key -1 in %sfetch_dim_r_005.php on line 4
array(5) {
  [0]=>
  NULL
  [1]=>
  NULL
  [2]=>
  NULL
  [3]=>
  NULL
  [4]=>
  NULL
}
