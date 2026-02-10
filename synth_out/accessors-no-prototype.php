<?php
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_SERVER, array($cpca)));
php_cli_server_start(file_get_contents(__DIR__.'/bug64433_srv.inc'));
var_dump($array[$a]);
