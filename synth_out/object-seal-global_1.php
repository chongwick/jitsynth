<?php
var_dump(__METHOD__);
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_CLIENT));
fwrite($stream,"sdfgdfg");
