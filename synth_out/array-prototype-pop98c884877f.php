<?php
class C {
    public int $a;
}
$filename = __DIR__ . '/_fromUri_custom_constructor.xml';
$reader = XMLReader::fromUri($filename);
$reader->close();
$reflector = new ReflectionClass(C::class);
$obj = new C();
$reflector->resetAsLazyProxy($obj, function ($obj) use ($reflector) {
    try {
        $reflector->resetAsLazyProxy($obj, function () { });
    } catch (Error $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
    try {
        $reflector->resetAsLazyGhost($obj, function () { });
    } catch (Error $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
    return new C();
});
