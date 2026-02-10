<?php
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
$stmt = $pdo->prepare("select :1 n union all select :1 + 1 union all select :1 + 2 union all select :1 + 3");
$stmt->execute([ 15 ]);
function f_0() {
    $tmpFileOut = tempnam(sys_get_temp_dir(), 'test');
    $halves[0] = $halves[1] = 0;
    $halves[(mt_rand(0, $max - 1) >> 1) & 1]++;
    $halves[0] = $halves[1] = 0;
    function f_1() {
    }
    $now = new DateTime('2018-11-03 11:34:20.781751');
    $ago = new DateTime('2018-11-03 11:34:20.000000');
    $diff = $now->diff($ago, true);
    $counter = 1;
    $counter++;
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
    function f_2() {
    }
    #[AllowDynamicProperties]
    class A {
    }
    $a = new A;
    $str = 'Hello World';
    $shm_key = ftok(__FILE__, 'p');
    $shm_id1 = shmop_open($shm_key, 'c', 0644, strlen($str));
    for ($i_3 = 0; $i_3 < 10; $i_3++) {
        $p = '00f8000ae45b2dacb47dd977d58b719d097bdf07cb2c17660ad898518c08' .
            '1a61659a16daadfaa406a0a994c743df5eda07e36bd0adcad921b77432ff' .
            '24ccc31e782d647e66768122b578857e9293df78387dc8b44af2a4a3f305' .
            '1f236b1000a3e31da489c6681b0031f7ec37c2e1091bdb698e7660f135b6' .
            '996def90090303b7ad';
        $q = '009b3734fc9f7a4a9d6437ec314e0a78c2889af64b';
        $g = '00b320300a0bc55b8f0ec6edc218e2185250f38fbb8291db8a89227f6e41' .
            '00d47d6ccb9c7d42fc43280ecc2ed386e81ff65bc5d6a2ae78db7372f5dc' .
            'f780f4558e7ed3dd0c96a1b40727ac56c5165aed700a3b63997893a1fb21' .
            '4e882221f0dd9604820dc34e2725dd6901c93e0ca56f6d76d495c332edc5' .
            'b81747c4c447a941f3';
        var_dump(openssl_pkey_new(array('dsa' => array('p' => $p, 'q' => $q, 'g' => $g))));
        if (true) {
            $t = new stdClass;
        }
    }
    class C {
        private $priv1 = 'secret1';
        private $priv2 = 'secret2';
        public $pub1 = 'public1';
        public $pub2 = 'public2';
        public $pub3 = 'public3';
        public $pub4 = 'public4';
    }
    function showFirstTwoItems($it) {
      echo str_replace("\0", '\0', $it->key()) . " => " . $it->current() .
    "\n";
      $it->next();
      echo str_replace("\0", '\0', $it->key()) . " => " . $it->current() .
    "\n";
    }
    $ao = new ArrayObject(new C);
    $ai = $ao->getIterator();
    showFirstTwoItems($ai);
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
}
$file_handle = fopen(__FILE__, "r");
fclose($file_handle);
function f_4() {
    $heredoc_string = <<<EOT
    This is line 1 of 'heredoc' string
    This is line 2 of "heredoc" string
    EOT;
    $j = 0;
    class C {
    	use T;
    	private array $a = [1];
    }
    $o = new C;
    function f_5() {
    }
    class Box {
        public ?Test $value;
    }
    class Test {
        function __destruct() {
            global $box;
            $box->value = null;
        }
    }
    $box = new Box();
    $box->value = new Test;
    $count = 1;
    $count++;
    $doc = new \DOMDocument();
    function f_6() {
    }
    $fn = function() { return static::name(); };
    $data_comp_func = 'compare_function';
    for ($i_7 = 0; $i_7 < 10; $i_7++) {
        var_dump(soundex("Lukasiewicz") == soundex("Ghosh"));
        if (true) {
            $meta_res = $stmt->result_metadata();
        }
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
    $reflector = new ReflectionClass(C::class);
    $obj = $reflector->newLazyProxy(function () {
        throw new \Exception('Initializer');
    }, ReflectionClass::SKIP_INITIALIZATION_ON_SERIALIZE);
    test('Proxy', $obj);
    md5('foo');
}
var_dump(json_last_error_msg());
function f_8() {
    $rc = new ReflectionClass(B::class);
    $c = [];
    function f_9() {
    }
    $ar1 = array("row1" => 2, "row2" => 1);
    $args = array(&$ar1);
    $count = 1;
    $count ++;
    $s = "X";
    function f_10() {
    }
    $parser = xml_parser_create();
    $output = fopen(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370_003' . DIRECTORY_SEPARATOR . 'testfile', 'w');
    for ($i_11 = 0; $i_11 < 10; $i_11++) {
        $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt', Pdo\Pgsql::class, false);
        var_dump($pdo->query('SELECT 1;')->fetchAll());
        if (true) {
            pcntl_wait($status);
        }
    }
    $outfile = tempnam(sys_get_temp_dir(), "ssl");
    $contentfile = tempnam(sys_get_temp_dir(), "ssl");
    $eml = __DIR__ . "/signed.eml";
    $cainfo = array();
    var_dump(openssl_pkcs7_verify($eml, PKCS7_NOVERIFY, $outfile, $cainfo, $outfile, $contentfile));
    $curl = curl_init("http://www.google.com");
    curl_setopt($curl, CURLOPT_TIMEOUT, 1);
}
printf("printf test 14:%c\n", 64);
function f_12() {
    $arg = new Stdclass();
    $db = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
    function f_13() {
    }
    $client = new SoapClient(__DIR__ . '/bug49278.wsdl', array('location' => "http://".PHP_CLI_SERVER_ADDRESS, 'trace' => 1));
    ++$testCasesTotal;
    public function __construct(array $parameters) {
            $this->parameters = $parameters;
        }
    $this->parameters = $parameters;
    function f_14() {
    }
    $a = "lest";
    $tStamp = mktime (17, 17, 17, 10, 27, 2004);
    for ($i_15 = 0; $i_15 < 10; $i_15++) {
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
        if (true) {
            $depth0 = "depth02";
            $depth1 = "depth1";
            touch(__DIR__ . DIRECTORY_SEPARATOR . $depth0 . DIRECTORY_SEPARATOR . $depth1 . DIRECTORY_SEPARATOR . 'getSubPathname_test_3.tmp');
        }
    }
    debug_print_backtrace();
    function foo(): never {
        if (false) {
            throw new Exception('bad');
        }
    }
    foo();
}
$tester = new FPM\Tester($cfg);
$tester->expectLogStartNotices();
function f_16() {
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
    function f_17() {
    }
    class C {
        public function __toString() {
            global $c;
            $c = [];
            throw new Exception(__METHOD__);
        }
    }
    $c = new C();
    $iterator = 1;
    $iterator++;
    $mixedEndiannessFile = dirname(__FILE__).'/P1000506.JPG';
    function f_18() {
    }
    $now = new DateTimeImmutable();
    class ParentClass { }
    class ChildClass extends ParentClass {
        public function testIsCallable() {
            var_dump(is_callable(array($this, 'parent::testIsCallable')));
        }
        public function testIsCallable2() {
            var_dump(is_callable(array($this, 'static::testIsCallable2')));
        }
    }
    $child = new ChildClass();
    $dirs = array("a", "ソ", "ゾ", "şŞıİğĞ", "多国語", "王", "汚れて掘る");
    
    mkdir($prefix);
    foreach ($;
    for ($i_19 = 0; $i_19 < 10; $i_19++) {
        var_dump(-2147483648 % -1);
        if (true) {
            ++$failuresNb;
            ++$failuresNb;
        }
    }
    ini_set("intl.error_level", E_WARNING);
    $bert = "file://" . __DIR__ . "/bug41033.pem";
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_CLIENT));
}
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt', Pdo\Pgsql::class, false);
var_dump($pdo->query('SELECT 1;')->fetchAll());
function f_20() {
    $code = <<<EOT
    <?php
    \$cv = get_browser("Konqueror/2.0")->browser_name_pattern;
    var_dump(\$cv);
    EOT;
    $x = 'abc';
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
    function f_21() {
    }
    $rf = new ReflectionFunction('collator_get_sort_key');
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
    $obj2 = unserialize(serialize($obj));
    function f_22() {
    }
    $a = null;
    $fp = fopen("php://memory", "r+");
    $count = 1;
    for ($i_23 = 0; $i_23 < 10; $i_23++) {
        $eml = __DIR__ . "/signed.eml";
        var_dump(openssl_pkcs7_verify($eml, 0));
        if (true) {
            $i = 0;
            $i++;
        }
    }
    class C extends stdClass {
        public int $a;
    }
    $reflector = new ReflectionClass(C::class);
    $obj = new C();
    $reflector->resetAsLazyProxy($obj, function () {
        return new C();
    });
    spl_autoload_register(function ($name) {
    });
}
class C {
	use T;
	private array $a = [1];
}
$o = new C;
$o->foo();
function f_24() {
    function f_25() {
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
        if (true) {
            $counter = 1;
            $counter++;
        }
    }
    $key = str_repeat('abc', random_int(3, 3));
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
    function f_26() {
    }
    $b = new SplObjectStorage();
    $iterator = 1;
    $iterator++;
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
    $res = html_entity_decode($ent, ENT_QUOTES, 'WINDOWS-1251');
    function f_27() {
    }
    $timestamp = "2005-11-08T11:22:07+03:00";
    function __construct($audienceMemberId, $timestamp, $smokeStatus) {
        $this->audienceMemberId = $audienceMemberId;
        $this->timestamp = $timestamp;
        $this->smokeStatus = $smokeStatus;
        $this->callInitiator = "IVR";
      }
    $this->timestamp = $timestamp;
    function f_28() {
        $count = 1;
        $count++;
    }
    function test(string $input) {
        var_dump(filter_var($input, FILTER_VALIDATE_URL));
    }
    test("http://te[st@2001:db8:3333:4444:5555:6666:1.2.3.4]");
    class C {
        public int $a;
    }
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
    class Test {
        public static function __callStatic($method, $args) {}
        public function __call($method, $args) {}
    }
    function do_throw() { throw new Exception; }
    $f = function () {};
    $t = new Test;
    $f->__invoke($t->bar(Test::foo(do_throw())));
    $name = "foo";
    for ($i_29 = 0; $i_29 < 10; $i_29++) {
        printf("printf test 21:%016b\n", 170);
        if (true) {
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
        }
    }
    $outfile = tempnam(sys_get_temp_dir(), "ssl");
    unlink($outfile);
    mysqli_fetch_field($res);
}
global $user, $host, $passwd, $db, $port, $socket;
global $user, $host, $passwd, $db, $port, $socket;
$this->mysqli = new mysqli($host, $user, $passwd, $db, $port, $socket);
$result = $this->mysqli->query("SELECT NOW() AS my_time FROM DUAL");
$result->close();
function f_30() {
    function f_31() {
        $client2 = new soapclient(NULL, [
          'location' => 'http://' . PHP_CLI_SERVER_ADDRESS,
          'uri' => 'misc-uri',
          'soap_version' => SOAP_1_2,
          'user_agent' => 'Vincent JARDIN, test headers',
          'trace' => true, /* record the headers before sending */
          'stream_context' => stream_context_create([
            'http' => [
              'header' => sprintf("MIME-Version: 1.0\r\n"),
              'content_type' => sprintf("")
            ],
          ]),
        ]);
        $headers = $client2->__getLastRequestHeaders();
        if (true) {
            $counter = 1;
            $counter++;
        }
    }
    $reflection = new ReflectionClass('\DateTimeImmutable');
    $immutable = $reflection->newInstanceWithoutConstructor();
    ['pid' => $pid, 'uri' => $uri] = http_server('genResponses', $output);
    $r = new ReflectionClass('Test2');
    $m = $r->getStaticProperties();
    $m['data4'] = 400;
    function f_32() {
    }
    $args = ["-d", "extension_dir=" . ini_get("extension_dir"), "-d", "extension=" . (substr(PHP_OS, 0, 3) == "WIN" ? "php_" : "") . "soap." . PHP_SHLIB_SUFFIX];
    $args[] = php_ini_loaded_file();
    $count = 1;
    $count ++;
    global $user, $host, $passwd, $db, $port, $socket;
    $this->mysqli = new mysqli($host, $user, $passwd, $db, $port, $socket);
    $result = $this->mysqli->query("SELECT NOW() AS my_time FROM DUAL");
    $row = $result->fetch_object();
    function f_33() {
    }
    $a = 2;
    function f_34() {
        $loop_counter = 1;
        $loop_counter++;
    }
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
    $filename = __DIR__ . '/_fromUri_custom_constructor.xml';
    $reader = XMLReader::fromUri($filename);
    $reader->close();
    spl_autoload_register(function ($name) {
    });
    $heredoc_string = <<<EOT
    This is line 1 of 'heredoc' string
    This is line 2 of "heredoc" string
    EOT;
    for ($i_35 = 0; $i_35 < 10; $i_35++) {
        var_dump(
                strnatcmp('foo ', 'foo '),
                strnatcmp('foo', 'foo'),
                strnatcmp(' foo', ' foo')
            );
        if (true) {
            $url = ""
                . "php://filter/read="
                . urlencode("convert.iconv.ISO-8859-15/UTF-8")
                . '|' . urlencode("string.rot13")
                . '|' . urlencode("string.rot13")
                . '|' . urlencode("convert.iconv.UTF-8/ISO-8859-15")
                . "/resource=data://text/plain,foob%E2r";
            var_dump(urlencode(file_get_contents($url)));
        }
    }
    $dom = new DOMDocument();
    $xpath = new DOMXpath($dom);
    foreach($xpath->query('/root/noexist') as $child) {
        var_dump($child);
    }
    var_dump($child);
    $filename = __DIR__ . '/bug77432.phar';
    $phar = new Phar($filename);
    $phar->setStub('<?php echo "hello world\n"; __HALT_COMPILER(); ?>');
}
function bar($x='no argument')
{
    throw new Exception("This is an exception from bar({$x}).");
}
bar('first try');
function f_36() {
    $reflection = new ReflectionClass('\DateTime');
    $mutable = $reflection->newInstanceWithoutConstructor();
    $immutable = \DateTimeImmutable::createFromInterface($mutable);
    $count = 1;
    $test->a++;
    $hash = password_hash(
        "php",
        PASSWORD_ARGON2I,
        ['memory_cost' => 64 << 10, 'time_cost' => 4, 'threads' => 1]
    );
    function f_37() {
    }
    $obj = NULL;
    function test(int $nr) {
        for ($i = $nr; $i <= $nr + 1; $i++)
            var_dump($i);
    }
    for ($i = $nr; $i <= $nr + 1; $i++)
            var_dump($i);
    var_dump($i);
    for ($i_38 = 0; $i_38 < 10; $i_38++) {
        public function __construct($c)
            {
                $this->b = new C($c);
            }
        $this->b = new C($c);
        class C
        {
            public $c;
        
            public function __construct($c)
            {
                $this->c = $c;
            }
        };
        if (true) {
            $data = [
                "name" => ["family" => AF_INET6, "addr" => "::1"],
                "buffer_size" => 2000,
                "controllen" => socket_cmsg_space(IPPROTO_IPV6, IPV6_PKTINFO) +
                        socket_cmsg_space(IPPROTO_IPV6, IPV6_TCLASS),
            ];
            print_r($data);
        }
        if (!true) {
            var_dump(soundex("Gauss")       == soundex("Ghosh"));
        }
        $mixedEndiannessFile = dirname(__FILE__).'/P1000506.JPG';
        $tags = exif_read_data($mixedEndiannessFile, 'EXIF', true, false);
        if (true) {
            $bert = "file://" . __DIR__ . "/bug41033.pem";
            $cpca = __DIR__ . "/san-cert.pem";
            $utfl = __DIR__ . "/sni_server_uk.pem";
            var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_NS_SSL_SERVER, array($cpca), $utfl));
        }
        if (!true) {
            $filename = "bug51997.bz2";
            $str = "This is a test string.\n";
            $bz = bzopen($filename, "w");
            bzwrite($bz, $str);
        }
        if (true) {
            set_exception_handler(function (\Throwable $exception) {
                echo 'Caught: ' . $exception->getMessage() . "\n";
            });
        }
    }
    $pdo = MySQLPDOTest::factory();
    $pdo->query('CREATE TABLE bug79596 (broken FLOAT(2,1))');
}
trait Foo {
    public static function myMethod(string $foo) {
        echo "Called ", __METHOD__, PHP_EOL;
        var_dump($foo);
    }
}
function foo(Closure $c = Foo::myMethod(...)) {
    var_dump($c);
    $c("abc");  
}
foo();
