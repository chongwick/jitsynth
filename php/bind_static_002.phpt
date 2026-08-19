<?php
function test($n) {
    static $x = array(A);
	return isset($x[$n]); 
}
define("A", 42);
for ($i = 0; $i < 5; $i++) {
	var_dump(test(0));
}
?>
