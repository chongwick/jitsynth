<?php
function f_0() {
    $time = '2000-01-01 00:00:00.000000';
    global $user, $host, $passwd, $db, $port, $socket;
    global $user, $host, $passwd, $db, $port, $socket;
    $this->mysqli = new mysqli($host, $user, $passwd, $db, $port, $socket);
    $result = $this->mysqli->query("SELECT NOW() AS my_time FROM DUAL");
    $row = $result->fetch_object();
    $dest = dirname(realpath(__FILE__)) . '/bug27582.png';
    $im2 = imagecreatefrompng($dest);
    $col = imagecolorat($im2, 5, 5);
    $a = new PDO("sqlite::memory:");
    $array = [0];
    $ar = array_values($array);
    class A {
        private static $x = 1;
    }
    class B extends A {
        function bar() {
            var_dump(self::$x);
        }
    }
    $a = new B;
    $a->bar();
}
function f_1() {
    $now = new DateTime('2018-11-03 11:34:20.781751');
    $ago = new DateTime('2018-11-03 11:34:20.000000');
    $diff = $now->diff($ago, true);
    var_dump($diff->invert, $diff->s, $diff->f);
}
function f_2() {
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_ENCRYPT, array($cpca), $utfl));
}
function f_3() {
    $dom = Dom\HTMLDocument::createFromString(<<<HTML
    <!DOCTYPE html>
    <html>
        <body>
            <svg xmlns="http://www.w3.org/2000/svg" height="1"></svg>
            <math></math>
        </body>
    </html>
    HTML);
    var_dump($dom->lookupNamespaceURI(NULL));
}
try {
    $fiber = new Fiber(function (): void {
        $self = Fiber::getCurrent();
        $self->resume();
    });
    $fiber->start();
} catch (Exception $e) {}
if (true) {
    class test {
    
      private function __destruct() {
      }
    }
    $obj = new test;
    $ch = curl_init();
    var_dump(curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0));
}
try {
    function validate($value)
    {
        foreach ([0] as $_) {
            $a = &$value->a;
            $value->a ?? null;
        }
    }
    validate((object) []);
} catch (Exception $e) {}
if (true) {
    $fn = "bug71263.bz2";
    unlink($fn);
    $GLOBALS['b'] = 3;
    var_dump(gc_collect_cycles());
}
try {
    ob_start();
} catch (Exception $e) {}
if (true) {
    unserialize('O:17:"Random\Randomizer":1:{i:0;a:2:{s:3:"foo";N;s:6:"engine";O:32:"Random\Engine\Xoshiro256StarStar":2:{i:0;a:0:{}i:1;a:4:{i:0;s:16:"7520fbc2d6f8de46";i:1;s:16:"84d2d2b9d7ba0a34";i:2;s:16:"d975f36db6490b32";i:3;s:16:"c19991ee16785b94";}}}}');
    phpinfo(INFO_MODULES);
    $host = PHP_CLI_SERVER_HOSTNAME;
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
    $f->resume();
}
try {
    var_dump(is_callable(array($this, 'static::testIsCallable2')));
} catch (Exception $e) {}
if (true) {
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
    var_dump( array_unshift($temp_array, $var, "hello", 'world') );
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_NS_SSL_SERVER, array($cpca), $utfl));
}
function f_4() {
    $cfg['names'] = ['cccc', 'aaaa', 'eeee', 'dddd', 'bbbb'];
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
    $data = ["k" => 0, 1, 2, 3];
    $cow_copy = $data;
    printf("printf test 25:%-2s\n", "gazonk");
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
}
try {
    $db = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
    $db->query('DROP PROCEDURE IF EXISTS testSp');
} catch (Exception $e) {}
if (true) {
    ob_end_flush();
}
try {
    $tester = new FPM\Tester($cfg);
    $tester->close();
} catch (Exception $e) {}
if (true) {
    $bert = "file://" . __DIR__ . "/bug41033.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_NS_SSL_SERVER, array($cpca)));
}
try {
    echo 'Error, failed to read exif data';
} catch (Exception $e) {}
if (true) {
    $file_handle = fopen(__FILE__, "r");
    fclose($file_handle);
}
$sort = array(1, 5, 2, 4, 3);
try {
    $array_test = array("a", "b", "d", 7, "u" => "U", -4, "-.008" => "neg.008");
    var_dump( reset($array_test) );
} catch (Exception $e) {}
if (true) {
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
    $row = mysqli_fetch_assoc($res);
    $meta = mysqli_fetch_fields($res);
    $meta = $meta[0];
    $length = $meta->length;
    $expected = str_repeat('0', $length - strlen($insert));
    $expected .= $insert;
    printf("[%03d] Expecting '%s' got '%s'\n", $offset, $expected, $row['zero']);
}
class C extends stdClass {
    public int $a;
}
$obj = new C();
try {
    $dom = new DOMDocument('1.0', 'UTF-8');
    $node = $dom->getElementById('test');
    var_dump($dom->saveHTML($node));
} catch (Exception $e) {}
if (true) {
    class Test implements ArrayAccess {
        public function offsetExists($x): bool { $GLOBALS["obj"] = 24; return true; }
        public function offsetGet($x): mixed { var_dump($x); return 42; }
        public function offsetSet($x, $y): void { }
        public function offsetUnset($x): void { }
    }
    $obj = new Test;
    $name = "foo";
    var_dump(empty($obj[$name]));
}
$id_1_date = '2014-09-23';
try {
    $now = new DateTimeImmutable();
    $dateperiod = (new ReflectionClass(DatePeriod::class))->newInstanceWithoutConstructor();
    $dateinterval = (new ReflectionClass(DateInterval::class))->newInstanceWithoutConstructor();
    $dateperiod->__unserialize(['start' => $now, 'end' => $now, 'current' => $now, 'interval' => $dateinterval]);
} catch (Exception $e) {}
if (true) {
    printf("[002] [%d] %s\n", $link->errno, $link->error);
}
$g = 'hi';
try {
    $readonly_anon = new readonly class {
        public int $field;
        function __construct() {
            $this->field = 2;
        }
    };
    $readonly_anon->field = 123;
    var_dump($readonly_anon->field);
} catch (Exception $e) {}
if (true) {
    $sh = new SessionHandler;
    session_set_save_handler($sh);
}
$zip = new ZipArchive();
try {
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
} catch (Exception $e) {}
if (true) {
    var_dump(soundex("Hilbert") == soundex("Ladd"));
}
$arr = array('a', 'b');
try {
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
    var_dump($body->lookupNamespaceURI("a"));
} catch (Exception $e) {}
if (true) {
    var_dump(spl_autoload_functions());
    $anon = new class {
        public int $field;
        function __construct() {
            $this->field = 2;
        }
    };
    $anon->field = 123;
    var_dump(mysqli_get_server_version($link));
}
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
$this->logOffEvent = $logOffEvent;
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
try {
    class C extends stdClass {
        public int $a;
    }
    $reflector = new ReflectionClass(C::class);
    $obj = new C();
    $reflector->resetAsLazyGhost($obj, function () {});
} catch (Exception $e) {}
if (true) {
    set_error_handler(function (int $errno, string $errstr, ?string $errfile = null, ?int $errline = null) {
        throw new \ErrorException($errstr, 0, $errno, $errfile, $errline);
    });
}
