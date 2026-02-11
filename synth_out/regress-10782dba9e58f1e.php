<?php
function f_0() {
    $style = array();
    $i = 0;
    $style[$i++] = IMG_COLOR_TRANSPARENT;
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_SIGN));
}
var_dump(range('a', 'z', 100));
