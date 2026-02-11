<?php
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    if (true) {
    }
}
$sert = "file://" . __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_SERVER));
