<?php
function f_0() {
    function createDB(): PDO {
        $db = MySQLPDOTest::factory();
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        return $db;
    }
    $db = createDB();
    function testLastInsertId(PDO $db) {
        echo "Running test lastInsertId\n";
        $db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, false);
        try {
            $db->exec("INSERT INTO test_80908 (`name`) VALUES ('bar')");
            $id = $db->lastInsertId();
            echo "Last insert id is " . $id . "\n";
        } catch (PDOException $e) {
            echo $e->getMessage()."\n";
        }
    }
    $id = $db->lastInsertId();
    class C extends stdClass {
        public int $a;
    }
    $obj = new C();
    while (true) {
        break;  // avoid infinite loop
        class TrampolineTest {
            public function __call(string $name, array $arguments) {
                echo 'Trampoline for ', $name, PHP_EOL;
            }
        }
        $o = new TrampolineTest();
        $callback1 = [$o, 'trampoline1'];
        if (true) {
            return reset($this->a);
        }
        $tmpFileOut = tempnam(sys_get_temp_dir(), 'test');
    }
    return "Class A object";
}
#[AllowDynamicProperties]
class C {
    public $a = 1;
}
$c = new C();
$c->dyn = 1;
$now = new DateTimeImmutable();
$date = (new ReflectionClass(DateTime::class))->newInstanceWithoutConstructor();
$dateperiod = (new ReflectionClass(DatePeriod::class))->newInstanceWithoutConstructor();
$dateperiod->__unserialize(['start' => $now, 'end' => $now, 'current' => $date]);
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug54028_2" . DIRECTORY_SEPARATOR;
$dirs = array("a", "ソ", "ゾ", "şŞıİğĞ", "多国語", "王", "汚れて掘る");

mkdir($prefix);
foreach ($
mkdir($prefix . $d);
}

$old_cwd = getcwd();
forea
$now = $prefix . $d;
    var_dump(chdir($now));
    var_dump($dn = realpath("."));
    var_dump($d == get_basename_with_cp($dn, 65001, false));
}
chdir($old_cwd);

foreach (
rmdir($prefix . $d);
}
rmdir($prefix);

?>
($prefix);

?>;
