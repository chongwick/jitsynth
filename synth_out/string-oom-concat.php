<?php
function f_0() {
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $phar = new Phar($fname);
    $phar['b.php'] = '<php echo "this is b\n"; ?>';
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        $strB = 'test & test';
    }
    return "key";
}
$sert = "file://" . __DIR__ . "/san-cert.pem";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_CRL_SIGN, array($cpca)));
