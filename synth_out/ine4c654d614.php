<?php
#[AllowDynamicProperties]
class A {
}
function test(array... $args) {
    var_dump($args);
}
class Foo {
    public $bar = [] {
        &get {
            echo __METHOD__ . "\n";
            return $this->bar;
        }
    }
}
#[AllowDynamicProperties]
class C {
    public $a = 1;
}
function createDB(): PDO {
    $db = MySQLPDOTest::factory();
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    return $db;
}
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
function checkFlags($reported_flags, $expected_flags, $flags) {
        $found_flags = $unexpected_flags = '';
        foreach ($flags as $code => $name) {
            if ($reported_flags >= $code) {
                $reported_flags -= $code;
                $found_flags .= $name . ' ';
                if (stristr($expected_flags, $name)) {
                    $expected_flags = trim(str_ireplace($name, '', $expected_flags));
                } else {
                    $unexpected_flags .= $name . ' ';
                }
            }
        }

        return array($expected_flags, $unexpected_flags, $found_flags);
    }
function display($res)
{
	echo implode("\n", array_map(fn($row) => implode("\t", $row), $res))."\n";
}
class Canary {
    public function __construct(public mixed $value) {}
    public function __destruct() {
        var_dump(__METHOD__);
    }
}
function f($canary) {
    var_dump(yield from g());
}
class TrampolineTest {
    public function __call(string $name, array $arguments) {
        echo 'Trampoline for ', $name, PHP_EOL;
    }
}
$dbh = @pg_connect($conn_str);
$res = pg_query($dbh, 'SET client_min_messages TO NOTICE;');
$stmt->close();
$pkcsfile = __DIR__ . "/openssl_pkcs7_verify__pkcsfile.tmp";
var_dump(file_get_contents($pkcsfile));
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
$d0 = $prefix . "ソフト";
var_dump(count(stat("$d0\\test0.txt")) > 0);
$array_test = array("a", "b", "d", 7, "u" => "U", -4, "-.008" => "neg.008");
var_dump( end($array_test) );
$version = mysqli_get_server_version($link);
$f = __DIR__."/data/test.txt.gz";
$h = gzopen($f, 'r');
var_dump(gzeof($h));
$a = array(1,2,3);
$s1 = "some string";
$c = $a + $s1;
var_dump($c);
$ch = curl_init("https://localhost/username");
$response = curl_exec($ch);
var_dump(str_contains($response, "authorization"));
mysqli_free_result($res);
$a = new A;
$cert = "file://" . __DIR__ . "/cert.crt";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_SERVER, array($cpca)));
var_dump($args);
$conn = odbc_connect($dsn, $user, $pass);
$res = odbc_exec($conn, "SELECT * FROM bug80147");
var_dump(odbc_result($res, 'whatever'));
var_dump(pcntl_wexitstatus($status));
$counter = 1;
$interval = new DateInterval('P1D');
$dt = new DateTime('first day of January 2011');
$dt->sub($interval);
$tester = new FPM\Tester($cfg);
$userMessage = "'user' directive is ignored when FPM is not running as root";
$tester->expectLogNotice($userMessage, 'bbbb');
printf("printf test 1:%s\n", "simple string");
$url = ""
    . "php://filter/read="
    . urlencode("convert.iconv.ISO-8859-15/UTF-8")
    . '|' . urlencode("string.rot13")
    . '|' . urlencode("string.rot13")
    . '|' . urlencode("convert.iconv.UTF-8/ISO-8859-15")
    . "/resource=data://text/plain,foob%E2r";
