<?php
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
function test() {
    $dtor = new class { function __destruct() { throw new Exception; } };
    $a = 1;
    return [0, $a];
}
$x = test();
$im = ImageCreateTrueColor(10, 10);
$bordercolor=ImageColorAllocateAlpha($im, 0, 0, 0, 2);
$dsn = 'sqlite:./bug64705NonExistingDir/bug64705NonExistingDb';
$deflator = deflate_init(ZLIB_ENCODING_RAW);
$re = new ReflectionExtension("hash");
var_dump($re->getConstants());
function f_0() {
    $t = new stdClass;
    return $t;
}
function f_1() {
    return 42;
}
function f_2() {
    public function __construct($c)
        {
            $this->b = new C($c);
        }
    $this->b = new C($c);
    return serialize(clone $this->b);
    class C
    {
        public $c;
    
        public function __construct($c)
        {
            $this->c = $c;
        }
    };
}
function f_3() {
    return 42;
}
class P {
    protected function common() {
        throw new Exception('Unreachable');
    }
}
class A extends P {
    public function test(P $sibling) {
        $sibling->common();
    }
}
class C extends P {
    use T;
}
$a = new A();
$a->test(new C());
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$depth0 = "depth02";
touch(__DIR__ . DIRECTORY_SEPARATOR . $depth0 . DIRECTORY_SEPARATOR . 'getSubPathname_test_1.tmp');
exec(getenv('TEST_PHP_EXECUTABLE_ESCAPED') . ' -n -r "exit(2);"', $output, $exit_code);
set_error_handler("customErrorHandler");
$db = MySQLPDOTest::factory();
$db->exec("CREATE TABLE test_pecl_bug_5200 (bar INT NOT NULL, phase enum('please_select', 'I', 'II', 'IIa', 'IIb', 'III', 'IV'))");
print_r($str_instead);
$fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
$phar = new Phar($fname);
var_dump($phar->getStub());
$varOutput = ob_get_contents();
$varOutput = str_replace(
        [$var_dim_filename],
        ['%s'],
        $varOutput
    );
file_put_contents(__DIR__ . DIRECTORY_SEPARATOR . "debug_false_container_{$failuresNb}.txt", $varOutput);
$wrong = "wrong";
var_dump(openssl_pkcs7_verify($wrong, 0));
$x = fprintf($fp, "fprintf test 1:%.5s", "abcdefghij");
var_dump($x);
set_error_handler("customErrorHandler");
function f_4() {
    static function comp_func_cr($a, $b) {
            if ($a->priv_member === $b->priv_member) return 0;
            return ($a->priv_member > $b->priv_member) ? 1 : -1;
        }
    return ($a->priv_member > $b->priv_member) ? 1 : -1;
}
function f_5() {
    return true;
}
function f_6() {
    return true;
}
function f_7() {
    return 0;
}
$server = new soapserver(null,array('uri'=>"http://testuri.org"));
$server->addfunction("test");
register_shutdown_function('ABC');
exec(getenv('TEST_PHP_EXECUTABLE_ESCAPED') . ' -n -r "exit(2);"', $output, $exit_code);
var_dump($_SERVER["HTTP_X_FORWARDED_FOR"]);
var_dump($sends1);
$db = getDbConnection();
var_dump($db->getAttribute(PDO::DBLIB_ATTR_SKIP_EMPTY_ROWSETS));
function display($res)
{
	echo implode("\n", array_map(fn($row) => implode("\t", $row), $res))."\n";
}
$res = [];
display($res);
$counter = 0;
ob_start(function ($buffer) use (&$c, &$counter) {
        $c = 0;
        ++$counter;
}, 1);
$ch = curl_init("https://localhost/userpwd");
curl_setopt($ch, CURLOPT_STDERR, fopen("php://stdout", "w"));
$r = new ResourceBundle( 'en_US', BUNDLE );
printf( "length: %d\n", count($r) );
$dom = Dom\HTMLDocument::createEmpty();
$container = $dom->appendChild(createElement($dom, "container"));
$container->appendChild(createElementNS($dom, NULL, "HTML", "4"));
#[\AllowDynamicProperties]
class C {
    public $b;
    public function __construct() {
        $this->a = new Canary();
    }
}
$obj = new C();
var_dump($obj->a);
function f_8() {
    public function __construct($callback) {
            $this->callback = $callback;
        }
    $this->callback = $callback;
    public function invoke($invocation) {
            return call_user_func_array($this->callback, $invocation->parameters);
        }
    return call_user_func_array($this->callback, $invocation->parameters);
}
function f_9() {
    return 0;
}
function f_10() {
    return true;
}
function f_11() {
    return serialize($this->data);
}
function f_12() {
    static function comp_func_cr($a, $b) {
            if ($a->priv_member === $b->priv_member) return 0;
            return ($a->priv_member > $b->priv_member) ? 1 : -1;
        }
    static function comp_func_cr2($a, $b) {
            echo ".";
            if ($a->priv_member === $b->priv_member) return 0;
            return ($a->priv_member < $b->priv_member) ? 1 : -1;
        }
    return ($a->priv_member < $b->priv_member) ? 1 : -1;
}
function f_13() {
    return 42;
}
function f_14() {
    $t = new stdClass;
    return $t;
}
function f_15() {
    return true;
}
$dom = Dom\HTMLDocument::createEmpty();
dumpNodeList($dom->getElementsByTagName("foo:HTML"));
var_dump(soundex("Knuth")       == soundex("Kant"));
$context = stream_context_create(['dummy' => ['foo' => 'bar']]);
file_get_contents('dummy://foo', false, $context);
$start_key = 0;
$num = 2;
$unset_var = 10;
class test
{
  var $t = 10;
  function __toString()
  {
    return "testObject";
  }
}
$values = array(
            // empty string
  /* 1  */  "",
            '',
            // objects
  /* 3  */  new test(),

            // undefined variable
            @$undefined_var,

            // unset variable
  /* 5  */  @$unset_var,
);
for($index = 0; $index < count($values); $index ++)
{
  echo "-- Iteration $counter --\n";
  $val = $values[$index];

  var_dump( array_fill($start_key , $num , $val) );

  $counter++;
}
$val = $values[$index];
var_dump( array_fill($start_key , $num , $val) );
$ch = curl_init();
curl_close($ch);
$im = imagecreate(800, 800);
imageline($im, 600, 200, 600, 700, IMG_COLOR_STYLED);
$cert = "file://" . __DIR__ . "/cert.crt";
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SMIME_SIGN));
bar();
$array = array("test" => 1);
$a = "lest";
var_dump($array[$a]);
set_error_handler(function($_, $m) { throw new Exception($m); });
session_start();
$dom = Dom\HTMLDocument::createEmpty();
dumpNodeList($dom->getElementsByTagName("htML"));
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
$d0 = $prefix . "ソフト";
$d1 =
dir($d1);

;
#[AllowDynamicProperties]
class C {
    public $a = 1;
}
function test(string $name, object $obj) {
    printf("# %s\n", $name);

    $c = new C();
    $c->dyn = 1;
    $propReflector = new ReflectionProperty($c, 'dyn');

    try {
        $propReflector->setRawValueWithoutLazyInitialization($obj, 'test');
    } catch (\ReflectionException $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
}
$c = new C();
$propReflector = new ReflectionProperty($c, 'dyn');
$propReflector->setRawValueWithoutLazyInitialization($obj, 'test');
var_dump(defined('SO_REUSEPORT'));
error_reporting(E_ALL);
var_dump(mhash(133, 1086849124, 133));
$responses = array(
    "data://text/plain,HTTP/1.1 200 Some very long reason-phrase to test that this is properly handled by our code without adding a new header like  Bad: Header\r\nGood: Header\r\n\r\nBody",
    "data://text/plain,HTTP/1.1 200 \r\nGood: Header\r\n\r\nBody",
);
['pid' => $pid, 'uri' => $uri] = http_server($responses, $output);
$f = @fopen($uri, "r");
fclose($f);
var_dump(__METHOD__);
$inputs = array(
    '<frameset > </frameset>',
    '<html><frameset> </frameset> </html',
);
foreach ($inputs as $input) {

    $t = tidy_parse_string($input);
    $t->cleanRepair();
    var_dump(tidy_get_body($t));
}
$t = tidy_parse_string($input);
var_dump(tidy_get_body($t));
printf("[008] PS and non-PS results differ, dumping data\n");
$db = MySQLPDOTest::factory();
$stmt = $db->prepare('SELECT * FROM test_33689');
$stmt->execute();
$test = array("A\x00B" => "Hello world");
var_export($test);
var_dump(range('z', 'a', 100));
function f_16() {
    return true;
}
function f_17() {
    class Foo {
        var $bar = array();
    
        static function bar() {
            static $instance = null;
            $instance = new Foo();
            return $instance->bar;
        }
    }
    $instance = new Foo();
    return $instance->bar;
}
function f_18() {
    static function comp_func_cr($a, $b) {
            if ($a->priv_member === $b->priv_member) return 0;
            return ($a->priv_member > $b->priv_member) ? 1 : -1;
        }
    return ($a->priv_member > $b->priv_member) ? 1 : -1;
}
function f_19() {
    return $this->test;
}
$dom = Dom\HTMLDocument::createEmpty();
dumpNodeList($dom->getElementsByTagName("HTml"));
$cert = "file://" . __DIR__ . "/cert.crt";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_ANY, array($cpca), $utfl));
$filename =  __DIR__ . DIRECTORY_SEPARATOR . 'bug70752.txt';
var_dump(file_exists($filename));
$bert = "file://" . __DIR__ . "/bug41033.pem";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_ENCRYPT, array($cpca), $utfl));
printf("printf test 11: 123456789012345678901234567890\n");
$str = "repeater id='loopt' dataSrc=subject columns=2";
preg_match_all("/(['\"])(.*)(?<!\\\\)\\1/sU", $str, $str_instead);
var_dump(self::$x);
range(0, pow(2.0, 100000000));
$arrays = array(
  array(),
  array(NULL),
  array(null),
  array(true),
  array(""),
  array(''),
  array(array(), array()),
  array(array(1, 2), array('a', 'b')),
  array(1 => 'One'),
  array("test" => "is_array"),
  array(0),
  array(-1),
  array(10.5, 5.6),
  array("string", "test"),
  array('string', 'test')
);
foreach ($arrays as $var_array ) {
  echo "-- Iteration $loop_counter --\n"; $loop_counter++;
  var_dump( is_array ($var_array) );
}
var_dump( is_array ($var_array) );
$depth0 = "depth02";
$depth1 = "depth1";
$depth2 = "depth2";
$targetDir = __DIR__ . DIRECTORY_SEPARATOR . $depth0 . DIRECTORY_SEPARATOR . $depth1 . DIRECTORY_SEPARATOR . $depth2;
touch($targetDir . DIRECTORY_SEPARATOR . 'getSubPathname_test_2.tmp');
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
foreach($needles as $needle) {
  var_dump( strrchr($blank_line, $needle) );
}
var_dump( strrchr($blank_line, $needle) );
$im = ImageCreateTrueColor(10, 10);
imagesavealpha($im, true);
$cert = "file://" . __DIR__ . "/cert.crt";
$rcrt = openssl_x509_read($cert);
class di extends DateInterval {
    public $unit = 1;
}
$I = new di('P10D');
$I->unit = 42;
ini_set("intl.error_level", E_WARNING);
$xml = '<?xml version="1.0" encoding="utf-8" ?>
<test>
</test>';
$root = simplexml_load_string($xml);
var_dump( rtrim("234\x0005678\x0000efgh\xijkl\x0n1", "\x0n1") );
$db = PDOTest::test_factory(dirname(__FILE__) . '/common.phpt');
$stmt = $db->prepare('select ??- lseg \'((-1,0),(1,0))\'');
set_error_handler(
            function ($errno, $errstr, $errfile, $errline) {
                $this->handleError($errno, $errstr, $errfile, $errline);
            }
        );
$timestamp = "2005-11-08T11:22:07+03:00";
function __doRequest($request, $location, $action, $version, $one_way = 0): string {
    echo "$request\n";
    ob_start();
    $this->server->handle($request);
    $response = ob_get_contents();
    ob_end_clean();
    return $response;
  }
$logOnEvent = new LogOnEvent(34567, $timestamp);
class LogOnEvent {
  public $audienceMemberId;
  public $timestamp;

  function __construct($audienceMemberId, $timestamp) {
    $this->audienceMemberId = $audienceMemberId;
    $this->timestamp = $timestamp;
  }
}
function __construct($version, $activityId, $messageId, $source, $logOnEvent=NULL, $logOffEvent=NULL) {
    $this->version = $version;
    $this->activityId = $activityId;
    $this->messageId = $messageId;
    $this->source = $source;
    $this->logOnEvent = $logOnEvent;
    $this->logOffEvent = $logOffEvent;
  }
