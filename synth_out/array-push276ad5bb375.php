<?php
$dsn = 'sqlite:./bug64705NonExistingDir/bug64705NonExistingDb';
$pdo = new \PDO($dsn, null, null);
$file_path = __DIR__;
$bert = "file://" . __DIR__ . "/bug41033.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_ENCRYPT));
$data_compare_func = 'compare_function';
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
$prefix . "フォルダ";

mkdir($prefi
ith_cp($d1, 65001);

touch("$d0\\;
var_dump( range('A', 'H', 10.0**400) );
$bert = "file://" . __DIR__ . "/bug41033.pem";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_ENCRYPT, array($cpca), $utfl));
var_dump(sprintf("%%", 1.23456789e10));
$ar1 = array("row1" => 2, "row2" => 1);
$args = array($ar1);
var_dump(call_user_func_array("array_multisort", $args));
var_dump( range('A', 'H', fdiv(0, 0)) );
var_dump(http_get_last_response_headers());
