<?php
class C {
    public function __toString() {
        global $c;
        $c = [];
        throw new Exception(__METHOD__);
    }
}
class D {
    public string $prop;
}
function f_0() {
    $c = new C();
    $d = new D();
    $d->prop = $c;
    $fixedArray = new SplFixedArray(1);
}
var_dump(soundex("Euler")       == soundex("Ellery"));
