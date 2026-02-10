<?php
$xmlString = "<root><a><b>1</b><b>2</b><b>3</b></a></root>";
$xml = simplexml_load_string($xmlString);
$nodes = $xml->a->b;
$vars = array (
  '\$ -> This represents the dollar sign. hello dollar!!!',
  '\t\r\v The quick brown fo\fx jumped over the lazy dog',
  'This is a text with special chars: \!\@\#\$\%\^\&\*\(\)\\',
  'hello world\\t',
  'This is \ta text in bold letters\r\s\malong with slashes\n : HELLO WORLD\t'
);
function test(#[SensitiveParameter] $sensitive)
{
    debug_print_backtrace();
    var_dump(debug_backtrace());
    var_dump((new Exception)->getTrace());
}
test('sensitive');
function test(string $name, object $obj) {
    printf("# %s:\n", $name);

    var_dump($obj);
    var_dump($obj->a);
    var_dump($obj);
}
$reflector = new ReflectionClass(C::class);
$obj = $reflector->newLazyGhost(function ($obj) {
    var_dump("initializer");
    $obj->__construct(1);
});
test('Ghost', $obj);
$after = memory_get_usage();
class Test {
    function __destruct() {
        global $box;
        $box->value = null;
    }
}
global $box;
$box->value = null;
function test($box) {
    var_dump($box->value = new Test);
}
var_dump($box->value = new Test);
$dt = DateTime::createFromFormat('Y-m-d!', '2011-02-02');
$ch = curl_init();
$cfg['names'] = ['cccc', 'aaaa', 'eeee', 'dddd', 'bbbb'];
$version = mysqli_get_server_version($link);
var_dump(-9_223_372_036_860_776_000 % -1);
$originalEnvelopeData = "any string with \x1a is cut at this point.";
$tmpFileOut2 = tempnam(sys_get_temp_dir(), 'test');
$envelopeData = file_get_contents($tmpFileOut2);
var_dump($originalEnvelopeData === $envelopeData);
$i = 1;
$x = 2;
var_dump($i=$x);
class foo extends SplFixedArray {
    public function __construct($size) {
    }
}
$x = new foo(2);
$z = clone $x;
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
$data = array('first', 'fifth', 'second', 'forth', 'third');
$sort = array(1, 5, 2, 4, 3);
array_multisort($sort, $data);
ini_set("intl.error_level", E_WARNING);
$im = ImageCreateTrueColor(10, 10);
imagealphablending($im, true);
$bar = new DateTime();
$function = function (int &$foo, DateTimeInterface &$bar) {};
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
$d0 = $prefix . "ソフト";
$d1 =
dir($d1);

;
$interval = new DateInterval('P1D');
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
_dump(chdir($now));

ar_dump($dn = realpath;
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
$oIntlDateFormatter = new IntlDateFormatter("en_GB");
var_dump($oIntlDateFormatter->parseToCalendar('America/Los_Angeles', $offset2));
var_dump(soundex("Euler"));
$start_key = 0;
$cert = "file://" . __DIR__ . "/cert.crt";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_CRL_SIGN, array($cpca)));
$strA = 'test &amp; test';
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
zerofill(12, $link, 'DEC');
function validate($value)
{
    foreach ([0] as $_) {
        $a = &$value->a;
        $value->a ?? null;
    }
}
validate((object) []);
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
$var = 10;
printf("# Proxy:\n");
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
$db->exec("INSERT INTO test_80908 (`name`) VALUES ('bar')");
$sixty = M_PI / 3.0;
var_dump(sin($sixty));
$headers = ['Host: okey.com'];
$fp = fopen("php://memory", "r+");
stream_get_line($fp, 1024*1024*2, "aaaa");
class TrampolineTest {
    public function __call(string $name, array $arguments) {
        echo 'Trampoline for ', $name, PHP_EOL;
    }
}
$o = new TrampolineTest();
$callback2 = [$o, 'trampoline2'];
var_dump(spl_autoload_unregister($callback2));
$oIntlDateFormatter = new IntlDateFormatter("en_GB");
var_dump($oIntlDateFormatter->getTimeZone()->getID());
$str = 'Hello World';
$shm_key = ftok(__FILE__, 'p');
$shm_id1 = shmop_open($shm_key, 'c', 0644, strlen($str));
$ch = curl_init();
curl_setopt($ch, CURLOPT_WRITEFUNCTION, null);
class MethodCallbackByReference {
    public function bar(&$a, &$b, $c) {
        Legacy::bar($a, $b, $c);
    }
    public function callback(&$a, &$b, $c) {
        $b = 1;
    }
}
public function bar(&$a, &$b, $c) {
        Legacy::bar($a, $b, $c);
    }
