<?php
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $func_ptrs = [
        'bug_gh9090_void_none_ptr',
        'bug_gh9090_void_int_char_ptr',
        'bug_gh9090_void_int_char_var_ptr',
        'bug_gh9090_void_char_int_ptr',
        'bug_gh9090_int_int_char_ptr',
    ];
    class TrampolineTest {
        public function __call(string $name, array $arguments) {
            echo 'Trampoline for ', $name, PHP_EOL;
        }
    }
    $o = new TrampolineTest();
    $callback2 = [$o, 'trampoline2'];
    $string = str_repeat("A", 1024);
    class C {
        public $a;
        public int $b = 1;
    
        public function __construct(int $a) {
            var_dump(__METHOD__);
            $this->a = $a;
            $this->b = 2;
        }
    }
    function test(string $name, object $obj) {
        printf("# %s:\n", $name);
    
        var_dump($obj);
        var_dump($obj->a);
        var_dump($obj);
    }
    $reflector = new ReflectionClass(C::class);
    $obj = $reflector->newLazyGhost(function ($obj) {
        var_dump("initializer");
        $obj->__construct(1);
    });
    $obj = $reflector->newLazyProxy(function ($obj) {
        var_dump("initializer");
        return new C(1);
    });
    test('Proxy', $obj);
}
