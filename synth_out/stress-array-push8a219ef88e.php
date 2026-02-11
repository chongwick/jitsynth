<?php
class A {
    private static $x = 1;
}
class C extends A {
    function bar() {
        var_dump(A::$x);
    }
}
$a = array(1,2,3);
$s1 = "some string";
$c = $a + $s1;
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    if (true) {
        $b = new C;
    }
    $im = imagecreate(800, 800);
    imagepalettetotruecolor($im);
}
