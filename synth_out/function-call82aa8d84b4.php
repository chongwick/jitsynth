<?php
$thisdir = __DIR__;
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt', Pdo::class, false);
$fn = "bug71263.bz2";
$r = fopen($fn, "r");
$s = fread($r, 100);
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
function f_0() {
    $bert = "file://" . __DIR__ . "/bug41033.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_ENCRYPT, array($cpca)));
}
for ($i_1 = 0; $i_1 < 10; $i_1++) {
    var_dump(session_cache_expire());
    $varOutput = ob_get_contents();
    try {
        $a = new PDO("sqlite::memory:");
        $b = $a->prepare("insert into test_35336 (b) values (?)");
        $b->execute(array (5));
    } catch (Exception $e) {}
    if (true) {
        $conn = odbc_connect($dsn, $user, $pass);
        $res = odbc_exec($conn, 'SELECT * FROM bug68087 ORDER BY ID ASC');
        $date = odbc_result($res, "DATE_COL");
        class C {
            public $a;
            public int $b = 1;
        
            public function __construct(int $a) {
                var_dump(__METHOD__);
                $this->a = $a;
                $this->b = 2;
            }
        }
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
        $obj = $reflector->newLazyProxy(function ($obj) {
            var_dump("initializer");
            return new C(1);
        });
        test('Proxy', $obj);
    }
    $r = new Phar(__DIR__ . "/bug69279.phar.zip");
    $r->extractTo(__DIR__, NULL, TRUE);
    $loop_counter = 1;
    try {
        $fp = fopen(__FILE__, "r");
        fclose($fp);
    } catch (Exception $e) {}
    if (true) {
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
        $server = new soapserver(null,array('uri'=>"http://testuri.org"));
        $server->addfunction("test");
    }
    lor(10,100);
    imagefill($im1, 0,0, 0x
    fffff);
    imagegd2($im1, $file);
    ;
    $r = new ReflectionClass('Test2');
    $m = $r->getStaticProperties();
    $m['data3'] = 300;
    try {
        $array = new ArrayObject();
        $array->offsetSet('key', 'value');
    } catch (Exception $e) {}
    if (true) {
        );
        if (!$reader->open($fil
        ttributeNo(0);
                    echo $reade;
        ob_end_flush();
    }
    $values =  array (
      //Decimal values
      0,
      1,
      12345,
      -12345,
    
      //Octal values
      02,
      010,
      030071,
      -030071,
    
      //Hexadecimal values
      0x0,
      0x1,
      0xABCD,
      -0xABCD
    );
    foreach($values as $value) {
          echo "\n-- Iteration $iterator --\n";
          var_dump( image_type_to_mime_type($value) );
          $iterator++;
    }
    var_dump( image_type_to_mime_type($value) );
    $hash = password_hash(
        "php",
        PASSWORD_ARGON2I,
        ['memory_cost' => 64 << 10, 'time_cost' => 4, 'threads' => 1]
    );
    try {
        $bert = "file://" . __DIR__ . "/bug41033.pem";
        $cpca = __DIR__ . "/san-cert.pem";
        var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_CRL_SIGN, array($cpca)));
    } catch (Exception $e) {}
    if (true) {
        $depth1 = "depth1";
        $rc = new ReflectionClass(B::class);
        var_dump($rc->getStaticProperties());
    }
    ob_clean();
}
for ($i_2 = 0; $i_2 < 10; $i_2++) {
    var_dump(version_compare('1.2', '2.1', '??'));
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
    $reqOfBig = 'select * from t';
    $attrs = [ PDO::ATTR_PREFETCH => 0 ];
    $stmt = $pdo->prepare($reqOfBig, $attrs);
    try {
        $field = mysqli_fetch_field_direct($res, 1);
        printf("[010] Found unexpected field '%s'\n", $field->name);
    } catch (Exception $e) {}
    if (true) {
        $test2=array(
           'a1_teasermenu' => array(
                'downloadcounter' => 2777,
                'versions' => array(
                    '0.1.0' => array (
                        'title' => 'A1 Teasermenu',
                        'description' => 'Displays a teaser for advanced subpages or a selection of advanced pages',
                        'state' => 'stable',
                        'reviewstate' => 0,
                        'category' => 'plugin',
                        'downloadcounter' => 2787,
                        'lastuploaddate' => 1088427240,
                        'dependencies' => array (
                              'depends' => array(
                                      'typo3' =>'',
                                      'php' =>'',
                                      'cms' => ''
                               ),
                              'conflicts' => array('' =>'')
                        ),
                        'authorname' => 'Mirko Balluff',
                        'authoremail' => 'balluff@amt1.de',
                        'ownerusername' => 'amt1',
                        't3xfilemd5' => '3a4ec198b6ea8d0bc2d69d9b7400398f',
                    )
                )
            )
        );
        function foo() {
          var_dump($i=1);
          return $i;
        }
        var_dump(foo());
    }
    $fp = fopen("php://memory", "r+");
    rewind($fp);
    for ($i = 0; $i < 5; $i++) {
        $v[$i] = 'hi'.$i;
    }
    $v[$i] = 'hi'.$i;
    try {
        var_dump(json_decode('"\ud834"'));
    } catch (Exception $e) {}
    if (true) {
        class foo1
        {
          function __toString() {
            return "Object1";
          }
        }
        $object2 = new foo1();
        $array_object = array();
        $array_object[1] = &$object2;
        $s = 'C:15:"ReflectionClass":0:{}';
        var_dump(unserialize($s));
    }
    clearstatcache();
    $tbl = "test";
    try {
        $file_handle = fopen(__FILE__, "r");
        fclose( $file_handle );
    } catch (Exception $e) {}
    if (true) {
        $html = <<<HTML
        <div id="test"><span>hi there</span></div>
        HTML;
        $zip = new ZipArchive();
        $zip->extractTo(__DIR__);
    }
    $c = "assert";
    $c(false);
    $a = 4;
    try {
        var_dump(filter_var("", FILTER_SANITIZE_ENCODED));
    } catch (Exception $e) {}
    if (true) {
        $users = MailBox::USERS;
        $bcc = $users[2];
        ob_end_clean();
    }
    function something() {
            foreach(array(1, 2) as $value) {
                    for($i = 0; $i < 1; $i++) {
                            continue 2;
                    }
                    return;
            }
    }
    something();
}
$dom = Dom\XMLDocument::createFromString(<<<XML
<root>
    <test1 xml:id="x"/>
    <test2 xml:id="x"/>
</root>
XML);
for ($i_3 = 0; $i_3 < 10; $i_3++) {
    for ($i_4 = 0; $i_4 < 10; $i_4++) {
        $inner = 'r:2;';
        $exploit = 'a:2:{i:0;C:3:"obj":'.strlen($inner).':{'.$inner.'}i:1;C:3:"obj":'.strlen($inner).':{'.$inner.'}}';
        $data = unserialize($exploit);
        try {
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
        } catch (Exception $e) {}
        if (true) {
            class Foo {
                var $bar = array();
            
                static function bar() {
                    static $instance = null;
                    $instance = new Foo();
                    return $instance->bar;
                }
            }
            $instance = new Foo();
            var_dump(array_map(assert(...), [true, true, false]));
        }
        $db = MySQLPDOTest::factory();
        $db->exec("CREATE TABLE test_pecl_bug_5200 (bar INT NOT NULL, phase enum('please_select', 'I', 'II', 'IIa', 'IIb', 'III', 'IV'))");
        $heredoc_needle = <<<EOD
        ^^&*(
        EOD;
        try {
            var_dump($i=1);
        } catch (Exception $e) {}
        if (true) {
            $r = new ResourceBundle( 'en_US', BUNDLE );
            $r2 = $r['testarray'];
            $array = array("test" => 1);
            $a = "lest";
            var_dump($array[$a]);
        }
        $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
        $phar = new Phar($fname);
        var_dump($phar->getStub());
    }
}
for ($i_5 = 0; $i_5 < 10; $i_5++) {
    for ($i_6 = 0; $i_6 < 10; $i_6++) {
        $dest = dirname(realpath(__FILE__)) . '/bug27582.png';
        try {
            $db = getDbConnection();
            $sql = '
                SET NOCOUNT ON
                SELECT 0 AS [result]
            ';
            $stmt = $db->query($sql);
            var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));
        } catch (Exception $e) {}
        if (true) {
            $w = new Phar(__DIR__ . "/bug69279.phar.zip");
            $w["bug69279.txt"] = "Sample content.";
            $output = array();
            var_dump($output);
        }
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
        zerofill(3, $link, 'SMALLINT');
        $context = stream_context_create(['dummy' => ['foo' => 'bar']]);
        try {
            $bert = "file://" . __DIR__ . "/bug41033.pem";
            $cpca = __DIR__ . "/san-cert.pem";
            $utfl = __DIR__ . "/sni_server_uk.pem";
            var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_ANY, array($cpca), $utfl));
        } catch (Exception $e) {}
        if (true) {
            $conn = odbc_connect($dsn, $user, $pass);
            $res = odbc_exec($conn, 'SELECT * FROM bug68087 ORDER BY ID ASC');
            $date = odbc_result($res, "DATE_COL");
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
        }
        $eml = __DIR__ . "/signed.eml";
        $empty = "";
        var_dump(openssl_pkcs7_verify($eml, 0, $empty));
    }
}
for ($i_7 = 0; $i_7 < 10; $i_7++) {
    for ($i_8 = 0; $i_8 < 10; $i_8++) {
        $depth2 = "depth2";
        try {
            var_dump ( rtrim("rtrim test   " , "") );
        } catch (Exception $e) {}
        if (true) {
            $pid = pcntl_fork();
            printf("[005] [%d] %s\n", $link->errno, $link->error);
        }
        class A2 { // A1 with private function test
        	public function __call($method, $args) { echo "__call\n"; }
        	public static function __callStatic($method, $args) { echo "__callStatic\n"; }
        	private function test() {}
        }
        class B2 extends A2 {
        	public function test(){	parent::test();	}
        }
        $test2 = new B2;
        $test2->test();
        $args = ["-d", "extension_dir=" . ini_get("extension_dir"), "-d", "extension=" . (substr(PHP_OS, 0, 3) == "WIN" ? "php_" : "") . "soap." . PHP_SHLIB_SUFFIX];
        $args[] = php_ini_loaded_file();
        try {
            $outfile = tempnam(sys_get_temp_dir(), "ssl");
            $contentfile = tempnam(sys_get_temp_dir(), "ssl");
            $pkcsfile = __DIR__ . "/openssl_pkcs7_verify__pkcsfile.tmp";
            $eml = __DIR__ . "/signed.eml";
            $cainfo = array();
            var_dump(openssl_pkcs7_verify($eml, PKCS7_NOVERIFY, $outfile, $cainfo, $outfile, $contentfile, $pkcsfile));
        } catch (Exception $e) {}
        if (true) {
            $now = new DateTimeImmutable('2022-10-10 08:41:54.534620', new DateTimeZone('UTC'));
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
        }
        $dbh = @pg_connect($conn_str);
        $res = pg_query($dbh, 'SELECT test_notice()');
        var_dump($res);
    }
}
for ($i_9 = 0; $i_9 < 10; $i_9++) {
    for ($i_10 = 0; $i_10 < 10; $i_10++) {
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
        try {
            $GLOBALS['b'] = 2;
            $b = &$GLOBALS['b'];
            $GLOBALS['b'] = 3;
            $a = 4;
            var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
        } catch (Exception $e) {}
        if (true) {
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
            $dom = Dom\HTMLDocument::createEmpty();
            $container = $dom->appendChild(createElement($dom, "container"));
            $container->appendChild(createElementNS($dom, NULL, "html", "3"));
        }
        ini_set("session.save_handler","files");
        $tempstring = "abcdefghjklmnpqrstuvwxyz";
        try {
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
        } catch (Exception $e) {}
        if (true) {
            class D {
                public string $prop;
            }
            $d = new D();
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
        }
        $tester = new FPM\Tester($cfg);
        $userMessage = "'user' directive is ignored when FPM is not running as root";
        $tester->expectLogNotice($userMessage, 'eeee');
    }
}
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
