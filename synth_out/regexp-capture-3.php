<?php
function f_0() {
    array_splice($GLOBALS,0,count($GLOBALS));
    print_r($str_instead);
    var_dump(json_decode('[]', false, 0x100000000));
    printf("printf test 18:%16b\n", 170);
    $r = new Phar(__DIR__ . "/bug69279.phar.zip");
    var_dump($r["bug69279.txt"]->isCompressed());
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
    class B extends P {
        protected function common() {
            echo __METHOD__, "\n";
        }
    }
    $a = new A();
    $a->test(new B());
    $heredoc_string = <<<EOT
    This is line 1 of 'heredoc' string
    This is line 2 of "heredoc" string
    EOT;
    $heredoc_null_string =<<<EOT
    EOT;
    $str_array = array(
                        // string without any characters that can be backslashed
                        'Hello world',
    
                        // string with single quotes
                        "how're you doing?",
                        "don't disturb u'r neighbours",
                        "don't disturb u'r neighbours''",
                        '',
                        '\'',
                        "'",
    
                        // string with double quotes
                        'he said, "he will be on leave"',
                        'he said, ""he will be on leave"',
                        '"""PHP"""',
                        "",
                        "\"",
                        '"',
                "hello\"",
    
                        // string with backslash characters
                        'Is your name Ram\Krishna?',
                        '\\0.0.0.0',
                        'c:\php\testcase\addslashes',
                        '\\',
    
                        // string with nul characters
                        'hello'.chr(0).'world',
                        chr(0).'hello'.chr(0),
                        chr(0).chr(0).'hello',
                        chr(0),
    
                        // mixed strings
                        "'\\0.0.0.0'",
                        "'\\0.0.0.0'".chr(0),
                        chr(0)."'c:\php\'",
                        '"\\0.0.0.0"',
                        '"c:\php\"'.chr(0)."'",
                        '"hello"'."'world'".chr(0).'//',
    
                // string with hexadecimal number
                        "0xABCDEF0123456789",
                        "\x00",
                        '!@#$%&*@$%#&/;:,<>',
                        "hello\x00world",
    
                        // heredoc strings
                        $heredoc_string,
                        $heredoc_null_string
                      );
    foreach( $str_array as $str )  {
      echo "\n-- Iteration $count --\n";
      var_dump( addslashes($str) );
      $count ++;
    }
    var_dump( addslashes($str) );
    var_dump(__METHOD__);
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        printf("printf test 10:<%15s>\n", "hoyesterettsjustitiarius");
    }
}
for($i = 495; $i <= 1074; $i++) {
  ini_set('precision', $i);
  echo "$i: len=", strlen(strval(-1 * pow(2, -1074))), "\n";
}
ini_set('precision', $i);
var_dump( rtrim("234\x0005678\x0000efgh\xijkl\x0n1", "\x0n1") );
$depth0 = "depth02";
touch(__DIR__ . DIRECTORY_SEPARATOR . $depth0 . DIRECTORY_SEPARATOR . 'getSubPathname_test_1.tmp');
(new Fiber(function() {
        global $f;
        var_dump((new ReflectionFiber($f))->getTrace());
    }))->start();
$str = 'Hello World';
$shm_key = ftok(__FILE__, 'p');
$shm_id1 = shmop_open($shm_key, 'c', 0644, strlen($str));
var_dump($shm_id1);
set_error_handler(
            function ($errno, $errstr, $errfile, $errline) {
                $this->handleError($errno, $errstr, $errfile, $errline);
            }
        );
