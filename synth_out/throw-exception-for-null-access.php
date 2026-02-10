<?php
$q = '009b3734fc9f7a4a9d6437ec314e0a78c2889af64b';
try {
    $tester = new FPM\Tester($cfg);
    $tester->start();
} catch (Exception $e) {}
if (true) {
    $g = 1;
    function get() {
        $t = new stdClass;
        $t->prop = $t;
        return $t;
    }
    var_dump(get());
}
class A {
    static function name() { return 'A'; }
    function foo() {
        $fn = function() { return static::name(); };
        echo static::name() . ' vs ' . $fn() . "\n";
    }
    function bar() {
        $fn = static function() { return static::name(); };
        echo static::name() . ' vs ' . $fn() . "\n";
    }
    static function baz() {
        $fn = function() { return static::name(); };
        echo static::name() . ' vs ' . $fn() . "\n";
    }
}
class B extends A {
    static function name() { return 'B'; }
}
(new B)->baz();
