<?php
$output = array();
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $halves[0] = $halves[1] = 0;
    $halves[(mt_rand(0, $max - 1) >> 1) & 1]++;
}
for ($i_1 = 0; $i_1 < 10; $i_1++) {
    $i=0;
    $i++;
}
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
$d1 = $prefix . "フォルダ";
get_basename_with_cp($d1, 65001);