$list = new SplDoublyLinkedList();
$list->push('o');
register_shutdown_function('ABC');
$timestamp = gmmktime(8, 8, 8, 8, 8, 2008);
$inputs = array(
      'The ISO 8601:1988 week number' => "%V",
      'Weekday as decimal' => "%u",
);
foreach($inputs as $key =>$value) {
      echo "\n--$key--\n";
      var_dump( gmstrftime($value) );
      var_dump( gmstrftime($value, $timestamp) );
}
var_dump( gmstrftime($value, $timestamp) );
$ch = curl_init("https://localhost/username");
curl_setopt($ch, CURLOPT_USERNAME, null);
for ($i_2 = 0; $i_2 < 10; $i_2++) {
    $tester = new FPM\Tester($cfg);
    $userMessage = "'user' directive is ignored when FPM is not running as root";
    $tester->expectLogNotice($userMessage, 'eeee');
}
function f_3() {
    function createDB(): PDO {
        $db = MySQLPDOTest::factory();
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        return $db;
    }
    $db = createDB();
    $db->exec('CREATE TABLE test_80908 (`id` BIGINT(20) UNSIGNED AUTO_INCREMENT, `name` VARCHAR(5), PRIMARY KEY (`id`)) ENGINE = InnoDB AUTO_INCREMENT=10376293541461622799');
    $doc = new \DOMDocument();
    $target = $doc->documentElement->lastChild;
    $target->before('bar', $doc->documentElement->firstChild, 'baz');
    mysqli_free_result($res);
    (new Fiber(function() {
            global $f;
            var_dump((new ReflectionFiber($f))->getTrace());
        }))->start();
    mysqli_free_result($res);
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
    $array = [0];
    $ar = array_values($array);
    var_dump($ar);
    $ch = curl_init("https://localhost/username");
    $response = curl_exec($ch);
    var_dump(str_contains($response, "authorization"));
    $dest = dirname(realpath(__FILE__)) . '/bug27582.png';
    $im = ImageCreateTrueColor(10, 10);
    imagepng($im, $dest);
    printf("printf test 19:%16x\n", 170);
    for ($i_4 = 0; $i_4 < 10; $i_4++) {
        function test(string $name, object $obj) {
            printf("# %s:\n", $name);
        
            var_dump($obj);
            var_dump($obj->a);
            var_dump($obj);
        }
        var_dump($obj);
    }
}
class C extends stdClass {
    public int $a;
}
$reflector = new ReflectionClass(C::class);
$obj = new C();
$reflector->resetAsLazyProxy($obj, function () {});
$dom = Dom\HTMLDocument::createEmpty();
$container = $dom->appendChild(createElement($dom, "container"));
$container->appendChild(createElementNS($dom, "http://www.w3.org/1999/xhtml", "bar:HTML", "8"));
$interval = new DateInterval('P1D');
$dt = new DateTime('first day of January 2011');
$dt->sub($interval);
$dbh = @pg_connect($conn_str);
_set_lc_messages($dbh);
$bert = "file://" . __DIR__ . "/bug41033.pem";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_NS_SSL_SERVER, array($cpca), $utfl));
$bert = "file://" . __DIR__ . "/bug41033.pem";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_SERVER, array($cpca), $utfl));
clearstatcache();
$sert = "file://" . __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_NS_SSL_SERVER));
catch (Error $e) {
    printf("%s: %s\n", $e::class, $e->getMessage());
}
catch (Error $e) {
    printf("%s: %s\n", $e::class, $e->getMessage());
}
printf("%s: %s\n", $e::class, $e->getMessage());
$bert = "file://" . __DIR__ . "/bug41033.pem";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_NS_SSL_SERVER, array($cpca)));
var_dump(A::$x);
ob_start();
for ($i_5 = 0; $i_5 < 10; $i_5++) {
    error_reporting(E_ALL);
}
function f_6() {
    var_dump(filter_var("<data&sons>", FILTER_SANITIZE_ENCODED));
}
function f_7() {
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
    $data = ["k" => 0, 1, 2, 3];
    function f_8() {
        printf("printf test 16:%x\n", 170);
        $pdo = MySQLPDOTest::factory();
        $pdo->query('INSERT INTO bug79596 VALUES(4.9)');
        $wsdl = __DIR__."/bug35142.wsdl";
        function __construct($wsdl, $options) {
            parent::__construct($wsdl, $options);
            $this->server = new SoapServer($wsdl, $options);
            $this->server->addFunction('PostEvents');
          }
        $this->server = new SoapServer($wsdl, $options);
        function __doRequest($request, $location, $action, $version, $one_way = 0): string {
            echo "$request\n";
            ob_start();
            $this->server->handle($request);
            $response = ob_get_contents();
            ob_end_clean();
            return $response;
          }
        $this->server->handle($request);
    }
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
    var_dump( array_unshift($temp_array, $var, "hello", 'world') );
    printf("[001] Expecting integer on 64bit got %s/%s\n", gettype($id), var_export($id, true));
    class SomeClass implements JsonSerializable {
        public function jsonSerialize(): mixed {
            return [get_object_vars($this)];
        }
    }
    $class = new SomeClass;
    $arr = [$class];
    var_dump(json_encode($arr));
    var_dump(rename("phar://a.phar/x", "phar://a.phar/y"));
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
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_SERVER, array($cpca)));
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
    $replace_pairs = array("$" => "%", "%" => "$", "#*&@()" => "()@&*#");
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
    var_dump( strtr($str, $replace_pairs) );
    $db = getDbConnection();
    var_dump($db->getAttribute(PDO::DBLIB_ATTR_SKIP_EMPTY_ROWSETS));
}
$file = __DIR__ . '/bug38212私はガラスを食べられます.gd2';
$im1 = imagecreatetruec;
$a = 1;
#[\Deprecated(1234)]
function test() {
}
test();
class C extends stdClass {
    public int $a;
}
$obj = new C();
$filename =  __DIR__ . DIRECTORY_SEPARATOR . 'bug70752.txt';
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
function f_9() {
    var_dump(exif_read_data(__DIR__.'/image021.tiff'));
    var_dump(file_get_contents(__DIR__ . "/bug69279.txt"));
}
var_dump(soundex("Lukasiewicz"));
date_default_timezone_set("Europe/Lisbon");
$tempstring = "abcdefghjklmnpqrstuvwxyz";
var_dump(sprintf("%030.-15s", $tempstring));
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
$diff_whitespaces = <<<EOT
<html>Roy&#039;s height\r &gt; Sam\t&#039;s height
1111\t\t &amp; 0000\v\v = \f0000
&quot; heredoc\ndouble quoted string. with\vdifferent\fwhite\vspaces&quot;
EOT;
$b = "30";
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
function test($foo) {
    var_dump(0);
    var_dump($foo[0]);
}
test("str");
printf("printf test 28:%2\$02d %1\$2d\n", 1, 2);
$r = new ResourceBundle( 'en_US', BUNDLE );
$r2 = $r['testtable'];
printf( "testtable: %d\n", $r2['major'] );
class C {
    public private(set) string $prop1 {
        set => $value;
    }
    public private(set) string $prop2 {
        get => $this->prop2;
    }
}
$c = new C();
function test(string $input) {
    var_dump(filter_var($input, FILTER_VALIDATE_URL));
}
test("http://t[est@127.0.0.1");
$f = __DIR__."/data/test.txt.gz";
function test() {
    $a = 1;
    try {
        return $a;
    } finally {
        $a = 2;
    }
}
var_dump(test());
function f_10() {
    var_dump(filter_var("<data&sons>", FILTER_SANITIZE_ENCODED));
}
$dom = Dom\HTMLDocument::createEmpty();
$container = $dom->appendChild(createElement($dom, "container"));
$container->appendChild(createElementNS($dom, "urn:foo", "htML", "5"));
$file = __DIR__ . '/bug38212私はガラスを食べられます.gd2';
$im1 = imagecreatetruec
;
$array_object = array();
var_dump( end($array_object) );
function test2() {
    $x = test();
}
test2();
phpinfo(INFO_MODULES);
$sert = "file://" . __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_CRL_SIGN));
ob_end_clean();
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
var_dump(strncasecmp("test ", "E", 10));
(new Fiber(function() {
        global $f;
        var_dump((new ReflectionFiber($f))->getTrace());
    }))->start();
