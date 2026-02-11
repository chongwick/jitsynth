<?php
$cert = file_get_contents(__DIR__ . "/public.crt");
$priv = file_get_contents(__DIR__ . "/private.crt");
$extracert = file_get_contents(__DIR__ . "/cert.crt");
$pass = "qwerty";
openssl_pkcs12_export($cert, $p12, $priv, $pass, array('extracerts' => [$extracert, $extracert]));
var_dump(json_last_error() === JSON_ERROR_UTF16);
$r = new Phar(__DIR__ . "/bug69279.phar.zip");
$r->extractTo(__DIR__, NULL, TRUE);
