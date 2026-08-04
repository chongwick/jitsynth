<?php
function test() {
	$a['x'][1] = true;
	for ($i = 0; $i < 3; $i++) {
		var_dump($a['x'][0]);
	}
}
test();
?>
DONE
--EXPECTF--
Warning: Undefined array key 0 in %sfetch_dim_r_006.php on line 5
NULL

Warning: Undefined array key 0 in %sfetch_dim_r_006.php on line 5
NULL

Warning: Undefined array key 0 in %sfetch_dim_r_006.php on line 5
NULL
DONE