public function callback(&$a, &$b, $c) {
        $b = 1;
    }
$b = 1;
class Mock_MethodCallbackByReference_7b180d26 extends MethodCallbackByReference {
    public $inv_mocker;
    public function bar(&$a, &$b, $c) {
        $arguments = array($a, $b, $c);
        $result = $this->inv_mocker->invoke(
            new PHPUnit_Framework_MockObject_Invocation_Static(
                $arguments
            )
        );
        return $result;
    }
}
public function bar(&$a, &$b, $c) {
        $arguments = array($a, $b, $c);
        $result = $this->inv_mocker->invoke(
            new PHPUnit_Framework_MockObject_Invocation_Static(
                $arguments
            )
        );
        return $result;
    }
$foo = new Mock_MethodCallbackByReference_7b180d26();
$a = $b = $c = 0;
$foo->bar($a, $b, $c);
php_cli_server_start('echo $_SERVER["REQUEST_METHOD"];');
$unset_var = 10;
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
$prefix . "フォルダ";

mkdir($prefi
mdir($prefi;
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
byVal(C[0]);
function byVal($arg) {
    var_dump($arg);
};
$timestamp = "2005-11-08T11:22:07+03:00";
function __construct($audienceMemberId, $timestamp, $smokeStatus) {
    $this->audienceMemberId = $audienceMemberId;
    $this->timestamp = $timestamp;
    $this->smokeStatus = $smokeStatus;
    $this->callInitiator = "IVR";
  }
$this->smokeStatus = $smokeStatus;
var_dump(sha1_file(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370_003' . DIRECTORY_SEPARATOR . 'testfile'));
$xml =<<<EOF
<xml>
<fieldset1>
</fieldset1>
<fieldset2>
<options>
</options>
</fieldset2>
</xml>
EOF;
$sxe = new SimpleXMLIterator($xml);
$rit = new RecursiveIteratorIterator($sxe, RecursiveIteratorIterator::LEAVES_ONLY);
var_dump($rit->key());
printf("# Proxy:\n");
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
define('OBJECT_COUNT', 10000);
var_dump(substr_count("aaa", "a", 0, 0));
mysqli_close($link);
$me = new static;
$xml =<<<EOF
<xml>
<fieldset1>
</fieldset1>
<fieldset2>
<options>
</options>
</fieldset2>
</xml>
EOF;
$sxe = new SimpleXMLIterator($xml);
$rit = new RecursiveIteratorIterator($sxe, RecursiveIteratorIterator::LEAVES_ONLY);
var_dump($rit->key());
$doc = new \DOMDocument();
$target = $doc->documentElement->lastChild;
var_dump($target);
$meta_res = $stmt->result_metadata();
$field = $meta_res->fetch_field();
printf("Orgname      : %s\n", $field->orgname);
$instructorsAdmin = Test::INSTRUCTORS_ADMIN;
function display($res)
{
	echo implode("\n", array_map(fn($row) => implode("\t", $row), $res))."\n";
}
$res = [];
display($res);
date_default_timezone_set("Europe/Lisbon");
$doc = new \DOMDocument();
$target = $doc->documentElement->lastChild;
$target->after('bar', $doc->documentElement->firstChild, 'baz');
$cpca = __DIR__ . "/san-cert.pem";
class C extends stdClass {
    public int $a;
}
$reflector = new ReflectionClass(C::class);
$obj = new C();
$reflector->resetAsLazyProxy($obj, function ($obj) {
    });
printf("printf test 32:%.17g\n", -INF);
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
$reqOf3 = 'select 79 n union all select 80 union all select 81';
function display($res)
{
	echo implode("\n", array_map(fn($row) => implode("\t", $row), $res))."\n";
}
$stmt = $pdo->prepare($reqOf3);
$res = $stmt->fetchAll();
display($res);
$filename = __DIR__ . '/bug77432.phar';
function foo() {
  var_dump("hello");
}
foo();
$i= DateInterval::createFromDateString('2 days');
var_dump($i);
$dt = new DateTime('@1604215800');
$dt->setTimezone(new DateTimeZone('America/Boise'));
$text = '<p>hello world &trade;</p>';
register_shutdown_function('timE');
$test_fl = __DIR__ . DIRECTORY_SEPARATOR . md5(uniqid());
file_put_contents($test_fl, '<?php echo "abc\f\n \n";');
set_exception_handler(function () { print "EX\n"; });
$assoc_array = array ('one' => 1, 'two' => 2);
$now = new DateTimeImmutable();
$simpleInterval = new DateInterval("P2D");
$dateperiod = (new ReflectionClass(DatePeriod::class))->newInstanceWithoutConstructor();
$dateperiod->__unserialize([
		'start' => $now, 'end' => $now, 'current' => $now, 'interval' => $simpleInterval,
		'recurrences' => 2, 'include_start_date' => true, 'include_end_date' => true,
	]);
printf("printf test 11: 123456789012345678901234567890\n");
$cert = "file://" . __DIR__ . "/cert.crt";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_CLIENT, array($cpca)));
c1::$a3[] = 1;
function test(string $name, object $obj) {
    printf("# %s:\n", $name);

    var_dump($obj);
    var_dump($obj->a);
    var_dump($obj);
}
var_dump($obj);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
class C {
    private $priv1 = 'secret1';
    private $priv2 = 'secret2';
    public $pub1 = 'public1';
    public $pub2 = 'public2';
    public $pub3 = 'public3';
    public $pub4 = 'public4';
}
$ao = new ArrayObject(new C);
$ai = $ao->getIterator();
$ai->rewind();
$references = array();
$idx = 0;
$rows = array();
for ($i = 0; $i < 2; $i++) {
        $rows[$i] = mysqli_fetch_assoc($res);
        $references[$idx]['row_ref'] 		= &$rows[$i];
        $references[$idx]['row_copy'] 	= $rows[$i];
        $references[$idx]['id_ref'] 		= &$rows[$i]['id'];
        $references[$idx]['id_copy']		= $rows[$i]['id'];
        /* enforce separation */
        $references[$idx]['id_copy_mod']= $rows[$i]['id'] + 0;
    }
$rows[$i] = mysqli_fetch_assoc($res);
$references[$idx]['id_copy_mod']= $rows[$i]['id'] + 0;
undefined_function();
$formatter = new \NumberFormatter('en', \NumberFormatter::DECIMAL);
$value = $formatter->parse('2147483647', \NumberFormatter::TYPE_INT32);
var_dump($value);
$a = array(1,2,3);
$s1 = "some string";
var_dump($a + $s1);
printf("# Ghost:\n");
$counter = 1;
$filename = "bug51997.bz2";
$bz = bzopen($filename, "w");
bzclose($bz);
class bug8318 extends \SplFileObject
{
    public function __construct()
    {
    }

    public function fpassthru(): int
    {
        return 0;
    }
}
$cl = new bug8318;
$cl->fpassthru();
class Foo {
    var $bar = array();

    static function bar() {
        static $instance = null;
        $instance = new Foo();
        return $instance->bar;
    }
}
extract(Foo::bar());
$a[10] = "42";
$i = "010";
var_dump($a[$i], isset($a[$i]));
$a = new PDO("sqlite::memory:");
$b = $a->prepare("insert into test_35336 (b) values (?)");
$b->execute(array (5));
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
class C extends stdClass {
    public int $a;
}
$reflector = new ReflectionClass(C::class);
$obj = new C();
$reflector->resetAsLazyProxy($obj, function ($obj) {
    });
$cert = "file://" . __DIR__ . "/cert.crt";
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_ANY));
$list = new SplDoublyLinkedList;
var_dump($list->serialize());
class D {
    public string $prop;
}
$d = new D();
var_dump($d);
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
function test(string $name, object $obj) {
    printf("# %s:\n", $name);

    var_dump($obj);
    var_dump($obj->a);
    var_dump($obj);
}
var_dump($obj);
list($value) = yield;
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
$callable($nodes);
$plain = "The quick brown fox jumps over the lazy dog.";
$str = <<<EOD
us
ing heredoc string
EOD;
var_dump( rtrim($str, "ing") );
$msgfmt = new MessageFormatter('en_US', '{0,number,integer}');
$msgfmt2 = clone $msgfmt;
var_dump(filter_var("<data&sons>", FILTER_SANITIZE_ENCODED, FILTER_FLAG_ENCODE_LOW));
$_SERVER = [ 'test' => 'test' ];
$reference =& $_SERVER;
sprintf('%2147483648$s, %2$s %1$s', "a", "b");
spl_autoload_register();
$references = array();
$idx = 0;
$references[$idx]['row_copy'] 	= $row;
var_dump(class_exists("TestClass", true));
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
$root = simplexml_load_string('<root xmlns:x="urn:x" x:attr="foo"/>');
$depth0 = "depth02";
touch(__DIR__ . DIRECTORY_SEPARATOR . $depth0 . DIRECTORY_SEPARATOR . 'getSubPathname_test_1.tmp');
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
$oldcwd = getcwd();
chdir($oldcwd);
$ch = curl_init("https://localhost/username");
curl_setopt($ch, CURLOPT_PASSWORD, null);
printf("printf test 19:%16x\n", 170);
$dt = DateTime::createFromFormat('Y-m-d!', '2011-02-02');
var_dump($dt);
$re = new ReflectionExtension("hash");
var_dump($re->getConstants());
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
$conn = odbc_connect($dsn, $user, $pass);
$res = odbc_exec($conn, "SELECT * FROM bug80147");
odbc_fetch_row($res);
$inputs = array(
      'The ISO 8601:1988 week number' => "%V",
      'Weekday as decimal' => "%u",
);
foreach($inputs as $key =>$value) {
      echo "\n--$key--\n";
      var_dump( gmstrftime($value) );
      var_dump( gmstrftime($value, $timestamp) );
}
var_dump( gmstrftime($value) );
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
_dump(chdir($now));

