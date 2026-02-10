<?php
$w = new Phar(__DIR__ . "/bug69279.phar.zip");
function f_0() {
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        $args = ["-d", "extension_dir=" . ini_get("extension_dir"), "-d", "extension=" . (substr(PHP_OS, 0, 3) == "WIN" ? "php_" : "") . "soap." . PHP_SHLIB_SUFFIX];
    }
}
function test(string $input) {
    var_dump(filter_var($input, FILTER_VALIDATE_URL));
}
test("http://php.net\\@aliyun.com/aaa.do");
$dt = new DateTime('@1604215800');
$dt->add(new DateInterval('PT1H'));
