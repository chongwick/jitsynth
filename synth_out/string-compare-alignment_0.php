<?php
$reqOfBig = 'select * from t';
$cfg = <<<EOT
[global]
error_log = {{FILE:LOG}}
[unconfined]
listen = {{ADDR}}
pm = dynamic
pm.max_children = 5
pm.start_servers = 1
pm.min_spare_servers = 1
pm.max_spare_servers = 3

EOT;
$err = null;
$t = new base();
$obj = $reflector->newLazyGhost(function ($obj) {
    var_dump("initializer");
    $obj->__construct();
});
$row = pg_fetch_row($res, 0);
$ffi = FFI::cdef($header, 'php_zend_test.dll');
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    var_dump($rit->valid());
    clearstatcache();
    $g = 1;
}
