<?php
#[\AllowDynamicProperties]
class C {
    public $b;
    public function __construct() {
        $this->a = new Canary();
    }
}
trait Foo {
    public static function myMethod(string $foo) {
        echo "Called ", __METHOD__, PHP_EOL;
        var_dump($foo);
    }
}
function validate($value)
{
    foreach ([0] as $_) {
        $a = &$value->a;
        $value->a ?? null;
    }
}
function __(){
  $GLOBALS['a'] = "bug\n";
  array_splice($GLOBALS,0,count($GLOBALS));
  /* All global variables including $GLOBALS are removed */
  echo $GLOBALS['a'];
}
class A {
    private static $x = 1;
}
class B extends A {
    function bar() {
        var_dump(self::$x);
    }
}
function byVal($arg) {
    var_dump($arg);
}
class TestSoapClient extends SoapClient {
  private $server;

  function __construct($wsdl) {
    parent::__construct($wsdl);
    $this->server = new SoapServer($wsdl);
    $this->server->addFunction('Test');
  }

  function __doRequest($request, $location, $action, $version, $one_way = 0): string {
    ob_start();
    $this->server->handle($request);
    $response = ob_get_contents();
    ob_end_clean();
    return $response;
  }
}
class A1 {
	public function __call($method, $args) { echo "__call\n"; }
	public static function __callStatic($method, $args) { echo "__callStatic\n"; }
}
class B1 extends A1 {
	public function test(){	parent::test();	}
}
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
function offsetExists($x): bool { $GLOBALS["obj"] = 24; return true; }
function offsetGet($x): mixed { var_dump($x); return 42; }
class P {
    protected function common() {
        throw new Exception('Unreachable');
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
class D {
    public string $prop;
}
class ParentClass { }
class ChildClass extends ParentClass {
    public function testIsCallable() {
        var_dump(is_callable(array($this, 'parent::testIsCallable')));
    }
    public function testIsCallable2() {
        var_dump(is_callable(array($this, 'static::testIsCallable2')));
    }
}
$arr = array(
0x0402 => array(0x80, "CYRILLIC CAPITAL LETTER DJE"),
0x0403 => array(0x81, "CYRILLIC CAPITAL LETTER GJE"),
0x201A => array(0x82, "SINGLE LOW-9 QUOTATION MARK"),
0x0453 => array(0x83, "CYRILLIC SMALL LETTER GJE"),
0x201E => array(0x84, "DOUBLE LOW-9 QUOTATION MARK"),
0x2026 => array(0x85, "HORIZONTAL ELLIPSIS"),
0x2020 => array(0x86, "DAGGER"),
0x2021 => array(0x87, "DOUBLE DAGGER"),
0x20AC => array(0x88, "EURO SIGN"),
0x2030 => array(0x89, "PER MILLE SIGN"),
0x0409 => array(0x8A, "CYRILLIC CAPITAL LETTER LJE"),
0x2039 => array(0x8B, "SINGLE LEFT-POINTING ANGLE QUOTATION MARK"),
0x040A => array(0x8C, "CYRILLIC CAPITAL LETTER NJE"),
0x040C => array(0x8D, "CYRILLIC CAPITAL LETTER KJE"),
0x040B => array(0x8E, "CYRILLIC CAPITAL LETTER TSHE"),
0x040F => array(0x8F, "CYRILLIC CAPITAL LETTER DZHE"),
0x0452 => array(0x90, "CYRILLIC SMALL LETTER DJE"),
0x2018 => array(0x91, "LEFT SINGLE QUOTATION MARK"),
0x2019 => array(0x92, "RIGHT SINGLE QUOTATION MARK"),
0x201C => array(0x93, "LEFT DOUBLE QUOTATION MARK"),
0x201D => array(0x94, "RIGHT DOUBLE QUOTATION MARK"),
0x2022 => array(0x95, "BULLET"),
0x2013 => array(0x96, "EN DASH"),
0x2014 => array(0x97, "EM DASH"),
//0x98	      	#UNDEFINED
0x2122 => array(0x99, "TRADE MARK SIGN"),
0x0459 => array(0x9A, "CYRILLIC SMALL LETTER LJE"),
0x203A => array(0x9B, "SINGLE RIGHT-POINTING ANGLE QUOTATION MARK"),
0x045A => array(0x9C, "CYRILLIC SMALL LETTER NJE"),
0x045C => array(0x9D, "CYRILLIC SMALL LETTER KJE"),
0x045B => array(0x9E, "CYRILLIC SMALL LETTER TSHE"),
0x045F => array(0x9F, "CYRILLIC SMALL LETTER DZHE"),
0x00A0 => array(0xA0, "NO-BREAK SPACE"),
0x040E => array(0xA1, "CYRILLIC CAPITAL LETTER SHORT U"),
0x045E => array(0xA2, "CYRILLIC SMALL LETTER SHORT U"),
0x0408 => array(0xA3, "CYRILLIC CAPITAL LETTER JE"),
0x00A4 => array(0xA4, "CURRENCY SIGN"),
0x0490 => array(0xA5, "CYRILLIC CAPITAL LETTER GHE WITH UPTURN"),
0x00A6 => array(0xA6, "BROKEN BAR"),
0x00A7 => array(0xA7, "SECTION SIGN"),
0x0401 => array(0xA8, "CYRILLIC CAPITAL LETTER IO"),
0x00A9 => array(0xA9, "COPYRIGHT SIGN"),
0x0404 => array(0xAA, "CYRILLIC CAPITAL LETTER UKRAINIAN IE"),
0x00AB => array(0xAB, "LEFT-POINTING DOUBLE ANGLE QUOTATION MARK"),
0x00AC => array(0xAC, "NOT SIGN"),
0x00AD => array(0xAD, "SOFT HYPHEN"),
0x00AE => array(0xAE, "REGISTERED SIGN"),
0x0407 => array(0xAF, "CYRILLIC CAPITAL LETTER YI"),
0x00B0 => array(0xB0, "DEGREE SIGN"),
0x00B1 => array(0xB1, "PLUS-MINUS SIGN"),
0x0406 => array(0xB2, "CYRILLIC CAPITAL LETTER BYELORUSSIAN-UKRAINIAN I"),
0x0456 => array(0xB3, "CYRILLIC SMALL LETTER BYELORUSSIAN-UKRAINIAN I"),
0x0491 => array(0xB4, "CYRILLIC SMALL LETTER GHE WITH UPTURN"),
0x00B5 => array(0xB5, "MICRO SIGN"),
0x00B6 => array(0xB6, "PILCROW SIGN"),
0x00B7 => array(0xB7, "MIDDLE DOT"),
0x0451 => array(0xB8, "CYRILLIC SMALL LETTER IO"),
0x2116 => array(0xB9, "NUMERO SIGN"),
0x0454 => array(0xBA, "CYRILLIC SMALL LETTER UKRAINIAN IE"),
0x00BB => array(0xBB, "RIGHT-POINTING DOUBLE ANGLE QUOTATION MARK"),
0x0458 => array(0xBC, "CYRILLIC SMALL LETTER JE"),
0x0405 => array(0xBD, "CYRILLIC CAPITAL LETTER DZE"),
0x0455 => array(0xBE, "CYRILLIC SMALL LETTER DZE"),
0x0457 => array(0xBF, "CYRILLIC SMALL LETTER YI"),
0x0410 => array(0xC0, "CYRILLIC CAPITAL LETTER A"),
0x0411 => array(0xC1, "CYRILLIC CAPITAL LETTER BE"),
0x0412 => array(0xC2, "CYRILLIC CAPITAL LETTER VE"),
0x0413 => array(0xC3, "CYRILLIC CAPITAL LETTER GHE"),
0x0414 => array(0xC4, "CYRILLIC CAPITAL LETTER DE"),
0x0415 => array(0xC5, "CYRILLIC CAPITAL LETTER IE"),
0x0416 => array(0xC6, "CYRILLIC CAPITAL LETTER ZHE"),
0x0417 => array(0xC7, "CYRILLIC CAPITAL LETTER ZE"),
0x0418 => array(0xC8, "CYRILLIC CAPITAL LETTER I"),
0x0419 => array(0xC9, "CYRILLIC CAPITAL LETTER SHORT I"),
0x041A => array(0xCA, "CYRILLIC CAPITAL LETTER KA"),
0x041B => array(0xCB, "CYRILLIC CAPITAL LETTER EL"),
0x041C => array(0xCC, "CYRILLIC CAPITAL LETTER EM"),
0x041D => array(0xCD, "CYRILLIC CAPITAL LETTER EN"),
0x041E => array(0xCE, "CYRILLIC CAPITAL LETTER O"),
0x041F => array(0xCF, "CYRILLIC CAPITAL LETTER PE"),
0x0420 => array(0xD0, "CYRILLIC CAPITAL LETTER ER"),
0x0421 => array(0xD1, "CYRILLIC CAPITAL LETTER ES"),
0x0422 => array(0xD2, "CYRILLIC CAPITAL LETTER TE"),
0x0423 => array(0xD3, "CYRILLIC CAPITAL LETTER U"),
0x0424 => array(0xD4, "CYRILLIC CAPITAL LETTER EF"),
0x0425 => array(0xD5, "CYRILLIC CAPITAL LETTER HA"),
0x0426 => array(0xD6, "CYRILLIC CAPITAL LETTER TSE"),
0x0427 => array(0xD7, "CYRILLIC CAPITAL LETTER CHE"),
0x0428 => array(0xD8, "CYRILLIC CAPITAL LETTER SHA"),
0x0429 => array(0xD9, "CYRILLIC CAPITAL LETTER SHCHA"),
0x042A => array(0xDA, "CYRILLIC CAPITAL LETTER HARD SIGN"),
0x042B => array(0xDB, "CYRILLIC CAPITAL LETTER YERU"),
0x042C => array(0xDC, "CYRILLIC CAPITAL LETTER SOFT SIGN"),
0x042D => array(0xDD, "CYRILLIC CAPITAL LETTER E"),
0x042E => array(0xDE, "CYRILLIC CAPITAL LETTER YU"),
0x042F => array(0xDF, "CYRILLIC CAPITAL LETTER YA"),
0x0430 => array(0xE0, "CYRILLIC SMALL LETTER A"),
0x0431 => array(0xE1, "CYRILLIC SMALL LETTER BE"),
0x0432 => array(0xE2, "CYRILLIC SMALL LETTER VE"),
0x0433 => array(0xE3, "CYRILLIC SMALL LETTER GHE"),
0x0434 => array(0xE4, "CYRILLIC SMALL LETTER DE"),
0x0435 => array(0xE5, "CYRILLIC SMALL LETTER IE"),
0x0436 => array(0xE6, "CYRILLIC SMALL LETTER ZHE"),
0x0437 => array(0xE7, "CYRILLIC SMALL LETTER ZE"),
0x0438 => array(0xE8, "CYRILLIC SMALL LETTER I"),
0x0439 => array(0xE9, "CYRILLIC SMALL LETTER SHORT I"),
0x043A => array(0xEA, "CYRILLIC SMALL LETTER KA"),
0x043B => array(0xEB, "CYRILLIC SMALL LETTER EL"),
0x043C => array(0xEC, "CYRILLIC SMALL LETTER EM"),
0x043D => array(0xED, "CYRILLIC SMALL LETTER EN"),
0x043E => array(0xEE, "CYRILLIC SMALL LETTER O"),
0x043F => array(0xEF, "CYRILLIC SMALL LETTER PE"),
0x0440 => array(0xF0, "CYRILLIC SMALL LETTER ER"),
0x0441 => array(0xF1, "CYRILLIC SMALL LETTER ES"),
0x0442 => array(0xF2, "CYRILLIC SMALL LETTER TE"),
0x0443 => array(0xF3, "CYRILLIC SMALL LETTER U"),
0x0444 => array(0xF4, "CYRILLIC SMALL LETTER EF"),
0x0445 => array(0xF5, "CYRILLIC SMALL LETTER HA"),
0x0446 => array(0xF6, "CYRILLIC SMALL LETTER TSE"),
0x0447 => array(0xF7, "CYRILLIC SMALL LETTER CHE"),
0x0448 => array(0xF8, "CYRILLIC SMALL LETTER SHA"),
0x0449 => array(0xF9, "CYRILLIC SMALL LETTER SHCHA"),
0x044A => array(0xFA, "CYRILLIC SMALL LETTER HARD SIGN"),
0x044B => array(0xFB, "CYRILLIC SMALL LETTER YERU"),
0x044C => array(0xFC, "CYRILLIC SMALL LETTER SOFT SIGN"),
0x044D => array(0xFD, "CYRILLIC SMALL LETTER E"),
0x044E => array(0xFE, "CYRILLIC SMALL LETTER YU"),
0x044F => array(0xFF, "CYRILLIC SMALL LETTER YA"),
);
foreach ($arr as $u => $v) {
    $ent = sprintf("&#x%X;", $u);
    $res = html_entity_decode($ent, ENT_QUOTES, 'WINDOWS-1251');
    $d = unpack("H*", $res);
    echo sprintf("%s: %s => %s\n", $v[1], $ent, $d[1]);

    $ent = sprintf("&#x%X;", $v[0]);
    $res = html_entity_decode($ent, ENT_QUOTES, 'WINDOWS-1251');
    if ($res[0] != "&" || $res[1] != "#")
        $res = unpack("H*", $res)[1];
    echo sprintf("%s => %s\n\n", $ent, $res);
}
$ent = sprintf("&#x%X;", $v[0]);
$res = html_entity_decode($ent, ENT_QUOTES, 'WINDOWS-1251');
$dom = new DOMDocument('1.0', 'UTF-8');
$obj = new C();
$f = __DIR__ . DIRECTORY_SEPARATOR . "67647.mov";
$r = new ReflectionClass('Test2');
$m = $r->getStaticProperties();
$m['data2'] = 200;
$r = new ResourceBundle( 'en_US', BUNDLE );
$offset = 'teststring';
$ref = &$offset;
var_dump($r[$ref]);
foo();
$filename = __DIR__ . DIRECTORY_SEPARATOR . 'bug70752.zip';
$zip = new ZipArchive();
$zip->open($filename);
$priorityQueue = new SplPriorityQueue();
$priorityQueue->setExtractFlags(SplPriorityQueue::EXTR_PRIORITY);
validate((object) []);
$obj = new C();
var_dump($obj);
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
$dom = new DOMDocument;
$element = $dom->appendChild($dom->createElement('root'));
$element->prepend('x', new DOMEntity);
spl_autoload_register();
$xml = '
<data id="1">
    <key>value</key>
</data>
';
$obj = simplexml_load_string($xml);
print_r(get_object_vars($obj));
$ch = curl_init();
curl_close($ch);
$dt = new DateTime('first day of January 2011');
var_dump($dt);
__();
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
$ar1 = array("row1" => 2, "row2" => 1);
var_dump($ar1);
$fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
$phar = new Phar($fname);
$phar->setDefaultStub(str_repeat('a', 401));
$client = new SoapClient(__DIR__."/bug29061.wsdl", array("exceptions"=>0));
$client->getQuote("ibm");
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
var_dump($namespaceless->lookupNamespaceURI(""));
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
printf("printf test 20:%16X\n", 170);
$fp = fopen(__FILE__, "r");
fclose($fp);
$doc = new \DOMDocument();
$target = $doc->documentElement->lastChild;
$target->after('bar', $doc->documentElement->firstChild, 'baz');
$date = new DateTime("2011-05-17T22:14:12");
$date2 = DateTime::createFromFormat("D H i s", $date->format("D"). ' 0 00 00');
var_dump($date->format("D") == $date2->format("D"));
$bert = "file://" . __DIR__ . "/bug41033.pem";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_SIGN, array($cpca)));
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
fflush($stream);
var_dump( range(7.0, 1.0, 6.5) );
var_dump( range(1.0, 7.0, 10.0**400) );
setlocale(LC_ALL, 'de_DE', 'de-DE');
$heredoc = <<<EOT
Hello world
EOT;
ob_start();
$ch = curl_init();
$fp = fopen(PHP_OS_FAMILY === 'Windows' ? 'nul' : '/dev/null', 'w');
curl_setopt($ch, CURLOPT_FILE, $fp);
$tz1 = new DateTimeZone('Europe/Berlin');
$tz2 = new DateTimeZone('Europe/Berlin');
$d = new DateTime('2014-12-24 13:00:00', $tz1);
var_dump($d->getTimezone(), $tz2);
$file_handle = fopen(__FILE__, "r");
$dir_handle = opendir( __DIR__ );
$resources = array($file_handle, $dir_handle);
var_dump( current($resources) );
$dom = new DOMDocument;
$dom->loadXML(<<<XML
<root>
    <test1 xml:id="x"/>
    <test2 attr="x"/>
</root>
XML);
$a = new B;
$a->bar();
$ch = curl_init("https://localhost/username");
curl_setopt($ch, CURLOPT_STDERR, fopen("php://stdout", "w"));
$sh = new SessionHandler;
$sh->write("foo", "bar");
$cert = "file://" . __DIR__ . "/cert.crt";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_NS_SSL_SERVER, array($cpca), $utfl));
stream_wrapper_register('dummy', DummyWrapper::class);
byVal(C[0]);
$dbh = @pg_connect($conn_str);
_set_lc_messages($dbh);
catch (\Exception $e) {
    printf("%s: %s\n", $e::class, $e->getMessage());
}
printf("%s: %s\n", $e::class, $e->getMessage());
var_dump("done");
$client = new TestSoapClient(__DIR__.'/bug38004.wsdl');
$strA = 'test &amp; test';
$strB = 'test & test';
$res = $client->Test(array('strA'=>$strA, 'strB'=>$strB));
print_r($res);
var_dump(substr_count("aaa", "a", 0, 0));
$o = new C;
$o->foo();
$im = imagecreate(800, 800);
imageline($im, 700, 600, 200, 100, IMG_COLOR_STYLED);
$fn = "bug71263.bz2";
unlink($fn);
ini_set("session.save_handler","files");
ob_flush();
register_shutdown_function(function () {
    echo "register_shutdown_function()\n";
    throw new \Exception('shutdown');
});
$r = new ResourceBundle( 'en_US', BUNDLE );
$r2 = $r['testtable'];
printf( "testtable: %d\n", $r2['major'] );
ob_start();
$test1 = new B1;
$test1->test();
set_error_handler(function() {
    (y);
});
$gen = (function() {
    yield from (function() { yield; })();
})();
$fiber = new Fiber(function() use ($gen) {
    $gen->current();
});
$fiber->start();
foo(true, false);
$unset_var = 10;
$db = new Pdo\Pgsql($config['ENV']['PDOTEST_DSN']);
$time = '2000-01-01 00:00:00.000000';
$tz_aus = new DateTimeZone('Australia/Sydney');
$tz_us = new DateTimeZone('America/Los_Angeles');
$auz = new DateTime($time, $tz_aus);
$us = new DateTime($time, $tz_us);
$diff = $auz->diff($us);
var_dump($diff->h);
$filename =  __DIR__ . DIRECTORY_SEPARATOR . 'bug70752.txt';
var_dump(file_exists($filename));
$reflector = new ReflectionClass(C::class);
$obj = $reflector->newLazyGhost(function ($obj) {
    throw new \Exception('Initializer');
}, ReflectionClass::SKIP_INITIALIZATION_ON_SERIALIZE);
test('Ghost', $obj);
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
var_dump(filter_input(INPUT_SERVER, "HTTP_X_FORWARDED_FOR", FILTER_UNSAFE_RAW));
var_dump($x);
$unset_var = 10;
$values = array(

      // int data
      0,
      1,
      12345,
      -2345,

      // float data
      10.5,
      -10.5,
      10.1234567e10,
      10.7654321E-10,
      .5,

      // array data
      array(),
      array(0),
      array(1),
      array(1, 2),
      array('color' => 'red', 'item' => 'pen'),

      // null data
      NULL,
      null,

      // boolean data
      true,
      false,
      TRUE,
      FALSE,

      // empty data
      "",
      '',

      // string data
      "string",
      'string',

      // undefined data
      $undefined_var,

      // unset data
      $unset_var,
);
foreach($values as $value) {
    echo @"\nArg value: $value (type: " . gettype($value) . ")\n";
    try {
        var_dump( get_class($value) );
    } catch (TypeError $e) {
        echo $e->getMessage(), "\n";
    }
}
var_dump( get_class($value) );
var_dump(@$obj->dynamic++);
setlocale(LC_ALL, 'de_DE', 'de-DE');
$sert = "file://" . __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_ANY));
printf("printf test 9:<%-20s>\n", "bar");
$a = new A();
$a->test(new C());
$ch = curl_init("https://localhost/username");
curl_setopt($ch, CURLOPT_PASSWORD, null);
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
$d1 = $prefix . "フォルダ";
rmdir($d1);
$cert = "file://" . __DIR__ . "/cert.crt";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SMIME_ENCRYPT, array($cpca)));
$argv = array(1, 2, 3);
var_dump($argv);
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
$create = sprintf('CREATE TABLE test(id INT, col1 %s)', $column_def);
var_dump($create);
$conn = pg_connect($conn_str);
$table='test_68638';
pg_insert($conn,$table, array('id' => 1, 'value' => 1.2));
$b = 'ok';
$_b = $b;
$d = new D();
$c = new C();
$d->prop = $c;
undefined_function();
var_dump($s);
$old_cwd = getcwd();
chdir($old_cwd);
var_dump(
        strnatcmp('foo ', 'foo '),
        strnatcmp('foo', 'foo'),
        strnatcmp(' foo', ' foo')
    );
