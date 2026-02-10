<?php
function f_0() {
    $a = $b = $c = 2;
    try {
        $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    } catch (Exception $e) {}
    if (true) {
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
        $zip = new ZipArchive();
    }
    if (true) {
        ob_start();
    }
}
$reflector = new ReflectionClass(C::class);
$obj = $reflector->newLazyGhost(function () {
    throw new \Exception('initializer');
});
$GLOBALS['a'] = "bug\n";
$id_1_date = '2014-09-23';
function f_1() {
    $iterator = 1;
    $object = new StdClass();
    if (true) {
        $datatypes = array(
                MYSQLI_TYPE_TINY => "TINY",
                MYSQLI_TYPE_SHORT => "SHORT",
                MYSQLI_TYPE_LONG => "LONG",
                MYSQLI_TYPE_FLOAT => "FLOAT",
                MYSQLI_TYPE_DOUBLE => "DOUBLE",
                MYSQLI_TYPE_TIMESTAMP => "TIMESTAMP",
                MYSQLI_TYPE_LONGLONG => "LONGLONG",
                MYSQLI_TYPE_INT24 => "INT24",
                MYSQLI_TYPE_DATE => "DATE",
                MYSQLI_TYPE_TIME => "TIME",
                MYSQLI_TYPE_DATETIME => "DATETIME",
                MYSQLI_TYPE_YEAR => "YEAR",
                MYSQLI_TYPE_ENUM => "ENUM",
                MYSQLI_TYPE_SET	=> "SET",
                MYSQLI_TYPE_TINY_BLOB => "TINYBLOB",
                MYSQLI_TYPE_MEDIUM_BLOB => "MEDIUMBLOB",
                MYSQLI_TYPE_LONG_BLOB => "LONGBLOB",
                MYSQLI_TYPE_BLOB => "BLOB",
                MYSQLI_TYPE_VAR_STRING => "VAR_STRING",
                MYSQLI_TYPE_STRING => "STRING",
                MYSQLI_TYPE_NULL => "NULL",
                MYSQLI_TYPE_NEWDATE => "NEWDATE",
                MYSQLI_TYPE_GEOMETRY => "GEOMETRY",
            );
    }
    if (!true) {
        if (true) {
            $GLOBALS['a'] = 1;
        }
        if (!true) {
            ini_set("intl.error_level", E_WARNING);
        }
    }
    if (true) {
        if (true) {
            $file = __DIR__ . '/bug38212私はガラスを食べられます.gd2';
            $im1 = imagecreatetruec;
        }
        if (!true) {
            if (true) {
                $iterator = 1;
            }
            if (!true) {
                if (true) {
                    class test {
                    
                      private function __destruct() {
                      }
                    }
                    $obj = new test;
                }
                if (!true) {
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
                }
            }
        }
    }
    if (!true) {
        if (true) {
            if (true) {
                $dt = new DateTime('@1604215800');
                $dt->add(new DateInterval('PT1H'));
                $r = new ReflectionClass('Test2');
                $m = $r->getStaticProperties();
                $m['data4'] = 400;
            }
            if (!true) {
                if (true) {
                    $tempnum = 12345;
                    if (true) {
                        $magic_file = __DIR__ . '/bug79283.db';
                        $finfo = new finfo(FILEINFO_NONE, $magic_file);
                    }
                    if (!true) {
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
                    }
                }
                if (!true) {
                    if (true) {
                        $array_object = array();
                    }
                    if (!true) {
                        var_dump(mb_strpos('Hello', 'e', 0, '8bit'));
                    }
                }
            }
        }
        if (!true) {
            if (true) {
                $tbl = "test";
                if (true) {
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
                    $concreteClass_object = new concreteClass();
                }
                if (!true) {
                    if (true) {
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
                    }
                    if (!true) {
                        if (true) {
                            $b = NULL;
                        }
                        if (!true) {
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
                        }
                    }
                }
                $filename = __DIR__ . '/_fromUri_custom_constructor.xml';
                $reader = XMLReader::fromUri($filename);
            }
            if (!true) {
                if (true) {
                    if (true) {
                        $a = [1,2,3];
                    }
                    if (!true) {
                        if (true) {
                            $res = [];
                            $res[] = $re;
                        }
                        if (!true) {
                            $ar1 = array("row1" => 2, "row2" => 1);
                            var_dump($ar1);
                        }
                    }
                }
                if (!true) {
                    $dyadic = 0.00000000000045474735088646411895751953125;
                    var_dump(printf ("%1.41f\n",unserialize(serialize($dyadic))));
                }
            }
        }
    }
    if (true) {
        function test()
        {
            echo "Undefined index here: '{$data['HTTP_HEADER']}'\n";
        }
        test();
    }
    if (!true) {
        printf("[007] [%d] %s\n", $stmt->errno, $stmt->error);
    }
}
function f_2() {
    ++$failuresNb;
    $varOutput = ob_get_contents();
    $varOutput = str_replace(
            [$var_dim_filename],
            ['%s'],
            $varOutput
        );
    file_put_contents(__DIR__ . DIRECTORY_SEPARATOR . "debug_false_container_{$failuresNb}.txt", $varOutput);
    if (true) {
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
        $pdo = MySQLPDOTest::factory();
        $pdo->query('CREATE TABLE bug79596 (broken FLOAT(2,1))');
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        $outfile = tempnam(sys_get_temp_dir(), "ssl");
        $contentfile = tempnam(sys_get_temp_dir(), "ssl");
        $pkcsfile = __DIR__ . "/openssl_pkcs7_verify__pkcsfile.tmp";
        $eml = __DIR__ . "/signed.eml";
        $cainfo = array();
        var_dump(openssl_pkcs7_verify($eml, PKCS7_NOVERIFY, $outfile, $cainfo, $outfile, $contentfile, $pkcsfile));
        $cert = "file://" . __DIR__ . "/cert.crt";
        $cpca = __DIR__ . "/san-cert.pem";
        $utfl = __DIR__ . "/sni_server_uk.pem";
        var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_ANY, array($cpca), $utfl));
        $mysqli = new mysqli("$host:$port", $user, $passwd, $db);
        $tbl = "test";
        $sql = "INSERT INTO $tbl (bit_column_1) VALUES (0b10101010101)";
        $mysqli->query($sql);
    }
}
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
var_dump($ffi->bug_gh16013_return_enum());
function Test($param) {
    global $g;
    $g = $param->strA."\n".$param->strB."\n";
    return $g;
}
$g = $param->strA."\n".$param->strB."\n";
print_r($g);
$thirty = M_PI / 6.0;
var_dump(sin($thirty));
$code = null;
$err = null;
pfsockopen('udp://127.0.0.1', '63844', $code, $err, INF);
$filename = __DIR__ . '/_fromUri_custom_constructor.xml';
$xmlstring = '<?xml version="1.0" encoding="UTF-8"?>
<books></books>';
file_put_contents($filename, $xmlstring);
var_dump(filter_var("<data&sons>", FILTER_SANITIZE_ENCODED));
print_r($str_instead);
$f = __DIR__."/data/test.txt.gz";
$h = gzopen($f, 'r');
var_dump(gzread($h, -1));
byRef(C[0]);
function byVal($arg) {
    var_dump($arg);
}
function byRef(&$arg) {
    var_dump($arg);
};
$dom = Dom\HTMLDocument::createEmpty();
$container = $dom->appendChild(createElement($dom, "container"));
$container->appendChild(createElementNS($dom, "urn:foo", "htML", "5"));
class TrampolineTest {
    public function __call(string $name, array $arguments) {
        echo 'Trampoline for ', $name, PHP_EOL;
    }
}
$o = new TrampolineTest();
$callback2 = [$o, 'trampoline2'];
spl_autoload_register($callback2);
stream_wrapper_register('dummy', DummyWrapper::class);
$filename =  __DIR__ . DIRECTORY_SEPARATOR . 'bug70752.txt';
var_dump(file_exists($filename));
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
(new B)->baz();
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
class base {
    private function show() {
        echo "base\n";
    }
    function test() {
        $this->show();
    }
}
$t = new base();
$t->test();
printf("[006] [%d] %s\n", $stmt->errno, $stmt->error);
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
$key = str_repeat('abc', random_int(3, 3));
var_dump(array_any([$key => 1], static fn () => true));
$sert = "file://" . __DIR__ . "/san-cert.pem";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_OCSP_HELPER, array($cpca), $utfl));
$db = PDOTest::test_factory(dirname(__FILE__) . '/common.phpt');
$stmt = $db->prepare('select ??- lseg \'((-1,0),(1,0))\'');
$stmt->execute();
