<?php
for ($i = 0; $i < 3; $i++) {
	$a =& $b;
	$a->p;
}
?>
--EXPECTF--
Warning: Attempt to read property "p" on null in %sfetch_obj_005.php on line 4

Warning: Attempt to read property "p" on null in %sfetch_obj_005.php on line 4

Warning: Attempt to read property "p" on null in %sfetch_obj_005.php on line 4
