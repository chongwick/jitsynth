<?php
$fp = fopen(__FILE__, "r");
$response = array(
    'a' => 'b'
);
class Foo {
    public function __destruct() {
        debug_print_backtrace();
    }
}
$foo = new Foo();
$str = "repeater id='loopt' dataSrc=subject columns=2";
var_dump(substr_count("", "a", 0, 0));
$sert = "file://" . __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_ANY));
