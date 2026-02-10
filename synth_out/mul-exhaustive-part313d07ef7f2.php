<?php
class C extends stdClass {
    public int $a;
}
$obj = new C();
function f_0() {
    if (true) {
        return true;
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
    return ($a->priv_member < $b->priv_member) ? 1 : -1;
}
function f_1() {
    function f_2() {
        );
        if (!$reader->open($fil
        extAttribute();
                    echo $reade;
        public static function fromArray(array $props): self
            {
                $me = new static;
                foreach ($props as $k => &$v) {
                    $me->{$k} = &$v;  # try to remove &
                }
                return $me;
            }
        $me = new static;
        foreach ($props as $k => &$v) {
                    $me->{$k} = &$v;  # try to remove &
                }
        $me->{$k} = &$v;
        return $me;
    }
    function f_3() {
        $db = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
        $db->query(<<<'SQL'
        CREATE
            PROCEDURE `testSp`()
        	BEGIN
        		DECLARE `cur` CURSOR FOR SELECT 1;
        		OPEN `cur`;
        		CLOSE `cur`;
        		SELECT 1;
        	END;
        SQL);
        $priorityQueue = new SplPriorityQueue();
        var_dump($priorityQueue->getExtractFlags() & SplPriorityQueue::EXTR_PRIORITY);
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
        var_dump(range(1, 3, -1));
    }
    var_dump(debug_backtrace());
    var_dump(soundex("Euler"));
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
    test('Ghost', $obj);
    $thisdir = __DIR__;
    $filename = $thisdir . "/bug47667.zip";
    unlink($filename);
    if (true) {
        return $this->getInt();
    }
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
    $prefix . "フォルダ";
    
    mkdir($prefi
    mdir($prefi;
    class TrampolineTest {
        public function __call(string $name, array $arguments) {
            echo 'Trampoline for ', $name, PHP_EOL;
        }
    }
    $o = new TrampolineTest();
    $callback2 = [$o, 'trampoline2'];
    spl_autoload_register($callback2);
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_CLIENT));
    $tester = new FPM\Tester($cfg);
    $userMessage = "'user' directive is ignored when FPM is not running as root";
    $tester->expectLogNotice($userMessage, 'dddd');
}
$ninety = M_PI /2.0;
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
$trace_file = '/tmp/mysqli_debug_phpt.trace';
printf("[003] Trace file '%s' has not been created\n", $trace_file);
$fp = tmpfile();
rewind($fp);
var_dump(ob_get_contents());
$filename = __DIR__ . DIRECTORY_SEPARATOR . 'bug70752.zip';
$zip = new ZipArchive();
$zip->open($filename);
$im = imagecreate(800, 800);
imageline($im, 600, 700, 100, 200, IMG_COLOR_STYLED);
$dom = new DOMDocument;
var_dump($dom->getElementById('x')?->nodeName);
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
sprintf('%2147483648$s, %2$s %1$s', "a", "b");
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
var_dump( range(1.0, 7.0, 10.0**400) );
$db = getDbConnection();
var_dump($db->getAttribute(PDO::DBLIB_ATTR_SKIP_EMPTY_ROWSETS));
$zip = new ZipArchive();
$zip->close();
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
$filename = __DIR__ . '/私はガラスを食べられます_003.xml';

$xmlstring = '<?xml ve
ion="1.0" encoding="UTF-8"?>
<books><book num="1" idx="2">book1</book></books>';
file_put_contents($file
ame, $xmlstring);

$reader = new XMLReade;
#[\AllowDynamicProperties]
class C {
    public $b;
    public function __construct() {
        $this->a = new Canary();
    }
}
$obj = new C();
var_dump($obj->a);
var_dump(mb_strpos('Hello', 'e', 0, '8bit'));
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
$child->testIsCallable();
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
$fp = fopen("php://memory", "r+");
fwrite($fp, str_repeat("baad", 1024*1024));
$filename = __DIR__ . '/bug77432.phar';
$phar = new Phar($filename);
$phar->stopBuffering();
session_start();
$date1 = DateTime::createFromFormat("!D d M Y", "Sat 19 November 2011");
$date2 = new DateTime("Sat 19 November 2011");
var_dump($date1->format('Y-m-d') == $date2->format('Y-m-d'));
$db = PDOTest::test_factory(dirname(__FILE__) . '/common.phpt');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db = PDOTest::factory();
$db->exec('CREATE TABLE test34630 (id int NOT NULL PRIMARY KEY, val VARCHAR(256))');
$tester = new FPM\Tester($cfg);
$userMessage = "'user' directive is ignored when FPM is not running as root";
$tester->expectLogNotice($userMessage, 'cccc');
$ch = curl_init("https://localhost/userpwd");
curl_setopt($ch, CURLOPT_USERPWD, null);
set_include_path(__DIR__.'/bug39542;.');
function test($s) {
  echo "'".trim(str_replace("&nbsp;", " ", htmlspecialchars_decode(strip_tags(highlight_string($s,1)))))."'\n";
}
test('<?php echo 3; // 4 ?>5');
$dom = new DOMDocument;
$test1 = $dom->getElementById('x');
$dom->documentElement->appendChild($test1);
class A {
    public function __call($name, $args) {
        eval('$args = array(); var_dump(debug_backtrace());');
    }
}
$a = new A();
$a->test("test");
var_dump(json_decode('{"":"value", "key":"value"}', true));
 ($dirs as $d) {
   
dirs as $d) {
;
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
$client2 = new soapclient(NULL, [
  'location' => 'http://' . PHP_CLI_SERVER_ADDRESS,
  'uri' => 'misc-uri',
  'soap_version' => SOAP_1_2,
  'user_agent' => 'Vincent JARDIN, test headers',
  'trace' => true, /* record the headers before sending */
  'stream_context' => stream_context_create([
    'http' => [
      'header' => sprintf("MIME-Version: 1.0\r\n"),
      'content_type' => sprintf("")
    ],
  ]),
]);
$headers = $client2->__getLastRequestHeaders();
printf("Content-Type Default NOK %s" . PHP_EOL, $headers);
function test()
{
    echo "Undefined index here: '{$data['HTTP_HEADER']}'\n";
}
test();
$key = str_repeat('abc', random_int(3, 3));
var_dump(array_any([$key => 1], static fn () => true));
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
zerofill(9, $link, 'DOUBLE');
$dom = Dom\HTMLDocument::createEmpty();
dumpNodeList($dom->getElementsByTagName("foo:html"));
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
set_exception_handler(function() {
    echo 'Fourth handler' . PHP_EOL;
});
$dom = Dom\XMLDocument::createFromString(<<<XML
<root>
    <test1 xml:id="x"/>
    <test2 xml:id="x"/>
</root>
XML);
var_dump($dom->getElementById('x')?->nodeName);
c1::$a1[] = 1;
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
function something() {
        foreach(array(1, 2) as $value) {
                for($i = 0; $i < 1; $i++) {
                        continue 2;
                }
                return;
        }
}
something();
undefined_function('Null');
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
var_dump($this->getConst());
mt_srand(1234567890);
$oIntlDateFormatter = new IntlDateFormatter("en_GB");
$offset3 = "offset";
$oIntlDateFormatter->parseToCalendar('America/Los_Angeles', $offset3);
var_dump( range('A', 'H', 0.0) );
$ch = curl_init("https://localhost/username");
curl_setopt($ch, CURLOPT_PASSWORD, null);
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
printf("printf test 14:%c\n", 64);
$fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
$phar = new Phar($fname);
$phar->setDefaultStub();
$im = imagecreatefromgd2(__DIR__ . DIRECTORY_SEPARATOR . 'bug73161.gd2');
var_dump($im);
$dom = new DOMDocument();
$xpath = new DOMXpath($dom);
foreach($xpath->query('/root/noexist') as $child) {
    var_dump($child);
}
var_dump($child);
var_dump ( $vars );
function g() {
    yield 'foo';
    Fiber::suspend();
}
var_dump(yield from g());
function foo() {
  $i = 1;
  $x = 2;
  var_dump($i=$x);
  return $i;
}
var_dump(foo());
printf("[004] Expecting '2009-12-03' got '%s'\n", $row[0]);
$tempnum = 12345;
$tempstring = "abcdefghjklmnpqrstuvwxyz";
var_dump(sprintf("%d  %s  %d\n", $tempnum, $tempstring, $tempnum));
$list = new SplDoublyLinkedList;
$list->add(1, 1);
$bert = "file://" . __DIR__ . "/bug41033.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_SIGN));
grapheme_strpos(1,1,2147483648);
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
$field = mysqli_fetch_field_direct($res, 1);
$expected_flags = trim(str_replace('NO_DEFAULT_VALUE', '', $expected_flags));
$expected_flags = trim(str_replace('UNSIGNED', '', $expected_flags));
list($missing_flags, $unexpected_flags, $flags_found) = checkFlags($field->flags, $expected_flags, $flags);
printf("[006] Found unexpected flags '%s' for %s, found '%s' with MySQL %s'\n",
                $unexpected_flags, $column_def, $flags_found, mysqli_get_server_version($link));
$cert = "file://" . __DIR__ . "/cert.crt";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SMIME_ENCRYPT, array($cpca), $utfl));
var_dump(soundex("Euler")       == soundex("Ellery"));
class A
{
    public function & __get($name)
    {
        return $this->test;
    }
}
class B extends A
{
    private $test;
}
$b = new B;
var_dump($b->test);
set_error_handler('error_handler');
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
$pdo->exec("create temp table t (n int, t text)");
class_alias( 'stdClass', '_' );
$filename = __DIR__ . DIRECTORY_SEPARATOR . 'bug70752.zip';
$zip = new ZipArchive();
$zip->open($filename);
public function test(P $sibling) {
        $sibling->common();
    }
$sibling->common();
$doc = new \DOMDocument();
$doc->loadXML('<a>foo<last/></a>');
ob_end_clean();
$array = new ArrayObject();
var_dump($array->offsetExists('key'));
$dom = Dom\HTMLDocument::createEmpty();
$container = $dom->appendChild(createElement($dom, "container"));
$container->appendChild(createElementNS($dom, "http://www.w3.org/1999/xhtml", "bar:html", "9"));
$fp = fopen (__FILE__, "r");
fclose($fp);
rename("phar://a.phar/x", "phar://a.phar/y");
['pid' => $pid, 'uri' => $uri] = http_server('genResponses', $output);
$document = new \DOMDocument();
$document->loadHTMLFile($uri);
$headers2 = exif_read_data(__DIR__ . '/bug64739.jpg');
var_dump($headers2['Author']);
$link = mysqli_init();
$link->set_charset('sjis');
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
$empty_webp = __DIR__ . "/gh13774.webp";
file_put_contents($empty_webp, "");
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
function &test() {
    try {
        return $a;
    } finally {
        $a = 2;
    }
}
var_dump(test());
$db = PDOTest::factory();
$fp = tmpfile();
$insert = $db->prepare("insert into test34630 (id, val) values (1, :blob)");
$insert->bindValue(':blob', $fp, PDO::PARAM_LOB);
$x = fprintf($fp, "fprintf test 1:%.5s", "abcdefghij");
var_dump($x);
$sert = "file://" . __DIR__ . "/san-cert.pem";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_CRL_SIGN, array($cpca), $utfl));
foo();
function foo() {
    global $LAST;
    ($LAST = $LAST + 0) * 1;
    echo "ok\n";
};
$oIntlDateFormatter = new IntlDateFormatter("en_GB");
$offset3 = PHP_INT_MAX * 16;
$oIntlDateFormatter->parseToCalendar('America/Los_Angeles', $offset3);
set_error_handler(function (int $errno, string $errstring): never {
    throw new Exception($errstring);
});
$dest = __DIR__ . "/bug40228";
rmdir($dest . '/test');
stream_socket_client('tcp://9999.9999.9999.9999:9999', $error_code, $error_message, 0.2, STREAM_CLIENT_CONNECT | STREAM_CLIENT_PERSISTENT);
function test() {
    (new B)->foo();
    (new B)->bar();
    (new B)->baz();
    B::baz();
}
test();
var_dump(sha1_file(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370_003' . DIRECTORY_SEPARATOR . 'testfile'));
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
$bert = "file://" . __DIR__ . "/bug41033.pem";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_CLIENT, array($cpca)));
$sh = new SessionHandler;
$sh->read("");
function test(string $name, object $obj) {
    printf("# %s:\n", $name);

    var_dump($obj);
    var_dump($obj->a);
    var_dump($obj);
}
var_dump($obj->a);
printf("printf test 13:%5d\n", -12);
class C {
    public int $a;
}
$reflector = new ReflectionClass(C::class);
$obj = new C();
$reflector->resetAsLazyGhost($obj, function ($obj) use ($reflector) {
    try {
        $reflector->resetAsLazyGhost($obj, function () { });
    } catch (Error $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
    try {
        $reflector->resetAsLazyProxy($obj, function () { });
    } catch (Error $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }

});
$bert = "file://" . __DIR__ . "/bug41033.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_NS_SSL_SERVER));
++$failuresNb;
$varOutput = ob_get_contents();
$varOutput = str_replace(
        [$var_dim_filename],
        ['%s'],
        $varOutput
    );
file_put_contents(__DIR__ . DIRECTORY_SEPARATOR . "debug_false_container_{$failuresNb}.txt", $varOutput);
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
test(1);
$s = "1234567890a";
var_dump($s["010"], isset($s["010"]));
register_shutdown_function(function (): void {
    foreach (get_resources() as $res) {
        if (get_resource_type($res) === 'persistent stream') {
            echo "ERROR: persistent stream not closed\n";
            return;
        }
    }
    echo "OK: persistent stream closed\n";
});
$array = array("test" => 1);
$a = "lest";
var_dump($array[$a]);
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
var_dump(asort($temp_array, SORT_REGULAR) );
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
$prefix . "フォルダ";

mkdir($prefi
ith_cp($d1, 65001);

touch("$d0\\;
class C {
	use T;
	private array $a = [1];
}
$o = new C;
$o->foo();
$im = imagecreatetruecolor(1, 1);
imagescale($im, 1, 1, -10);
$header = <<<HEADER
extern int *(*bug79177_cb)(void);
void bug79177(void);
HEADER;
$ffi = FFI::cdef($header);
$ffi->bug79177();
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
mail("some.address.it.wont.ever.reach@lookup.and.try.to.find.this.host.name","subject","a", "");
$dom = new DOMDocument;
$element = $dom->appendChild($dom->createElement('root'));
$element->prepend('x', new DOMEntity);
$array = new ArrayObject();
var_dump($array->offsetExists('key'));
$fn = "bug71263.bz2";
unlink($fn);
$fp = fopen("php://memory", "r+");
fwrite($fp, str_repeat("baad", 1024*1024));
$dom = Dom\HTMLDocument::createEmpty();
dumpNodeList($dom->getElementsByTagName("HTML"));
pcntl_wait($status);
imagecreatefrompng('php://filter/read=convert.base64-encode/resource=' . __DIR__ . '/test.png');
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
$link = mysqli_init();
$link->set_charset('sjis');
printf("printf test 6:%-010.2f\n", 2.5);
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
$a[10] = "42";
var_dump($a["10"], isset($a["10"]));
class D {
    public string $prop;
}
$d = new D();
var_dump($d);
$empty_webp = __DIR__ . "/gh13774.webp";
$im = imagecreatefromwebp($empty_webp);
var_dump(sprintf("%%%.2f", 1.23456789e10));
printf("[001] [%d] %s\n", mysqli_errno($link), mysqli_error($link));
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
function validate($value)
{
    foreach ([0] as $_) {
        $a = &$value->a;
        $value->a ?? null;
    }
}
validate((object) ['b' => 0]);
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
$headers1 = exif_read_data(__DIR__ . '/bug64739.jpg');
var_dump($headers1['Title'][0] === '?');
function test()
{
    echo "Undefined index here: '{$data['HTTP_HEADER']}'\n";
}
test();
var_dump(soundex("Knuth"));
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
$field = mysqli_fetch_field_direct($res, 1);
$expected_flags = trim(str_replace('NO_DEFAULT_VALUE', '', $expected_flags));
$expected_flags = trim(str_replace('UNSIGNED', '', $expected_flags));
list($missing_flags, $unexpected_flags, $flags_found) = checkFlags($field->flags, $expected_flags, $flags);
printf("[006] Found unexpected flags '%s' for %s, found '%s' with MySQL %s'\n",
                $unexpected_flags, $column_def, $flags_found, mysqli_get_server_version($link));
$list = new SplDoublyLinkedList;
$list->add(1, 1);
$list = new SplDoublyLinkedList();
$list->push('o');
var_dump( range(1, 7, 10.0**400) );
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
function showFirstTwoItems($it) {
  echo str_replace("\0", '\0', $it->key()) . " => " . $it->current() .
"\n";
  $it->next();
  echo str_replace("\0", '\0', $it->key()) . " => " . $it->current() .
"\n";
}
$it->next();
$arr = array(
    range(1, 5),
    range(1, 5),
    range(1, 5),
    range(1, 5),
    range(1, 5),
);
array_walk_recursive($arr,
    function (&$value, $key) use(&$arr) {
        var_dump($key);
        unset($arr[$key]);
    }
);
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
var_dump(sprintf("%%", 1.23456789e10));
$list = new SplDoublyLinkedList();
$list->push('f');
class A {
    public function __call($name, $args) {
        eval('$args = array(); var_dump(debug_backtrace());');
    }
}
$a = new A();
$a->test("test");
set_exception_handler(function() {
    echo 'First handler' . PHP_EOL;
});
$arr = array(
    range(1, 5),
    range(1, 5),
    range(1, 5),
    range(1, 5),
    range(1, 5),
);
array_walk_recursive($arr,
    function (&$value, $key) use(&$arr) {
        var_dump($key);
        unset($arr[$key]);
    }
);
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt', Pdo\Pgsql::class, true);
var_dump($pdo->query('SELECT 1;')->fetchAll());
$ch = curl_init();
curl_exec($ch);
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
$array = array('f' => "first", "s" => 'second', 1, 2.222);
$temp_array = $array;
var_dump($temp_array);
$fp = fopen (__FILE__, "r");
fclose($fp);
$cert = "file://" . __DIR__ . "/cert.crt";
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_NS_SSL_SERVER));
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
$client = new SoapClient(__DIR__ . '/bug49278.wsdl', array('location' => "http://".PHP_CLI_SERVER_ADDRESS, 'trace' => 1));
var_dump($client->__getLastResponse());
openssl_error_string();
$ch = curl_init("https://localhost/userpwd");
curl_setopt($ch, CURLOPT_USERPWD, null);
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
$tester
    ->request('', ['SCRIPT_FILENAME' => null])
    ->expectHeader('Status', '404 Not Found')
    ->expectError('Primary script unknown');
$headers2 = exif_read_data(__DIR__ . '/bug64739.jpg');
var_dump($headers2['Title']);
$dt = new DateTime('@1604215800');
$dt->add(new DateInterval('PT1M'));
function test($s) {
  echo "'".trim(str_replace("&nbsp;", " ", htmlspecialchars_decode(strip_tags(highlight_string($s,1)))))."'\n";
}
test('<?php echo "1";//22');
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
session_write_close();
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
$threesixty = M_PI * 2.0;
var_dump(sin($threesixty));
$ch = curl_init("https://localhost/username");
curl_setopt($ch, CURLOPT_STDERR, fopen("php://stdout", "w"));
$ch = curl_init("https://localhost/username");
$response = curl_exec($ch);
var_dump(str_contains($response, "authorization"));
var_dump($line);
$dom = Dom\HTMLDocument::createEmpty();
dumpNodeList($dom->getElementsByTagName("htML"));
$initialRequest = false;
function __construct($wsdl) {
    parent::__construct($wsdl);
    $this->server = new SoapServer($wsdl);
    $this->server->addFunction('Test');
  }
$this->server = new SoapServer($wsdl);
$this->server->addFunction('Test');
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
printf("[007] [%d] %s\n", $stmt->errno, $stmt->error);
function test(string $input) {
    var_dump(filter_var($input, FILTER_VALIDATE_URL));
}
test("http://php.net\\@aliyun.com/aaa.do");
$var = -PHP_INT_MAX - 1;
range($var,1,$var);
$dfp = opendir ( __DIR__ );
closedir($dfp);
$f = __DIR__."/data/test.txt.gz";
$h = gzopen($f, 'r');
gzclose($h);
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
$fiber->start();
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
var_dump(-2147483647 % -1);
$date = (new ReflectionClass(DateTime::class))->newInstanceWithoutConstructor();
$dateperiod = (new ReflectionClass(DatePeriod::class))->newInstanceWithoutConstructor();
$dateperiod->__unserialize(['start' => $date]);
function display($res)
{
	echo implode("\n", array_map(fn($row) => implode("\t", $row), $res))."\n";
}
$res = [];
display($res);
$filename = __DIR__ . '/私はガラスを食べられます_003.xml';

$xmlstring = '<?xml ve
ion="1.0" encoding="UTF-8"?>
<books><book num="1" idx="2">book1</book></books>';
file_put_contents($file
ame, $xmlstring);

$reader = new XMLReade;
$ch = curl_init();
$fp = fopen(PHP_OS_FAMILY === 'Windows' ? 'nul' : '/dev/null', 'w');
curl_setopt($ch, CURLOPT_FILE, $fp);
$dom = Dom\HTMLDocument::createEmpty();
var_dump($dom->lookupNamespaceURI(""));
$list = new SplDoublyLinkedList;
$list->add(1, 1);
$res->free();
ini_set("session.save_handler","files");
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
$d0 = $prefix . "ソフト";
$d1 =
dir($d1);

;
set_error_handler(
            function ($errno, $errstr, $errfile, $errline) {
                $this->handleError($errno, $errstr, $errfile, $errline);
            }
        );
var_dump ( rtrim("rtrim test$#@", "#@$") );
class D {
    public string $prop;
}
$d = new D();
var_dump($d);
set_exception_handler("foo");
$f = __DIR__."/data/test.txt.gz";
$h = gzopen($f, 'r');
gzpassthru($h);
$filename =  __DIR__ . DIRECTORY_SEPARATOR . 'bug70752.txt';
var_dump(file_exists($filename));
$db = getDbConnection();
$stmt = $db->prepare("SELECT 1, 2 AS named, 3");
$stmt->execute();
$GLOBALS['b'] = 2;
$b = &$GLOBALS['b'];
$GLOBALS['b'] = 3;
$a = 4;
$c = $b;
$b = 'x';
var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b'], $c);
$filename = __DIR__ . DIRECTORY_SEPARATOR . 'bug70752.zip';
$zip = new ZipArchive();
$zip->open($filename);
var_dump(defined('SO_REUSEPORT'));
$dom = Dom\HTMLDocument::createEmpty();
dumpNodeList($dom->getElementsByTagName("htML"));
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
$dt = new DateTime('@1604215800');
$dt->setTimezone(new DateTimeZone('America/Boise'));
$ch = curl_init("https://localhost/userpwd");
$response = curl_exec($ch);
var_dump(str_contains($response, "authorization"));
session_write_close();
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
$filename = __DIR__ . '/bug77432.phar';
$phar = new Phar($filename);
$phar->stopBuffering();
$ch = curl_init();
$fp = fopen(PHP_OS_FAMILY === 'Windows' ? 'nul' : '/dev/null', 'w');
curl_setopt($ch, CURLOPT_FILE, $fp);
$fn = "bug71263.bz2";
$r = fopen($fn, "r");
$s = fread($r, 100);
var_dump($s);
$ch = curl_init();
$fp = fopen(PHP_OS_FAMILY === 'Windows' ? 'nul' : '/dev/null', 'w');
curl_setopt($ch, CURLOPT_FILE, $fp);
$fp = fopen(__DIR__."/test2.csv", "r");
fclose($fp);
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
function does_not_work()
{
    global $data; // Remove this line to make array_multisort() work

    $data = array('first', 'fifth', 'second', 'forth', 'third');
    $sort = array(1, 5, 2, 4, 3);
    array_multisort($sort, $data);

    var_dump($data);
}
does_not_work();
$fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
$phar = new Phar($fname);
var_dump($phar->getStub());
$anon = new class {
    public int $field;
    function __construct() {
        $this->field = 2;
    }
};
var_dump($anon->field);
$originalEnvelopeData = "any string with \x1a is cut at this point.";
$tmpFileOut2 = tempnam(sys_get_temp_dir(), 'test');
$envelopeData = file_get_contents($tmpFileOut2);
var_dump(strlen($originalEnvelopeData), strlen($envelopeData), filesize($tmpFileOut2));
$file = __DIR__ . "/bug71127.inc";
file_put_contents($file, "<?php define('FOO', 'bad'); echo FOO;?>");
$found = true;
$list = new SplDoublyLinkedList();
$list->push('o');
$outfile = tempnam(sys_get_temp_dir(), "ssl");
$eml = __DIR__ . "/signed.eml";
var_dump(openssl_pkcs7_verify($eml, PKCS7_NOVERIFY, $outfile));
var_dump(sprintf("%X", 12));
$dt = DateTime::createFromFormat('Y-m-d!', '2011-02-02');
var_dump($dt);
$client = new SoapClient(__DIR__."/bug29061.wsdl", array("exceptions"=>0));
$client->getQuote("ibm");
$info = opcache_get_status()['interned_strings_usage'];
var_dump($info['buffer_size']);
$file = __DIR__ . "/bug71127.inc";
file_put_contents($file, "<?php define('FOO', 'bad'); echo FOO;?>");
ini_set("soap.wsdl_cache_enabled",0);
$formatter = new \NumberFormatter('en', \NumberFormatter::DECIMAL);
$value = $formatter->parse('2147483647', \NumberFormatter::TYPE_INT32);
var_dump($value);
$dom = new DOMDocument();
$xpath = new DOMXpath($dom);
foreach($xpath->query('/root/noexist') as $child) {
    var_dump($child);
}
var_dump($child);
$date1 = DateTime::createFromFormat("!D d M Y", "Fri 19 November 2011");
$date2 = new DateTime("Fri 19 November 2011");
var_dump($date1->format('Y-m-d') == $date2->format('Y-m-d'));
clearstatcache();
$conn = pg_connect($conn_str);
$table='test_68638';
pg_query($conn, "CREATE TABLE $table (id INT, value FLOAT)");
$db = getDbConnection();
$sql = '
    SET NOCOUNT ON
    SELECT 0 AS [result]
';
$stmt = $db->query($sql);
var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));
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
var_dump($prefixed->lookupNamespaceURI("a"));
$dbh = @pg_connect($conn_str);
$res = pg_query($dbh, 'SELECT test_notice()');
$row = pg_fetch_row($res, 0);
var_dump($row);
$im = ImageCreateTrueColor(10, 10);
$bordercolor=ImageColorAllocateAlpha($im, 0, 0, 0, 2);
$color = ImageColorAllocateAlpha($im, 0, 0, 0, 1);
ImageFillToBorder($im, 5, 5, $bordercolor, $color);
$cert = "file://" . __DIR__ . "/cert.crt";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SMIME_ENCRYPT, array($cpca), $utfl));
$dest = __DIR__ . "/bug40228";
$zip = new ZipArchive;
$zip->extractTo($dest);
$dom = new DOMDocument;
$tag = $dom->appendChild($dom->createElement("style"));
$tag->append("foo");
var_dump ( rtrim("rtrim test   " , "") );
$bert = "file://" . __DIR__ . "/bug41033.pem";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_SIGN, array($cpca)));
$ch = curl_init("https://localhost/userpwd");
curl_setopt($ch, CURLOPT_STDERR, fopen("php://stdout", "w"));
register_shutdown_function('timE');
function crash()
{
    $notDefined[$i] = 'test';
}
crash();
debug_print_backtrace();
$ch = curl_init();
var_dump(curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0));
spl_autoload_register();
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
printf("printf test 13:%5d\n", -12);
$sert = "file://" . __DIR__ . "/san-cert.pem";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_CRL_SIGN, array($cpca)));
$dom = new DOMDocument;
var_dump($dom->getElementById('x')?->nodeName);
var_dump( range(1.0, 7.0, 0.0) );
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$php = getenv('TEST_PHP_EXECUTABLE_ESCAPED');
var_dump(`$php -n -v`);
var_dump(scandir(''));
$bert = "file://" . __DIR__ . "/bug41033.pem";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_SERVER, array($cpca)));
bar();
function bar() {
    boo();
};
var_dump(pcntl_wexitstatus($status));
ob_start("test");
var_dump(version_compare('1.2', '2.1', '??'));
$dom = new DOMDocument;
$dom->getElementById('x')->remove();
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
var_dump($rit->key());
define("FOO", "okey");
lor(10,100);
imagefill($im1, 0,0, 0x
fffff);
imagegd2($im1, $file);
;
$ar1 = array("row1" => 2, "row2" => 1);
var_dump($ar1);
openssl_error_string();
$fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
$phar = new Phar($fname, 0, 'a.phar');
putenv('REDIR_TEST_DIR='.__DIR__ . '/../../pdo/tests/');
set_exception_handler(function() {
    echo 'Fourth handler' . PHP_EOL;
});
$link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
$link->close();
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
$db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, false);
$GLOBALS['b'] = 2;
$org_a = $GLOBALS['a'];
$org_b = $GLOBALS['b'];
var_dump($org_a, $org_b);
$db = MySQLPDOTest::factory();
foreach ($db->query('SELECT * FROM test_33689') as $row) {
    print_r($row);
}
print_r($row);
$a = array(1,2,3);
$s1 = "some string";
var_dump($a + $s1);
class C {
	use T;
	private array $a = [1];
}
$o = new C;
$o->foo();
$dest = dirname(realpath(__FILE__)) . '/bug27582.png';
$im = ImageCreateTrueColor(10, 10);
imagepng($im, $dest);
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
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
$prefix . "フォルダ";