var_dump(urlencode(file_get_contents($url)));
$foo = new Foo;
var_dump($foo);
$error = error_get_last();
test([0], [1], [2]);
global $list;
$list->pop();
$mysql = new my_mysqli($host, $user, $passwd, $db, $port, $socket);
$mysql->query("CREATE TABLE temp (id INT UNSIGNED NOT NULL)");
$conn = pg_connect($conn_str);
$table='test_68638';
pg_insert($conn,$table, array('id' => 1, 'value' => 1.2));
$list = new SplDoublyLinkedList;
var_dump($list->serialize());
$c = new C();
$propReflector = new ReflectionProperty($c, 'dyn');
define("TEST",3);
ini_set("intl.error_level", E_WARNING);
$tester = new FPM\Tester($cfg);
$userMessage = "'user' directive is ignored when FPM is not running as root";
$tester->expectLogNotice($userMessage, 'dddd');
test(3);
$im = imagecreate(10,10);
trycatch_dump(
    fn() => imagecropauto($im, IMG_CROP_THRESHOLD, 0, 1337)
);
$mixedEndiannessFile = dirname(__FILE__).'/P1000506.JPG';
$str = 'Hello World';
$shm_key = ftok(__FILE__, 'p');
$shm_id1 = shmop_open($shm_key, 'c', 0644, strlen($str));
shmop_delete($shm_id1);
$tester = new FPM\Tester($cfg);
$userMessage = "'user' directive is ignored when FPM is not running as root";
$tester->expectLogNotice($userMessage, 'dddd');
$ar1 = array("row1" => 2, "row2" => 1);
var_dump($ar1);
$field = mysqli_fetch_field_direct($res, 1);
printf("[010] Found unexpected field '%s'\n", $field->name);
$conn = odbc_connect($dsn, $user, $pass);
$res = odbc_exec($conn, "SELECT * FROM bug80147");
odbc_fetch_row($res);
ini_set('mysqlnd.fetch_data_copy', false);
$db = createDB();
testLastInsertId($db);
$strings = array(
  "<html>Hello<br />world</html>",
  "<html><br /></html>",
  "<html>\nHello\r\nworld\r</html>",
  "<html>\n \r\n \r</html>",
);
foreach( $strings as $str ){
  var_dump(nl2br($str) );
}
var_dump(nl2br($str) );
$dom = Dom\HTMLDocument::createFromString(<<<HTML
<!DOCTYPE html>
<html>
    <body>
        <svg xmlns="http://www.w3.org/2000/svg" height="1"></svg>
        <math></math>
    </body>
</html>
HTML);
$row_stmt = null;
var_dump(spl_autoload_functions());
var_dump(substr_count("aaa", "a", 0, 0));
$list = new SplDoublyLinkedList;
$list->add(1, 1);
$flags = array(
        MYSQLI_NOT_NULL_FLAG => 'NOT_NULL',
        MYSQLI_PRI_KEY_FLAG => 'PRI_KEY',
        MYSQLI_UNIQUE_KEY_FLAG => 'UNIQUE_KEY',
        MYSQLI_MULTIPLE_KEY_FLAG => 'MULTIPLE_KEY',
        MYSQLI_BLOB_FLAG => 'BLOB',
        MYSQLI_UNSIGNED_FLAG	=> 'UNSIGNED',
        MYSQLI_ZEROFILL_FLAG => 'ZEROFILL',
        MYSQLI_AUTO_INCREMENT_FLAG => 'AUTO_INCREMENT',
        MYSQLI_TIMESTAMP_FLAG	=> 'TIMESTAMP',
        MYSQLI_SET_FLAG	=> 'SET',
        MYSQLI_NUM_FLAG => 'NUM',
        MYSQLI_PART_KEY_FLAG => 'PART_KEY',
        // MYSQLI_GROUP_FLAG => 'MYSQLI_GROUP_FLAG' - internal usage only
        (defined('MYSQLI_NO_DEFAULT_VALUE_FLAG') ? MYSQLI_NO_DEFAULT_VALUE_FLAG : 4096) => 'NO_DEFAULT_VALUE',
        (defined('MYSQLI_BINARY_FLAG') ? MYSQLI_BINARY_FLAG : 128) => 'BINARY',
        (defined('MYSQLI_ENUM_FLAG') ? MYSQLI_ENUM_FLAG : 256) => 'ENUM',
        // MYSQLI_BINCMP_FLAG
    );
