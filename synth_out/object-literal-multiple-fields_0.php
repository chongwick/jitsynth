<?php
var_dump("done");
spl_autoload_register(function ($name) {
    spl_autoload_unregister("spl_autoload_call");
});
var_dump(strlen(file_get_contents('php://input')));
var_dump($oIntlDateFormatter->parse('America/Los_Angeles', $offset1));
var_dump($temp_array);
var_dump($e->getCode());
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_ANY));
printf( "testarray: %s\n", $r2[2] );
