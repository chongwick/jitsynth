<?php
class C {
    public int $a;
}
class Foo {
  public $bar = "bat";
}
$s1 = "some string";
$reflector = new ReflectionClass(C::class);
$filename =  __DIR__ . DIRECTORY_SEPARATOR . 'bug70752.txt';
$domd = new DOMDocument();
$xp = new DOMXPath($domd);
$reflector = new ReflectionClass(C::class);
$obj = new C();
$reflector->resetAsLazyGhost($obj, function ($obj) use ($reflector) {
    try {
        $reflector->resetAsLazyGhost($obj, function () { });
    } catch (Error $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
    try {
        $reflector->resetAsLazyProxy($obj, function () { });
    } catch (Error $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }

});
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
$pdo->exec("insert into t values (0, 'original')");
printf("printf test 26:%2\$d %1\$d\n", 1, 2);
$f = __DIR__."/data/test.txt.gz";
$h = gzopen($f, 'r');
var_dump(gzeof($h));
$tests = array(
    'noon', 'midnight'
);
foreach ($tests as $test) {
    $t = strtotime("2005-12-22 ". $test);
    printf("%-10s => %s\n", $test, date(DATE_ISO8601, $t));
}
$t = strtotime("2005-12-22 ". $test);
$mysqli = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
$res = $mysqli->query('SELECT 42');
$str = 'Hello World';
$shm_key = ftok(__FILE__, 'p');
$shm_id1 = shmop_open($shm_key, 'c', 0644, strlen($str));
shmop_delete($shm_id1);
$foo = new Foo;
var_dump($foo);
