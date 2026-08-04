<?php

class C {
    public static $prop;

    public function storeThis() {
        self::$prop = $this;
    }
}

function test() {
    $c = new C();
    $c->storeThis();
    $c = null;
}

test();

?>
===DONE===
