<?php
class C {
	function foo($x) {
		return $x;
	}
}
function foo($x) {
	return $x;
}
function test2($x) {
	return foo(foo($x));
}
function test1() {
	$x = new C;
	foo(foo($x->foo(foo(test2($x)))));
}
test1();
?>
DONE
