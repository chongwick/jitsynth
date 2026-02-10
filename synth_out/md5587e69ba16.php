<?php
function f_0() {
    public function __construct($callback) {
            $this->callback = $callback;
        }
    $this->callback = $callback;
    public function invoke($invocation) {
            return call_user_func_array($this->callback, $invocation->parameters);
        }
    return call_user_func_array($this->callback, $invocation->parameters);
}
function f_1() {
    $time = '9999-11-33';
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
    $test_array = array(1, array(1 => "one", "two" => 2, "" => "f") );
    class foo
    {
      function __toString() {
        return "Object";
      }
    }
    $object1 = new foo();
    $db = PDOTest::test_factory(dirname(__FILE__) . '/common.phpt');
    $rc = new ReflectionClass(B::class);
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        $plain = "The quick brown fox jumps over the lazy dog.";
        $compressed = (string) bzcompress($plain);
        $compressed = substr($compressed, 0, strlen($compressed) - 20);
        $compressed[strlen($compressed)-2] = 'X';
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
        $cert = file_get_contents(__DIR__ . "/public.crt");
        public function unserialize($data)
            {
                $this->b = unserialize($data);
            }
        $this->b = unserialize($data);
        $date2 = new DateTime("Sat 19 November 2011");
        $empty = "";
        $me = new static;
        $array1 = array(1, 2);
        $now = new DateTimeImmutable();
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
        $t = new stdClass;
        $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
        $d0 = $prefix . "ソフト";
        $d1 =;
        $array1 = array(1, 2);
        $reflector = new ReflectionClass(C::class);
        $obj = $reflector->newLazyProxy(function () {
            throw new \Exception('initializer');
        });
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
        $loop_counter = 1;
        $a = array(1,2,3);
        public function bar(&$a, &$b, $c) {
                Legacy::bar($a, $b, $c);
            }
        public function callback(&$a, &$b, $c) {
                $b = 1;
            }
        $b = 1;
        public function bar(&$a, &$b, $c) {
                $arguments = array($a, $b, $c);
                $result = $this->inv_mocker->invoke(
                    new PHPUnit_Framework_MockObject_Invocation_Static(
                        $arguments
                    )
                );
                return $result;
            }
        $a = $b = $c = 0;
        $data_comp_func = 'compare_function';
        $dt = DateTime::createFromFormat('Y-m-d|', '2011-02-02');
        $users = MailBox::USERS;
        $from = ini_get('sendmail_from');
        $bcc = $users[2];
        $xMailer = 'bug80706_x_mailer';
        $headers = "From: {$from}\r\n"
            . "Bcc: {$bcc}\r\n"
            . "X-Mailer: {$xMailer}";
        $id_2_date = '2014-09-24';
        $table='test_68638';
        $res = [];
        $host = PHP_CLI_SERVER_HOSTNAME;
        $request = <<<REQUEST
        GET / HTTP/1.1
        Host: $host
        
        
        REQUEST;
        class C {
            public private(set) string $prop1 {
                set => $value;
            }
            public private(set) string $prop2 {
                get => $this->prop2;
            }
        }
        $c = new C();
        class foo
        {
        // no members
        }
        $this->public_var1 = new foo();
        $found = true;
        $res = [];
        $fd = fopen('php://memory','w');
        $str = 'Hello World';
        $tStamp = mktime (17, 17, 17, 10, 27, 2004);
        $this->extData[] = 'Bar';
        class SomeClass2 implements JsonSerializable {
            public function jsonSerialize(): mixed {
                return [(array)$this];
            }
        }
        $class = new SomeClass2;
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
        $dbh = @pg_connect($conn_str);
        $res = pg_query($dbh, "CREATE OR REPLACE FUNCTION test_notice() RETURNS boolean AS '
        begin
                RAISE NOTICE ''11111'';
                return ''f'';
        end;
        ' LANGUAGE plpgsql;");
        function test(object $obj) {
                $obj->a = 1;
            }
        $obj->a = 1;
        $reflector = new ReflectionClass(C::class);
        $obj = $reflector->newLazyProxy(function () {
            throw new \Exception('Initializer');
        }, ReflectionClass::SKIP_INITIALIZATION_ON_SERIALIZE);
        $ar1 = array("row1" => 2, "row2" => 1);
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
        $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
        $descriptorspec = [STDIN, STDOUT, STDOUT];
        $arr = array('http'=>
                                array(
                                        'follow_location'=>1,
                                )
                        );
        $context = stream_context_create($arr);
        $conn = odbc_connect($dsn, $user, $pass);
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
        $date1 = DateTime::createFromFormat("!D d M Y", "Sat 19 November 2011");
        $date1 = DateTime::createFromFormat("!D d M Y", "Sat 19 November 2011");
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
        $meta = mysqli_fetch_fields($res);
        $fn = static function() { return static::name(); };
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
        $references[$idx]['id_ref'] 		= &$rows[$i]['id'];
        $db = MySQLPDOTest::factory();
        $stmt = $db->prepare('SELECT * FROM test_33689');
        $tmp = $stmt->getColumnMeta(0);
        $w = new Phar(__DIR__ . "/bug69279.phar.zip");
        public function __construct(array $parameters) {
                $this->parameters = $parameters;
            }
        $this->parameters = $parameters;
        $dyadic = 0.00000000000045474735088646411895751953125;
        $cainfo = array();
        c1::$a3[] = 1;
        $row_stmt = null;
        $dom = new DOMDocument;
        $test1 = $dom->getElementById('x');
        $host = curl_cli_server_start();
        $r = new ResourceBundle( 'en_US', BUNDLE );
        $wrong = "wrong";
        $error = error_get_last();
        $other = new DateTime("31-July-2008");
        $err = null;
        $log_file = tempnam(sys_get_temp_dir(), 'php-curl-CURLOPT_WRITEFUNCTION-trampoline');
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
        class C {
            public function __toString() {
                global $c;
                $c = [];
                throw new Exception(__METHOD__);
            }
        }
        $c = new C();
        $mysqli = new mysqli("$host:$port", $user, $passwd, $db);
        $tbl = "test";
        $sql = "SELECT bit_column_1 FROM $tbl";
        $result = $mysqli->query($sql);
        $arr  = array("test");
        list($c,$d) = is_array($arr)?: NULL;
        _MIME_TYPE);
        var_dump($fi->file($f));
        $date = new DateTime("28-July-2008");
        $other = new DateTime("31-July-2008");
        $diff = date_diff($date, $other);
    }
    return "Class A object";
}
function f_3() {
    return "Class A object";
}
function f_4() {
    return serialize($this->data);
}
function f_5() {
    return "testObject";
}
function f_6() {
    return false;
}
function f_7() {
    return false;
}
function f_8() {
    $found_flags = $unexpected_flags = '';
    $rc = new ReflectionClass('Foo');
    public function offsetExists($index): bool {
            return isset($this->array[$index]);
        }
    return isset($this->array[$index]);
}
function f_9() {
    return false;
}
function f_10() {
    $version = mysqli_get_server_version($link);
    $ch = curl_init("https://localhost/userpwd");
    $response = curl_exec($ch);
    for ($i_11 = 0; $i_11 < 10; $i_11++) {
        $users = MailBox::USERS;
        $to = $users[0];
        $from = ini_get('sendmail_from');
        $bcc = $users[2];
        $subject = 'mail_bug80706';
        $message = 'hello';
        $xMailer = 'bug80706_x_mailer';
        $headers = "From: {$from}\r\n"
            . "Bcc: {$bcc}\r\n"
            . "X-Mailer: {$xMailer}";
        $res = mail($to, $subject, $message, $headers);
    }
    return;
}
function f_12() {
    $id_1_date = '2014-09-23';
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt', Pdo::class, false);
    for ($i_13 = 0; $i_13 < 10; $i_13++) {
        $dom = Dom\HTMLDocument::createEmpty();
    }
    return "Class A object";
}
class dummy
{
}
main::$dummy        = new dummy();
for ($i_14 = 0; $i_14 < 10; $i_14++) {
    $fn = "bug71263.bz2";
}
$dom = new DOMDocument;
$element = $dom->appendChild($dom->createElement('root'));
$element->prepend('x', new DOMEntity);
$r = socket_sendmsg($sends1, [
    "name" => [ "addr" => "::1", "port" => 3002],
    "iov" => ["test ", "thing", "\n"],
    "control" => [[
        "level" => IPPROTO_IPV6,
        "type" => IPV6_TCLASS,
        "data" => 40,
    ]]
], 0);
var_dump($r);
