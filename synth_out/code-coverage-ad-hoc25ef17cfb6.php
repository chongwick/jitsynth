<?php
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
function test(array... $args) {
    var_dump($args);
}
$outfile = tempnam(sys_get_temp_dir(), "ssl");
unlink($outfile);
$code = null;
$err = null;
pfsockopen('udp://127.0.0.1', '63844', $code, $err, INF);
(new B)->bar();
var_dump($args);
test('<?php echo "1";//22');
