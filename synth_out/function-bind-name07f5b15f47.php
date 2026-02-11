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
function f_0() {
}
$pkcsfile = __DIR__ . "/openssl_pkcs7_verify__pkcsfile.tmp";
var_dump(sha1_file(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370_003' . DIRECTORY_SEPARATOR . 'testfile'));
ini_set('exif.decode_unicode_motorola', 'UCS-2LE');
$xml = '<?xml version="1.0" encoding="utf-8" ?>
<test>
</test>';
var_dump($sends1);
function f_1() {
}
$im = ImageCreateTrueColor(10, 10);
$color = ImageColorAllocateAlpha($im, 0, 0, 0, 1);
(new B)->foo();
$mysql = new my_mysqli($host, $user, $passwd, $db, $port, $socket);
$stmt = $mysql->prepare("SELECT id FROM temp");
$stmt->close();
