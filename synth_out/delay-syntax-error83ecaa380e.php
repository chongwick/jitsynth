<?php
$list = [];
asort($list);
var_dump(ini_get('mysqlnd.debug'));
var_dump($http_response_header);
var_dump($row);
printf("printf test 1:%s\n", "simple string");
$sert = "file://" . __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_TIMESTAMP_SIGN));