mkdir($prefi
ith_cp($d1, 65001);

touch("$d0\\;
function test(string $name, object $obj) {
    printf("# %s:\n", $name);

    var_dump($obj);
    var_dump($obj->a);
    var_dump($obj);
}
printf("# %s:\n", $name);
var_dump(defined('SO_REUSEPORT'));
$filename = __DIR__ . '/_fromUri_custom_constructor.xml';
$reader = XMLReader::fromUri($filename);
$reader->close();
$priorityQueue = new SplPriorityQueue();
$priorityQueue->insert("c", 0);
function crash()
{
    $notDefined[$i] = 'test';
}
crash();
phpinfo(INFO_MODULES);
class TrampolineTest {
    public function __call(string $name, array $arguments) {
        echo 'Trampoline for ', $name, PHP_EOL;
    }
}
$o = new TrampolineTest();
$callback1 = [$o, 'trampoline1'];
spl_autoload_register($callback1);
$arc_name = __DIR__ . "/bug40228.zip";
$zip = new ZipArchive;
$zip->open($arc_name, ZIPARCHIVE::CREATE);
$dt = new DateTime('@1604219400');
$dt->setTimezone(new DateTimeZone('UTC'));
$dom = Dom\HTMLDocument::createEmpty();
dumpNodeList($dom->getElementsByTagName("HTml"));
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
$stmt = $pdo->prepare("select :1 n union all select :1 + 1 union all select :1 + 2 union all select :1 + 3");
$stmt->execute([ 0 ]);
$sert = "file://" . __DIR__ . "/san-cert.pem";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_NS_SSL_SERVER, array($cpca), $utfl));
$conn = odbc_connect($dsn, $user, $pass);
odbc_exec($conn, 'CREATE TABLE bug68087 (ID INT, VARCHAR_COL VARCHAR(100), DATE_COL DATE)');
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
$r = new ResourceBundle( 'en_US', BUNDLE );
printf( "length: %d\n", count($r) );
lor(10,100);
imagefill($im1, 0,0, 0x
fffff);
imagegd2($im1, $file);
;
$obj = unserialize('O:8:"00000000":');
var_dump($obj);
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
$arc_name = __DIR__ . "/bug40228.zip";
$zip = new ZipArchive;
$zip->open($arc_name, ZIPARCHIVE::CREATE);
$cert = "file://" . __DIR__ . "/cert.crt";
$cpca = __DIR__ . "/san-cert.pem";
$rcrt = openssl_x509_read($cert);
var_dump(openssl_x509_checkpurpose($rcrt, X509_PURPOSE_ANY, array($cpca)));
global $user, $host, $passwd, $db, $port, $socket;
global $user, $host, $passwd, $db, $port, $socket;
$this->mysqli = new mysqli($host, $user, $passwd, $db, $port, $socket);
$result = $this->mysqli->query("SELECT NOW() AS my_time FROM DUAL");
$result->close();
set_error_handler(function($_, $m) { throw new Exception($m); });
$db = getDbConnection();
var_dump($db->getAttribute(PDO::DBLIB_ATTR_SKIP_EMPTY_ROWSETS));
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$im = imagecreate(800, 800);
imageline($im, 650, 650, 150, 150, IMG_COLOR_STYLED);
$im = imagecreate(800, 800);
imageline($im, 550, 250, 550, 750, IMG_COLOR_STYLED);
var_dump(getenv("HTTP_X_FORWARDED_FOR"));
printf("[002] [%d] %s\n", $link->errno, $link->error);
error_reporting(0);
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
$bert = "file://" . __DIR__ . "/bug41033.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_ENCRYPT));
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
spl_autoload_register(function ($class) {
    if (!require_once($class.'.inc')) {
        error_log('Error: Autoload class: '.$class.' not found!');
    }
});
$trace_file = '/tmp/mysqli_debug_phpt.trace';
printf("[003] Trace file '%s' has not been created\n", $trace_file);
$GLOBALS['b'] = 2;
$b = &$GLOBALS['b'];
$GLOBALS['b'] = 3;
$a = 4;
$c = $b;
$b = 'x';
var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b'], $c);
$filename = __DIR__ . '/bug77432.phar';
unlink($filename);
function g() {
    yield 'foo';
    Fiber::suspend();
}
var_dump(yield from g());
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
test($nodes, "getNamespaces", fn ($n) => $n->getNamespaces());
set_error_handler('test_error_handler');
class TrampolineTest {
    public function __call(string $name, array $arguments) {
        echo 'Trampoline for ', $name, PHP_EOL;
    }
}
$o = new TrampolineTest();
$callback2 = [$o, 'trampoline2'];
var_dump(spl_autoload_unregister($callback2));
printf("printf test 24:%.5s\n", "abcdefghij");
$oIntlDateFormatter = new IntlDateFormatter("en_GB");
$oIntlDateFormatter->setTimeZone('Europe/Berlin');
catch (\Exception $e) {
    printf("%s: %s\n", $e::class, $e->getMessage());
}
printf("%s: %s\n", $e::class, $e->getMessage());
$zip = new ZipArchive();
$zip->close();
var_dump(pack('x') === "\0");
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
$a = array(1,2,3);
$s1 = "some string";
$c = $a + $s1;
var_dump($c);
$headers2 = exif_read_data(__DIR__ . '/bug64739.jpg');
var_dump($headers2['Author']);
ini_set('mysqlnd.fetch_data_copy', true);
$fn = "bug71263.bz2";
$r = fopen($fn, "r");
fclose($r);
$meta_res = $stmt->result_metadata();
$field = $meta_res->fetch_field();
printf("Maxlength    : %d\n", $field->max_length);
var_dump(exif_read_data(__DIR__.'/image021.tiff'));
printf("[006] [%d] %s\n", $stmt->errno, $stmt->error);
$fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
$phar = new Phar($fname);
$phar->setDefaultStub();
$a[10] = "42";
$i = "010";
var_dump($a[$i], isset($a[$i]));
stream_socket_client('tcp://9999.9999.9999.9999:9999', $error_code, $error_message, 0.2, STREAM_CLIENT_CONNECT | STREAM_CLIENT_PERSISTENT);
var_dump(soundex("Lloyd"));
var_dump(mb_strpos('Hello', 'e', 0, '8bit'));
$outfile = tempnam(sys_get_temp_dir(), "ssl");
unlink($outfile);
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
$reqOfBig = 'select * from t';
$attrs = [ PDO::ATTR_PREFETCH => 0 ];
$stmt = $pdo->prepare($reqOfBig, $attrs);
$stmt->execute();
catch (\Exception $e) {
    printf("%s: %s\n", $e::class, $e->getMessage());
}
printf("%s: %s\n", $e::class, $e->getMessage());
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
var_dump(spl_autoload_functions());
$ch = curl_init();
var_dump(curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2));
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
$ch = curl_init();
var_dump(curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0));
printf("[005] [%d] %s\n", $link->errno, $link->error);
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
function test($p12_contents, $password) {
    openssl_pkcs12_read($p12_contents, $cert_data, $password);
    openssl_error_string();
    var_dump(count($cert_data['extracerts']));
}
$pass = "qwerty";
test($p12, $pass);
$filename = __DIR__ . '/bug77432.phar';
$phar = new Phar($filename);
$phar->startBuffering();
ob_end_clean();
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
$bert = "file://" . __DIR__ . "/bug41033.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_ENCRYPT));
undefined_function();
$bert = "file://" . __DIR__ . "/bug41033.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_CRL_SIGN));
$f = __DIR__."/data/test.txt.gz";
$h = gzopen($f, 'r');
var_dump(gzeof($h));
$filename = __DIR__ . '/bug77432.phar';
$phar = new Phar($filename);
$phar->addFromString('test.txt', 'text');
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
var_dump(array_pop($input), $input);
$f_base = "67647私はガラスを食べられます.mov";
$f = __DIR__ . DIRECTOR
_SEPARATOR . $f_base;