ar_dump($dn = realpath;
class TrampolineTest {
    public function __call(string $name, array $arguments) {
        echo 'Trampoline for ', $name, PHP_EOL;
    }
}
$o = new TrampolineTest();
$callback2 = [$o, 'trampoline2'];
spl_autoload_register($callback2);
$dom = Dom\HTMLDocument::createEmpty();
dumpNodeList($dom->getElementsByTagName("foo:HTML"));
var_dump($sends1);
$dom = Dom\HTMLDocument::createEmpty();
$container = $dom->appendChild(createElement($dom, "container"));
$container->appendChild(createElementNS($dom, NULL, "html", "3"));
class Foo {
  public $bar = "bat";
}
$foo = new Foo;
var_dump($foo);
$meta_res = $stmt->result_metadata();
$field = $meta_res->fetch_field();
printf("Table        : %s\n", $field->table);
$context = stream_context_create(['dummy' => ['foo' => 'bar']]);
file_get_contents('dummy://foo', false, $context);
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
$tester->expectLogStartNotices();
var_dump(baz());
$bert = "file://" . __DIR__ . "/bug41033.pem";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_NS_SSL_SERVER, array($cpca)));
$array = array('f' => "first", "s" => 'second', 1, 2.222);
$vars = array (
  '\$ -> This represents the dollar sign. hello dollar!!!',
  '\t\r\v The quick brown fo\fx jumped over the lazy dog',
  'This is a text with special chars: \!\@\#\$\%\^\&\*\(\)\\',
  'hello world\\t',
  'This is \ta text in bold letters\r\s\malong with slashes\n : HELLO WORLD\t'
);
foreach($vars as $var) {
  echo "-- Iteration $iterator --\n";
  $temp_array = $array;  // assign $array to another temporary $temp_array

  /* with default argument */
  // returns element count in the resulting array after arguments are pushed to
  // beginning of the given array
  var_dump( array_unshift($temp_array, $var) );

  // dump the resulting array
  var_dump($temp_array);

  /* with optional arguments */
  // returns element count in the resulting array after arguments are pushed to
  // beginning of the given array
  $temp_array = $array;
  var_dump( array_unshift($temp_array, $var, "hello", 'world') );

  // dump the resulting array
  var_dump($temp_array);
  $iterator++;
}
$temp_array = $array;
var_dump( array_unshift($temp_array, $var) );
$cert = "file://" . __DIR__ . "/cert.crt";
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_SERVER));
grapheme_strpos(1,1,2147483648);
var_dump ( rtrim("rtrim test        ", true) );
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
$obj = $reflector->newLazyProxy(function () {
    throw new \Exception('Initializer');
}, ReflectionClass::SKIP_INITIALIZATION_ON_SERIALIZE);
test('Proxy', $obj);
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
$tester->close();
$im = imagecreate(800, 800);
imageline($im, 100, 200, 600, 200, IMG_COLOR_STYLED);
$fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
$phar = new Phar($fname);
var_dump($phar->getStub());
$r = new ResourceBundle( 'en_US', BUNDLE );
$r2 = $r['testtable'];
printf( "testtable: %d\n", $r2['major'] );
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
$obj = $reflector->newLazyGhost(function ($obj) {
    throw new \Exception('Initializer');
}, ReflectionClass::SKIP_INITIALIZATION_ON_SERIALIZE);
test('Ghost', $obj);
$meta_res = $stmt->result_metadata();
$field = $meta_res->fetch_field();
printf("Orgname      : %s\n", $field->orgname);
$dom = new DOMDocument;
$element = $dom->appendChild($dom->createElement('root'));
$element->prepend('x', new DOMEntity);
var_dump(gzfile(__DIR__."/data/test.txt.gz", true));
vprintf("vprintf test 1:%2\$-2d %1\$2d\n", array(1, 2));
printf("printf test 24:%.5s\n", "abcdefghij");
$s = "1234567890a";
var_dump($s["010"], isset($s["010"]));
function __(){
  $GLOBALS['a'] = "bug\n";
  array_splice($GLOBALS,0,count($GLOBALS));
  /* All global variables including $GLOBALS are removed */
  echo $GLOBALS['a'];
}
__();
$bert = "file://" . __DIR__ . "/bug41033.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_NS_SSL_SERVER));
$magic_file = __DIR__ . '/bug79283.db';
$finfo = new finfo(FILEINFO_NONE, $magic_file);
var_dump($finfo->buffer("buffer\n"));
$ch = curl_init("https://localhost/username");
curl_setopt($ch, CURLOPT_USERNAME, null);
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
printf("[002] Connect failed, [%d] %s\n", mysqli_connect_errno(), mysqli_connect_error());
$sert = "file://" . __DIR__ . "/san-cert.pem";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_ANY, array($cpca), $utfl));
class cr {
    private $priv_member;
    function __construct($val) {
        $this->priv_member = $val;
    }
    static function comp_func_cr($a, $b) {
        if ($a->priv_member === $b->priv_member) return 0;
        return ($a->priv_member > $b->priv_member) ? 1 : -1;
    }
    static function comp_func_cr2($a, $b) {
        echo ".";
        if ($a->priv_member === $b->priv_member) return 0;
        return ($a->priv_member < $b->priv_member) ? 1 : -1;
    }
    function dump() {
        echo $this->priv_member . "\n";
    }
}
function __construct($val) {
        $this->priv_member = $val;
    }
