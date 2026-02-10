<?php
class Foo {
    public $bar = [] {
        &get {
            echo __METHOD__ . "\n";
            return $this->bar;
        }
    }
}
$foo = new Foo;
$date = (new ReflectionClass(DateTime::class))->newInstanceWithoutConstructor();
$db = getDbConnection();
function gen() {
    yield 0;
    yield from gen();
}
function bar($gen) {
    yield from $gen;
}
$gen = gen();
$a = bar($gen);
function f_0() {
    var_dump( range(7.0, 1.0, 6.5) );
}
for ($i_1 = 0; $i_1 < 10; $i_1++) {
     ($dirs as $d) {
       
    dirs as $d) {
    ;
    $dom = new DOMDocument();
    try {
        $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
        $stmt = $pdo->prepare("select :1 n union all select :1 + 1 union all select :1 + 2 union all select :1 + 3");
        $stmt->execute([ 0 ]);
    } catch (Exception $e) {}
    if (true) {
        $magic_file = __DIR__ . '/bug79283.db';
        $finfo = new finfo(FILEINFO_NONE, $magic_file);
        $dom = Dom\HTMLDocument::createEmpty();
        $container = $dom->appendChild(createElement($dom, "container"));
        $container->appendChild(createElementNS($dom, "urn:a", "foo:HTML", "7"));
    }
    $file_handle = fopen(__FILE__, "r");
    fclose( $file_handle );
    $reflector = new ReflectionClass(C::class);
    for ($i = 0; $i < 2; $i++) {
        $obj = $reflector->newLazyGhost(function ($obj) use ($i) {
            if ($i === 1) {
                throw new \Exception();
            }
        });
        $obj->c = 1;
    }
    $obj = $reflector->newLazyGhost(function ($obj) use ($i) {
            if ($i === 1) {
                throw new \Exception();
            }
        });
    $obj->c = 1;
    try {
        var_dump("hello");
    } catch (Exception $e) {}
    if (true) {
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
        $bug_gh16013_callback_struct->return_int16 = function($val) use($ffi) {
            $cdata = $ffi->new('int16_t');
            $cdata->cdata = $val;
            return $cdata;
        };
        range(0, pow(2.0, 100000000));
    }
    ini_set("intl.error_level", E_WARNING);
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
    try {
        $db = MySQLPDOTest::factory();
        $db->exec("CREATE TABLE test_pecl_bug_5200 (bar INT NOT NULL, phase enum('please_select', 'I', 'II', 'IIa', 'IIb', 'III', 'IV'))");
    } catch (Exception $e) {}
    if (true) {
        $ret = $y;
        $server = new soapserver(null,array('uri'=>"http://testuri.org"));
        $server->addfunction("test");
    }
    var_dump(strncasecmp("test ", "E", 0));
    $r = new ReflectionClass('Test2');
    $m = $r->getStaticProperties();
    $m['data3'] = 300;
    try {
        $dt = new DateTime('@1604215800');
        $dt->setTimezone(new DateTimeZone('America/Boise'));
    } catch (Exception $e) {}
    if (true) {
        $g = 'hi';
        $sh = new SessionHandler;
        $sh->read("");
    }
    function createDB(): PDO {
        $db = MySQLPDOTest::factory();
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        return $db;
    }
    $db = createDB();
    $db->exec('CREATE TABLE test_80908 (`id` BIGINT(20) UNSIGNED AUTO_INCREMENT, `name` VARCHAR(5), PRIMARY KEY (`id`)) ENGINE = InnoDB AUTO_INCREMENT=10376293541461622799');
}
for ($i_2 = 0; $i_2 < 10; $i_2++) {
    $i = 1;
    $x = 2;
    var_dump($i=$x);
    class A
    {
        public string $prop;
    }
    $a = new A();
    try {
        $log_file = tempnam(sys_get_temp_dir(), 'php-curl-CURLOPT_WRITEFUNCTION-trampoline');
        $fp = fopen($log_file, 'w+');
        fwrite($fp, "test");
    } catch (Exception $e) {}
    if (true) {
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
        $bug_gh16013_callback_struct->return_uint8 = function($val) use($ffi) {
            $cdata = $ffi->new('uint8_t');
            $cdata->cdata = $val;
            return $cdata;
        };
        ini_set("soap.wsdl_cache_enabled",0);
    }
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
    $reqOf3 = 'select 79 n union all select 80 union all select 81';
    function display($res)
    {
    	echo implode("\n", array_map(fn($row) => implode("\t", $row), $res))."\n";
    }
    $stmt1 = $pdo->query($reqOf3);
    display([ $stmt1->fetch() ]);
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
    $reqOfBig = 'select * from t';
    $attrs = [ PDO::ATTR_PREFETCH => 0 ];
    $stmt = $pdo->prepare($reqOfBig, $attrs);
    try {
        var_dump(json_decode('[]', false, 0x100000000));
    } catch (Exception $e) {}
    if (true) {
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
        $flags[8192] = 'ON_UPDATE_NOW';
        $filename =  __DIR__ . DIRECTORY_SEPARATOR . 'bug70752.txt';
        var_dump(file_exists($filename));
    }
    var_dump(error_reporting());
    $db = PDOTest::factory();
    $res = $db->query("SELECT a FROM test36428");
    try {
        undefined_function();
    } catch (Exception $e) {}
    if (true) {
        $this->b = 2;
        $sert = "file://" . __DIR__ . "/san-cert.pem";
        $cpca = __DIR__ . "/san-cert.pem";
        var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_ANY, array($cpca)));
    }
    class testObject extends ArrayObject {
        protected $test;
    
        public function getTest() {
            return $this->test;
        }
    
        public function setTest($test) {
            $this->test = $test;
        }
    }
    $obj = new testObject();
    $obj->setTest('test');
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
    class MethodCallbackByReference {
        public function bar(&$a, &$b, $c) {
            Legacy::bar($a, $b, $c);
        }
        public function callback(&$a, &$b, $c) {
            $b = 1;
        }
    }
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
    $foo = new Mock_MethodCallbackByReference_7b180d26();
    $InvMocker = new PHPUnit_Framework_MockObject_InvocationMocker();
    $foo->inv_mocker = $InvMocker;
    try {
        printf("printf test 23:%016X\n", 170);
    } catch (Exception $e) {}
    if (true) {
        $w = new Phar(__DIR__ . "/bug69279.phar.zip");
        $w["bug69279.txt"] = "Sample content.";
        var_dump(strncmp("test ", "e", 10));
    }
    $input = fopen(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370.tar', 'r');
    $output = fopen(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370_003' . DIRECTORY_SEPARATOR . 'testfile', 'w');
    var_dump(stream_copy_to_stream($input, $output, 10240, 0x200));
}
$filename = "bug51997.bz2";
$bz = bzopen($filename, "r");
for ($i_3 = 0; $i_3 < 10; $i_3++) {
    for ($i_4 = 0; $i_4 < 10; $i_4++) {
        $anon = new class {
            public int $field;
            function __construct() {
                $this->field = 2;
            }
        };
        $anon->field = 123;
        try {
            ob_start();
        } catch (Exception $e) {}
        if (true) {
            $found = true;
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
        }
        set_exception_handler(function (\Throwable $exception) {
            echo 'Caught: ' . $exception->getMessage() . "\n";
            throw new \Exception('exception handler');
        });
        $bar = new DateTime();
        $args = [1, &$bar];
        try {
            function test(string $input) {
                var_dump(filter_var($input, FILTER_VALIDATE_URL));
            }
            test("http://test@[2001:db8:3333:4444:5555:6666:1.2.3.4]");
        } catch (Exception $e) {}
        if (true) {
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
            $array_test = array("a", "b", "d", 7, "u" => "U", -4, "-.008" => "neg.008");
            var_dump( end($array_test) );
        }
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
        var_dump( gmdate($value) );
    }
}
for ($i_5 = 0; $i_5 < 10; $i_5++) {
    for ($i_6 = 0; $i_6 < 10; $i_6++) {
        $fp = fopen(__DIR__."/test2.csv", "r");
        try {
            $ch = curl_init("https://localhost/username");
            curl_setopt($ch, CURLOPT_USERNAME, null);
        } catch (Exception $e) {}
        if (true) {
            $attrs = [];
            $oIntlDateFormatter = new IntlDateFormatter("en_GB");
            $offset3 = PHP_INT_MAX * 16;
            $oIntlDateFormatter->parseToCalendar('America/Los_Angeles', $offset3);
        }
        $im = imagecreatetruecolor(1, 1);
        imagescale($im, 1, 1, -10);
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
        try {
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
        } catch (Exception $e) {}
        if (true) {
            $a = "lest";
            $oIntlDateFormatter = new IntlDateFormatter("en_GB");
            $offset3 = "offset";
            $oIntlDateFormatter->parseToCalendar('America/Los_Angeles', $offset3);
        }
        $db = getDbConnection();
        $sql = '
            SET NOCOUNT ON
            SELECT 0 AS [result]
        ';
        $stmt = $db->query($sql);
        $stmt->closeCursor();
    }
}
for ($i_7 = 0; $i_7 < 10; $i_7++) {
    for ($i_8 = 0; $i_8 < 10; $i_8++) {
        $mixedEndiannessFile = dirname(__FILE__).'/P1000506.JPG';
        try {
            function test(string $input) {
                var_dump(filter_var($input, FILTER_VALIDATE_URL));
            }
            test("http://te[st@2001:db8:3333:4444:5555:6666:1.2.3.4]");
        } catch (Exception $e) {}
        if (true) {
            $conn = odbc_connect($dsn, $user, $pass);
            $res = odbc_exec($conn, 'SELECT * FROM bug68087 ORDER BY ID ASC');
            $varchar_col = odbc_result($res, "VARCHAR_COL");
            class A {
                public $a;
            }
            $a = new A();
            $b = new A();
            $prop = new ReflectionProperty($b, 'dyn');
            var_dump($prop->getRawValue($a));
        }
        $test_array = array(1, array(1 => "one", "two" => 2, "" => "f") );
        var_dump( end($test_array[1]) );
        #[AllowDynamicProperties]
        class C {
            public $a = 1;
        }
        $c = new C();
        $c->dyn = 1;
        try {
            var_dump ( rtrim("rtrim testABCXYZ", "A..Z") );
        } catch (Exception $e) {}
        if (true) {
            $i = 0;
            var_dump(class_exists("TestClass", true));
        }
        $db = MySQLPDOTest::factory();
        var_dump($db->query('SELECT * FROM test_33689'));
    }
}
for ($i_9 = 0; $i_9 < 10; $i_9++) {
    for ($i_10 = 0; $i_10 < 10; $i_10++) {
        $infile = __DIR__.'/bug34704私はガラスを食べられます.jpg';
        var_dump(exif_read_data;
        try {
            $db = MySQLPDOTest::factory();
            $db->exec('CREATE TABLE test_33689 (bar INT NOT NULL)');
        } catch (Exception $e) {}
        if (true) {
            $fiber = new Fiber(function (): void {
                $self = Fiber::getCurrent();
                $self->resume();
            });
            $document = new \DOMDocument();
            var_dump($document->saveHTML());
        }
        $values = ini_get_all();
        foreach ($values as $name => $dsn)
                if ('pdo.dsn.mysql' == $name) {
                    printf("pdo.dsn.mysql=%s\n", $dsn);
                    $found = true;
                    break;
                }
        printf("pdo.dsn.mysql=%s\n", $dsn);
        $cert = "file://" . __DIR__ . "/cert.crt";
        try {
            $str = "repeater id='loopt' dataSrc=subject columns=2";
            preg_match_all("/(['\"])(.*)(?<!\\\\)\\1/sU", $str, $str_instead);
        } catch (Exception $e) {}
        if (true) {
            function foo(int $x) {
                $a[0] = $x;
                $a[1] = 5;
                echo $a[1];
                $a->foo = 5;
                echo $a[1];
            }
            $a[0] = $x;
            session_start();
        }
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
        $compressed = file_get_contents(__DIR__ . "/75776.$ext");
        var_dump($function($compressed));
    }
}
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt', Pdo::class, true);
var_dump($pdo->query('SELECT 1;')->fetchAll());
ob_clean();
