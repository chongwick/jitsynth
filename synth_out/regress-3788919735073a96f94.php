<?php
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
$f = __DIR__ . DIRECTORY_SEPARATOR . "67647.mov";
function f_0() {
    $a = 1;
    return [0, $a];
}
function f_1() {
    $r = new ResourceBundle( 'en_US', BUNDLE );
    return str_repeat('a', 1);
}
for ($i_2 = 0; $i_2 < 10; $i_2++) {
    $reflector = new ReflectionClass(C::class);
    $obj = $reflector->newLazyGhost(function ($obj) {
        var_dump("initializer");
        $obj->__construct(1);
    });
    $obj = $reflector->newLazyProxy(function ($obj) {
        var_dump("initializer");
        return new C(1);
    });
    $cert = "file://" . __DIR__ . "/cert.crt";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SMIME_ENCRYPT, array($cpca)));
    var_dump(mb_stripos('Hello', 'e', 0, '8bit'));
}
