<?php
function test(string $name, object $obj) {
    printf("# %s:\n", $name);

    var_dump($obj);
    var_dump($obj->a);
    var_dump($obj);
}
class C {
    private $priv1 = 'secret1';
    private $priv2 = 'secret2';
    public $pub1 = 'public1';
    public $pub2 = 'public2';
    public $pub3 = 'public3';
    public $pub4 = 'public4';
}
function showFirstTwoItems($it) {
  echo str_replace("\0", '\0', $it->key()) . " => " . $it->current() .
"\n";
  $it->next();
  echo str_replace("\0", '\0', $it->key()) . " => " . $it->current() .
"\n";
}
function gen() {
    yield 0;
    yield from gen();
}
function bar($gen) {
    yield from $gen;
}
$fmt = new NumberFormatter('en_US', NumberFormatter::DECIMAL);
$fmt2 = clone $fmt;
$start_key = 0;
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
$stmt = $pdo->prepare("select :1 n union all select :1 + 1 union all select :1 + 2 union all select :1 + 3");
$res = [];
$res[] = $stmt->fetch();
$reflector = new ReflectionClass(C::class);
$obj = $reflector->newLazyGhost(function ($obj) {
    var_dump("initializer");
    $obj->__construct(1);
});
$dt = new DateTime('@1604215800');
$dt->add(new DateInterval('PT1M'));
$a = Array();
printf("[002] [%d] %s\n", mysqli_errno($link), mysqli_error($link));
$str = 'Hello World';
$shm_key = ftok(__FILE__, 'p');
$shm_id2 = shmop_open($shm_key, 'c', 0644, strlen($str) + 10);
var_dump($shm_id2);
$_ = str_repeat("A", 512);
try {
} catch (Exception $e) {}
if (true) {
    $ar1 = array("row1" => 2, "row2" => 1);
}
$i = 0;
$i = 1;
$ao = new ArrayObject(new C);
$ai = $ao->getIterator();
showFirstTwoItems($ai);
$gen = gen();
$a = bar($gen);
$dt = DateTime::createFromFormat('Y-m-d|', '2011-02-02');
var_dump($dt);
$db = MySQLPDOTest::factory();
var_dump($db->query('SELECT * FROM test_33689'));
