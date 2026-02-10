<?php
function f_0() {
    function PostEvents($x) {
        var_dump($x);
        exit();
      return $x;
    }
    return $x;
}
for ($i_1 = 0; $i_1 < 10; $i_1++) {
    #[AllowDynamicProperties]
    class C {
        public int $a = 1;
        public function __construct() {
            var_dump(__METHOD__);
        }
    }
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
    $obj = $reflector->newLazyProxy(function ($obj) {
        var_dump("initializer");
        return new C();
    });
    $now = new DateTimeImmutable();
    $date = (new ReflectionClass(DateTime::class))->newInstanceWithoutConstructor();
    $dateperiod = (new ReflectionClass(DatePeriod::class))->newInstanceWithoutConstructor();
    $dateperiod->__unserialize(['start' => $now, 'end' => $now, 'current' => $date]);
}
