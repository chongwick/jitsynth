<?php
$magic_file = __DIR__ . '/bug79283.db';
$finfo = new finfo(FILEINFO_NONE, $magic_file);
$dom = new DOMDocument();
$message = 'hello';
$batch_file_path = __DIR__ . '/ghsa-9fcc-425m-g385_003.bat';
$twoseventy = M_PI * 1.5;
$f = __DIR__."/data/test.txt.gz";
$h = gzopen($f, 'r');
var_dump(gzeof($h));
mkdir(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370_003');
$dest = dirname(realpath(__FILE__)) . '/bug27582.png';
$im = ImageCreateTrueColor(10, 10);
imagepng($im, $dest);
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
function display($res)
{
	echo implode("\n", array_map(fn($row) => implode("\t", $row), $res))."\n";
}
display($pdo->query("select * from t2")->fetchAll());
setlocale(LC_ALL, "C");
$db = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
$db->query(<<<'SQL'
CREATE
    PROCEDURE `testSp`()
	BEGIN
		DECLARE `cur` CURSOR FOR SELECT 1;
		OPEN `cur`;
		CLOSE `cur`;
		SELECT 1;
	END;
SQL);
$responses = array(
    "data://text/plain,HTTP/1.1 302 Moved Temporarily\r\n"
    . "Location: /try-again\r\n"
    . "Transfer-Encoding: chunked\r\n\r\n"
    . "0\r\n\r\n",
    "data://text/plain,HTTP/1.1 200 Ok\r\n"
    . "Transfer-Encoding: chunked\r\n\r\n"
    . "4\r\n1234\r\n0\r\n\r\n",
);
['pid' => $pid, 'uri' => $uri] = http_server($responses, $output);
var_dump(file_get_contents($uri));
$doc = new \DOMDocument();
$doc->loadXML('<a>foo<last/></a>');
$r = new ReflectionClass('stdClass');
var_dump(serialize($r));
$strings_with_nulls = array(
                   "\0",
                   '\0',
                           "hello\0world",
                           "\0hel\0lo",
                           "hello\0",
                           "\0\0hello\tworld\0\0",
                           "\\0he\0llo\\0",
                           'hello\0\0'
                           );
foreach( $strings_with_nulls as $string )  {
  echo "\n--- Iteration $counter ---\n";
  var_dump( strtok($string, "\0") );
  for($count = 1; $count <= 5; $count++)  {
    var_dump( strtok("\0") );
  }
  $counter++;
}
var_dump( strtok($string, "\0") );
ob_end_clean();
php_cli_server_start(<<<'SCRIPT'
    ini_set('display_errors', 0);
    switch($_SERVER["REQUEST_URI"]) {
            case "/parse":
                    try {
                        eval("this is a parse error");
                    } catch (ParseError $e) {
                    }
                    echo "OK\n";
                    break;
            case "/fatal":
                    eval("foo();");
                    echo "OK\n";
                    break;
            case "/compile":
                    eval("class foo { final private final function bar() {} }");
                    echo "OK\n";
                    break;
            case "/fatal2":
                    foo();
                    echo "OK\n";
                    break;
            default:
                    return false;
    }
SCRIPT
);
$dbh = @pg_connect($conn_str);
$res = pg_query($dbh, 'SET client_min_messages TO NOTICE;');
var_dump($res);
function byVal($arg) {
    var_dump($arg);
}
var_dump($arg);
$fp = fopen (__FILE__, "r");
fclose($fp);
$dom = new DOMDocument;
var_dump($dom->getElementById('x')?->nodeName);
ob_start("test");
$dest = __DIR__ . "/bug40228";
rmdir($dest . '/test');
$s = new SplObjectStorage();
$s->attach($s);
$fp = tmpfile();
fwrite($fp, "I am the LOB data");
$ch = curl_init("https://localhost/userpwd");
$response = curl_exec($ch);
var_dump(str_contains($response, "authorization"));
$now = new DateTimeImmutable();
$dateperiod = (new ReflectionClass(DatePeriod::class))->newInstanceWithoutConstructor();
$dateinterval = (new ReflectionClass(DateInterval::class))->newInstanceWithoutConstructor();
$dateperiod->__unserialize(['start' => $now, 'end' => $now, 'current' => $now, 'interval' => $dateinterval]);
$priorityQueue = new SplPriorityQueue();
$priorityQueue->insert("b", 2);
printf("printf test 4:%.10f\n", 10.0/3);
sprintf('%3$s, %2$s %1$s', "a", "b");
$references = array();
debug_zval_dump($references);
mysqli_free_result($res);
putenv('PDOTEST_ATTR='.serialize([PDO::ATTR_PERSISTENT => true]));
$ar1 = array("row1" => 2, "row2" => 1);
mysqli_free_result($res);
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
$tmpFileIn = tempnam(sys_get_temp_dir(), 'test');
unlink($tmpFileIn);
$r = new ResourceBundle( 'en_US', BUNDLE );
printf( "testbin: %s\n", bin2hex($r['testbin']) );
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
$stmt = $pdo->prepare("select :1 n union all select :1 + 1 union all select :1 + 2 union all select :1 + 3");
$stmt->execute([ 15 ]);
$server = new soapserver(null,array('uri'=>"http://testuri.org"));
$HTTP_RAW_POST_DATA = <<<EOF
<?xml version="1.0" encoding="ISO-8859-1"?>
<SOAP-ENV:Envelope
  SOAP-ENV:encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"
  xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/"
  xmlns:xsd="http://www.w3.org/2001/XMLSchema"
  xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
  xmlns:si="http://soapinterop.org/xsd">
  <SOAP-ENV:Body>
    <ns1:test xmlns:ns1="http://testuri.org"/>
  </SOAP-ENV:Body>
</SOAP-ENV:Envelope>
EOF;
$server->handle($HTTP_RAW_POST_DATA);
spl_autoload_register(function ($class) {
    if (!require_once($class.'.inc')) {
        error_log('Error: Autoload class: '.$class.' not found!');
    }
});
var_dump ( rtrim("rtrim test$#@", "#@$") );
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
var_dump($namespaceless->lookupNamespaceURI("a"));
$r = new ReflectionClass('stdClass');
var_dump(serialize($r));
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
$sert = "file://" . __DIR__ . "/san-cert.pem";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_ENCRYPT, array($cpca)));
mysqli_fetch_field($res);
$curl = curl_init("http://www.google.com");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
var_dump(http_get_last_response_headers());
$dom = Dom\HTMLDocument::createEmpty();
$container = $dom->appendChild(createElement($dom, "container"));
$container->appendChild(createElementNS($dom, NULL, "HTML", "4"));
var_dump(rename("phar://a.phar/x", "phar://a.phar/y"));
$str = 'Hello World';
$shm_key = ftok(__FILE__, 'p');
$shm_id1 = shmop_open($shm_key, 'c', 0644, strlen($str));
shmop_delete($shm_id1);
$output = array();
var_dump($output);
$db = PDOTest::factory();
$db->exec("CREATE TABLE test36428 (a VARCHAR(10))");
gc_collect_cycles();
$fp = fopen (__FILE__, "r");
$dfp = opendir ( __DIR__ );
$unset_array = array(10);
$varient_arrays = array (
  /* integers */
  543915,
  -5322,
  0x55F,
  -0xCCF,
  123,
  -0654,

  /* strings */
  "",
  '',
  "0",
  '0',
  'string',
  "string",

  /* floats */
  10.0000000000000000005,
  .5e6,
  -.5E7,
  .5E+8,
  -.5e+90,
  1e5,

  /* objects */
  new stdclass,

  /* resources */
  $fp,
  $dfp,

  /* nulls */
  null,
  NULL,

  /* boolean */
  true,
  TRUE,
  FALSE,
  false,

  /* unset/undefined arrays  */
  @$unset_array,
  @$undefined_array
);
foreach ($varient_arrays as $type ) {
  echo "-- Iteration $loop_counter --\n"; $loop_counter++;
  var_dump( is_array ($type) );
}
var_dump( is_array ($type) );
$dt = new DateTime('@1604215800');
$dt->add(new DateInterval('PT1H'));
#[\AllowDynamicProperties]
class C {
    public $b;
    public function __construct() {
        $this->a = new Canary();
    }
}
$obj = new C();
var_dump($obj);
$dest = __DIR__ . "/bug40228";
rmdir($dest);
mt_srand(1234567890);
$log_file = tempnam(sys_get_temp_dir(), 'php-curl-CURLOPT_WRITEFUNCTION-trampoline');
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'file://' . $log_file);
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
$b = "30";
class ErrorHandler {
    private $private = 'THIS IS PRIVATE'."\n";

