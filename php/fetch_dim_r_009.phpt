<?php
$ary = [[0]];
for ($i = 2; $i < 5; $i++) {
    var_dump($ary[0][$i>>1]);
    $ary[0][$i] = 1;
}
?>
--EXPECTF--
Warning: Undefined array key 1 in %sfetch_dim_r_009.php on line 4
NULL

Warning: Undefined array key 1 in %sfetch_dim_r_009.php on line 4
NULL
int(1)
