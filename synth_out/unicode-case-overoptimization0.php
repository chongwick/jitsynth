<?php
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $list = [];
    $reflector = new ReflectionClass(C::class);
    $obj = $reflector->newLazyGhost(function () {
        throw new \Exception('initializer');
    });
    $after = memory_get_usage();
    $tmpFileOut2 = tempnam(sys_get_temp_dir(), 'test');
    unlink($tmpFileOut2);
}
