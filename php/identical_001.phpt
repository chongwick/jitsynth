<?php
function foo($a, $b) {
	return $a === $b;
}
var_dump(foo(0, 0));
var_dump(foo(0, 1));
var_dump(foo(0, 0.0));
var_dump(foo(0.0, 0.0));
var_dump(foo(0.0, 1.0));
var_dump(foo("ab", "ab"));
var_dump(foo("ab", "cd"));
?>
