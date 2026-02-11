<?php
function Test($param) {
    global $g;
    $g = $param->strA."\n".$param->strB."\n";
    return $g;
}
function f_0() {
    $y = 0;
    $g = $param->strA."\n".$param->strB."\n";
    return $g;
}
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
$d1 = $prefix . "フォルダ";
touch("$d1\\test1.txt");
$interval = new DateInterval('P1D');
$dt = new DateTime('first day of January 2011');
$dt->add($interval);
