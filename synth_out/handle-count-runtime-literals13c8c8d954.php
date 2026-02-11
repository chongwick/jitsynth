<?php
$sert = "file://" . __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_CLIENT));
$timestamp = "2005-11-08T11:22:07+03:00";
var_dump(soundex("Lukasiewicz") == soundex("Lissajous"));
