<?php
$a = [];
$k = "0";
$a[$k]++;
var_dump($a[$k]);
?>
--EXPECTF--
Warning: Undefined array key 0 in %sfetch_dim_rw_002.php on line 4
int(1)
