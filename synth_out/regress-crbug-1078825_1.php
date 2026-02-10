<?php
ini_set("session.save_handler","files");
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_CLIENT));
