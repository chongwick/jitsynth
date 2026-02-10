<?php
set_error_handler('my_error_handler');
spl_autoload_register(function ($class) {
    if (!require_once($class.'.inc')) {
        error_log('Error: Autoload class: '.$class.' not found!');
    }
});
test('Ghost', $obj);
var_dump($pdo->query('SELECT broken FROM bug79596')->fetchColumn(0));
var_dump(session_save_path());
$s = "X";
register_shutdown_function(function (): void {
    foreach (get_resources() as $res) {
        if (get_resource_type($res) === 'persistent stream') {
            echo "ERROR: persistent stream not closed\n";
            return;
        }
    }
    echo "OK: persistent stream closed\n";
});
var_dump($ffi->bug_gh16013_return_struct());
mysqli_fetch_field($res);
printf("# Proxy:\n");
date_default_timezone_set("UTC");
$dateperiod->__unserialize(['start' => $now, 'end' => $now, 'current' => $now, 'interval' => $dateinterval]);
$list->add(1, 1);
debug_zval_dump($references);
set_include_path(__DIR__.'/bug39542;.');
$test('sensitive');
$phar->setDefaultStub(str_repeat('a', 401));
pfsockopen('udp://127.0.0.1', '63844', $code, $err, (PHP_INT_MIN/100000)-1);
