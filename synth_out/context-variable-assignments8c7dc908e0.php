<?php
function f_0() {
    $strB = 'test & test';
    $num = 100000;
    $fp = fopen(__FILE__, "r");
    $priorityQueue = new SplPriorityQueue();
    print_r($priorityQueue->top());
    return 'B';
}
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
$d0 = $prefix . "ソフト";
touch("$d0\\test0.txt");
