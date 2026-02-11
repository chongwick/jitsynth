<?php
$dt = DateTime::createFromFormat('Y-m-d!', '2011-02-02');
var_dump($dt);
$reflector = new ReflectionClass(C::class);
$obj = $reflector->newLazyGhost(function () {
    throw new \Exception('initializer');
});
$t = new stdClass;
$conn = odbc_connect($dsn, $user, $pass);
$res = odbc_exec($conn, "SELECT * FROM bug80147");
odbc_fetch_row($res);
$db = MySQLPDOTest::factory();
$stmt = $db->prepare('SELECT * FROM test_33689');
print_r($stmt->getColumnMeta(0));
