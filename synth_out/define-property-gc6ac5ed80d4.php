<?php
function t1()
{
    ob_start("test");
    echo "Hello from t1 1 ";
        echo "Hello from t1 2 ";
        ob_end_flush();
}
function f_0() {
    $shm_key = ftok(__FILE__, 'p');
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
}
function f_1() {
    $im = imagecreatefromgd2(__DIR__ . DIRECTORY_SEPARATOR . 'bug73161.gd2');
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        $oneeighty = M_PI;
        t1();
    }
}
$interval = new DateInterval('P1D');
$dt = new DateTime('first day of January 2011');
$dt->add($interval);
