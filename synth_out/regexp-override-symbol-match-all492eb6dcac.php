<?php
$tests = array(
    'noon', 'midnight'
);
var_dump(mb_strpos('Hello', 'e', 0, '8bit'));
$i= DateInterval::createFromDateString('2 days');
$sert = "file://" . __DIR__ . "/san-cert.pem";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_OCSP_HELPER, array($cpca), $utfl));
