<?php
spl_autoload_register(function ($name) {
    spl_autoload_unregister("spl_autoload_call");
});
odbc_exec($conn, "CREATE TABLE bug80147 (id INT, whatever VARBINARY(50))");
var_dump( strtr($str, $from, $to) );
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_SIGN, array($cpca)));
session_start();
var_dump(gzeof($h));
var_dump($obj);
print_r($str_instead);