$batch_file_content = <<<EOT
@echo off
powershell -Command "Write-Output '%0%'"
powershell -Command "Write-Output '%1%'"
EOT;
$batch_file_path = __DIR__ . '/ghsa-9fcc-425m-g385_003.bat';
file_put_contents($batch_file_path, $batch_file_content);
ob_end_clean();
ini_set('exif.decode_unicode_motorola', 'UCS-2LE');
$f = __DIR__."/data/test.txt.gz";
$h = gzopen($f, 'r');
gzclose($h);
$r = new ReflectionClass('stdClass');
var_dump(serialize($r));
$file = __DIR__ . '/bug38212私はガラスを食べられます.gd2';
unlink($file);
$tester = new FPM\Tester($cfg);
$userMessage = "'user' directive is ignored when FPM is not running as root";
$tester->expectLogNotice($userMessage, 'cccc');
$dom = new DOMImplementation();
$type = $dom->createDocumentType('html');
var_dump($type->childNodes);
$filename = "bug51997.bz2";
$bz = bzopen($filename, "w");
bzclose($bz);
$log_file = tempnam(sys_get_temp_dir(), 'php-curl-CURLOPT_WRITEFUNCTION-trampoline');
$fp = fopen($log_file, 'w+');
fwrite($fp, "test");
$unset_var = 10;
$fp = fopen(__FILE__, "r");
$heredoc = <<<EOT
Hello world
EOT;
$var = 10;
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
var_dump( array_unshift($temp_array, $var) );
$child = new ChildClass();
$child->testIsCallable2();
var_dump(__METHOD__);
$mysql = new my_mysqli($host, $user, $passwd, $db, $port, $socket);
$mysql->query("CREATE TABLE temp (id INT UNSIGNED NOT NULL)");
$link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
$link->close();
$tester = new FPM\Tester($cfg);
$tester->close();
$obj = new Test;
var_dump($obj);
$pdo = MySQLPDOTest::factory();
$pdo->query('INSERT INTO bug79596 VALUES(4.9)');
