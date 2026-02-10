<?php
function f_0() {
    $str = 'Hello World';
    $shm_key = ftok(__FILE__, 'p');
    $shm_id1 = shmop_open($shm_key, 'c', 0644, strlen($str));
    class A {
        public $a;
    }
    $a = new A();
    $container = false;
    function test(array... $args) {
        var_dump($args);
    }
    test([0], [1], [2]);
    return [get_object_vars($this)];
}
$bert = "file://" . __DIR__ . "/bug41033.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_NS_SSL_SERVER));
