<?php
$var = 10;
function f_0() {
    return str_repeat('a', 1);
}
function f_1() {
    try {
        $args = ["-d", "extension_dir=" . ini_get("extension_dir"), "-d", "extension=" . (substr(PHP_OS, 0, 3) == "WIN" ? "php_" : "") . "soap." . PHP_SHLIB_SUFFIX];
        $args[] = php_ini_loaded_file();
        echo "\n";
    } catch (Exception $e) {}
    if (true) {
        return "testObject";
    }
}
$ch = curl_init("https://localhost/username");
curl_setopt($ch, CURLOPT_PASSWORD, null);
