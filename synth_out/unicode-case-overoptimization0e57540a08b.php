<?php
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $pass = "qwerty";
    $array1 = array(1, 2);
    $j = 0;
    $cert = "file://" . __DIR__ . "/cert.crt";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_SERVER, array($cpca)));
}
