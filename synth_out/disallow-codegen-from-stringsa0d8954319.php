<?php
$_ = str_repeat("A", 512);
openssl_seal($_, $_, $_, array_fill(0,64,0));
var_dump(error_reporting());
$sert = "file://" . __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_TIMESTAMP_SIGN));
