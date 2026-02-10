<?php
$a = new PDO("sqlite::memory:");
$eml = __DIR__ . "/signed.eml";
var_dump(openssl_pkcs7_verify($eml, 0));
$cfg = <<<EOT
[global]
error_log = {{FILE:LOG}}
[unconfined]
listen = {{ADDR}}
pm = dynamic
pm.max_children = 5
pm.start_servers = 1
pm.min_spare_servers = 1
pm.max_spare_servers = 3
EOT;
$code = <<<EOT
<?php
echo "Test\n";
EOT;
$tester = new FPM\Tester($cfg, $code);
$tester->start();
var_dump(json_last_error() === JSON_ERROR_UTF16);
