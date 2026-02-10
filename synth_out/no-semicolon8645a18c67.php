<?php
function f_0() {
    return 0;
}
function f_1() {
    return "Class A object";
}
class C extends stdClass {
    public int $a;
}
$reflector = new ReflectionClass(C::class);
$obj = new C();
$reflector->resetAsLazyProxy($obj, function () {
    return new C();
});
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
;

mkdir($d0);
;
for ($i_2 = 0; $i_2 < 10; $i_2++) {
}
$ch = curl_init();
curl_exec($ch);
for ($i_3 = 0; $i_3 < 10; $i_3++) {
}
set_exception_handler(function() {
    echo 'First handler' . PHP_EOL;
});
