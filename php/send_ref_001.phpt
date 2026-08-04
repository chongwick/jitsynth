<?php
function foo(&$obj) {
}
class A {
	function foo() {
		for ($i = 0; $i < 10; $i++) {
			foo($this);
		}
		echo "ok\n";
	}
}
$a = new A;
$a->foo();
?>
