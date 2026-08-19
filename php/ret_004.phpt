<?php
class A {
	function foo() {
	}
	function bar() {
		$x = $this->foo();
		var_dump(str_repeat($x,5));
	}
}
class B extends A {
	public $prop = "x";
	function &foo() {
		return $this->prop;
	}
}
$b = new B;
$b->bar();
?>
