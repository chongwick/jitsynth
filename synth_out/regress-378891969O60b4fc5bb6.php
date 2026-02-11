<?php
class C {
    public function __toString() {
        global $c;
        $c = [];
        throw new Exception(__METHOD__);
    }
}
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
$d0 = $prefix . "ソフト";
$d1 =;
function f_0() {
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        $c = new C();
    }
}
php_cli_server_start(<<<PHP
http_response_code(426);
PHP
);
$r = new Phar(__DIR__ . "/bug69279.phar.zip");
var_dump($r["bug69279.txt"]->isCompressed());
