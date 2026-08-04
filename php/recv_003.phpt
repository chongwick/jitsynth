<?php
class A {
}
class B extends A {
}
class C {
}

function test(A $x)
{
	echo "ok\n";
}

test(new B);
test(new C);
?>
--EXPECTF--
ok

Fatal error: Uncaught TypeError: test(): Argument #1 ($x) must be of type A, C given, called in %s:9
Stack trace:
#0 %s(15): test(Object(C))
#1 {main}
  thrown in %s on line 9
