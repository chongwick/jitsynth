<?php
function &test() { return $x; }
test()[1];
?>
DONE
--EXPECTF--
Warning: Trying to access array offset on null in %sfetch_dim_r_008.php on line 3
DONE
