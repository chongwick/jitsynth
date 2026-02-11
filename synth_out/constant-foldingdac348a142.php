<?php
class ParentClass { }
class ChildClass extends ParentClass {
    public function testIsCallable() {
        var_dump(is_callable(array($this, 'parent::testIsCallable')));
    }
    public function testIsCallable2() {
        var_dump(is_callable(array($this, 'static::testIsCallable2')));
    }
}
function bar($x='no argument')
{
    throw new Exception("This is an exception from bar({$x}).");
}
class A2 { // A1 with private function test
	public function __call($method, $args) { echo "__call\n"; }
	public static function __callStatic($method, $args) { echo "__callStatic\n"; }
	private function test() {}
}
class B2 extends A2 {
	public function test(){	parent::test();	}
}
function test(string $name, object $obj) {
    printf("# %s:\n", $name);

    var_dump($obj);
    var_dump(@$obj->dynamic++);
    var_dump($obj);
}
function does_not_work()
{
    global $data; // Remove this line to make array_multisort() work

    $data = array('first', 'fifth', 'second', 'forth', 'third');
    $sort = array(1, 5, 2, 4, 3);
    array_multisort($sort, $data);

    var_dump($data);
}
class Canary {
    public function __construct(public mixed $value) {}
    public function __destruct() {
        var_dump(__METHOD__);
    }
}
class foo
{
  function __toString() {
    return "Object";
  }
}
class C {
    public function __toString() {
        global $c;
        $c = [];
        throw new Exception(__METHOD__);
    }
}
class D {
    public string $prop;
}
class A {
    public $b;
}
class dataAccessor
{
}
function createDB(): PDO {
    $db = MySQLPDOTest::factory();
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    return $db;
}
function f_0() {
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt', Pdo::class, true);
    $code = '$server = new SoapServer("' . __DIR__ . '"/bug49278.wsdl", ["trace"=>1]);' .
            <<<'PHP'
            function Add() {}
            $server->addFunction('Add');
            $server->handle();
            PHP;
    $child = new ChildClass();
    bar('first try');
    $conn = odbc_connect($dsn, $user, $pass);
    $test2 = new B2;
    var_dump($obj);
    $db = PDOTest::test_factory(dirname(__FILE__) . '/common.phpt');
    $stmt = $db->prepare('select ??- lseg \'((-1,0),(1,0))\'');
    $stmt->execute();
    $im = ImageCreateTrueColor(10, 10);
    $color = ImageColorAllocateAlpha($im, 0, 0, 0, 1);
    printf("printf test 29:%2\$-2d %1\$2d\n", 1, 2);
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
    $ent = sprintf("&#x%X;", $u);
    $special_chars_str = <<<EOD
    Example of heredoc string contains
    $#%^*&*_("_")!#@@!$#$^^&*(special)
    chars.
    EOD;
    $heredoc_needle = <<<EOD
    ^^&*(
    EOD;
    $needles = array(
      "!@@!",
      '_',
      '("_")',
      "$*",
      "(special)",
      $heredoc_needle,  //needle as heredoc string
      $special_chars_str  //needle as haystack
    );
    foreach($needles as $needle) {
      var_dump( strrchr($special_chars_str, $needle) );
    }
    var_dump( strrchr($special_chars_str, $needle) );
    $db = MySQLPDOTest::factory();
    does_not_work();
    $responses = array(
        "data://text/plain,HTTP/1.1 200 Some very long reason-phrase to test that this is properly handled by our code without adding a new header like  Bad: Header\r\nGood: Header\r\n\r\nBody",
        "data://text/plain,HTTP/1.1 200 \r\nGood: Header\r\n\r\nBody",
    );
    ['pid' => $pid, 'uri' => $uri] = http_server($responses, $output);
    $dom = new DOMDocument;
    $test1 = $dom->getElementById('x');
    $test1->setAttribute('xml:id', 'y');
    $headers1 = exif_read_data(__DIR__ . '/bug64739.jpg');
    $zip = new ZipArchive();
    $zip->close();
    $offsets = array(20, 21, 22, 53, 54);
    $string_mb = base64_decode('5pel5pys6Kqe44OG44Kt44K544OI44Gn44GZ44CCMDEyMzTvvJXvvJbvvJfvvJjvvJnjgII=');
    $needle = base64_decode('44CC');
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
    var_dump( mb_strpos($string_mb, $needle, $i, 'UTF-8') );
    $arg = new Stdclass();
    $arg->name = array();
    C::$p++;
    ob_start(function() {
        declare(ticks=1);
        register_tick_function(
           function() { }
        );
    });
    $fp = fopen(__FILE__, "r");
    $loop_counter = 1;
    $loop_counter++;
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
    $d1 = $prefix . "フォルダ";
    unlink("$d1\\test1.txt");
    $canary = new Canary(null);
    $object1 = new foo();
    $array_object = array();
    $array_object[0] = &$object1;
    $halves[0] = $halves[1] = 0;
    $halves[(mt_rand(0, $max - 1) >> 1) & 1]++;
    $halves[0] = $halves[1] = 0;
    $halves[(int) (mt_rand(0, $max - 1) / ($max / 2))]++;
    printf("# Proxy:\n");
    $dbConnection = new Com('ADODB.Connection');
    $x = 1;
    $x += 0;
    ++$x;
    call_user_func('bar','second try');
}
printf("Content-Type Default OK" . PHP_EOL);
function f_1() {
    $arr1 = array(1, "float", "f4", "hello", 2.2, 'color', "string", "pen\n", 11);
    $reflection = new ReflectionClass('\DateTimeImmutable');
    $immutable = $reflection->newInstanceWithoutConstructor();
    $mutable = \DateTime::createFromImmutable($immutable);
    $obj = new Test;
    $name = "foo";
    var_dump(empty($obj[$name]));
    $foo = new Foo();
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    (function() {
    	try {
    		foo(); // Error
    	} catch (\Exception $e) {
    		var_dump($e);
    	} catch (\ParseError $e) {
    		var_dump($e);
    	}
    })();
    $dbh = @pg_connect($conn_str);
    $res = pg_query($dbh, 'SELECT test_notice()');
    $array = array('f' => "first", "s" => 'second', 1, 2.222);
    $dom = Dom\HTMLDocument::createEmpty();
    $container = $dom->appendChild(createElement($dom, "container"));
    $container->appendChild(createElementNS($dom, "urn:a", "foo:HTML", "7"));
    $bar = new DateTime();
    $function = function (int &$foo, DateTimeInterface &$bar) {};
    $c = new C();
    $d = new D();
    $d->prop = $c;
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $phar = new Phar($fname);
    $phar->stopBuffering();
    $r = new ReflectionClass('Test2');
    $m = $r->getStaticProperties();
    $m['data4'] = 400;
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
    mysqli_close($link);
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
    $fp = fopen(PHP_OS_FAMILY === 'Windows' ? 'nul' : '/dev/null', 'w');
    $bert = "file://" . __DIR__ . "/bug41033.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_NS_SSL_SERVER, array($cpca), $utfl));
    $dom = new DOMDocument;
    $dom->strictErrorChecking = false;
    $im = imagecreatefromgd2(__DIR__ . DIRECTORY_SEPARATOR . 'bug73161.gd2');
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
    $code = null;
    $s = 'C:15:"ReflectionClass":0:{}';
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $phar = new Phar($fname);
    $phar->setDefaultStub('my/custom/thingy.php');
    $s = "1234567890a";
    $special_chars_str = <<<EOD
    Example of heredoc string contains
    $#%^*&*_("_")!#@@!$#$^^&*(special)
    chars.
    EOD;
    extract($GLOBALS, EXTR_REFS);
    $before = memory_get_usage();
    $result = get_declared_classes();
    $originalEnvelopeData = "any string with \x1a is cut at this point.";
    $tmpFileOut2 = tempnam(sys_get_temp_dir(), 'test');
    $envelopeData = file_get_contents($tmpFileOut2);
    var_dump(strlen($originalEnvelopeData), strlen($envelopeData), filesize($tmpFileOut2));
    $plain = "The quick brown fox jumps over the lazy dog.";
    $compressed = (string) bzcompress($plain);
    $compressed = substr($compressed, 0, strlen($compressed) - 20);
    $compressed[strlen($compressed)-2] = 'X';
    $r = new ReflectionClass('Test2');
    $m = $r->getStaticProperties();
    $m['data2'] = 200;
    $bert = "file://" . __DIR__ . "/bug41033.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_NS_SSL_SERVER, array($cpca)));
    $a = new PDO("sqlite::memory:");
    $rez = $a->query ("SELECT * FROM test_35336")->fetchAll(PDO::FETCH_CLASS, 'EEE');
    $a = new A;
    var_dump(intlcal_is_weekend(1));
    $index_array = array (1, 2, 3);
    while (true) {
        break;  // avoid infinite loop
        $loop_counter = 1;
        $loop_counter++;
    }
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
    $cert = "file://" . __DIR__ . "/cert.crt";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SMIME_ENCRYPT, array($cpca), $utfl));
    $fp = fopen (__FILE__, "r");
    $log_file = tempnam(sys_get_temp_dir(), 'php-curl-CURLOPT_WRITEFUNCTION-trampoline');
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'file://' . $log_file);
    $a = array(1,2,3);
    $s1 = "some string";
    $c = $a + $s1;
    $reflector = new ReflectionClass(C::class);
    $obj = new C();
    $reflector->resetAsLazyGhost($obj, function ($obj) use ($reflector) {
        try {
            $reflector->resetAsLazyGhost($obj, function () { });
        } catch (Error $e) {
            printf("%s: %s\n", $e::class, $e->getMessage());
        }
        try {
            $reflector->resetAsLazyProxy($obj, function () { });
        } catch (Error $e) {
            printf("%s: %s\n", $e::class, $e->getMessage());
        }
    
    });
    $reqOfBig = 'select * from t';
    $array = new ArrayObject();
    var_dump($array->offsetExists('nokey'));
    $various_arrays = array (
      array(5 => 55,  66, 22, 33, 11),
      array ("a" => "orange",  "banana", "c" => "apple"),
      array(1, 2, 3, 4, 5, 6),
      array("first", 5 => "second", "third"),
      array(1, 1, 8 => 1,  4 => 1, 19, 3 => 13),
      array('bar' => 'baz', "foo" => 1),
      array('a'=>1,'b'=>array('e'=>2,'f'=>3),'c'=>array('g'=>4),'d'=>5),
    );
    foreach ($various_arrays as $array) {
      echo "\n-- Iteration $count --\n";
    
      echo "- With default sort_flag -\n";
      $temp_array = $array;
      var_dump(asort($temp_array) );
      var_dump($temp_array);
    
      echo "- Sort_flag = SORT_REGULAR -\n";
      $temp_array = $array;
      var_dump(asort($temp_array, SORT_REGULAR) );
      var_dump($temp_array);
      $count++;
    }
    $temp_array = $array;
    define('OBJECT_COUNT', 10000);
    main::$dataAccessor = new dataAccessor;
    $r = new ResourceBundle( 'en_US', BUNDLE );
    $r2 = $r['testarray'];
    printf( "testarray: %s\n", $r2[2] );
    $r = new ReflectionClass('Test2');
    $m = $r->getStaticProperties();
    $a = new A();
    $a->gen();
    $lazy = true;
    $mem = $lazy ? 0 : 1;
    $mem0 = $mem;
    var_dump(soundex("Hilbert")     == soundex("Heilbronn"));
    $obj = new Test;
    var_dump(@$obj->dynamic++);
    $reflector = new ReflectionClass(C::class);
    mail("some.address.it.wont.ever.reach@lookup.and.try.to.find.this.host.name","subject","a", "");
    $foo = new Foo();
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
    http_server_kill($pid);
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug54028_2" . DIRECTORY_SEPARATOR;
    $s = new SplObjectStorage();
    $s->attach($s);
    $sql = "SELECT 11111 as `1`, 22222 as `2`";
    $link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
    $res = $link->query($sql);
    $row = $res->fetch_array();
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
    var_dump($data);
    $deflator = deflate_init(ZLIB_ENCODING_RAW);
    $bytes = str_repeat("*", 65536);
    $output = deflate_add(
            $deflator,
            $bytes,
            ZLIB_SYNC_FLUSH
        );
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
    mysqli_free_result($res);
    $dom = Dom\XMLDocument::createFromString(<<<XML
    <root>
        <test1 xml:id="x"/>
        <test2 xml:id="x"/>
    </root>
    XML);
    $dom->getElementById('x')->removeAttribute('xml:id');
    $header = <<<HEADER
    extern int *(*bug79177_cb)(void);
    void bug79177(void);
    HEADER;
    $ffi = FFI::cdef($header);
    $ffi->bug79177();
    $dt = new DateTime('first day of January 2011');
    var_dump($dt);
    while (true) {
        break;  // avoid infinite loop
        $reader = new XMLReader();
        $attr = $reader->moveToNextAttribute();
    }
    if (true) {
        $dom = Dom\HTMLDocument::createEmpty();
        $container = $dom->appendChild(createElement($dom, "container"));
        $container->appendChild(createElementNS($dom, "urn:foo", "htML", "5"));
        $zip = new ZipArchive();
        $msgfmt = new MessageFormatter('en_US', '{0,number,integer}');
        $outfile = tempnam(sys_get_temp_dir(), "ssl");
        $inner = 'r:2;';
        test("http://t[est@::1]");
    }
    $test = function (#[SensitiveParameter] $sensitive)
    {
        debug_print_backtrace();
        var_dump(debug_backtrace());
        var_dump((new Exception)->getTrace());
    };
    $test('sensitive');
}
function f_2() {
    return $a;
}
function f_3() {
    return "Class A object";
}
function f_4() {
    $meta_res = $stmt->result_metadata();
    $field = $meta_res->fetch_field();
    printf("Orgtable     : %s\n", $field->orgtable);
    $client = new SoapClient(__DIR__ . '/bug49278.wsdl', array('location' => "http://".PHP_CLI_SERVER_ADDRESS, 'trace' => 1));
    var_dump($client->__getLastResponse());
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
    $conn = odbc_connect($dsn, $user, $pass);
    $res = odbc_exec($conn, "SELECT * FROM bug80147");
    odbc_fetch_row($res);
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
    mysqli_close($link);
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
    $reqOfBig = 'select * from t';
    $attrs = [ PDO::ATTR_PREFETCH => 0 ];
    $stmt = $pdo->prepare($reqOfBig, $attrs);
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
    $tester->close();
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $phar = new Phar($fname);
    var_dump(strlen($phar->getStub()));
}
function f_5() {
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
    var_dump(A::$x);
    $zip = new ZipArchive();
    $zip->extractTo(__DIR__);
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
    $reflector = new ReflectionClass(C::class);
    $obj = new C();
    $reflector->resetAsLazyGhost($obj, function ($obj) use ($reflector) {
        try {
            $reflector->resetAsLazyGhost($obj, function () { });
        } catch (Error $e) {
            printf("%s: %s\n", $e::class, $e->getMessage());
        }
        try {
            $reflector->resetAsLazyProxy($obj, function () { });
        } catch (Error $e) {
            printf("%s: %s\n", $e::class, $e->getMessage());
        }
    
    });
    $a = new Test();
    var_dump($a->value);
    var_dump(strncasecmp("test ", "E", 10));
    $a = array(1,2,3);
    $originalEnvelopeData = "any string with \x1a is cut at this point.";
    $tmpFileOut2 = tempnam(sys_get_temp_dir(), 'test');
    $envelopeData = file_get_contents($tmpFileOut2);
    var_dump($originalEnvelopeData === $envelopeData);
    $msgfmt = new MessageFormatter('en_US', '{0,number,integer}');
    $msgfmt->parse('abc');
    $im = imagecreate(800, 800);
    imageline($im, 550, 750,  50, 250, IMG_COLOR_STYLED);
    $arrays = array (
    /*1*/  array(1, 2), // array with default keys and numeric values
           array(1.1, 2.2), // array with default keys & float values
           array( array(2), array(1)), // sub arrays
           array(false,true), // array with default keys and boolean values
           array(), // empty array
           array(NULL), // array with NULL
           array("a","aaaa","b","bbbb","c","ccccc"),
    
           // associative arrays
    /*8*/  array(1 => "one", 2 => "two", 3 => "three"),  // explicit numeric keys, string values
           array("one" => 1, "two" => 2, "three" => 3 ),  // string keys & numeric values
           array( 1 => 10, 2 => 20, 4 => 40, 3 => 30),  // explicit numeric keys and numeric values
           array( "one" => "ten", "two" => "twenty", "three" => "thirty"),  // string key/value
           array("one" => 1, 2 => "two", 4 => "four"),  //mixed
    
           // associative array, containing null/empty/boolean values as key/value
    /*13*/ array(NULL => "NULL", null => "null", "NULL" => NULL, "null" => null),
           array(true => "true", false => "false", "false" => false, "true" => true),
           array("" => "emptyd", '' => 'emptys', "emptyd" => "", 'emptys' => ''),
           array(1 => '', 2 => "", 3 => NULL, 4 => null, 5 => false, 6 => true),
           array('' => 1, "" => 2, NULL => 3, null => 4, false => 5, true => 6),
    
           // array with repetitive keys
    /*18*/ array("One" => 1, "two" => 2, "One" => 10, "two" => 20, "three" => 3)
    );
    foreach($arrays as $array) {
      echo "-- Iteration $iterator --\n";
      // with default argument
      echo "- with default argument -\n";
      var_dump( array_reverse($array) );
      // with all possible arguments
      echo "- with \$preserve keys = true -\n";
      var_dump( array_reverse($array, true) );
      echo "- with \$preserve_keys = false -\n";
      var_dump( array_reverse($array, false) );
      $iterator++;
    }
    var_dump( array_reverse($array, false) );
    $conn = odbc_connect($dsn, $user, $pass);
    $res = odbc_exec($conn, "SELECT * FROM bug80147");
    odbc_binmode($res, ODBC_BINMODE_RETURN);
    var_dump(error_reporting());
    $db = createDB();
    $db->exec('CREATE TABLE test_80908 (`id` BIGINT(20) UNSIGNED AUTO_INCREMENT, `name` VARCHAR(5), PRIMARY KEY (`id`)) ENGINE = InnoDB AUTO_INCREMENT=10376293541461622799');
    $conn = pg_connect($conn_str);
    $table='test_68638';
    $rs = pg_query($conn, "SELECT * FROM $table");
    var_dump(range('z', 'a', 100));
    $timestamp = "2005-11-08T11:22:07+03:00";
    $host = "localhost\0.example.com";
    var_dump(gethostbyname($host));
    $counter = 1;
    var_dump(class_exists("TestClass", true));
}
pcntl_sigwaitinfo($a,$a);
$priorityQueue = new SplPriorityQueue();
var_dump($priorityQueue->getExtractFlags());
printf("printf test 22:%016x\n", 170);
