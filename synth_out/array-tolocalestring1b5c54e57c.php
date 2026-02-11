<?php
list($value) = yield;
var_dump($value);
$bert = "file://" . __DIR__ . "/bug41033.pem";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_ANY, array($cpca)));
$im = imagecreatetruecolor(1, 1);
imagescale($im, 0, 1, 0);
$dir = opendir('foo://bar');
closedir($dir);
