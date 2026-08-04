<?php
class C {
    public ?C $prop = null;
}
function foo($obj) {
    $obj->prop->prop = null;
}

$obj = new C;
$obj->prop = new C;
for ($i = 0; $i < 10; $i++) {
    foo($obj);
}
var_dump($obj);
?>