$columns = array(
        'INT DEFAULT NULL' => 'NUM',
        'INT NOT NULL' => 'NOT_NULL NO_DEFAULT_VALUE NUM',
        'INT NOT NULL DEFAULT 1' => 'NOT_NULL NUM',
        'INT UNSIGNED DEFAULT NULL' => 'UNSIGNED NUM',
        'INT UNSIGNED NOT NULL'	=> 'NOT_NULL UNSIGNED NO_DEFAULT_VALUE NUM',
        'INT UNSIGNED NOT NULL DEFAULT 1' => 'NOT_NULL UNSIGNED NUM',
        'INT UNSIGNED ZEROFILL DEFAULT NULL' => 'UNSIGNED ZEROFILL NUM',
        'INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY' => 'NOT_NULL PRI_KEY UNSIGNED AUTO_INCREMENT NUM PART_KEY',
        'CHAR(1) DEFAULT NULL'	=> '',
        'CHAR(1) NOT NULL' => 'NOT_NULL NO_DEFAULT_VALUE',
        'VARBINARY(127) DEFAULT NULL' => 'BINARY',
        'BLOB'	=> 'BLOB BINARY',
        'TINYBLOB'	=> 'BLOB BINARY',
        'MEDIUMBLOB'	=> 'BLOB BINARY',
        'LONGBLOB'	=> 'BLOB BINARY',
        'TEXT'	=> 'BLOB',
        'TINYTEXT'	=> 'BLOB',
        'MEDIUMTEXT'	=> 'BLOB',
        'LONGTEXT'	=> 'BLOB',
        'SET("one", "two")'	=> 'SET',
        'SET("one", "two") NOT NULL'	=> 'NOT_NULL SET NO_DEFAULT_VALUE',
        'SET("one", "two") NOT NULL DEFAULT "one"'	=> 'NOT_NULL SET',
        'ENUM("one", "two")'	=> 'ENUM',
        'ENUM("one", "two") NOT NULL' => 'NOT_NULL ENUM NO_DEFAULT_VALUE',
        'ENUM("one", "two") NOT NULL DEFAULT "one"' => 'NOT_NULL ENUM',
        'TINYINT UNIQUE' => 'UNIQUE_KEY NUM PART_KEY',
        'SMALLINT UNIQUE' => 'UNIQUE_KEY NUM PART_KEY',
        'MEDIUMINT UNIQUE DEFAULT 1' => 'UNIQUE_KEY NUM PART_KEY',
        'BIGINT UNSIGNED UNIQUE DEFAULT 100' => 'UNIQUE_KEY UNSIGNED NUM PART_KEY',
        'BIT' => 'UNSIGNED',
        'VARCHAR(2) NOT NULL PRIMARY KEY' => 'NOT_NULL PRI_KEY NO_DEFAULT_VALUE PART_KEY'
    );
foreach ($flags as $code => $name) {
            if ($reported_flags >= $code) {
                $reported_flags -= $code;
                $found_flags .= $name . ' ';
                if (stristr($expected_flags, $name)) {
                    $expected_flags = trim(str_ireplace($name, '', $expected_flags));
                } else {
                    $unexpected_flags .= $name . ' ';
                }
            }
        }
