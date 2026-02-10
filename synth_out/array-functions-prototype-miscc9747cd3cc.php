<?php
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
$php = getenv('TEST_PHP_EXECUTABLE_ESCAPED');
$varOutput = ob_get_contents();
$varOutput = str_replace(
        [$var_dim_filename],
        ['%s'],
        $varOutput
    );
function f_0() {
}
for ($i_1 = 0; $i_1 < 10; $i_1++) {
    $a = new PDO("sqlite::memory:");
    $b = $a->prepare("insert into test_35336 (b) values (?)");
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
    $timestamp = "2005-11-08T11:22:07+03:00";
    function __construct($audienceMemberId, $timestamp, $smokeStatus) {
        $this->audienceMemberId = $audienceMemberId;
        $this->timestamp = $timestamp;
        $this->smokeStatus = $smokeStatus;
        $this->callInitiator = "IVR";
      }
    function __construct($audienceMemberId, $timestamp) {
        $this->audienceMemberId = $audienceMemberId;
        $this->timestamp = $timestamp;
      }
    $this->timestamp = $timestamp;
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
    $reflector = new ReflectionClass(C::class);
    $host = PHP_CLI_SERVER_HOSTNAME;
    $request = <<<REQUEST
    GET / HTTP/1.1
    Host: $host
    
    
    REQUEST;
    $ar2 = array(1, 2);
    $xmlstring = '<?xml version="1.0" encoding="UTF-8"?>
    <books></books>';
    $xmlString = "<root><a><b>1</b><b>2</b><b>3</b></a></root>";
    $xml = simplexml_load_string($xmlString);
    $tests = array(
        1 => array(
            '$6$saltstring',
            'Hello world!',
            '$6$saltstring$svn8UoSVapNtMuq1ukKS4tPQd8iKwSMHWjl/O817G3uBnIFNjnQJuesI68u4OTLiBFdcbYEdFCoEOfaS35inz1'
        ),
        2 => array(
            '$6$rounds=10000$saltstringsaltstring',
            'Hello world!',
            '$6$rounds=10000$saltstringsaltst$OW1/O6BYHV6BcXZu8QVeXbDWra3Oeqh0sbHbbMCVNSnCM/UrjmM0Dp8vOuZeHBy/YTBmSK6H9qs/y3RnOaw5v.'
        ),
        3 => array(
            '$6$rounds=5000$toolongsaltstring',
            'This is just a test',
            '$6$rounds=5000$toolongsaltstrin$lQ8jolhgVRVhY4b5pZKaysCLi0QBxGoNeKQzQ3glMhwllF7oGDZxUhx1yxdYcz/e1JSbq3y6JMxxl8audkUEm0'
        ),
        4 => array(
            '$6$rounds=1400$anotherlongsaltstring',
            'a very much longer text to encrypt.  This one even stretches over morethan one line.',
            '$6$rounds=1400$anotherlongsalts$POfYwTEok97VWcjxIiSOjiykti.o/pQs.wPvMxQ6Fm7I6IoYN3CmLs66x9t0oSwbtEW7o7UmJEiDwGqd8p4ur1'
        ),
        5 => array(
            '$6$rounds=77777$short',
            'we have a short salt string but not a short password',
            '$6$rounds=77777$short$WuQyW2YR.hBNpjjRhpYD/ifIw05xdfeEyQoMxIXbkvr0gge1a1x3yRULJ5CCaUeOxFmtlcGZelFl5CxtgfiAc0'
        ),
        6 => array(
            '$6$rounds=123456$asaltof16chars..',
            'a short string',
            '$6$rounds=123456$asaltof16chars..$BtCwjqMJGx5hrJhZywWvt0RLE8uZ4oPwcelCjmw2kSYu.Ec6ycULevoBK25fs2xXgMNrCzIMVcgEJAstJeonj1'
        ),
        7 => array(
            '$6$$bar$',
            'foo',
            '$6$$QMXjqd7rHQZPQ1yHsXkQqC1FBzDiVfTHXL.LaeDAeVV.IzMaV9VU4MQ8kPuZa2SOP1A0RPm772EaFYjpEJtdu.'
        ),
        8 => array(
            '$6$rounds=10$roundstoolow',
            'the number of rounds is too low',
            '*0'
        ),
        8 => array(
            '$6$rounds=1000000000$roundstoohigh',
            'the number of rounds is too high',
            '*0'
        ),
    );
    foreach ($tests as $iter => $t) {
        $res = crypt($t[1], $t[0]);
        if ($res != $t[2]) echo "Iteration $iter failed.
    Expected: <$t[2]>
    Got       <$res>\n";
    }
    $res = crypt($t[1], $t[0]);
    $res = [];
    if (true) {
        $attrs = [ PDO::ATTR_PREFETCH => 0 ];
        $ret = $y;
        function gen() {
            yield 0;
            yield from gen();
        }
        function bar($gen) {
            yield from $gen;
        }
        $gen = gen();
        $b = bar($gen);
        $reflection = new ReflectionClass('\DateTime');
        $dom = new DOMImplementation();
        $expected_flags = array('col1' => 'MULTIPLE_KEY PART_KEY', 'col2' => 'PART_KEY');
        class C {
            public private(set) string $prop1 {
                set => $value;
            }
            public private(set) string $prop2 {
                get => $this->prop2;
            }
        }
        $c = new C();
        $c->prop1 = 'hello world';
        $date = new DateTime("2011-05-17T22:14:12");
        $text = 'This is an ‘example’ of using DOM splitText';
        $st
         = new DOMDocument('1.0', 'UTF-8');
        $no
        e = $dom->createTextNode($text);
        $do;
        $r = new ResourceBundle( 'en_US', BUNDLE );
        $t = $r['nonexisting'];
    }
    if (!true) {
        $sert = "file://" . __DIR__ . "/san-cert.pem";
        $cpca = __DIR__ . "/san-cert.pem";
        var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_TIMESTAMP_SIGN, array($cpca)));
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
        $array1 = array(1, 2);
        $code = <<<'PHP'
        /* Receive */
        $content = trim(file_get_contents("php://input")) . PHP_EOL;
        PHP;
        c1::$a2[] = 1;
        $count = 1;
        $xml = '<?xml version="1.0" encoding="utf-8" ?>
        <test>
        </test>';
        class MyObjectStorage extends SplObjectStorage {
            // Overwrite getHash() with just some (working) test-method
            public function getHash($object): string { return get_class($object); }
        }
        $list = new MyObjectStorage();
        $list2 = clone $list;
        $userMessage = "'user' directive is ignored when FPM is not running as root";
        class A
        {
            public string $prop;
        }
        $a = new A();
    }
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        $depth2 = "depth2";
        if (true) {
            $h = <<<'EOD'
            void (*bug_gh9090_void_none_ptr)();
            void (*bug_gh9090_void_int_char_ptr)(int, char *);
            void (*bug_gh9090_void_int_char_var_ptr)(int, char *, ...);
            void (*bug_gh9090_void_char_int_ptr)(char *, int);
            int (*bug_gh9090_int_int_char_ptr)(int, char *);
            
            void bug_gh9090_void_none();
            void bug_gh9090_void_int_char(int i, char *s);
            void bug_gh9090_void_int_char_var(int i, char *fmt, ...);
            EOD;
            $ffi = FFI::cdef($h);
            $func_argvs = [
                [ 'bug_gh9090_void_none',         [ ]                           ],
                [ 'bug_gh9090_void_int_char',     [ 42, "hello" ]               ],
                [ 'bug_gh9090_void_int_char_var', [ 42, "d=%d s=%s", -1, "ok" ] ],
            ];
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
            $ffi->$func_ptr = $ffi->$func;
            class FooBar implements ArrayAccess {
                private $array = array();
            
                public function offsetExists($index): bool {
                    return isset($this->array[$index]);
                }
            
                public function offsetGet($index): mixed {
                    return $this->array[$index];
                }
            
                public function offsetSet($index, $value): void {
                    echo __METHOD__ . "($index, $value)\n";
                    $this->array[$index] = $value;
                }
            
                public function offsetUnset($index): void {
                    throw new Exception('FAIL');
                    unset($this->array[$index]);
                }
            
            }
            $foo = new FooBar();
            print_R($foo);
            $xml = '<?xml version="1.0" encoding="utf-8" ?>
            <test>
            </test>';
            $root = simplexml_load_string($xml);
            $root->__construct("malformed");
            $doc = new \DOMDocument();
            $target = $doc->documentElement->lastChild;
            var_dump($target);
            $GLOBALS['b'] = 3;
            $reflection = new ReflectionClass('\DateTimeImmutable');
            $immutable = $reflection->newInstanceWithoutConstructor();
            $mutable = \DateTime::createFromInterface($immutable);
            $ch = curl_init("https://localhost/username");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $cert = "file://" . __DIR__ . "/cert.crt";
            $cpca = __DIR__ . "/san-cert.pem";
            var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_CLIENT, array($cpca)));
        }
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
        if (true) {
            $loop_counter = 1;
            if (true) {
                clearstatcache();
            }
            $users = MailBox::USERS;
            $readonly_anon = new readonly class {
                public int $field;
                function __construct() {
                    $this->field = 2;
                }
            };
            var_dump($readonly_anon->field);
            class Test implements ArrayAccess {
                public function offsetExists($x): bool { $GLOBALS["obj"] = 24; return true; }
                public function offsetGet($x): mixed { var_dump($x); return 42; }
                public function offsetSet($x, $y): void { }
                public function offsetUnset($x): void { }
            }
            $obj = new Test;
            var_dump($obj);
            $date1 = new DateTime("Tuesday");
            $date2 = DateTime::createFromFormat("D H i s", "Tuesday 0 00 00");
            var_dump($date1->format('D') == $date2->format('D'));
            class Foo {
              public $bar = "bat";
            }
            $foo = new Foo;
            mysqli_close($link);
            $string = str_repeat("A", 1024);
            highlight_string($string, true);
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
            $curl = curl_init("http://www.google.com");
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            $dom = Dom\HTMLDocument::createFromString(<<<HTML
            <!DOCTYPE html>
            <html>
                <body>
                    <svg xmlns="http://www.w3.org/2000/svg" height="1"></svg>
                    <math></math>
                </body>
            </html>
            HTML);
            var_dump($dom->lookupNamespaceURI(""));
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
            class C {
                public function __toString() {
                    global $c;
                    $c = [];
                    throw new Exception(__METHOD__);
                }
            }
            class D {
                public string $prop;
            }
            $c = new C();
            $d = new D();
            $d->prop = $c;
            $fp = php_cli_server_connect();
            fclose($fp);
            $db = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
            $db->query('DROP PROCEDURE IF EXISTS testSp');
            #[\AllowDynamicProperties]
            class C {
                public $b;
                public function __construct() {
                    $this->a = new Canary();
                }
            }
            $obj = new C();
            var_dump($obj);
            $document = new \DOMDocument();
            $h1 = $document->getElementsByTagName('h1');
            $ch = curl_init();
            var_dump(curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false));
            function & test($arg) {
                return $arg;
            }
            $arg = new Stdclass();
            test($arg)->name[1] = "xxxx";
            $str = 'Hello World';
            $shm_key = ftok(__FILE__, 'p');
            $shm_id2 = shmop_open($shm_key, 'c', 0644, strlen($str) + 10);
            var_dump($shm_id2);
            $ar1 = array("row1" => 2, "row2" => 1);
            var_dump("done");
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
            $fd = fopen('php://memory','w');
            fwrite($fd, "foo");
        }
        $tbl = "test";
        $sql = "SELECT bit_column_1 FROM $tbl";
        global $user, $host, $passwd, $db, $port, $socket;
        global $user, $host, $passwd, $db, $port, $socket;
        $this->mysqli = new mysqli($host, $user, $passwd, $db, $port, $socket);
        $result = $this->mysqli->query("SELECT NOW() AS my_time FROM DUAL");
        $result->close();
        $sert = "file://" . __DIR__ . "/san-cert.pem";
        $cpca = __DIR__ . "/san-cert.pem";
        $utfl = __DIR__ . "/sni_server_uk.pem";
        var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_SERVER, array($cpca), $utfl));
        printf("Content-Type Default OK" . PHP_EOL);
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
        $fiber = new Fiber(function () use ($iterable, $canary) {
            var_dump($canary, $iterable->current());
            $f = $iterable->next(...);
            $f();
            var_dump("not executed");
        });
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
        stream_wrapper_register('dummy', DummyWrapper::class);
        $filename = __DIR__ . '/_fromUri_custom_constructor.xml';
        $xmlstring = '<?xml version="1.0" encoding="UTF-8"?>
        <books></books>';
        file_put_contents($filename, $xmlstring);
        $db = MySQLPDOTest::factory();
        $db->exec('CREATE TABLE test_33689 (bar INT NOT NULL)');
        $dom = new DOMDocument;
        var_dump($dom->getElementById('x')?->nodeName);
        $host = "localhost\0.example.com";
        class Foo {
          public $bar = "bat";
        }
        $foo = new Foo;
        var_dump($foo);
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
        $tester->start();
        $output = array();
        var_dump($output);
        $initialRequest = true;
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
        $ar1 = array(1, 2);
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
        foreach($inputs as $key =>$value) {
            echo "\n--$key--\n";
            try {
                var_dump( array_multisort($ar1, $value) );
            } catch (\ValueError | \TypeError $e) {
                echo $e->getMessage() . "\n";
            }
        }
        var_dump( array_multisort($ar1, $value) );
        function validate($value)
        {
            foreach ([0] as $_) {
                $a = &$value->a;
                $value->a ?? null;
            }
        }
        validate((object) []);
        $re = new ReflectionExtension("hash");
        var_dump($re->getConstants());
        $GLOBALS['b'] = 2;
        $org_a = $GLOBALS['a'];
        $org_b = $GLOBALS['b'];
        var_dump($org_a, $org_b);
        $client = new SoapClient(__DIR__ . '/bug49278.wsdl', array('location' => "http://".PHP_CLI_SERVER_ADDRESS, 'trace' => 1));
        var_dump($client->__getLastResponseHeaders());
        class C {
            public int $a;
        }
        $reflector = new ReflectionClass(C::class);
        $obj = new C();
        $reflector->initializeLazyObject($obj);
        $f = __DIR__."/data/test.txt.gz";
        $h = gzopen($f, 'r');
        $list = new SplDoublyLinkedList();
        $list->push('f');
        $client = new SoapClient(__DIR__ . '/bug49278.wsdl', array('location' => "http://".PHP_CLI_SERVER_ADDRESS, 'trace' => 1));
        var_dump($client->__getLastResponse());
        catch (Error $e) {
            printf("%s: %s\n", $e::class, $e->getMessage());
        }
        catch (Error $e) {
            printf("%s: %s\n", $e::class, $e->getMessage());
        }
        printf("%s: %s\n", $e::class, $e->getMessage());
        function gen() {
            yield 0;
            yield from gen();
        }
        function bar($gen) {
            yield from $gen;
        }
        $gen = gen();
        $a = bar($gen);
        $db = getDbConnection();
        var_dump($db->getAttribute(PDO::DBLIB_ATTR_SKIP_EMPTY_ROWSETS));
        var_dump($_SESSION);
        $mysqli = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
        $res = $mysqli->query('SELECT 42');
        $obj = $res->fetch_object();
        var_dump(
            $obj,
            $obj->{42}
        );
        $dom = new DOMDocument;
        $test1 = $dom->getElementById('x');
        $test1->setAttribute('xml:id', 'y');
        $file = __DIR__ . '/bug38212私はガラスを食べられます.gd2';
        $im1 = imagecreatetruec;
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
        $fp = fopen (__FILE__, "r");
        $dfp = opendir ( __DIR__ );
        $unset_array = array(10);
        $varient_arrays = array (
          /* integers */
          543915,
          -5322,
          0x55F,
          -0xCCF,
          123,
          -0654,
        
          /* strings */
          "",
          '',
          "0",
          '0',
          'string',
          "string",
        
          /* floats */
          10.0000000000000000005,
          .5e6,
          -.5E7,
          .5E+8,
          -.5e+90,
          1e5,
        
          /* objects */
          new stdclass,
        
          /* resources */
          $fp,
          $dfp,
        
          /* nulls */
          null,
          NULL,
        
          /* boolean */
          true,
          TRUE,
          FALSE,
          false,
        
          /* unset/undefined arrays  */
          @$unset_array,
          @$undefined_array
        );
        foreach ($varient_arrays as $type ) {
          echo "-- Iteration $loop_counter --\n"; $loop_counter++;
          var_dump( is_array ($type) );
        }
        var_dump( is_array ($type) );
        php_cli_server_start(<<<PHP
        http_response_code(426);
        PHP
        );
        $zip = new ZipArchive();
        $zip->close();
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
        var_dump(intlcal_get_error_message(null));
        set_exception_handler(function() {
            echo 'Fourth handler' . PHP_EOL;
        });
        var_dump(soundex("Gauss")       == soundex("Ghosh"));
        $f = __DIR__."/data/test.txt.gz";
        $h = gzopen($f, 'r');
        gzclose($h);
        set_exception_handler("foo");
        var_dump(pcntl_wexitstatus($status));
        $dom = new DOMDocument;
        var_dump($dom->getElementById('x')?->nodeName);
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
        $log_file = tempnam(sys_get_temp_dir(), 'php-curl-CURLOPT_WRITEFUNCTION-trampoline');
        $fp = fopen($log_file, 'w+');
        fwrite($fp, "test");
        if (true) {
            $time = '2000-01-01 00:00:00.000000';
            $tz_us = new DateTimeZone('America/Los_Angeles');
            $us = new DateTime($time, $tz_us);
            $ch = curl_init();
            curl_close($ch);
            $ch = curl_init();
            var_dump(curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, true));
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
            var_dump( range(1, 7, 0) );
            class A
            {
                public string $prop;
            }
            $a = new A();
            $a->prop = '';
            $a = [1,2,3];
            $i = 1;
            $k = 2 * $i;
            $a[$k] = $i;
            vprintf("vprintf test 1:%2\$-2d %1\$2d\n", array(1, 2));
            $dom = new DOMDocument;
            $tag = $dom->appendChild($dom->createElement("style"));
            $html = simplexml_import_dom($tag);
            var_dump($html);
            $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
            $pdo->exec("insert into t select n + 1, 'non '||t from t");
        }
    }
}
$tStamp = mktime (17, 17, 17, 10, 27, 2004);
for ($i_3 = 0; $i_3 < 10; $i_3++) {
    $_SERVER = [ 'test' => 'test' ];
    $reference =& $_SERVER;
}
for ($i_4 = 0; $i_4 < 10; $i_4++) {
    public function setTest($test) {
            $this->test = $test;
        }
    $this->test = $test;
    $bert = "file://" . __DIR__ . "/bug41033.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_SIGN, array($cpca), $utfl));
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
    printf("printf test 7:%010.2f\n", 2.5);
    function foo($e) {
        var_dump(__FUNCTION__."(): ".get_class($e)." thrown!");
    }
    var_dump(__FUNCTION__."(): ".get_class($e)." thrown!");
    $arr = array('a', 'b');
    $arr();
    $iterator = 1;
}
$GLOBALS['b'] = 2;
$org_a = $GLOBALS['a'];
for ($i_5 = 0; $i_5 < 10; $i_5++) {
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
}
for ($i_6 = 0; $i_6 < 10; $i_6++) {
    $cert = "file://" . __DIR__ . "/cert.crt";
    $rcrt = openssl_x509_read($cert);
    $dom = Dom\HTMLDocument::createEmpty();
    $container = $dom->appendChild(createElement($dom, "container"));
    $container->appendChild(createElementNS($dom, "http://www.w3.org/1999/xhtml", "bar:html", "9"));
    $ch = curl_init("https://localhost/username");
    $response = curl_exec($ch);
    var_dump(str_contains($response, "authorization"));
    $cert = "file://" . __DIR__ . "/cert.crt";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SMIME_ENCRYPT, array($cpca)));
    printf("printf test 7:%010.2f\n", 2.5);
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
    $tester->start();
}
$unset_var = 10;
function f() {
    Fiber::suspend();
}
function g() {
    (new Fiber(function() {
        global $f;
        var_dump((new ReflectionFiber($f))->getTrace());
    }))->start();
}
$f = new Fiber(function() { f(); max(...[1,2,3,4,5,6,7,8,9,10,11,12]); g(); });
$dsn = 'sqlite:./bug64705NonExistingDir/bug64705NonExistingDb';
$pdo = new \PDO($dsn, null, null);
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
$a[10] = "42";
var_dump($a["010"], isset($a["010"]));
$halves[0] = $halves[1] = 0;
$halves[(mt_rand(0, $max - 1) >> 1) & 1]++;
$halves[0] = $halves[1] = 0;
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
class Test implements ArrayAccess {
    public function offsetExists($x): bool { $GLOBALS["obj"] = 24; return true; }
    public function offsetGet($x): mixed { var_dump($x); return 42; }
    public function offsetSet($x, $y): void { }
    public function offsetUnset($x): void { }
}
$obj = new Test;
$PHP_SELF = 1;
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
foo(false, false);
$cert = "file://" . __DIR__ . "/cert.crt";
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
$prefixed->setAttributeNS("http://www.w3.org/2000/xmlns/", "xmlns:a", "urn:another");
$res->free();
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
var_dump(substr_count("", "a", 0, 0));
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
error_reporting(E_ALL);
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
var_dump(filter_var("?><!@#$%^&*()}{~Qwertyuilfdsasdfgmnbvcxcvbn", FILTER_SANITIZE_ENCODED, FILTER_FLAG_ENCODE_HIGH));
$db = PDOTest::factory();
$res = $db->query("SELECT a FROM test36428");
var_dump($res->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'SimpleXMLElement', array('<root/>')));
printf("printf test 18:%16b\n", 170);
session_start();
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
ini_set('exif.decode_unicode_motorola', 'UCS-2LE');
class C extends stdClass {
    public int $a;
}
$reflector = new ReflectionClass(C::class);
$obj = new C();
$reflector->resetAsLazyGhost($obj, function ($obj) {
    });
