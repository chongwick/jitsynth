<?php
$file = __DIR__ . '/bug38212私はガラスを食べられます.gd2';
unlink($file);
var_dump(getenv("HTTP_X_FORWARDED_FOR"));
