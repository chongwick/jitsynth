<?php
var_dump( $count );
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt', Pdo::class, false);
$time = '2000-01-01 00:00:00.000000';
$tz_aus = new DateTimeZone('Australia/Sydney');
$tz_us = new DateTimeZone('America/Los_Angeles');
$auz = new DateTime($time, $tz_aus);
$us = new DateTime($time, $tz_us);
$diff = $auz->diff($us);
$b = 1;
$func_argvs = [
    [ 'bug_gh9090_void_none',         [ ]                           ],
    [ 'bug_gh9090_void_int_char',     [ 42, "hello" ]               ],
    [ 'bug_gh9090_void_int_char_var', [ 42, "d=%d s=%s", -1, "ok" ] ],
];
$reflector = new ReflectionClass(C::class);
$sert = "file://" . __DIR__ . "/san-cert.pem";
$array_object = array();
$heredoc = <<<EOT
hello world
EOT;
foreach ($offsets as $dimension) {
    $container = false;
    $error = 'false[' . zend_test_var_export($dimension) . '] has different outputs' . "\n";

    include $var_dim_filename;
    $varOutput = ob_get_contents();
    ob_clean();
    $varOutput = str_replace(
        [$var_dim_filename],
        ['%s'],
        $varOutput
    );

    if (
        !preg_match($EXPECTED_OUTPUT_VALID_OFFSETS_REGEX, $varOutput)
        && !preg_match($EXPECTED_OUTPUT_INVALID_OFFSETS_REGEX, $varOutput)
        && !preg_match($EXPECTED_OUTPUT_FLOAT_OFFSETS_REGEX, $varOutput)
        && $varOutput !== EXPECTED_OUTPUT_RESOURCE_STDERR_OFFSETS
    ) {
        file_put_contents(__DIR__ . DIRECTORY_SEPARATOR . "debug_false_container_{$failuresNb}.txt", $varOutput);
        ++$failuresNb;
        $failures[] = $error;
    }
    ++$testCasesTotal;
}
$error = 'false[' . zend_test_var_export($dimension) . '] has different outputs' . "\n";
$now = new DateTime('2018-11-03 11:34:20.781751');
$ago = new DateTime('2018-11-03 11:34:20.000000');
$diff = $ago->diff($now, true);
$mysqli = new mysqli("$host:$port", $user, $passwd, $db);
$tbl = "test";
$sql = "SELECT bit_column_1 FROM $tbl";
$result = $mysqli->query($sql);
$headers = ["Host: bad.com"];
$im = ImageCreateTrueColor(10, 10);
$color = ImageColorAllocateAlpha($im, 0, 0, 0, 1);
class C {
    public function __toString() {
        global $c;
        $c = [];
        throw new Exception(__METHOD__);
    }
}
$c = new C();
$a = 'ok';
$_a = $a;
class dataAccessor
{
}
main::$dataAccessor = new dataAccessor;
$formatter = new \NumberFormatter('en', \NumberFormatter::DECIMAL);
class C extends stdClass {
    public int $a;
}
$obj = new C();
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug54028_2" . DIRECTORY_SEPARATOR;
$fi = new finfo(FILEINFO_MIME_TYPE);
$plain = "The quick brown fox jumps over the lazy dog.";
$fp = fopen(PHP_OS_FAMILY === 'Windows' ? 'nul' : '/dev/null', 'w');
$ch = curl_init();
curl_close($ch);
$im = ImageCreateTrueColor(10, 10);
imagesavealpha($im, true);
var_dump(range(1, 3, -1));
ob_start();
function &test() {
    try {
        return $a;
    } finally {
        $a = 2;
    }
}
var_dump(test());
set_exception_handler(function (\Throwable $exception) {
    echo 'Caught: ' . $exception->getMessage() . "\n";
});
$s = "1234567890a";
$i = "010";
var_dump($s[$i], isset($s[$i]));
var_dump('ERR');
$cert = "file://" . __DIR__ . "/cert.crt";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_CLIENT, array($cpca), $utfl));
$bert = "file://" . __DIR__ . "/bug41033.pem";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_CRL_SIGN, array($cpca), $utfl));
$array = array("test" => 1);
$a = "lest";
var_dump($array[$a]);
var_dump(file_get_contents(__DIR__ . "/bug69279.txt"));
$compression = [
    'gz' => ['zlib.deflate', 'gzinflate'],
    'bz2' => ['bzip2.compress', 'bzdecompress']
];
foreach ($compression as $ext => [$filter, $function]) {
    $stream = fopen(__DIR__ . "/75776.$ext", 'w');
    stream_filter_append($stream, $filter);
    fwrite($stream,"sdfgdfg");
    fflush($stream);
    fclose($stream);

    $compressed = file_get_contents(__DIR__ . "/75776.$ext");
    var_dump($function($compressed));
}
$stream = fopen(__DIR__ . "/75776.$ext", 'w');
fclose($stream);
printf("printf test 13:%5d\n", -12);
$db = getDbConnection();
$sql = '
    SET NOCOUNT ON
    SELECT 0 AS [result]
';
$stmt = $db->query($sql);
var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));
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
testLastInsertId($db);
var_dump(range('a', 'c', -1));
php_cli_server_start('foo bar');
class A {
    public $a;
}
$a = new A();
$b = new A();
$prop = new ReflectionProperty($b, 'dyn');
$prop->setRawValue($a, 1);
$cfg = <<<EOT
[global]
error_log = {{FILE:LOG}}
[unconfined]
listen = {{ADDR}}
pm = dynamic
pm.max_children = 5
pm.start_servers = 1
pm.min_spare_servers = 1
pm.max_spare_servers = 3
EOT;
$code = <<<EOT
<?php
echo "Test\n";
EOT;
$tester = new FPM\Tester($cfg, $code);
$tester->terminate();
var_dump(__METHOD__);
$s = 'O:15:"ReflectionClass":0:{}';
var_dump(unserialize($s));
$arg = new Stdclass();
print_r($arg);
$output = array();
$test_fl = __DIR__ . DIRECTORY_SEPARATOR . md5(uniqid());
$test_fl_escaped = escapeshellarg($test_fl);
exec(getenv('TEST_PHP_EXECUTABLE_ESCAPED') . " -n $test_fl_escaped", $output);
function f_0() {
    function crash()
    {
        $notDefined[$i] = 'test';
    }
    crash();
}
class A {
    public $a;
}
$a = new A();
$b = new A();
$prop = new ReflectionProperty($b, 'dyn');
var_dump($prop->getRawValue($a));
$conn = pg_connect($conn_str);
$table='test_68638';
pg_insert($conn,$table, array('id' => 2, 'value' => 10));
$priorityQueue = new SplPriorityQueue();
var_dump($priorityQueue->getExtractFlags() & SplPriorityQueue::EXTR_PRIORITY);
$fp = fopen("php://memory", "r+");
stream_get_line($fp, 1024*1024*2, "aaaa");
$dt = new DateTime('@1604219400');
$dt->setTimezone(new DateTimeZone('America/Boise'));
