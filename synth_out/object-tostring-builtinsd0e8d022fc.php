<?php
function test(object $obj) {
        $obj->a = 1;
    }
$reflector = new ReflectionClass(C::class);
$obj = $reflector->newLazyGhost(function ($obj) {
        var_dump("initializer");
        $obj->__construct();
    });
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
        $phar = new Phar($fname);
        $phar->stopBuffering();
        $originalEnvelopeData = "any string with \x1a is cut at this point.";
        $tmpFileIn = tempnam(sys_get_temp_dir(), 'test');
        var_dump(filesize($tmpFileIn) === strlen($originalEnvelopeData));
    }
}
