<?php
function f_0() {
    $timestamp = gmmktime(8, 8, 8, 8, 8, 2008);
    $filename = __DIR__ . DIRECTORY_SEPARATOR . 'bug70752.zip';
    $dfp = opendir ( __DIR__ );
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        $sql = "SELECT 11111 as `1`, 22222 as `2`";
        $link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
        $res = $link->query($sql);
    }
    try {
        class Box {
            public ?Test $value;
        }
        global $box;
        function test($box) {
            var_dump($box->value = new Test);
        }
        $box = new Box();
        test($box);
        $ch = curl_init();
        curl_close($ch);
    } catch (Exception $e) {}
    if (true) {
    }
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $phar = new Phar($fname);
    $phar['a.php'] = '<php echo "this is a\n"; ?>';
    $dt = new DateTime('@1604219400');
    $test = function (#[SensitiveParameter] $sensitive)
    {
        debug_print_backtrace();
        var_dump(debug_backtrace());
        var_dump((new Exception)->getTrace());
    };
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
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
        $bug_gh16013_callback_struct->return_float = function($val) use($ffi) {
            $cdata = $ffi->new('float');
            $cdata->cdata = $val;
            return $cdata;
        };
        var_dump(($bug_gh16013_callback_struct->return_float)(12.34));
        ini_set('mysqlnd.fetch_data_copy', true);
        var_dump(strncasecmp("test ", "E", 10));
    }
    $fp = fopen (__FILE__, "r");
    try {
        function a() {
            $a = $b = $c = 2;
            foreach(range(1, 5) as $v) {
                yield $v;
            }
            return;
        }
        $a = $b = $c = 2;
        foreach (a(range(1, 3)) as $a) {
            var_dump($a);
        }
        var_dump($a);
    } catch (Exception $e) {}
    if (true) {
    }
    $fp = fopen(__FILE__, "r");
    fclose($fp);
    $date2 = DateTime::createFromFormat("D H i s", "Tuesday 0 00 00");
    $date1 = new DateTime("Tuesday");
    $tbl = "test";
    $sql = "INSERT INTO $tbl (bit_column_1) VALUES (0b10101010101)";
    $a = 1;
    try {
        var_dump(range(1.5, 3.5, -1.5));
        printf("printf test 8:<%20s>\n", "foo");
    } catch (Exception $e) {}
    if (true) {
    }
    $db = MySQLPDOTest::factory();
    $stmt = $db->prepare('SELECT * FROM test_33689');
    $tmp = $stmt->getColumnMeta(0);
    print_r($tmp);
    $bert = "file://" . __DIR__ . "/bug41033.pem";
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_CRL_SIGN));
    $tz1 = new DateTimeZone('Europe/Berlin');
    $db = MySQLPDOTest::factory();
    $stmt = $db->prepare('SELECT * FROM test_33689');
    $tmp = $stmt->getColumnMeta(0);
    $japanese_so = pack('H4', '835c');
    $a = "lest";
    $a[0] = "f";
    for ($i_3 = 0; $i_3 < 10; $i_3++) {
        $id_1_date = '2014-09-23';
        $id_2_date = '2014-09-24';
        $conn = odbc_connect($dsn, $user, $pass);
        odbc_exec($conn, "INSERT INTO bug68087(ID, VARCHAR_COL, DATE_COL) VALUES (1, 'hello', '$id_1_date'), (2, 'helloagain', '$id_2_date')");
        pcntl_wait($status);
        var_dump ( rtrim("rtrim test0123456789", "0..9") );
        $rc = new ReflectionClass(B::class);
        var_dump($rc->getStaticProperties());
        $a = 'ok';
        $b = 'ok';
        $_a = $a;
        $_b = $b;
        var_dump($_a, $_b);
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
        foreach ($arrays as $var_array ) {
          echo "-- Iteration $loop_counter --\n"; $loop_counter++;
          var_dump( is_array ($var_array) );
        }
        var_dump( is_array ($var_array) );
        function g() {
            yield 'foo';
            Fiber::suspend();
        }
        var_dump(yield from g());
        var_dump ( rtrim("rtrim test   " , "") );
        ini_set('mysqlnd.fetch_data_copy', false);
        $sert = "file://" . __DIR__ . "/san-cert.pem";
        $cpca = __DIR__ . "/san-cert.pem";
        var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_CLIENT, array($cpca)));
    }
    $dom = new DOMDocument;
    $test1 = $dom->getElementById('x');
    $j = 0;
    function byReference( & $array){
        foreach($array as &$item){
            $item['nanana'] = 'batman';
            $item['superhero'] = 'robin';
        }
    }
    foreach($array as &$item){
            $item['nanana'] = 'batman';
            $item['superhero'] = 'robin';
        }
    $item['superhero'] = 'robin';
    $regex = '/[a-z]/';
    $trace_file = '/tmp/mysqli_debug_phpt.trace';
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
    $reqOfBig = 'select * from t';
    $attrs = [ PDO::ATTR_PREFETCH => 0 ];
    $stmt = $pdo->prepare($reqOfBig, $attrs);
    try {
        $link = mysqli_init();
        mysqli_close($link);
        $args = ["-d", "extension_dir=" . ini_get("extension_dir"), "-d", "extension=" . (substr(PHP_OS, 0, 3) == "WIN" ? "php_" : "") . "soap." . PHP_SHLIB_SUFFIX];
        $code = <<<'PHP'
        /* Receive */
        $content = trim(file_get_contents("php://input")) . PHP_EOL;
        PHP;
        php_cli_server_start($code, null, $args);
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
        $tester->start();
        session_write_close();
        function test(string $input) {
            var_dump(filter_var($input, FILTER_VALIDATE_URL));
        }
        test("http://t[est@127.0.0.1");
        $filename = "bug51997.bz2";
        unlink($filename);
    } catch (Exception $e) {}
    if (true) {
    }
    function test(string $input) {
        var_dump(filter_var($input, FILTER_VALIDATE_URL));
    }
    test("http://test[@2001:db8:3333:4444:5555:6666:1.2.3.4]");
    ob_end_clean();
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
    class PHPUnit_Framework_MockObject_Matcher {
        public $stub = null;
        public $methodNameMatcher;
        public function invoked($invocation) {
            return $this->stub->invoke($invocation);
        }
    }
    $InvMocker = new PHPUnit_Framework_MockObject_InvocationMocker();
    $OuterMatcher = new PHPUnit_Framework_MockObject_Matcher();
    $InvMocker->addMatcher($OuterMatcher);
    unserialize('O:17:"Random\Randomizer":1:{i:0;a:2:{s:3:"foo";N;s:6:"engine";O:32:"Random\Engine\Xoshiro256StarStar":2:{i:0;a:0:{}i:1;a:4:{i:0;s:16:"7520fbc2d6f8de46";i:1;s:16:"84d2d2b9d7ba0a34";i:2;s:16:"d975f36db6490b32";i:3;s:16:"c19991ee16785b94";}}}}');
    $client = new SoapClient(__DIR__ . '/bug49278.wsdl', array('location' => "http://".PHP_CLI_SERVER_ADDRESS, 'trace' => 1));
    var_dump($client->__getLastResponse());
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
    $filename =  __DIR__ . DIRECTORY_SEPARATOR . 'bug70752.txt';
    var_dump(file_exists($filename));
    printf("[002] Expecting string on 32bit got %s/%s\n", gettype($id), var_export($id, true));
    $oneeighty = M_PI;
    var_dump(sin($oneeighty));
}
for ($i_4 = 0; $i_4 < 10; $i_4++) {
    class TrampolineTest {
        public function __call(string $name, array $arguments) {
            echo 'Trampoline for ', $name, PHP_EOL;
        }
    }
    $o = new TrampolineTest();
    $callback1 = [$o, 'trampoline1'];
    spl_autoload_register($callback1);
}
var_dump( range(1, 7, 0) );
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
$tester->expectLogStartNotices();
