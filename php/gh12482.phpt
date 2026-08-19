<?php
trait T {
	function foo() {
		$cloned = clone $this;
		$cloned->x = 42;
		return $cloned;
	}
}
class A {
	use T;
	public $a = 1;
	public $b = 2;
	public $c = 3;
	public $x = 4;
}
class B {
	use T;
	public $x = 5;
}
$a = new A;
var_dump($a->foo());
var_dump($a->foo());
$b = new B;
var_dump($b->foo());
?>
