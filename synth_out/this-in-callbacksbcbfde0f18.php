<?php
$db = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
$stmt = $db->prepare("CALL testSp()");
function f_0() {
    $f = __DIR__."/data/test.txt.gz";
    $h = gzopen($f, 'r');
    var_dump(gzeof($h));
    return "testObject";
}
$sert = "file://" . __DIR__ . "/san-cert.pem";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_TIMESTAMP_SIGN, array($cpca)));
function f_1() {
    return 0;
}
openssl_error_string();
$references = array();
debug_zval_dump($references);
