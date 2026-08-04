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
$b = new B;
$c = new C;
$a = [$b, $b, $b, $c, $c, $c];
foreach ($a as $x) {
	$x->foo();
}
echo "\n";
?>