    function __construct() {
        set_error_handler(
            function ($errno, $errstr, $errfile, $errline) {
                $this->handleError($errno, $errstr, $errfile, $errline);
            }
        );
    }

    private function handleError($errno, $errstr, $errfile, $errline, $errmodule = null) {
        echo __METHOD__. " dealing with error $errstr\n";

        // This attribute is no longer accessible in this object.  Same for other
        // objects and their private attributes once we reach in this state.
        echo $this->private;
    }
}
$errorHandler = new ErrorHandler();
final class A
{
    public string $a;

    public static function fromArray(array $props): self
    {
        $me = new static;
        foreach ($props as $k => &$v) {
            $me->{$k} = &$v;  # try to remove &
        }
        return $me;
    }

    public function __get($name)
    {
        throw new \LogicException("Property '$name' is not defined.");
    }
}
var_dump(A::fromArray(['a' => 'foo']));
var_dump(filter_var("", FILTER_SANITIZE_ENCODED));
$ch = curl_init();
var_dump(curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, true));
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
zerofill(10, $link, 'DOUBLE PRECISION');
$ch = curl_init("https://localhost/username");
$response = curl_exec($ch);
var_dump(str_contains($response, "authorization"));
$str = "repeater id='loopt' dataSrc=subject columns=2";
preg_match_all("/(['\"])(.*)(?<!\\\\)\\1/sU", $str, $str_instead);
var_dump(mb_stripos('Hello', 'e', 0, '8bit'));
$r = new ResourceBundle( 'en_US', BUNDLE );
$offset = 'teststring';
$ref = &$offset;
var_dump($r[$ref]);
$db = PDOTest::test_factory(dirname(__FILE__) . '/common.phpt');
$stmt = $db->prepare('select ?- lseg \'((-1,0),(1,0))\'');
$stmt->execute();
function __construct($wsdl) {
    parent::__construct($wsdl);
    $this->server = new SoapServer($wsdl);
    $this->server->addFunction('Test');
  }
