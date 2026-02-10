<?php
$max = 0x66666666;
try {
    $r = new ResourceBundle( 'en_US', BUNDLE );
    $r2 = $r['testtable'];
    printf( "testtable: %d\n", $r2['major'] );
    function test(#[SensitiveParameter] $sensitive)
    {
        debug_print_backtrace();
        var_dump(debug_backtrace());
        var_dump((new Exception)->getTrace());
    }
    test('sensitive');
} catch (Exception $e) {}
if (true) {
    class Foo {
        public $bar = [] {
            &get {
                echo __METHOD__ . "\n";
                return $this->bar;
            }
        }
    }
    $foo = new Foo;
    $foo->bar[] = 'bar';
    class A {
        private static $x = 1;
    }
    class C extends A {
        function bar() {
            var_dump(A::$x);
        }
    }
    $b = new C;
    $b->bar();
}
var_dump(http_get_last_response_headers());
