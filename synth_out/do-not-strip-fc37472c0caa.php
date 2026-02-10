<?php
$link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
$link->close();
$cert = "file://" . __DIR__ . "/cert.crt";
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SMIME_ENCRYPT));
