<?php
function Test($param) {
    global $g;
    $g = $param->strA."\n".$param->strB."\n";
    return $g;
}
#[\AllowDynamicProperties]
class C {
    public $b;
    public function __construct() {
        $this->a = new Canary();
    }
}
function f_0() {
    $reflector = new ReflectionClass(C::class);
    for ($i = 0; $i < 2; $i++) {
        $obj = $reflector->newLazyGhost(function ($obj) use ($i) {
            if ($i === 1) {
                throw new \Exception();
            }
        });
        $obj->c = 1;
    }
    $obj = $reflector->newLazyGhost(function ($obj) use ($i) {
            if ($i === 1) {
                throw new \Exception();
            }
        });
    $list = [];
    while (true) {
        break;  // avoid infinite loop
        var_dump(mysqli_get_server_version($link));
        if (true) {
            $g = $param->strA."\n".$param->strB."\n";
            return $g;
        }
        $obj = new C();
    }
}
c1::$a1[] = 1;
