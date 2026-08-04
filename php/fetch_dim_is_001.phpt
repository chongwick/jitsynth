<?php
const A = [1];
A[-1][2]??$y;
?>
DONE
--EXPECTF--
Warning: Undefined variable $y in %sfetch_dim_is_001.php on line 3
DONE
