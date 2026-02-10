<?php
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SMIME_SIGN, array($cpca), $utfl));
var_dump($pdo->query('SELECT 1;')->fetchAll());
