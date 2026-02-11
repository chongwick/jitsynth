<?php
function test(string $input) {
    var_dump(filter_var($input, FILTER_VALIDATE_URL));
}
$link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
$link->close();
$cert = "file://" . __DIR__ . "/cert.crt";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_SERVER, array($cpca)));
var_dump(filter_var($input, FILTER_VALIDATE_URL));
$depth0 = "depth02";
$iterator = new RecursiveDirectoryIterator(__DIR__ . DIRECTORY_SEPARATOR . $depth0);
$it = new RecursiveIteratorIterator($iterator);
$it->rewind();
range(0, pow(2.0, 100000000));
var_dump(__METHOD__);