$expected_flags = trim(str_ireplace($name, '', $expected_flags));
foreach ($columns as $column_def => $expected_flags) {
        if (!mysqli_query($link, 'DROP TABLE IF EXISTS test')) {
            printf("[002] %s [%d] %s\n", $column_def,
                mysqli_errno($link), mysqli_error($link));
            continue;
        }

        $create = sprintf('CREATE TABLE test(id INT, col1 %s)', $column_def);
        if (!mysqli_query($link, $create)) {
            // Server might not support it - skip
            continue;
        }

        if (!$res = mysqli_query($link, 'SELECT * FROM test')) {
            printf("[003] Can't select from table, %s [%d] %s\n", $column_def,
                mysqli_errno($link), mysqli_error($link));
            continue;
        }

        $field = mysqli_fetch_field_direct($res, 1);
        if (!is_object($field)) {
            printf("[004] Fetching the meta data failed, %s [%d] %s\n", $column_def,
                mysqli_errno($link), mysqli_error($link));
            continue;
        }
        if ($field->name != 'col1') {
            printf("[005] Field information seems wrong, %s [%d] %s\n", $column_def,
                mysqli_errno($link), mysqli_error($link));
            continue;
        }

        /*
        TODO
        Unfortunately different server versions give you slightly different
        results.The test does not yet fully reflect all server changes/bugs etc.
        */
        switch ($column_def) {
            case 'INT UNSIGNED NOT NULL':
            case 'INT NOT NULL':
            case 'CHAR(1) NOT NULL':
            case 'SET("one", "two") NOT NULL':
            case 'ENUM("one", "two") NOT NULL':
                $version = mysqli_get_server_version($link);
                if ($version < 50000) {
                    // TODO - check exact version!
                    $expected_flags = trim(str_replace('NO_DEFAULT_VALUE', '', $expected_flags));
                }
                break;

            case 'BIT':
                $version = mysqli_get_server_version($link);
                if (($version <= 50114 && $version > 50100) || ($version == 50200)) {
                    // TODO - check exact version!
                    $expected_flags = trim(str_replace('UNSIGNED', '', $expected_flags));
                }

            default:
                break;
        }

        list($missing_flags, $unexpected_flags, $flags_found) = checkFlags($field->flags, $expected_flags, $flags);
        if ($unexpected_flags) {
            printf("[006] Found unexpected flags '%s' for %s, found '%s' with MySQL %s'\n",
                $unexpected_flags, $column_def, $flags_found, mysqli_get_server_version($link));
        }
        if ($missing_flags) {
            printf("[007] The flags '%s' have not been reported for %s, found '%s'\n",
                $missing_flags, $column_def, $flags_found);
            var_dump($create);
            var_dump(mysqli_get_server_version($link));
            die($missing_flags);
        }

        mysqli_free_result($res);
    }
printf("[003] Can't select from table, %s [%d] %s\n", $column_def,
                mysqli_errno($link), mysqli_error($link));
$php = getenv('TEST_PHP_EXECUTABLE_ESCAPED');
var_dump(`$php -n -v`);
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
$pdo->setAttribute(PDO::ATTR_PREFETCH, 0);
date_default_timezone_set("Asia/Calcutta");
$foo = new Foo;
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $foo = new Foo;
}
for ($i_1 = 0; $i_1 < 10; $i_1++) {
    $conn = odbc_connect($dsn, $user, $pass);
    odbc_exec($conn, "CREATE TABLE bug80147 (id INT, whatever VARBINARY(50))");
    $array = new ArrayObject();
    $array->offsetSet('key', 'value');
}
$obj = new C();
var_dump($obj->a);
$zip = new ZipArchive();
$invalid_files = array(
  0,
  1234,
  -2.34555,
  TRUE,
  FALSE,
  " ",
);
$fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
$phar = new Phar($fname, 0, 'a.phar');
$phar['x'] = 'hi';
$responses = array(
    "data://text/plain,HTTP/1.1 200 Some very long reason-phrase to test that this is properly handled by our code without adding a new header like  Bad: Header\r\nGood: Header\r\n\r\nBody",
    "data://text/plain,HTTP/1.1 200 \r\nGood: Header\r\n\r\nBody",
);
['pid' => $pid, 'uri' => $uri] = http_server($responses, $output);
$db = getDbConnection();
var_dump($db->getAttribute(PDO::DBLIB_ATTR_SKIP_EMPTY_ROWSETS));
printf("printf test 7:%010.2f\n", 2.5);
$rm = new ReflectionMethod(Collator::class, 'getSortKey');
var_dump($rm->getNumberOfRequiredParameters());
$reflector = new ReflectionClass(C::class);
$obj = $reflector->newLazyGhost(function () {
    throw new \Exception('initializer');
});
test('Ghost', $obj);
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
$reqOfBig = 'select * from t';
$attrs = [ PDO::ATTR_PREFETCH => 0 ];
$stmt = $pdo->prepare($reqOfBig, $attrs);
$stmt->execute();
$filename = __DIR__ . '/bug77432.phar';
$phar = new Phar($filename);
$phar->setStub('<?php echo "hello world\n"; __HALT_COMPILER(); ?>');
spl_autoload_register();
$rm = new ReflectionMethod(Collator::class, 'getSortKey');
var_dump($rm->getNumberOfRequiredParameters());
$attr = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4 COLLATE utf8mb4_unicode_ci; SET SESSION sql_mode=traditional',
    PDO::ATTR_STRINGIFY_FETCHES => true,
];
$pdo = MySQLPDOTest::factoryWithAttr($attr);
var_dump($pdo->query('SELECT 42')->fetchColumn(0));
$fp = php_cli_server_connect();
fclose($fp);
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
$reqOf3 = 'select 79 n union all select 80 union all select 81';
$stmt = $pdo->prepare($reqOf3);
$res = $stmt->fetchAll();
display($res);
printf("# %s:\n", $name);
$xml = '
<data id="1">
    <key>value</key>
