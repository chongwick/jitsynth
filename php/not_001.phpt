<?php
function foo($x) {
	return !$x;
}
var_dump(foo(1));
var_dump(foo(0));
var_dump(foo(1.0));
var_dump(foo(0.0));
?>
