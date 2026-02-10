<?php
$thisdir = __DIR__;
$filename = $thisdir . "/bug47667.zip";
php_cli_server_start(file_get_contents(__DIR__.'/bug64433_srv.inc'));
