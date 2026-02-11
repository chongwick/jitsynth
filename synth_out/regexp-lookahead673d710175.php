<?php
class B {

    private $mysqli;

    public function __construct() {
        global $user, $host, $passwd, $db, $port, $socket;
        $this->mysqli = new mysqli($host, $user, $passwd, $db, $port, $socket);
        $result = $this->mysqli->query("SELECT NOW() AS my_time FROM DUAL");
        $row = $result->fetch_object();
        echo $row->my_time."<br>\n";
        $result->close();
    }

    public function __destruct() {
        $this->mysqli->close();
    }
}
class C extends stdClass {
    public int $a;
}
function showFirstTwoItems($it) {
  echo str_replace("\0", '\0', $it->key()) . " => " . $it->current() .
"\n";
  $it->next();
  echo str_replace("\0", '\0', $it->key()) . " => " . $it->current() .
"\n";
}
function test(string $input) {
    var_dump(filter_var($input, FILTER_VALIDATE_URL));
}
class A
{
    public function & __get($name)
    {
        return $this->test;
    }
}
function foo() {
  $i = 1;
  $x = 2;
  var_dump($i=$x);
  return $i;
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
function test2() {
    $x = test();
}
class TrampolineTest {
    public function __call(string $name, array $arguments) {
        echo 'Trampoline for ', $name, PHP_EOL;
    }
}
function f_0() {
    return $a;
}
function f_1() {
    $B = new B();
    if (true) {
        define ('foobar', 1);
    }
    if (!true) {
        var_dump(json_decode('{"":"value", "key":"value"}', true));
    }
}
function f_2() {
    $db = getDbConnection();
    $sql = '
        SET NOCOUNT ON
        SELECT 0 AS [result]
    ';
    $stmt = $db->query($sql);
    $reflector = new ReflectionClass(C::class);
    $obj = new C();
    $reflector->resetAsLazyProxy($obj, function ($obj) {
        });
}
$dest = dirname(realpath(__FILE__)) . '/bug27582.png';
$im2 = imagecreatefrompng($dest);
$col = imagecolorat($im2, 5, 5);
$str = "repeater id='loopt' dataSrc=subject columns=2";
preg_match_all("/(['\"])(.*)(?<!\\\\)\\1/sU", $str, $str_instead);
$dbh = @pg_connect($conn_str);
pg_close($dbh);
$stmt->close();
$dt = DateTime::createFromFormat('Y-m-d|', '2011-02-02');
var_dump(mb_stripos('Hello', 'e', 0, '8bit'));
$ao = new ArrayObject(new C);
$ai = $ao->getIterator();
showFirstTwoItems($ai);
$r = socket_sendmsg($sends1, [
    "name" => [ "addr" => "::1", "port" => 3002],
    "iov" => ["test ", "thing", "\n"],
    "control" => [[
        "level" => IPPROTO_IPV6,
        "type" => IPV6_TCLASS,
        "data" => 40,
    ]]
], 0);
var_dump($r);
$dt = DateTime::createFromFormat('Y-m-d!', '2011-02-02');
var_dump($dt);
$test = array("A\x00B" => "Hello world");
debug_zval_dump($test);
$outfile = tempnam(sys_get_temp_dir(), "ssl");
++$failuresNb;
$varOutput = ob_get_contents();
$varOutput = str_replace(
        [$var_dim_filename],
        ['%s'],
        $varOutput
    );
file_put_contents(__DIR__ . DIRECTORY_SEPARATOR . "debug_false_container_{$failuresNb}.txt", $varOutput);
catch (\ReflectionException $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
printf("%s: %s\n", $e::class, $e->getMessage());
var_dump(class_exists("TestClass", true));
$reflector = new ReflectionClass(C::class);
$obj = new C();
$reflector->resetAsLazyProxy($obj, function ($obj) {
    var_dump("initializer");
    return new C();
});
$x = new SoapClient('http://i_dont_exist.com/some.wsdl');
$depth0 = "depth02";
$depth1 = "depth1";
$depth2 = "depth2";
$targetDir = __DIR__ . DIRECTORY_SEPARATOR . $depth0 . DIRECTORY_SEPARATOR . $depth1 . DIRECTORY_SEPARATOR . $depth2;
mkdir($targetDir, 0777, true);
$dom = Dom\HTMLDocument::createEmpty();
$container = $dom->appendChild(createElement($dom, "container"));
$container->appendChild(createElementNS($dom, "urn:a", "foo:HTML", "7"));
$im = imagecreatetruecolor(1, 1);
imagescale($im, 1, 1, -10);
test("http://test@127.0.0.1");
$array1 = array(1, 2);
$ar1 = array("row1" => 2, "row2" => 1);
var_dump(array_multisort($ar1));
$array = array("test" => 1);
$a = "lest";
var_dump($array[$a]);
set_error_handler(function() {
//    var_dump(func_get_args());
    DoesNotExists::$nope = true;
}, E_ALL);
$dom = Dom\HTMLDocument::createEmpty();
var_dump($dom->lookupNamespaceURI("a"));
openssl_error_string();
printf("[008] PS and non-PS results differ, dumping data\n");
var_dump(version_compare('1.2', '2.1', '??'));
$s = new SplObjectStorage();
$s->attach($s);
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug54028_2" . DIRECTORY_SEPARATOR;
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
var_dump($ffi->bug_gh16013_return_bool());
$doc = new \DOMDocument();
$target = $doc->documentElement->lastChild;
$target->before('bar', $doc->documentElement->firstChild, 'baz');
var_dump(array_pop($input), $input);
$cert = "file://" . __DIR__ . "/cert.crt";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_CRL_SIGN, array($cpca)));
$empty = "";
var_dump(openssl_pkcs7_verify($empty, 0));
$reader = new XMLReader();
$reader->close();
$inputs = array(
    '<frameset > </frameset>',
    '<html><frameset> </frameset> </html',
);
$dt = new DateTime('first day of January 2011');
var_dump($dt);
$oIntlDateFormatter = new IntlDateFormatter("en_GB");
var_dump($oIntlDateFormatter->parse('America/Los_Angeles', $offset1));
$b = new B;
var_dump($b->test);
$document = new \DOMDocument();
$h1 = $document->getElementsByTagName('h1');
var_dump($h1->length);
$GLOBALS['b'] = 2;
$b = &$GLOBALS['b'];
var_dump(foo());
var_dump(soundex("Gauss"));
$list = new SplDoublyLinkedList();
$list->push('o');
$filename =  __DIR__ . DIRECTORY_SEPARATOR . 'bug70752.txt';
var_dump(file_exists($filename));
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
stream_filter_append($stream, $filter);
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug54028_2" . DIRECTORY_SEPARATOR;
rmdir($prefix);
$dom = Dom\HTMLDocument::createFromString(<<<HTML
<!DOCTYPE html>
<html>
    <body>
        <svg xmlns="http://www.w3.org/2000/svg" height="1"></svg>
        <math></math>
    </body>
</html>
HTML);
var_dump($dom->lookupNamespaceURI("xml"));
$im = imagecreate(800, 800);
test_image_equals_file(__DIR__ . '/bug43475.png', $im);
$date = new DateTime("28-July-2008");
$other = new DateTime("31-July-2008");
$diff = date_diff($date, $other);
var_dump($diff);
$empty_webp = __DIR__ . "/gh13774.webp";
file_put_contents($empty_webp, "");
$object1 = new foo();
$array_object = array();
$array_object[0] = &$object1;
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
$dom = new DOMDocument;
var_dump($dom->getElementById('x')?->nodeName);
$eml = __DIR__ . "/signed.eml";
var_dump(openssl_pkcs7_verify($eml, 0));
$pid = pcntl_fork();
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
$reflector = new ReflectionClass(C::class);
$obj = $reflector->newLazyGhost(function ($obj) {
        var_dump("initializer");
        $obj->__construct();
    });
