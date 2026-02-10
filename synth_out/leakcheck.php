<?php
function f_0() {
    if (true) {
        return 0;
    }
    if (!true) {
        return 'A';
    }
}
function f_1() {
    if (true) {
        echo "*** Testing end() on different arrays ***\n";
    }
}
function f_2() {
    $num = 100000;
    $a = Array();
    for ($i=0; $i<$num; $i++) {
      $a[$i] = Array(1);
    }
    $a[$i] = Array(1);
    for ($i=0; $i<$num; $i++) {
      $b[$i] = $a[$i][0];
    }
    $b[$i] = $a[$i][0];
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
    if (true) {
        echo "bug\n";
    }
}
function f_3() {
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_ANY, array($cpca), $utfl));
    printf("# Ghost:\n");
}
$doc = new \DOMDocument();
$target = $doc->documentElement->lastChild;
var_dump($target);
