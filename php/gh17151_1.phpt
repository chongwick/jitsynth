<?php

class C {
    public function __get($name) {
        return $this;
    }
}

function test() {
    $x = (new C)->bar;
    var_dump($x);
}

test();

?>
--EXPECTF--
object(C)#%d (0) {
}
