<?php
function test(string $name, object $obj) {
    printf("# %s\n", $name);

    $reflector = new ReflectionClass(C::class);
    try {
        $reflector->initializeLazyObject($obj);
    } catch (Exception $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }

    try {
        var_dump(unserialize(serialize($obj)));
    } catch (Exception $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
}
function f_0() {
    $headers1 = exif_read_data(__DIR__ . '/bug64739.jpg');
    try {
        var_dump('ERR');
        $dt = new DateTime('@1604215800');
        $dt->setTimezone(new DateTimeZone('America/Boise'));
    } catch (Exception $e) {}
    if (true) {
        $reflector = new ReflectionClass(C::class);
        $obj = $reflector->newLazyGhost(function ($obj) {
            throw new \Exception('Initializer');
        }, ReflectionClass::SKIP_INITIALIZATION_ON_SERIALIZE);
    }
    $xmlString = "<root><a><b>1</b><b>2</b><b>3</b></a></root>";
    $fp = fopen('php://input', 'r+');
    fclose($fp);
    $filename = "bug51997.bz2";
}
printf("printf test 19:%16x\n", 170);
$mysql = new my_mysqli($host, $user, $passwd, $db, $port, $socket);
$mysql->query("CREATE TABLE temp (id INT UNSIGNED NOT NULL)");
