<?php
class F {
    static array $a;
}
F::$a[] = 2;
var_dump(F::$a);
?>
