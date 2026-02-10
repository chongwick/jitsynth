<?php
$reflector = new ReflectionClass(DateTime::class);
$obj = $reflector->newLazyGhost(function ($obj) {
        var_dump("initializer");
        $obj->__construct();
    });
$certificateGenerator = new CertificateGenerator();
$link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    class A {
        private static $x = 1;
    }
    class C extends A {
        function bar() {
            var_dump(A::$x);
        }
    }
    $b = new C;
    list($value) = yield;
    var_dump($value);
}
function f_1() {
    return;
}
$unset_var = 10;
printf("[009] Cannot run SELECT, [%d] %s\n",
                mysqli_errno($link), mysqli_error($link));
for ($i_2 = 0; $i_2 < 10; $i_2++) {
    $style = array();
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
}
function new_closure_gen() {
    return function() {
        static $foo = 0;
        yield ++$foo;
    };
}
$closure2 = new_closure_gen();
$gen3 = $closure2();
function f_3() {
    function & test($arg) {
        return $arg;
    }
    $arg = new Stdclass();
    test($arg)->name[1] = "xxxx";
     = new DOMDocument('1.0', 'UTF-8');
    $no;
    $dom = new DOMDocument('1.0', 'UTF-8');
    $node = $dom->getElementById('test');
    $users = MailBox::USERS;
    $from = ini_get('sendmail_from');
    $bcc = $users[2];
    $xMailer = 'bug80706_x_mailer';
    $headers = "From: {$from}\r\n"
        . "Bcc: {$bcc}\r\n"
        . "X-Mailer: {$xMailer}";
    $user = PDO_MYSQL_TEST_USER;
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
    $userMessage = "'user' directive is ignored when FPM is not running as root";
    $t = new stdClass;
    return $t;
}
function f_4() {
    $a = "lest";
    $a[0] = "f";
    if (true) {
        $options = stream_context_get_options($this->context);
    }
    if (true) {
        $date2 = DateTime::createFromFormat("D H i s", "Tuesday 0 00 00");
    }
    if (true) {
        $mb=148;
    }
    if (true) {
        $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    }
    return '';
}
function f_5() {
    $conn = pg_connect($conn_str);
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
    for ($i_6 = 0; $i_6 < 10; $i_6++) {
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
        $dsn = 'sqlite:./bug64705NonExistingDir/bug64705NonExistingDb';
        $depth0 = "depth02";
        $iterator = new RecursiveDirectoryIterator(__DIR__ . DIRECTORY_SEPARATOR . $depth0);
        $it = new RecursiveIteratorIterator($iterator);
        for ($i_7 = 0; $i_7 < 10; $i_7++) {
            var_dump( $count );
            $hash = password_hash(
                "php",
                PASSWORD_ARGON2I,
                ['memory_cost' => 64 << 10, 'time_cost' => 4, 'threads' => 1]
            );
        }
        $db = MySQLPDOTest::factory();
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $arr = array(
            range(1, 5),
            range(1, 5),
            range(1, 5),
            range(1, 5),
            range(1, 5),
        );
        for ($i_8 = 0; $i_8 < 10; $i_8++) {
            $dest = dirname(realpath(__FILE__)) . '/bug27582.png';
            $im2 = imagecreatefrompng($dest);
            if (true) {
                global $user, $host, $passwd, $db, $port, $socket;
                $this->mysqli = new mysqli($host, $user, $passwd, $db, $port, $socket);
            }
            class foo
            {
              function __toString() {
                return "Object";
              }
            }
            $object1 = new foo();
            if (true) {
                $batch_file_content = <<<EOT
                @echo off
                powershell -Command "Write-Output '%0%'"
                powershell -Command "Write-Output '%1%'"
                EOT;
            }
        }
        class PHPUnit_Framework_MockObject_Matcher {
            public $stub = null;
            public $methodNameMatcher;
            public function invoked($invocation) {
                return $this->stub->invoke($invocation);
            }
        }
        $OuterMatcher = new PHPUnit_Framework_MockObject_Matcher();
        $OuterMatcher->methodNameMatcher = null;
         ($dirs as $d) {
        ;
        );
        if (!$reader->open($fil
        extAttribute();
                    echo $reade;
        for ($i_9 = 0; $i_9 < 10; $i_9++) {
            function test(string $name, object $obj) {
                printf("# %s:\n", $name);
            
                var_dump($obj);
                var_dump($obj->a);
                var_dump($obj);
            }
            var_dump($obj);
            printf("printf test 10:<%15s>\n", "hoyesterettsjustitiarius");
            $infile = __DIR__.'/bug34704私はガラスを食べられます.jpg';
            var_dump(exif_read_data
            $infile));
            ?>;
        }
    }
}
function f_10() {
    $reflector = new ReflectionClass(C::class);
    global $user, $host, $passwd, $db, $port, $socket;
    $this->mysqli = new mysqli($host, $user, $passwd, $db, $port, $socket);
    $result = $this->mysqli->query("SELECT NOW() AS my_time FROM DUAL");
    $result->close();
}
function f_11() {
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
    $found_flags .= $name . ' ';
    $expected_flags = trim(str_ireplace($name, '', $expected_flags));
    $unexpected_flags .= $name . ' ';
    return array($expected_flags, $unexpected_flags, $found_flags);
}
function f_12() {
    $response = ob_get_contents();
    return $response;
}
