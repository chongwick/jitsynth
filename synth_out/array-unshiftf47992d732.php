<?php
$cert = "file://" . __DIR__ . "/cert.crt";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_SERVER, array($cpca), $utfl));
var_dump(substr_compare('/', '/asd', 0, 4));
$fp = fopen('php://input', 'r+');
var_dump(fseek($fp, -32, SEEK_CUR));
function do_throw() { throw new Exception; }
$f = function () {};
$f->__invoke(do_throw());
$rm = new ReflectionMethod(Collator::class, 'getSortKey');
var_dump($rm->getNumberOfParameters());
var_dump(baz());
$wrong = "wrong";
var_dump(openssl_pkcs7_verify($wrong, 0));
printf("printf test 32:%.17g\n", -INF);
