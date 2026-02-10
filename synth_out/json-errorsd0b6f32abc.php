<?php
function f_0() {
    try {
        printf("%0\$s", 1);
        set_error_handler(
                    function ($errno, $errstr, $errfile, $errline) {
                        $this->handleError($errno, $errstr, $errfile, $errline);
                    }
                );
    } catch (Exception $e) {}
    if (true) {
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
        $db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, false);
    }
}
$array = array(
    1 => "entry_1",
    2 => "entry_2",
    3 => "entry_3",
    4 => "entry_4",
    5 => "entry_5"
);
var_dump(__METHOD__);
$count = 1;
$fp = fopen(PHP_OS_FAMILY === 'Windows' ? 'nul' : '/dev/null', 'w');
fclose($fp);
$lazy = false;
$conn = odbc_connect($dsn, $user, $pass);
odbc_exec($conn, "INSERT INTO bug80147 VALUES (1, CONVERT(VARBINARY(50), 'whatever'))");
$varOutput = ob_get_contents();
$varOutput = str_replace(
        [$var_dim_filename],
        ['%s'],
        $varOutput
    );
class TrampolineTest {
    public function __call(string $name, array $arguments) {
        echo 'Trampoline for ', $name, PHP_EOL;
    }
}
$o = new TrampolineTest();
$callback1 = [$o, 'trampoline1'];
var_dump(spl_autoload_unregister($callback1));
$sql = "SELECT 11111 as `1`, 22222 as `2`";
$link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
$res = $link->query($sql);
$row = $res->fetch_array();
$invalid_files = array(
  0,
  1234,
  -2.34555,
  TRUE,
  FALSE,
  " ",
);
foreach( $invalid_files as $invalid_file ) {
  var_dump( is_executable($invalid_file) );
  clearstatcache();
}
var_dump( is_executable($invalid_file) );
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug54028_2" . DIRECTORY_SEPARATOR;
$f = __DIR__."/data/test.txt.gz";
$h = gzopen($f, 'r');
gzclose($h);
$timeZone = new DateTimeZone('UTC');
print_r($str_instead);
$code = <<<EOT
<?php
\$cv = get_browser("Konqueror/2.0")->browser_name_pattern;
var_dump(\$cv);
EOT;
set_include_path(__DIR__.'/bug39542:.');
$ch = curl_init("https://localhost/username");
printf("[004] Expecting '2009-12-03' got '%s'\n", $row[0]);
$mb=148;
class Box {
    public ?Test $value;
}
global $box;
function test($box) {
    var_dump($box->value = new Test);
}
$box = new Box();
test($box);
$blank_line = <<<EOD

EOD;
$needles = array(
  "\n",
  '\n',
  "\r",
  "\r\n",
  "\t",
  "",
  $blank_line //needle as haystack
);
class A {
    public $b;
}
$a = new A;
var_dump(serialize($a));
$r = new ResourceBundle( 'en_US', BUNDLE );
$t = $r['nonexisting'];
date_default_timezone_set("Europe/Lisbon");
$dateinterval = (new ReflectionClass(DateInterval::class))->newInstanceWithoutConstructor();
$hash = password_hash(
    "php",
    PASSWORD_ARGON2I,
    ['memory_cost' => 64 << 10, 'time_cost' => 4, 'threads' => 1]
);
var_dump(substr($hash, -1, 1) !== "\0");
$offset = 'teststring';
class Foo {
    public $bar = [] {
        &get {
            echo __METHOD__ . "\n";
            return $this->bar;
        }
    }
}
$foo = new Foo;
var_dump($foo);
$tester = new FPM\Tester($cfg);
byVal(C[0]);
function byVal($arg) {
    var_dump($arg);
};
