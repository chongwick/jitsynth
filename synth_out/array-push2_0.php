<?php
$key = str_repeat('abc', random_int(3, 3));
$responses = array(
    "data://text/plain,HTTP/1.1 200 Some very long reason-phrase to test that this is properly handled by our code without adding a new header like  Bad: Header\r\nGood: Header\r\n\r\nBody",
    "data://text/plain,HTTP/1.1 200 \r\nGood: Header\r\n\r\nBody",
);
debug_zval_dump($test);
$link = mysqli_init();
$fiber->start();
fclose($fp);
proc_close($proc);
var_dump(exif_read_data(__DIR__.'/image021.tiff'));
$db->exec('INSERT INTO test_33689 VALUES(1)');
var_dump($arg);
$pdo->exec("create temp table t2 as select 678 n, 'ok' status");
