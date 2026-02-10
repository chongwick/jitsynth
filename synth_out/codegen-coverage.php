<?php
function f_0() {
    static function comp_func_cr($a, $b) {
            if ($a->priv_member === $b->priv_member) return 0;
            return ($a->priv_member > $b->priv_member) ? 1 : -1;
        }
    static function comp_func_cr2($a, $b) {
            echo ".";
            if ($a->priv_member === $b->priv_member) return 0;
            return ($a->priv_member < $b->priv_member) ? 1 : -1;
        }
    return ($a->priv_member < $b->priv_member) ? 1 : -1;
}
function f_1() {
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
    $ar1 = array("row1" => 2, "row2" => 1);
}
function f_2() {
    class C {
        public int $a;
    }
    $obj = new C();
    $attr = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4 COLLATE utf8mb4_unicode_ci; SET SESSION sql_mode=traditional',
        PDO::ATTR_STRINGIFY_FETCHES => true,
    ];
    class Foo {
        public $dummy1;
        public $dummy2;
    }
    $f = new Foo;
    $ch = curl_init();
    $a = 4;
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
    while (true) {
        break;  // avoid infinite loop
        $zip = new ZipArchive();
        $epid = pcntl_waitpid(-1,$status);
        class DB extends mysqli {
        
            private function __construct($hostname, $username, $password, $database) {
                var_dump("DB::__construct() called");
            }
        }
        $DB = new DB();
        $style = array();
        $i = 0;
        $style[$i++] = IMG_COLOR_TRANSPARENT;
        $certificateGenerator = new CertificateGenerator();
        $timestamp = "2005-11-08T11:22:07+03:00";
        function __doRequest($request, $location, $action, $version, $one_way = 0): string {
            echo "$request\n";
            ob_start();
            $this->server->handle($request);
            $response = ob_get_contents();
            ob_end_clean();
            return $response;
          }
        $logOnEvent = new LogOnEvent(34567, $timestamp);
        class LogOnEvent {
          public $audienceMemberId;
          public $timestamp;
        
          function __construct($audienceMemberId, $timestamp) {
            $this->audienceMemberId = $audienceMemberId;
            $this->timestamp = $timestamp;
          }
        }
        function __construct($version, $activityId, $messageId, $source, $logOnEvent=NULL, $logOffEvent=NULL) {
            $this->version = $version;
            $this->activityId = $activityId;
            $this->messageId = $messageId;
            $this->source = $source;
            $this->logOnEvent = $logOnEvent;
            $this->logOffEvent = $logOffEvent;
          }
        $this->version = $version;
        function createDB(): PDO {
            $db = MySQLPDOTest::factory();
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            return $db;
        }
        $db = createDB();
        $db->exec('CREATE TABLE test_80908 (`id` BIGINT(20) UNSIGNED AUTO_INCREMENT, `name` VARCHAR(5), PRIMARY KEY (`id`)) ENGINE = InnoDB AUTO_INCREMENT=10376293541461622799');
        $f = __DIR__."/data/test.txt.gz";
        $h = gzopen($f, 'r');
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
        $trace_file = '/tmp/mysqli_debug_phpt.trace';
        $ch = curl_init("https://localhost/userpwd");
        $array_object = array();
        class Canary {
            public function __construct(public mixed $value) {}
            public function __destruct() {
                var_dump(__METHOD__);
            }
        }
        $canary = new Canary(null);
        $values = ini_get_all();
        foreach ($values as $name => $dsn)
                if ('pdo.dsn.mysql' == $name) {
                    printf("pdo.dsn.mysql=%s\n", $dsn);
                    $found = true;
                    break;
                }
        printf("pdo.dsn.mysql=%s\n", $dsn);
        $time = '9999-11-33';
        $reflector = new ReflectionClass(C::class);
        $GLOBALS['b'] = 2;
        $a = &$GLOBALS['a'];
        $dest = dirname(realpath(__FILE__)) . '/bug27582.png';
        $im2 = imagecreatefrompng($dest);
        $col = imagecolorat($im2, 5, 5);
        $color = imagecolorsforindex($im2, $col);
        $count = 1;
        global $user, $host, $passwd, $db, $port, $socket;
        $this->mysqli = new mysqli($host, $user, $passwd, $db, $port, $socket);
        $result = $this->mysqli->query("SELECT NOW() AS my_time FROM DUAL");
        $style = array();
        $i = 0;
        $style[$i++] = IMG_COLOR_TRANSPARENT;
        $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
        $stmt = $pdo->prepare("select :1 n union all select :1 + 1 union all select :1 + 2 union all select :1 + 3");
        $stmt->execute([ 32 ]);
        $fixedArray = new SplFixedArray(1);
        $certificateGenerator = new CertificateGenerator();
        $reqOf3 = 'select 79 n union all select 80 union all select 81';
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
        $i = 0;
        $style[$i++] = $color;
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
        $expected_flags = trim(str_replace('NO_DEFAULT_VALUE', '', $expected_flags));
        $expected_flags = trim(str_replace('UNSIGNED', '', $expected_flags));
        class A1 {
        	public function __call($method, $args) { echo "__call\n"; }
        	public static function __callStatic($method, $args) { echo "__callStatic\n"; }
        }
        class B1 extends A1 {
        	public function test(){	parent::test();	}
        }
        $test1 = new B1;
        $GLOBALS['b'] = 2;
        $a = &$GLOBALS['a'];
        date_default_timezone_set('Europe/Kiev');
        $timestamp = "2005-11-08T11:22:07+03:00";
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
        $document = new \DOMDocument();
        $h1 = $document->getElementsByTagName('h1');
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
        $cainfo = array();
        $tz_aus = new DateTimeZone('Australia/Sydney');
        php_cli_server_start('http_response_code(422);');
        $b = 'ok';
        $addr = '::1';
        $object = new StdClass();
        $object->a = str_repeat("a", 2);
        $mb=148;
        $tbl = "test";
        $xmlString = "<root><a><b>1</b><b>2</b><b>3</b></a></root>";
        $f = __DIR__."/data/test.txt.gz";
        $h = gzopen($f, 'r');
        var_dump(gzread($h, -1));
        class overloaded
        {
          private $values;
          function __construct()
          {
            $this->values = array('a' => 0);
          }
          function __set($name, $value)
          {
            print "set $name = $value ($name was ".$this->values[$name].")\n";
            $this->values[$name] = $value;
          }
          function __get($name)
          {
            print "get $name (returns ".$this->values[$name].")\n";
            return $this->values[$name];
          }
        }
        $test = new overloaded();
        class Foo {
            public $bar = [] {
                &get {
                    echo __METHOD__ . "\n";
                    return $this->bar;
                }
            }
        }
        $foo = new Foo;
        $foo->bar[] = 'bar';
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
        $userMessage = "'user' directive is ignored when FPM is not running as root";
        $references = array();
        $idx = 0;
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
        $references[$idx]['row_ref'] 		= &$rows[$i];
        class A {
            public function __call($name, $args) {
                eval('$args = array(); var_dump(debug_backtrace());');
            }
        }
        $a = new A();
        $fp = fopen(__FILE__, "r");
        fclose($fp);
        $data = array('first', 'fifth', 'second', 'forth', 'third');
        $db = new Pdo\Pgsql($config['ENV']['PDOTEST_DSN']);
        $im = imagecreate(800, 800);
        $black = imagecolorallocate($im, 0, 0, 0);
        $container = false;
        $dt = new DateTime('first day of January 2011');
        $dir_handle = opendir( __DIR__ );
        $context = stream_context_create(['http' => ['method' => 'MKCALENDAR']]);
        var_dump(file_get_contents("http://" . PHP_CLI_SERVER_ADDRESS, false, $context));
        $reflector = new ReflectionClass(C::class);
        $reflector = new ReflectionClass(DateTime::class);
        $obj = $reflector->newLazyGhost(function ($obj) {
                var_dump("initializer");
                $obj->__construct();
            });
        $obj = $reflector->newLazyProxy(function ($obj) {
                var_dump("initializer");
                $obj->__construct();
            });
        $f = __DIR__."/data/test.txt.gz";
        $PHP_SELF = 1;
        $error = error_get_last();
        $fp = fopen (__FILE__, "r");
        stream_filter_register('user_filter','user_filter');
        $dt = new DateTime('@1604219400');
        $values = ini_get_all();
        $priorityQueue = new SplPriorityQueue();
        $priorityQueue->insert("b", 2);
        $gen = (function() {
            yield from (function() { yield; })();
        })();
        $fiber = new Fiber(function() use ($gen) {
            $gen->current();
        });
        $fiber->start();
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
        $tester->expectLogStartNotices();
        $b = NULL;
    }
}
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
