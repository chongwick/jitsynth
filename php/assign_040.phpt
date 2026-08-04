<?php
class Test {
    public string $x;
}
function test() {
    $test = new Test;
    $test->x = "";
    $r =& $test->x;
    +($r = $y);
}
try {
    test();
} catch (TypeError $e) {
    echo $e->getMessage(), "\n";
}
?>
--EXPECTF--
Warning: Undefined variable $y in %s on line %d
Cannot assign null to reference held by property Test::$x of type string
