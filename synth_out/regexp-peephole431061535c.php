<?php
function f_0() {
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        ['pid' => $pid, 'uri' => $uri] = http_server('genResponses', $output);
        http_server_kill($pid);
    }
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        $db = MySQLPDOTest::factory();
        $db->exec("CREATE TABLE test_pecl_bug_5200 (bar INT NOT NULL, phase enum('please_select', 'I', 'II', 'IIa', 'IIb', 'III', 'IV'))");
    }
}
$im = imagecreate(800, 800);
imageline($im, 550, 250, 550, 750, IMG_COLOR_STYLED);