$this->activityId = $activityId;
$dom = new DOMDocument('1.0', 'UTF-8');
$node = $dom->getElementById('test');
var_dump($node->textContent);
$o = new SplFileInfo('.');
$iterator = 1;
$iterator++;
var_dump(c1::$a3);
$server = stream_socket_server("tcp://[::1]:1337/");
$counter = 1;
$counter++;
function test($case) {
    $plain = "The quick brown fox jumps over the lazy dog.";
    $fn = "bug71263.bz2";
    $compressed = (string) bzcompress($plain);
    echo "Compressed len = ", strlen($compressed), "\n";

    if ($case == 1) {
        // Set a random byte in the middle of the compressed data
        // --> php_bz2_decompress_filter() detects fatal error
        // --> fread() displays empty string then garbage, no errors detected:
        $compressed[strlen($compressed) - 15] = 'X';
    } else if ($case == 2) {
        // Truncate the compressed data
        // --> php_bz2_decompress_filter() does not detect errors,
        // --> fread() displays the empty string:
        $compressed = substr($compressed, 0, strlen($compressed) - 20);
    } else {
        // Corrupted final CRC
        // --> php_bz2_decompress_filter() detects fatal error
        // --> fread() displays an empty string, then the correct plain text, no error detected:
        $compressed[strlen($compressed)-2] = 'X';
    }

    file_put_contents($fn, $compressed);

    $r = fopen($fn, "r");
    stream_filter_append($r, 'bzip2.decompress', STREAM_FILTER_READ);
    while (!feof($r)) {
        $s = fread($r, 100);
        echo "read: "; var_dump($s);
    }
    fclose($r);
    unlink($fn);
}
test(1);
$originalEnvelopeData = "any string with \x1a is cut at this point.";
$tmpFileOut2 = tempnam(sys_get_temp_dir(), 'test');
$envelopeData = file_get_contents($tmpFileOut2);
var_dump(strlen($originalEnvelopeData), strlen($envelopeData), filesize($tmpFileOut2));
set_error_handler(function() {
//    var_dump(func_get_args());
    DoesNotExists::$nope = true;
}, E_ALL);
function foo() {
  var_dump("hello");
}
foo();
$array_test = array("a", "b", "d", 7, "u" => "U", -4, "-.008" => "neg.008");
var_dump( end($array_test) );
$varOutput = ob_get_contents();
$varOutput = str_replace(
        [$var_dim_filename],
        ['%s'],
        $varOutput
    );
