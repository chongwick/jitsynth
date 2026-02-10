<?php
set_exception_handler(function() {
    echo 'Second handler' . PHP_EOL;
});
session_set_save_handler($sh);
if (true) {
    $i = 0;
}
if (true) {
    $a = $b = $c = 2;
}
$this->server->handle($request);
var_dump($line);
var_dump(json_decode('"\ud834"'));
if (true) {
    $arg->name = array();
}
var_dump(exif_read_data('data:image/jpg;base64,TU0AKgAAAAwgICAgAAIBDwAEAAAAAgAAACKSfCAgAAAAAEZVSklGSUxN'));
test('Proxy', $obj);
$link->close();
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_SERVER, array($cpca), $utfl));
var_dump($res);
var_dump(gc_collect_cycles());
var_dump($s);
printf("[001] %s, [%s] %s\n",
                $e->getMessage(),
                (is_object($db)) ? $db->errorCode() : 'n/a',
                (is_object($db)) ? implode(' ', $db->errorInfo()) : 'n/a');
var_dump($date1->format('Y-m-d') == $date2->format('Y-m-d'));
printf("[007] [%d] %s\n", $stmt->errno, $stmt->error);
printf("Expecting pdo_type = 1 got %s\n", $tmp['pdo_type']);
printf("[002] [%d] %s\n", mysqli_errno($link), mysqli_error($link));
printf("[%03d] SELECT failed, [%d] %s\n",
                $offset, mysqli_errno($link), mysqli_error($link));
$a->rewind();
printf("printf test 23:%016X\n", 170);
set_error_handler(function($no, $msg) {
    throw new Exception($msg);
});
var_dump(is_callable(array($this, 'static::testIsCallable2')));
