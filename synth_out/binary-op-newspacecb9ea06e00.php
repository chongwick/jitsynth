<?php
function test(string $name, object $obj) {
    printf("# %s:\n", $name);

    var_dump($obj);
    var_dump($obj->a);
    var_dump($obj);
}
function gen() {
    yield 0;
    yield from gen();
}
function bar($gen) {
    yield from $gen;
}
function boo(){
    debug_print_backtrace();
}
function f_0() {
    return new Exception;
}
function f_1() {
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        $test_array = array(1, array(1 => "one", "two" => 2, "" => "f") );
        var_dump( end($test_array[1]) );
    }
}
$reflector = new ReflectionClass(C::class);
$obj = $reflector->newLazyGhost(function ($obj) {
    var_dump("initializer");
    $obj->__construct(1);
});
test('Ghost', $obj);
function f_3() {
    return [];
}
function f_4() {
    $gen = gen();
    $a = bar($gen);
    $arr  = array("test");
    list($c,$d) = is_array($arr)?: NULL;
    for ($i_5 = 0; $i_5 < 10; $i_5++) {
        $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
        $pdo->setAttribute(PDO::ATTR_PREFETCH, 0);
    }
}
boo();
