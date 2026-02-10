<?php
function f_0() {
    $datefmt = new IntlDateFormatter('en_US', IntlDateFormatter::FULL, IntlDateFormatter::FULL);
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
        $rc = new ReflectionClass('Foo');
    }
    if (true) {
        function test() {
            if (!stream_wrapper_register('foo', \Wrapper::class)) {
                throw new \Exception('Could not register stream wrapper');
            }
        
            $dir = opendir('foo://bar');
        
            if (!stream_wrapper_unregister('foo')) {
                throw new \Exception('Could not unregister stream wrapper');
            }
        
            $wrapper = stream_get_meta_data($dir)['wrapper_data'];
            if (!$wrapper instanceof Wrapper) {
                throw new \Exception('Wrapper is not of expected type');
            }
        
            closedir($dir);
            unset($dir);
        }
        test();
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
$client = new TestSoapClient(__DIR__.'/bug38004.wsdl');
$reflector = new ReflectionClass(C::class);
$var = 10;
function f_1() {
    $data = [
        "name" => ["family" => AF_INET6, "addr" => "::1"],
        "buffer_size" => 2000,
        "controllen" => socket_cmsg_space(IPPROTO_IPV6, IPV6_PKTINFO) +
                socket_cmsg_space(IPPROTO_IPV6, IPV6_TCLASS),
    ];
    $test = array("A\x00B" => "Hello world");
    if (true) {
        $im = ImageCreateTrueColor(10, 10);
        $color = ImageColorAllocateAlpha($im, 0, 0, 0, 1);
    }
    if (!true) {
        if (true) {
            $dbh = @pg_connect($conn_str);
        }
        if (!true) {
            $list = new SplDoublyLinkedList();
            $list->rewind();
        }
    }
    if (true) {
        if (true) {
            $empty = "";
        }
        if (!true) {
            if (true) {
                $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
                $reqOf3 = 'select 79 n union all select 80 union all select 81';
                $stmt = $pdo->prepare($reqOf3);
                $res = $stmt->fetchAll();
            }
            if (!true) {
                if (true) {
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
                }
                if (!true) {
                    mysqli_free_result($res);
                }
            }
        }
    }
    if (!true) {
        if (true) {
            if (true) {
                $db = PDOTest::factory();
                $db->exec('CREATE TABLE test34630 (id int NOT NULL PRIMARY KEY, val BLOB)');
                class PHPUnit_Framework_MockObject_Matcher {
                    public $stub = null;
                    public $methodNameMatcher;
                    public function invoked($invocation) {
                        return $this->stub->invoke($invocation);
                    }
                }
                $OuterMatcher = new PHPUnit_Framework_MockObject_Matcher();
                $OuterMatcher->methodNameMatcher = null;
            }
            if (!true) {
                if (true) {
                    public function __construct($callback) {
                            $this->callback = $callback;
                        }
                    $this->callback = $callback;
                    if (true) {
                        $notDefined[$i] = 'test';
                    }
                    if (!true) {
                        $depth0 = "depth02";
                        $iterator = new RecursiveDirectoryIterator(__DIR__ . DIRECTORY_SEPARATOR . $depth0);
                        $it = new RecursiveIteratorIterator($iterator);
                        $list = [];
                        $list[] = $it->getSubPathname();
                    }
                }
                if (!true) {
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
                    }
                    if (!true) {
                        var_dump(filter_var("?><!@#$%^&*()}{~Qwertyuilfdsasdfgmnbvcxcvbn", FILTER_SANITIZE_ENCODED, FILTER_FLAG_ENCODE_LOW));
                    }
                }
            }
        }
        if (!true) {
            if (true) {
                $time = '2000-01-01 00:00:00.000000';
                $tz_us = new DateTimeZone('America/Los_Angeles');
                $us = new DateTime($time, $tz_us);
                if (true) {
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
                }
                if (!true) {
                    if (true) {
                        $error = error_get_last();
                    }
                    if (!true) {
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
                        }
                        if (!true) {
                            var_dump($this->getConst());
                        }
                    }
                }
                $ar1 = array("row1" => 2, "row2" => 1);
                $args = array($ar1);
            }
            if (!true) {
                if (true) {
                    if (true) {
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
                        $i = 0;
                        $j = 0;
                        $foo = new FooBar();
                        $foo[$j++] = $i++;
                    }
                    if (!true) {
                        if (true) {
                            ['pid' => $pid, 'uri' => $uri] = http_server('genResponses', $output);
                        }
                        if (!true) {
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
                        }
                    }
                }
                if (!true) {
                    $document = new \DOMDocument();
                    var_dump($document->saveHTML());
                }
            }
        }
    }
    if (true) {
        $f = __DIR__."/data/test.txt.gz";
        $h = gzopen($f, 'r');
        var_dump(gzeof($h));
    }
    if (!true) {
        $meta_res = $stmt->result_metadata();
        $field = $meta_res->fetch_field();
        printf("Orgname      : %s\n", $field->orgname);
    }
}
function f_2() {
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
    zerofill(5, $link, 'INT');
    if (true) {
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
        $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt', Pdo::class, true);
        var_dump($pdo->query('SELECT 1;')->fetchAll());
        $cert = "file://" . __DIR__ . "/cert.crt";
        $cpca = __DIR__ . "/san-cert.pem";
        $utfl = __DIR__ . "/sni_server_uk.pem";
        var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_SERVER, array($cpca), $utfl));
        $sert = "file://" . __DIR__ . "/san-cert.pem";
        $cpca = __DIR__ . "/san-cert.pem";
        var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_ENCRYPT, array($cpca)));
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
        $dbh = @pg_connect($conn_str);
        $res = pg_query($dbh, 'SELECT test_notice()');
        pg_free_result($res);
    }
}
$im = imagecreate(800, 800);
imageline($im, 150, 150, 650, 150, IMG_COLOR_STYLED);
var_dump ( rtrim("rtrim test   " , "") );
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
$reqOfBig = 'select * from t';
$attrs = [ PDO::ATTR_PREFETCH => 0 ];
$stmt = $pdo->prepare($reqOfBig, $attrs);
$stmt->execute();
set_error_handler(
            function ($errno, $errstr, $errfile, $errline) {
                $this->handleError($errno, $errstr, $errfile, $errline);
            }
        );