$a = array("0.1" => new cr(9), "0.5" => new cr(12), 0 => new cr(23), 1 => new cr(4), 2 => new cr(-15),);
$b = array("0.2" => new cr(9), "0.5" => new cr(22), 0 => new cr(3), 1 => new cr(4), 2 => new cr(-15),);
$result = array_udiff_assoc($a, $b, array("cr", "comp_func_cr"));
foreach($result as $val) {
    $val->dump();
}
$val->dump();
$tester = new FPM\Tester($cfg);
$tester->start();
var_dump(getopt("abcd"));
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
$pdo->exec("insert into t values (0, 'original')");
$rf = new ReflectionFunction('collator_get_sort_key');
var_dump($rf->getNumberOfRequiredParameters());
$r = new ReflectionClass('stdClass');
var_dump(serialize($r));
printf("printf test 9:<%-20s>\n", "bar");
$fp = fopen(__FILE__, "r");
fclose($fp);
function foo(): never {
    if (false) {
        throw new Exception('bad');
    }
}
foo();
$key = str_repeat('abc', random_int(3, 3));
var_dump(array_all([$key => 1], static fn () => false));
var_dump(self::$x);
pcntl_wait($status);
var_dump(error_reporting());
var_dump(soundex("Gauss")       == soundex("Ghosh"));
function validate($value)
{
    foreach ([0] as $_) {
        $a = &$value->a;
        $value->a ?? null;
    }
}
validate((object) []);
$halves[0] = $halves[1] = 0;
$halves[(mt_rand(0, $max - 1) >> 1) & 1]++;
$total = 10000;
$halves[0] = $halves[1] = 0;
$halves[(int) (mt_rand(0, $max - 1) / ($max / 2))]++;
printf("%.1f%% vs. %.1f%%\n", 100. * $halves[0] / $total, 100. * $halves[1] / $total);
function test(string $input) {
    var_dump(filter_var($input, FILTER_VALIDATE_URL));
}
test("http://test[@2001:db8:3333:4444:5555:6666:1.2.3.4]");
$ch = curl_init();
curl_exec($ch);
$b = new SplObjectStorage();
$object = new StdClass();
$b->attach($object);
(function() {
	try {
		foo(); // Error
	} catch (\Exception $e) {
		var_dump($e);
	} catch (\ParseError $e) {
		var_dump($e);
	}
})();
ob_end_clean();
$dest = __DIR__ . "/bug40228";
rmdir($dest . '/test/empty');
$db = PDOTest::factory();
$db->exec("INSERT INTO test36428 (a) VALUES ('xyz')");
$filename = __DIR__ . '/bug77432.phar';
unlink($filename);
sprintf('%$s, %2$s %1$s', "a", "b");
var_dump(gzfile(__DIR__."/data/test.txt.gz"));
catch (\Error $e) {
    var_dump($e);
}
var_dump($e);
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
$originalEnvelopeData = "any string with \x1a is cut at this point.";
$tmpFileIn = tempnam(sys_get_temp_dir(), 'test');
var_dump(filesize($tmpFileIn) === strlen($originalEnvelopeData));
$filename =  __DIR__ . DIRECTORY_SEPARATOR . 'bug70752.txt';
var_dump(file_exists($filename));
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
$callable($nodes);
class C extends stdClass {
    public int $a;
}
$reflector = new ReflectionClass(C::class);
$obj = new C();
$reflector->resetAsLazyProxy($obj, function () {
    return new C();
});
$GLOBALS['b'] = 2;
$org_a = $GLOBALS['a'];
$org_b = $GLOBALS['b'];
var_dump($org_a, $org_b);
$bert = "file://" . __DIR__ . "/bug41033.pem";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_ANY, array($cpca), $utfl));
$filename = __DIR__ . '/bug77432.phar';
$phar = new Phar($filename);
$phar->setStub('<?php echo "hello world\n"; __HALT_COMPILER(); ?>');
$tester = new FPM\Tester($cfg);
$userMessage = "'user' directive is ignored when FPM is not running as root";
$tester->expectLogNotice($userMessage, 'bbbb');
stream_filter_register('user_filter','user_filter');
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
var_dump($ffi->bug_gh16013_return_struct());
$a = array(1,2,3);
$s1 = "some string";
var_dump($a + $s1);
$code = null;
$err = null;
var_dump(pfsockopen('udp://127.0.0.1', '63844', $code, $err, -1));
$GLOBALS['b'] = 2;
$b = &$GLOBALS['b'];
$GLOBALS['b'] = 3;
$a = 4;
$c = $b;
$b = 'x';
var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b'], $c);
class PHPUnit_Framework_MockObject_InvocationMocker {
    protected $matchers = [];
    public function addMatcher( $matcher) {
        $this->matchers[] = $matcher;
    }
    public function invoke( $invocation) {
        foreach ($this->matchers as $match) {
            $match->invoked($invocation);
        }
    }
}
class PHPUnit_Framework_MockObject_Matcher {
    public $stub = null;
    public $methodNameMatcher;
    public function invoked($invocation) {
        return $this->stub->invoke($invocation);
    }
}
$InvMocker = new PHPUnit_Framework_MockObject_InvocationMocker();
$OuterMatcher = new PHPUnit_Framework_MockObject_Matcher();
$InvMocker->addMatcher($OuterMatcher);
$this->show();
$host = "localhost\0.example.com";
var_dump(gethostbynamel($host));
class SomeClass implements JsonSerializable {
    public function jsonSerialize(): mixed {
        return [get_object_vars($this)];
    }
}
$class = new SomeClass;
$arr = [$class];
var_dump(json_encode($arr));
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug54028_2" . DIRECTORY_SEPARATOR;
;
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug54028_2" . DIRECTORY_SEPARATOR;
$dirs = array("a", "ソ", "ゾ", "şŞıİğĞ", "多国語", "王", "汚れて掘る");

