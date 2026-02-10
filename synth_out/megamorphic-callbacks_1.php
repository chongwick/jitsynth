<?php
function f_0() {
    return true;
}
function f_1() {
    $obj = $reflector->newLazyGhost(function ($obj) {
    throw new \Exception('Initializer');
}, ReflectionClass::SKIP_INITIALIZATION_ON_SERIALIZE);
}
function f_2() {
    return $x;
}
$arr = [$class];
$loop_counter++;
foo(false, true);
printf("Expecting pdo_type = 1 got %s\n", $tmp['pdo_type']);
var_dump ( rtrim("rtrim test        ", " ") );
$b = new SplObjectStorage();
$iterator++;
var_dump($fi->file($f));
printf("printf test 8:<%20s>\n", "foo");
unlink($contentfile);
var_dump(empty($obj[$name]));
ob_start();
$fmt = new NumberFormatter('en_US', NumberFormatter::DECIMAL);
stream_wrapper_register('dummy', DummyWrapper::class);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
var_dump(pcntl_wexitstatus($status));
array_walk_recursive($arr,
    function (&$value, $key) use(&$arr) {
        var_dump($key);
        unset($arr[$key]);
    }
);
$db->exec("INSERT INTO test_80908 (`name`) VALUES ('bar')");
