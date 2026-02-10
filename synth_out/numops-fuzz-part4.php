<?php
function f_0() {
    $r = new ReflectionClass('stdClass');
    $total = 10000;
    var_dump(new Foo);
    $fp = fopen('php://input', 'r+');
    var_dump(fseek($fp, -1, SEEK_SET));
    print_r($str_instead);
    $db = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
    $stmt = $db->prepare("CALL testSp()");
    $stmt->execute();
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
    $reqOf3 = 'select 79 n union all select 80 union all select 81';
    function display($res)
    {
    	echo implode("\n", array_map(fn($row) => implode("\t", $row), $res))."\n";
    }
    $stmt1 = $pdo->query($reqOf3);
    display([ $stmt1->fetch() ]);
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
    $bug_gh16013_callback_struct->return_struct = function($val) use($ffi) {
        return $val;
    };
    $struct = $ffi->new('struct bug_gh16013_int_struct');
    var_dump(($bug_gh16013_callback_struct->return_struct)($struct));
    call_user_func('bar','second try');
    mysqli_free_result($res);
    $db = getDbConnection();
    $sql = '
        SET NOCOUNT ON
        SELECT 0 AS [result]
    ';
    $stmt = $db->query($sql);
    var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));
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
    $s = "1234567890a";
    var_dump($s["10"], isset($s["10"]));
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_SERVER, array($cpca)));
    ini_set("intl.error_level", E_WARNING);
    $now = new DateTime('2018-11-03 11:34:20.781751');
    $ago = new DateTime('2018-11-03 11:34:20.000000');
    $diff = $now->diff($ago);
    var_dump($diff->invert, $diff->s, $diff->f);
    var_dump(c1::$a2);
    $db = MySQLPDOTest::factory();
    $db->exec("CREATE TABLE test_pecl_bug_5200 (bar INT NOT NULL, phase enum('please_select', 'I', 'II', 'IIa', 'IIb', 'III', 'IV'))");
    $fn = "bug71263.bz2";
    $r = fopen($fn, "r");
    stream_filter_append($r, 'bzip2.decompress', STREAM_FILTER_READ);
    setlocale(LC_ALL, "C");
    $dom = new DOMDocument;
    var_dump($dom->getElementById('x')?->nodeName);
    var_dump(substr_count("aaa", "a", 0, 0));
    class Test {
        public static function __callStatic($method, $args) {}
        public function __call($method, $args) {}
    }
    function do_throw() { throw new Exception; }
    $f = function () {};
    $t = new Test;
    $f->__invoke($t->bar(Test::foo(do_throw())));
    $bert = "file://" . __DIR__ . "/bug41033.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_CRL_SIGN, array($cpca), $utfl));
    var_dump(-2147483647 % -1);
    $cert = "file://" . __DIR__ . "/cert.crt";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SMIME_ENCRYPT, array($cpca), $utfl));
    class Box {
        public ?Test $value;
    }
    global $box;
    function test($box) {
        var_dump($box->value = new Test);
    }
    $box = new Box();
    test($box);
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $phar = new Phar($fname);
    $phar->setDefaultStub('my/custom/thingy.php', 'the/web.php');
    $f = __DIR__."/data/test.txt.gz";
    $h = gzopen($f, 'r');
    var_dump(gzeof($h));
    $db = getDbConnection();
    $sql = '
        SET NOCOUNT ON
        SELECT 0 AS [result]
    ';
    $stmt = $db->query($sql);
    var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));
    class TrampolineTest {
        public function __call(string $name, array $arguments) {
            echo 'Trampoline for ', $name, PHP_EOL;
        }
    }
    $o = new TrampolineTest();
    $callback1 = [$o, 'trampoline1'];
    spl_autoload_register($callback1);
    printf("printf test 1:%s\n", "simple string");
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
    printf("[008] %s [%d] %s\n", $column_def,
                mysqli_errno($link), mysqli_error($link));
    var_dump( range(1, 7, 10.0**400) );
    $dom = new DOMDocument;
    var_dump($dom->getElementById('x')?->nodeName);
    $dbh = @pg_connect($conn_str);
    _set_lc_messages($dbh);
    $str = <<<EOD
    us
    ing heredoc string
    EOD;
    var_dump( rtrim($str, "ing") );
    $tempstring = "abcdefghjklmnpqrstuvwxyz";
    var_dump(sprintf("%030.-15s", $tempstring));
    $tester = new FPM\Tester($cfg);
    $userMessage = "'user' directive is ignored when FPM is not running as root";
    $tester->expectLogNotice($userMessage, 'eeee');
    $dom = Dom\XMLDocument::createFromString(<<<XML
    <root>
        <test1 xml:id="x"/>
        <test2 xml:id="x"/>
    </root>
    XML);
    $dom->getElementById('x')->removeAttribute('xml:id');
    function test($s) {
      echo "'".trim(str_replace("&nbsp;", " ", htmlspecialchars_decode(strip_tags(highlight_string($s,1)))))."'\n";
    }
    test('<?php echo "1";//2');
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
    printf("# %s\n", $name);
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
    $field = mysqli_fetch_field_direct($res, 1);
    $expected_flags = array('col1' => 'MULTIPLE_KEY PART_KEY', 'col2' => 'PART_KEY');
    list($missing_flags, $unexpected_flags, $flags_found) = checkFlags($field->flags, $expected_flags[$field->name], $flags);
    printf("[012] The flags '%s' have not been reported for %s, found '%s'\n",
                        $missing_flags, $field->name, $flags_found);
    function get() {
        $t = new stdClass;
        $t->prop = $t;
        return $t;
    }
    var_dump(get());
    function validate($value)
    {
        foreach ([0] as $_) {
            $a = &$value->a;
            $value->a ?? null;
        }
    }
    validate((object) ['b' => 0]);
    spl_autoload_register(function ($name) {
        spl_autoload_unregister("spl_autoload_call");
    });
    stream_socket_client('tcp://9999.9999.9999.9999:9999', $error_code, $error_message, 0.2, STREAM_CLIENT_CONNECT | STREAM_CLIENT_PERSISTENT);
    $db = MySQLPDOTest::factory();
    $stmt = $db->prepare('SELECT * FROM test_33689');
    $tmp = $stmt->getColumnMeta(0);
    print_r($tmp);
    $now = new DateTimeImmutable();
    $dateperiod = (new ReflectionClass(DatePeriod::class))->newInstanceWithoutConstructor();
    $dateinterval = (new ReflectionClass(DateInterval::class))->newInstanceWithoutConstructor();
    $dateperiod->__unserialize(['start' => $now, 'end' => $now, 'current' => $now, 'interval' => $dateinterval]);
    phpinfo(INFO_VARIABLES);
    ++$failuresNb;
    $varOutput = ob_get_contents();
    $varOutput = str_replace(
            [$var_dim_filename],
            ['%s'],
            $varOutput
        );
    file_put_contents(__DIR__ . DIRECTORY_SEPARATOR . "debug_false_container_{$failuresNb}.txt", $varOutput);
    var_dump( range(1, 7, 0) );
    var_dump(1);
    $output = fopen(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370_003' . DIRECTORY_SEPARATOR . 'testfile', 'w');
    fclose($output);
    $tempstring = "abcdefghjklmnpqrstuvwxyz";
    var_dump(sprintf("%030.-15s", $tempstring));
    class Element
    {
        public function ThrowException ()
        {
            throw new Exception();
        }
    
        public static function CallBack(Element $elem)
        {
            $elem->ThrowException();
        }
    }
    $arr = array(new Element(), new Element(), new Element());
    array_map(array('Element', 'CallBack'), $arr);
    $r = new ReflectionClass('Test2');
    var_dump($r->getStaticProperties());
    $tester = new FPM\Tester($cfg);
    $tester->terminate();
    $doc = new \DOMDocument();
    $target = $doc->documentElement->lastChild;
    $target->before('bar', $doc->documentElement->firstChild, 'baz');
    function test($p12_contents, $password) {
        openssl_pkcs12_read($p12_contents, $cert_data, $password);
        openssl_error_string();
        var_dump(count($cert_data['extracerts']));
    }
    $pass = "qwerty";
    test($p12, $pass);
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
    $ai->seek(0);
    catch (\Exception $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
    catch (\Exception $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
    catch (\Exception $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
    printf("%s: %s\n", $e::class, $e->getMessage());
    $bert = "file://" . __DIR__ . "/bug41033.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_CRL_SIGN, array($cpca), $utfl));
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
    $conn = odbc_connect($dsn, $user, $pass);
    odbc_exec($conn, "INSERT INTO bug80147 VALUES (1, CONVERT(VARBINARY(50), 'whatever'))");
    $xmlString = "<root><a><b>1</b><b>2</b><b>3</b></a></root>";
    $xml = simplexml_load_string($xmlString);
    $nodes = $xml->a->b;
    function test($nodes, $name, $callable) {
        echo "--- $name ---\n";
        foreach ($nodes as $nodeData) {
            echo "nodeData: " . $nodeData . "\n";
            $callable($nodes);
        }
    }
    test($nodes, "asXml", fn ($n) => $n->asXml());
    define('PHPT_DATETIME_SHOW', PHPT_DATETIME_SHOW_ADD);
    $date1 = DateTime::createFromFormat("!D d M Y", "Fri 19 November 2011");
    $date2 = new DateTime("Fri 19 November 2011");
    var_dump($date1->format('Y-m-d') == $date2->format('Y-m-d'));
    function display($res)
    {
    	echo implode("\n", array_map(fn($row) => implode("\t", $row), $res))."\n";
    }
    $res = [];
    display($res);
    $meta_res = $stmt->result_metadata();
    $field = $meta_res->fetch_field();
    printf("Orgtable     : %s\n", $field->orgtable);
    var_dump(class_exists("TestClass", true));
    $twoseventy = M_PI * 1.5;
    var_dump(sin($twoseventy));
    var_dump(A::$x);
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
    $fp = fopen('php://input', 'r+');
    fclose($fp);
    function get() {
        $t = new stdClass;
        $t->prop = $t;
        return $t;
    }
    var_dump(get());
    set_exception_handler(function (\Throwable $exception) {
        echo 'Caught: ' . $exception->getMessage() . "\n";
    });
    $haystack = 'Hello,\t\n\0\n  $&!#%\o,()*+-./:;<=>?@hello123456he \x234 \101 ';
    $needle = array(
      //regular strings
      'l',
      'L',
      'HELLO',
      'hEllo',
    
      //escape characters
      '\t',
      '\T',
      '     ',
      '\n',
      '\N',
      '
    ',  //new line
    
      //nulls
      '\0',
    
      //boolean false
      FALSE,
      false,
    
      //empty string
      '',
    
      //special chars
      ' ',
      '$',
      ' $',
      '&',
      '!#',
      '%\o',
      '\o,',
      '()',
      '*+',
      '+',
      '-',
      '.',
      '.;',
      ':;',
      ';',
      '<=>',
      '>',
      '=>',
      '?',
      '@',
      '@hEllo',
    
      '12345', //decimal numeric string
      '\x23',  //hexadecimal numeric string
      '#',  //hexadecimal numeric string
      '\101',  //octal numeric string
      'A',
      '456HEE',  //numerics + chars
      42, //needle as int(ASCII value of '*')
      $haystack  //haystack as needle
    );
    for($index=0; $index<count($needle); $index++) {
      echo "\n-- Iteration $count --\n";
      var_dump( strrchr($haystack, $needle[$index]) );
      $count ++;
    }
    var_dump( strrchr($haystack, $needle[$index]) );
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
    $t->test();
    $f = __DIR__."/data/test.txt.gz";
    $h = gzopen($f, 'r');
    gzclose($h);
    $thirty = M_PI / 6.0;
    var_dump(sin($thirty));
    $db = PDOTest::factory();
    $db->exec('CREATE TABLE test34630 (id int NOT NULL PRIMARY KEY, val VARCHAR(256))');
    $link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
    $link->close();
    $dt = new DateTime('first day of January 2011');
    var_dump($dt);
    $headers2 = exif_read_data(__DIR__ . '/bug64739.jpg');
    var_dump($headers2['Author']);
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
    proc_close($proc);
    function createDB(): PDO {
        $db = MySQLPDOTest::factory();
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        return $db;
    }
    $db = createDB();
    $db->exec('CREATE TABLE test_80908 (`id` BIGINT(20) UNSIGNED AUTO_INCREMENT, `name` VARCHAR(5), PRIMARY KEY (`id`)) ENGINE = InnoDB AUTO_INCREMENT=10376293541461622799');
    function foo() {
      var_dump($i=1);
      return $i;
    }
    var_dump(foo());
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
    sprintf('%3$s, %2$s %1$s', "a", "b");
    $db = MySQLPDOTest::factory();
    $stmt = $db->prepare('SELECT * FROM test_33689');
    $tmp = $stmt->getColumnMeta(0);
    print_r($tmp);
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
    mysqli_query($link, 'ALTER TABLE test DROP zero');
    printf("printf test 27:%3\$d %d %d\n", 1, 2, 3);
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
    function display($res)
    {
    	echo implode("\n", array_map(fn($row) => implode("\t", $row), $res))."\n";
    }
    display($pdo->query("select * from t2")->fetchAll());
    $db = PDOTest::test_factory(dirname(__FILE__) . '/common.phpt');
    $stmt = $db->prepare('select ??- lseg \'((-1,0),(1,0))\'');
    var_dump($stmt->fetch());
    $filename = "bug51997.bz2";
    $bz = bzopen($filename, "r");
    fseek($bz, 0, SEEK_CUR);
    $originalEnvelopeData = "any string with \x1a is cut at this point.";
    $tmpFileIn = tempnam(sys_get_temp_dir(), 'test');
    var_dump(filesize($tmpFileIn) === strlen($originalEnvelopeData));
    $responses = array(
        "data://text/plain,HTTP/1.1 200 Some very long reason-phrase to test that this is properly handled by our code without adding a new header like  Bad: Header\r\nGood: Header\r\n\r\nBody",
        "data://text/plain,HTTP/1.1 200 \r\nGood: Header\r\n\r\nBody",
    );
    ['pid' => $pid, 'uri' => $uri] = http_server($responses, $output);
    $f = @fopen($uri, "r");
    fclose($f);
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
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_ANY));
    $im = imagecreatetruecolor(1, 1);
    imagescale($im, 1, 1, IMG_BICUBIC_FIXED);
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
    $reqOf3 = 'select 79 n union all select 80 union all select 81';
    $stmt = $pdo->prepare($reqOf3);
    $stmt->execute();
    class C extends stdClass {
        public int $a;
    }
    $reflector = new ReflectionClass(C::class);
    $obj = new C();
    $reflector->initializeLazyObject($obj);
    var_dump( strtok("\0") );
    $dom = new DOMDocument;
    var_dump($dom->getElementById('x')?->nodeName);
    var_dump(defined('SO_REUSEPORT'));
    class A {
        public function __call($name, $args) {
            for ($i = 0; $i < 5; $i++) {
                yield $i;
            }
        }
    }
    $a = new A();
    $a->gen();
    $interval = new DateInterval('P1D');
    $dt = new DateTime('first day of January 2011');
    $dt->add($interval);
    clearstatcache();
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_SERVER, array($cpca), $utfl));
    ob_start();
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
    printf("[005] Field information seems wrong, %s [%d] %s\n", $column_def,
                    mysqli_errno($link), mysqli_error($link));
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_CRL_SIGN));
    printf("printf test 28:%2\$02d %1\$2d\n", 1, 2);
    var_dump( range(1.0, 7.0, 6.5) );
    var_dump(count($cert_data['extracerts']));
    $tester = new FPM\Tester($cfg);
    $tester->close();
    var_dump(json_decode('{"key":"value", "":"value"}', true));
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
    class A {
        private static $x = 1;
    }
    class C extends A {
        function bar() {
            var_dump(A::$x);
        }
    }
    $b = new C;
    $b->bar();
    $regex = '/[a-z]/';
    $subject = 'string';
    var_dump(preg_match_all($regex, $subject, 'test'));
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_SERVER));
    $meta_res = $stmt->result_metadata();
    $field = $meta_res->fetch_field();
    printf("Flags        : %d\n", $field->flags);
    var_dump(substr_compare('/', '/asd', 0, 4));
    $cert = "file://" . __DIR__ . "/cert.crt";
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_ANY));
    $args = ["-d", "extension_dir=" . ini_get("extension_dir"), "-d", "extension=" . (substr(PHP_OS, 0, 3) == "WIN" ? "php_" : "") . "soap." . PHP_SHLIB_SUFFIX];
    $code = '$server = new SoapServer("' . __DIR__ . '"/bug49278.wsdl", ["trace"=>1]);' .
            <<<'PHP'
            function Add() {}
            $server->addFunction('Add');
            $server->handle();
            PHP;
    php_cli_server_start($code, null, $args);
    var_dump(sprintf("%%%.2f", 1.23456789e10));
    class_alias( 'stdClass', '_' );
    $a = new PDO("sqlite::memory:");
    $a->query ("CREATE TABLE test_35336 (a integer primary key, b text)");
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $phar = new Phar($fname);
    $phar->stopBuffering();
    php_cli_server_start(<<<PHP
    http_response_code(426);
    PHP
    );
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
    mysqli_close($link);
    var_dump(filter_var("?><!@#$%^&*()}{~Qwertyuilfdsasdfgmnbvcxcvbn", FILTER_SANITIZE_ENCODED, FILTER_FLAG_ENCODE_HIGH));
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
    $depth0 = "depth02";
    $depth1 = "depth1";
    $depth2 = "depth2";
    $targetDir = __DIR__ . DIRECTORY_SEPARATOR . $depth0 . DIRECTORY_SEPARATOR . $depth1 . DIRECTORY_SEPARATOR . $depth2;
    touch($targetDir . DIRECTORY_SEPARATOR . 'getSubPathname_test_2.tmp');
    fclose($this->stream);
    var_dump( range(1.0, 7.0, 10.0**400) );
    $eml = __DIR__ . "/signed.eml";
    var_dump(openssl_pkcs7_verify($eml, 0));
    $db = PDOTest::factory();
    $db->beginTransaction();
    function dumpElement() {
        list($value) = yield;
        var_dump($value);
    }
    $fixedArray = new SplFixedArray(1);
    $generator = dumpElement();
    $generator->send($fixedArray);
    $sh = new SessionHandler;
    $sh->read("");
    function test(array... $args) {
        var_dump($args);
    }
    test();
    function dumpElement() {
        list($value) = yield;
        var_dump($value);
    }
    $fixedArray = new SplFixedArray(1);
    $generator = dumpElement();
    $generator->send($fixedArray);
    $db = getDbConnection();
    $sql = '
        SET NOCOUNT ON
        SELECT 0 AS [result]
    ';
    $stmt = $db->query($sql);
    var_dump($stmt->nextRowset());
    $a[10] = "42";
    $i = "010";
    var_dump($a[$i], isset($a[$i]));
    $date = new DateTime("28-July-2008");
    $other = new DateTime("31-July-2008");
    $diff = date_diff($date, $other);
    var_dump($diff);
    printf("[002] [%d] %s\n", mysqli_errno($link), mysqli_error($link));
    var_dump(strlen(file_get_contents('php://input')));
    function t2()
    {
        ob_start("test");
        echo "Hello from t2 1 ";
            ob_flush();
            echo "Hello from t2 2 ";
            ob_end_flush();
    }
    t2();
    $db = getDbConnection();
    var_dump($db->getAttribute(PDO::DBLIB_ATTR_SKIP_EMPTY_ROWSETS));
    $db = getDbConnection();
    $sql = '
        SET NOCOUNT ON
        SELECT 0 AS [result]
    ';
    $stmt = $db->query($sql);
    $stmt->closeCursor();
    $priorityQueue = new SplPriorityQueue();
    var_dump($priorityQueue->getExtractFlags());
    $dom = Dom\HTMLDocument::createEmpty();
    $container = $dom->appendChild(createElement($dom, "container"));
    $container->appendChild(createElementNS($dom, "http://www.w3.org/1999/xhtml", "bar:html", "9"));
    $array = new ArrayObject();
    var_dump($array->offsetExists('key'));
    $f = __DIR__."/data/test.txt.gz";
    $h = gzopen($f, 'r');
    var_dump(gzeof($h));
    class Box {
        public ?Test $value;
    }
    global $box;
    function test($box) {
        var_dump($box->value = new Test);
    }
    $box = new Box();
    test($box);
    $db = getDbConnection();
    var_dump($db->getAttribute(PDO::DBLIB_ATTR_SKIP_EMPTY_ROWSETS));
    $mysqli = new mysqli("$host:$port", $user, $passwd, $db);
    $tbl = "test";
    $sql = "INSERT INTO $tbl (bit_column_1) VALUES (0b10101010101)";
    $mysqli->query($sql);
    ini_set('exif.decode_unicode_motorola', 'UCS-2LE');
    var_dump(getimagesize(__DIR__ . "/test13pix.swf"));
    $dom = new DOMDocument;
    $tag = $dom->appendChild($dom->createElement("style"));
    $html = simplexml_import_dom($tag);
    var_dump($html);
    printf("printf test 6:%-010.2f\n", 2.5);
    $im = imagecreate(800, 800);
    imageline($im, 550, 250, 550, 750, IMG_COLOR_STYLED);
    $im = imagecreate(800, 800);
    imagepalettetotruecolor($im);
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
    $ch = curl_init();
    curl_close($ch);
    $db = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
    $stmt = $db->prepare("CALL testSp()");
    $stmt->execute();
    (function() {
    	try {
    		foo(); // Error
    	} catch (\Exception $e) {
    		var_dump($e);
    	} catch (\ParseError $e) {
    		var_dump($e);
    	}
    })();
    $text = '<p>hello world &trade;</p>';
    $dom = new DOMDocument('1.0', 'UTF-8');
    $node = $dom->getElementById('test');
    $node->textContent = $text;
    var_dump($node->textContent == $text);
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_ANY, array($cpca)));
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
    $tester->requestValues(connKeepAlive: true)->expectValue('FCGI_MPXS_CONNS', '0');
    function foo($ref, $alt) {
        unset($GLOBALS['a']);
        unset($GLOBALS['b']);
        $GLOBALS['a'] = 1;
        $GLOBALS['b'] = 2;
    
        $org_a = $GLOBALS['a'];
        $org_b = $GLOBALS['b'];
    
        if ($ref) {
            global $a, $b;
        } else {
            /* zval temp_var(NULL); // refcount = 1
             * a = temp_var[x] // refcount = 2
             */
            $a = NULL;
            $b = NULL;
        }
    
        var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
        echo "--\n";
        if ($alt) {
            $a = &$GLOBALS['a'];
            $b = &$GLOBALS['b'];
        } else {
            extract($GLOBALS, EXTR_REFS);
        }
        var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
        echo "--\n";
        $a = &$GLOBALS['a'];
        $b = &$GLOBALS['b'];
        var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
        echo "--\n";
        $GLOBALS['b'] = 3;
        var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
        echo "--\n";
        $a = 4;
        var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
        echo "--\n";
        $c = $b;
        var_dump($b, $GLOBALS['b'], $c);
        echo "--\n";
        $b = 'x';
        var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b'], $c);
        echo "--\n";
        var_dump($org_a, $org_b);
        echo "----";
        if ($ref) echo 'r';
        if ($alt) echo 'a';
        echo "\n";
    }
    foo(false, true);
    printf("[006] [%d] %s\n", $stmt->errno, $stmt->error);
    $dbh = @pg_connect($conn_str);
    pg_close($dbh);
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
    print_r($str_instead);
    $im = imagecreate(800, 800);
    imageline($im, 600, 200, 600, 700, IMG_COLOR_STYLED);
    function gen() {
        yield 0;
        yield from gen();
    }
    function bar($gen) {
        yield from $gen;
    }
    $gen = gen();
    $b = bar($gen);
    $b->rewind();
    var_dump(gc_collect_cycles());
    printf("printf test 18:%16b\n", 170);
    $inputs = array(
          'Century number' => "%C",
          'Month Date Year' => "%D",
          'Year with century' => "%G",
          'Year without century' => "%g",
    );
    foreach($inputs as $key =>$value) {
          echo "\n--$key--\n";
          var_dump( strftime($value) );
          var_dump( strftime($value, $timestamp) );
    }
    var_dump( strftime($value) );
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
    printf("[002] Expecting string on 32bit got %s/%s\n", gettype($id), var_export($id, true));
    $GLOBALS['b'] = 2;
    $b = &$GLOBALS['b'];
    $GLOBALS['b'] = 3;
    $a = 4;
    var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
    set_error_handler(function() {
    //    var_dump(func_get_args());
        DoesNotExists::$nope = true;
    }, E_ALL);
    $arr = array('a', 'b');
    $arr();
    class Foo {
        public $bar = [] {
            &get {
                echo __METHOD__ . "\n";
                return $this->bar;
            }
        }
    }
    $foo = new Foo;
    var_dump($foo);
    var_dump(gc_collect_cycles());
    $array1 = array(1, 2);
    $data_compare_func = 'compare_function';
    $key_compare_func = 'compare_function';
    $unset_var = 10;
    class classWithToString
    {
        public function __toString() {
            return "Class A object";
        }
    }
    class classWithoutToString
    {
    }
    $heredoc = <<<EOT
    hello world
    EOT;
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
    foreach($inputs as $key =>$value) {
        echo "\n--$key--\n";
        try {
            var_dump( array_uintersect_uassoc($array1, $value, $data_compare_func, $key_compare_func) );
        } catch (TypeError $e) {
            echo $e->getMessage(), "\n";
        }
    }
    var_dump( array_uintersect_uassoc($array1, $value, $data_compare_func, $key_compare_func) );
    class D {
        public string $prop;
    }
    $d = new D();
    var_dump($d);
    $cert = "file://" . __DIR__ . "/cert.crt";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_ANY, array($cpca), $utfl));
    debug_print_backtrace();
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
    function setStyleAndThickness($im, $color, $thickness)
    {
        $style = array();
        $i = 0;
        while ($i < 16 * $thickness) {
            $style[$i++] = $color;
        }
        while ($i < 20 * $thickness) {
            $style[$i++] = IMG_COLOR_TRANSPARENT;
        }
        while ($i < 28 * $thickness) {
            $style[$i++] = $color;
        }
        while ($i < 32 * $thickness) {
            $style[$i++] = IMG_COLOR_TRANSPARENT;
        }
        imagesetstyle($im, $style);
        imagesetthickness($im, $thickness);
    }
    $im = imagecreate(800, 800);
    $black = imagecolorallocate($im, 0, 0, 0);
    setStyleAndThickness($im, $black, 2);
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
    zerofill(11, $link, 'DECIMAL');
    php_cli_server_start(<<<PHP
    http_response_code(426);
    PHP
    );
    var_dump(version_compare('1.2', '2.1', '??'));
    function foo($e) {
        var_dump(__FUNCTION__."(): ".get_class($e)." thrown!");
    }
    var_dump(__FUNCTION__."(): ".get_class($e)." thrown!");
    var_dump(ob_get_contents());
    var_dump( range(1.0, 7.0, 0.0) );
    $sh = new SessionHandler;
    $sh->write("foo", "bar");
    function test($p12_contents, $password) {
        openssl_pkcs12_read($p12_contents, $cert_data, $password);
        openssl_error_string();
        var_dump(count($cert_data['extracerts']));
    }
    $pass = "qwerty";
    test($p12, $pass);
    $dom = new DOMDocument;
    $tag = $dom->appendChild($dom->createElement("style"));
    $tag->append("foo");
    $initialRequest = false;
    $y = 0;
    global $y;
    $y++;
    var_dump($initialRequest ? $x : $y);
    catch (Error $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
    printf("%s: %s\n", $e::class, $e->getMessage());
    for ($i = 0; $i < 10; $i++) {
        $zip = new ZipArchive();
        if ($zip->open($filename, ZipArchive::OVERWRITE) !== true) {
            exit("Unable to open the zip file");
        }
        $zip->addFromString("foo_{$i}.txt", 'foo bar foobar');
        $zip->close();
    }
    $zip = new ZipArchive();
    $zip->addFromString("foo_{$i}.txt", 'foo bar foobar');
    class Foo {
      public $bar = "bat";
    }
    $foo = new Foo;
    $bar = (int)$foo;
    var_dump($bar);
    $tempstring = "abcdefghjklmnpqrstuvwxyz";
    var_dump(sprintf("%s", $tempstring, $tempstring, $tempstring));
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug54028_2" . DIRECTORY_SEPARATOR;
    $dirs = array("a", "ソ", "ゾ", "şŞıİğĞ", "多国語", "王", "汚れて掘る");
    
    mkdir($prefix);
    foreach ($
    mkdir($prefix . $d);
    }
    
    $old_cwd = getcwd();
    forea
    $now = $prefix . $d;
        var_dump(chdir($now));
        var_dump($dn = realpath("."));
        var_dump($d == get_basename_with_cp($dn, 65001, false));
    }
    chdir($old_cwd);
    
    foreach (
    rmdir($prefix . $d);
    }
    rmdir($prefix);
    
    ?>
    ($prefix);
    
    ?>;
    var_dump(is_callable(array($this, 'static::testIsCallable2')));
    function t1()
    {
        ob_start("test");
        echo "Hello from t1 1 ";
            echo "Hello from t1 2 ";
            ob_end_flush();
    }
    t1();
    var_dump(json_decode('{"key":"value", "":"value"}', true));
    ob_start();
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
    var_dump( range('A', 'H', 0.0) );
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
    $child->testIsCallable2();
    $f = __DIR__."/data/test.txt.gz";
    $h = gzopen($f, 'r');
    gzclose($h);
    $trace_file = '/tmp/mysqli_debug_phpt.trace';
    unlink($trace_file);
    $sql = "SELECT 11111 as `1`, 22222 as `2`";
    $link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
    $res = $link->query($sql);
    $row = $res->fetch_array();
    var_dump($row);
    printf("printf test 11: 123456789012345678901234567890\n");
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
    $d0 = $prefix . "ソフト";
    $d1 =
    dir($d1);
    
    ;
    $key = str_repeat('abc', random_int(3, 3));
    var_dump(array_any([$key => 1], static fn () => true));
    #[\AllowDynamicProperties]
    class C {
        public $b;
        public function __construct() {
            $this->a = new Canary();
        }
    }
    $obj = new C();
    var_dump($obj);
    function test(int $nr) {
        for ($i = $nr; $i <= $nr + 1; $i++)
            var_dump($i);
    }
    for ($i = $nr; $i <= $nr + 1; $i++)
            var_dump($i);
    var_dump($i);
    $f = __DIR__."/data/test.txt.gz";
    $h = gzopen($f, 'r');
    gzclose($h);
    $db = getDbConnection();
    $sql = '
        SET NOCOUNT ON
        SELECT 0 AS [result]
    ';
    $stmt = $db->query($sql);
    var_dump($stmt->nextRowset());
    public function test(P $sibling) {
            $sibling->common();
        }
    $sibling->common();
    print_r($str_instead);
    $f = __DIR__."/data/test.txt.gz";
    $h = gzopen($f, 'r');
    var_dump(gzeof($h));
    #[\Deprecated(1234)]
    function test() {
    }
    test();
    function test(string $name, object $obj) {
        printf("# %s:\n", $name);
    
        var_dump($obj);
        var_dump($obj->a);
        var_dump($obj);
    }
    var_dump($obj);
    function __construct($wsdl) {
        parent::__construct($wsdl);
        $this->server = new SoapServer($wsdl);
        $this->server->addFunction('Test');
      }
    $this->server = new SoapServer($wsdl);
    $this->server->addFunction('Test');
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
    var_dump($obj->getTest());
    function display($res)
    {
    	echo implode("\n", array_map(fn($row) => implode("\t", $row), $res))."\n";
    }
    $res = [];
    display($res);
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
    $stmt = $pdo->prepare("select :1 n union all select :1 + 1 union all select :1 + 2 union all select :1 + 3");
    $stmt->execute([ 15 ]);
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
    fwrite($stream,"sdfgdfg");
    $ninety = M_PI /2.0;
    var_dump(sin($ninety));
    call_user_func("static::ok");
    var_dump(__METHOD__);
    var_dump(substr_count("", "a", 0, 0));
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
    printf("printf test 3:%f\n", 10.0/3);
    register_shutdown_function('ABC');
    call_user_func('bar','second try');
    setlocale(LC_ALL, 'de_DE', 'de-DE');
    bar();
    function bar() {
        boo();
    };
    set_error_handler('my_error_handler');
    mail("some.address.it.wont.ever.reach@lookup.and.try.to.find.this.host.name","subject","a", NULL);
    $now = new DateTimeImmutable();
    $simpleInterval = new DateInterval("P2D");
    $dateperiod = (new ReflectionClass(DatePeriod::class))->newInstanceWithoutConstructor();
    $dateperiod->__unserialize([
    		'start' => $now, 'end' => $now, 'current' => $now, 'interval' => $simpleInterval,
    		'recurrences' => 2, 'include_start_date' => true, 'include_end_date' => true,
    	]);
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
    printf("[%03d] UPDATE failed, [%d] %s\n",
                    $offset, mysqli_errno($link), mysqli_error($link));
    $pdo = MySQLPDOTest::factory();
    $pdo->query('INSERT INTO bug79596 VALUES(4.9)');
    var_dump(error_reporting());
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
    var_dump(asort($temp_array) );
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
    class string1 {
      public function __toString() {
        return "Object";
      }
    }
    $obj = new string1;
    var_dump( rtrim($obj, "tc") );
    $db = MySQLPDOTest::factory();
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    setlocale(LC_ALL, "C");
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
    zerofill(6, $link, 'INTEGER');
    $fn = "bug71263.bz2";
    $r = fopen($fn, "r");
    $s = fread($r, 100);
    var_dump($s);
    class Test implements ArrayAccess {
        public function offsetExists($x): bool { $GLOBALS["obj"] = 24; return true; }
        public function offsetGet($x): mixed { var_dump($x); return 42; }
        public function offsetSet($x, $y): void { }
        public function offsetUnset($x): void { }
    }
    $obj = new Test;
    var_dump($obj);
    $ch = curl_init("https://localhost/username");
    curl_setopt($ch, CURLOPT_USERNAME, null);
    $inputs = array(
          'Century number' => "%C",
          'Month Date Year' => "%D",
          'Year with century' => "%G",
          'Year without century' => "%g",
    );
    foreach($inputs as $key =>$value) {
          echo "\n--$key--\n";
          var_dump( strftime($value) );
          var_dump( strftime($value, $timestamp) );
    }
    var_dump( strftime($value) );
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_TIMESTAMP_SIGN, array($cpca), $utfl));
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
    zerofill(6, $link, 'INTEGER');
    mail("some.address.it.wont.ever.reach@lookup.and.try.to.find.this.host.name","subject","a", "");
    function byReference( & $array){
        foreach($array as &$item){
            $item['nanana'] = 'batman';
            $item['superhero'] = 'robin';
        }
    }
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
    byReference($array);
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_SIGN));
    $dfp = opendir ( __DIR__ );
    closedir($dfp);
    var_dump ( $vars );
    catch (Error $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
    catch (Error $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
    printf("%s: %s\n", $e::class, $e->getMessage());
    var_dump(class_exists("TestClass", true));
    php_cli_server_start(file_get_contents(__DIR__.'/bug64433_srv.inc'));
    session_start();
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
    $reflector = new ReflectionClass(C::class);
    $obj = $reflector->newLazyGhost(function () {
        throw new \Exception('initializer');
    });
    test('Ghost', $obj);
    var_dump(pack('x') === "\0");
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
    var_dump(($bug_gh16013_callback_struct->return_int16)(-10000));
    $client = new SoapClient(__DIR__."/bug29061.wsdl", array("exceptions"=>0));
    $client->getQuote("ibm");
    $fiber = new Fiber(function (): void {
        $self = Fiber::getCurrent();
        $self->resume();
    });
    $fiber->start();
    debug_print_backtrace();
    var_dump(preg_replace_callback_array([], ''));
    var_dump(filter_var("", FILTER_SANITIZE_ENCODED));
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
    $ai->current();
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
    var_dump($body->lookupNamespaceURI(NULL));
    var_dump(new Foo);
    $heredoc_str = <<<EOD
    %
    #$*&
    text & @()
    EOD;
    $str_arr = array(
      //double quoted strings
      "%",
      "#$*",
      "text & @()",
    
      //single quoted strings
      '%',
      '#$*',
      'text & @()',
    
      //heredoc string
      $heredoc_str
    );
    $from = "%#$*&@()";
    $to = "specials";
    for($index = 0; $index < count($str_arr); $index++) {
      echo "-- Iteration $count --\n";
    
      $str = $str_arr[$index];  //getting the array element in 'str' variable
    
      //strtr() call in three args syntax form
      var_dump( strtr($str, $from, $to) );
    
      //strtr() call in two args syntax form
      var_dump( strtr($str, $replace_pairs) );
    
      $count++;
    }
    $str = $str_arr[$index];
    var_dump( strtr($str, $from, $to) );
    var_dump( range(1.0, 7.0, 6.5) );
    $GLOBALS['b'] = 2;
    $a = NULL;
    $b = NULL;
    var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
    printf("printf test 11: 123456789012345678901234567890\n");
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_OCSP_HELPER));
    class di extends DateInterval {
        public $unit = 1;
    }
    $I = new di('P10D');
    print_r($I);
    $textascii = 'This is an "example" of using DOM splitText';
    rt = 30;
    $le
    gth = 3;
    
    $d
     = new DOMDocument('1.0', 'UTF-8');
    $no
    e = $dom->createTextNode($textascii);
    $do
    ched = $node->splitText($start);
    $ma
    ched->splitText($length);
    pri;
    $dom = Dom\HTMLDocument::createEmpty();
    var_dump($dom->lookupNamespaceURI("a"));
    class TrampolineTest {
        public function __call(string $name, array $arguments) {
            echo 'Trampoline for ', $name, PHP_EOL;
        }
    }
    $o = new TrampolineTest();
    $callback1 = [$o, 'trampoline1'];
    spl_autoload_register($callback1);
    var_dump( strtok("\0") );
    #[\Deprecated(1234)]
    function test() {
    }
    test();
    $bert = "file://" . __DIR__ . "/bug41033.pem";
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_CLIENT));
    var_dump(error_reporting());
    class P {
        protected function common() {
            throw new Exception('Unreachable');
        }
    }
    class A extends P {
        public function test(P $sibling) {
            $sibling->common();
        }
    }
    class C extends P {
        use T;
    }
    $a = new A();
    $a->test(new C());
    $regex = '/[a-z]/';
    $subject = 'string';
    var_dump(preg_match_all($regex, $subject, 'test'));
    $key = str_repeat('abc', random_int(3, 3));
    var_dump(array_all([$key => 1], static fn () => false));
    print_r($str_instead);
    printf("printf test 10: 123456789012345\n");
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
    $tester->terminate();
    function test(string $input) {
        var_dump(filter_var($input, FILTER_VALIDATE_URL));
    }
    var_dump(filter_var($input, FILTER_VALIDATE_URL));
    $host = "localhost\0.example.com";
    var_dump(gethostbyname($host));
    $bert = "file://" . __DIR__ . "/bug41033.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_ANY, array($cpca), $utfl));
    $f = __DIR__."/data/test.txt.gz";
    $h = gzopen($f, 'r');
    var_dump(gzeof($h));
    $headers1 = exif_read_data(__DIR__ . '/bug64739.jpg');
    var_dump($headers1['Author'][0] === '?');
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
    $list = [];
    asort($list);
    var_dump(pack('x') === "\0");
    var_dump(scandir(''));
    $url = ""
        . "php://filter/read="
        . urlencode("convert.iconv.ISO-8859-15/UTF-8")
        . '|' . urlencode("string.rot13")
        . '|' . urlencode("string.rot13")
        . '|' . urlencode("convert.iconv.UTF-8/ISO-8859-15")
        . "/resource=data://text/plain,foob%E2r";
    var_dump(urlencode(file_get_contents($url)));
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
    $dbh = @pg_connect($conn_str);
    $res = pg_query($dbh, 'SELECT test_notice()');
    var_dump($res);
    $cert = "file://" . __DIR__ . "/cert.crt";
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_CRL_SIGN));
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_TIMESTAMP_SIGN, array($cpca), $utfl));
    $priorityQueue = new SplPriorityQueue();
    $priorityQueue->setExtractFlags(SplPriorityQueue::EXTR_DATA);
    class SomeClass2 implements JsonSerializable {
        public function jsonSerialize(): mixed {
            return [(array)$this];
        }
    }
    $class = new SomeClass2;
    $arr = [$class];
    var_dump(json_encode($arr));
    var_dump(substr_count("aaa", "a", 0, 0));
    restore_exception_handler();
    $xmlString = "<root><a><b>1</b><b>2</b><b>3</b></a></root>";
    $xml = simplexml_load_string($xmlString);
    $nodes = $xml->a->b;
    function test($nodes, $name, $callable) {
        echo "--- $name ---\n";
        foreach ($nodes as $nodeData) {
            echo "nodeData: " . $nodeData . "\n";
            $callable($nodes);
        }
    }
    test($nodes, "children", fn ($n) => $n->children());
    ini_set("intl.error_level", E_WARNING);
    $list = new SplDoublyLinkedList();
    $list->push('o');
    $strings_with_nulls = array(
                       "\0",
                       '\0',
                               "hello\0world",
                               "\0hel\0lo",
                               "hello\0",
                               "\0\0hello\tworld\0\0",
                               "\\0he\0llo\\0",
                               'hello\0\0'
                               );
    foreach( $strings_with_nulls as $string )  {
      echo "\n--- Iteration $counter ---\n";
      var_dump( strtok($string, "\0") );
      for($count = 1; $count <= 5; $count++)  {
        var_dump( strtok("\0") );
      }
      $counter++;
    }
    var_dump( strtok($string, "\0") );
    $dom = new DOMDocument;
    $dom->getElementById('x')->remove();
    var_dump(http_get_last_response_headers());
    $a=glob("./*.jpeg");
    var_dump($a);
    $dt = new DateTime('@1604219400');
    $dt->setTimezone(new DateTimeZone('UTC'));
    $dbh = @pg_connect($conn_str);
    $res = pg_query($dbh, 'SELECT test_notice()');
    $row = pg_fetch_row($res, 0);
    var_dump($row);
    printf("printf test 12:%5.2f\n", -12.34);
    ob_start("test");
    #[\AllowDynamicProperties]
    class C {
        public $b;
        public function __construct() {
            $this->a = new Canary();
        }
    }
    $obj = new C();
    var_dump($obj->a);
    function foo($ref, $alt) {
        unset($GLOBALS['a']);
        unset($GLOBALS['b']);
        $GLOBALS['a'] = 1;
        $GLOBALS['b'] = 2;
    
        $org_a = $GLOBALS['a'];
        $org_b = $GLOBALS['b'];
    
        if ($ref) {
            global $a, $b;
        } else {
            /* zval temp_var(NULL); // refcount = 1
             * a = temp_var[x] // refcount = 2
             */
            $a = NULL;
            $b = NULL;
        }
    
        var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
        echo "--\n";
        if ($alt) {
            $a = &$GLOBALS['a'];
            $b = &$GLOBALS['b'];
        } else {
            extract($GLOBALS, EXTR_REFS);
        }
        var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
        echo "--\n";
        $a = &$GLOBALS['a'];
        $b = &$GLOBALS['b'];
        var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
        echo "--\n";
        $GLOBALS['b'] = 3;
        var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
        echo "--\n";
        $a = 4;
        var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
        echo "--\n";
        $c = $b;
        var_dump($b, $GLOBALS['b'], $c);
        echo "--\n";
        $b = 'x';
        var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b'], $c);
        echo "--\n";
        var_dump($org_a, $org_b);
        echo "----";
        if ($ref) echo 'r';
        if ($alt) echo 'a';
        echo "\n";
    }
    foo(true, false);
    function byVal($arg) {
        var_dump($arg);
    }
    function byRef(&$arg) {
        var_dump($arg);
    }
    var_dump($arg);
    gc_collect_cycles();
    $str = 'Hello World';
    $shm_key = ftok(__FILE__, 'p');
    $shm_id1 = shmop_open($shm_key, 'c', 0644, strlen($str));
    var_dump($shm_id1);
    $c = "assert";
    $c(false);
    $f = __DIR__."/data/test.txt.gz";
    $h = gzopen($f, 'r');
    var_dump(gzread($h, 5));
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
    var_dump($rit->valid());
    var_dump( range('A', 'H', 0.0) );
    $cert = "file://" . __DIR__ . "/cert.crt";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SMIME_SIGN, array($cpca)));
    $f = __DIR__."/data/test.txt.gz";
    $h = gzopen($f, 'r');
    var_dump(gzeof($h));
    $context = stream_context_create(['dummy' => ['foo' => 'bar']]);
    file_get_contents('dummy://foo', false, $context);
    $list = new SplDoublyLinkedList();
    $list->push('f');
    $db = MySQLPDOTest::factory();
    $db->exec('INSERT INTO test_33689 VALUES(1)');
    var_dump(gc_collect_cycles());
    ini_set("intl.error_level", E_WARNING);
    var_dump(soundex("Gauss"));
    $r = new ResourceBundle( 'en_US', BUNDLE );
    printf( "testint: %d\n", $r['testint'] );
    class MySessionHandler implements SessionHandlerInterface {
        function open($save_path, $session_name): bool {
            return true;
        }
    
        function close(): bool {
            die("close: goodbye cruel world\n");
        }
    
        function read($id): string|false {
            return '';
        }
    
        function write($id, $session_data): bool {
            die("write: goodbye cruel world\n");
        }
    
        function destroy($id): bool {
            return true;
        }
    
        function gc($maxlifetime): int {
            return 1;
        }
    }
    session_set_save_handler(new MySessionHandler());
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
    var_dump($body->lookupNamespaceURI(""));
    class TrampolineTest {
        public function __call(string $name, array $arguments) {
            echo 'Trampoline for ', $name, PHP_EOL;
        }
    }
    $o = new TrampolineTest();
    $callback2 = [$o, 'trampoline2'];
    spl_autoload_register($callback2);
    var_dump(__METHOD__);
    final class A
    {
        public string $a;
    
        public static function fromArray(array $props): self
        {
            $me = new static;
            foreach ($props as $k => &$v) {
                $me->{$k} = &$v;  # try to remove &
            }
            return $me;
        }
    
        public function __get($name)
        {
            throw new \LogicException("Property '$name' is not defined.");
        }
    }
    var_dump(A::fromArray(['a' => 'foo']));
    $outfile = tempnam(sys_get_temp_dir(), "ssl");
    $contentfile = tempnam(sys_get_temp_dir(), "ssl");
    $pkcsfile = __DIR__ . "/openssl_pkcs7_verify__pkcsfile.tmp";
    $eml = __DIR__ . "/signed.eml";
    $cainfo = array();
    var_dump(openssl_pkcs7_verify($eml, PKCS7_NOVERIFY, $outfile, $cainfo, $outfile, $contentfile, $pkcsfile));
    md5('foo');
    $db = MySQLPDOTest::factory();
    $stmt = $db->prepare('SELECT * FROM test_33689');
    $tmp = $stmt->getColumnMeta(0);
    print_r($tmp);
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_CLIENT, array($cpca), $utfl));
    var_dump($row);
    var_dump($http_response_header);
    var_dump(array_map(assert(...), [true, true, false]));
    printf("printf test 27:%3\$d %d %d\n", 1, 2, 3);
    $pem_cert = '
    -----BEGIN CERTIFICATE-----
    MIIGFDCCBPygAwIBAgIDKCHVMA0GCSqGSIb3DQEBBQUAMIHcMQswCQYDVQQGEwJV
    UzEQMA4GA1UECBMHQXJpem9uYTETMBEGA1UEBxMKU2NvdHRzZGFsZTElMCMGA1UE
    ChMcU3RhcmZpZWxkIFRlY2hub2xvZ2llcywgSW5jLjE5MDcGA1UECxMwaHR0cDov
    L2NlcnRpZmljYXRlcy5zdGFyZmllbGR0ZWNoLmNvbS9yZXBvc2l0b3J5MTEwLwYD
    VQQDEyhTdGFyZmllbGQgU2VjdXJlIENlcnRpZmljYXRpb24gQXV0aG9yaXR5MREw
    DwYDVQQFEwgxMDY4ODQzNTAcFwsxNDAxMDcwMDAwWhcNMTYwNDAxMDcwMDAwWjCB
    6zETMBEGCysGAQQBgjc8AgEDEwJVUzEYMBYGCysGAQQBgjc8AgECEwdBcml6b25h
    MR0wGwYDVQQPExRQcml2YXRlIE9yZ2FuaXphdGlvbjEUMBIGA1UEBRMLUi0xNzI0
    NzQxLTYxCzAJBgNVBAYTAlVTMRAwDgYDVQQIEwdBcml6b25hMRMwEQYDVQQHEwpT
    Y290dHNkYWxlMSQwIgYDVQQKExtTdGFyZmllbGQgVGVjaG5vbG9naWVzLCBMTEMx
    KzApBgNVBAMTInZhbGlkLnNmaS5jYXRlc3Quc3RhcmZpZWxkdGVjaC5jb20wggEi
    MA0GCSqGSIb3DQEBAQUAA4IBDwAwggEKAoIBAQCt1LHQOza9tkKxwGL+/yKi/Fe5
    HM0sjvcM4ic1XVrvpewa4P/04IzGSjIGO3CXaSArxQMSzsTt2dcO9tSJ1Zk8c9NZ
    XM8eVqx92iTMEf9OQcubWpzWmrPc3TAFhbVnfEmCptsXEgtxbAIbntrNeDk/hBPd
    l4DYFYRdm3ZTk4JMIf/quDZe5Oti53J0UsxWXSSoqKyPNdb671Q+OTQfSDj7kVF4
    +Ri3FIeAV16d2UnpBW1bgNqA5yITRskHE4bX98HDNHUTHioHpgA+fXfejWkGB/0F
    QN4HbZcysYHhf1L5cWBtz9w5J00YmjM5fzWvTc3UUF9ou7m7JE4aqEbNOWb9AgMB
    AAGjggHOMIIByjAMBgNVHRMBAf8EAjAAMA4GA1UdDwEB/wQEAwIFoDAdBgNVHSUE
    FjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwLQYDVR0RBCYwJIIidmFsaWQuc2ZpLmNh
    dGVzdC5zdGFyZmllbGR0ZWNoLmNvbTAdBgNVHQ4EFgQUcO+QEqZcHphPW9szww9t
    y+1AGmQwHwYDVR0jBBgwFoAUSUtSJ9EbvPKhIWpie1FCeorX1VYwOAYDVR0fBDEw
    LzAtoCugKYYnaHR0cDovL2NybC5zdGFyZmllbGR0ZWNoLmNvbS9zZnMzLTAuY3Js
    MIGNBggrBgEFBQcBAQSBgDB+MCoGCCsGAQUFBzABhh5odHRwOi8vb2NzcC5zdGFy
    ZmllbGR0ZWNoLmNvbS8wUAYIKwYBBQUHMAKGRGh0dHA6Ly9jZXJ0aWZpY2F0ZXMu
    c3RhcmZpZWxkdGVjaC5jb20vcmVwb3NpdG9yeS9zZl9pbnRlcm1lZGlhdGUuY3J0
    MFIGA1UdIARLMEkwRwYLYIZIAYb9bgEHFwMwODA2BggrBgEFBQcCARYqaHR0cDov
    L2NlcnRzLnN0YXJmaWVsZHRlY2guY29tL3JlcG9zaXRvcnkvMA0GCSqGSIb3DQEB
    BQUAA4IBAQAViYkLUjQkxWRmZl4DutL0/9/wJSURcJ1qunLP+TImJFp0A9RE/MNK
    ZOmQoAEoH6hMg7FL4etkvTcnruTdcx+3mvqYiECUiUEx6pkx3dmkYgZACEuk2nfy
    J0MkV/zwzqmI8aV+kunpOQv93aePZbrBgaAzkE8jDlExtd7c4pE7JF40jxmvDwjZ
    HwpyNDULreGtFBij7JcWJCfihM3uetqrao0kOoeih1PQyJXtz2RldhFYs6Jdk3IL
    Yv+84t5UMO+aS9nVBXIcbgaGjIMZjHDgR/tE9FKFB66k8UTDzAwwEs38VV24zx6h
    lOzTF7xAUxmPUnNb2teatMf2Rmj0fs+d
    -----END CERTIFICATE-----
    ';
    var_dump(openssl_x509_parse($pem_cert));
    class TrampolineTest {
        public function __call(string $name, array $arguments) {
            echo 'Trampoline for ', $name, PHP_EOL;
        }
    }
    $o = new TrampolineTest();
    $callback2 = [$o, 'trampoline2'];
    spl_autoload_register($callback2);
    $array_test = array("a", "b", "d", 7, "u" => "U", -4, "-.008" => "neg.008");
    var_dump( reset($array_test) );
    session_start();
    putenv('REDIR_TEST_DIR='.__DIR__ . '/../../pdo/tests/');
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $phar = new Phar($fname);
    $phar->setDefaultStub('my/custom/thingy.php', 'the/web.php');
    var_dump(soundex("Knuth")       == soundex("Kant"));
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
    $stmt = $pdo->prepare("select :1 n union all select :1 + 1 union all select :1 + 2 union all select :1 + 3");
    $stmt->execute([ 0 ]);
    $oIntlDateFormatter = new IntlDateFormatter("en_GB");
    var_dump($oIntlDateFormatter->parseToCalendar('America/Los_Angeles', $offset2));
    ob_start();
    $originalEnvelopeData = "any string with \x1a is cut at this point.";
    $tmpFileIn = tempnam(sys_get_temp_dir(), 'test');
    var_dump(filesize($tmpFileIn) === strlen($originalEnvelopeData));
    $list = new SplDoublyLinkedList();
    $list->push('f');
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
    var_dump(unserialize(serialize($obj)));
    ob_clean();
    class D {
        public string $prop;
    }
    $d = new D();
    var_dump($d);
    var_dump(c1::$a2);
    $im = imagecreate(800, 800);
    imageline($im, 100, 200, 600, 200, IMG_COLOR_STYLED);
    function test(string $input) {
        var_dump(filter_var($input, FILTER_VALIDATE_URL));
    }
    test("http://t[est@127.0.0.1");
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
    function test(string $input) {
        var_dump(filter_var($input, FILTER_VALIDATE_URL));
    }
    test("http://test[@2001:db8:3333:4444:5555:6666:1.2.3.4]");
    var_dump(__METHOD__);
    $cert = "-----BEGIN CERTIFICATE-----
    MIIDXDCCAkSgAwIBAgIKq/f5U3FzthdKUzANBgkqhkiG9w0BAQUFADBcMRIwEAYD
    VQQDEwlzZXRhcGRmLWExCTAHBgNVBAoTADEJMAcGA1UECxMAMSMwIQYJKoZIhvcN
    AQkBFhRzdXBwb3J0QHNldGFzaWduLmNvbTELMAkGA1UEBhMCREUwHhcNMTUwOTA4
    MDkzNDExWhcNMjAwOTA4MDkzNDExWjBcMRIwEAYDVQQDEwlzZXRhcGRmLWExCTAH
    BgNVBAoTADEJMAcGA1UECxMAMSMwIQYJKoZIhvcNAQkBFhRzdXBwb3J0QHNldGFz
    aWduLmNvbTELMAkGA1UEBhMCREUwggEiMA0GCSqGSIb3DQEBAQUAA4IBDwAwggEK
    AoIBAQCkmTLvUIYfqAKC1CHVgABlemrFIVRm4JGeB0jIGofyrm3yVwR4YcK0eUmt
    /0nbFfsFsU0/C9dXKZYD42t5YpLFsj666Z1EoU1CfSIW2bf0HaWVJ+oNT5twS3dv
    RTzAcnPM44GxO4y6GUW6un0/bT/MZbFKbb3NI1L0mwY7EoqUXR68XxuHqWETaslm
    Sbp1XvbLsJjgV9X3ihi7JC7A9kEzrKh+RBsXEXwlSv5JO2TUdwq9P4EbjqvgiaV1
    vFNAArioX5pIUIm9ahAm8d7jjW6DFfV798rTzaQ3GJs0yC3UD6xhmbTbdC/D9Pot
    8RGu89Fx6E+O5j4LwGH4kiYjgvYZAgMBAAGjIDAeMA8GCSqGSIb3LwEBCgQCBQAw
    CwYDVR0PBAQDAgOYMA0GCSqGSIb3DQEBBQUAA4IBAQBCA8iXz7zxAmCWNZ0faiLm
    aKw8u2PUq+EPKrGKc9Q70Ksw/e/EHvWrghFzmu5MOZRn/QIWq++sbbc8eOiaRDE8
    lWCW596FLW4habXKw0sjDNcyEBArPgDp17O6NgHqI2U1KL1P2Y40e0YH2BWxNS+f
    pmWZekjiC6jfId2JGsyPZUTX4USwthG4dFX0/BWYg+K7kXvQzMobes2NxW3Iqn8h
    FUNgraCzlQMSfE2gwAMSUXTJubUGorj4LFYSiLIIJvf6KlmuR5uOIi5lSjSeZf5E
    FLEHVhrz3o2icUeyb1K1BTAQRZ/H3GZ0QpgqSK5vmuV9C+rzezQMoy4/8UUnNPMt
    -----END CERTIFICATE-----
    ";
    $pkey = "-----BEGIN PRIVATE KEY-----
    MIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQCkmTLvUIYfqAKC
    1CHVgABlemrFIVRm4JGeB0jIGofyrm3yVwR4YcK0eUmt/0nbFfsFsU0/C9dXKZYD
    42t5YpLFsj666Z1EoU1CfSIW2bf0HaWVJ+oNT5twS3dvRTzAcnPM44GxO4y6GUW6
    un0/bT/MZbFKbb3NI1L0mwY7EoqUXR68XxuHqWETaslmSbp1XvbLsJjgV9X3ihi7
    JC7A9kEzrKh+RBsXEXwlSv5JO2TUdwq9P4EbjqvgiaV1vFNAArioX5pIUIm9ahAm
    8d7jjW6DFfV798rTzaQ3GJs0yC3UD6xhmbTbdC/D9Pot8RGu89Fx6E+O5j4LwGH4
    kiYjgvYZAgMBAAECggEABO4JOGF4KOvQanB11HYNXPy4BLA5Pc0RU3M6pvKjen1m
    sdzRF5Vu/laJIkbchI0xm+Op8X7Wa+gFFBf8RLIS/QyYBCNh2Fe/74M9sYNDFxLJ
    vjBIOm6VVF1QRhMD7SwoY303adJjpkHCRMPX4z3PjLzJfPYROpsJnaWkf8GwCJ4+
    kufOhYcE8ekuLX7EzXFU74Uo0OnMEhMJgiAjlHhC21YLkgLoGq45sdktVgvD6sds
    7BcmH6oUCDCJ8wxUVM1+Ks1D3vKHfeAhCFHvj9M/lf5OWylhmQh4CQf+NMDNsAc6
    mXNIzUvZEgs/PJpd3SymHchf60m6faJtGv43GsdsgQKBgQDUx8t649O/vGRI26t4
    4XrzVC2w5271UlhFaRiH03BrV+pECVoH4bw+ZIUuGke2xe+LrNkhMNJSGcbB0WDa
    Jes+4Gf++AuSXRvMo+xHenfgUWQqYHJPkh5q6gknZ2YDfikFNLdqApXvp0m+FaVP
    +F/2HMjQfTITQgkAiEn45s4agQKBgQDGCAZkIUcdyXQTplLE0Zx1/uiTBrQGyzsb
    cDgAQIHt19wIRjoGOFatAj6TQ5gUj9Remn12v6d5Wi02i7hlu8V6O1VXLGqqeQ27
    0MHBXzrFBVljOz96D7VP5Xx0DB1cGMbtg5ivjd91OUVrwC7fbXE9sfOI1FqlTb7p
    6xi9Wl+fmQKBgGdzR/vUfqPOvVcq7gBUaAmb2KcUrj65rU753MJUy2h1EuHHRi1k
    07fl+VZD0rALJf7bp6laajcebyLWYGdPXkNwqT8ua7naaOSiogLSiSvXhoKP56PG
    H+HNLWwp+lAia2Erky0IWstsow62yWvLDyTCM+QhqlHwnh3TJVvNI1GBAoGAUl+y
    MOJ6z5Ql2aqc0UwT1i1Tlxz5s73D93Tlho1Ovp3E5Bg6OK4kt9CwMNe0IhF2GGgQ
    +l1cj6kIF6Fk8cR6r46QwDM0p3a1VMPQZNx0+NFxzkot7FsuY26lJyyG5fFUhiXw
    VE4ifoN1Mg3+MWg3657jG66hihNd77WgU9uM3TkCgYEAypuvVrfFrrtXnbEUcBHq
    mguKumn9miD9DPb6gi8ZaKOddGzw+qFPukiqi7rM3oRMg02evfK/VQC87Gmev663
    RV9sQOlB9gNlMOOw/0R3ABEWDoSRCcrLhb6Z5Y72WVnZvpTPO0cDw2i1hyaEM6d+
    2WR7c6FhRCLxG0DObEOfiO0=
    -----END PRIVATE KEY-----
    ";
    $tmpFileOut = tempnam(sys_get_temp_dir(), 'test');
    $tmpFileOut2 = tempnam(sys_get_temp_dir(), 'test');
    openssl_pkcs7_decrypt($tmpFileOut, $tmpFileOut2, $cert, $pkey);
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
     ($dirs as $d) {
       
    dirs as $d) {
    ;
    $r = new ResourceBundle( 'en_US', BUNDLE );
    printf( "testbin: %s\n", bin2hex($r['testbin']) );
    $a[10] = "42";
    $i = "010";
    var_dump($a[$i], isset($a[$i]));
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
    $dom = Dom\HTMLDocument::createEmpty();
    $container = $dom->appendChild(createElement($dom, "container"));
    $container->appendChild(createElement($dom, "foo:HTML", "6"));
    function setStyleAndThickness($im, $color, $thickness)
    {
        $style = array();
        $i = 0;
        while ($i < 16 * $thickness) {
            $style[$i++] = $color;
        }
        while ($i < 20 * $thickness) {
            $style[$i++] = IMG_COLOR_TRANSPARENT;
        }
        while ($i < 28 * $thickness) {
            $style[$i++] = $color;
        }
        while ($i < 32 * $thickness) {
            $style[$i++] = IMG_COLOR_TRANSPARENT;
        }
        imagesetstyle($im, $style);
        imagesetthickness($im, $thickness);
    }
    $im = imagecreate(800, 800);
    $black = imagecolorallocate($im, 0, 0, 0);
    setStyleAndThickness($im, $black, 1);
    class TestSoapClient extends SoapClient
    {
        public function __doRequest($req, $loc, $act, $ver, $one_way = 0): string
        {
            return <<<XML
    <?xml version="1.0" encoding="UTF-8"?>
    <SOAP-ENV:Envelope
      xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/"
      xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
      xmlns:ns="urn:ebay:api:PayPalAPI">
      <SOAP-ENV:Body id="_0">
        <GetExpressCheckoutDetailsResponse xmlns="urn:ebay:api:PayPalAPI">
          <Timestamp>2008-06-23T14:51:08Z</Timestamp>
          <Ack>Success</Ack>
          <CorrelationID>ae013a0ccdf13</CorrelationID>
          <Version>50.000000</Version>
          <Build>588340</Build>
          <GetExpressCheckoutDetailsResponseDetails xsi:type="ns:GetExpressCheckoutDetailsResponseDetailsType">
            <Token>EC-11Y75137T2399952C</Token>
            <PayerInfo>
              <Payer>example@example.com</Payer>
              <PayerID>MU82WA43YXM9C</PayerID>
              <PayerStatus>verified</PayerStatus>
            </PayerInfo>
          </GetExpressCheckoutDetailsResponseDetails>
        </GetExpressCheckoutDetailsResponse>
      </SOAP-ENV:Body>
    </SOAP-ENV:Envelope>
    XML;
        }
    }
    $client = new TestSoapClient(__DIR__.'/bug44882.wsdl');
    print_r($client->GetExpressCheckoutDetails());
    var_dump(get_html_translation_table(NAN, 0, "UTF-8") > 0);
    var_dump(filter_var("?><!@#$%^&*()}{~Qwertyuilfdsasdfgmnbvcxcvbn", FILTER_SANITIZE_ENCODED, FILTER_FLAG_ENCODE_HIGH));
    $list = new SplDoublyLinkedList();
    $list->setIteratorMode(SplDoublyLinkedList::IT_MODE_LIFO);
    $log_file = tempnam(sys_get_temp_dir(), 'php-curl-CURLOPT_WRITEFUNCTION-trampoline');
    $fp = fopen($log_file, 'w+');
    fwrite($fp, "test");
    $priorityQueue = new SplPriorityQueue();
    $priorityQueue->setExtractFlags(SplPriorityQueue::EXTR_PRIORITY);
    date_default_timezone_set("Asia/Calcutta");
    class bug8318 extends \SplFileObject
    {
        public function __construct()
        {
        }
    
        public function fpassthru(): int
        {
            return 0;
        }
    }
    $cl = new bug8318;
    $cl->fpassthru();
    $array_object = array();
    var_dump($array_object);
    $fd = fopen('php://memory','w');
    fwrite($fd, "foo");
    checktimeout($s, 500);
    session_set_save_handler(new \SessionHandler(), true);
    var_dump ( rtrim("rtrim test0123456789", "0..9") );
    $this->show();
    $interval = new DateInterval('P1D');
    $dt = new DateTime('first day of January 2011');
    $dt->sub($interval);
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_TIMESTAMP_SIGN, array($cpca)));
    printf("printf test 29:%2\$-2d %1\$2d\n", 1, 2);
    (function() {
    	try {
    		foo(); // Error
    	} catch (\Exception $e) {
    		var_dump($e);
    	} finally {
    		print "handle first\n";
    		return "ok";
    	}
    })();
    function foo() {
      $i = 1;
      $x = 2;
      var_dump($i=$x);
      return $i;
    }
    var_dump(foo());
    $db = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
    $stmt = $db->prepare("CALL testSp()");
    $stmt->execute();
    set_error_handler(function (int $errno, string $errstring): never {
        throw new Exception($errstring);
    });
    class Box {
        public ?Test $value;
    }
    global $box;
    function test($box) {
        var_dump($box->value = new Test);
    }
    $box = new Box();
    test($box);
    $dt = DateTime::createFromFormat('Y-m-d|', '2011-02-02');
    var_dump($dt);
    $array_test = array("a", "b", "d", 7, "u" => "U", -4, "-.008" => "neg.008");
    var_dump( end($array_test) );
    $priorityQueue = new SplPriorityQueue();
    var_dump($priorityQueue->getExtractFlags());
    $curl = curl_init("http://www.google.com");
    curl_exec($curl);
    set_error_handler('test_error_handler');
    $dom = Dom\HTMLDocument::createEmpty();
    $container = $dom->appendChild(createElement($dom, "container"));
    $container->appendChild(createElementNS($dom, "http://www.w3.org/1999/xhtml", "bar:html", "9"));
    $array_test = array("a", "b", "d", 7, "u" => "U", -4, "-.008" => "neg.008");
    var_dump( reset($array_test) );
    $filename = __DIR__ . '/bug77432.phar';
    unlink($filename);
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
    printf("[%03d] SELECT failed, [%d] %s\n",
                    $offset, mysqli_errno($link), mysqli_error($link));
    var_dump(__METHOD__);
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
    $bug_gh16013_callback_struct->return_uint32 = function($val) use($ffi) {
        $cdata = $ffi->new('uint32_t');
        $cdata->cdata = $val;
        return $cdata;
    };
    var_dump(($bug_gh16013_callback_struct->return_uint32)(100000));
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
    $headers2 = exif_read_data(__DIR__ . '/bug64739.jpg');
    var_dump($headers2['Author']);
    $doc = new \DOMDocument();
    $target = $doc->documentElement->lastChild;
    var_dump($target);
    printf("printf test 18:%16b\n", 170);
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
    $d0 = $prefix . "ソフト";
    $d1 =
    dir($d1);
    
    ;
    $client = new SoapClient(__DIR__."/bug29061.wsdl", array("exceptions"=>0));
    $client->getQuote("ibm");
    $priorityQueue = new SplPriorityQueue();
    var_dump($priorityQueue->getExtractFlags());
    pcntl_sigwaitinfo($a,$a);
    function test(int $nr) {
        for ($i = $nr; $i <= $nr + 1; $i++)
            var_dump($i);
    }
    for ($i = $nr; $i <= $nr + 1; $i++)
            var_dump($i);
    var_dump($i);
    $fn = "bug71263.bz2";
    $r = fopen($fn, "r");
    fclose($r);
    $test = function (#[SensitiveParameter] $sensitive)
    {
        debug_print_backtrace();
        var_dump(debug_backtrace());
        var_dump((new Exception)->getTrace());
    };
    $test('sensitive');
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_ANY, array($cpca), $utfl));
    ob_end_flush();
    $im = imagecreatefromgd2(__DIR__ . DIRECTORY_SEPARATOR . 'bug73161.gd2');
    var_dump($im);
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
    $meta_res = $stmt->result_metadata();
    $field = $meta_res->fetch_field();
    printf("Name         : %s\n", $field->name);
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_ANY, array($cpca), $utfl));
    $plain = "The quick brown fox jumps over the lazy dog.";
    $fn = "bug71263.bz2";
    $compressed = (string) bzcompress($plain);
    $compressed = substr($compressed, 0, strlen($compressed) - 20);
    file_put_contents($fn, $compressed);
    printf("printf test 27:%3\$d %d %d\n", 1, 2, 3);
    foo();
    function foo() {
        global $LAST;
        ($LAST = $LAST + 0) * 1;
        echo "ok\n";
    };
    spl_autoload_register(function ($name) {
        spl_autoload_unregister("spl_autoload_call");
    });
    $root = simplexml_load_string('<root xmlns:x="urn:x" x:attr="foo"/>');
    $attr = $root->attributes('urn:x');
    var_dump(dom_import_simplexml($attr)->textContent);
    class C {
    	use T;
    	private array $a = [1];
    }
    $o = new C;
    $o->foo();
    $im = imagecreatetruecolor(1, 1);
    imagescale($im, 1, 1, -10);
    $now = new DateTime('2018-11-03 11:34:20.781751');
    $ago = new DateTime('2018-11-03 11:34:20.000000');
    $diff = $ago->diff($now);
    var_dump($diff->invert, $diff->s, $diff->f);
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_CRL_SIGN, array($cpca)));
    error_reporting(E_ALL);
    $fp = fopen("php://memory", "r+");
    fwrite($fp, str_repeat("baad", 1024*1024));
    $s = 'C:15:"ReflectionClass":0:{}';
    var_dump(unserialize($s));
    $cert = "file://" . __DIR__ . "/cert.crt";
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_CLIENT));
    setlocale(LC_ALL, "C");
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
    $file_handle = fopen(__FILE__, "r");
    $dir_handle = opendir( __DIR__ );
    $resources = array($file_handle, $dir_handle);
    var_dump( end($resources) );
    $list = new SplDoublyLinkedList();
    $list->setIteratorMode(SplDoublyLinkedList::IT_MODE_LIFO);
    printf("printf test 25:%-2s\n", "gazonk");
    var_dump(soundex("Knuth"));
    class C extends stdClass {
        public int $a;
    }
    $reflector = new ReflectionClass(C::class);
    $obj = new C();
    $reflector->resetAsLazyGhost($obj, function () {});
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
    var_dump($body->lookupNamespaceURI(NULL));
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $phar = new Phar($fname);
    var_dump($phar->getStub());
    $data = array('first', 'fifth', 'second', 'forth', 'third');
    $sort = array(1, 5, 2, 4, 3);
    array_multisort($sort, $data);
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
    var_dump(soundex("Hilbert") == soundex("Ladd"));
    $dt = new DateTime('@1604219400');
    $dt->setTimezone(new DateTimeZone('UTC'));
    $cert = "file://" . __DIR__ . "/cert.crt";
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_CLIENT));
    mt_srand(1234567890);
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
    $bug_gh16013_callback_struct->return_int32 = function($val) use($ffi) {
        $cdata = $ffi->new('int32_t');
        $cdata->cdata = $val;
        return $cdata;
    };
    var_dump(($bug_gh16013_callback_struct->return_int32)(-100000));
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_ANY, array($cpca)));
    $res->free();
    function byReference( & $array){
        foreach($array as &$item){
            $item['nanana'] = 'batman';
            $item['superhero'] = 'robin';
        }
    }
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
    byReference($array);
    #[\AllowDynamicProperties]
    class C {
        public $b;
        public function __construct() {
            $this->a = new Canary();
        }
    }
    $obj = new C();
    var_dump($obj);
    $fp = php_cli_server_connect();
    fclose($fp);
    $formatter = new \NumberFormatter('en', \NumberFormatter::DECIMAL);
    $value = $formatter->parse('2147483647', \NumberFormatter::TYPE_INT32);
    var_dump($value);
    class TrampolineTest {
        public function __call(string $name, array $arguments) {
            echo 'Trampoline for ', $name, PHP_EOL;
        }
    }
    $o = new TrampolineTest();
    $callback1 = [$o, 'trampoline1'];
    var_dump(spl_autoload_unregister($callback1));
    printf("[001] [%d] %s\n", mysqli_errno($link), mysqli_error($link));
    $magic_file = __DIR__ . '/bug79283.db';
    $finfo = new finfo(FILEINFO_NONE, $magic_file);
    var_dump($finfo->buffer("buffer\n"));
    $bert = "file://" . __DIR__ . "/bug41033.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_NS_SSL_SERVER, array($cpca), $utfl));
    $trace_file = '/tmp/mysqli_debug_phpt.trace';
    printf("[004] Trace file '%s' is very small. filesize() reports only %d bytes. Please check.\n",
                $trace_file,
                filesize($trace_file));
    $db = PDOTest::factory();
    var_dump($db->query("SELECT * from test34630")->fetchAll(PDO::FETCH_ASSOC));
    class A {
        public $b;
    }
    $a = new A;
    var_dump(serialize($a));
    $bert = "file://" . __DIR__ . "/bug41033.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_CRL_SIGN, array($cpca)));
    error_reporting(E_ALL);
    var_dump(mb_strpos('Hello', 'e', 0, '8bit'));
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
    $c("abc");
    printf("printf test 12:%5.2f\n", -12.34);
    function createDB(): PDO {
        $db = MySQLPDOTest::factory();
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        return $db;
    }
    $db = createDB();
    $db->exec('CREATE TABLE test_80908 (`id` BIGINT(20) UNSIGNED AUTO_INCREMENT, `name` VARCHAR(5), PRIMARY KEY (`id`)) ENGINE = InnoDB AUTO_INCREMENT=10376293541461622799');
    $dt = new DateTime('@1604219400');
    $dt->setTimezone(new DateTimeZone('UTC'));
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
    $dom = new DOMDocument;
    $tag = $dom->appendChild($dom->createElement("style"));
    $tag->append("foo");
    $fp = fopen("php://memory", "r+");
    fwrite($fp, str_repeat("baad", 1024*1024));
    $date = new DateTime("28-July-2008");
    $other = new DateTime("31-July-2008");
    $diff = date_diff($date, $other);
    var_dump($diff);
    $list = new SplDoublyLinkedList();
    $list->push('o');
    $db = getDbConnection();
    $sql = '
        SET NOCOUNT ON
        SELECT 0 AS [result]
    ';
    $stmt = $db->query($sql);
    var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));
    $dom = new DOMDocument();
    $dom->loadXML('<root><child/></root>');
    $cert = "file://" . __DIR__ . "/cert.crt";
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_CRL_SIGN));
    $empty_webp = __DIR__ . "/gh13774.webp";
    $im = imagecreatefromwebp($empty_webp);
    var_dump($im);
    $dest = __DIR__ . "/bug40228";
    rmdir($dest);
    $wrong = "wrong";
    var_dump(openssl_pkcs7_verify($wrong, 0));
    $formatter = new \NumberFormatter('en', \NumberFormatter::DECIMAL);
    $value = $formatter->parse('2147483650', \NumberFormatter::TYPE_INT64);
    var_dump($value);
    $f = __DIR__."/data/test.txt.gz";
    $h = gzopen($f, 'r');
    var_dump(gzeof($h));
    $bert = "file://" . __DIR__ . "/bug41033.pem";
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_ENCRYPT));
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
     ($dirs as $d) {
       
    dirs as $d) {
    ;
    $now = new DateTime('2018-11-03 11:34:20.781751');
    $ago = new DateTime('2018-11-03 11:34:20.000000');
    $diff = $ago->diff($now);
    var_dump($diff->invert, $diff->s, $diff->f);
    $bert = "file://" . __DIR__ . "/bug41033.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_CRL_SIGN, array($cpca)));
    class Foo {
        public $bar = [] {
            &get {
                echo __METHOD__ . "\n";
                return $this->bar;
            }
        }
    }
    $foo = new Foo;
    var_dump($foo);
    $db = getDbConnection();
    $sql = '
        SET NOCOUNT ON
        SELECT 0 AS [result]
    ';
    $stmt = $db->query($sql);
    $stmt->closeCursor();
    class Foo {
      public $bar = "bat";
    }
    $foo = new Foo;
    $bar = (int)$foo;
    var_dump($bar);
    $datePre = DateTime::createFromFormat("!D d M Y", "Fri 17 may 2011");
    $datePost = DateTime::createFromFormat("!d M Y D", "17 may 2011 Fri");
    var_dump($datePre->format("Y-m-d") == $datePost->format("Y-m-d"));
    printf("printf test 15:%b\n", 170);
    php_cli_server_start(<<<PHP
    http_response_code(426);
    PHP
    );
    ob_start("test");
    $conn = pg_connect($conn_str);
    $table='test_68638';
    pg_update($conn,$table, array('value' => 'inf'), array('id' => 1));
    function display($res)
    {
    	echo implode("\n", array_map(fn($row) => implode("\t", $row), $res))."\n";
    }
    $res = [];
    display($res);
    $output = fopen(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370_003' . DIRECTORY_SEPARATOR . 'testfile', 'w');
    fclose($output);
    class di extends DateInterval {
        public $unit = 1;
    }
    $I = new di('P10D');
    print_r($I);
    $db = MySQLPDOTest::factory();
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $interval = new DateInterval('P1D');
    $dt = new DateTime('first day of January 2011');
    $dt->add($interval);
    class Box {
        public ?Test $value;
    }
    global $box;
    function test($box) {
        var_dump($box->value = new Test);
    }
    $box = new Box();
    test($box);
    var_dump ( rtrim("rtrim test   \t\0 ") );
    $test = array("A\x00B" => "Hello world");
    var_export($test);
    ob_start("test");
    function test(string $name, object $obj) {
        printf("# %s:\n", $name);
    
        var_dump($obj);
        var_dump(@$obj->dynamic++);
        var_dump($obj);
    }
    $reflector = new ReflectionClass(C::class);
    $obj = $reflector->newLazyGhost(function ($obj) {
        var_dump("initializer");
        $obj->__construct();
    });
    test('Ghost', $obj);
    var_dump(session_save_path());
    $client = new soapclient(NULL, [
      'location' => 'http://' . PHP_CLI_SERVER_ADDRESS,
      'uri' => 'misc-uri',
      'soap_version' => SOAP_1_2,
      'user_agent' => 'Vincent JARDIN, test headers',
      'trace' => true, /* record the headers before sending */
      'stream_context' => stream_context_create([
        'http' => [
          'header' => sprintf("MIME-Version: 1.0\r\n"),
          'content_type' => sprintf("Multipart/Related")
        ],
      ]),
    ]);
    $client->__soapCall("foo", [ 'arg1' => "XXXbar"]);
    mysqli_close($link);
    $f = __DIR__."/data/test.txt.gz";
    $h = gzopen($f, 'r');
    var_dump(gzeof($h));
    $test = array("A\x00B" => "Hello world");
    var_export($test);
    $curl = curl_init("http://www.google.com");
    curl_setopt($curl, CURLOPT_PRIVATE, "123");
    $db = getDbConnection();
    $sql = '
        SET NOCOUNT ON
        SELECT 0 AS [result]
    ';
    $stmt = $db->query($sql);
    var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));
    $GLOBALS['b'] = 2;
    $b = &$GLOBALS['b'];
    $GLOBALS['b'] = 3;
    $a = 4;
    var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
    set_exception_handler(null);
    $headers = ['Host: okey.com'];
    $httpContext = [
        'http' => [
            'protocol_version'	=> '1.1',
            'method'			=> 'GET',
            'header'			=> &$headers,
            'follow_location'	=> 0,
            'max_redirects'		=> 0,
            'ignore_errors'		=> true,
            'timeout'			=> 60,
        ],
    ];
    $context = stream_context_create($httpContext);
    print_r(stream_context_get_options($context));
    function t1()
    {
        ob_start("test");
        echo "Hello from t1 1 ";
            echo "Hello from t1 2 ";
            ob_end_flush();
    }
    t1();
    $bert = "file://" . __DIR__ . "/bug41033.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_SIGN, array($cpca)));
    $hash = password_hash(
        "php",
        PASSWORD_ARGON2I,
        ['memory_cost' => 64 << 10, 'time_cost' => 4, 'threads' => 1]
    );
    var_dump(substr($hash, -1, 1) !== "\0");
    vprintf("vprintf test 1:%2\$-2d %1\$2d\n", array(1, 2));
    $filename = __DIR__ . '/bug77432.phar';
    unlink($filename);
    $fp = fopen('php://input', 'r+');
    var_dump(fseek($fp, -32, SEEK_CUR));
    mysqli_close($link);
    global $user, $host, $passwd, $db, $port, $socket;
    global $user, $host, $passwd, $db, $port, $socket;
    $this->mysqli = new mysqli($host, $user, $passwd, $db, $port, $socket);
    $this->mysqli->close();
    $tester = new FPM\Tester($cfg);
    $tester->close();
    $oldcwd = getcwd();
    chdir($oldcwd);
    var_dump(c1::$a2);
    $db = PDOTest::factory();
    $db->exec('CREATE TABLE test34630 (id int NOT NULL PRIMARY KEY, val VARCHAR(256))');
    var_dump(http_get_last_response_headers());
    #[\AllowDynamicProperties]
    class C {
        public $b;
        public function __construct() {
            $this->a = new Canary();
        }
    }
    $obj = new C();
    var_dump($obj);
    class C extends stdClass {
        public int $a;
    }
    $reflector = new ReflectionClass(C::class);
    $obj = new C();
    $reflector->resetAsLazyProxy($obj, function ($obj) {
        });
    mail("some.address.it.wont.ever.reach@lookup.and.try.to.find.this.host.name","subject","a", "");
    $im = imagecreate(800, 800);
    test_image_equals_file(__DIR__ . '/bug43475.png', $im);
    function PostEvents($x) {
        var_dump($x);
        exit();
      return $x;
    }
    var_dump($x);
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
    imagecreatefrompng('php://filter/read=convert.base64-encode/resource=' . __DIR__ . '/test.png');
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
    $field = mysqli_fetch_field_direct($res, 1);
    $expected_flags = array('col1' => 'MULTIPLE_KEY PART_KEY', 'col2' => 'PART_KEY');
    list($missing_flags, $unexpected_flags, $flags_found) = checkFlags($field->flags, $expected_flags[$field->name], $flags);
    printf("[012] The flags '%s' have not been reported for %s, found '%s'\n",
                        $missing_flags, $field->name, $flags_found);
    date_default_timezone_set('Europe/Kiev');
    $im = imagecreate(800, 800);
    imageline($im,  50, 250, 550, 250, IMG_COLOR_STYLED);
    printf("%0\$s", 1);
    $bert = "file://" . __DIR__ . "/bug41033.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_ANY, array($cpca)));
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_SIGN, array($cpca)));
    function test(#[SensitiveParameter] $sensitive)
    {
        debug_print_backtrace();
        var_dump(debug_backtrace());
        var_dump((new Exception)->getTrace());
    }
    test('sensitive');
    function crash()
    {
        $notDefined[$i] = 'test';
    }
    crash();
    $document = new \DOMDocument();
    var_dump($document->saveHTML());
    var_dump ( rtrim("rtrim test$#@", "#@$") );
    $filename = "bug51997.bz2";
    unlink($filename);
    var_dump(filter_var("", FILTER_SANITIZE_ENCODED, FILTER_FLAG_ENCODE_LOW));
    $dest = dirname(realpath(__FILE__)) . '/bug27582.png';
    $im = ImageCreateTrueColor(10, 10);
    imagepng($im, $dest);
    $eml = __DIR__ . "/signed.eml";
    $empty = "";
    var_dump(openssl_pkcs7_verify($eml, 0, $empty));
    $im = ImageCreateTrueColor(10, 10);
    imagealphablending($im, true);
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_NS_SSL_SERVER, array($cpca), $utfl));
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
    $ai->seek(0);
    $cert = "file://" . __DIR__ . "/cert.crt";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_SERVER, array($cpca)));
    $filename = __DIR__ . '/私はガラスを食べられます_003.xml';
    
    $xmlstring = '<?xml ve
    ;
    $test = array("A\x00B" => "Hello world");
    var_dump($test);
    printf("printf test 32:%.17g\n", -INF);
    var_dump(gzfile(__DIR__."/data/test.txt.gz", true));
    $f = __DIR__."/data/test.txt.gz";
    $h = gzopen($f, 'r');
    var_dump(gzeof($h));
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $phar = new Phar($fname);
    var_dump(strlen($phar->getStub()));
    $output = fopen(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370_003' . DIRECTORY_SEPARATOR . 'testfile', 'w');
    fclose($output);
    function t1()
    {
        ob_start("test");
        echo "Hello from t1 1 ";
            echo "Hello from t1 2 ";
            ob_end_flush();
    }
    t1();
    $str = 'Hello World';
    $shm_key = ftok(__FILE__, 'p');
    $shm_id2 = shmop_open($shm_key, 'c', 0644, strlen($str) + 10);
    var_dump($shm_id2);
    $string = str_repeat("A", 1024);
    highlight_string($string, true);
    $mysqli = new mysqli("$host:$port", $user, $passwd, $db);
    $tbl = "test";
    $sql = "DROP TABLE IF EXISTS $tbl";
    $mysqli->query($sql);
    $f = __DIR__."/data/test.txt.gz";
    $h = gzopen($f, 'r');
    gzclose($h);
    $thirty = M_PI / 6.0;
    var_dump(sin($thirty));
    var_dump(error_reporting());
    $info = opcache_get_status()['interned_strings_usage'];
    var_dump($info['used_memory'] + $info['free_memory']);
    $depth0 = "depth02";
    touch(__DIR__ . DIRECTORY_SEPARATOR . $depth0 . DIRECTORY_SEPARATOR . 'getSubPathname_test_1.tmp');
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $phar = new Phar($fname);
    $phar->setDefaultStub(str_repeat('a', 401));
    $tempnum = 12345;
    $tempstring = "abcdefghjklmnpqrstuvwxyz";
    var_dump(sprintf("%d  %s  %d\n", $tempnum, $tempstring, $tempnum));
    set_error_handler(function($_, $m) { throw new Exception($m); });
    ob_start("test");
    $db = PDOTest::factory();
    $insert = $db->prepare("insert into test34630 (id, val) values (1, :blob)");
    $insert->execute();
    $this->show();
    function test($foo) {
        var_dump(0);
        var_dump($foo[0]);
    }
    test("str");
    $GLOBALS['b'] = 2;
    $a = NULL;
    $b = NULL;
    var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
    function unserialize($data) {
            session_decode($data);
        }
    session_decode($data);
    function foo() {
      var_dump($i=1);
      return $i;
    }
    var_dump(foo());
    function new_closure_gen() {
        return function() {
            static $foo = 0;
            yield ++$foo;
        };
    }
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
    $rf = new ReflectionFunction('collator_get_sort_key');
    var_dump($rf->getNumberOfParameters());
    var_dump(soundex("Lukasiewicz") == soundex("Ghosh"));
    var_dump(isset($_POST['foo']));
    $stmt->close();
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
    var_dump(soundex("Lukasiewicz") == soundex("Lissajous"));
    set_error_handler('my_error_handler');
    list($value) = yield;
    var_dump($value);
    pcntl_sigwaitinfo($a,$a);
    $time = '2000-01-01 00:00:00.000000';
    $tz_aus = new DateTimeZone('Australia/Sydney');
    $tz_us = new DateTimeZone('America/Los_Angeles');
    $auz = new DateTime($time, $tz_aus);
    $us = new DateTime($time, $tz_us);
    $diff = $auz->diff($us);
    var_dump($diff->h);
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
    list($value) = yield;
    var_dump($value);
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
    $array_test = array("a", "b", "d", 7, "u" => "U", -4, "-.008" => "neg.008");
    var_dump( end($array_test) );
    var_dump(posix_setrlimit(POSIX_RLIMIT_NOFILE, 128, 128));
    $ar1 = array("row1" => 2, "row2" => 1);
    $args = array(&$ar1);
    var_dump(call_user_func_array("array_multisort", $args));
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_SIGN));
    class foo
    {
    // no members
    }
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
    interface IValue
    {
       public function setVal ($name, $val);
       public function dumpVal ();
    }
    class Value implements IValue
    {
      private $vars = array ();
    
      public function setVal ( $name, $val ) {
        $this->vars[$name] = $val;
      }
    
      public function dumpVal () {
        var_dump ( $vars );
      }
    }
    class myClass
    {
      var       $foo_object;
      public    $public_var;
      public    $public_var1;
      private   $private_var;
      protected $protected_var;
    
      function __construct ( ) {
        $this->foo_object = new foo();
        $this->public_var = 10;
        $this->public_var1 = new foo();
        $this->private_var = new foo();
        $this->protected_var = new foo();
      }
    }
    $myClass_object = new myClass();
    $foo_object = new foo();
    $Value_object = new Value();
    $concreteClass_object = new concreteClass();
    $valid_objects = array(
      new stdclass,
      new foo,
      new concreteClass,
      new Value,
      new myClass,
      $myClass_object,
      $myClass_object->foo_object,
      $myClass_object->public_var1,
      $foo_object,
      $Value_object,
      $concreteClass_object
    );
    foreach ($valid_objects as $object ) {
      echo "-- Iteration $loop_counter --\n"; $loop_counter++;
      var_dump( is_object($object) );
    }
    var_dump( is_object($object) );
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
    undefined_function('Null');
    var_dump(pcntl_wexitstatus($status));
    function test($foo) {
        var_dump(0);
        var_dump($foo[0]);
    }
    var_dump($foo[0]);
    date_default_timezone_set("UTC");
    $inputs = array(
        '<frameset > </frameset>',
        '<html><frameset> </frameset> </html',
    );
    foreach ($inputs as $input) {
    
        $t = tidy_parse_string($input);
        $t->cleanRepair();
        var_dump(tidy_get_body($t));
    }
    $t = tidy_parse_string($input);
    var_dump(tidy_get_body($t));
    phpinfo(INFO_VARIABLES);
    spl_autoload_register(function ($name) {
        if ($name == "B") {
            eval ("abstract class B extends A { }");
        } else if ($name == "A") {
            eval ("abstract class A { use T { T::__construct as __asconstruct; }}");
        } else if ($name == "T") {
            eval ("trait T { public function __construct() { } }");
        }
        return TRUE;
    });
    $output = array();
    var_dump($output);
    var_dump("hello");
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
    $ch = curl_init("https://localhost/username");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
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
    var_dump($rit->valid());
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
    ob_end_clean();
    class C {
        public int $a;
    }
    $reflector = new ReflectionClass(C::class);
    $obj = new C();
    $reflector->resetAsLazyProxy($obj, function ($obj) use ($reflector) {
        try {
            $reflector->resetAsLazyProxy($obj, function () { });
        } catch (Error $e) {
            printf("%s: %s\n", $e::class, $e->getMessage());
        }
        try {
            $reflector->resetAsLazyGhost($obj, function () { });
        } catch (Error $e) {
            printf("%s: %s\n", $e::class, $e->getMessage());
        }
        return new C();
    });
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug54028_2" . DIRECTORY_SEPARATOR;
    $dirs = array("a", "ソ", "ゾ", "şŞıİğĞ", "多国語", "王", "汚れて掘る");
    
    mkdir($prefix);
    foreach ($
    mkdir($prefix . $d);
    }
    
    $old_cwd = getcwd();
    forea
    $now = $prefix . $d;
        var_dump(chdir($now));
        var_dump($dn = realpath("."));
        var_dump($d == get_basename_with_cp($dn, 65001, false));
    }
    chdir($old_cwd);
    
    foreach (
    _dump(chdir($now));
    
    ar_dump($dn = realpath;
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
    printf("# %s\n", $name);
    $str = "repeater id='loopt' dataSrc=subject columns=2";
    preg_match_all("/(['\"])((.*(\\\\\\1)*)*)\\1/sU",$str,$str_instead);
    var_dump(filter_var("", FILTER_SANITIZE_ENCODED, FILTER_FLAG_ENCODE_LOW));
    $code = null;
    $err = null;
    pfsockopen('udp://127.0.0.1', '63844', $code, $err, INF);
    $client = new SoapClient(__DIR__ . '/bug49278.wsdl', array('location' => "http://".PHP_CLI_SERVER_ADDRESS, 'trace' => 1));
    var_dump($client->__getLastResponseHeaders());
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
    mysqli_close($link);
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $phar = new Phar($fname);
    $phar->setDefaultStub('my/custom/thingy.php', 'the/web.php');
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
    function test() {
        $a = 1;
        try {
            return $a;
        } finally {
            $a = 2;
        }
    }
    var_dump(test());
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
    var_dump(($bug_gh16013_callback_struct->return_uint16)(10000));
    function unserialize($data) {
            session_decode($data);
        }
    session_decode($data);
    $r = new Phar(__DIR__ . "/bug69279.phar.zip");
    var_dump($r["bug69279.txt"]->isCompressed());
    $sql = "SELECT 11111 as `1`, 22222 as `2`";
    $link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
    $res = $link->query($sql);
    $row = $res->fetch_array();
    var_dump($row);
    $dfp = opendir ( __DIR__ );
    closedir($dfp);
    $dom = new DOMDocument;
    $test1 = $dom->getElementById('x');
    $dom->documentElement->appendChild($test1);
    class Test implements ArrayAccess {
        public function offsetExists($x): bool { $GLOBALS["obj"] = 24; return true; }
        public function offsetGet($x): mixed { var_dump($x); return 42; }
        public function offsetSet($x, $y): void { }
        public function offsetUnset($x): void { }
    }
    $obj = new Test;
    var_dump($obj);
    catch (\ReflectionException $e) {
            printf("%s: %s\n", $e::class, $e->getMessage());
        }
    printf("%s: %s\n", $e::class, $e->getMessage());
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
    (new B)->bar();
    printf("# Proxy:\n");
    function test(array... $args) {
        var_dump($args);
    }
    test();
    function foo($ref, $alt) {
        unset($GLOBALS['a']);
        unset($GLOBALS['b']);
        $GLOBALS['a'] = 1;
        $GLOBALS['b'] = 2;
    
        $org_a = $GLOBALS['a'];
        $org_b = $GLOBALS['b'];
    
        if ($ref) {
            global $a, $b;
        } else {
            /* zval temp_var(NULL); // refcount = 1
             * a = temp_var[x] // refcount = 2
             */
            $a = NULL;
            $b = NULL;
        }
    
        var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
        echo "--\n";
        if ($alt) {
            $a = &$GLOBALS['a'];
            $b = &$GLOBALS['b'];
        } else {
            extract($GLOBALS, EXTR_REFS);
        }
        var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
        echo "--\n";
        $a = &$GLOBALS['a'];
        $b = &$GLOBALS['b'];
        var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
        echo "--\n";
        $GLOBALS['b'] = 3;
        var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
        echo "--\n";
        $a = 4;
        var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
        echo "--\n";
        $c = $b;
        var_dump($b, $GLOBALS['b'], $c);
        echo "--\n";
        $b = 'x';
        var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b'], $c);
        echo "--\n";
        var_dump($org_a, $org_b);
        echo "----";
        if ($ref) echo 'r';
        if ($alt) echo 'a';
        echo "\n";
    }
    foo(true, false);
    #[\Deprecated(1234)]
    function test() {
    }
    test();
    $now = new DateTimeImmutable();
    $simpleInterval = new DateInterval("P2D");
    $dateperiod = (new ReflectionClass(DatePeriod::class))->newInstanceWithoutConstructor();
    $dateperiod->__unserialize([
    		'start' => $now, 'end' => $now, 'current' => $now, 'interval' => $simpleInterval,
    		'recurrences' => 2, 'include_start_date' => true, 'include_end_date' => true,
    	]);
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
    var_dump($c);
    ini_set('mysqlnd.fetch_data_copy', true);
    printf("printf test 10: 123456789012345\n");
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
    imagecreatefrompng('php://filter/read=convert.base64-encode/resource=' . __DIR__ . '/test.png');
    $doc = new \DOMDocument();
    $doc->loadXML('<a>foo<last/></a>');
    mkdir(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370_003');
    $xmlString = "<root><a><b>1</b><b>2</b><b>3</b></a></root>";
    $xml = simplexml_load_string($xmlString);
    $nodes = $xml->a->b;
    function test($nodes, $name, $callable) {
        echo "--- $name ---\n";
        foreach ($nodes as $nodeData) {
            echo "nodeData: " . $nodeData . "\n";
            $callable($nodes);
        }
    }
    test($nodes, "manipulation combined with querying", function ($n) {
        $n->addAttribute("attr", "value");
        (bool) $n["attr"];
        $n->addChild("child", "value");
        $n->outer[]->inner = "foo";
        (bool) $n->outer;
        (bool) $n;
        isset($n->outer);
        isset($n["attr"]);
        unset($n->outer);
        unset($n["attr"]);
        unset($n->child);
    });
    function test(string $input) {
        var_dump(filter_var($input, FILTER_VALIDATE_URL));
    }
    test("http://test[@2001:db8:3333:4444:5555:6666:1.2.3.4]");
    $tempstring = "abcdefghjklmnpqrstuvwxyz";
    var_dump(sprintf("%030.-15s", $tempstring));
    $dom = Dom\HTMLDocument::createEmpty();
    $container = $dom->appendChild(createElement($dom, "container"));
    $container->appendChild(createElementNS($dom, "urn:foo", "htML", "5"));
    $filename = "bug51997.bz2";
    $bz = bzopen($filename, "w");
    bzclose($bz);
    function __(){
      $GLOBALS['a'] = "bug\n";
      array_splice($GLOBALS,0,count($GLOBALS));
      /* All global variables including $GLOBALS are removed */
      echo $GLOBALS['a'];
    }
    __();
    var_dump(rename("phar://a.phar/x", "phar://a.phar/y"));
    $func_ptrs = [
        'bug_gh9090_void_none_ptr',
        'bug_gh9090_void_int_char_ptr',
        'bug_gh9090_void_int_char_var_ptr',
        'bug_gh9090_void_char_int_ptr',
        'bug_gh9090_int_int_char_ptr',
    ];
    $func_argvs = [
        [ 'bug_gh9090_void_none',         [ ]                           ],
        [ 'bug_gh9090_void_int_char',     [ 42, "hello" ]               ],
        [ 'bug_gh9090_void_int_char_var', [ 42, "d=%d s=%s", -1, "ok" ] ],
    ];
    foreach ($func_ptrs as $func_ptr) {
        foreach ($func_argvs as $func_argv) {
            [ $func, $argv ] = $func_argv;
    
            $ok = true;
            try {
                $ffi->$func_ptr = $ffi->$func;
                call_user_func_array($ffi->$func_ptr, $argv);
            } catch (FFI\Exception $e) {
                $ok = false;
            }
    
            printf("%-36s = %-36s ? %s\n", $func_ptr, $func, $ok ? 'yes' : 'no');
        }
    }
    foreach ($func_argvs as $func_argv) {
            [ $func, $argv ] = $func_argv;
    
            $ok = true;
            try {
                $ffi->$func_ptr = $ffi->$func;
                call_user_func_array($ffi->$func_ptr, $argv);
            } catch (FFI\Exception $e) {
                $ok = false;
            }
    
            printf("%-36s = %-36s ? %s\n", $func_ptr, $func, $ok ? 'yes' : 'no');
        }
    [ $func, $argv ] = $func_argv;
    $ok = false;
    printf("%-36s = %-36s ? %s\n", $func_ptr, $func, $ok ? 'yes' : 'no');
    var_dump(
            strnatcmp('foo ', 'foo '),
            strnatcmp('foo', 'foo'),
            strnatcmp(' foo', ' foo')
        );
    printf("[002] Connect failed, [%d] %s\n", mysqli_connect_errno(), mysqli_connect_error());
    var_dump(soundex("Gauss")       == soundex("Ghosh"));
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $phar = new Phar($fname);
    $phar->stopBuffering();
    $a = new Test();
    var_dump($a->value);
    class Test{
    	public $value = 11.3;
    
    	public function TestFunc() {
    		$this->value -= 10;
    	}
    };
    date_default_timezone_set("Asia/Calcutta");
    mail("some.address.it.wont.ever.reach@lookup.and.try.to.find.this.host.name","subject","a", NULL);
    var_dump ( rtrim("rtrim test   " , "") );
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
    var_dump($this->getConst());
    var_dump(filter_var("", FILTER_SANITIZE_ENCODED));
    printf("[003] No result, [%d] %s\n", $link->errno, $link->error);
    $fp = fopen('php://input', 'r+');
    fclose($fp);
    clearstatcache();
    $a = new Test();
    $a->TestFunc();
    class Test{
    	public $value = 11.3;
    
    	public function TestFunc() {
    		$this->value -= 10;
    	}
    };
    var_dump($line);
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_ANY, array($cpca)));
    $tester = new FPM\Tester($cfg);
    $tester->start();
    $cert = "file://" . __DIR__ . "/cert.crt";
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_SERVER));
    define("TEST",2);
    printf("printf test 3:%f\n", 10.0/3);
    var_dump(rename("phar://a.phar/x", "phar://a.phar/y"));
    set_error_handler(
                function ($errno, $errstr, $errfile, $errline) {
                    $this->handleError($errno, $errstr, $errfile, $errline);
                }
            );
    var_dump(getopt("abcd"));
    var_dump(mb_check_encoding("&\xc2\xb7 TEST TEST TEST TEST TEST TEST", "HTML-ENTITIES"));
    foo();
    function foo() {
        global $LAST;
        ($LAST = $LAST + 0) * 1;
        echo "ok\n";
    };
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
    printf("# %s\n", $name);
    public static function myMethod(string $foo) {
            echo "Called ", __METHOD__, PHP_EOL;
            var_dump($foo);
        }
    var_dump($foo);
    $array = array(
        1 => "entry_1",
        2 => "entry_2",
        3 => "entry_3",
        4 => "entry_4",
        5 => "entry_5"
    );
    var_dump($array);
    bar();
    function bar() {
        boo();
    };
    $s = "1234567890a";
    var_dump($s["10"], isset($s["10"]));
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_ENCRYPT, array($cpca), $utfl));
    var_dump(count($cert_data['extracerts']));
    $conn = pg_connect($conn_str);
    $table='test_68638';
    var_dump(pg_update($conn,$table, array('value' => 'inf'), array('id' => 1), PGSQL_DML_STRING));
    $dest = __DIR__ . "/bug40228";
    rmdir($dest);
    var_dump(__METHOD__);
    $wrong = "wrong";
    var_dump(openssl_pkcs7_verify($wrong, 0));
    $dom = Dom\HTMLDocument::createEmpty();
    dumpNodeList($dom->getElementsByTagName("HTml"));
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
    printf("[002] %s [%d] %s\n", $column_def,
                    mysqli_errno($link), mysqli_error($link));
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
    $meta_res = $stmt->result_metadata();
    $field = $meta_res->fetch_field();
    printf("Type         : %d (%s)\n", $field->type, (isset($datatypes[$field->type])) ? $datatypes[$field->type] : 'unknown');
    $input = fopen(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370.tar', 'r');
    $output = fopen(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370_003' . DIRECTORY_SEPARATOR . 'testfile', 'w');
    var_dump(stream_copy_to_stream($input, $output, 10240, 0x200));
    $cert = "file://" . __DIR__ . "/cert.crt";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SMIME_SIGN, array($cpca)));
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
    $reqOf3 = 'select 79 n union all select 80 union all select 81';
    function display($res)
    {
    	echo implode("\n", array_map(fn($row) => implode("\t", $row), $res))."\n";
    }
    $stmt1 = $pdo->query($reqOf3);
    display([ $stmt1->fetch() ]);
    $text = 'This is an ‘example’ of using DOM splitText';
    $st
    rt = 30;
    $le
    gth = 3;
    
    $d
     = new DOMDocument('1.0', 'UTF-8');
    $no
    e = $dom->createTextNode($text);
    $do
    ched = $node->splitText($start);
    $ma
    ched->splitText($length);
    pri;
    $fp = fopen('php://input', 'r+');
    fclose($fp);
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
    $bug_gh16013_callback_struct->return_struct = function($val) use($ffi) {
        return $val;
    };
    $struct = $ffi->new('struct bug_gh16013_int_struct');
    var_dump(($bug_gh16013_callback_struct->return_struct)($struct));
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
    $headers1 = exif_read_data(__DIR__ . '/bug64739.jpg');
    var_dump($headers1['Title'][0] === '?');
    $tester = new FPM\Tester($cfg);
    $userMessage = "'user' directive is ignored when FPM is not running as root";
    $tester->expectLogNotice($userMessage, 'dddd');
    function __construct($wsdl) {
        parent::__construct($wsdl);
        $this->server = new SoapServer($wsdl);
        $this->server->addFunction('Test');
      }
    $this->server = new SoapServer($wsdl);
    function __doRequest($request, $location, $action, $version, $one_way = 0): string {
        ob_start();
        $this->server->handle($request);
        $response = ob_get_contents();
        ob_end_clean();
        return $response;
      }
    $this->server->handle($request);
    $mysqli = new mysqli("$host:$port", $user, $passwd, $db);
    $tbl = "test";
    $sql = "INSERT INTO $tbl (bit_column_1) VALUES (0)";
    $mysqli->query($sql);
    class A {
        public function __call($name, $args) {
            for ($i = 0; $i < 5; $i++) {
                yield $i;
            }
        }
    }
    $a = new A();
    foreach ($a->gen() as $n) {
        var_dump($n);
    }
    var_dump($n);
    catch (\ReflectionException $e) {
            printf("%s: %s\n", $e::class, $e->getMessage());
        }
    printf("%s: %s\n", $e::class, $e->getMessage());
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $phar = new Phar($fname);
    $phar->stopBuffering();
    printf("printf test 2:%d\n", 42);
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
    var_dump(gzfile(__DIR__."/data/test.txt.gz"));
    mysqli_fetch_field($res);
    $interval = new DateInterval('P1D');
    $dt = new DateTime('first day of January 2011');
    $dt->sub($interval);
    $inputs = array(
        '<frameset > </frameset>',
        '<html><frameset> </frameset> </html',
    );
    foreach ($inputs as $input) {
    
        $t = tidy_parse_string($input);
        $t->cleanRepair();
        var_dump(tidy_get_body($t));
    }
    $t = tidy_parse_string($input);
    $t->cleanRepair();
    for($i = 495; $i <= 1074; $i++) {
      ini_set('precision', $i);
      echo "$i: len=", strlen(strval(-1 * pow(2, -1074))), "\n";
    }
    ini_set('precision', $i);
    $bert = "file://" . __DIR__ . "/bug41033.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_CLIENT, array($cpca), $utfl));
    $db = PDOTest::factory();
    $db->beginTransaction();
    $dir = opendir('foo://bar');
    closedir($dir);
    $filename = __DIR__ . '/bug77432.phar';
    $phar = new Phar($filename);
    $phar->startBuffering();
    $input = fopen(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370.tar', 'r');
    $output = fopen(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370_003' . DIRECTORY_SEPARATOR . 'testfile', 'w');
    var_dump(stream_copy_to_stream($input, $output, 10240, 0x200));
    $db = MySQLPDOTest::factory();
    $stmt = $db->prepare('SELECT * FROM test_33689');
    $tmp = $stmt->getColumnMeta(0);
    printf("Expecting pdo_type = 1 got %s\n", $tmp['pdo_type']);
    $test_array = array(1, array(1 => "one", "two" => 2, "" => "f") );
    var_dump( end($test_array[1]) );
    $inputs = array(
        '<frameset > </frameset>',
        '<html><frameset> </frameset> </html',
    );
    foreach ($inputs as $input) {
    
        $t = tidy_parse_string($input);
        $t->cleanRepair();
        var_dump(tidy_get_body($t));
    }
    $t = tidy_parse_string($input);
    var_dump(tidy_get_body($t));
    set_error_handler(function($_, $m) { throw new Exception($m); });
    $file_handle = fopen(__FILE__, "r");
    fclose( $file_handle );
    var_dump(mb_stripos('Hello', 'e', 0, '8bit'));
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
    $dbh = @pg_connect($conn_str);
    $res = pg_query($dbh, 'SELECT test_notice()');
    $row = pg_fetch_row($res, 0);
    var_dump($row);
    call_user_func('bar','second try');
    function __(){
      $GLOBALS['a'] = "bug\n";
      array_splice($GLOBALS,0,count($GLOBALS));
      /* All global variables including $GLOBALS are removed */
      echo $GLOBALS['a'];
    }
    __();
    $readonly_anon = new readonly class {
        public int $field;
        function __construct() {
            $this->field = 2;
        }
    };
    $readonly_anon->field = 123;
    var_dump($readonly_anon->field);
    function get() {
        $t = new stdClass;
        $t->prop = $t;
        return $t;
    }
    var_dump(get());
    catch (Exception $e) {
            printf("%s: %s\n", $e::class, $e->getMessage());
        }
    catch (Exception $e) {
            printf("%s: %s\n", $e::class, $e->getMessage());
        }
    printf("%s: %s\n", $e::class, $e->getMessage());
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
    $reqOf3 = 'select 79 n union all select 80 union all select 81';
    function display($res)
    {
    	echo implode("\n", array_map(fn($row) => implode("\t", $row), $res))."\n";
    }
    $stmt1 = $pdo->query($reqOf3);
    display([ $stmt1->fetch() ]);
    $dom = new DOMDocument;
    $tag = $dom->appendChild($dom->createElement("style"));
    $html = simplexml_import_dom($tag);
    var_dump($html);
    $sh = new SessionHandler;
    $sh->write("foo", "bar");
    var_dump($i=1);
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
    $d0 = $prefix . "ソフト";
    $d1 =
    st0.txt");
    touch("$d1\\t;
    $db = MySQLPDOTest::factory();
    $stmt = $db->prepare('SELECT * FROM test_33689');
    $tmp = $stmt->getColumnMeta(0);
    print_r($tmp);
    $depth0 = "depth02";
    $depth1 = "depth1";
    $depth2 = "depth2";
    $targetDir = __DIR__ . DIRECTORY_SEPARATOR . $depth0 . DIRECTORY_SEPARATOR . $depth1 . DIRECTORY_SEPARATOR . $depth2;
    touch($targetDir . DIRECTORY_SEPARATOR . 'getSubPathname_test_2.tmp');
    extract($GLOBALS, EXTR_REFS);
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
    var_dump(asort($temp_array) );
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $phar = new Phar($fname);
    $phar->setDefaultStub(str_repeat('a', 401));
    $mysql = new my_mysqli($host, $user, $passwd, $db, $port, $socket);
    $stmt = $mysql->prepare("SELECT id FROM temp");
    $stmt->bind_result($id);
    function test(array... $args) {
        var_dump($args);
    }
    test([0], [1], 2);
    set_error_handler(
                function ($errno, $errstr, $errfile, $errline) {
                    $this->handleError($errno, $errstr, $errfile, $errline);
                }
            );
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
    var_dump($temp_array);
    var_dump($http_response_header);
    $rc = new ReflectionClass('Foo');
    var_dump($rc->getStaticProperties());
    $dom = new DOMDocument;
    var_dump($dom->getElementById('x')?->nodeName);
    $data = [
        "name" => ["family" => AF_INET6, "addr" => "::1"],
        "buffer_size" => 2000,
        "controllen" => socket_cmsg_space(IPPROTO_IPV6, IPV6_PKTINFO) +
                socket_cmsg_space(IPPROTO_IPV6, IPV6_TCLASS),
    ];
    print_r($data);
    var_dump(posix_setrlimit(POSIX_RLIMIT_NOFILE, 128, 128));
    $dom = Dom\HTMLDocument::createEmpty();
    dumpNodeList($dom->getElementsByTagName("HTML"));
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
    date_default_timezone_set("UTC");
    function setStyleAndThickness($im, $color, $thickness)
    {
        $style = array();
        $i = 0;
        while ($i < 16 * $thickness) {
            $style[$i++] = $color;
        }
        while ($i < 20 * $thickness) {
            $style[$i++] = IMG_COLOR_TRANSPARENT;
        }
        while ($i < 28 * $thickness) {
            $style[$i++] = $color;
        }
        while ($i < 32 * $thickness) {
            $style[$i++] = IMG_COLOR_TRANSPARENT;
        }
        imagesetstyle($im, $style);
        imagesetthickness($im, $thickness);
    }
    $style = array();
    imagesetstyle($im, $style);
    php_cli_server_start('foo bar');
    var_dump(array_map(assert(...), [true, true, false]));
    catch (Error $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
    printf("%s: %s\n", $e::class, $e->getMessage());
    $c = "assert";
    $c(false);
    $domd = new DOMDocument();
    $xp = new DOMXPath($domd);
    $xp->query("//foo[contains(text(), " . $xp->quote("tes\x00t") . ")]");
    set_exception_handler(function (\Throwable $exception) {
        echo 'Caught: ' . $exception->getMessage() . "\n";
    });
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_SERVER, array($cpca), $utfl));
    phpinfo(INFO_VARIABLES);
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_SERVER, array($cpca), $utfl));
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
    $pdo->setAttribute(PDO::ATTR_PREFETCH, 0);
    var_dump(array_pop($input), $input);
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
    $bug_gh16013_callback_struct->return_enum = function($val) use($ffi) {
        $cdata = $ffi->new('enum bug_gh16013_enum');
        $cdata->cdata = $val;
        return $cdata;
    };
    var_dump(($bug_gh16013_callback_struct->return_enum)($ffi->BUG_GH16013_B));
    $fp = fopen("php://memory", "r+");
    fwrite($fp, str_repeat("baad", 1024*1024));
    $db = MySQLPDOTest::factory();
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    var_dump(exif_read_data('data:image/jpg;base64,TU0AKgAAAAwgICAgAAIBDwAEAAAAAgAAACKSfCAgAAAAAEZVSklGSUxN'));
    class C extends stdClass {
        public int $a;
    }
    $reflector = new ReflectionClass(C::class);
    $obj = new C();
    $reflector->resetAsLazyProxy($obj, function () {
        return new C();
    });
    var_dump(range('z', 'a', 100));
    function test(string $name, object $obj) {
        printf("# %s:\n", $name);
    
        var_dump($obj);
        var_dump($obj->a);
        var_dump($obj);
    }
    var_dump($obj);
    var_dump($br);
    $dom = Dom\HTMLDocument::createEmpty();
    dumpNodeList($dom->getElementsByTagName("foo:HTML"));
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
    var_dump($temp_array);
    printf("printf test 23:%016X\n", 170);
    set_error_handler(function() {
        (y);
    });
    $client = new SoapClient(__DIR__ . '/bug49278.wsdl', array('location' => "http://".PHP_CLI_SERVER_ADDRESS, 'trace' => 1));
    var_dump($client->__getLastResponseHeaders());
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
    #[\Deprecated(1234)]
    function test() {
    }
    test();
    printf("printf test 11:<%30s>\n", "hoyesterettsjustitiarius");
    $conn = odbc_connect($dsn, $user, $pass);
    $res = odbc_exec($conn, "SELECT * FROM bug80147");
    var_dump(odbc_result($res, 'whatever'));
    function test2() {
        $x = test();
    }
    test2();
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
    var_dump($ffi->bug_gh16013_return_short());
    $ch = curl_init("https://localhost/username");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $date = (new ReflectionClass(DateTime::class))->newInstanceWithoutConstructor();
    $dateperiod = (new ReflectionClass(DatePeriod::class))->newInstanceWithoutConstructor();
    $dateperiod->__unserialize(['start' => $date]);
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
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_SERVER, array($cpca), $utfl));
    $dom = new DOMDocument;
    var_dump($dom->getElementById('x')?->nodeName);
    function test(string $input) {
        var_dump(filter_var($input, FILTER_VALIDATE_URL));
    }
    test("http://t[est@::1]");
    $thisdir = __DIR__;
    $filename = $thisdir . "/bug47667.zip";
    unlink($filename);
    #[\AllowDynamicProperties]
    class C {
        public $b;
        public function __construct() {
            $this->a = new Canary();
        }
    }
    $obj = new C();
    var_dump($obj);
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
    $tester->terminate();
    $db = getDbConnection();
    $sql = '
        SET NOCOUNT ON
        SELECT 0 AS [result]
    ';
    $stmt = $db->query($sql);
    var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));
    $dfp = opendir ( __DIR__ );
    closedir($dfp);
    printf("printf test 32:%.17g\n", -INF);
    $pdo = MySQLPDOTest::factory();
    $pdo->query('CREATE TABLE bug79596 (broken FLOAT(2,1))');
    global $user, $host, $passwd, $db, $port, $socket;
    global $user, $host, $passwd, $db, $port, $socket;
    $this->mysqli = new mysqli($host, $user, $passwd, $db, $port, $socket);
    $this->mysqli->close();
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_SERVER, array($cpca)));
    function setStyleAndThickness($im, $color, $thickness)
    {
        $style = array();
        $i = 0;
        while ($i < 16 * $thickness) {
            $style[$i++] = $color;
        }
        while ($i < 20 * $thickness) {
            $style[$i++] = IMG_COLOR_TRANSPARENT;
        }
        while ($i < 28 * $thickness) {
            $style[$i++] = $color;
        }
        while ($i < 32 * $thickness) {
            $style[$i++] = IMG_COLOR_TRANSPARENT;
        }
        imagesetstyle($im, $style);
        imagesetthickness($im, $thickness);
    }
    $im = imagecreate(800, 800);
    $black = imagecolorallocate($im, 0, 0, 0);
    setStyleAndThickness($im, $black, 6);
    var_dump(get_html_translation_table(NAN, 0, "UTF-8") > 0);
    var_dump(mb_check_encoding("&\xc2\xb7 TEST TEST TEST TEST TEST TEST", "HTML-ENTITIES"));
    $sh = new SessionHandler;
    $sh->read("");
    $dbh = @pg_connect($conn_str);
    $res = pg_query($dbh, 'SELECT test_notice()');
    $row = pg_fetch_row($res, 0);
    var_dump($row);
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
    $cert = "file://" . __DIR__ . "/cert.crt";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_CRL_SIGN, array($cpca), $utfl));
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_CLIENT, array($cpca)));
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
    ;
    
    ?>;
    $filename = "bug51997.bz2";
    $bz = bzopen($filename, "r");
    bzclose($bz);
    $thirty = M_PI / 6.0;
    var_dump(sin($thirty));
    $r = new ResourceBundle( 'en_US', BUNDLE );
    print_r( $r['testvector'] );
    class Box {
        public ?Test $value;
    }
    global $box;
    function test($box) {
        var_dump($box->value = new Test);
    }
    $box = new Box();
    test($box);
    $im = imagecreatefromgd2(__DIR__ . DIRECTORY_SEPARATOR . 'bug73161.gd2');
    var_dump($im);
    $dt = new DateTime('@1604219400');
    $dt->setTimezone(new DateTimeZone('America/Boise'));
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
    printf("# %s\n", $name);
    checktimeout($s, 500);
    function test(string $input) {
        var_dump(filter_var($input, FILTER_VALIDATE_URL));
    }
    test("http://test[@2001:db8:3333:4444:5555:6666:1.2.3.4]");
    $key = str_repeat('abc', random_int(3, 3));
    var_dump(array_any([$key => 1], static fn () => true));
    $client = new soapclient(NULL, [
      'location' => 'http://' . PHP_CLI_SERVER_ADDRESS,
      'uri' => 'misc-uri',
      'soap_version' => SOAP_1_2,
      'user_agent' => 'Vincent JARDIN, test headers',
      'trace' => true, /* record the headers before sending */
      'stream_context' => stream_context_create([
        'http' => [
          'header' => sprintf("MIME-Version: 1.0\r\n"),
          'content_type' => sprintf("Multipart/Related")
        ],
      ]),
    ]);
    $client->__soapCall("foo", [ 'arg1' => "XXXbar"]);
    ini_set('display_errors',true);
    $code = null;
    $err = null;
    pfsockopen('udp://127.0.0.1', '63844', $code, $err, NAN);
    var_dump(sprintf("%X", 12));
    #[\AllowDynamicProperties]
    class C {
        public $b;
        public function __construct() {
            $this->a = new Canary();
        }
    }
    $obj = new C();
    var_dump($obj);
    $dbh = @pg_connect($conn_str);
    _set_lc_messages($dbh);
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
    test(3);
    var_dump(posix_setrlimit(POSIX_RLIMIT_NOFILE, 128, 128));
    $time = '2000-01-01 00:00:00.000000';
    $tz_aus = new DateTimeZone('Australia/Sydney');
    $tz_us = new DateTimeZone('America/Los_Angeles');
    $auz = new DateTime($time, $tz_aus);
    $us = new DateTime($time, $tz_us);
    $diff = $auz->diff($us);
    var_dump($diff->h);
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
    $pdo->exec("insert into t values (0, 'original')");
    function test($p12_contents, $password) {
        openssl_pkcs12_read($p12_contents, $cert_data, $password);
        openssl_error_string();
        var_dump(count($cert_data['extracerts']));
    }
    openssl_pkcs12_read($p12_contents, $cert_data, $password);
    $doc = new \DOMDocument();
    $target = $doc->documentElement->lastChild;
    $target->before('bar', $doc->documentElement->firstChild, 'baz');
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $phar = new Phar($fname);
    $phar->setDefaultStub(str_repeat('a', 401));
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
    $d0 = $prefix . "ソフト";
    $d1 =
    (stat("$d0\\test0.txt")) > 0);
    var_dump(coun;
    $f = __DIR__ . DIRECTORY_SEPARATOR . "67647.mov";
    $fi = new finfo(FILEINFO_MIME_TYPE);
    var_dump($fi->file($f));
    vprintf("vprintf test 1:%2\$-2d %1\$2d\n", array(1, 2));
    ob_end_clean();
    $ch = curl_init("https://localhost/userpwd");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    #[\AllowDynamicProperties]
    class C {
        public $b;
        public function __construct() {
            $this->a = new Canary();
        }
    }
    $reflector = new ReflectionClass(C::class);
    $obj = new C();
    $reflector->resetAsLazyProxy($obj, function ($obj) {
        var_dump("initializer");
        return new C();
    });
    $tester = new FPM\Tester($cfg);
    $userMessage = "'user' directive is ignored when FPM is not running as root";
    $tester->expectLogNotice($userMessage, 'cccc');
    class TrampolineTest {
        public function __call(string $name, array $arguments) {
            echo 'Trampoline for ', $name, PHP_EOL;
        }
    }
    $o = new TrampolineTest();
    $callback1 = [$o, 'trampoline1'];
    spl_autoload_register($callback1);
    $GLOBALS['b'] = 2;
    $a = &$GLOBALS['a'];
    $b = &$GLOBALS['b'];
    var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
    $fp = tmpfile();
    fwrite($fp, "I am the LOB data");
    var_dump(range('a', 'c', -1));
    $array1 = array(1, 2);
    $data_compare_func = 'compare_function';
    $key_compare_func = 'compare_function';
    $unset_var = 10;
    class classWithToString
    {
        public function __toString() {
            return "Class A object";
        }
    }
    class classWithoutToString
    {
    }
    $heredoc = <<<EOT
    hello world
    EOT;
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
    foreach($inputs as $key =>$value) {
        echo "\n--$key--\n";
        try {
            var_dump( array_uintersect_uassoc($array1, $value, $data_compare_func, $key_compare_func) );
        } catch (TypeError $e) {
            echo $e->getMessage(), "\n";
        }
    }
    var_dump( array_uintersect_uassoc($array1, $value, $data_compare_func, $key_compare_func) );
    function foo($e) {
        var_dump(__FUNCTION__."(): ".get_class($e)." thrown!");
    }
    function foo1($e) {
        var_dump(__FUNCTION__."(): ".get_class($e)." thrown!");
    }
    var_dump(__FUNCTION__."(): ".get_class($e)." thrown!");
    $thisdir = __DIR__;
    $filename = $thisdir . "/bug47667.zip";
    unlink($filename);
    $file = __DIR__ . '/bug38212私はガラスを食べられます.gd2';
    $im1 = imagecreatetruec
    ;
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
    zerofill(8, $link, 'FLOAT');
    function dumpElement() {
        list($value) = yield;
        var_dump($value);
    }
    $fixedArray = new SplFixedArray(1);
    $generator = dumpElement();
    $generator->send($fixedArray);
    var_dump($br);
    $cert = "file://" . __DIR__ . "/cert.crt";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_CLIENT, array($cpca)));
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
    $ai->current();
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
    $db = getDbConnection();
    var_dump($db->getAttribute(PDO::DBLIB_ATTR_SKIP_EMPTY_ROWSETS));
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
    printf("printf test 12:%5.2f\n", -12.34);
    $meta_res = $stmt->result_metadata();
    $field = $meta_res->fetch_field();
    printf("Flags        : %d\n", $field->flags);
    class A {
        public function __call($name, $args) {
            for ($i = 0; $i < 5; $i++) {
                yield $i;
            }
        }
    }
    $a = new A();
    foreach ($a->gen() as $n) {
        var_dump($n);
    }
    var_dump($n);
    ob_end_clean();
    $ar1 = array("row1" => 2, "row2" => 1);
    var_dump($ar1);
    $r = new ResourceBundle( 'en_US', BUNDLE );
    printf( "testint: %d\n", $r['testint'] );
    ob_start();
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
    printf("[005] Field information seems wrong, %s [%d] %s\n", $column_def,
                    mysqli_errno($link), mysqli_error($link));
    $b = new SplObjectStorage();
    $object = new StdClass();
    $b->attach($object);
    $dom = Dom\HTMLDocument::createEmpty();
    $container = $dom->appendChild(createElement($dom, "container"));
    $container->appendChild(createElementNS($dom, "urn:a", "foo:HTML", "7"));
    $bert = "file://" . __DIR__ . "/bug41033.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_ENCRYPT, array($cpca), $utfl));
    $im = imagecreate(800, 800);
    imageline($im, 150, 150, 650, 150, IMG_COLOR_STYLED);
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug54028_2" . DIRECTORY_SEPARATOR;
    $dirs = array("a", "ソ", "ゾ", "şŞıİğĞ", "多国語", "王", "汚れて掘る");
    
    mkdir($prefix);
    foreach ($
    mkdir($prefix . $d);
    }
    
    $old_cwd = getcwd();
    forea
    $now = $prefix . $d;
        var_dump(chdir($now));
        var_dump($dn = realpath("."));
        var_dump($d == get_basename_with_cp($dn, 65001, false));
    }
    chdir($old_cwd);
    
    foreach (
    rmdir($prefix . $d);
    }
    rmdir($prefix);
    
    ?>
    ($prefix);
    
    ?>;
    var_dump(filter_var("", FILTER_SANITIZE_ENCODED));
    var_dump(filter_var("", FILTER_SANITIZE_ENCODED));
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
    $trace_file = '/tmp/mysqli_debug_phpt.trace';
    printf("[003] Trace file '%s' has not been created\n", $trace_file);
    unserialize('a:2:{i:0;O:9:"000000000":10000000');
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
    printf("# %s\n", $name);
    $date1 = new DateTime("Tuesday");
    $date2 = DateTime::createFromFormat("D H i s", "Tuesday 0 00 00");
    var_dump($date1->format('D') == $date2->format('D'));
    $dom = Dom\HTMLDocument::createEmpty();
    var_dump($dom->lookupNamespaceURI(""));
    $dom = Dom\HTMLDocument::createEmpty();
    dumpNodeList($dom->getElementsByTagName("HTML"));
    $formatter = new \NumberFormatter('en', \NumberFormatter::DECIMAL);
    $value = $formatter->parse('2147483647', \NumberFormatter::TYPE_INT32);
    var_dump($value);
    putenv('REDIR_TEST_DIR='.__DIR__ . '/../../pdo/tests/');
     ($dirs as $d) {
       
    dirs as $d) {
    ;
    var_dump(exif_read_data('data:image/jpg;base64,TU0AKgAAAAwgICAgAAIBDwAEAAAAAgAAACKSfCAgAAAAAEZVSklGSUxN'));
    $array_test = array("a", "b", "d", 7, "u" => "U", -4, "-.008" => "neg.008");
    var_dump( end($array_test) );
    var_dump(version_compare('1.2', '2.1', '??'));
    ['pid' => $pid, 'uri' => $uri] = http_server('genResponses', $output);
    $document = new \DOMDocument();
    $document->loadHTMLFile($uri);
    $client = new soapclient(NULL, [
      'location' => 'http://' . PHP_CLI_SERVER_ADDRESS,
      'uri' => 'misc-uri',
      'soap_version' => SOAP_1_2,
      'user_agent' => 'Vincent JARDIN, test headers',
      'trace' => true, /* record the headers before sending */
      'stream_context' => stream_context_create([
        'http' => [
          'header' => sprintf("MIME-Version: 1.0\r\n"),
          'content_type' => sprintf("Multipart/Related")
        ],
      ]),
    ]);
    $headers = $client->__getLastRequestHeaders();
    printf("Content-Type NOK %s" . PHP_EOL, $headers);
    $document = new \DOMDocument();
    $h1 = $document->getElementsByTagName('h1');
    var_dump($h1->length);
    $dom = new DOMDocument;
    $element = $dom->appendChild($dom->createElement('root'));
    $element->prepend('x', new DOMEntity);
    $client = new SoapClient(__DIR__ . '/bug49278.wsdl', array('location' => "http://".PHP_CLI_SERVER_ADDRESS, 'trace' => 1));
    var_dump($client->__getLastResponseHeaders());
    printf("printf test 9:<%-20s>\n", "bar");
    phpinfo(INFO_VARIABLES);
    mysqli_close($link);
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_SERVER));
    var_dump(json_last_error_msg());
    $cert = "file://" . __DIR__ . "/cert.crt";
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_CLIENT));
    sprintf('%2147483648$s, %2$s %1$s', "a", "b");
    $array = new ArrayObject();
    var_dump($array->offsetExists('key'));
    printf("printf test 24:%.5s\n", "abcdefghij");
    ob_start();
    $batch_file_content = <<<EOT
    @echo off
    powershell -Command "Write-Output '%0%'"
    powershell -Command "Write-Output '%1%'"
    EOT;
    $batch_file_path = __DIR__ . '/ghsa-9fcc-425m-g385_003.bat';
    file_put_contents($batch_file_path, $batch_file_content);
    $ch = curl_init();
    var_dump(curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 1));
    var_dump(mb_stripos('Hello', 'e', 0, '8bit'));
    function foo() {
      var_dump("hello");
    }
    foo();
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
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $phar = new Phar($fname);
    $phar->stopBuffering();
    $datePre = DateTime::createFromFormat("!D d M Y", "Fri 17 may 2011");
    $datePost = DateTime::createFromFormat("!d M Y D", "17 may 2011 Fri");
    var_dump($datePre->format("Y-m-d") == $datePost->format("Y-m-d"));
    var_dump($_POST);
    $str = "repeater id='loopt' dataSrc=subject columns=2";
    preg_match_all("/(['\"])((.*(\\\\\\1)*)*)\\1/sU",$str,$str_instead);
    function test()
    {
        echo "Undefined index here: '{$data['HTTP_HEADER']}'\n";
    }
    test();
    (function() {
    	try {
    		foo(); // Error
    	} catch (\Exception $e) {
    		var_dump($e);
    	} catch (\ParseError $e) {
    		var_dump($e);
    	}
    })();
    var_dump(json_decode('{"":"value", "key":"value"}', true));
    $db = getDbConnection();
    $sql = '
        SET NOCOUNT ON
        SELECT 0 AS [result]
    ';
    $stmt = $db->query($sql);
    var_dump($stmt->nextRowset());
    $r = new ResourceBundle( 'en_US', BUNDLE );
    print_r( $r['testvector'] );
    $headers1 = exif_read_data(__DIR__ . '/bug64739.jpg');
    var_dump($headers1['Title'][0] === '?');
    var_dump(0);
    $cert = "file://" . __DIR__ . "/cert.crt";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SMIME_SIGN, array($cpca)));
    $bert = "file://" . __DIR__ . "/bug41033.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_ENCRYPT, array($cpca), $utfl));
    class MyObjectStorage extends SplObjectStorage {
        // Overwrite getHash() with just some (working) test-method
        public function getHash($object): string { return get_class($object); }
    }
    class TestObject {}
    $list = new MyObjectStorage();
    $list->attach(new TestObject());
    $ch = curl_init();
    $fp = fopen(PHP_OS_FAMILY === 'Windows' ? 'nul' : '/dev/null', 'w');
    curl_setopt($ch, CURLOPT_FILE, $fp);
    bar();
    $now = new DateTime('2018-11-03 11:34:20.781751');
    $ago = new DateTime('2018-11-03 11:34:20.000000');
    $diff = $now->diff($ago);
    var_dump($diff->invert, $diff->s, $diff->f);
    $bert = "file://" . __DIR__ . "/bug41033.pem";
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_CRL_SIGN));
    class_alias( 'stdClass', 'bool' );
    var_dump(c1::$a2);
    set_exception_handler("foo");
    $cert = "-----BEGIN CERTIFICATE-----
    MIIDXDCCAkSgAwIBAgIKq/f5U3FzthdKUzANBgkqhkiG9w0BAQUFADBcMRIwEAYD
    VQQDEwlzZXRhcGRmLWExCTAHBgNVBAoTADEJMAcGA1UECxMAMSMwIQYJKoZIhvcN
    AQkBFhRzdXBwb3J0QHNldGFzaWduLmNvbTELMAkGA1UEBhMCREUwHhcNMTUwOTA4
    MDkzNDExWhcNMjAwOTA4MDkzNDExWjBcMRIwEAYDVQQDEwlzZXRhcGRmLWExCTAH
    BgNVBAoTADEJMAcGA1UECxMAMSMwIQYJKoZIhvcNAQkBFhRzdXBwb3J0QHNldGFz
    aWduLmNvbTELMAkGA1UEBhMCREUwggEiMA0GCSqGSIb3DQEBAQUAA4IBDwAwggEK
    AoIBAQCkmTLvUIYfqAKC1CHVgABlemrFIVRm4JGeB0jIGofyrm3yVwR4YcK0eUmt
    /0nbFfsFsU0/C9dXKZYD42t5YpLFsj666Z1EoU1CfSIW2bf0HaWVJ+oNT5twS3dv
    RTzAcnPM44GxO4y6GUW6un0/bT/MZbFKbb3NI1L0mwY7EoqUXR68XxuHqWETaslm
    Sbp1XvbLsJjgV9X3ihi7JC7A9kEzrKh+RBsXEXwlSv5JO2TUdwq9P4EbjqvgiaV1
    vFNAArioX5pIUIm9ahAm8d7jjW6DFfV798rTzaQ3GJs0yC3UD6xhmbTbdC/D9Pot
    8RGu89Fx6E+O5j4LwGH4kiYjgvYZAgMBAAGjIDAeMA8GCSqGSIb3LwEBCgQCBQAw
    CwYDVR0PBAQDAgOYMA0GCSqGSIb3DQEBBQUAA4IBAQBCA8iXz7zxAmCWNZ0faiLm
    aKw8u2PUq+EPKrGKc9Q70Ksw/e/EHvWrghFzmu5MOZRn/QIWq++sbbc8eOiaRDE8
    lWCW596FLW4habXKw0sjDNcyEBArPgDp17O6NgHqI2U1KL1P2Y40e0YH2BWxNS+f
    pmWZekjiC6jfId2JGsyPZUTX4USwthG4dFX0/BWYg+K7kXvQzMobes2NxW3Iqn8h
    FUNgraCzlQMSfE2gwAMSUXTJubUGorj4LFYSiLIIJvf6KlmuR5uOIi5lSjSeZf5E
    FLEHVhrz3o2icUeyb1K1BTAQRZ/H3GZ0QpgqSK5vmuV9C+rzezQMoy4/8UUnNPMt
    -----END CERTIFICATE-----
    ";
    $tmpFileIn = tempnam(sys_get_temp_dir(), 'test');
    $tmpFileOut = tempnam(sys_get_temp_dir(), 'test');
    openssl_pkcs7_encrypt($tmpFileIn, $tmpFileOut, [$cert], array(), PKCS7_BINARY, OPENSSL_CIPHER_AES_128_CBC);
    $link->close();
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
    $pdo->exec("create temp table t (n int, t text)");
    call_user_func("static::ok");
    $now = new DateTime('2018-11-03 11:34:20.781751');
    $ago = new DateTime('2018-11-03 11:34:20.000000');
    $diff = $now->diff($ago, true);
    var_dump($diff->invert, $diff->s, $diff->f);
    $i= DateInterval::createFromDateString('2 days');
    var_dump($i);
    ini_set('mysqlnd.fetch_data_copy', false);
    sprintf('%3$s, %2$s %1$s', "a", "b");
    $link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
    $link->close();
    $references = array();
    debug_zval_dump($references);
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
    $bug_gh16013_callback_struct->return_int32 = function($val) use($ffi) {
        $cdata = $ffi->new('int32_t');
        $cdata->cdata = $val;
        return $cdata;
    };
    var_dump(($bug_gh16013_callback_struct->return_int32)(-100000));
    $db = PDOTest::factory();
    var_dump($db->query("SELECT * from test34630")->fetchAll(PDO::FETCH_ASSOC));
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $phar = new Phar($fname);
    var_dump($phar->getStub());
    $f = __DIR__."/data/test.txt.gz";
    $h = gzopen($f, 'r');
    gzclose($h);
    class C extends stdClass {
        public int $a;
    }
    $reflector = new ReflectionClass(C::class);
    $obj = new C();
    $reflector->resetAsLazyProxy($obj, function () {});
    $array = array('f' => "first", "s" => 'second', 1, 2.222);
    $temp_array = $array;
    var_dump($temp_array);
    $mysqli = new mysqli("$host:$port", $user, $passwd, $db);
    $tbl = "test";
    $sql = "DROP TABLE IF EXISTS $tbl";
    $mysqli->query($sql);
    ['pid' => $pid, 'uri' => $uri] = http_server('genResponses', $output);
    $document = new \DOMDocument();
    $document->loadHTMLFile($uri);
    $id_1_date = '2014-09-23';
    $id_2_date = '2014-09-24';
    $conn = odbc_connect($dsn, $user, $pass);
    odbc_exec($conn, "INSERT INTO bug68087(ID, VARCHAR_COL, DATE_COL) VALUES (1, 'hello', '$id_1_date'), (2, 'helloagain', '$id_2_date')");
    function test(array... $args) {
        var_dump($args);
    }
    test();
    function foo() {
      var_dump("hello");
    }
    foo();
    $ar1 = array("row1" => 2, "row2" => 1);
    $args = array(&$ar1);
    var_dump(call_user_func_array("array_multisort", $args));
    $tempstring = "abcdefghjklmnpqrstuvwxyz";
    var_dump(sprintf("%s", $tempstring, $tempstring, $tempstring));
    printf("[002] [%d] %s\n", $link->errno, $link->error);
    rename("phar://a.phar/x", "phar://a.phar/y");
    $cert = "file://" . __DIR__ . "/cert.crt";
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_CLIENT));
    var_dump(getimagesize(__DIR__ . "/test13pix.swf"));
    printf("printf test 15:%b\n", 170);
    $originalEnvelopeData = "any string with \x1a is cut at this point.";
    $tmpFileIn = tempnam(sys_get_temp_dir(), 'test');
    var_dump(filesize($tmpFileIn) === strlen($originalEnvelopeData));
    date_default_timezone_set('UTC');
    var_dump(baz());
    class C {
        public int $a;
    }
    $reflector = new ReflectionClass(C::class);
    $obj = new C();
    $reflector->initializeLazyObject($obj);
    function foo() {
      $i = 1;
      $x = 2;
      var_dump($i=$x);
      return $i;
    }
    var_dump(foo());
    printf("%0\$s", 1);
    $fp = php_cli_server_connect();
    fclose($fp);
    ob_flush();
    $dt = DateTime::createFromFormat('Y-m-d!', '2011-02-02');
    var_dump($dt);
    $fiber = new Fiber(function (): void {
        $self = Fiber::getCurrent();
        $self->resume();
    });
    $fiber->start();
    $db = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
    $stmt = $db->prepare("CALL testSp()");
    $stmt->execute();
    var_dump( range(7.0, 1.0, 6.5) );
    $xmlString = "<root><a><b>1</b><b>2</b><b>3</b></a></root>";
    $xml = simplexml_load_string($xmlString);
    $nodes = $xml->a->b;
    function test($nodes, $name, $callable) {
        echo "--- $name ---\n";
        foreach ($nodes as $nodeData) {
            echo "nodeData: " . $nodeData . "\n";
            $callable($nodes);
        }
    }
    test($nodes, "manipulation combined with querying", function ($n) {
        $n->addAttribute("attr", "value");
        (bool) $n["attr"];
        $n->addChild("child", "value");
        $n->outer[]->inner = "foo";
        (bool) $n->outer;
        (bool) $n;
        isset($n->outer);
        isset($n["attr"]);
        unset($n->outer);
        unset($n["attr"]);
        unset($n->child);
    });
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt', Pdo\Pgsql::class, true);
    var_dump($pdo->query('SELECT 1;')->fetchAll());
    $dom = new DOMDocument;
    var_dump($dom->getElementById('x')?->nodeName);
    function test(string $name, object $obj) {
        printf("# %s:\n", $name);
    
        var_dump($obj);
        var_dump($obj->a);
        var_dump($obj);
    }
    var_dump($obj->a);
    printf("[002] [%d] %s\n", $link->errno, $link->error);
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
    $prefix . "フォルダ";
    
    mkdir($prefi
    et_basename;
    $fp = tmpfile();
    rewind($fp);
    var_dump(imagecreatefromgd2(__DIR__ . DIRECTORY_SEPARATOR . 'bug73868.gd2'));
    var_dump(soundex("Euler")       == soundex("Ellery"));
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
    $dom = Dom\XMLDocument::createFromString(<<<XML
    <root>
        <test1 xml:id="x"/>
        <test2 xml:id="x"/>
    </root>
    XML);
    var_dump($dom->getElementById('x')?->nodeName);
    ini_set("soap.wsdl_cache_enabled",0);
    $cert = "file://" . __DIR__ . "/cert.crt";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SMIME_SIGN, array($cpca), $utfl));
    $formatter = new \NumberFormatter('en', \NumberFormatter::DECIMAL);
    $value = $formatter->parse('2147483650', \NumberFormatter::TYPE_INT64);
    var_dump($value);
    $inputs = array(
        '<frameset > </frameset>',
        '<html><frameset> </frameset> </html',
    );
    foreach ($inputs as $input) {
    
        $t = tidy_parse_string($input);
        $t->cleanRepair();
        var_dump(tidy_get_body($t));
    }
    $t = tidy_parse_string($input);
    var_dump(tidy_get_body($t));
    $im = imagecreate(800, 800);
    imageline($im, 200, 100, 700, 100, IMG_COLOR_STYLED);
    ini_set("session.save_handler","files");
    class TrampolineTest {
        public function __call(string $name, array $arguments) {
            echo 'Trampoline for ', $name, PHP_EOL;
        }
    }
    $o = new TrampolineTest();
    $callback1 = [$o, 'trampoline1'];
    spl_autoload_register($callback1);
    function gen() {
        yield 0;
        yield from gen();
    }
    function bar($gen) {
        yield from $gen;
    }
    $gen = gen();
    $a = bar($gen);
    $a->next();
    $conn = pg_connect($conn_str);
    $table='test_68638';
    pg_update($conn,$table, array('value' => '+inf'), array('id' => 3));
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
    $t->test();
    $bert = "file://" . __DIR__ . "/bug41033.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_ANY, array($cpca), $utfl));
    $fp = fopen(__FILE__, "r");
    fclose($fp);
    var_dump ( $vars );
    $array = array('f' => "first", "s" => 'second', 1, 2.222);
    $temp_array = $array;
    var_dump($temp_array);
    $certificateGenerator = new CertificateGenerator();
    $certificateGenerator->saveCaCert(__DIR__ . "/san-cert.pem");
    var_dump(filter_var("<data&sons>", FILTER_SANITIZE_ENCODED));
    function &test() {
        try {
            return $a;
        } finally {
            $a = 2;
        }
    }
    var_dump(test());
    $im = ImageCreateTrueColor(10, 10);
    imagesavealpha($im, true);
    $fp = fopen('php://input', 'r+');
    fclose($fp);
    function t2()
    {
        ob_start("test");
        echo "Hello from t2 1 ";
            ob_flush();
            echo "Hello from t2 2 ";
            ob_end_flush();
    }
    t2();
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
    $d0 = $prefix . "ソフト";
    $d1 =
    ith_cp($d0, 65001);
    get_basename_;
    $heredoc_str = <<<EOD
    %
    #$*&
    text & @()
    EOD;
    $str_arr = array(
      //double quoted strings
      "%",
      "#$*",
      "text & @()",
    
      //single quoted strings
      '%',
      '#$*',
      'text & @()',
    
      //heredoc string
      $heredoc_str
    );
    $from = "%#$*&@()";
    $to = "specials";
    for($index = 0; $index < count($str_arr); $index++) {
      echo "-- Iteration $count --\n";
    
      $str = $str_arr[$index];  //getting the array element in 'str' variable
    
      //strtr() call in three args syntax form
      var_dump( strtr($str, $from, $to) );
    
      //strtr() call in two args syntax form
      var_dump( strtr($str, $replace_pairs) );
    
      $count++;
    }
    $str = $str_arr[$index];
    var_dump( strtr($str, $from, $to) );
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
    zerofill(2, $link, 'TINYINT');
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
    $reflector = new ReflectionClass(C::class);
    $obj = $reflector->newLazyGhost(function () {
        throw new \Exception('initializer');
    });
    test('Ghost', $obj);
    $ftp = ftp_connect('127.0.0.1', $port);
    var_dump(ftp_login($ftp, 'anonymous', 'IEUser@'));
    $anon = new class {
        public int $field;
        function __construct() {
            $this->field = 2;
        }
    };
    var_dump($anon->field);
    var_dump(count($cert_data['extracerts']));
    public static function CallBack(Element $elem)
        {
            $elem->ThrowException();
        }
    $elem->ThrowException();
    mail("some.address.it.wont.ever.reach@lookup.and.try.to.find.this.host.name","subject","a", NULL);
    $im = imagecreatetruecolor(1, 1);
    imagescale($im, 1, 1, IMG_BICUBIC_FIXED);
    print_r($str_instead);
    register_shutdown_function(function () {
        echo "register_shutdown_function()\n";
        throw new \Exception('shutdown');
    });
    $array_test = array("a", "b", "d", 7, "u" => "U", -4, "-.008" => "neg.008");
    reset( $array_test );
    var_dump(gc_collect_cycles());
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
    function __construct($val) {
            $this->priv_member = $val;
        }
    $a = array("0.1" => new cr(9), "0.5" => new cr(12), 0 => new cr(23), 1 => new cr(4), 2 => new cr(-15),);
    $b = array("0.2" => new cr(9), "0.5" => new cr(22), 0 => new cr(3), 1 => new cr(4), 2 => new cr(-15),);
    $result = array_udiff_assoc($a, $b, array("cr", "comp_func_cr"));
    foreach($result as $val) {
        $val->dump();
    }
    $result = array_udiff_assoc($a, $b, array("cr", "comp_func_cr2"));
    foreach($result as $val) {
        $val->dump();
    }
    $val->dump();
    class A {
        public $b;
    }
    $a = new A;
    var_dump(serialize($a));
    $xmlString = "<root><a><b>1</b><b>2</b><b>3</b></a></root>";
    $xml = simplexml_load_string($xmlString);
    $nodes = $xml->a->b;
    function test($nodes, $name, $callable) {
        echo "--- $name ---\n";
        foreach ($nodes as $nodeData) {
            echo "nodeData: " . $nodeData . "\n";
            $callable($nodes);
        }
    }
    test($nodes, "children", fn ($n) => $n->children());
    $dest = __DIR__ . "/bug40228";
    $zip = new ZipArchive;
    $zip->extractTo($dest);
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $phar = new Phar($fname);
    $phar->stopBuffering();
    $dom = new DOMDocument;
    $element = $dom->appendChild($dom->createElement('root'));
    $element->prepend('x', new DOMEntity);
    set_exception_handler(null);
    var_dump(mysqli_get_server_version($link));
    $im = imagecreate(800, 800);
    imageline($im, 150, 150, 650, 150, IMG_COLOR_STYLED);
    $GLOBALS['b'] = 2;
    $b = &$GLOBALS['b'];
    $GLOBALS['b'] = 3;
    $a = 4;
    $c = $b;
    $b = 'x';
    var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b'], $c);
    $filename = "bug51997.bz2";
    $str = "This is a test string.\n";
    $bz = bzopen($filename, "w");
    bzwrite($bz, $str);
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug54028_2" . DIRECTORY_SEPARATOR;
    ;
    function test(array... $args) {
        var_dump($args);
    }
    test([0], [1], 2);
    var_dump($_SESSION);
    ['pid' => $pid, 'uri' => $uri] = http_server('genResponses', $output);
    $document = new \DOMDocument();
    $document->loadHTMLFile($uri);
    class A {
        public $a;
    }
    $a = new A();
    $b = new A();
    $prop = new ReflectionProperty($b, 'dyn');
    $prop->setRawValue($a, 1);
    $zip = new ZipArchive();
    $zip->close();
    $db = PDOTest::factory();
    $db->exec('CREATE TABLE test34630 (id int NOT NULL PRIMARY KEY, val BLOB)');
    $fmt = new NumberFormatter('en_US', NumberFormatter::DECIMAL);
    $fmt->parse('abc');
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
    $pdo->exec("insert into t values (0, 'original')");
    $client = new SoapClient(__DIR__ . '/bug49278.wsdl', array('location' => "http://".PHP_CLI_SERVER_ADDRESS, 'trace' => 1));
    var_dump($client->__getLastResponse());
    $attr = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4 COLLATE utf8mb4_unicode_ci; SET SESSION sql_mode=traditional',
        PDO::ATTR_STRINGIFY_FETCHES => true,
    ];
    $pdo = MySQLPDOTest::factoryWithAttr($attr);
    var_dump($pdo->query('SELECT 42')->fetchColumn(0));
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
    $reflector = new ReflectionClass(C::class);
    $obj = $reflector->newLazyGhost(function () {
        throw new \Exception('initializer');
    });
    test('Ghost', $obj);
    var_dump(strncmp("test ", "e", 0));
    var_dump(preg_replace_callback_array([], ''));
    date_default_timezone_set('UTC');
    var_dump(array_pop($input), $input);
    $outfile = tempnam(sys_get_temp_dir(), "ssl");
    $contentfile = tempnam(sys_get_temp_dir(), "ssl");
    $eml = __DIR__ . "/signed.eml";
    $cainfo = array();
    var_dump(openssl_pkcs7_verify($eml, PKCS7_NOVERIFY, $outfile, $cainfo, $outfile, $contentfile));
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
    $tester->close();
    $cert = "-----BEGIN CERTIFICATE-----
    MIIDXDCCAkSgAwIBAgIKq/f5U3FzthdKUzANBgkqhkiG9w0BAQUFADBcMRIwEAYD
    VQQDEwlzZXRhcGRmLWExCTAHBgNVBAoTADEJMAcGA1UECxMAMSMwIQYJKoZIhvcN
    AQkBFhRzdXBwb3J0QHNldGFzaWduLmNvbTELMAkGA1UEBhMCREUwHhcNMTUwOTA4
    MDkzNDExWhcNMjAwOTA4MDkzNDExWjBcMRIwEAYDVQQDEwlzZXRhcGRmLWExCTAH
    BgNVBAoTADEJMAcGA1UECxMAMSMwIQYJKoZIhvcNAQkBFhRzdXBwb3J0QHNldGFz
    aWduLmNvbTELMAkGA1UEBhMCREUwggEiMA0GCSqGSIb3DQEBAQUAA4IBDwAwggEK
    AoIBAQCkmTLvUIYfqAKC1CHVgABlemrFIVRm4JGeB0jIGofyrm3yVwR4YcK0eUmt
    /0nbFfsFsU0/C9dXKZYD42t5YpLFsj666Z1EoU1CfSIW2bf0HaWVJ+oNT5twS3dv
    RTzAcnPM44GxO4y6GUW6un0/bT/MZbFKbb3NI1L0mwY7EoqUXR68XxuHqWETaslm
    Sbp1XvbLsJjgV9X3ihi7JC7A9kEzrKh+RBsXEXwlSv5JO2TUdwq9P4EbjqvgiaV1
    vFNAArioX5pIUIm9ahAm8d7jjW6DFfV798rTzaQ3GJs0yC3UD6xhmbTbdC/D9Pot
    8RGu89Fx6E+O5j4LwGH4kiYjgvYZAgMBAAGjIDAeMA8GCSqGSIb3LwEBCgQCBQAw
    CwYDVR0PBAQDAgOYMA0GCSqGSIb3DQEBBQUAA4IBAQBCA8iXz7zxAmCWNZ0faiLm
    aKw8u2PUq+EPKrGKc9Q70Ksw/e/EHvWrghFzmu5MOZRn/QIWq++sbbc8eOiaRDE8
    lWCW596FLW4habXKw0sjDNcyEBArPgDp17O6NgHqI2U1KL1P2Y40e0YH2BWxNS+f
    pmWZekjiC6jfId2JGsyPZUTX4USwthG4dFX0/BWYg+K7kXvQzMobes2NxW3Iqn8h
    FUNgraCzlQMSfE2gwAMSUXTJubUGorj4LFYSiLIIJvf6KlmuR5uOIi5lSjSeZf5E
    FLEHVhrz3o2icUeyb1K1BTAQRZ/H3GZ0QpgqSK5vmuV9C+rzezQMoy4/8UUnNPMt
    -----END CERTIFICATE-----
    ";
    $pkey = "-----BEGIN PRIVATE KEY-----
    MIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQCkmTLvUIYfqAKC
    1CHVgABlemrFIVRm4JGeB0jIGofyrm3yVwR4YcK0eUmt/0nbFfsFsU0/C9dXKZYD
    42t5YpLFsj666Z1EoU1CfSIW2bf0HaWVJ+oNT5twS3dvRTzAcnPM44GxO4y6GUW6
    un0/bT/MZbFKbb3NI1L0mwY7EoqUXR68XxuHqWETaslmSbp1XvbLsJjgV9X3ihi7
    JC7A9kEzrKh+RBsXEXwlSv5JO2TUdwq9P4EbjqvgiaV1vFNAArioX5pIUIm9ahAm
    8d7jjW6DFfV798rTzaQ3GJs0yC3UD6xhmbTbdC/D9Pot8RGu89Fx6E+O5j4LwGH4
    kiYjgvYZAgMBAAECggEABO4JOGF4KOvQanB11HYNXPy4BLA5Pc0RU3M6pvKjen1m
    sdzRF5Vu/laJIkbchI0xm+Op8X7Wa+gFFBf8RLIS/QyYBCNh2Fe/74M9sYNDFxLJ
    vjBIOm6VVF1QRhMD7SwoY303adJjpkHCRMPX4z3PjLzJfPYROpsJnaWkf8GwCJ4+
    kufOhYcE8ekuLX7EzXFU74Uo0OnMEhMJgiAjlHhC21YLkgLoGq45sdktVgvD6sds
    7BcmH6oUCDCJ8wxUVM1+Ks1D3vKHfeAhCFHvj9M/lf5OWylhmQh4CQf+NMDNsAc6
    mXNIzUvZEgs/PJpd3SymHchf60m6faJtGv43GsdsgQKBgQDUx8t649O/vGRI26t4
    4XrzVC2w5271UlhFaRiH03BrV+pECVoH4bw+ZIUuGke2xe+LrNkhMNJSGcbB0WDa
    Jes+4Gf++AuSXRvMo+xHenfgUWQqYHJPkh5q6gknZ2YDfikFNLdqApXvp0m+FaVP
    +F/2HMjQfTITQgkAiEn45s4agQKBgQDGCAZkIUcdyXQTplLE0Zx1/uiTBrQGyzsb
    cDgAQIHt19wIRjoGOFatAj6TQ5gUj9Remn12v6d5Wi02i7hlu8V6O1VXLGqqeQ27
    0MHBXzrFBVljOz96D7VP5Xx0DB1cGMbtg5ivjd91OUVrwC7fbXE9sfOI1FqlTb7p
    6xi9Wl+fmQKBgGdzR/vUfqPOvVcq7gBUaAmb2KcUrj65rU753MJUy2h1EuHHRi1k
    07fl+VZD0rALJf7bp6laajcebyLWYGdPXkNwqT8ua7naaOSiogLSiSvXhoKP56PG
    H+HNLWwp+lAia2Erky0IWstsow62yWvLDyTCM+QhqlHwnh3TJVvNI1GBAoGAUl+y
    MOJ6z5Ql2aqc0UwT1i1Tlxz5s73D93Tlho1Ovp3E5Bg6OK4kt9CwMNe0IhF2GGgQ
    +l1cj6kIF6Fk8cR6r46QwDM0p3a1VMPQZNx0+NFxzkot7FsuY26lJyyG5fFUhiXw
    VE4ifoN1Mg3+MWg3657jG66hihNd77WgU9uM3TkCgYEAypuvVrfFrrtXnbEUcBHq
    mguKumn9miD9DPb6gi8ZaKOddGzw+qFPukiqi7rM3oRMg02evfK/VQC87Gmev663
    RV9sQOlB9gNlMOOw/0R3ABEWDoSRCcrLhb6Z5Y72WVnZvpTPO0cDw2i1hyaEM6d+
    2WR7c6FhRCLxG0DObEOfiO0=
    -----END PRIVATE KEY-----
    ";
    $tmpFileOut = tempnam(sys_get_temp_dir(), 'test');
    $tmpFileOut2 = tempnam(sys_get_temp_dir(), 'test');
    openssl_pkcs7_decrypt($tmpFileOut, $tmpFileOut2, $cert, $pkey);
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
    printf("# %s\n", $name);
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
    $dbh = @pg_connect($conn_str);
    $res = pg_query($dbh, 'SELECT test_notice()');
    var_dump($res);
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
    function display($res)
    {
    	echo implode("\n", array_map(fn($row) => implode("\t", $row), $res))."\n";
    }
    display($pdo->query("select * from t2")->fetchAll());
    $empty_string = <<<EOT
    EOT;
    $blank_line = <<<EOT
    
    EOT;
    $multiline_string = <<<EOT
    <html>Roy&#039;s height &gt; Sam&#039;s height
    13 &lt; 25
    1111 &amp; 0000 = 0000
    &quot;This is a double quoted string&quot;
    EOT;
    $diff_whitespaces = <<<EOT
    <html>Roy&#039;s height\r &gt; Sam\t&#039;s height
    1111\t\t &amp; 0000\v\v = \f0000
    &quot; heredoc\ndouble quoted string. with\vdifferent\fwhite\vspaces&quot;
    EOT;
    $numeric_string = <<<EOT
    <html>11 &lt; 12. 123 string 4567
    &quot;string&quot; 1111\t &amp; 0000\t = 0000\n;
    EOT;
    $quote_char_string = <<<EOT
    <html>&lt; This's a string with quotes:
    "strings in double quote" &amp;
    'strings in single quote' &quot;
    this\line is &#039;single quoted&#039; /with\slashes </html>
    EOT;
    $res_heredoc_strings = array(
      //heredoc strings
      $empty_string,
      $blank_line,
      $multiline_string,
      $diff_whitespaces,
      $numeric_string,
      $quote_char_string
    );
    for($index =0; $index < count($res_heredoc_strings); $index ++) {
      echo "-- Iteration $count --\n";
      var_dump( htmlspecialchars_decode($res_heredoc_strings[$index]) );
      $count++;
    }
    var_dump( htmlspecialchars_decode($res_heredoc_strings[$index]) );
    var_dump(filter_var("<data&sons>", FILTER_SANITIZE_ENCODED, FILTER_FLAG_ENCODE_LOW));
    );
        var_dump($d == get_base;
    $meta_res = $stmt->result_metadata();
    $field = $meta_res->fetch_field();
    printf("Maxlength    : %d\n", $field->max_length);
    printf("printf test 9:<%-20s>\n", "bar");
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
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_CLIENT, array($cpca)));
     ($dirs as $d) {
       
    dirs as $d) {
    ;
    print_r($str_instead);
    $inputs = array(
        '<frameset > </frameset>',
        '<html><frameset> </frameset> </html',
    );
    foreach ($inputs as $input) {
    
        $t = tidy_parse_string($input);
        $t->cleanRepair();
        var_dump(tidy_get_body($t));
    }
    $t = tidy_parse_string($input);
    var_dump(tidy_get_body($t));
    catch (\Exception $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
    catch (\Exception $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
    catch (\Exception $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
    printf("%s: %s\n", $e::class, $e->getMessage());
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
    var_dump($line);
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
    $output = array();
    var_dump($output);
    $sql = "SELECT 11111 as `1`, 22222 as `2`";
    $link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
    $link->real_query($sql);
    $a = array(1,2,3);
    $s1 = "some string";
    var_dump($a + $s1);
    var_dump(preg_replace_callback_array([], ''));
    function bar($x='no argument')
    {
        throw new Exception("This is an exception from bar({$x}).");
    }
    bar('first try');
    imagecreatefrompng('php://filter/read=convert.base64-encode/resource=' . __DIR__ . '/test.png');
    var_dump(intlcal_is_weekend(1));
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
    $prefix . "フォルダ";
    
    mkdir($prefi
    ith_cp($d1, 65001);
    
    touch("$d0\\;
    var_dump( range(1, 7, 0) );
    unserialize('a:2:{i:0;O:9:"000000000":10000000');
    $start_key = 0;
    $num = 2;
    $unset_var = 10;
    class test
    {
      var $t = 10;
      function __toString()
      {
        return "testObject";
      }
    }
    $values = array(
                // empty string
      /* 1  */  "",
                '',
                // objects
      /* 3  */  new test(),
    
                // undefined variable
                @$undefined_var,
    
                // unset variable
      /* 5  */  @$unset_var,
    );
    for($index = 0; $index < count($values); $index ++)
    {
      echo "-- Iteration $counter --\n";
      $val = $values[$index];
    
      var_dump( array_fill($start_key , $num , $val) );
    
      $counter++;
    }
    $val = $values[$index];
    var_dump( array_fill($start_key , $num , $val) );
    function setStyleAndThickness($im, $color, $thickness)
    {
        $style = array();
        $i = 0;
        while ($i < 16 * $thickness) {
            $style[$i++] = $color;
        }
        while ($i < 20 * $thickness) {
            $style[$i++] = IMG_COLOR_TRANSPARENT;
        }
        while ($i < 28 * $thickness) {
            $style[$i++] = $color;
        }
        while ($i < 32 * $thickness) {
            $style[$i++] = IMG_COLOR_TRANSPARENT;
        }
        imagesetstyle($im, $style);
        imagesetthickness($im, $thickness);
    }
    imagesetthickness($im, $thickness);
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_SIGN, array($cpca), $utfl));
    $dt = new DateTime('@1604219400');
    $dt->setTimezone(new DateTimeZone('America/Boise'));
    function byVal($arg) {
        var_dump($arg);
    }
    function byRef(&$arg) {
        var_dump($arg);
    }
    var_dump($arg);
    define ('foobar', 1);
    date_default_timezone_set("Europe/Lisbon");
    class D {
        public string $prop;
    }
    $d = new D();
    var_dump($d);
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug54028_2" . DIRECTORY_SEPARATOR;
    $dirs = array("a", "ソ", "ゾ", "şŞıİğĞ", "多国語", "王", "汚れて掘る");
    
    mkdir($prefix);
    foreach ($
    mkdir($prefix . $d);
    }
    
    $old_cwd = getcwd();
    forea
    _cwd = getcwd();
    for;
    $depth0 = "depth02";
    $depth1 = "depth1";
    $depth2 = "depth2";
    $targetDir = __DIR__ . DIRECTORY_SEPARATOR . $depth0 . DIRECTORY_SEPARATOR . $depth1 . DIRECTORY_SEPARATOR . $depth2;
    mkdir($targetDir, 0777, true);
    printf("[002] [%d] %s\n", mysqli_errno($link), mysqli_error($link));
    class Test {
        function __destruct() {
            global $box;
            $box->value = null;
        }
    }
    global $box;
    $box->value = null;
    function test($box) {
        var_dump($box->value = new Test);
    }
    var_dump($box->value = new Test);
    $ch = curl_init("https://localhost/userpwd");
    curl_setopt($ch, CURLOPT_USERPWD, null);
    $meta_res = $stmt->result_metadata();
    $field = $meta_res->fetch_field();
    printf("Decimals     : %d\n", $field->decimals);
    var_dump(sprintf("%%%.2f", 1.23456789e10));
    printf("printf test 7:%010.2f\n", 2.5);
    $ch = curl_init();
    var_dump(curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, true));
    $tests = array(
        'noon', 'midnight'
    );
    foreach ($tests as $test) {
        $t = strtotime("2005-12-22 ". $test);
        printf("%-10s => %s\n", $test, date(DATE_ISO8601, $t));
    }
    $t = strtotime("2005-12-22 ". $test);
    printf("%-10s => %s\n", $test, date(DATE_ISO8601, $t));
    session_start();
    printf("printf test 25:%-2s\n", "gazonk");
    $dt = DateTime::createFromFormat('Y-m-d|', '2011-02-02');
    var_dump($dt);
    $dt = DateTime::createFromFormat('Y-m-d!', '2011-02-02');
    var_dump($dt);
    var_dump(debug_backtrace());
    #[\AllowDynamicProperties]
    class C {
        public $b;
        public function __construct() {
            $this->a = new Canary();
        }
    }
    $obj = new C();
    var_dump($obj->a);
    function test($s) {
      echo "'".trim(str_replace("&nbsp;", " ", htmlspecialchars_decode(strip_tags(highlight_string($s,1)))))."'\n";
    }
    test('<?php echo "1";//22');
    $zip = new ZipArchive();
    $zip->setPassword('bar');
    $client = new soapclient(NULL, [
      'location' => 'http://' . PHP_CLI_SERVER_ADDRESS,
      'uri' => 'misc-uri',
      'soap_version' => SOAP_1_2,
      'user_agent' => 'Vincent JARDIN, test headers',
      'trace' => true, /* record the headers before sending */
      'stream_context' => stream_context_create([
        'http' => [
          'header' => sprintf("MIME-Version: 1.0\r\n"),
          'content_type' => sprintf("Multipart/Related")
        ],
      ]),
    ]);
    $headers = $client->__getLastRequestHeaders();
    printf("Content-Type NOK %s" . PHP_EOL, $headers);
    $certificateGenerator = new CertificateGenerator();
    $certificateGenerator->saveCaCert(__DIR__ . "/san-cert.pem");
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
    $bug_gh16013_callback_struct->return_enum = function($val) use($ffi) {
        $cdata = $ffi->new('enum bug_gh16013_enum');
        $cdata->cdata = $val;
        return $cdata;
    };
    var_dump(($bug_gh16013_callback_struct->return_enum)($ffi->BUG_GH16013_B));
    $im = ImageCreateTrueColor(10, 10);
    imagesavealpha($im, true);
    $db = MySQLPDOTest::factory();
    $db->exec('CREATE TABLE test_33689 (bar INT NOT NULL)');
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
    function foo() {
      $i = 1;
      $x = 2;
      var_dump($i=$x);
      return $i;
    }
    var_dump(foo());
    $mysqli = new mysqli("$host:$port", $user, $passwd, $db);
    $tbl = "test";
    $sql = "DROP TABLE IF EXISTS $tbl";
    $mysqli->query($sql);
    var_dump( range(1, 7, 10.0**400) );
    function test($foo) {
        var_dump(0);
        var_dump($foo[0]);
    }
    test("str");
    class Foo {
        var $bar = array();
    
        static function bar() {
            static $instance = null;
            $instance = new Foo();
            return $instance->bar;
        }
    }
    extract(Foo::bar());
    $db = getDbConnection();
    $sql = '
        SET NOCOUNT ON
        SELECT 0 AS [result]
    ';
    $stmt = $db->query($sql);
    var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));
    var_dump(debug_backtrace());
    $ftp = ftp_connect('127.0.0.1', $port);
    var_dump(ftp_login($ftp, 'anonymous', 'IEUser@'));
    var_dump($line);
    $cert = "-----BEGIN CERTIFICATE-----
    MIIDXDCCAkSgAwIBAgIKq/f5U3FzthdKUzANBgkqhkiG9w0BAQUFADBcMRIwEAYD
    VQQDEwlzZXRhcGRmLWExCTAHBgNVBAoTADEJMAcGA1UECxMAMSMwIQYJKoZIhvcN
    AQkBFhRzdXBwb3J0QHNldGFzaWduLmNvbTELMAkGA1UEBhMCREUwHhcNMTUwOTA4
    MDkzNDExWhcNMjAwOTA4MDkzNDExWjBcMRIwEAYDVQQDEwlzZXRhcGRmLWExCTAH
    BgNVBAoTADEJMAcGA1UECxMAMSMwIQYJKoZIhvcNAQkBFhRzdXBwb3J0QHNldGFz
    aWduLmNvbTELMAkGA1UEBhMCREUwggEiMA0GCSqGSIb3DQEBAQUAA4IBDwAwggEK
    AoIBAQCkmTLvUIYfqAKC1CHVgABlemrFIVRm4JGeB0jIGofyrm3yVwR4YcK0eUmt
    /0nbFfsFsU0/C9dXKZYD42t5YpLFsj666Z1EoU1CfSIW2bf0HaWVJ+oNT5twS3dv
    RTzAcnPM44GxO4y6GUW6un0/bT/MZbFKbb3NI1L0mwY7EoqUXR68XxuHqWETaslm
    Sbp1XvbLsJjgV9X3ihi7JC7A9kEzrKh+RBsXEXwlSv5JO2TUdwq9P4EbjqvgiaV1
    vFNAArioX5pIUIm9ahAm8d7jjW6DFfV798rTzaQ3GJs0yC3UD6xhmbTbdC/D9Pot
    8RGu89Fx6E+O5j4LwGH4kiYjgvYZAgMBAAGjIDAeMA8GCSqGSIb3LwEBCgQCBQAw
    CwYDVR0PBAQDAgOYMA0GCSqGSIb3DQEBBQUAA4IBAQBCA8iXz7zxAmCWNZ0faiLm
    aKw8u2PUq+EPKrGKc9Q70Ksw/e/EHvWrghFzmu5MOZRn/QIWq++sbbc8eOiaRDE8
    lWCW596FLW4habXKw0sjDNcyEBArPgDp17O6NgHqI2U1KL1P2Y40e0YH2BWxNS+f
    pmWZekjiC6jfId2JGsyPZUTX4USwthG4dFX0/BWYg+K7kXvQzMobes2NxW3Iqn8h
    FUNgraCzlQMSfE2gwAMSUXTJubUGorj4LFYSiLIIJvf6KlmuR5uOIi5lSjSeZf5E
    FLEHVhrz3o2icUeyb1K1BTAQRZ/H3GZ0QpgqSK5vmuV9C+rzezQMoy4/8UUnNPMt
    -----END CERTIFICATE-----
    ";
    $tmpFileIn = tempnam(sys_get_temp_dir(), 'test');
    $tmpFileOut = tempnam(sys_get_temp_dir(), 'test');
    openssl_pkcs7_encrypt($tmpFileIn, $tmpFileOut, [$cert], array(), PKCS7_BINARY, OPENSSL_CIPHER_AES_128_CBC);
    $priorityQueue = new SplPriorityQueue();
    var_dump($priorityQueue->getExtractFlags());
    var_dump(session_cache_limiter());
    #[\AllowDynamicProperties]
    class C {
        public $b;
        public function __construct() {
            $this->a = new Canary();
        }
    }
    $obj = new C();
    var_dump($obj->a);
    $db = getDbConnection();
    $stmt = $db->prepare("SELECT 1, 2 AS named, 3");
    $stmt->execute();
    $curl = curl_init("http://www.google.com");
    var_dump(curl_getinfo($curl, CURLINFO_PRIVATE));
    class MyObjectStorage extends SplObjectStorage {
        // Overwrite getHash() with just some (working) test-method
        public function getHash($object): string { return get_class($object); }
    }
    $list = new MyObjectStorage();
    foreach($list as $x) var_dump($list->offsetExists($x));
    $list2 = clone $list;
    foreach($list2 as $x) var_dump($list2->offsetExists($x));
    var_dump($list2->offsetExists($x));
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
    zerofill(4, $link, 'MEDIUMINT');
}
$fp = tmpfile();
fwrite($fp, "I am the LOB data");
