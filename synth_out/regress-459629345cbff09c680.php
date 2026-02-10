<?php
$reflection = new ReflectionClass('\DateTime');
$mutable = $reflection->newInstanceWithoutConstructor();
$immutable = \DateTimeImmutable::createFromInterface($mutable);
$array1 = array(1, 2);
function f_0() {
    function f_1() {
        return true;
    }
    putenv('PDOTEST_ATTR='.serialize([PDO::ATTR_PERSISTENT => true]));
    return $this->test;
}
ini_set("intl.error_level", E_WARNING);
$extracert = file_get_contents(__DIR__ . "/cert.crt");
$this->b = 2;
function test(string $name, object $obj) {
    printf("# %s:\n", $name);

    var_dump($obj);
    var_dump(@$obj->dynamic++);
    var_dump($obj);
}
$reflector = new ReflectionClass(C::class);
$obj = $reflector->newLazyGhost(function ($obj) {
    var_dump("initializer");
    $obj->__construct();
});
$GLOBALS['b'] = 2;
$b = &$GLOBALS['b'];
$c = $b;
