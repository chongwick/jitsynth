<?php
$res = [];
$res[] = $re;
$host = PHP_CLI_SERVER_HOSTNAME;
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    try {
        echo 'FAIL';
    } catch (Exception $e) {}
    if (true) {
        $iterator = 1;
        $iterator++;
    }
}
$info = opcache_get_status()['interned_strings_usage'];
var_dump($info['used_memory'] + $info['free_memory']);
$responses = array(
    "data://text/plain,HTTP/1.1 302 Moved Temporarily\r\n"
    . "Location: /try-again\r\n"
    . "Transfer-Encoding: chunked\r\n\r\n"
    . "0\r\n\r\n",
    "data://text/plain,HTTP/1.1 200 Ok\r\n"
    . "Transfer-Encoding: chunked\r\n\r\n"
    . "4\r\n1234\r\n0\r\n\r\n",
);
for ($i_1 = 0; $i_1 < 10; $i_1++) {
    try {
        $counter = 1;
        $counter++;
    } catch (Exception $e) {}
    if (true) {
        $counter = 1;
        $counter++;
    }
}
var_dump( range(1, 7, fdiv(0, 0)) );
$db = PDOTest::factory();
$insert = $db->prepare("insert into test34630 (id, val) values (1, EMPTY_BLOB()) RETURNING val INTO :blob");
for ($i_2 = 0; $i_2 < 10; $i_2++) {
    try {
        $counter = 1;
        $counter++;
    } catch (Exception $e) {}
    if (true) {
        try {
            echo "============================================================================\n";
        } catch (Exception $e) {}
        if (true) {
            try {
                ++$failuresNb;
            } catch (Exception $e) {}
            if (true) {
                $counter = 1;
                $counter++;
            }
        }
    }
}
$eml = __DIR__ . "/signed.eml";
$empty = "";
var_dump(openssl_pkcs7_verify($eml, 0, $empty));
