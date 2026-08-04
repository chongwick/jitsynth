<?php
class Foo {
    const X = false;

    static function bar() {
        $count = 0;
        if (self::X) {
            $count = intval(9223372036854775807);
        }
        if (self::X) {
           $count = 2;
        }
        if ($count != 0) {
            return "bug";
        }
        return "ok";
    }
}
var_dump(Foo::bar());
?>
