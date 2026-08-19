<?php
function foo(float $x) {
	return !$x;
}
var_dump(foo(1.0));
var_dump(foo(0.0));
?>