$this->server = new SoapServer($wsdl);
function __doRequest($request, $location, $action, $version, $one_way = 0): string {
    ob_start();
    $this->server->handle($request);
    $response = ob_get_contents();
    ob_end_clean();
    return $response;
  }
$this->server->handle($request);
$oldcwd = getcwd();
chdir($oldcwd);
$fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
$phar = new Phar($fname);
$phar->setDefaultStub(str_repeat('a', 400));
$array = [0];
$ar = array_values($array);
var_dump($ar);
$filename = "bug51997.bz2";
$str = "This is a test string.\n";
$bz = bzopen($filename, "w");
bzwrite($bz, $str);
$unset_var = 10;
$fp = fopen(__FILE__, "r");
$heredoc = <<<EOT
Hello world
EOT;
$arrays = array (

       // empty array
/*1*/  array(),

       // arrays with integer keys
       array(0 => "0"),
       array(1 => "1"),
       array(1 => "1", 2 => "2", 3 => "3", 4 => "4"),

       // arrays with string keys
/*7*/  array('\tHello' => 111, 're\td' => "color",
             '\v\fworld' => 2.2, 'pen\n' => 33),
       array("\tHello" => 111, "re\td" => "color",
             "\v\fworld" => 2.2, "pen\n" => 33),
       array("hello", $heredoc => "string"), // heredoc

       // array with object, unset variable and resource variable
       array(@$unset_var => "hello", $fp => 'resource'),

       // array with mixed keys
/*11*/ array('hello' => 1, "fruit" => 2.2,
             $fp => 'resource', 133 => "int",
             @$unset_var => "unset", $heredoc => "heredoc")
);
foreach($arrays as $array) {
  echo "-- Iteration $iterator --\n";

  /* with default argument */
  // returns element count in the resulting array after arguments are pushed to
  // beginning of the given array
  $temp_array = $array;
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
var_dump($temp_array);
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
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
$pdo->exec("insert into t values (0, 'original')");
$host = PHP_CLI_SERVER_HOSTNAME;
$r = new ReflectionClass('Test2');
$m = $r->getStaticProperties();
$m['data1'] = 100;
$arc_name = __DIR__ . "/bug40228.zip";
$zip = new ZipArchive;
$zip->open($arc_name, ZIPARCHIVE::CREATE);
function test(string $name, object $obj) {
    printf("# %s:\n", $name);

    var_dump($obj);
    var_dump($obj->a);
    var_dump($obj);
}
printf("# %s:\n", $name);
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
$priorityQueue = new SplPriorityQueue();
$priorityQueue->setExtractFlags(SplPriorityQueue::EXTR_DATA);
var_dump(session_cache_limiter());
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
$filename = "bug51997.bz2";
$bz = bzopen($filename, "w");
bzclose($bz);
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
$tester->close();
$dt = new DateTime('@1604219400');
$dt->setTimezone(new DateTimeZone('UTC'));
error_reporting(E_ALL);
class C extends stdClass {
    public int $a;
}
$reflector = new ReflectionClass(C::class);
$obj = new C();
$reflector->resetAsLazyProxy($obj, function ($obj) {
    });
$mysqli = new mysqli("$host:$port", $user, $passwd, $db);
$tbl = "test";
$sql = "DROP TABLE IF EXISTS $tbl";
$mysqli->query($sql);
$list = [];
asort($list);
$conn = odbc_connect($dsn, $user, $pass);
odbc_exec($conn, "INSERT INTO bug80147 VALUES (1, CONVERT(VARBINARY(50), 'whatever'))");
function something() {
        foreach(array(1, 2) as $value) {
                for($i = 0; $i < 1; $i++) {
                        continue 2;
                }
                return;
        }
}
something();
$list = new SplDoublyLinkedList();
$list->setIteratorMode(SplDoublyLinkedList::IT_MODE_LIFO);
#[AllowDynamicProperties]
class C {
    public int $a = 1;
    public function __construct() {
        var_dump(__METHOD__);
    }
}
function test(string $name, object $obj) {
    printf("# %s:\n", $name);

    var_dump($obj);
    var_dump(@$obj->dynamic++);
    var_dump($obj);
}
$reflector = new ReflectionClass(C::class);
$obj = $reflector->newLazyGhost(function ($obj) {
    var_dump("initializer");
    $obj->__construct();
});
$obj = $reflector->newLazyProxy(function ($obj) {
    var_dump("initializer");
    return new C();
});
test('Proxy', $obj);
$date1 = DateTime::createFromFormat("!D d M Y", "Sat 19 November 2011");
$date2 = new DateTime("Sat 19 November 2011");
var_dump($date1->format('Y-m-d') == $date2->format('Y-m-d'));
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
$reqOf3 = 'select 79 n union all select 80 union all select 81';
$stmt = $pdo->prepare($reqOf3);
$stmt->execute();
function foo($ref, $alt) {
    unset($GLOBALS['a']);
    unset($GLOBALS['b']);
    $GLOBALS['a'] = 1;
    $GLOBALS['b'] = 2;

    $org_a = $GLOBALS['a'];
    $org_b = $GLOBALS['b'];

    if ($ref) {
        global $a, $b;
    } else {
        /* zval temp_var(NULL); // refcount = 1
         * a = temp_var[x] // refcount = 2
         */
        $a = NULL;
        $b = NULL;
    }

    var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
    echo "--\n";
    if ($alt) {
        $a = &$GLOBALS['a'];
        $b = &$GLOBALS['b'];
    } else {
        extract($GLOBALS, EXTR_REFS);
    }
    var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
    echo "--\n";
    $a = &$GLOBALS['a'];
    $b = &$GLOBALS['b'];
    var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
    echo "--\n";
    $GLOBALS['b'] = 3;
    var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
    echo "--\n";
    $a = 4;
    var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
    echo "--\n";
    $c = $b;
    var_dump($b, $GLOBALS['b'], $c);
    echo "--\n";
    $b = 'x';
    var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b'], $c);
    echo "--\n";
    var_dump($org_a, $org_b);
    echo "----";
    if ($ref) echo 'r';
    if ($alt) echo 'a';
    echo "\n";
}
foo(false, false);
$input = fopen(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370.tar', 'r');
$output = fopen(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370_003' . DIRECTORY_SEPARATOR . 'testfile', 'w');
var_dump(stream_copy_to_stream($input, $output, 10240, 0x200));
date_default_timezone_set('UTC');
