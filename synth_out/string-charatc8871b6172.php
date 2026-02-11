<?php
function byVal($arg) {
    var_dump($arg);
}
function test(string $name, object $obj) {
    printf("# %s:\n", $name);

    var_dump($obj);
    var_dump(@$obj->dynamic++);
    var_dump($obj);
}
function new_closure_gen() {
    return function() {
        static $foo = 0;
        yield ++$foo;
    };
}
function unserialize($data) {
        session_decode($data);
    }
function dumpElement() {
    list($value) = yield;
    var_dump($value);
}
function gen() {
    yield 0;
    yield from gen();
}
function bar($gen) {
    yield from $gen;
}
function myMethod(string $foo) {
        echo "Called ", __METHOD__, PHP_EOL;
        var_dump($foo);
    }
class TrampolineTest {
    public function __call(string $name, array $arguments) {
        echo 'Trampoline for ', $name, PHP_EOL;
    }
}
class foo
{
  function __toString() {
    return "Object";
  }
}
class A {

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
class LogOnEvent {
  public $audienceMemberId;
  public $timestamp;

  function __construct($audienceMemberId, $timestamp) {
    $this->audienceMemberId = $audienceMemberId;
    $this->timestamp = $timestamp;
  }
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
#[\AllowDynamicProperties]
class C {
    public $b;
    public function __construct() {
        $this->a = new Canary();
    }
}
class classWithToString
{
    public function __toString() {
        return "Class A object";
    }
}
class classWithoutToString
{
}
class B extends A
{
    use T2;
}
class D {
    public string $prop;
}
class classA
{
  public function __toString() {
    return "key";
  }
}
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
function display($res)
{
	echo implode("\n", array_map(fn($row) => implode("\t", $row), $res))."\n";
}
$heredoc = <<<EOT
key
EOT;
function f_0() {
    return 0;
}
function f_1() {
    return '';
}
$tempstring = "abcdefghjklmnpqrstuvwxyz";
$array_test = array("a", "b", "d", 7, "u" => "U", -4, "-.008" => "neg.008");
$initialRequest = false;
function f_2() {
    byVal(C[0]);
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
    $d1 = $prefix . "フォルダ";
    touch("$d1\\test1.txt");
    php_cli_server_start('http_response_code(422);');
    var_dump(-9_223_372_036_860_776_000 % -1);
    spl_autoload_register(function ($name) {
    });
    $fn = "bug71263.bz2";
    $r = fopen($fn, "r");
    $s = fread($r, 100);
    var_dump($s);
    session_start();
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
    $thirty = M_PI / 6.0;
    var_dump(sin($thirty));
    $host = "localhost\0.example.com";
    var_dump(gethostbynamel($host));
    session_start();
    var_dump($br);
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
    $ch = curl_init();
    var_dump(curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 1));
    var_dump($obj);
    $conn = odbc_connect($dsn, $user, $pass);
    $res = odbc_exec($conn, "SELECT * FROM bug80147");
    odbc_fetch_row($res);
    test("http://test@[::1]");
    ob_start();
    test(1);
    mt_srand(1234567890);
    $GLOBALS['b'] = 2;
    $org_a = $GLOBALS['a'];
    $org_b = $GLOBALS['b'];
    var_dump($org_a, $org_b);
    $dt = new DateTime('@1604215800');
    $dt->add(new DateInterval('PT1M'));
    $result = get_declared_classes();
    var_dump(array_search('foo', $result));
    $xmlString = "<root><a><b>1</b><b>2</b><b>3</b></a></root>";
    $xml = simplexml_load_string($xmlString);
    $nodes = $xml->a->b;
    test($nodes, "asXml", fn ($n) => $n->asXml());
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
    $fp = php_cli_server_connect();
    fclose($fp);
    $db = MySQLPDOTest::factory();
    $db->exec('INSERT INTO test_33689 VALUES(1)');
    $dest = dirname(realpath(__FILE__)) . '/bug27582.png';
    $im = ImageCreateTrueColor(10, 10);
    imagepng($im, $dest);
    session_decode($data);
    $fixedArray = new SplFixedArray(1);
    $generator = dumpElement();
    $generator->send($fixedArray);
    var_dump(mb_stripos('Hello', 'e', 0, '8bit'));
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
    var_dump($prefixed->lookupNamespaceURI("a"));
    $gen = gen();
    $b = bar($gen);
    $b->rewind();
    setlocale(LC_ALL, 'de_DE', 'de-DE');
    $r = new ReflectionClass('Test2');
    var_dump($r->getStaticProperties());
    imagecreatefrompng('php://filter/read=convert.base64-encode/resource=' . __DIR__ . '/test.png');
    define ('foobar', 1);
    var_dump($foo);
    $list = new SplDoublyLinkedList();
    $list->setIteratorMode(SplDoublyLinkedList::IT_MODE_LIFO);
    $o = new TrampolineTest();
    $callback2 = [$o, 'trampoline2'];
    var_dump(spl_autoload_unregister($callback2));
}
$conn = pg_connect($conn_str);
$table='test_68638';
pg_update($conn,$table, array('value' => '-inf'), array('id' => 2));
var_dump(http_get_last_response_headers());
$id_2_date = '2014-09-24';
for ($i_3 = 0; $i_3 < 10; $i_3++) {
    $db = MySQLPDOTest::factory();
    $stmt = $db->prepare('SELECT * FROM test_33689');
    $tmp = $stmt->getColumnMeta(0);
    $object1 = new foo();
    $array_object = array();
    $array_object[0] = &$object1;
}
$A = new A();
for ($i_4 = 0; $i_4 < 10; $i_4++) {
    var_dump(soundex("Knuth"));
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
}
$timestamp = "2005-11-08T11:22:07+03:00";
$logOnEvent = new LogOnEvent(34567, $timestamp);
function f_5() {
    set_exception_handler(function () { print "EX\n"; });
    $filename = __DIR__ . '/私はガラスを食べられます_003.xml';
    $xmlstring = '<?xml version="1.0" encoding="UTF-8"?>
    <books><book num="1" idx="2">book1</book></books>';
    file_put_contents($filename, $xmlstring);
    var_dump(exif_read_data('data:image/jpg;base64,TU0AKgAAAAwgICAgAAIBDwAEAAAAAgAAACKSfCAgAAAAAEZVSklGSUxN'));
    var_dump($dn = realpath("."));
    $oIntlDateFormatter = new IntlDateFormatter("en_GB");
    $oIntlDateFormatter->setTimeZone('Europe/Berlin');
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
    error_reporting(E_ALL ^ E_NOTICE);
    $client = new TestSoapClient(__DIR__.'/bug38004.wsdl');
    $strA = 'test &amp; test';
    $strB = 'test & test';
    $res = $client->Test(array('strA'=>$strA, 'strB'=>$strB));
    print_r($res);
    print_r($str_instead);
    var_dump(exif_read_data('data:image/jpg;base64,TU0AKgAAAAwgICAgAAIBDwAEAAAAAgAAACKSfCAgAAAAAEZVSklGSUxN'));
    $dom = Dom\HTMLDocument::createEmpty();
    $container = $dom->appendChild(createElement($dom, "container"));
    $container->appendChild(createElementNS($dom, NULL, "HTML", "4"));
    $filename = __DIR__ . '/bug77432.phar';
    $phar = new Phar($filename);
    $phar->setStub('<?php echo "hello world\n"; __HALT_COMPILER(); ?>');
    printf("printf test 27:%3\$d %d %d\n", 1, 2, 3);
    $reflector = new ReflectionClass(C::class);
    $obj = new C();
    $reflector->resetAsLazyProxy($obj, function ($obj) {
        var_dump("initializer");
        return new C();
    });
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
    $im1 = imagecreatetruecolor(10,100);
    imagefill($im1, 0,0, 0xffffff);
    $cert = "file://" . __DIR__ . "/cert.crt";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_CRL_SIGN, array($cpca), $utfl));
    $filename = __DIR__ . '/bug77432.phar';
    $phar = new Phar($filename);
    $phar->startBuffering();
    $xmlString = "<root><a><b>1</b><b>2</b><b>3</b></a></root>";
    $xml = simplexml_load_string($xmlString);
    $nodes = $xml->a->b;
    $callable($nodes);
}
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
for ($i_6 = 0; $i_6 < 10; $i_6++) {
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
    $input = fopen(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370.tar', 'r');
    $output = fopen(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370_003' . DIRECTORY_SEPARATOR . 'testfile', 'w');
    var_dump(stream_copy_to_stream($input, $output, 10240, 0x200));
    $a = new A;
    var_dump($a);
}
$iterator = 1;
function f_7() {
    $o = new TrampolineTest();
    $count = 1;
    $t = new stdClass;
    $tz_aus = new DateTimeZone('Australia/Sydney');
    try {
        for ($i_8 = 0; $i_8 < 10; $i_8++) {
            if (true) {
                $references = array();
                $idx = 0;
                $references[$idx]['row_copy'] 	= $row;
            }
            $offset3 = PHP_INT_MAX * 16;
            $count = 1;
            $count++;
        }
    } catch (Exception $e) {}
    if (true) {
        $src = __DIR__ . DIRECTORY_SEPARATOR . "67647.mov";
    }
    if (true) {
        $dbh = @pg_connect($conn_str);
    }
    gc_collect_cycles();
    var_dump(c1::$a3);
    $db = MySQLPDOTest::factory();
    $stmt = $db->prepare('SELECT * FROM test_33689');
    $tmp = $stmt->getColumnMeta(0);
    printf("Expecting pdo_type = 1 got %s\n", $tmp['pdo_type']);
}
$f = __DIR__."/data/test.txt.gz";
$h = gzopen($f, 'r');
var_dump(gzeof($h));
function f_9() {
    $unset_var = 10;
    $heredoc = <<<EOT
    hello world
    EOT;
    $index_array = array (1, 2, 3);
    $assoc_array = array ('one' => 1, 'two' => 2);
    $inputs = array(
    
          // int data
          'int 0' => 0,
          'int 1' => 1,
          'int 12345' => 12345,
          'int -12345' => -2345,
    
          // float data
          'float 10.5' => 10.5,
          'float -10.5' => -10.5,
          'float 12.3456789000e10' => 12.3456789000e10,
          'float -12.3456789000e10' => -12.3456789000e10,
          'float .5' => .5,
    
          // array data
          'empty array' => array(),
          'int indexed array' => $index_array,
          'associative array' => $assoc_array,
          'nested arrays' => array('foo', $index_array, $assoc_array),
    
          // null data
          'uppercase NULL' => NULL,
          'lowercase null' => null,
    
          // boolean data
          'lowercase true' => true,
          'lowercase false' =>false,
          'uppercase TRUE' =>TRUE,
          'uppercase FALSE' =>FALSE,
    
          // empty data
          'empty string DQ' => "",
          'empty string SQ' => '',
    
          // string data
          'string DQ' => "string",
          'string SQ' => 'string',
          'mixed case string' => "sTrInG",
          'heredoc' => $heredoc,
    
          // object data
          'instance of classWithToString' => new classWithToString(),
          'instance of classWithoutToString' => new classWithoutToString(),
    
          // undefined data
          'undefined var' => @$undefined_var,
    
          // unset data
          'unset var' => @$unset_var,
    );
    $reflector = new ReflectionClass(C::class);
    $date1 = DateTime::createFromFormat("!D d M Y", "Fri 19 November 2011");
    $b = new B();
    try {
        for ($i_10 = 0; $i_10 < 10; $i_10++) {
            if (true) {
                $oldcwd = getcwd();
            }
            $assoc_array = array ('one' => 1, 'two' => 2);
            $counter = 1;
            $counter++;
        }
    } catch (Exception $e) {}
    if (true) {
        $args = ["-d", "extension_dir=" . ini_get("extension_dir"), "-d", "extension=" . (substr(PHP_OS, 0, 3) == "WIN" ? "php_" : "") . "soap." . PHP_SHLIB_SUFFIX];
    }
    if (true) {
        $dom = Dom\HTMLDocument::createEmpty();
    }
    $db = PDOTest::test_factory(__DIR__ . '/common.phpt');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    mt_srand(1234567890);
    $re = new ReflectionExtension("hash");
    var_dump($re->getConstants());
}
$cert = "file://" . __DIR__ . "/cert.crt";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_SERVER, array($cpca)));
$im1 = imagecreatetruecolor(10,100);
function f_11() {
    $rm = new ReflectionMethod(Collator::class, 'getSortKey');
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
    $a = unserialize(serialize(new A()));
    $i = "010";
    try {
        for ($i_12 = 0; $i_12 < 10; $i_12++) {
            if (true) {
                $c = new C();
                $d = new D();
                $d->prop = $c;
            }
            $unset_var = 10;
            $heredoc = <<<EOT
            key
            EOT;
            $fp = fopen(__FILE__, "r");
            $inputs = array(
            
                   // int data
            /*1*/  0,
                   1,
                   12345,
                   -2345,
            
                   // null data
            /*10*/ NULL,
                   null,
            
                   // boolean data
            /*12*/ true,
                   false,
                   TRUE,
                   FALSE,
            
                   // empty data
            /*16*/ "",
                   '',
                   array(),
            
                   // string data
            /*19*/ "key",
                   'key',
                   $heredoc,
            
                   // object data
            /*22*/ new classA(),
            
                   // undefined data
            /*23*/ @$undefined_var,
            
                   // unset data
            /*24*/ @$unset_var,
            
                   // resource variable
            /*25*/ $fp
            );
            $iterator = 1;
            $iterator++;
        }
    } catch (Exception $e) {}
    if (true) {
        $insert = null;
    }
    ob_start("test");
    $dyadic = 0.00000000000045474735088646411895751953125;
    var_dump(printf ("%1.41f\n",unserialize(serialize($dyadic))));
    $foo = new Foo;
    var_dump($foo);
}
$test = function (#[SensitiveParameter] $sensitive)
{
    debug_print_backtrace();
    var_dump(debug_backtrace());
    var_dump((new Exception)->getTrace());
};
$test('sensitive');
function f_13() {
    $filename = "bug51997.bz2";
    $bz = bzopen($filename, "w");
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $phar = new Phar($fname);
    $phar['a.php'] = '<php echo "this is a\n"; ?>';
    $compression = [
        'gz' => ['zlib.deflate', 'gzinflate'],
        'bz2' => ['bzip2.compress', 'bzdecompress']
    ];
    $c = new C();
    $c->prop2 = 'hello world';
    try {
        for ($i_14 = 0; $i_14 < 10; $i_14++) {
            if (true) {
                $loop_counter = 1;
            }
            $db = PDOTest::factory();
            $insert = $db->prepare("insert into test34630 (id, val) values (1, :blob)");
            $count = 1;
            $count++;
        }
    } catch (Exception $e) {}
    if (true) {
        $ch = curl_init("https://localhost/userpwd");
        $response = curl_exec($ch);
    }
    $obj = unserialize('O:8:"00000000":');
    var_dump($obj);
    var_dump(json_last_error_msg());
    $tester = new FPM\Tester($cfg);
    $userMessage = "'user' directive is ignored when FPM is not running as root";
    $tester->expectLogNotice($userMessage, 'bbbb');
}
var_dump(mb_stripos('Hello', 'e', 0, '8bit'));
function f_15() {
    $res = [];
    $a = array("0.1" => new cr(9), "0.5" => new cr(12), 0 => new cr(23), 1 => new cr(4), 2 => new cr(-15),);
    $b = array("0.2" => new cr(9), "0.5" => new cr(22), 0 => new cr(3), 1 => new cr(4), 2 => new cr(-15),);
    $result = array_udiff_assoc($a, $b, array("cr", "comp_func_cr"));
    for ($i_16 = 0; $i_16 < 10; $i_16++) {
        if (true) {
            $rf = new ReflectionFunction('collator_get_sort_key');
            $originalEnvelopeData = "any string with \x1a is cut at this point.";
        }
        $b = new A();
        $prop = new ReflectionProperty($b, 'dyn');
    }
    spl_autoload_register(function($class) {
        echo "$class\n";
        if ($class == 'X') {
            new Y;
        }
        if ($class == 'Y') {
            new Q;
        }
    });
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
    $reqOf3 = 'select 79 n union all select 80 union all select 81';
    $stmt1 = $pdo->query($reqOf3);
    display([ $stmt1->fetch() ]);
    ++$testCasesTotal;
    ++$testCasesTotal;
}
$s = "1234567890a";
var_dump($s["10"], isset($s["10"]));
function f_17() {
    $filename =  __DIR__ . DIRECTORY_SEPARATOR . 'bug70752.txt';
    $arr1 = array(1, "float", "f4", "hello", 2.2, 'color', "string", "pen\n", 11);
    for ($i_18 = 0; $i_18 < 10; $i_18++) {
        if (true) {
            $style = array();
            $i = 0;
            $style[$i++] = IMG_COLOR_TRANSPARENT;
            $dom = new DOMDocument;
            $tag = $dom->appendChild($dom->createElement("style"));
            $html = simplexml_import_dom($tag);
        }
        $reflection = new ReflectionClass('\DateTimeImmutable');
        $immutable = $reflection->newInstanceWithoutConstructor();
        $mutable = \DateTime::createFromInterface($immutable);
    }
    $unset_var = 10;
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
    
           // array with unset variable
    /*10*/ array( @$unset_var => "hello"),
    
           // array with mixed keys
    /*11*/ array('hello' => 1,  "fruit" => 2.2,
                 133 => "int",
                 @$unset_var => "unset", $heredoc => "heredoc")
    );
    $arr1 = array(1, "float", "f4", "hello", 2.2, 'color', "string", "pen\n", 11);
    foreach($arrays as $arr2) {
      echo "-- Iterator $iterator --\n";
    
      // Calling array_intersect() with default arguments
      var_dump( array_intersect($arr1, $arr2) );
    
      // Calling array_intersect() with more arguments.
      // additional argument passed is the same as $arr1 argument
      var_dump( array_intersect($arr1, $arr2, $arr1) );
      $iterator++;
    }
    var_dump( array_intersect($arr1, $arr2) );
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
    var_dump($namespaceless->lookupNamespaceURI(NULL));
    $halves[0] = $halves[1] = 0;
    $halves[(mt_rand(0, $max - 1) >> 1) & 1]++;
}
var_dump(sha1_file(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370_003' . DIRECTORY_SEPARATOR . 'testfile'));
