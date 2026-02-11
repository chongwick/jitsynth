<?php
$host = "localhost\0.example.com";
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $reflector = new ReflectionClass(C::class);
    $obj = $reflector->newLazyGhost(function () {
        throw new \Exception('initializer');
    });
}
$mysqli = new mysqli("$host:$port", $user, $passwd, $db);
$tbl = "test";
$sql = "INSERT INTO $tbl (bit_column_1) VALUES (0)";
$mysqli->query($sql);
