<?php
class Foo {
    public $dummy1;
    public $dummy2;
}
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
$i = 1;
$c = $i < 2;
$f = new Foo;
$w = new Phar(__DIR__ . "/bug69279.phar.zip");
$w["bug69279.txt"] = "Sample content.";
$bert = "file://" . __DIR__ . "/bug41033.pem";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_CLIENT, array($cpca), $utfl));
$reflector = new ReflectionClass(C::class);
$obj = $reflector->newLazyGhost(function ($obj) {
    var_dump("initializer");
    $obj->__construct(1);
});
$obj = $reflector->newLazyProxy(function ($obj) {
    var_dump("initializer");
    return new C(1);
});
$db = PDOTest::test_factory(dirname(__FILE__) . '/common.phpt');
$i = 1;
$c = $i < 2;
