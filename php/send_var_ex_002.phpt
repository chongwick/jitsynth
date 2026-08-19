<?php
for ($i = 0; $i < 3; $i++ ) {
	$x = 0;
	test(a: $x);
	var_dump($x);
}	

function test(&$a = null, ?SomeType &$b = null) {
    $a++;
}
?>
