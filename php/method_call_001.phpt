<?php
function &foo() {
	return A::$o;
}
class A {
	static $o = null;
	static function foo() {
		return foo()->bar();
	}
	static function loop() {
		for ($i = 0; $i < 10; $i++) {
			self::foo();
		}
		echo "ok\n";
	}
}
class B {
	function bar() {
	}
}
A::$o = new B;
A::loop();
?>
