<?php
class TrampolineTest {
    public function __call(string $name, array $arguments) {
        echo 'Trampoline for ', $name, PHP_EOL;
    }
}
class A {
    public $b;
}
class D {
    public string $prop;
}
$sert = "file://" . __DIR__ . "/san-cert.pem";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_CRL_SIGN, array($cpca), $utfl));
$o = new TrampolineTest();
$callback2 = [$o, 'trampoline2'];
var_dump(spl_autoload_unregister($callback2));
$f_base = "67647私はガラスを食べられます.mov";
$f = __DIR__ . DIRECTORY_SEPARATOR . $f_base;
$fi = new finfo(FILEINFO_MIME_TYPE);
var_dump($fi->file($f));
$a = new A;
$d = new D();
var_dump($d);
var_dump( $count );
$func_ptrs = [
    'bug_gh9090_void_none_ptr',
    'bug_gh9090_void_int_char_ptr',
    'bug_gh9090_void_int_char_var_ptr',
    'bug_gh9090_void_char_int_ptr',
    'bug_gh9090_int_int_char_ptr',
];
$im = imagecreatefromgd2(__DIR__ . DIRECTORY_SEPARATOR . 'bug73161.gd2');
var_dump($im);
print_r($str_instead);
error_reporting(E_ALL);
