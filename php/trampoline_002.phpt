<?php
class A {
}
class B extends A {
	function foo() {
		echo "B";
	}
}
class C extends A {
	function __call($name, $argd) {
		echo "C";
	}
}
class D extends A {
	function foo() {
		echo "D";
	}
}
$b = new B;
$c = new C;
$d = new D;
$a = [$b, $b, $b, $c, $c, $c, $d, $d, $d, $c, $c, $c];
foreach ($a as $x) {
	$x->foo();
}
echo "\n";
?>
