<?php
class Foo {
    public int $bar=0;
    function __construct() {
        try {
            +$this->bar += 1.3;
        } catch(y) {
        }
    }
}
var_dump(new Foo);
?>
--EXPECTF--
Deprecated: Implicit conversion from float 1.3 to int loses precision in %sassign_obj_op_003.php on line 6
object(Foo)#1 (1) {
  ["bar"]=>
  int(1)
}
