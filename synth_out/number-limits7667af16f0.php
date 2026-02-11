<?php
function dumpElement() {
    list($value) = yield;
    var_dump($value);
}
class base {
    private function show() {
        echo "base\n";
    }
    function test() {
        $this->show();
    }
}
class derived extends base {
    function show() {
        echo "derived\n";
    }
    function test() {
        echo "test\n";
        $this->show();
        parent::test();
        parent::show();
    }
}
function f_0() {
    $reflector = new ReflectionClass(C::class);
    $obj = $reflector->newLazyProxy(function () {
        throw new \Exception('Initializer');
    }, ReflectionClass::SKIP_INITIALIZATION_ON_SERIALIZE);
    $fp = fopen(__DIR__."/test2.csv", "r");
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        $unset_var = 10;
        $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
        $stmt = $pdo->prepare("select :1 n union all select :1 + 1 union all select :1 + 2 union all select :1 + 3");
        $res = [];
        $res[] = $stmt->fetch();
        $args = ["-d", "extension_dir=" . ini_get("extension_dir"), "-d", "extension=" . (substr(PHP_OS, 0, 3) == "WIN" ? "php_" : "") . "soap." . PHP_SHLIB_SUFFIX];
        $generator = dumpElement();
        printf("[008] PS and non-PS results differ, dumping data\n");
        $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
        $stmt = $pdo->prepare("select :1 n union all select :1 + 1 union all select :1 + 2 union all select :1 + 3");
        $stmt->execute([ 32 ]);
        $conn = pg_connect($conn_str);
        $table='test_68638';
        pg_query($conn, "CREATE TABLE $table (id INT, value FLOAT)");
        $db = PDOTest::factory();
        $db->exec('CREATE TABLE test34630 (id int NOT NULL PRIMARY KEY, val VARCHAR(256))');
    }
}
$t = new derived();
$t->test();