$reflector->getMethod('test')->invoke($obj, $obj);
$name = "foo";
$sert = "file://" . __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_ENCRYPT));
$bert = "file://" . __DIR__ . "/bug41033.pem";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_ANY, array($cpca)));
$a = $b = $c = 2;
foreach (a(range(1, 3)) as $a) {
    var_dump($a);
}
var_dump($a);
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
$bug_gh16013_callback_struct->return_uint16 = function($val) use($ffi) {
    $cdata = $ffi->new('uint16_t');
    $cdata->cdata = $val;
    return $cdata;
};
$cert = "file://" . __DIR__ . "/cert.crt";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_CLIENT, array($cpca), $utfl));
$x = new X;
$x->prop = 1;
var_dump($x->prop);
test2();
$s = new SplObjectStorage();
$oIntlDateFormatter = new IntlDateFormatter("en_GB");
var_dump($oIntlDateFormatter->getTimeZone()->getID());
$oIntlDateFormatter = new IntlDateFormatter("en_GB");
$oIntlDateFormatter->setTimeZone('Europe/Berlin');
$dom = new DOMDocument;
var_dump($dom->getElementById('x')?->nodeName);
$iterator = 1;
$bert = "file://" . __DIR__ . "/bug41033.pem";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_CRL_SIGN, array($cpca)));
$dom = new DOMDocument;
$element = $dom->appendChild($dom->createElement('root'));
$element->prepend('x', new DOMEntity);
var_dump(error_reporting());
$headers1 = exif_read_data(__DIR__ . '/bug64739.jpg');
$dbh = @pg_connect($conn_str);
_set_lc_messages($dbh);
define ('foobar', 1);
var_dump(soundex("Lukasiewicz") == soundex("Ghosh"));
$str = "repeater id='loopt' dataSrc=subject columns=2";
preg_match_all("/(['\"])((?:\\\\\\1|.)*)\\1/sU", $str, $str_instead);
var_dump($sends1);
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
$r = new Phar(__DIR__ . "/bug69279.phar.zip");
$dom = new DOMDocument;
$dom->getElementById('x')->remove();
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
$tester->expectLogStartNotices();
$foo = new Foo;
$bar = (int)$foo;
var_dump($bar);
var_dump ( rtrim("rtrim test        ", " ") );
$priorityQueue = new SplPriorityQueue();
print_r($priorityQueue->top());
var_dump(-2147483648 % -1);
$now = new DateTime('2018-11-03 11:34:20.781751');
$ago = new DateTime('2018-11-03 11:34:20.000000');
$diff = $ago->diff($now, true);
var_dump($diff->invert, $diff->s, $diff->f);
$o = new TrampolineTest();
$callback2 = [$o, 'trampoline2'];
$array_test = array("a", "b", "d", 7, "u" => "U", -4, "-.008" => "neg.008");
var_dump( end($array_test) );
