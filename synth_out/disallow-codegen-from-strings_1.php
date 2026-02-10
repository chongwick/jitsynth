<?php
var_dump($pdo->query('SELECT broken FROM bug79596')->fetchColumn(0));
var_dump('ERR');
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_ENCRYPT, array($cpca)));
