<?php
function f_0() {
    $a = date_create("2009-01-01", null);
    $a = NULL;
    class Foo {
        var $bar = array();
    
        static function bar() {
            static $instance = null;
            $instance = new Foo();
            return $instance->bar;
        }
    }
    $instance = new Foo();
}
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt', Pdo::class, true);
$db = PDOTest::factory();
$db->beginTransaction();
$cfg['main'] = <<<EOT
[global]
error_log = {{FILE:LOG}}
log_level = notice
include = {{INCLUDE:CONF}}
EOT;
class Box {
    public ?Test $value;
}
global $box;
function test($box) {
    var_dump($box->value = new Test);
}
$box = new Box();
test($box);
