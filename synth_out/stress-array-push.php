<?php
$unset_var = 10;
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    if (true) {
        $xmlstring = '<?xml version="1.0" encoding="UTF-8"?>
        <books></books>';
    }
    function test(object $obj) {
            $obj->a = 1;
        }
    $reflector = new ReflectionClass(C::class);
    $obj = $reflector->newLazyGhost(function ($obj) {
            var_dump("initializer");
            $obj->__construct();
        });
    $reflector->getMethod('test')->invoke($obj, $obj);
}