/* Streams mb path sup
_MIME_TYPE);
var_dump($fi->file($f))


?>
+++DONE+++;
ini_set("intl.error_level", E_WARNING);
$r = new ResourceBundle( 'en_US', BUNDLE );
$r2 = $r['testarray'];
printf( "testarray: %s\n", $r2[2] );
$s = new SplObjectStorage();
$s->attach($s);
$tester = new FPM\Tester($cfg);
$tester->expectLogStartNotices();
$fp = fopen("php://memory", "r+");
fwrite($fp, str_repeat("baad", 1024*1024));
$im = ImageCreateTrueColor(10, 10);
$bordercolor=ImageColorAllocateAlpha($im, 0, 0, 0, 2);
$sert = "file://" . __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_CLIENT));
$outfile = tempnam(sys_get_temp_dir(), "ssl");
$contentfile = tempnam(sys_get_temp_dir(), "ssl");
$eml = __DIR__ . "/signed.eml";
$cainfo = array();
var_dump(openssl_pkcs7_verify($eml, PKCS7_NOVERIFY, $outfile, $cainfo, $outfile, $contentfile));
$client = new SoapClient(__DIR__ . '/bug49278.wsdl', array('location' => "http://".PHP_CLI_SERVER_ADDRESS, 'trace' => 1));
var_dump($client->__getLastResponseHeaders());
$list = new SplDoublyLinkedList;
$list->add(1, 1);
$wsdl = __DIR__."/bug35142.wsdl";
function __construct($wsdl, $options) {
    parent::__construct($wsdl, $options);
    $this->server = new SoapServer($wsdl, $options);
    $this->server->addFunction('PostEvents');
  }
$this->server = new SoapServer($wsdl, $options);
$this->server->addFunction('PostEvents');
class MyObjectStorage extends SplObjectStorage {
    // Overwrite getHash() with just some (working) test-method
    public function getHash($object): string { return get_class($object); }
}
$list = new MyObjectStorage();
foreach($list as $x) var_dump($list->offsetExists($x));
$list2 = clone $list;
foreach($list2 as $x) var_dump($list2->offsetExists($x));
var_dump($list2->offsetExists($x));
$dt = new DateTime('@1604215800');
$dt->add(new DateInterval('PT1H'));
function test(object $obj) {
        $obj->a = 1;
    }
$reflector = new ReflectionClass(C::class);
$obj = $reflector->newLazyGhost(function ($obj) {
        var_dump("initializer");
        $obj->__construct();
    });
$reflector->getMethod('test')->invoke($obj, $obj);
printf("printf test 10: 123456789012345\n");
$document = new \DOMDocument();
var_dump($document->saveHTML());
set_error_handler(function() {
//    var_dump(func_get_args());
    DoesNotExists::$nope = true;
}, E_ALL);
var_dump(range('z', 'a', 100));
$db = PDOTest::factory();
$db->exec('CREATE TABLE test34630 (id int NOT NULL PRIMARY KEY, val VARCHAR(256))');
printf("printf test 31:%.17g\n", INF);
$filename = __DIR__ . '/bug77432.phar';
$phar = new Phar($filename);
$phar->startBuffering();
$doc = new \DOMDocument();
$doc->loadXML('<a>foo<last/></a>');
class di extends DateInterval {
    public $unit = 1;
}
$I = new di('P10D');
print_r($I);
var_dump(getimagesize(__DIR__ . "/test13pix.swf"));
class_alias( 'stdClass', 'bool' );
$db = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
$stmt = $db->prepare("CALL testSp()");
$stmt->execute();
#[\AllowDynamicProperties]
class C {
    public $b;
    public function __construct() {
        $this->a = new Canary();
    }
}
$obj = new C();
var_dump($obj->a);
$db = MySQLPDOTest::factory();
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$f = __DIR__."/data/test.txt.gz";
$h = gzopen($f, 'r');
var_dump(gzeof($h));
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
var_dump(substr_compare('/', '/asd', 0, 4));
function foo($e) {
    var_dump(__FUNCTION__."(): ".get_class($e)." thrown!");
}
function foo1($e) {
    var_dump(__FUNCTION__."(): ".get_class($e)." thrown!");
}
var_dump(__FUNCTION__."(): ".get_class($e)." thrown!");
$curl = curl_init("http://www.google.com");
curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 1);
$tz1 = new DateTimeZone('Europe/Berlin');
$tz2 = new DateTimeZone('Europe/Berlin');
$d = new DateTime('2014-12-24 13:00:00', $tz1);
var_dump($d->getTimezone(), $tz2);
$doc = new \DOMDocument();
$doc->loadXML('<a>foo<last/></a>');
$now = new DateTimeImmutable();
$date = (new ReflectionClass(DateTime::class))->newInstanceWithoutConstructor();
$dateperiod = (new ReflectionClass(DatePeriod::class))->newInstanceWithoutConstructor();
$dateperiod->__unserialize(['start' => $now, 'end' => $now, 'current' => $date]);
#[\AllowDynamicProperties]
class C {
    public $b;
    public function __construct() {
        $this->a = new Canary();
    }
}
$obj = new C();
var_dump($obj->a);
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
$im = imagecreatetruecolor(1, 1);
imagescale($im, 1, 1, -10);
$im = imagecreatetruecolor(1, 1);
imagescale($im, 1, 1, -10);
var_dump(filter_var("<data&sons>", FILTER_SANITIZE_ENCODED, FILTER_FLAG_ENCODE_HIGH));
$im = imagecreate(800, 800);
test_image_equals_file(__DIR__ . '/bug43475.png', $im);
var_dump( range(1, 7, 0) );
$dom = new DOMDocument;
$tag = $dom->appendChild($dom->createElement("style"));
$html = simplexml_import_dom($tag);
var_dump($html);
$fp = fopen('php://input', 'r+');
var_dump(fseek($fp, -1, SEEK_SET));
$array = array("test" => 1);
$a = "lest";
var_dump($array[$a]);
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
var_dump($phar->getStub());
class MySQL_Ext extends mysqli{
    protected $fooData = array();
    private $extData;

    public function isEmpty()
    {
        $this->extData[] = 'Bar';
        return empty($this->extData);
    }
}
$MySQL_Ext = new MySQL_Ext($host, $user, $passwd, $db, $port, $socket);
$isEmpty = $MySQL_Ext->isEmpty();
var_dump($isEmpty);
function test(string $input) {
    var_dump(filter_var($input, FILTER_VALIDATE_URL));
}
var_dump(filter_var($input, FILTER_VALIDATE_URL));
$args = ["-d", "extension_dir=" . ini_get("extension_dir"), "-d", "extension=" . (substr(PHP_OS, 0, 3) == "WIN" ? "php_" : "") . "soap." . PHP_SHLIB_SUFFIX];
$code = '$server = new SoapServer("' . __DIR__ . '"/bug49278.wsdl", ["trace"=>1]);' .
        <<<'PHP'
        function Add() {}
        $server->addFunction('Add');
        $server->handle();
        PHP;
php_cli_server_start($code, null, $args);
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
$child->testIsCallable();
undefined_function('Null');
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
$outfile = tempnam(sys_get_temp_dir(), "ssl");
$eml = __DIR__ . "/signed.eml";
var_dump(openssl_pkcs7_verify($eml, PKCS7_NOVERIFY, $outfile));
$before = memory_get_usage();
$after = memory_get_usage();
var_dump($before === $after);
$test_fl = __DIR__ . DIRECTORY_SEPARATOR . md5(uniqid());
$test_fl_escaped = escapeshellarg($test_fl);
$sert = "file://" . __DIR__ . "/san-cert.pem";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_CRL_SIGN, array($cpca)));
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
mysqli_free_result($res);
$dt = new DateTime('@1604215800');
$dt->add(new DateInterval('PT1H'));
class C {
	use T;
	private array $a = [1];
}
$o = new C;
$o->foo();
var_dump($_SESSION);
$meta_res = $stmt->result_metadata();
$field = $meta_res->fetch_field();
printf("Length       : %d\n", $field->length);
$s = 'O:15:"ReflectionClass":0:{}';
var_dump(unserialize($s));
$client = new SoapClient(__DIR__ . '/bug49278.wsdl', array('location' => "http://".PHP_CLI_SERVER_ADDRESS, 'trace' => 1));
$client->Add();
$array_test = array("a", "b", "d", 7, "u" => "U", -4, "-.008" => "neg.008");
var_dump( end($array_test) );
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
test($nodes, "var_dump", fn ($n) => var_dump($n));
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
var_dump(substr_compare('/', '/asd', 0, 4));
$sert = "file://" . __DIR__ . "/san-cert.pem";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_ENCRYPT, array($cpca)));
global $user, $host, $passwd, $db, $port, $socket;
global $user, $host, $passwd, $db, $port, $socket;
$this->mysqli = new mysqli($host, $user, $passwd, $db, $port, $socket);
$this->mysqli->close();
$db = getDbConnection();
$sql = '
    SET NOCOUNT ON
    SELECT 0 AS [result]
';
$stmt = $db->query($sql);
var_dump($stmt->nextRowset());
$dom = Dom\HTMLDocument::createEmpty();
var_dump($dom->lookupNamespaceURI(""));
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
$test = function (#[SensitiveParameter] $sensitive)
{
    debug_print_backtrace();
    var_dump(debug_backtrace());
    var_dump((new Exception)->getTrace());
};
$test('sensitive');
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
$array_object = array();
var_dump( end($array_object) );
$conn = pg_connect($conn_str);
$table='test_68638';
pg_insert($conn,$table, array('id' => 2, 'value' => 10));
$dom = Dom\HTMLDocument::createEmpty();
$container = $dom->appendChild(createElement($dom, "container"));
$container->appendChild(createElementNS($dom, "http://www.w3.org/1999/xhtml", "bar:html", "9"));
$bert = "file://" . __DIR__ . "/bug41033.pem";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_NS_SSL_SERVER, array($cpca)));
class SomeClass implements JsonSerializable {
    public function jsonSerialize(): mixed {
        return [get_object_vars($this)];
    }
}
$class = new SomeClass;
$arr = [$class];
var_dump(json_encode($arr));
printf("[002] Connect failed, [%d] %s\n", mysqli_connect_errno(), mysqli_connect_error());
$html = <<<HTML
<div id="test"><span>hi there</span></div>
HTML;
$dom = new DOMDocument('1.0', 'UTF-8');
$dom->loadHTML($html);
$sert = "file://" . __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_CRL_SIGN));
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
$db = MySQLPDOTest::factory();
$db->exec('CREATE TABLE test_33689 (bar INT NOT NULL)');
var_dump(new FooBar);
$sh = new SessionHandler;
$sh->write("foo", "bar");
var_dump(mhash(133, 1086849124, 133));
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
$f->start();
$meta_res = $stmt->result_metadata();
$field = $meta_res->fetch_field();
printf("Name         : %s\n", $field->name);
$dom = new DOMDocument;
var_dump($dom->getElementById('x')?->nodeName);
$dir_handle = opendir( __DIR__ );
closedir( $dir_handle );
var_dump(soundex("Gauss"));
$bert = "file://" . __DIR__ . "/bug41033.pem";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_SERVER, array($cpca), $utfl));
var_dump(new FooBar);
var_dump(exif_read_data(__DIR__.'/image021.tiff'));
$sh = new SessionHandler;
session_set_save_handler($sh);
$file = __DIR__ . '/bug38212私はガラスを食べられます.gd2';
$im1 = imagecreatetruec
;
class C {
    function __serialize(): array {
        global $list;
        $list->pop();
        return [];
    }
}
$list = new SplDoublyLinkedList;
$list->add(0, new C);
$sh = new SessionHandler;
session_set_save_handler($sh);
$mysql = new my_mysqli($host, $user, $passwd, $db, $port, $socket);
$stmt = $mysql->prepare("SELECT id FROM temp");
$stmt->execute();
$conn = pg_connect($conn_str);
$table='test_68638';
pg_update($conn,$table, array('value' => '-inf'), array('id' => 2));
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
$f->start();
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
class_alias( 'stdClass', 'bool' );
$sert = "file://" . __DIR__ . "/san-cert.pem";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_ANY, array($cpca), $utfl));