$link->close();
var_dump(substr_count("", "a", 0, 0));
$wsdl = __DIR__."/bug35142.wsdl";
function __construct($wsdl, $options) {
    parent::__construct($wsdl, $options);
    $this->server = new SoapServer($wsdl, $options);
    $this->server->addFunction('PostEvents');
  }
$this->server = new SoapServer($wsdl, $options);
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
$prefix . "フォルダ";

mkdir($prefi
st1.txt");

var_dump(cou;
$a[10] = "42";
$i = "010";
var_dump($a[$i], isset($a[$i]));
set_exception_handler(function (\Throwable $exception) {
    echo 'Caught: ' . $exception->getMessage() . "\n";
    throw new \Exception('exception handler');
});
var_dump(soundex("Lloyd")       == soundex("Ladd"));
$file = __DIR__ . '/bug38212私はガラスを食べられます.gd2';
$im1 = imagecreatetruec
lor(10,100);
imagefill($im1, 0,0, 0x
trycatch_dump(
    fn(;
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
$magic_file = __DIR__ . '/bug79283.db';
$finfo = new finfo(FILEINFO_NONE, $magic_file);
var_dump($finfo->buffer("buffer\n"));
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt', Pdo\Pgsql::class, true);
var_dump($pdo->query('SELECT 1;')->fetchAll());
$dom = Dom\HTMLDocument::createFromString(<<<HTML
<!DOCTYPE html>
<html>
    <body>
        <svg xmlns="http://www.w3.org/2000/svg" height="1"></svg>
        <math></math>
    </body>
</html>
HTML);
var_dump($dom->lookupNamespaceURI(""));
imagecreatefrompng('php://filter/read=convert.base64-encode/resource=' . __DIR__ . '/test.png');
$initialRequest = false;
$sert = "file://" . __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_ENCRYPT));
$meta_res = $stmt->result_metadata();
for ($field_idx = 0; $field_idx < $meta_res->field_count; $field_idx++) {
        $field = $meta_res->fetch_field();
        printf("Field        : %d\n", $field_idx);
        printf("Name         : %s\n", $field->name);
        printf("Orgname      : %s\n", $field->orgname);
        printf("Table        : %s\n", $field->table);
        printf("Orgtable     : %s\n", $field->orgtable);
        printf("Maxlength    : %d\n", $field->max_length);
        printf("Length       : %d\n", $field->length);
        printf("Charsetnr    : %d\n", $field->charsetnr);
        printf("Flags        : %d\n", $field->flags);
        printf("Type         : %d (%s)\n", $field->type, (isset($datatypes[$field->type])) ? $datatypes[$field->type] : 'unknown');
        printf("Decimals     : %d\n", $field->decimals);
    }
printf("Field        : %d\n", $field_idx);
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
$array_object = array();
var_dump( end($array_object) );
$im = imagecreate(800, 800);
imageline($im, 600, 700, 100, 200, IMG_COLOR_STYLED);
$a = new PDO("sqlite::memory:");
$b = $a->prepare("insert into test_35336 (b) values (?)");
$b->execute(array (5));
catch (Exception $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
catch (Exception $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
printf("%s: %s\n", $e::class, $e->getMessage());
php_cli_server_start('foo bar');
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
$host = PHP_CLI_SERVER_HOSTNAME;
$fn = "bug71263.bz2";
unlink($fn);
function foo(int $x) {
    $a[0] = $x;
    $a[1] = 5;
    echo $a[1];
    $a->foo = 5;
    echo $a[1];
}
$a[0] = $x;
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
$info = opcache_get_status()['interned_strings_usage'];
var_dump($info['buffer_size']);
$db = PDOTest::factory();
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "SELECT 11111 as `1`, 22222 as `2`";
$link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
$link->real_query($sql);
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
ob_clean();
