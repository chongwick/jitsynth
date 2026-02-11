<?php
function test(string $name, object $obj) {
    printf("# %s\n", $name);

    $reflector = new ReflectionClass(C::class);
    try {
        $reflector->initializeLazyObject($obj);
    } catch (Exception $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }

    try {
        var_dump(unserialize(serialize($obj)));
    } catch (Exception $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
}
set_error_handler(function($_, $m) { throw new Exception($m); });
$reflector = new ReflectionClass(C::class);
$obj = $reflector->newLazyGhost(function ($obj) {
    throw new \Exception('Initializer');
}, ReflectionClass::SKIP_INITIALIZATION_ON_SERIALIZE);
$user = PDO_MYSQL_TEST_USER;
function f_0() {
    return true;
}
$dom = new DOMDocument('1.0', 'UTF-8');
$formatter = new \NumberFormatter('en', \NumberFormatter::DECIMAL);
$value = $formatter->parse('2147483650', \NumberFormatter::TYPE_INT64);
var_dump($value);
