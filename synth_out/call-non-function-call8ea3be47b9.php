<?php
$str = 'Hello World';
$shm_key = ftok(__FILE__, 'p');
$shm_id1 = shmop_open($shm_key, 'c', 0644, strlen($str));
try {
    $dom = new DOMDocument;
    $element = $dom->appendChild($dom->createElement('root'));
    $element->prepend('x', new DOMEntity);
    $dom = new DOMDocument;
    $test1 = $dom->getElementById('x');
    $test1->setAttribute('xml:id', 'y');
} catch (Exception $e) {}
if (true) {
    $epid = pcntl_waitpid(-1,$status);
    $references = array();
    debug_zval_dump($references);
}
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
;

mkdir($d0);
;
