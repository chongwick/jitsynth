<?php
function f_0() {
    $dateperiod = (new ReflectionClass(DatePeriod::class))->newInstanceWithoutConstructor();
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
    $client = new TestSoapClient(__DIR__.'/bug38004.wsdl');
    $strA = 'test &amp; test';
    $strB = 'test & test';
    $res = $client->Test(array('strA'=>$strA, 'strB'=>$strB));
    $GLOBALS['a'] = "bug\n";
    #[\AllowDynamicProperties]
    class C {
        public $b;
        public function __construct() {
            $this->a = new Canary();
        }
    }
    $obj = new C();
    var_dump($obj);
    $db = PDOTest::factory();
    $fmt = new NumberFormatter('en_US', NumberFormatter::DECIMAL);
    $fmt2 = clone $fmt;
    grapheme_strpos(1,1,2147483648);
    var_dump(soundex("Lukasiewicz") == soundex("Lissajous"));
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $phar = new Phar($fname);
    $phar['a.php'] = '<php echo "this is a\n"; ?>';
    $dom = Dom\HTMLDocument::createEmpty();
    dumpNodeList($dom->getElementsByTagName("HTml"));
    $xml = '
    <data id="1">
        <key>value</key>
    </data>
    ';
    ini_set('mysqlnd.fetch_data_copy', false);
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $phar = new Phar($fname);
    $phar['a.php'] = '<php echo "this is a\n"; ?>';
    var_dump(baz());
    $dom = new DOMImplementation();
    set_error_handler(function (int $errno, string $errstr, ?string $errfile = null, ?int $errline = null) {
        throw new \ErrorException($errstr, 0, $errno, $errfile, $errline);
    });
    $needle = base64_decode('44CC');
    $rm = new ReflectionMethod(Collator::class, 'getSortKey');
    var_dump($rm->getNumberOfRequiredParameters());
    var_dump(error_reporting());
    $unset_var = 10;
    $y = 0;
    global $y;
    $y++;
    $obj = unserialize('O:8:"00000000":');
    var_dump($obj);
    $var = '';
    $i = 0;
    $i++;
    $link = mysqli_init();
    $link->set_charset('sjis');
    class foo
    {
    // no members
    }
    $this->foo_object = new foo();
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
    $count = 1;
    $count ++;
    $fn = "bug71263.bz2";
    unlink($fn);
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
    $struct = $ffi->new('struct bug_gh16013_int_struct');
    $test->a++;
    $text = 'This is an ‘example’ of using DOM splitText';
    $st
     = new DOMDocument('1.0', 'UTF-8');
    $no
    e = $dom->createTextNode($text);
    $do
    ->appendChild($node);
    
    pr;
}
$tester = new FPM\Tester($cfg);
$userMessage = "'user' directive is ignored when FPM is not running as root";
$tester->expectLogNotice($userMessage, 'eeee');
function f_1() {
    $conn = odbc_connect($dsn, $user, $pass);
    $res = odbc_exec($conn, 'SELECT * FROM bug68087 ORDER BY ID ASC');
    $varchar_col = odbc_result($res, "VARCHAR_COL");
    $r = socket_sendmsg($sends1, [
        "name" => [ "addr" => "::1", "port" => 3002],
        "iov" => ["test ", "thing", "\n"],
        "control" => [[
            "level" => IPPROTO_IPV6,
            "type" => IPV6_TCLASS,
            "data" => 40,
        ]]
    ], 0);
    function test(string $name, object $obj) {
        printf("# %s:\n", $name);
    
        var_dump($obj);
        var_dump($obj->a);
        var_dump($obj);
    }
    var_dump($obj);
    $xml = '<?xml version="1.0" encoding="utf-8" ?>
    <test>
    </test>';
    $root = simplexml_load_string($xml);
    $r = new ResourceBundle( 'en_US', BUNDLE );
    $t = $r['nonexisting'];
    printf("printf test 17:%X\n", 170);
    $reflector = new ReflectionClass(C::class);
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
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_TIMESTAMP_SIGN, array($cpca)));
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
    foreach ($rit as $child) {
        $ancestry = $child->xpath('ancestor-or-self::*');
        // Exhaust internal iterator
        foreach ($ancestry as $ancestor) {
        }
    }
    $ancestry = $child->xpath('ancestor-or-self::*');
    $depth0 = "depth02";
    $iterator = new RecursiveDirectoryIterator(__DIR__ . DIRECTORY_SEPARATOR . $depth0);
    $it = new RecursiveIteratorIterator($iterator);
    $s = new SplObjectStorage();
    $s->attach($s);
    $iterator = 1;
    $fp = php_cli_server_connect();
    $db = PDOTest::test_factory(dirname(__FILE__) . '/common.phpt');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $xml = '<?xml version="1.0" encoding="utf-8" ?>
    <test>
    </test>';
    $root = simplexml_load_string($xml);
    $log_file = tempnam(sys_get_temp_dir(), 'php-curl-CURLOPT_WRITEFUNCTION-trampoline');
    $fp = fopen($log_file, 'w+');
    $bert = "file://" . __DIR__ . "/bug41033.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_ENCRYPT, array($cpca)));
    class A {
        public $a;
    }
    $b = new A();
    $b->dyn = 1;
    class SomeClass2 implements JsonSerializable {
        public function jsonSerialize(): mixed {
            return [(array)$this];
        }
    }
    $class = new SomeClass2;
    $arr = [$class];
    $dom = Dom\HTMLDocument::createEmpty();
    dumpNodeList($dom->getElementsByTagName("HTml"));
    $magic_file = __DIR__ . '/bug79283.db';
    $db = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
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
    var_dump(asort($temp_array, SORT_REGULAR) );
    $wsdl = __DIR__."/bug35142.wsdl";
    class TestSoapClient extends SoapClient {
      private $server;
    
      function __construct($wsdl, $options) {
        parent::__construct($wsdl, $options);
        $this->server = new SoapServer($wsdl, $options);
        $this->server->addFunction('PostEvents');
      }
    
      function __doRequest($request, $location, $action, $version, $one_way = 0): string {
        echo "$request\n";
        ob_start();
        $this->server->handle($request);
        $response = ob_get_contents();
        ob_end_clean();
        return $response;
      }
    
    }
    function __construct($wsdl, $options) {
        parent::__construct($wsdl, $options);
        $this->server = new SoapServer($wsdl, $options);
        $this->server->addFunction('PostEvents');
      }
    $soapClient = new TestSoapClient($wsdl,
        array('trace' => 1, 'exceptions' => 0,
            'classmap' => array('logOnEvent' => 'LogOnEvent',
                'logOffEvent' => 'LogOffEvent',
                'events' => 'IVREvents')));
    $arr  = array("test");
    list($c,$d) = is_array($arr)?: NULL;
    printf("printf test 14:%c\n", 64);
    $gen = (function() {
        yield from (function() { yield; })();
    })();
    $filename = __DIR__ . DIRECTORY_SEPARATOR . 'bug70752.zip';
    var_dump($this->getConst());
    $tz2 = new DateTimeZone('Europe/Berlin');
    $string_mb = base64_decode('5pel5pys6Kqe44OG44Kt44K544OI44Gn44GZ44CCMDEyMzTvvJXvvJbvvJfvvJjvvJnjgII=');
    ini_set('exif.decode_unicode_motorola', 'UCS-2LE');
    $dt = DateTime::createFromFormat('Y-m-d|', '2011-02-02');
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
    $d0 = $prefix . "ソフト";
    $d1 =;
    class C extends stdClass {
        public int $a;
    }
    $reflector = new ReflectionClass(C::class);
    $obj = new C();
    $reflector->resetAsLazyProxy($obj, function () {
        return new C();
    });
    $array = array('f' => "first", "s" => 'second', 1, 2.222);
    $temp_array = $array;
    while (true) {
        break;  // avoid infinite loop
        $loop_counter = 1;
        $loop_counter++;
    }
    $codes = array(200, 201, 204, 301, 302, 303, 304, 305, 307, 404, 500);
    var_dump( range(1.0, 7.0, 10.0**400) );
    class foo
    {
    // no members
    }
    $unset_object = new foo();
    boo();
    function boo(){
        debug_print_backtrace();
    };
    $empty_string = <<<EOT
    EOT;
    print_r($str_instead);
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
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_TIMESTAMP_SIGN, array($cpca), $utfl));
    $PHP_SELF = 1;
    putenv('REDIR_TEST_DIR='.__DIR__ . '/../../pdo/tests/');
    $tz_us = new DateTimeZone('America/Los_Angeles');
    $user = PDO_MYSQL_TEST_USER;
    $pass	= PDO_MYSQL_TEST_PASS;
    $db = new PDO('mysql', $user, $pass);
    catch (PDOException $e) {
                printf("[001] %s, [%s] %s\n",
                    $e->getMessage(),
                    (is_object($db)) ? $db->errorCode() : 'n/a',
                    (is_object($db)) ? implode(' ', $db->errorInfo()) : 'n/a');
            }
    printf("[001] %s, [%s] %s\n",
                    $e->getMessage(),
                    (is_object($db)) ? $db->errorCode() : 'n/a',
                    (is_object($db)) ? implode(' ', $db->errorInfo()) : 'n/a');
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
    var_dump($line);
    $reflection = new ReflectionClass('\DateTimeImmutable');
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
    $body->setAttributeNS("http://www.w3.org/2000/xmlns/", "xmlns:a", "urn:another");
    $test = array(
      'a' => 1,
      'b' => 2,
      'c' => 3,
      'd' => 4,
    );
    foreach($test as $kk => $vv) {
            echo $test[$kk];
            if ($kk == $k) $test[$kk] = 0;
        }
    $test[$kk] = 0;
    $f = __DIR__."/data/test.txt.gz";
    $h = gzopen($f, 'r');
    var_dump(gzeof($h));
    $b = "30";
    function display($res)
    {
    	echo implode("\n", array_map(fn($row) => implode("\t", $row), $res))."\n";
    }
    $res = [];
    display($res);
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
    $ffi = FFI::cdef($header);
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
    printf("%0\$s", 1);
    function test() {
        try {
            return 5;
        } finally {
            try {
                echo 1;
            } finally {
                echo 2;
            }
        }
    }
    $a = test();
    $dyadic = 0.00000000000045474735088646411895751953125;
    var_dump(printf ("%1.41f\n",unserialize(serialize($dyadic))));
    $fn = "bug71263.bz2";
    session_start();
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
    test(2);
    $a = 'ok';
    $b = 'ok';
    $_a = $a;
    $_b = $b;
    var_dump($_a, $_b);
    $tempnum = 12345;
    $tempstring = "abcdefghjklmnpqrstuvwxyz";
    var_dump(sprintf("%d  %s  %d\n", $tempnum, $tempstring, $tempnum));
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
    while (true) {
        break;  // avoid infinite loop
        class Foo {
            public function foo() {
                return $this;
            }
        
            public function __set($name, $value) {
                throw new Exception('Hello');
            }
        }
        $foo = new Foo();
    }
    if (true) {
        var_dump(ini_get('mysqlnd.debug'));
        $link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
        $document = new \DOMDocument();
        $h1 = $document->getElementsByTagName('h1');
        $sert = "file://" . __DIR__ . "/san-cert.pem";
        $dom = new DOMDocument('1.0', 'UTF-8');
        $args = ["-d", "extension_dir=" . ini_get("extension_dir"), "-d", "extension=" . (substr(PHP_OS, 0, 3) == "WIN" ? "php_" : "") . "soap." . PHP_SHLIB_SUFFIX];
        $code = <<<'PHP'
        /* Receive */
        $content = trim(file_get_contents("php://input")) . PHP_EOL;
        PHP;
        php_cli_server_start($code, null, $args);
    }
    $ftp = ftp_connect('127.0.0.1', $port);
    var_dump(ftp_login($ftp, 'anonymous', 'IEUser@'));
}
function f_2() {
    return str_repeat('a', 1);
}
function f_3() {
    return 1;
}
function f_4() {
    $bert = "file://" . __DIR__ . "/bug41033.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_NS_SSL_SERVER, array($cpca), $utfl));
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $phar = new Phar($fname);
    $phar->stopBuffering();
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_SIGN, array($cpca), $utfl));
    $eml = __DIR__ . "/signed.eml";
    var_dump(openssl_pkcs7_verify($eml, 0));
    var_dump(strncmp("test ", "e", -1));
    mysqli_close($link);
    $datePost = DateTime::createFromFormat("!d M Y D", "17 may 2011 Fri");
    print_r($str_instead);
    ob_start("test");
}
function f_5() {
    $datePre = DateTime::createFromFormat("!D d M Y", "Fri 17 may 2011");
    $a[10] = "42";
    var_dump($a["10"], isset($a["10"]));
    class A {
        public function __call($name, $args) {
            eval('$args = array(); var_dump(debug_backtrace());');
        }
    }
    $a = new A();
    $a->test("test");
    md5('foo');
    $ar1 = array("row1" => 2, "row2" => 1);
    var_dump($ar1);
    $host = "localhost\0.example.com";
    var_dump(gethostbynamel($host));
    $db = PDOTest::factory();
    $db->setAttribute(PDO::ATTR_STRINGIFY_FETCHES, true);
    gth = 3;
    
    $d;
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
    $pdo->exec("create temp table t (n int, t text)");
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
    var_dump(strncmp("test ", "e", 0));
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
    $data = [
        "name" => ["family" => AF_INET6, "addr" => "::1"],
        "buffer_size" => 2000,
        "controllen" => socket_cmsg_space(IPPROTO_IPV6, IPV6_PKTINFO) +
                socket_cmsg_space(IPPROTO_IPV6, IPV6_TCLASS),
    ];
    print_r($data);
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
    $pdo->exec("insert into t select n + 1, 'non '||t from t");
    public function __construct($c)
        {
            $this->b = new C($c);
        }
    public function __construct($c)
        {
            $this->c = $c;
        }
    $this->c = $c;
    printf("printf test 8:<%20s>\n", "foo");
    $style = array();
    $i = 0;
    $style[$i++] = IMG_COLOR_TRANSPARENT;
    $mysqli = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
    $res = $mysqli->query('SELECT 42');
    $obj = $res->fetch_object();
    var_dump(
        $obj,
        $obj->{42}
    );
    $r = socket_sendmsg($sends1, [
        "name" => [ "addr" => "::1", "port" => 3002],
        "iov" => ["test ", "thing", "\n"],
        "control" => [[
            "level" => IPPROTO_IPV6,
            "type" => IPV6_TCLASS,
            "data" => 40,
        ]]
    ], 0);
    $dom = Dom\HTMLDocument::createEmpty();
    var_dump($dom->lookupNamespaceURI(""));
}
function unserialize($data) {
        session_decode($data);
    }
session_decode($data);
var_dump(A::$x);
$dt = new DateTime('@1604215800');
$dt->add(new DateInterval('PT1H'));