</data>
';
$obj = simplexml_load_string($xml);
print_r(get_object_vars($obj));
$reflector = new ReflectionClass(C::class);
$obj = new C();
$reflector->initializeLazyObject($obj);
$tmpFileIn = tempnam(sys_get_temp_dir(), 'test');
unlink($tmpFileIn);
$zip = new ZipArchive();
$zip->close();
$a[1] = 5;
$host = PHP_CLI_SERVER_HOSTNAME;
$db = PDOTest::factory();
$instance = new Foo();
$obj = new C();
var_dump($obj);
$sh = new SessionHandler;
session_set_save_handler($sh);
$canary = new Canary(null);
$iterable = f($canary);
$fiber = new Fiber(function () use ($iterable, $canary) {
    var_dump($canary, $iterable->current());
    $f = $iterable->next(...);
    $f();
    var_dump("not executed");
});
$fiber->start();
$im = imagecreate(800, 800);
imageline($im, 550, 250, 550, 750, IMG_COLOR_STYLED);
$fp = php_cli_server_connect();
fclose($fp);
$o = new TrampolineTest();
$callback2 = [$o, 'trampoline2'];
spl_autoload_register($callback2);
$GLOBALS['b'] = 2;
$b = &$GLOBALS['b'];
$GLOBALS['b'] = 3;
$c = $b;
var_dump($b, $GLOBALS['b'], $c);
$timestamp = mktime(8, 8, 8, 8, 8, 2008);
$inputs = array(
      // Predefined Date constants
      'DATE_ATOM Constant' => DATE_ATOM,
      'DATE_COOKIE Constant' => DATE_COOKIE,
      'DATE_RFC822 Constant' => DATE_RFC822,
      'DATE_RFC850 Constant' => DATE_RFC850,
      'DATE_RFC1036 Constant' => DATE_RFC1036,
      'DATE_RFC1123 Constant' => DATE_RFC1123,
      'DATE_RFC2822 Constant' => DATE_RFC2822,
      'DATE_RFC3339 Constant' => DATE_RFC3339,
      'DATE_RSS Constant' => DATE_RSS,
      'DATE_W3C Constant' => DATE_W3C,
);
foreach($inputs as $key =>$value) {
      echo "\n--$key--\n";
      var_dump( gmdate($value, $timestamp) );
      var_dump( gmdate($value) );
}
var_dump( gmdate($value, $timestamp) );
$reflector = new ReflectionClass(C::class);
$obj = $reflector->newLazyProxy(function () {
    throw new \Exception('Initializer');
}, ReflectionClass::SKIP_INITIALIZATION_ON_SERIALIZE);
test('Proxy', $obj);
test("http://t[est@[::1]");
$zip = new ZipArchive();
$zip->setPassword('bar');
printf("printf test 12:%5.2f\n", -12.34);
$db = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
$stmt = $db->prepare("CALL testSp()");
$stmt->execute();
var_dump ( rtrim("rtrim test0123456789", "0..9") );
var_dump(getopt("abcd"));
$context = stream_context_create(['http' => ['method' => 'MKCALENDAR']]);
var_dump(file_get_contents("http://" . PHP_CLI_SERVER_ADDRESS, false, $context));
$fd = fopen('php://memory','w');
$filter = stream_filter_append($fd, 'user_filter');
$f = __DIR__."/data/test.txt.gz";
$h = gzopen($f, 'r');
var_dump(gzread($h, -1));
$tz2 = new DateTimeZone('Europe/Berlin');
$dom = Dom\HTMLDocument::createEmpty();
dumpNodeList($dom->getElementsByTagName("foo:HTML"));