mkdir($prefix);
foreach ($
mkdir($prefix . $d);
}

$old_cwd = getcwd();
forea
_cwd = getcwd();
for;
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $shm_key = ftok(__FILE__, 'p');
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
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
        $namespaceless = $body->appendChild($dom->createElementNS(NULL, "foo"));
        );
        if (!$reader->open($fil
        irstAttribute();
                    echo $reade;
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
        ['pid' => $pid, 'uri' => $uri] = http_server('genResponses', $output);
        $document = new \DOMDocument();
        $document->loadHTMLFile($uri);
        $key = str_repeat('abc', random_int(3, 3));
        $dom = Dom\HTMLDocument::createEmpty();
        $container = $dom->appendChild(createElement($dom, "container"));
        $container->appendChild(createElement($dom, "HTML", "1"));
    }
}
$fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
$phar = new Phar($fname);
var_dump($phar->getStub());
$document = new \DOMDocument();
$this->public_var = 10;
$dt = DateTime::createFromFormat('Y-m-d|', '2011-02-02');
var_dump($dt);
$instructorsAdmin = Test::INSTRUCTORS_ADMIN;
$data = [
    Test::COURSES_ADMIN,
    Test::COURSES_REPORTING_ACCESS,
    Test::BUNDLES_ADMIN,
    Test::USERS_ADMIN,
    Test::B2B_DASHBOARD_ACCESS,
    Test::B2B_DASHBOARD_ACCESS,
    Test::INSTRUCTORS_ADMIN,
    &$instructorsAdmin,
    Test::COUPONS_ADMIN,
    Test::AUTHENTICATED,
];
$data = array_unique($data, flags: SORT_REGULAR);
function gen() {
    yield 0;
    yield from gen();
}
function bar($gen) {
    yield from $gen;
}
$gen = gen();
$a = bar($gen);
$sert = "file://" . __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_OCSP_HELPER));
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
error_reporting(E_ALL);
$ch = curl_init("https://localhost/userpwd");
curl_setopt($ch, CURLOPT_VERBOSE, true);
class D {
    public string $prop;
}
$d = new D();
var_dump($d);
$references = array();
debug_zval_dump($references);
global $user, $host, $passwd, $db, $port, $socket;
global $user, $host, $passwd, $db, $port, $socket;
$this->mysqli = new mysqli($host, $user, $passwd, $db, $port, $socket);
$result = $this->mysqli->query("SELECT NOW() AS my_time FROM DUAL");
$result->close();
$arr = array(
    range(1, 5),
    range(1, 5),
    range(1, 5),
    range(1, 5),
    range(1, 5),
);
array_walk_recursive($arr,
    function (&$value, $key) use(&$arr) {
        var_dump($key);
        unset($arr[$key]);
    }
);
var_dump(substr_count("", "a", 0, 0));
$dt = new DateTime('@1604215800');
$dt->add(new DateInterval('PT1H'));
$headers1 = exif_read_data(__DIR__ . '/bug64739.jpg');
var_dump($headers1['Author'][0] === '?');
$loop_counter = 1;
$loop_counter++;
$count = 1;
$count++;
$halves[0] = $halves[1] = 0;
$halves[(mt_rand(0, $max - 1) >> 1) & 1]++;
++$failuresNb;
$count = 1;
$count++;
$y = 0;
global $y;
$y++;
$y = 0;
global $y;
$y++;
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
mysqli_query($link, 'ALTER TABLE test DROP zero');
$dom = Dom\HTMLDocument::createFromString(<<<HTML
<!DOCTYPE html>
<html>
    <body>
        <svg xmlns="http://www.w3.org/2000/svg" height="1"></svg>
        <math></math>
    </body>
</html>
HTML);
var_dump($dom->lookupNamespaceURI(NULL));
$dom = Dom\HTMLDocument::createEmpty();
var_dump($dom->lookupNamespaceURI("a"));
$readonly_anon = new readonly class {
    public int $field;
    function __construct() {
        $this->field = 2;
    }
};
var_dump($readonly_anon->field);
$filename = "bug51997.bz2";
$str = "This is a test string.\n";
$bz = bzopen($filename, "w");
bzwrite($bz, $str);
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt', Pdo\Pgsql::class, false);
var_dump($pdo->query('SELECT 1;')->fetchAll());
