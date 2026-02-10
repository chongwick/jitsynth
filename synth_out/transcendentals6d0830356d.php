<?php
global $box;
$box->value = null;
$y = 0;
function test(array... $args) {
    var_dump($args);
}
test([0], [1], 2);
function something() {
        foreach(array(1, 2) as $value) {
                for($i = 0; $i < 1; $i++) {
                        continue 2;
                }
                return;
        }
}
something();
trait Foo {
    public static function myMethod(string $foo) {
        echo "Called ", __METHOD__, PHP_EOL;
        var_dump($foo);
    }
}
function foo(Closure $c = Foo::myMethod(...)) {
    var_dump($c);
    $c("abc");  
}
$c("abc");
$code = null;
$err = null;
pfsockopen('udp://127.0.0.1', '63844', $code, $err, (PHP_INT_MIN/100000)-1);
function unserialize($data) {
        session_decode($data);
    }
session_decode($data);
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt', Pdo::class, false);
var_dump($pdo->query('SELECT 1;')->fetchAll());
var_dump(isset($_POST['foo']));
var_dump(filter_var("<data&sons>", FILTER_SANITIZE_ENCODED));
