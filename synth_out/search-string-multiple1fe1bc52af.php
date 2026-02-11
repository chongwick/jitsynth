<?php
class Foo {
    var $bar = array();

    static function bar() {
        static $instance = null;
        $instance = new Foo();
        return $instance->bar;
    }
}
function display($res)
{
	echo implode("\n", array_map(fn($row) => implode("\t", $row), $res))."\n";
}
function f_0() {
    extract(Foo::bar());
    $data_compare_func = 'compare_function';
    $responses = array(
        "data://text/plain,HTTP/1.1 302 Moved Temporarily\r\n"
        . "Location: /try-again\r\n"
        . "Transfer-Encoding: chunked\r\n\r\n"
        . "0\r\n\r\n",
        "data://text/plain,HTTP/1.1 200 Ok\r\n"
        . "Transfer-Encoding: chunked\r\n\r\n"
        . "4\r\n1234\r\n0\r\n\r\n",
    );
    $str = 'Hello World';
    $shm_key = ftok(__FILE__, 'p');
    $shm_id2 = shmop_open($shm_key, 'c', 0644, strlen($str) + 10);
    var_dump($shm_id2);
}
function f_1() {
    $to = "specials";
    $iterator = 1;
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
    display($pdo->query("select * from t2")->fetchAll());
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        $sert = "file://" . __DIR__ . "/san-cert.pem";
        var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_SIGN));
    }
    return 42;
}
gc_collect_cycles();