$GLOBALS['b'] = 2;
$b = &$GLOBALS['b'];
$GLOBALS['b'] = 3;
$a = 4;
var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
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
$bug_gh16013_callback_struct->return_int8 = function($val) use($ffi) {
    $cdata = $ffi->new('int8_t');
    $cdata->cdata = $val;
    return $cdata;
};
var_dump(($bug_gh16013_callback_struct->return_int8)(-4));
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
$db = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
$stmt = $db->prepare("CALL testSp()");
$stmt->execute();
$outfile = tempnam(sys_get_temp_dir(), "ssl");
$contentfile = tempnam(sys_get_temp_dir(), "ssl");
$pkcsfile = __DIR__ . "/openssl_pkcs7_verify__pkcsfile.tmp";
$eml = __DIR__ . "/signed.eml";
$cainfo = array();
var_dump(openssl_pkcs7_verify($eml, PKCS7_NOVERIFY, $outfile, $cainfo, $outfile, $contentfile, $pkcsfile));
$php = getenv('TEST_PHP_EXECUTABLE_ESCAPED');
var_dump(`$php -n -v`);
$array_test = array("a", "b", "d", 7, "u" => "U", -4, "-.008" => "neg.008");
printf("printf test 20:%16X\n", 170);
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
$expected_flags = array('col1' => 'MULTIPLE_KEY PART_KEY', 'col2' => 'PART_KEY');
$db = MySQLPDOTest::factory();
$stmt = $db->prepare('SELECT * FROM test_33689');
$tmp = $stmt->getColumnMeta(0);
$fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
$phar = new Phar($fname);
var_dump($phar->getStub());
$start_key = 0;
for ($i_11 = 0; $i_11 < 10; $i_11++) {
    $im = imagecreatetruecolor(1, 1);
}
$loop_counter = 1;
$info = opcache_get_status()['interned_strings_usage'];
var_dump($info['buffer_size']);
$oneeighty = M_PI;
$pkcsfile = __DIR__ . "/openssl_pkcs7_verify__pkcsfile.tmp";
var_dump(file_get_contents($pkcsfile));
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
for ($i_12 = 0; $i_12 < 10; $i_12++) {
    $document = new \DOMDocument();
}
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
$fp = fopen("php://memory", "r+");
fwrite($fp, str_repeat("baad", 1024*1024));
$bert = "file://" . __DIR__ . "/bug41033.pem";
$a = array(1,2,3);
$s1 = "some string";
$c = $a + $s1;
var_dump($c);
$reflector = new ReflectionClass(C::class);
$im = imagecreate(800, 800);
imageline($im, 650, 150, 650, 650, IMG_COLOR_STYLED);
$tbl = "test";
$sql = "INSERT INTO $tbl (bit_column_1) VALUES (0b10101010101)";
function t1()
{
    ob_start("test");
    echo "Hello from t1 1 ";
        echo "Hello from t1 2 ";
        ob_end_flush();
}
t1();
