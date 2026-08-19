<?php
function test($a) {
    var_dump(1 - $a != 0);
}
for ($i = 0; $i < 5; $i++) {
	test(null);
}
?>
