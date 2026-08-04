<?php
class Test {
    readonly array $prop;
}

$test = new Test;

try {
    throw new Exception;
} catch (Exception) {}

$appendProp2 = (function() {
    $this->prop[] = 1;
})->bindTo($test, Test::class);
$appendProp2();
?>
--EXPECTF--
Fatal error: Uncaught Error: Cannot indirectly modify readonly property Test::$prop in %s:%d
Stack trace:
#0 %s(%d): Test->{closure:%s:%d}()
#1 {main}
  thrown in %sfetch_obj_006.php on line 13
