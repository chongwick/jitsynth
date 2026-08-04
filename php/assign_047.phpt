<?php
function test(){
	$x = (object)['x'=>0];
	for($i=0;$i<10;$i++){
		+$a;
		$a=$x->x;
		$a=7;
	}
}
test()
?>
DONE
--EXPECTF--
Warning: Undefined variable $a in %sassign_047.php on line 5
DONE