$rm = new ReflectionMethod(Collator::class, 'getSortKey');
var_dump($rm->getNumberOfRequiredParameters());
var_dump ( rtrim("rtrim test0123456789", "0..9") );
var_dump(soundex("Lukasiewicz") == soundex("Ghosh"));
$dbh = @pg_connect($conn_str);
$res = pg_query($dbh, 'SELECT test_notice()');
var_dump($res);
$array_test = array("a", "b", "d", 7, "u" => "U", -4, "-.008" => "neg.008");
var_dump( end($array_test) );
var_dump(filter_var("?><!@#$%^&*()}{~Qwertyuilfdsasdfgmnbvcxcvbn", FILTER_SANITIZE_ENCODED, FILTER_FLAG_ENCODE_LOW));
function test($foo) {
    var_dump(0);
    var_dump($foo[0]);
}
var_dump($foo[0]);
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
$stmt = $pdo->prepare("select :1 n union all select :1 + 1 union all select :1 + 2 union all select :1 + 3");
$stmt->execute([ 15 ]);
function createDB(): PDO {
    $db = MySQLPDOTest::factory();
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    return $db;
}
$db = createDB();
$db->exec('CREATE TABLE test_80908 (`id` BIGINT(20) UNSIGNED AUTO_INCREMENT, `name` VARCHAR(5), PRIMARY KEY (`id`)) ENGINE = InnoDB AUTO_INCREMENT=10376293541461622799');
$dom = new DOMDocument;
var_dump($dom->getElementById('x')?->nodeName);
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
$fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
$phar = new Phar($fname);
$phar->setDefaultStub('my/custom/thingy.php', 'the/web.php');
var_dump($row['bit_column_1']);
$host = "localhost\0.example.com";
var_dump(gethostbyname($host));
function unserialize($data) {
        session_decode($data);
    }
session_decode($data);
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
catch (\ReflectionException $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
printf("%s: %s\n", $e::class, $e->getMessage());
$bar = new DateTime();
$args = [1, &$bar];
$function = function (int &$foo, DateTimeInterface &$bar) {};
(new ReflectionFunction($function))->invokeArgs($args);
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
