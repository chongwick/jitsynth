<?php
class Test {
    public $prop;
    public function &__get($name) {
        return $this->prop;
    }
}
function test() {
    $obj = new Test;
    $obj->x->y = 1;
}
function test2() {
    $obj = new Test;
    $obj->x->y += 1;
}
try {
    test();
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}
try {
    test2();
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}
?>
