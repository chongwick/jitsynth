<?php
$reflector = new ReflectionClass(C::class);
try {
    $reflector->resetAsLazyProxy($obj, function ($obj) {
    });
} catch (Exception $e) {}
if (true) {
    printf("printf test 14:%c\n", 64);
}
openssl_seal($_, $_, $_, array_fill(0,64,0));
