<?php

class C {
    public static $prop;

    public function __get($name) {
        C::$prop = null;
    }

    public function __destruct() {
        echo __METHOD__, "\n";
    }
}

function test() {
    C::$prop = new C();
    C::$prop->bar;
}

test();
echo "Done\n";

?>
