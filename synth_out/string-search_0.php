<?php
$i = 0;
$obj = $reflector->newLazyGhost(function ($obj) use ($i) {
        if ($i === 1) {
            throw new \Exception();
        }
    });
var_dump($target);
$dsn = ini_get('pdo.dsn.mysql');
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $interval = new DateInterval('P1D');
    $test = array("A\x00B" => "Hello world");
    $reflector->initializeLazyObject($obj);
}
