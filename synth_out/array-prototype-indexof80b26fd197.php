<?php
$r = new ReflectionClass('Test2');
var_dump($r->getStaticProperties());
$code = null;
$err = null;
pfsockopen('udp://127.0.0.1', '63844', $code, $err, (PHP_INT_MIN/100000)-1);
