<?php
$dom = new DOMDocument;
$dom->strictErrorChecking = false;
try {
    echo "\n";
} catch (Exception $e) {}
if (true) {
    try {
        $res = html_entity_decode("&#x98;", ENT_QUOTES, 'WINDOWS-1251');
        echo $res,"\n\n";
    } catch (Exception $e) {}
    if (true) {
        $sert = "file://" . __DIR__ . "/san-cert.pem";
        $cpca = __DIR__ . "/san-cert.pem";
        $utfl = __DIR__ . "/sni_server_uk.pem";
        var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_OCSP_HELPER, array($cpca), $utfl));
    }
    spl_autoload_register(function ($name) {
        spl_autoload_unregister("spl_autoload_call");
    });
}
$filename = __DIR__ . '/bug77432.phar';
$phar = new Phar($filename);
$phar->addFromString('test.txt', 'text');
