<?php
class C {
	public static function foo() {
		$f = function() {
			return call_user_func(self::bar(), 1, 2, 3, 4, 5);
		};
		return $f();
	}
	public static function bar() {
		return function($a, $b, $c, $d, $e) {return $a + $b + $c + $d + $e;};
	}
}
var_dump(C::foo());
?>