file_put_contents(__DIR__ . DIRECTORY_SEPARATOR . "debug_false_container_{$failuresNb}.txt", $varOutput);
function test() {
    $a = 1;
    try {
        return $a;
    } finally {
        $a = 2;
    }
}
var_dump(test());
$threesixty = M_PI * 2.0;
var_dump(sin($threesixty));
$var = -PHP_INT_MAX - 1;
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
printf("printf test 15:%b\n", 170);
var_dump ( rtrim("rtrim test0123456789", "0..9") );
$domd = new DOMDocument();
$xp = new DOMXPath($domd);
$xp->query("//foo[contains(text(), " . $xp->quote("tes\x00t") . ")]");
catch (\Exception $e) {
    printf("%s: %s\n", $e::class, $e->getMessage());
}
printf("%s: %s\n", $e::class, $e->getMessage());
$dom = Dom\HTMLDocument::createEmpty();
$container = $dom->appendChild(createElement($dom, "container"));
$container->appendChild(createElement($dom, "foo:HTML", "6"));
class C {
    public int $a;
}
$reflector = new ReflectionClass(C::class);
$obj = new C();
$reflector->resetAsLazyProxy($obj, function ($obj) use ($reflector) {
    try {
        $reflector->resetAsLazyProxy($obj, function () { });
    } catch (Error $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
    try {
        $reflector->resetAsLazyGhost($obj, function () { });
    } catch (Error $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
    return new C();
});
function foo() {
    $x = 1;
    $x += 0;
    ++$x; // mem -> reg
    return $x;
}
var_dump(foo());
class foo extends SplFixedArray {
    public function __construct($size) {
    }
}
$x = new foo(2);
$z = clone $x;
var_dump(class_exists("TestClass", true));
public function __construct($c)
    {
        $this->b = new C($c);
    }
public function __construct($c)
    {
        $this->c = $c;
    }
$this->c = $c;
$re = new ReflectionExtension("hash");
$filename = __DIR__ . '/bug77432.phar';
printf("printf test 16:%x\n", 170);
gth = 3;

$d;
class MySQL_Ext extends mysqli{
    protected $fooData = array();
    private $extData;

    public function isEmpty()
    {
        $this->extData[] = 'Bar';
        return empty($this->extData);
    }
}
$MySQL_Ext = new MySQL_Ext($host, $user, $passwd, $db, $port, $socket);
class A
{
    public string $prop;
}
class B
{
    public function __toString()
    {
        global $a;
        $a = null;
        return str_repeat('a', 1);
    }
}
$a = new A();
$a->prop = new B();
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
php_admin_value[cgi.fix_pathinfo] = yes
EOT;
$code = <<<EOT
<?php
echo \$_SERVER["SCRIPT_NAME"] . "\n";
echo \$_SERVER["ORIG_SCRIPT_NAME"] . "\n";
echo \$_SERVER["SCRIPT_FILENAME"] . "\n";
echo \$_SERVER["PATH_INFO"] . "\n";
echo \$_SERVER["PHP_SELF"];
EOT;
$tester = new FPM\Tester($cfg, $code);
$tester->terminate();
function f_20() {
    $reflector = new ReflectionClass(DateTime::class);
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
    $header = <<<HEADER
    enum bug_gh16013_enum {
    	BUG_GH16013_A = 1,
    	BUG_GH16013_B = 2,
    };
    struct bug_gh16013_int_struct {
    	int field;
    };
    struct bug_gh16013_callback_struct {
    	int8_t (*return_int8)(int8_t);
    	uint8_t (*return_uint8)(uint8_t);
    	int16_t (*return_int16)(int16_t);
    	uint16_t (*return_uint16)(uint16_t);
    	int32_t (*return_int32)(int32_t);
    	uint32_t (*return_uint32)(uint32_t);
    	float (*return_float)(float);
    	struct bug_gh16013_int_struct (*return_struct)(struct bug_gh16013_int_struct);
    	enum bug_gh16013_enum (*return_enum)(enum bug_gh16013_enum);
    };
    
    char bug_gh16013_return_char();
    bool bug_gh16013_return_bool();
    short bug_gh16013_return_short();
    int bug_gh16013_return_int();
    enum bug_gh16013_enum bug_gh16013_return_enum();
    struct bug_gh16013_int_struct bug_gh16013_return_struct();
    HEADER;
    $ffi = FFI::cdef($header, ffi_get_php_dll_name());
    $bug_gh16013_callback_struct = $ffi->new('struct bug_gh16013_callback_struct');
    $bug_gh16013_callback_struct->return_float = function($val) use($ffi) {
        $cdata = $ffi->new('float');
        $cdata->cdata = $val;
        return $cdata;
    };
    class foo
    {
    // no members
    }
    $unset_object = new foo();
    global $user, $host, $passwd, $db, $port, $socket;
    $this->mysqli = new mysqli($host, $user, $passwd, $db, $port, $socket);
    $result = $this->mysqli->query("SELECT NOW() AS my_time FROM DUAL");
    $result->close();
    $certificateGenerator = new CertificateGenerator();
    $certificateGenerator->saveCaCert(__DIR__ . "/san-cert.pem");
    function gen() {
        yield 0;
        yield from gen();
    }
    function bar($gen) {
        yield from $gen;
    }
    $gen = gen();
    $a = bar($gen);
    $a->next();
    var_dump(array_pop($input), $input);
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
    $cert = "file://" . __DIR__ . "/cert.crt";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_SERVER, array($cpca)));
    $sql = "SELECT 11111 as `1`, 22222 as `2`";
    $link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
    $link->real_query($sql);
    $dest = __DIR__ . "/bug40228";
    $zip = new ZipArchive;
    $zip->extractTo($dest);
    ob_start();
    $fn = "bug71263.bz2";
    unlink($fn);
    $values = array(10,
                    10.3,
                    3.9505e3,
                    037,
                    0x5F,
                    "10",
                    "3950.5",
                    "3.9505e3",
                    "039",
                    true,
                    false,
                    );
    foreach($values as $value) {
        echo "\n-- Iteration $iterator --\n";
        var_dump(expm1($value));
        $iterator++;
    }
    var_dump(expm1($value));
    $msgfmt = new MessageFormatter('en_US', '{0,number,integer}');
    $msgfmt->parse('abc');
    $batch_file_path = __DIR__ . '/ghsa-9fcc-425m-g385_003.bat';
    $descriptorspec = [STDIN, STDOUT, STDOUT];
    for ($i = 1; $i <= 255; $i++) {
      echo "Testing $i\n";
      try {
        $proc = @proc_open([$batch_file_path . chr($i), "\"&notepad.exe"], $descriptorspec, $pipes, null, null, array("bypass_shell" => true));
        var_dump($proc);
        proc_close($proc);
      } catch (Error) {}
    }
    $proc = @proc_open([$batch_file_path . chr($i), "\"&notepad.exe"], $descriptorspec, $pipes, null, null, array("bypass_shell" => true));
    var_dump($proc);
    function zerofill($offset, $link, $datatype, $insert = 1) {
    
            mysqli_query($link, 'ALTER TABLE test DROP zero');
            $sql = sprintf('ALTER TABLE test ADD zero %s UNSIGNED ZEROFILL', $datatype);
            if (!mysqli_query($link, $sql)) {
                // no worries - server might not support it
                return true;
            }
    
            if (!mysqli_query($link, sprintf('UPDATE test SET zero = %s', $insert))) {
                printf("[%03d] UPDATE failed, [%d] %s\n",
                    $offset, mysqli_errno($link), mysqli_error($link));
                return false;
            }
    
            if (!($res = mysqli_query($link, 'SELECT zero FROM test LIMIT 1'))) {
                printf("[%03d] SELECT failed, [%d] %s\n",
                    $offset, mysqli_errno($link), mysqli_error($link));
                return false;
            }
    
            $row = mysqli_fetch_assoc($res);
            $meta = mysqli_fetch_fields($res);
            mysqli_free_result($res);
            $meta = $meta[0];
            $length = $meta->length;
            if ($length > strlen($insert)) {
    
                $expected = str_repeat('0', $length - strlen($insert));
                $expected .= $insert;
                if ($expected !== $row['zero']) {
                    printf("[%03d] Expecting '%s' got '%s'\n", $offset, $expected, $row['zero']);
                    return false;
                }
    
            } else if ($length <= 1) {
                printf("[%03d] Length reported is too small to run test\n", $offset);
                return false;
            }
    
            return true;
        }
    mysqli_close($link);
    $im = imagecreate(800, 800);
    imageline($im, 200, 100, 700, 100, IMG_COLOR_STYLED);
    function test(string $name, object $obj) {
        printf("# %s:\n", $name);
    
        var_dump($obj);
        var_dump($obj->a);
        var_dump($obj);
    }
    printf("# %s:\n", $name);
    set_error_handler(
                function ($errno, $errstr, $errfile, $errline) {
                    $this->handleError($errno, $errstr, $errfile, $errline);
                }
            );
    set_exception_handler(function() {
        echo 'First handler' . PHP_EOL;
    });
    $doc = new \DOMDocument();
    $target = $doc->documentElement->lastChild;
    var_dump($target);
    define("TEST",2);
    print_r($str_instead);
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $phar = new Phar($fname);
    var_dump($phar->getStub());
    $s = "1234567890a";
    $i = "010";
    var_dump($s[$i], isset($s[$i]));
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_TIMESTAMP_SIGN, array($cpca)));
    function unserialize($data) {
            session_decode($data);
        }
    session_decode($data);
    ob_start("test");
    function do_throw() { throw new Exception; }
    $f = function () {};
    $f->__invoke(do_throw());
    ini_set("intl.error_level", E_WARNING);
    $priorityQueue = new SplPriorityQueue();
    print_r($priorityQueue->top());
    var_dump(mhash(133, 1086849124, 133));
    ini_set('exif.decode_unicode_motorola', 'UCS-2LE');
    $data = [
        "name" => ["family" => AF_INET6, "addr" => "::1"],
        "buffer_size" => 2000,
        "controllen" => socket_cmsg_space(IPPROTO_IPV6, IPV6_PKTINFO) +
                socket_cmsg_space(IPPROTO_IPV6, IPV6_TCLASS),
    ];
    print_r($data);
    $ch = curl_init();
    $fp = fopen(PHP_OS_FAMILY === 'Windows' ? 'nul' : '/dev/null', 'w');
    curl_setopt($ch, CURLOPT_FILE, $fp);
     ($dirs as $d) {
       
    dirs as $d) {
    ;
    $doc = new \DOMDocument();
    $target = $doc->documentElement->lastChild;
    var_dump($target);
    class C {
    	use T;
    	private array $a = [1];
    }
    $o = new C;
    $o->foo();
    $s = "1234567890a";
    var_dump($s["10"], isset($s["10"]));
    $str = "repeater id='loopt' dataSrc=subject columns=2";
    preg_match_all("/(['\"])((?:\\\\\\1|.)*)\\1/sU", $str, $str_instead);
    var_dump(error_get_last());
    class TrampolineTest {
        public function __call(string $name, array $arguments) {
            echo 'Trampoline for ', $name, PHP_EOL;
        }
    }
    $o = new TrampolineTest();
    $callback2 = [$o, 'trampoline2'];
    var_dump(spl_autoload_unregister($callback2));
    $array_test = array("a", "b", "d", 7, "u" => "U", -4, "-.008" => "neg.008");
    var_dump( end($array_test) );
    function test(string $name, object $obj) {
        printf("# %s:\n", $name);
    
        var_dump($obj);
        var_dump(@$obj->dynamic++);
        var_dump($obj);
    }
    var_dump(@$obj->dynamic++);
    class C {
        public int $a;
    }
    $reflector = new ReflectionClass(C::class);
    $obj = new C();
    $reflector->resetAsLazyProxy($obj, function ($obj) use ($reflector) {
        try {
            $reflector->resetAsLazyProxy($obj, function () { });
        } catch (Error $e) {
            printf("%s: %s\n", $e::class, $e->getMessage());
        }
        try {
            $reflector->resetAsLazyGhost($obj, function () { });
        } catch (Error $e) {
            printf("%s: %s\n", $e::class, $e->getMessage());
        }
        return new C();
    });
    class string1 {
      public function __toString() {
        return "Object";
      }
    }
    $obj = new string1;
    var_dump( rtrim($obj, "tc") );
    $im = ImageCreateTrueColor(10, 10);
    $bordercolor=ImageColorAllocateAlpha($im, 0, 0, 0, 2);
    $color = ImageColorAllocateAlpha($im, 0, 0, 0, 1);
    ImageFillToBorder($im, 5, 5, $bordercolor, $color);
    function test(string $input) {
        var_dump(filter_var($input, FILTER_VALIDATE_URL));
    }
    test("http://te[st@2001:db8:3333:4444:5555:6666:1.2.3.4]");
    var_dump(strncasecmp("test ", "E", 10));
    $dom = Dom\HTMLDocument::createFromString(<<<HTML
    <!DOCTYPE html>
    <html>
        <body>
            <svg xmlns="http://www.w3.org/2000/svg" height="1"></svg>
            <math></math>
        </body>
    </html>
    HTML);
    $body = $dom->getElementsByTagName("body")[0];
    $prefixed = $body->appendChild($dom->createElementNS("urn:a", "a:a"));
    var_dump($prefixed->lookupNamespaceURI(NULL));
    printf("# Ghost:\n");
    $info = opcache_get_status()['interned_strings_usage'];
    var_dump($info['buffer_size']);
    $header = <<<HEADER
    enum bug_gh16013_enum {
    	BUG_GH16013_A = 1,
    	BUG_GH16013_B = 2,
    };
    struct bug_gh16013_int_struct {
    	int field;
    };
    struct bug_gh16013_callback_struct {
    	int8_t (*return_int8)(int8_t);
    	uint8_t (*return_uint8)(uint8_t);
    	int16_t (*return_int16)(int16_t);
    	uint16_t (*return_uint16)(uint16_t);
    	int32_t (*return_int32)(int32_t);
    	uint32_t (*return_uint32)(uint32_t);
    	float (*return_float)(float);
    	struct bug_gh16013_int_struct (*return_struct)(struct bug_gh16013_int_struct);
    	enum bug_gh16013_enum (*return_enum)(enum bug_gh16013_enum);
    };
    
    char bug_gh16013_return_char();
    bool bug_gh16013_return_bool();
    short bug_gh16013_return_short();
    int bug_gh16013_return_int();
    enum bug_gh16013_enum bug_gh16013_return_enum();
    struct bug_gh16013_int_struct bug_gh16013_return_struct();
    HEADER;
    $ffi = FFI::cdef($header, ffi_get_php_dll_name());
    var_dump($ffi->bug_gh16013_return_int());
    function zerofill($offset, $link, $datatype, $insert = 1) {
    
            mysqli_query($link, 'ALTER TABLE test DROP zero');
            $sql = sprintf('ALTER TABLE test ADD zero %s UNSIGNED ZEROFILL', $datatype);
            if (!mysqli_query($link, $sql)) {
                // no worries - server might not support it
                return true;
            }
    
            if (!mysqli_query($link, sprintf('UPDATE test SET zero = %s', $insert))) {
                printf("[%03d] UPDATE failed, [%d] %s\n",
                    $offset, mysqli_errno($link), mysqli_error($link));
                return false;
            }
    
            if (!($res = mysqli_query($link, 'SELECT zero FROM test LIMIT 1'))) {
                printf("[%03d] SELECT failed, [%d] %s\n",
                    $offset, mysqli_errno($link), mysqli_error($link));
                return false;
            }
    
            $row = mysqli_fetch_assoc($res);
            $meta = mysqli_fetch_fields($res);
            mysqli_free_result($res);
            $meta = $meta[0];
            $length = $meta->length;
            if ($length > strlen($insert)) {
    
                $expected = str_repeat('0', $length - strlen($insert));
                $expected .= $insert;
                if ($expected !== $row['zero']) {
                    printf("[%03d] Expecting '%s' got '%s'\n", $offset, $expected, $row['zero']);
                    return false;
                }
    
            } else if ($length <= 1) {
                printf("[%03d] Length reported is too small to run test\n", $offset);
                return false;
            }
    
            return true;
        }
    zerofill(5, $link, 'INT');
    $header = <<<HEADER
    enum bug_gh16013_enum {
    	BUG_GH16013_A = 1,
    	BUG_GH16013_B = 2,
    };
    struct bug_gh16013_int_struct {
    	int field;
    };
    struct bug_gh16013_callback_struct {
    	int8_t (*return_int8)(int8_t);
    	uint8_t (*return_uint8)(uint8_t);
    	int16_t (*return_int16)(int16_t);
    	uint16_t (*return_uint16)(uint16_t);
    	int32_t (*return_int32)(int32_t);
    	uint32_t (*return_uint32)(uint32_t);
    	float (*return_float)(float);
    	struct bug_gh16013_int_struct (*return_struct)(struct bug_gh16013_int_struct);
    	enum bug_gh16013_enum (*return_enum)(enum bug_gh16013_enum);
    };
    
    char bug_gh16013_return_char();
    bool bug_gh16013_return_bool();
    short bug_gh16013_return_short();
    int bug_gh16013_return_int();
    enum bug_gh16013_enum bug_gh16013_return_enum();
    struct bug_gh16013_int_struct bug_gh16013_return_struct();
    HEADER;
    $ffi = FFI::cdef($header, ffi_get_php_dll_name());
    var_dump($ffi->bug_gh16013_return_short());
    $tester = new FPM\Tester($cfg);
    $tester->start();
    $bert = "file://" . __DIR__ . "/bug41033.pem";
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_CRL_SIGN));
    function validate($value)
    {
        foreach ([0] as $_) {
            $a = &$value->a;
            $value->a ?? null;
        }
    }
    validate((object) []);
    $db = PDOTest::test_factory(dirname(__FILE__) . '/common.phpt');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_NUM);
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
    $pdo->exec("insert into t values (0, 'original')");
    var_dump(json_decode('{"key":"value", "":"value"}', true));
    class C {
    	use T;
    	private array $a = [1];
    }
    $o = new C;
    $o->foo();
    $bert = "file://" . __DIR__ . "/bug41033.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_ANY, array($cpca)));
    $dom = new DOMDocument;
    $test1 = $dom->getElementById('x');
    $test1->setAttribute('xml:id', 'y');
    function test(string $input) {
        var_dump(filter_var($input, FILTER_VALIDATE_URL));
    }
    var_dump(filter_var($input, FILTER_VALIDATE_URL));
    $tester = new FPM\Tester($cfg);
    $tester->terminate();
    $func_ptrs = [
        'bug_gh9090_void_none_ptr',
        'bug_gh9090_void_int_char_ptr',
        'bug_gh9090_void_int_char_var_ptr',
        'bug_gh9090_void_char_int_ptr',
        'bug_gh9090_int_int_char_ptr',
    ];
    $func_argvs = [
        [ 'bug_gh9090_void_none',         [ ]                           ],
        [ 'bug_gh9090_void_int_char',     [ 42, "hello" ]               ],
        [ 'bug_gh9090_void_int_char_var', [ 42, "d=%d s=%s", -1, "ok" ] ],
    ];
    foreach ($func_ptrs as $func_ptr) {
        foreach ($func_argvs as $func_argv) {
            [ $func, $argv ] = $func_argv;
    
            $ok = true;
            try {
                $ffi->$func_ptr = $ffi->$func;
                call_user_func_array($ffi->$func_ptr, $argv);
            } catch (FFI\Exception $e) {
                $ok = false;
            }
    
            printf("%-36s = %-36s ? %s\n", $func_ptr, $func, $ok ? 'yes' : 'no');
        }
    }
    foreach ($func_argvs as $func_argv) {
            [ $func, $argv ] = $func_argv;
    
            $ok = true;
            try {
                $ffi->$func_ptr = $ffi->$func;
                call_user_func_array($ffi->$func_ptr, $argv);
            } catch (FFI\Exception $e) {
                $ok = false;
            }
    
            printf("%-36s = %-36s ? %s\n", $func_ptr, $func, $ok ? 'yes' : 'no');
        }
    [ $func, $argv ] = $func_argv;
    $ok = false;
    printf("%-36s = %-36s ? %s\n", $func_ptr, $func, $ok ? 'yes' : 'no');
    $header = <<<HEADER
    enum bug_gh16013_enum {
    	BUG_GH16013_A = 1,
    	BUG_GH16013_B = 2,
    };
    struct bug_gh16013_int_struct {
    	int field;
    };
    struct bug_gh16013_callback_struct {
    	int8_t (*return_int8)(int8_t);
    	uint8_t (*return_uint8)(uint8_t);
    	int16_t (*return_int16)(int16_t);
    	uint16_t (*return_uint16)(uint16_t);
    	int32_t (*return_int32)(int32_t);
    	uint32_t (*return_uint32)(uint32_t);
    	float (*return_float)(float);
    	struct bug_gh16013_int_struct (*return_struct)(struct bug_gh16013_int_struct);
    	enum bug_gh16013_enum (*return_enum)(enum bug_gh16013_enum);
    };
    
    char bug_gh16013_return_char();
    bool bug_gh16013_return_bool();
    short bug_gh16013_return_short();
    int bug_gh16013_return_int();
    enum bug_gh16013_enum bug_gh16013_return_enum();
    struct bug_gh16013_int_struct bug_gh16013_return_struct();
    HEADER;
    $ffi = FFI::cdef($header, ffi_get_php_dll_name());
    $bug_gh16013_callback_struct = $ffi->new('struct bug_gh16013_callback_struct');
    $bug_gh16013_callback_struct->return_enum = function($val) use($ffi) {
        $cdata = $ffi->new('enum bug_gh16013_enum');
        $cdata->cdata = $val;
        return $cdata;
    };
    var_dump(($bug_gh16013_callback_struct->return_enum)($ffi->BUG_GH16013_B));
    var_dump(getimagesize(__DIR__ . "/test13pix.swf"));
    $mysqli = new mysqli("$host:$port", $user, $passwd, $db);
    $tbl = "test";
    $sql = "INSERT INTO $tbl (bit_column_1) VALUES (0b10101010101)";
    $mysqli->query($sql);
    ob_start();
    define("TEST",3);
    $cfg = <<<EOT
    [global]
    error_log = {{FILE:LOG}}
    [unconfined]
    listen = {{ADDR}}
    pm = static
    pm.max_children = 1
    catch_workers_output = yes
    EOT;
    $code = <<<EOT
    <?php
    echo 1;
    EOT;
    $tester = new FPM\Tester($cfg, $code);
    $tester->request(connKeepAlive: true)->expectBody('1');
    $im = imagecreate(800, 800);
    imagepalettetotruecolor($im);
    function zerofill($offset, $link, $datatype, $insert = 1) {
    
            mysqli_query($link, 'ALTER TABLE test DROP zero');
            $sql = sprintf('ALTER TABLE test ADD zero %s UNSIGNED ZEROFILL', $datatype);
            if (!mysqli_query($link, $sql)) {
                // no worries - server might not support it
                return true;
            }
    
            if (!mysqli_query($link, sprintf('UPDATE test SET zero = %s', $insert))) {
                printf("[%03d] UPDATE failed, [%d] %s\n",
                    $offset, mysqli_errno($link), mysqli_error($link));
                return false;
            }
    
            if (!($res = mysqli_query($link, 'SELECT zero FROM test LIMIT 1'))) {
                printf("[%03d] SELECT failed, [%d] %s\n",
                    $offset, mysqli_errno($link), mysqli_error($link));
                return false;
            }
    
            $row = mysqli_fetch_assoc($res);
            $meta = mysqli_fetch_fields($res);
            mysqli_free_result($res);
            $meta = $meta[0];
            $length = $meta->length;
            if ($length > strlen($insert)) {
    
                $expected = str_repeat('0', $length - strlen($insert));
                $expected .= $insert;
                if ($expected !== $row['zero']) {
                    printf("[%03d] Expecting '%s' got '%s'\n", $offset, $expected, $row['zero']);
                    return false;
                }
    
            } else if ($length <= 1) {
                printf("[%03d] Length reported is too small to run test\n", $offset);
                return false;
            }
    
            return true;
        }
    mysqli_close($link);
    $filename = __DIR__ . '/_fromUri_custom_constructor.xml';
    $xmlstring = '<?xml version="1.0" encoding="UTF-8"?>
    <books></books>';
    file_put_contents($filename, $xmlstring);
    $header = <<<HEADER
    enum bug_gh16013_enum {
    	BUG_GH16013_A = 1,
    	BUG_GH16013_B = 2,
    };
    struct bug_gh16013_int_struct {
    	int field;
    };
    struct bug_gh16013_callback_struct {
    	int8_t (*return_int8)(int8_t);
    	uint8_t (*return_uint8)(uint8_t);
    	int16_t (*return_int16)(int16_t);
    	uint16_t (*return_uint16)(uint16_t);
    	int32_t (*return_int32)(int32_t);
    	uint32_t (*return_uint32)(uint32_t);
    	float (*return_float)(float);
    	struct bug_gh16013_int_struct (*return_struct)(struct bug_gh16013_int_struct);
    	enum bug_gh16013_enum (*return_enum)(enum bug_gh16013_enum);
    };
    
    char bug_gh16013_return_char();
    bool bug_gh16013_return_bool();
    short bug_gh16013_return_short();
    int bug_gh16013_return_int();
    enum bug_gh16013_enum bug_gh16013_return_enum();
    struct bug_gh16013_int_struct bug_gh16013_return_struct();
    HEADER;
    $ffi = FFI::cdef($header, ffi_get_php_dll_name());
    $bug_gh16013_callback_struct = $ffi->new('struct bug_gh16013_callback_struct');
    $bug_gh16013_callback_struct->return_float = function($val) use($ffi) {
        $cdata = $ffi->new('float');
        $cdata->cdata = $val;
        return $cdata;
    };
    var_dump(($bug_gh16013_callback_struct->return_float)(12.34));
    var_dump(range('z', 'a', 100));
    function validate($value)
    {
        foreach ([0] as $_) {
            $a = &$value->a;
            $value->a ?? null;
        }
    }
    validate((object) ['b' => 0]);
    catch (Exception $e) {
        var_dump($e->getMessage());
    }
    var_dump($e->getMessage());
    date_default_timezone_set("UTC");
    $values =  array (
      //Decimal values
      0,
      1,
      12345,
      -12345,
    
      //Octal values
      02,
      010,
      030071,
      -030071,
    
      //Hexadecimal values
      0x0,
      0x1,
      0xABCD,
      -0xABCD
    );
    foreach($values as $value) {
          echo "\n-- Iteration $iterator --\n";
          var_dump( image_type_to_mime_type($value) );
          $iterator++;
    }
    var_dump( image_type_to_mime_type($value) );
    class Canary {
        public function __destruct() {
            var_dump(__METHOD__);
        }
    }
    $this->a = new Canary();
    $a = "lest";
    $meta_res = $stmt->result_metadata();
    $field = $meta_res->fetch_field();
    printf("Name         : %s\n", $field->name);
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_CLIENT, array($cpca), $utfl));
    $zip = new ZipArchive();
    $zip->close();
    $conn = pg_connect($conn_str);
    $table='test_68638';
    var_dump(pg_update($conn,$table, array('value' => 'inf'), array('id' => 1), PGSQL_DML_STRING));
    $dom = Dom\HTMLDocument::createEmpty();
    dumpNodeList($dom->getElementsByTagName("bar:html"));
    $output = array();
    $test_fl = __DIR__ . DIRECTORY_SEPARATOR . md5(uniqid());
    $test_fl_escaped = escapeshellarg($test_fl);
    exec(getenv('TEST_PHP_EXECUTABLE_ESCAPED') . " -n $test_fl_escaped", $output);
    var_dump(strncasecmp("test ", "E", 10));
    $text = 'This is an ‘example’ of using DOM splitText';
    $st
    rt = 30;
    $le
    gth = 3;
    
    $d
     = new DOMDocument('1.0', 'UTF-8');
    $no
    e = $dom->createTextNode($text);
    $do
    ched = $node->splitText($start);
    $ma
    ched->splitText($length);
    pri;
    $bert = "file://" . __DIR__ . "/bug41033.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_ANY, array($cpca), $utfl));
    byRef(C[0]);
    function byVal($arg) {
        var_dump($arg);
    }
    function byRef(&$arg) {
        var_dump($arg);
    };
    set_error_handler(function($_, $m) { throw new Exception($m); });
    $date = (new ReflectionClass(DateTime::class))->newInstanceWithoutConstructor();
    $dateperiod = (new ReflectionClass(DatePeriod::class))->newInstanceWithoutConstructor();
    $dateperiod->__unserialize(['start' => $date]);
    $db = PDOTest::factory();
    $db->beginTransaction();
    $db = getDbConnection();
    $sql = '
        SET NOCOUNT ON
        SELECT 0 AS [result]
    ';
    $stmt = $db->query($sql);
    var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));
    $dt = new DateTime('@1604215800');
    $dt->add(new DateInterval('PT1M'));
    mysqli_close($link);
    var_dump(range('z', 'a', 100));
    $mysqli = new mysqli("$host:$port", $user, $passwd, $db);
    $tbl = "test";
    $sql = "INSERT INTO $tbl (bit_column_1) VALUES (0b10101010101)";
    $mysqli->query($sql);
    $im = imagecreatetruecolor(1, 1);
    imagescale($im, 1, 0, 0);
    var_dump($row[0]);
    $priorityQueue = new SplPriorityQueue();
    print_r($priorityQueue->top());
    function zerofill($offset, $link, $datatype, $insert = 1) {
    
            mysqli_query($link, 'ALTER TABLE test DROP zero');
            $sql = sprintf('ALTER TABLE test ADD zero %s UNSIGNED ZEROFILL', $datatype);
            if (!mysqli_query($link, $sql)) {
                // no worries - server might not support it
                return true;
            }
    
            if (!mysqli_query($link, sprintf('UPDATE test SET zero = %s', $insert))) {
                printf("[%03d] UPDATE failed, [%d] %s\n",
                    $offset, mysqli_errno($link), mysqli_error($link));
                return false;
            }
    
            if (!($res = mysqli_query($link, 'SELECT zero FROM test LIMIT 1'))) {
                printf("[%03d] SELECT failed, [%d] %s\n",
                    $offset, mysqli_errno($link), mysqli_error($link));
                return false;
            }
    
            $row = mysqli_fetch_assoc($res);
            $meta = mysqli_fetch_fields($res);
            mysqli_free_result($res);
            $meta = $meta[0];
            $length = $meta->length;
            if ($length > strlen($insert)) {
    
                $expected = str_repeat('0', $length - strlen($insert));
                $expected .= $insert;
                if ($expected !== $row['zero']) {
                    printf("[%03d] Expecting '%s' got '%s'\n", $offset, $expected, $row['zero']);
                    return false;
                }
    
            } else if ($length <= 1) {
                printf("[%03d] Length reported is too small to run test\n", $offset);
                return false;
            }
    
            return true;
        }
    zerofill(8, $link, 'FLOAT');
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
    php_admin_value[cgi.fix_pathinfo] = yes
    EOT;
    $code = <<<EOT
    <?php
    echo \$_SERVER["SCRIPT_NAME"] . "\n";
    echo \$_SERVER["ORIG_SCRIPT_NAME"] . "\n";
    echo \$_SERVER["SCRIPT_FILENAME"] . "\n";
    echo \$_SERVER["PATH_INFO"] . "\n";
    echo \$_SERVER["PHP_SELF"];
    EOT;
    $tester = new FPM\Tester($cfg, $code);
    [$sourceFilePath, $scriptName] = $tester->createSourceFileAndScriptName();
    $tester
        ->request(
            uri: $scriptName . '/1%202',
            scriptFilename: "proxy:fcgi://" . $tester->getAddr() . $sourceFilePath . '/1%202',
            scriptName: $scriptName . '/1 2'
        )
        ->expectBody([$scriptName, $scriptName . '/1 2', $sourceFilePath, '/1 2', $scriptName . '/1 2']);
    var_dump( range(1.0, 7.0, 6.5) );
    var_dump(sprintf("%%%.2f", 1.23456789e10));
    $wsdl = __DIR__."/bug35142.wsdl";
    function __construct($wsdl, $options) {
        parent::__construct($wsdl, $options);
        $this->server = new SoapServer($wsdl, $options);
        $this->server->addFunction('PostEvents');
      }
    $this->server = new SoapServer($wsdl, $options);
    function __doRequest($request, $location, $action, $version, $one_way = 0): string {
        echo "$request\n";
        ob_start();
        $this->server->handle($request);
        $response = ob_get_contents();
        ob_end_clean();
        return $response;
      }
    $this->server->handle($request);
    $now = new DateTime('2018-11-03 11:34:20.781751');
    $ago = new DateTime('2018-11-03 11:34:20.000000');
    $diff = $now->diff($ago);
    var_dump($diff->invert, $diff->s, $diff->f);
    function test(string $input) {
        var_dump(filter_var($input, FILTER_VALIDATE_URL));
    }
    test("http://test[@2001:db8:3333:4444:5555:6666:1.2.3.4]");
    session_start();
    print_r($str_instead);
    set_exception_handler(null);
    printf("printf test 3:%f\n", 10.0/3);
    $db = PDOTest::factory();
    $res = $db->query("SELECT a FROM test36428");
    var_dump($res->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'SimpleXMLElement', array('<root/>')));
    $test_array = array(1, array(1 => "one", "two" => 2, "" => "f") );
    var_dump( end($test_array[1]) );
    $a[10] = "42";
    $i = "010";
    var_dump($a[$i], isset($a[$i]));
    $fp = fopen (__FILE__, "r");
    fclose($fp);
    ini_set("intl.error_level", E_WARNING);
    $r = new Phar(__DIR__ . "/bug69279.phar.zip");
    var_dump($r["bug69279.txt"]->isCompressed());
    printf("printf test 7:%010.2f\n", 2.5);
    call_user_func("static::ok");
    $f = __DIR__."/data/test.txt.gz";
    $h = gzopen($f, 'r');
    gzclose($h);
    $db = PDOTest::test_factory(__DIR__ . '/common.phpt');
    $stmt = $db->prepare("SELECT 1");
    var_dump($stmt->execute([1]));
    var_dump( range(1, 7, fdiv(0, 0)) );
    $r = new ResourceBundle( 'en_US', BUNDLE );
    $r2 = $r['testarray'];
    printf( "testarray: %s\n", $r2[2] );
    $headers1 = exif_read_data(__DIR__ . '/bug64739.jpg');
    var_dump($headers1['Title'][0] === '?');
    $dbh = @pg_connect($conn_str);
    var_dump(pg_last_notice($dbh));
    $empty = "";
    var_dump(openssl_pkcs7_verify($empty, 0));
    $conn = pg_connect($conn_str);
    $table='test_68638';
    pg_update($conn,$table, array('value' => '-inf'), array('id' => 2));
    $fn = "bug71263.bz2";
    $r = fopen($fn, "r");
    stream_filter_append($r, 'bzip2.decompress', STREAM_FILTER_READ);
    $bert = "file://" . __DIR__ . "/bug41033.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_NS_SSL_SERVER, array($cpca), $utfl));
    var_dump(filter_var("", FILTER_SANITIZE_ENCODED, FILTER_FLAG_ENCODE_HIGH));
    array_splice($GLOBALS,0,count($GLOBALS));
    var_dump(mb_check_encoding("&\xc2\xb7 TEST TEST TEST TEST TEST TEST", "HTML-ENTITIES"));
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
    $prefix . "フォルダ";
    
    mkdir($prefi
    mdir($prefi;
    $cert = "file://" . __DIR__ . "/cert.crt";
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_SERVER));
    $originalEnvelopeData = "any string with \x1a is cut at this point.";
    $tmpFileOut2 = tempnam(sys_get_temp_dir(), 'test');
    $envelopeData = file_get_contents($tmpFileOut2);
    var_dump(strlen($originalEnvelopeData), strlen($envelopeData), filesize($tmpFileOut2));
    class A {
        static function name() { return 'A'; }
        function foo() {
            $fn = function() { return static::name(); };
            echo static::name() . ' vs ' . $fn() . "\n";
        }
        function bar() {
            $fn = static function() { return static::name(); };
            echo static::name() . ' vs ' . $fn() . "\n";
        }
        static function baz() {
            $fn = function() { return static::name(); };
            echo static::name() . ' vs ' . $fn() . "\n";
        }
    }
    class B extends A {
        static function name() { return 'B'; }
    }
    (new B)->foo();
    function does_not_work()
    {
        global $data; // Remove this line to make array_multisort() work
    
        $data = array('first', 'fifth', 'second', 'forth', 'third');
        $sort = array(1, 5, 2, 4, 3);
        array_multisort($sort, $data);
    
        var_dump($data);
    }
    does_not_work();
    $sql = "SELECT 11111 as `1`, 22222 as `2`";
    $link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
    $link->real_query($sql);
    abstract class Y {
        abstract public string $prop {
            get;
            set => "foo";
        }
    }
    class X extends Y {
        public string $prop {
            get => "bar";
        }
    }
    $x = new X;
    $x->prop = 1;
    var_dump($x->prop);
    set_exception_handler(function (\Throwable $exception) {
        echo 'Caught: ' . $exception->getMessage() . "\n";
        throw new \Exception('exception handler');
    });
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
    $prefix . "フォルダ";
    
    mkdir($prefi
    et_basename;
    $dom = new DOMDocument;
    $dom->getElementsByTagName('test2')[0]->setIdAttribute('attr', true);
    var_dump(error_reporting());
    printf("printf test 18:%16b\n", 170);
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
    $create = sprintf('CREATE TABLE test(id INT, col1 %s)', $column_def);
    var_dump($create);
    global $user, $host, $passwd, $db, $port, $socket;
    $this->mysqli = new mysqli($host, $user, $passwd, $db, $port, $socket);
    $result = $this->mysqli->query("SELECT NOW() AS my_time FROM DUAL");
    $result->close();
    debug_print_backtrace();
    var_dump(filter_input(INPUT_SERVER, "HTTP_X_FORWARDED_FOR", FILTER_UNSAFE_RAW));
    $db = getDbConnection();
    $db->setAttribute(PDO::DBLIB_ATTR_SKIP_EMPTY_ROWSETS, true);
    vprintf("vprintf test 1:%2\$-2d %1\$2d\n", array(1, 2));
    function test($p12_contents, $password) {
        openssl_pkcs12_read($p12_contents, $cert_data, $password);
        openssl_error_string();
        var_dump(count($cert_data['extracerts']));
    }
    $pass = "qwerty";
    test($p12, $pass);
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
    $reflector = new ReflectionClass(C::class);
    $reflector->initializeLazyObject($obj);
    function __construct($wsdl) {
        parent::__construct($wsdl);
        $this->server = new SoapServer($wsdl);
        $this->server->addFunction('Test');
      }
    $this->server = new SoapServer($wsdl);
    $this->server->addFunction('Test');
    $f = __DIR__."/data/test.txt.gz";
    $h = gzopen($f, 'r');
    gzclose($h);
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_ANY));
    var_dump(mb_strpos('Hello', 'e', 0, '8bit'));
    $dom = new DOMDocument;
    var_dump($dom->getElementById('x')?->nodeName);
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_SERVER, array($cpca), $utfl));
    var_dump(range('z', 'a', 100));
    $arr1 = array(1, "float", "f4", "hello", 2.2, 'color', "string", "pen\n", 11);
    $now = new DateTimeImmutable('2022-10-10 08:41:54.534620', new DateTimeZone('UTC'));
    $timestamp = "2005-11-08T11:22:07+03:00";
    function __doRequest($request, $location, $action, $version, $one_way = 0): string {
        echo "$request\n";
        ob_start();
        $this->server->handle($request);
        $response = ob_get_contents();
        ob_end_clean();
        return $response;
      }
    $logOnEvent = new LogOnEvent(34567, $timestamp);
    class LogOnEvent {
      public $audienceMemberId;
      public $timestamp;
    
      function __construct($audienceMemberId, $timestamp) {
        $this->audienceMemberId = $audienceMemberId;
        $this->timestamp = $timestamp;
      }
    }
    function __construct($version, $activityId, $messageId, $source, $logOnEvent=NULL, $logOffEvent=NULL) {
        $this->version = $version;
        $this->activityId = $activityId;
        $this->messageId = $messageId;
        $this->source = $source;
        $this->logOnEvent = $logOnEvent;
        $this->logOffEvent = $logOffEvent;
      }
    $this->version = $version;
    $i=0;
    $fd = fopen('php://memory','w');
    $filter = stream_filter_append($fd, 'user_filter');
    list($value) = yield;
    var_dump($value);
    printf("[004] Expecting '2009-12-03' got '%s'\n", $row[0]);
    $mysql = new my_mysqli($host, $user, $passwd, $db, $port, $socket);
    $mysql->query("CREATE TABLE temp (id INT UNSIGNED NOT NULL)");
    $cfg = <<<EOT
    [global]
    error_log = {{FILE:LOG}}
    [unconfined]
    listen = {{ADDR}}
    pm = static
    pm.max_children = 1
    catch_workers_output = yes
    EOT;
    $code = <<<EOT
    <?php
    echo 1;
    EOT;
    $tester = new FPM\Tester($cfg, $code);
    $tester->requestValues(connKeepAlive: true)->expectValue('FCGI_MPXS_CONNS', '0');
    $haystack = 'Hello,\t\n\0\n  $&!#%\o,()*+-./:;<=>?@hello123456he \x234 \101 ';
    $needle = array(
      //regular strings
      'l',
      'L',
      'HELLO',
      'hEllo',
    
      //escape characters
      '\t',
      '\T',
      '     ',
      '\n',
      '\N',
      '
    ',  //new line
    
      //nulls
      '\0',
    
      //boolean false
      FALSE,
      false,
    
      //empty string
      '',
    
      //special chars
      ' ',
      '$',
      ' $',
      '&',
      '!#',
      '%\o',
      '\o,',
      '()',
      '*+',
      '+',
      '-',
      '.',
      '.;',
      ':;',
      ';',
      '<=>',
      '>',
      '=>',
      '?',
      '@',
      '@hEllo',
    
      '12345', //decimal numeric string
      '\x23',  //hexadecimal numeric string
      '#',  //hexadecimal numeric string
      '\101',  //octal numeric string
      'A',
      '456HEE',  //numerics + chars
      42, //needle as int(ASCII value of '*')
      $haystack  //haystack as needle
    );
    for($index=0; $index<count($needle); $index++) {
      echo "\n-- Iteration $count --\n";
      var_dump( strrchr($haystack, $needle[$index]) );
      $count ++;
    }
    var_dump( strrchr($haystack, $needle[$index]) );
    $wrong = "wrong";
    var_dump(openssl_pkcs7_verify($wrong, 0));
    function test(string $name, object $obj) {
        printf("# %s:\n", $name);
    
        var_dump($obj);
        var_dump($obj->a);
        var_dump($obj);
    }
    var_dump($obj);
    $zip = new ZipArchive();
    $zip->close();
    $interval = new DateInterval('P1D');
    $dt = new DateTime('first day of January 2011');
    $dt->add($interval);
    $conn = odbc_connect($dsn, $user, $pass);
    $res = odbc_exec($conn, "SELECT * FROM bug80147");
    odbc_binmode($res, ODBC_BINMODE_RETURN);
    class C {
        public int $a;
    }
    $reflector = new ReflectionClass(C::class);
    $obj = new C();
    $reflector->initializeLazyObject($obj);
    var_dump(soundex("Knuth"));
    $timestamp = gmmktime(8, 8, 8, 8, 8, 2008);
    $inputs = array(
          'The ISO 8601:1988 week number' => "%V",
          'Weekday as decimal' => "%u",
    );
    foreach($inputs as $key =>$value) {
          echo "\n--$key--\n";
          var_dump( gmstrftime($value) );
          var_dump( gmstrftime($value, $timestamp) );
    }
    var_dump( gmstrftime($value, $timestamp) );
    var_dump(soundex("Lukasiewicz") == soundex("Lissajous"));
    $db = PDOTest::factory();
    var_dump($db->query("SELECT * from test34630")->fetchAll(PDO::FETCH_ASSOC));
    $im = imagecreate(800, 800);
    test_image_equals_file(__DIR__ . '/bug43475.png', $im);
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
    $t = new derived();
    $t->test();
    var_dump ( rtrim("rtrim testABCXYZ", "A..Z") );
    function lookup($s){
           return match($s){
            1 => 1,
            2 => 2,
            3 => 3,
            4 => 4,
            5 => 5,
            6 => 6,
            7 => 7,
            8 => 8,
            9 => 9,
            10 => 10,
            11 => 11,
            12 => 12,
            13 => 13,
            14 => 14,
            15 => 15,
            16 => 16,
            17 => 17,
            18 => 18,
            19 => 19,
            20 => 20,
            21 => 21,
            22 => 22,
            23 => 23,
            24 => 24,
            25 => 25,
            26 => 26,
            27 => 27,
            28 => 28,
            29 => 29,
            30 => 30,
            31 => 31,
            32 => 32,
            33 => 33,
            34 => 34,
            35 => 35,
            36 => 36,
            37 => 37,
            38 => 38,
            39 => 39,
            40 => 40,
            41 => 41,
            42 => 42,
            43 => 43,
            44 => 44,
            45 => 45,
            46 => 46,
            47 => 47,
            48 => 48,
            49 => 49,
            50 => 50,
            51 => 51,
            52 => 52,
            53 => 53,
            54 => 54,
            55 => 55,
            56 => 56,
            57 => 57,
            58 => 58,
            59 => 59,
            60 => 60,
            61 => 61,
            62 => 62,
            63 => 63,
            64 => 64,
            65 => 65,
            66 => 66,
            67 => 67,
            68 => 68,
            69 => 69,
            70 => 70,
            71 => 71,
            72 => 72,
            73 => 73,
            74 => 74,
            75 => 75,
            76 => 76,
            77 => 77,
            78 => 78,
            79 => 79,
            80 => 80,
            81 => 81,
            82 => 82,
            83 => 83,
            84 => 84,
            85 => 85,
            86 => 86,
            87 => 87,
            88 => 88,
            89 => 89,
            90 => 90,
            91 => 91,
            92 => 92,
            93 => 93,
            94 => 94,
            95 => 95,
            96 => 96,
            97 => 97,
            98 => 98,
            99 => 99,
            100 => 100,
            101 => 101,
            102 => 102,
            103 => 103,
            104 => 104,
            105 => 105,
            106 => 106,
            107 => 107,
            108 => 108,
            109 => 109,
            110 => 110,
            111 => 111,
            112 => 112,
            113 => 113,
            114 => 114,
            115 => 115,
            116 => 116,
            117 => 117,
            118 => 118,
            119 => 119,
            120 => 120,
            121 => 121,
            122 => 122,
            123 => 123,
            124 => 124,
            125 => 125,
            126 => 126,
            127 => 127,
            128 => 128,
            129 => 129,
            130 => 130,
            131 => 131,
            132 => 132,
            133 => 133,
            134 => 134,
            135 => 135,
            136 => 136,
            137 => 137,
            138 => 138,
            139 => 139,
            140 => 140,
            141 => 141,
            142 => 142,
            143 => 143,
            144 => 144,
            145 => 145,
            146 => 146,
            147 => 147,
            148 => 148,
            149 => 149,
            150 => 150,
            151 => 151,
            152 => 152,
            153 => 153,
            154 => 154,
            155 => 155,
            156 => 156,
            157 => 157,
            158 => 158,
            159 => 159,
            160 => 160,
            161 => 161,
            162 => 162,
            163 => 163,
            164 => 164,
            165 => 165,
            166 => 166,
            167 => 167,
            168 => 168,
            169 => 169,
            170 => 170,
            171 => 171,
            172 => 172,
            173 => 173,
            174 => 174,
            175 => 175,
            176 => 176,
            177 => 177,
            178 => 178,
            179 => 179,
            180 => 180,
            181 => 181,
            182 => 182,
            183 => 183,
            184 => 184,
            185 => 185,
            186 => 186,
            187 => 187,
            188 => 188,
            189 => 189,
            190 => 190,
            191 => 191,
            192 => 192,
            193 => 193,
            194 => 194,
            195 => 195,
            196 => 196,
            197 => 197,
            198 => 198,
            199 => 199,
            200 => 200,
            201 => 201,
            202 => 202,
            203 => 203,
            204 => 204,
            205 => 205,
            206 => 206,
            207 => 207,
            208 => 208,
            209 => 209,
            210 => 210,
            211 => 211,
            212 => 212,
            213 => 213,
            214 => 214,
            215 => 215,
            216 => 216,
            217 => 217,
            218 => 218,
            219 => 219,
            220 => 220,
            221 => 221,
            222 => 222,
            223 => 223,
            224 => 224,
            225 => 225,
            226 => 226,
            227 => 227,
            228 => 228,
            229 => 229,
            230 => 230,
            231 => 231,
            232 => 232,
            233 => 233,
            234 => 234,
            235 => 235,
            236 => 236,
            237 => 237,
            238 => 238,
            239 => 239,
            240 => 240,
            241 => 241,
            242 => 242,
            243 => 243,
            244 => 244,
            245 => 245,
            246 => 246,
            247 => 247,
            248 => 248,
            249 => 249,
            250 => 250,
            251 => 251,
            252 => 252,
            253 => 253,
            254 => 254,
            255 => 255,
            256 => 256,
            257 => 257,
            258 => 258,
            259 => 259,
            260 => 260,
            261 => 261,
            262 => 262,
            263 => 263,
            264 => 264,
            265 => 265,
            266 => 266,
            267 => 267,
            268 => 268,
            269 => 269,
            270 => 270,
            271 => 271,
            272 => 272,
            273 => 273,
            274 => 274,
            275 => 275,
            276 => 276,
            277 => 277,
            278 => 278,
            279 => 279,
            280 => 280,
            281 => 281,
            282 => 282,
            283 => 283,
            284 => 284,
            285 => 285,
            286 => 286,
            287 => 287,
            288 => 288,
            289 => 289,
            290 => 290,
            291 => 291,
            292 => 292,
            293 => 293,
            294 => 294,
            295 => 295,
            296 => 296,
            297 => 297,
            298 => 298,
            299 => 299,
            300 => 300,
            301 => 301,
            302 => 302,
            303 => 303,
            304 => 304,
            305 => 305,
            306 => 306,
            307 => 307,
            308 => 308,
            309 => 309,
            310 => 310,
            311 => 311,
            312 => 312,
            313 => 313,
            314 => 314,
            315 => 315,
            316 => 316,
            317 => 317,
            318 => 318,
            319 => 319,
            320 => 320,
            321 => 321,
            322 => 322,
            323 => 323,
            324 => 324,
            325 => 325,
            326 => 326,
            327 => 327,
            328 => 328,
            329 => 329,
            330 => 330,
            331 => 331,
            332 => 332,
            333 => 333,
            334 => 334,
            335 => 335,
            336 => 336,
            337 => 337,
            338 => 338,
            339 => 339,
            340 => 340,
            341 => 341,
            342 => 342,
            343 => 343,
            344 => 344,
            345 => 345,
            346 => 346,
            347 => 347,
            348 => 348,
            349 => 349,
            350 => 350,
            351 => 351,
            352 => 352,
            353 => 353,
            354 => 354,
            355 => 355,
            356 => 356,
            357 => 357,
            358 => 358,
            359 => 359,
            360 => 360,
            361 => 361,
            362 => 362,
            363 => 363,
            364 => 364,
            365 => 365,
            366 => 366,
            367 => 367,
            368 => 368,
            369 => 369,
            370 => 370,
            371 => 371,
            372 => 372,
            373 => 373,
            374 => 374,
            375 => 375,
            376 => 376,
            377 => 377,
            378 => 378,
            379 => 379,
            380 => 380,
            381 => 381,
            382 => 382,
            383 => 383,
            384 => 384,
            385 => 385,
            386 => 386,
            387 => 387,
            388 => 388,
            389 => 389,
            390 => 390,
            391 => 391,
            392 => 392,
            393 => 393,
            394 => 394,
            395 => 395,
            396 => 396,
            397 => 397,
            398 => 398,
            399 => 399,
            400 => 400,
            401 => 401,
            402 => 402,
            403 => 403,
            404 => 404,
            405 => 405,
            406 => 406,
            407 => 407,
            408 => 408,
            409 => 409,
            410 => 410,
            411 => 411,
            412 => 412,
            413 => 413,
            414 => 414,
            415 => 415,
            416 => 416,
            417 => 417,
            418 => 418,
            419 => 419,
            420 => 420,
            421 => 421,
            422 => 422,
            423 => 423,
            424 => 424,
            425 => 425,
            426 => 426,
            427 => 427,
            428 => 428,
            429 => 429,
            430 => 430,
            431 => 431,
            432 => 432,
            433 => 433,
            434 => 434,
            435 => 435,
            436 => 436,
            437 => 437,
            438 => 438,
            439 => 439,
            440 => 440,
            441 => 441,
            442 => 442,
            443 => 443,
            444 => 444,
            445 => 445,
            446 => 446,
            447 => 447,
            448 => 448,
            449 => 449,
            450 => 450,
            451 => 451,
            452 => 452,
            453 => 453,
            454 => 454,
            455 => 455,
            456 => 456,
            457 => 457,
            458 => 458,
            459 => 459,
            460 => 460,
            461 => 461,
            462 => 462,
            463 => 463,
            464 => 464,
            465 => 465,
            466 => 466,
            467 => 467,
            468 => 468,
            469 => 469,
            470 => 470,
            471 => 471,
            472 => 472,
            473 => 473,
            474 => 474,
            475 => 475,
            476 => 476,
            477 => 477,
            478 => 478,
            479 => 479,
            480 => 480,
            481 => 481,
            482 => 482,
            483 => 483,
            484 => 484,
            485 => 485,
            486 => 486,
            487 => 487,
            488 => 488,
            489 => 489,
            490 => 490,
            491 => 491,
            492 => 492,
            493 => 493,
            494 => 494,
            495 => 495,
            496 => 496,
            497 => 497,
            498 => 498,
            499 => 499,
            500 => 500,
            501 => 501,
            502 => 502,
            503 => 503,
            504 => 504,
            505 => 505,
            506 => 506,
            507 => 507,
            508 => 508,
            509 => 509,
            510 => 510,
            511 => 511,
            512 => 512,
            513 => 513,
        };
    }
    var_dump(lookup(513));
    function test() {
        (new B)->foo();
        (new B)->bar();
        (new B)->baz();
        B::baz();
    }
    test();
    $str = "repeater id='loopt' dataSrc=subject columns=2";
    preg_match_all("/(['\"])(.*)(?<!\\\\)\\1/sU", $str, $str_instead);
    $fp = fopen(PHP_OS_FAMILY === 'Windows' ? 'nul' : '/dev/null', 'w');
    fclose($fp);
    function new_closure_gen() {
        return function() {
            static $foo = 0;
            yield ++$foo;
        };
    }
    $closure1 = new_closure_gen();
    $closure2 = new_closure_gen();
    $gen1 = $closure1();
    $gen2 = $closure1();
    $gen3 = $closure2();
    foreach (array($gen1, $gen2, $gen3) as $gen) {
        foreach ($gen as $val) {
            var_dump($val);
        }
    }
    foreach ($gen as $val) {
            var_dump($val);
        }
    var_dump($val);
    var_dump(range('a', 'c', -1));
    var_dump( range(1, 7, 0) );
    $db = getDbConnection();
    $sql = '
        SET NOCOUNT ON
        SELECT 0 AS [result]
    ';
    $stmt = $db->query($sql);
    var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));
    function test()
    {
        echo "Undefined index here: '{$data['HTTP_HEADER']}'\n";
    }
    test();
    printf("printf test 2:%d\n", 42);
    $xmlString = "<root><a><b>1</b><b>2</b><b>3</b></a></root>";
    $xml = simplexml_load_string($xmlString);
    $nodes = $xml->a->b;
    function test($nodes, $name, $callable) {
        echo "--- $name ---\n";
        foreach ($nodes as $nodeData) {
            echo "nodeData: " . $nodeData . "\n";
            $callable($nodes);
        }
    }
    test($nodes, "children", fn ($n) => $n->children());
    $server = new soapserver(null,array('uri'=>"http://testuri.org"));
    $server->addfunction("test");
    $dom = Dom\HTMLDocument::createFromString(<<<HTML
    <!DOCTYPE html>
    <html>
        <body>
            <svg xmlns="http://www.w3.org/2000/svg" height="1"></svg>
            <math></math>
        </body>
    </html>
    HTML);
    var_dump($dom->lookupNamespaceURI("xmlns"));
    var_dump($_POST);
    $array = [
        [
        'superhero'=> 'superman',
        'nanana' => 'no nana'
        ],
        [
        'superhero'=> 'acuaman',
        'nanana' => 'no nana'
        ],
    
        ];
    var_dump(array_column($array, 'superhero'));
    #[\AllowDynamicProperties]
    class C {
        public $b;
        public function __construct() {
            $this->a = new Canary();
        }
    }
    $obj = new C();
    var_dump($obj->a);
    $dom = Dom\HTMLDocument::createEmpty();
    $container = $dom->appendChild(createElement($dom, "container"));
    $container->appendChild(createElementNS($dom, "http://www.w3.org/1999/xhtml", "html", "2"));
    $dom = Dom\HTMLDocument::createFromString(<<<HTML
    <!DOCTYPE html>
    <html>
        <body>
            <svg xmlns="http://www.w3.org/2000/svg" height="1"></svg>
            <math></math>
        </body>
    </html>
    HTML);
    $body = $dom->getElementsByTagName("body")[0];
    $prefixed = $body->appendChild($dom->createElementNS("urn:a", "a:a"));
    var_dump($prefixed->lookupNamespaceURI(""));
    class C extends stdClass {
        public int $a;
    }
    $reflector = new ReflectionClass(C::class);
    $obj = new C();
    $reflector->resetAsLazyGhost($obj, function () {});
    $im = imagecreate(800, 800);
    imageline($im, 600, 700, 100, 200, IMG_COLOR_STYLED);
    ob_start();
    $arrays = array (
      array( 0 ),
      range(1, 100 ),
      range('a', 'z', 2 ),
      array("a" => "A", 2 => "B", "C" => 3, 4 => 4, "one" => 1, "" => NULL ),
      array(1, array(1, 2 => 3 ), "one" => 1, "5" => 5 ),
      array(-1, -2, -3, -4, "-0.005" => "neg0.005", 2.0 => "float2", "neg.9" => -.9 ),
      array(1.0005, 2.000000, -3.000000, -4.9999999 ),
      array(true, false),
      array("PHP", "Web2.0", "SOA"),
      array(1, array() ),
      array(1, 2, "" ),
      array(" "),
      array(2147483647, 2147483648, -2147483647, -2147483648 ),
      array(0x7FFFFFFF, -0x80000000, 017777777777, -020000000000 ),
      array(-.6700000E+3, -4.10003E+3, 1e-5, -1E+5, 000002.00 )
    );
    foreach ($arrays as $sub_array){
      echo "-- Iteration $counter --\n";
      var_dump( end($sub_array) );
      /* ensure that internal pointer is moved to last element */
      var_dump( current($sub_array) );
      $counter++;
    }
    var_dump( end($sub_array) );
    undefined_function('Null');
    $pdo = MySQLPDOTest::factory();
    $pdo->setAttribute(\PDO::ATTR_EMULATE_PREPARES, false);
    $conn = pg_connect($conn_str);
    $table='test_68638';
    pg_insert($conn,$table, array('id' => 3, 'value' => 15));
    class foo
    {
    // no members
    }
    $fp = fopen (__FILE__, "r");
    $dfp = opendir ( __DIR__ );
    $unset_object = new foo();
    $not_objects = array (
      0,
      -1,
      0.1,
      -10.0000000000000000005,
      10.5e+5,
      0xFF,
      0123,
      $fp,  // resource
      $dfp,
      array(),
      array("string"),
      "0",
      "1",
      "",
      true,
      NULL,
      null,
      @$unset_object, // unset object
      @$undefined_var, // undefined variable
    );
    foreach ($not_objects as $type ) {
      echo "-- Iteration $loop_counter --\n"; $loop_counter++;
      var_dump( is_object($type) );
    }
    var_dump( is_object($type) );
    $code = null;
    $err = null;
    var_dump(pfsockopen('udp://127.0.0.1', '63844', $code, $err, -1));
    $offsets = array(20, 21, 22, 53, 54);
    foreach($offsets as $i) {
        echo "\n-- Offset is $i --\n";
        echo "--Multibyte String:--\n";
        try {
            var_dump( mb_strpos($string_mb, $needle, $i, 'UTF-8') );
        } catch (\ValueError $e) {
            echo $e->getMessage() . \PHP_EOL;
        }
        echo"--ASCII String:--\n";
        try {
            var_dump(mb_strpos('This is na English ta', 'a', $i));
        } catch (\ValueError $e) {
            echo $e->getMessage() . \PHP_EOL;
        }
    }
    var_dump(mb_strpos('This is na English ta', 'a', $i));
    function test2() {
        $x = test();
    }
    test2();
    catch (\Exception $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
    catch (\Exception $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
    catch (\Exception $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
    printf("%s: %s\n", $e::class, $e->getMessage());
    $filename = "bug51997.bz2";
    $bz = bzopen($filename, "r");
    bzclose($bz);
    var_dump(http_get_last_response_headers());
    sprintf('%3$s, %2$s %1$s', "a", "b");
    class Foo {
      public $bar = "bat";
    }
    $foo = new Foo;
    var_dump($foo);
    var_dump(c1::$a2);
    function test(string $name, object $obj) {
        printf("# %s:\n", $name);
    
        var_dump($obj);
        var_dump($obj->a);
        var_dump($obj);
    }
    var_dump($obj);
    function test(int $nr) {
        for ($i = $nr; $i <= $nr + 1; $i++)
            var_dump($i);
    }
    test(1);
    $dom = new DOMDocument;
    $dom->getElementById('x')->remove();
    var_dump(json_decode('[]', false, 0x100000000));
    function get() {
        $t = new stdClass;
        $t->prop = $t;
        return $t;
    }
    var_dump(get());
    function test(object $obj) {
            $obj->a = 1;
        }
    $reflector = new ReflectionClass(C::class);
    $obj = $reflector->newLazyGhost(function ($obj) {
            var_dump("initializer");
            $obj->__construct();
        });
    var_dump($obj);
    class A1 {
    	public function __call($method, $args) { echo "__call\n"; }
    	public static function __callStatic($method, $args) { echo "__callStatic\n"; }
    }
    class B1 extends A1 {
    	public function test(){	parent::test();	}
    }
    $test1 = new B1;
    $test1->test();
    function gen() {
        yield 0;
        yield from gen();
    }
    function bar($gen) {
        yield from $gen;
    }
    $gen = gen();
    $a = bar($gen);
    $a->rewind();
    var_dump(strncasecmp("test ", "E", 10));
    function zerofill($offset, $link, $datatype, $insert = 1) {
    
            mysqli_query($link, 'ALTER TABLE test DROP zero');
            $sql = sprintf('ALTER TABLE test ADD zero %s UNSIGNED ZEROFILL', $datatype);
            if (!mysqli_query($link, $sql)) {
                // no worries - server might not support it
                return true;
            }
    
            if (!mysqli_query($link, sprintf('UPDATE test SET zero = %s', $insert))) {
                printf("[%03d] UPDATE failed, [%d] %s\n",
                    $offset, mysqli_errno($link), mysqli_error($link));
                return false;
            }
    
            if (!($res = mysqli_query($link, 'SELECT zero FROM test LIMIT 1'))) {
                printf("[%03d] SELECT failed, [%d] %s\n",
                    $offset, mysqli_errno($link), mysqli_error($link));
                return false;
            }
    
            $row = mysqli_fetch_assoc($res);
            $meta = mysqli_fetch_fields($res);
            mysqli_free_result($res);
            $meta = $meta[0];
            $length = $meta->length;
            if ($length > strlen($insert)) {
    
                $expected = str_repeat('0', $length - strlen($insert));
                $expected .= $insert;
                if ($expected !== $row['zero']) {
                    printf("[%03d] Expecting '%s' got '%s'\n", $offset, $expected, $row['zero']);
                    return false;
                }
    
            } else if ($length <= 1) {
                printf("[%03d] Length reported is too small to run test\n", $offset);
                return false;
            }
    
            return true;
        }
    zerofill(4, $link, 'MEDIUMINT');
    $code = null;
    $err = null;
    pfsockopen('udp://127.0.0.1', '63844', $code, $err, NAN);
    function test(string $input) {
        var_dump(filter_var($input, FILTER_VALIDATE_URL));
    }
    test("http://te[st@2001:db8:3333:4444:5555:6666:1.2.3.4");
    function f() {
        Fiber::suspend();
    }
    function g() {
        (new Fiber(function() {
            global $f;
            var_dump((new ReflectionFiber($f))->getTrace());
        }))->start();
    }
    $f = new Fiber(function() { f(); max(...[1,2,3,4,5,6,7,8,9,10,11,12]); g(); });
    $f->resume();
    function setStyleAndThickness($im, $color, $thickness)
    {
        $style = array();
        $i = 0;
        while ($i < 16 * $thickness) {
            $style[$i++] = $color;
        }
        while ($i < 20 * $thickness) {
            $style[$i++] = IMG_COLOR_TRANSPARENT;
        }
        while ($i < 28 * $thickness) {
            $style[$i++] = $color;
        }
        while ($i < 32 * $thickness) {
            $style[$i++] = IMG_COLOR_TRANSPARENT;
        }
        imagesetstyle($im, $style);
        imagesetthickness($im, $thickness);
    }
    $style = array();
    imagesetstyle($im, $style);
    $dom = Dom\HTMLDocument::createEmpty();
    $container = $dom->appendChild(createElement($dom, "container"));
    $container->appendChild(createElement($dom, "foo:HTML", "6"));
    putenv('REDIR_TEST_DIR='.__DIR__ . '/../../pdo/tests/');
    $bert = "file://" . __DIR__ . "/bug41033.pem";
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_SIGN));
    $dom = Dom\HTMLDocument::createFromString(<<<HTML
    <!DOCTYPE html>
    <html>
        <body>
            <svg xmlns="http://www.w3.org/2000/svg" height="1"></svg>
            <math></math>
        </body>
    </html>
    HTML);
    $body = $dom->getElementsByTagName("body")[0];
    var_dump($body->lookupNamespaceURI(""));
    $priorityQueue = new SplPriorityQueue();
    $priorityQueue->insert("c", 0);
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
    $reqOfBig = 'select * from t';
    $attrs = [ PDO::ATTR_PREFETCH => 0 ];
    $stmt = $pdo->prepare($reqOfBig, $attrs);
    $stmt->execute();
    $thirty = M_PI / 6.0;
    var_dump(sin($thirty));
    var_dump( $count );
    $im = imagecreate(800, 800);
    imageline($im,  50, 250, 550, 250, IMG_COLOR_STYLED);
    function test($p12_contents, $password) {
        openssl_pkcs12_read($p12_contents, $cert_data, $password);
        openssl_error_string();
        var_dump(count($cert_data['extracerts']));
    }
    openssl_pkcs12_read($p12_contents, $cert_data, $password);
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
    krsort($flags);
    var_dump(A::$x);
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt', Pdo\Pgsql::class, false);
    var_dump($pdo->query('SELECT 1;')->fetchAll());
    $date1 = DateTime::createFromFormat("!D d M Y", "Sat 19 November 2011");
    while (true) {
        break;  // avoid infinite loop
        $x = 1;
        $x += 0;
        ++$x;
    }
    abstract class Y {
        abstract public string $prop {
            get;
            set => "foo";
        }
    }
    class X extends Y {
        public string $prop {
            get => "bar";
        }
    }
    $x = new X;
    $x->prop = 1;
    $time = '2000-01-01 00:00:00.000000';
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $phar = new Phar($fname);
    $GLOBALS['b'] = 2;
    $b = &$GLOBALS['b'];
    define("FOO", "okey");
    printf("printf test 31:%.17g\n", INF);
    $initialRequest = false;
    $y = 0;
    global $y;
    $y++;
    var_dump($initialRequest ? $x : $y);
    #[\Deprecated(1234)]
    function test() {
    }
    test();
    $host = curl_cli_server_start();
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "{$host}/get.inc");
    $a = new Test();
    var_dump($a->value);
    class Test{
    	public $value = 11.3;
    
    	public function TestFunc() {
    		$this->value -= 10;
    	}
    };
    ob_start("test");
    $dbh = @pg_connect($conn_str);
    $res = pg_query($dbh, 'SELECT test_notice()');
    pg_free_result($res);
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_NS_SSL_SERVER, array($cpca)));
    $f = __DIR__ . DIRECTORY_SEPARATOR . "67647.mov";
    $fi = new finfo(FILEINFO_MIME_TYPE);
    var_dump($fi->file($f));
    $dt = new DateTime('first day of January 2011');
    var_dump($dt);
    $curl = curl_init("http://www.google.com");
    curl_setopt($curl, CURLOPT_PRIVATE, "123");
    $values = ini_get_all();
    foreach ($values as $name => $dsn)
            if ('pdo.dsn.mysql' == $name) {
                printf("pdo.dsn.mysql=%s\n", $dsn);
                $found = true;
                break;
            }
    printf("pdo.dsn.mysql=%s\n", $dsn);
    date_default_timezone_set('UTC');
    $cert = "file://" . __DIR__ . "/cert.crt";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SMIME_ENCRYPT, array($cpca), $utfl));
    $dom = Dom\HTMLDocument::createEmpty();
    var_dump($dom->lookupNamespaceURI(NULL));
    mail("some.address.it.wont.ever.reach@lookup.and.try.to.find.this.host.name","subject","a", "");
    $im = imagecreate(800, 800);
    imageline($im, 550, 250, 550, 750, IMG_COLOR_STYLED);
    printf("[004] Expecting '2009-12-03' got '%s'\n", $row[0]);
    $header = <<<HEADER
    enum bug_gh16013_enum {
    	BUG_GH16013_A = 1,
    	BUG_GH16013_B = 2,
    };
    struct bug_gh16013_int_struct {
    	int field;
    };
    struct bug_gh16013_callback_struct {
    	int8_t (*return_int8)(int8_t);
    	uint8_t (*return_uint8)(uint8_t);
    	int16_t (*return_int16)(int16_t);
    	uint16_t (*return_uint16)(uint16_t);
    	int32_t (*return_int32)(int32_t);
    	uint32_t (*return_uint32)(uint32_t);
    	float (*return_float)(float);
    	struct bug_gh16013_int_struct (*return_struct)(struct bug_gh16013_int_struct);
    	enum bug_gh16013_enum (*return_enum)(enum bug_gh16013_enum);
    };
    
    char bug_gh16013_return_char();
    bool bug_gh16013_return_bool();
    short bug_gh16013_return_short();
    int bug_gh16013_return_int();
    enum bug_gh16013_enum bug_gh16013_return_enum();
    struct bug_gh16013_int_struct bug_gh16013_return_struct();
    HEADER;
    $ffi = FFI::cdef($header, ffi_get_php_dll_name());
    $bug_gh16013_callback_struct = $ffi->new('struct bug_gh16013_callback_struct');
    $bug_gh16013_callback_struct->return_uint32 = function($val) use($ffi) {
        $cdata = $ffi->new('uint32_t');
        $cdata->cdata = $val;
        return $cdata;
    };
    var_dump(($bug_gh16013_callback_struct->return_uint32)(100000));
    function test(object $obj) {
            $obj->a = 1;
        }
    $reflector = new ReflectionClass(C::class);
    $obj = $reflector->newLazyGhost(function ($obj) {
            var_dump("initializer");
            $obj->__construct();
        });
    $reflector->getMethod('test')->invoke($obj, $obj);
    function foo($e) {
        var_dump(__FUNCTION__."(): ".get_class($e)." thrown!");
    }
    function foo1($e) {
        var_dump(__FUNCTION__."(): ".get_class($e)." thrown!");
    }
    var_dump(__FUNCTION__."(): ".get_class($e)." thrown!");
    $tester = new FPM\Tester($cfg);
    $userMessage = "'user' directive is ignored when FPM is not running as root";
    $tester->expectLogNotice($userMessage, 'cccc');
    var_dump(error_reporting());
    class Canary {
        public function __construct(public mixed $value) {}
        public function __destruct() {
            var_dump(__METHOD__);
        }
    }
    function f($canary) {
        var_dump(yield from g());
    }
    $canary = new Canary(null);
    $iterable = f($canary);
    $fiber = new Fiber(function () use ($iterable, $canary) {
        var_dump($canary, $iterable->current());
        $f = $iterable->next(...);
        $f();
        var_dump("not executed");
    });
    $fiber->start();
    function foo($e) {
        var_dump(__FUNCTION__."(): ".get_class($e)." thrown!");
    }
    var_dump(__FUNCTION__."(): ".get_class($e)." thrown!");
    $interval = new DateInterval('P1D');
    $dt = new DateTime('first day of January 2011');
    $dt->add($interval);
    $filename = "bug51997.bz2";
    $bz = bzopen($filename, "r");
    fseek($bz, 0, SEEK_CUR);
    $tz1 = new DateTimeZone('Europe/Berlin');
    $tz2 = new DateTimeZone('Europe/Berlin');
    $d = new DateTime('2014-12-24 13:00:00', $tz1);
    var_dump($d->getTimezone(), $tz2);
    $filename = __DIR__ . '/bug77432.phar';
    $phar = new Phar($filename);
    $phar->startBuffering();
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
    function test($foo) {
        var_dump(0);
        var_dump($foo[0]);
    }
    test("str");
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
    $tester->close();
    $priorityQueue = new SplPriorityQueue();
    $priorityQueue->setExtractFlags(SplPriorityQueue::EXTR_PRIORITY);
    $dyadic = 0.00000000000045474735088646411895751953125;
    var_dump(printf ("%1.41f\n",unserialize(serialize($dyadic))));
    $r = new ResourceBundle( 'en_US', BUNDLE );
    printf( "teststring: %s\n", $r['teststring'] );
    printf("[001] [%d] %s\n", mysqli_errno($link), mysqli_error($link));
    $heredoc_str = <<<EOD
    %
    #$*&
    text & @()
    EOD;
    $str_arr = array(
      //double quoted strings
      "%",
      "#$*",
      "text & @()",
    
      //single quoted strings
      '%',
      '#$*',
      'text & @()',
    
      //heredoc string
      $heredoc_str
    );
    $from = "%#$*&@()";
    $to = "specials";
    for($index = 0; $index < count($str_arr); $index++) {
      echo "-- Iteration $count --\n";
    
      $str = $str_arr[$index];  //getting the array element in 'str' variable
    
      //strtr() call in three args syntax form
      var_dump( strtr($str, $from, $to) );
    
      //strtr() call in two args syntax form
      var_dump( strtr($str, $replace_pairs) );
    
      $count++;
    }
    $str = $str_arr[$index];
    var_dump( strtr($str, $from, $to) );
    $sh = new SessionHandler;
    $sh->open('path', 'name');
    phpinfo(INFO_VARIABLES);
    class foo
    {
    // no members
    }
    abstract class abstractClass
    {
      abstract protected function getClassName();
      public function printClassName () {
        echo $this->getClassName() . "\n";
      }
    }
    class concreteClass extends abstractClass
    {
      protected function getClassName() {
        return "concreteClass";
      }
    }
    interface IValue
    {
       public function setVal ($name, $val);
       public function dumpVal ();
    }
    class Value implements IValue
    {
      private $vars = array ();
    
      public function setVal ( $name, $val ) {
        $this->vars[$name] = $val;
      }
    
      public function dumpVal () {
        var_dump ( $vars );
      }
    }
    class myClass
    {
      var       $foo_object;
      public    $public_var;
      public    $public_var1;
      private   $private_var;
      protected $protected_var;
    
      function __construct ( ) {
        $this->foo_object = new foo();
        $this->public_var = 10;
        $this->public_var1 = new foo();
        $this->private_var = new foo();
        $this->protected_var = new foo();
      }
    }
    $myClass_object = new myClass();
    $foo_object = new foo();
    $Value_object = new Value();
    $concreteClass_object = new concreteClass();
    $valid_objects = array(
      new stdclass,
      new foo,
      new concreteClass,
      new Value,
      new myClass,
      $myClass_object,
      $myClass_object->foo_object,
      $myClass_object->public_var1,
      $foo_object,
      $Value_object,
      $concreteClass_object
    );
    foreach ($valid_objects as $object ) {
      echo "-- Iteration $loop_counter --\n"; $loop_counter++;
      var_dump( is_object($object) );
    }
    var_dump( is_object($object) );
    $dom = new DOMDocument();
    $dom->loadXML('<root><child/></root>');
    function test(string $name, object $obj) {
        printf("# %s\n", $name);
    
        $c = new C();
        $c->dyn = 1;
        $propReflector = new ReflectionProperty($c, 'dyn');
    
        try {
            $propReflector->setRawValueWithoutLazyInitialization($obj, 'test');
        } catch (\ReflectionException $e) {
            printf("%s: %s\n", $e::class, $e->getMessage());
        }
    }
    $reflector = new ReflectionClass(C::class);
    $obj = $reflector->newLazyProxy(function () {
        throw new \Exception('initializer');
    });
    test('Proxy', $obj);
    $regex = '/[a-z]/';
    $subject = 'string';
    var_dump(preg_match_all($regex, $subject, 'test'));
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
    $cfg .= 'php_admin_value[browscap] = ' . __DIR__ . '/../../../ext/standard/tests/misc/browscap.ini';
    $code = <<<EOT
    <?php
    \$cv = get_browser("Konqueror/2.0")->browser_name_pattern;
    var_dump(\$cv);
    EOT;
    $tester = new FPM\Tester($cfg, $code);
    $tester->terminate();
    class TrampolineTest {
        public function __call(string $name, array $arguments) {
            echo 'Trampoline for ', $name, PHP_EOL;
        }
    }
    $o = new TrampolineTest();
    $callback1 = [$o, 'trampoline1'];
    var_dump(spl_autoload_unregister($callback1));
    $o = new SplFileInfo('.');
    var_dump((bool) $o);
    #[\AllowDynamicProperties]
    class C {
        public $b;
        public function __construct() {
            $this->a = new Canary();
        }
    }
    $reflector = new ReflectionClass(C::class);
    $obj = new C();
    $reflector->resetAsLazyGhost($obj, function ($obj) {
        var_dump("initializer");
        $obj->__construct();
    });
    printf("printf test 18:%16b\n", 170);
    $stmt->close();
    function test($foo) {
        var_dump(0);
        var_dump($foo[0]);
    }
    var_dump($foo[0]);
    class C extends stdClass {
        public int $a;
    }
    $reflector = new ReflectionClass(C::class);
    $obj = new C();
    $reflector->resetAsLazyProxy($obj, function ($obj) {
        });
    $dom = new DOMDocument;
    $dom->getElementById('x')->remove();
    ob_end_clean();
    class TestSoapClient extends SoapClient
    {
        public function __doRequest($req, $loc, $act, $ver, $one_way = 0): string
        {
            return <<<XML
    <?xml version="1.0" encoding="UTF-8"?>
    <SOAP-ENV:Envelope
      xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/"
      xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
      xmlns:ns="urn:ebay:api:PayPalAPI">
      <SOAP-ENV:Body id="_0">
        <GetExpressCheckoutDetailsResponse xmlns="urn:ebay:api:PayPalAPI">
          <Timestamp>2008-06-23T14:51:08Z</Timestamp>
          <Ack>Success</Ack>
          <CorrelationID>ae013a0ccdf13</CorrelationID>
          <Version>50.000000</Version>
          <Build>588340</Build>
          <GetExpressCheckoutDetailsResponseDetails xsi:type="ns:GetExpressCheckoutDetailsResponseDetailsType">
            <Token>EC-11Y75137T2399952C</Token>
            <PayerInfo>
              <Payer>example@example.com</Payer>
              <PayerID>MU82WA43YXM9C</PayerID>
              <PayerStatus>verified</PayerStatus>
            </PayerInfo>
          </GetExpressCheckoutDetailsResponseDetails>
        </GetExpressCheckoutDetailsResponse>
      </SOAP-ENV:Body>
    </SOAP-ENV:Envelope>
    XML;
        }
    }
    $client = new TestSoapClient(__DIR__.'/bug44882.wsdl');
    print_r($client->GetExpressCheckoutDetails());
    ob_start();
    $text = '<p>hello world &trade;</p>';
    $dom = new DOMDocument('1.0', 'UTF-8');
    $node = $dom->getElementById('test');
    $node->textContent = $text;
    var_dump($node->textContent == $text);
    $heredoc_string = <<<EOT
    This is line 1 of 'heredoc' string
    This is line 2 of "heredoc" string
    EOT;
    $heredoc_null_string =<<<EOT
    EOT;
    $str_array = array(
                        // string without any characters that can be backslashed
                        'Hello world',
    
                        // string with single quotes
                        "how're you doing?",
                        "don't disturb u'r neighbours",
                        "don't disturb u'r neighbours''",
                        '',
                        '\'',
                        "'",
    
                        // string with double quotes
                        'he said, "he will be on leave"',
                        'he said, ""he will be on leave"',
                        '"""PHP"""',
                        "",
                        "\"",
                        '"',
                "hello\"",
    
                        // string with backslash characters
                        'Is your name Ram\Krishna?',
                        '\\0.0.0.0',
                        'c:\php\testcase\addslashes',
                        '\\',
    
                        // string with nul characters
                        'hello'.chr(0).'world',
                        chr(0).'hello'.chr(0),
                        chr(0).chr(0).'hello',
                        chr(0),
    
                        // mixed strings
                        "'\\0.0.0.0'",
                        "'\\0.0.0.0'".chr(0),
                        chr(0)."'c:\php\'",
                        '"\\0.0.0.0"',
                        '"c:\php\"'.chr(0)."'",
                        '"hello"'."'world'".chr(0).'//',
    
                // string with hexadecimal number
                        "0xABCDEF0123456789",
                        "\x00",
                        '!@#$%&*@$%#&/;:,<>',
                        "hello\x00world",
    
                        // heredoc strings
                        $heredoc_string,
                        $heredoc_null_string
                      );
    foreach( $str_array as $str )  {
      echo "\n-- Iteration $count --\n";
      var_dump( addslashes($str) );
      $count ++;
    }
    var_dump( addslashes($str) );
    var_dump ( rtrim("rtrim testABCXYZ", "A..Z") );
    $dom = Dom\HTMLDocument::createEmpty();
    dumpNodeList($dom->getElementsByTagName("html"));
    $tests = array(
        'noon', 'midnight'
    );
    foreach ($tests as $test) {
        $t = strtotime("2005-12-22 ". $test);
        printf("%-10s => %s\n", $test, date(DATE_ISO8601, $t));
    }
    $t = strtotime("2005-12-22 ". $test);
    printf("%-10s => %s\n", $test, date(DATE_ISO8601, $t));
    var_dump ( rtrim("rtrim test   \t\0 ") );
    $hash = password_hash(
        "php",
        PASSWORD_ARGON2I,
        ['memory_cost' => 64 << 10, 'time_cost' => 4, 'threads' => 1]
    );
    var_dump(substr($hash, -1, 1) !== "\0");
    printf("printf test 25:%-2s\n", "gazonk");
    $cfg = <<<EOT
    [global]
    error_log = {{FILE:LOG}}
    [unconfined]
    listen = {{ADDR}}
    pm = static
    pm.max_children = 1
    catch_workers_output = yes
    EOT;
    $code = <<<EOT
    <?php
    echo 1;
    EOT;
    $tester = new FPM\Tester($cfg, $code);
    $tester->terminate();
    $sql = "SELECT 11111 as `1`, 22222 as `2`";
    $link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
    $link->real_query($sql);
    printf("# Proxy:\n");
    $priorityQueue = new SplPriorityQueue();
    var_dump($priorityQueue->getExtractFlags());
    $magic_file = __DIR__ . '/bug79283.db';
    $finfo = new finfo(FILEINFO_NONE, $magic_file);
    var_dump($finfo->buffer("buffer\n"));
    abstract class Y {
        abstract public string $prop {
            get;
            set => "foo";
        }
    }
    class X extends Y {
        public string $prop {
            get => "bar";
        }
    }
    $x = new X;
    $x->prop = 1;
    var_dump($x->prop);
    $header = <<<HEADER
    enum bug_gh16013_enum {
    	BUG_GH16013_A = 1,
    	BUG_GH16013_B = 2,
    };
    struct bug_gh16013_int_struct {
    	int field;
    };
    struct bug_gh16013_callback_struct {
    	int8_t (*return_int8)(int8_t);
    	uint8_t (*return_uint8)(uint8_t);
    	int16_t (*return_int16)(int16_t);
    	uint16_t (*return_uint16)(uint16_t);
    	int32_t (*return_int32)(int32_t);
    	uint32_t (*return_uint32)(uint32_t);
    	float (*return_float)(float);
    	struct bug_gh16013_int_struct (*return_struct)(struct bug_gh16013_int_struct);
    	enum bug_gh16013_enum (*return_enum)(enum bug_gh16013_enum);
    };
    
    char bug_gh16013_return_char();
    bool bug_gh16013_return_bool();
    short bug_gh16013_return_short();
    int bug_gh16013_return_int();
    enum bug_gh16013_enum bug_gh16013_return_enum();
    struct bug_gh16013_int_struct bug_gh16013_return_struct();
    HEADER;
    $ffi = FFI::cdef($header, ffi_get_php_dll_name());
    $bug_gh16013_callback_struct = $ffi->new('struct bug_gh16013_callback_struct');
    $bug_gh16013_callback_struct->return_int8 = function($val) use($ffi) {
        $cdata = $ffi->new('int8_t');
        $cdata->cdata = $val;
        return $cdata;
    };
    var_dump(($bug_gh16013_callback_struct->return_int8)(-4));
    $tester = new FPM\Tester($cfg);
    $tester->expectLogStartNotices();
    php_cli_server_start(<<<PHP
    http_response_code(426);
    PHP
    );
    $dom = new DOMDocument('1.0', 'UTF-8');
    $node = $dom->getElementById('test');
    var_dump($node->textContent);
    $c = "assert";
    $c(false);
    function bar($x='no argument')
    {
        throw new Exception("This is an exception from bar({$x}).");
    }
    bar('first try');
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
    $zip = new ZipArchive();
    $zip->close();
    function zerofill($offset, $link, $datatype, $insert = 1) {
    
            mysqli_query($link, 'ALTER TABLE test DROP zero');
            $sql = sprintf('ALTER TABLE test ADD zero %s UNSIGNED ZEROFILL', $datatype);
            if (!mysqli_query($link, $sql)) {
                // no worries - server might not support it
                return true;
            }
    
            if (!mysqli_query($link, sprintf('UPDATE test SET zero = %s', $insert))) {
                printf("[%03d] UPDATE failed, [%d] %s\n",
                    $offset, mysqli_errno($link), mysqli_error($link));
                return false;
            }
    
            if (!($res = mysqli_query($link, 'SELECT zero FROM test LIMIT 1'))) {
                printf("[%03d] SELECT failed, [%d] %s\n",
                    $offset, mysqli_errno($link), mysqli_error($link));
                return false;
            }
    
            $row = mysqli_fetch_assoc($res);
            $meta = mysqli_fetch_fields($res);
            mysqli_free_result($res);
            $meta = $meta[0];
            $length = $meta->length;
            if ($length > strlen($insert)) {
    
                $expected = str_repeat('0', $length - strlen($insert));
                $expected .= $insert;
                if ($expected !== $row['zero']) {
                    printf("[%03d] Expecting '%s' got '%s'\n", $offset, $expected, $row['zero']);
                    return false;
                }
    
            } else if ($length <= 1) {
                printf("[%03d] Length reported is too small to run test\n", $offset);
                return false;
            }
    
            return true;
        }
    zerofill(2, $link, 'TINYINT');
    $total = 10000;
    $halves[0] = $halves[1] = 0;
    $halves[(mt_rand(0, $max - 1) >> 1) & 1]++;
    printf("%.1f%% vs. %.1f%%\n", 100. * $halves[0] / $total, 100. * $halves[1] / $total);
    $array = array('f' => "first", "s" => 'second', 1, 2.222);
    $temp_array = $array;
    var_dump($temp_array);
    class C extends stdClass {
        public int $a;
    }
    $reflector = new ReflectionClass(C::class);
    $obj = new C();
    $reflector->resetAsLazyProxy($obj, function () {});
    $reflector = new ReflectionClass(C::class);
    $db = getDbConnection();
    var_dump($db->getAttribute(PDO::DBLIB_ATTR_SKIP_EMPTY_ROWSETS));
    var_dump( range(1.0, 7.0, 0.0) );
    $inner = 'r:2;';
    $exploit = 'a:2:{i:0;C:3:"obj":'.strlen($inner).':{'.$inner.'}i:1;C:3:"obj":'.strlen($inner).':{'.$inner.'}}';
    $data = unserialize($exploit);
    var_dump( range(1.0, 7.0, 0.0) );
    $db = new Pdo\Pgsql($config['ENV']['PDOTEST_DSN']);
    function attach($db, $callback) { $db->setNoticeCallback($callback); }
    $db->setNoticeCallback($callback);
}
set_error_handler("customErrorHandler");
function f_21() {
    function f_22() {
        imagecreatefrompng('php://filter/read=convert.base64-encode/resource=' . __DIR__ . '/test.png');
        $certificateGenerator = new CertificateGenerator();
        $certificateGenerator->saveCaCert(__DIR__ . "/san-cert.pem");
        if (true) {
            printf("printf test 9:<%-20s>\n", "bar");
        }
        if (!true) {
            $f = __DIR__."/data/test.txt.gz";
            $h = gzopen($f, 'r');
            var_dump(gzread($h, -1));
        }
    }
    for ($i_23 = 0; $i_23 < 10; $i_23++) {
        $sert = "file://" . __DIR__ . "/san-cert.pem";
        $cpca = __DIR__ . "/san-cert.pem";
        var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_NS_SSL_SERVER, array($cpca)));
        var_dump(exif_read_data('data:image/jpg;base64,TU0AKgAAAAwgICAgAAIBDwAEAAAAAgAAACKSfCAgAAAAAEZVSklGSUxN'));
    }
    for ($i_24 = 0; $i_24 < 10; $i_24++) {
        $haystack = 'Hello,\t\n\0\n  $&!#%\o,()*+-./:;<=>?@hello123456he \x234 \101 ';
        $needle = array(
          //regular strings
          'l',
          'L',
          'HELLO',
          'hEllo',
        
          //escape characters
          '\t',
          '\T',
          '     ',
          '\n',
          '\N',
          '
        ',  //new line
        
          //nulls
          '\0',
        
          //boolean false
          FALSE,
          false,
        
          //empty string
          '',
        
          //special chars
          ' ',
          '$',
          ' $',
          '&',
          '!#',
          '%\o',
          '\o,',
          '()',
          '*+',
          '+',
          '-',
          '.',
          '.;',
          ':;',
          ';',
          '<=>',
          '>',
          '=>',
          '?',
          '@',
          '@hEllo',
        
          '12345', //decimal numeric string
          '\x23',  //hexadecimal numeric string
          '#',  //hexadecimal numeric string
          '\101',  //octal numeric string
          'A',
          '456HEE',  //numerics + chars
          42, //needle as int(ASCII value of '*')
          $haystack  //haystack as needle
        );
        for($index=0; $index<count($needle); $index++) {
          echo "\n-- Iteration $count --\n";
          var_dump( strrchr($haystack, $needle[$index]) );
          $count ++;
        }
        var_dump( strrchr($haystack, $needle[$index]) );
        $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
        $stmt = $pdo->prepare("select :1 n union all select :1 + 1 union all select :1 + 2 union all select :1 + 3");
        $stmt->execute([ 0 ]);
    }
    for ($i_25 = 0; $i_25 < 10; $i_25++) {
        var_dump ( rtrim("rtrim test   \t\0 ") );
        catch (Error $e) {
            printf("%s: %s\n", $e::class, $e->getMessage());
        }
        catch (Error $e) {
            printf("%s: %s\n", $e::class, $e->getMessage());
        }
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
}
define("TEST",2);
function f_26() {
    return "Class A object";
}
$filename = "bug51997.bz2";
$bz = bzopen($filename, "r");
bzclose($bz);
function f_27() {
    class C {
        public function __toString() {
            global $c;
            $c = [];
            throw new Exception(__METHOD__);
        }
    }
    $c = new C();
    $t = new stdClass;
    return $t;
}
date_default_timezone_set("Europe/Lisbon");
$db = getDbConnection();
$db->setAttribute(PDO::DBLIB_ATTR_SKIP_EMPTY_ROWSETS, true);
function f_28() {
    return [$this];
}
php_cli_server_start(file_get_contents(__DIR__.'/bug64433_srv.inc'));
var_dump(json_decode('"\ud834"'));
$depth0 = "depth02";
$depth1 = "depth1";
touch(__DIR__ . DIRECTORY_SEPARATOR . $depth0 . DIRECTORY_SEPARATOR . $depth1 . DIRECTORY_SEPARATOR . 'getSubPathname_test_3.tmp');
$db = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
$stmt = $db->prepare("CALL testSp()");
$stmt->execute();
function f_29() {
    return 5;
}
function test($foo) {
    var_dump(0);
    var_dump($foo[0]);
}
test("str");
$array = [0];
$ar = array_values($array);
var_dump($ar);
