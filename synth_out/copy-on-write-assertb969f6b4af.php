<?php
function f_0() {
    $id_2_date = '2014-09-24';
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        class MyObjectStorage extends SplObjectStorage {
            // Overwrite getHash() with just some (working) test-method
            public function getHash($object): string { return get_class($object); }
        }
        $list = new MyObjectStorage();
        $list2 = clone $list;
    }
    $str = 'Hello World';
    $shm_key = ftok(__FILE__, 'p');
    $shm_id2 = shmop_open($shm_key, 'c', 0644, strlen($str) + 10);
    $t = new stdClass;
    return $t;
}
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug54028_2" . DIRECTORY_SEPARATOR;
function f() {
    Fiber::suspend();
}
function g() {
    (new Fiber(function() {
        global $f;
        var_dump((new ReflectionFiber($f))->getTrace());
    }))->start();
}
$f = new Fiber(function() { f(); max(...[1,2,3,4,5,6,7,8,9,10,11,12]); g(); });
