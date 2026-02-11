<?php
class MyObjectStorage extends SplObjectStorage {
    // Overwrite getHash() with just some (working) test-method
    public function getHash($object): string { return get_class($object); }
}
class C {
    private $priv1 = 'secret1';
    private $priv2 = 'secret2';
    public $pub1 = 'public1';
    public $pub2 = 'public2';
    public $pub3 = 'public3';
    public $pub4 = 'public4';
}
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
class A {
    public $a;
}
function createDB(): PDO {
    $db = MySQLPDOTest::factory();
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    return $db;
}
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
class base {
    private function show() {
        echo "base\n";
    }
    function test() {
        $this->show();
    }
}
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
class Foo {
    public $bar = [] {
        &get {
            echo __METHOD__ . "\n";
            return $this->bar;
        }
    }
}
function byVal($arg) {
    var_dump($arg);
}
function byRef(&$arg) {
    var_dump($arg);
}
class test
{
  var $t = 10;
  function __toString()
  {
    return "testObject";
  }
}
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
function genResponses($server) {
    $uri = 'http://' . stream_socket_get_name($server, false);
    yield "data://text/plain,HTTP/1.1 302 Moved Temporarily\r\nLocation: $uri/document.xml\r\nContent-Type: text/html;charset=utf-16\r\n\r\n";
    $xml = <<<'EOT'
        <!doctype html>
        <html>
            <head>
                <title>GHSA-p3x9-6h7p-cgfc</title>

                <meta charset="utf-8" />
                <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
            </head>

            <body>
                <h1>GHSA-p3x9-6h7p-cgfc</h1>
            </body>
        </html>
        EOT;
    // Missing content-type in actual response.
    yield "data://text/plain,HTTP/1.1 200 OK\r\n\r\n{$xml}";
}
class di extends DateInterval {
    public $unit = 1;
}
function f_0() {
    $file_handle = fopen(__FILE__, "r");
    try {
        $text = 'This is an ‘example’ of using DOM splitText';
        $st
        rt = 30;
        $le
         = new DOMDocument('1.0', 'UTF-8');
        $no
        e = $dom->createTextNode($text);
        $do
        ched = $node->splitText($start);
        $ma;
    } catch (Exception $e) {}
    if (true) {
        $response = ob_get_contents();
        return $response;
    }
    return true;
}
function f_1() {
    try {
        return [];
    } catch (Exception $e) {}
    if (true) {
        return 42;
    }
}
$list = new MyObjectStorage();
$list2 = clone $list;
for ($i_2 = 0; $i_2 < 10; $i_2++) {
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
    $reqOf3 = 'select 79 n union all select 80 union all select 81';
    $stmt2 = $pdo->query("select * from ($reqOf3) t order by n desc");
    var_dump(json_decode('[]', false, 0x100000000));
    $ao = new ArrayObject(new C);
    $ai = $ao->getIterator();
    $ai->rewind();
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
    imagesetthickness($im, $thickness);
}
$cert = "file://" . __DIR__ . "/cert.crt";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_SERVER, array($cpca)));
$db = getDbConnection();
$sql = '
    SET NOCOUNT ON
    SELECT 0 AS [result]
';
$stmt = $db->query($sql);
var_dump($stmt->nextRowset());
$db = getDbConnection();
$sql = '
    SET NOCOUNT ON
    SELECT 0 AS [result]
';
$stmt = $db->query($sql);
var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));
printf("printf test 10:<%15s>\n", "hoyesterettsjustitiarius");
function f_3() {
    try {
        return true;
    } catch (Exception $e) {}
    if (true) {
        $b = new A();
        $b->dyn = 1;
    }
}
$fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
$phar = new Phar($fname);
var_dump($phar->getStub());
$db = createDB();
testLastInsertId($db);
function f_4() {
    try {
        var_dump(json_decode('{"":"value", "key":"value"}', true));
    } catch (Exception $e) {}
    if (true) {
        $x = 1;
        $x += 0;
        ++$x;
        return $x;
    }
}
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
$d0 = $prefix . "ソフト";
$d1 =
st0.txt");
touch("$d1\\t;
var_dump($_POST);
$originalEnvelopeData = "any string with \x1a is cut at this point.";
$tmpFileIn = tempnam(sys_get_temp_dir(), 'test');
file_put_contents($tmpFileIn, $originalEnvelopeData);
$eml = __DIR__ . "/signed.eml";
var_dump(openssl_pkcs7_verify($eml, 0));
catch (\Error $e) {
    var_dump($e);
}
var_dump($e);
$b = new SplObjectStorage();
$object = new StdClass();
$b->attach($object);
function f_5() {
    $arg = new Stdclass();
    $arg->name = array();
    try {
        echo __METHOD__, "\n";
    } catch (Exception $e) {}
    if (true) {
        $s = 'O:15:"ReflectionClass":0:{}';
        var_dump(unserialize($s));
        try {
            $fn = function() { return static::name(); };
            echo static::name() . ' vs ' . $fn() . "\n";
        } catch (Exception $e) {}
        if (true) {
            $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt', Pdo\Pgsql::class, false);
            var_dump($pdo->query('SELECT 1;')->fetchAll());
        }
        ini_set('display_errors',true);
    }
    printf("# Proxy:\n");
}
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
$a=glob("./*.jpeg");
var_dump($a);
$ch = curl_init();
curl_exec($ch);
$result = get_declared_classes();
var_dump(array_search('foo', $result));
$dom = Dom\HTMLDocument::createEmpty();
dumpNodeList($dom->getElementsByTagName("htML"));
$now = new DateTimeImmutable();
$date = (new ReflectionClass(DateTime::class))->newInstanceWithoutConstructor();
$dateperiod = (new ReflectionClass(DatePeriod::class))->newInstanceWithoutConstructor();
$dateperiod->__unserialize(['start' => $now, 'end' => $date]);
var_dump(pack('x') === "\0");
$fp = fopen("php://memory", "r+");
stream_get_line($fp, 1024*1024*2, "aaaa");
function f_6() {
    try {
        try {
            return false;
        } catch (Exception $e) {}
        if (true) {
            return 42;
        }
    } catch (Exception $e) {}
    if (true) {
        return "Class A object";
    }
}
$t = new base();
$t->test();
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
function f_7() {
    $fn = "bug71263.bz2";
    $r = fopen($fn, "r");
    $s = fread($r, 100);
    try {
        try {
            return true;
        } catch (Exception $e) {}
        if (true) {
            $counter = 1;
            $counter++;
        }
    } catch (Exception $e) {}
    if (true) {
        $counter = 1;
        $counter++;
    }
}
var_dump(sprintf("%X", 12));
$argv = array(1, 2, 3);
var_dump($argv);
function f_8() {
    $iterator = 1;
    $iterator++;
    try {
        ++$failuresNb;
        ++$failuresNb;
        if (true) {
            return [];
        }
    } catch (Exception $e) {}
    if (true) {
        $counter = 1;
        $counter++;
    }
    $response = ob_get_contents();
    return $response;
}
$GLOBALS['b'] = 2;
$a = NULL;
$b = NULL;
var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
$filename = __DIR__ . '/bug77432.phar';
$phar = new Phar($filename);
$phar->setStub('<?php echo "hello world\n"; __HALT_COMPILER(); ?>');
function f_9() {
    try {
        $halves[0] = $halves[1] = 0;
        $halves[(mt_rand(0, $max - 1) >> 1) & 1]++;
        $halves[0] = $halves[1] = 0;
        $halves[(int) (mt_rand(0, $max - 1) / ($max / 2))]++;
        if (true) {
            return 42;
        }
    } catch (Exception $e) {}
    if (true) {
        $x = 1;
        $x += 0;
        ++$x;
    }
    $test->a++;
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
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
$pdo->setAttribute(PDO::ATTR_PREFETCH, 0);
$sert = "file://" . __DIR__ . "/san-cert.pem";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_CLIENT, array($cpca)));
function f_10() {
    $halves[0] = $halves[1] = 0;
    $halves[(mt_rand(0, $max - 1) >> 1) & 1]++;
    $halves[0] = $halves[1] = 0;
    $halves[(int) (mt_rand(0, $max - 1) / ($max / 2))]++;
    $f = function () {};
    while (true) {
        break;  // avoid infinite loop
        try {
            $iterator = 1;
            $iterator++;
            if (true) {
                $x = 1.0;
                $x += 0;
                return ++$x;
            }
            $r = new ReflectionClass('Test2');
            $m = $r->getStaticProperties();
            $m['data4'] = 400;
        } catch (Exception $e) {}
        if (true) {
            $x = 1;
            $x += 0;
            ++$x;
        }
    }
    return 0;
}
$filename = "bug51997.bz2";
$bz = bzopen($filename, "w");
bzclose($bz);
$sert = "file://" . __DIR__ . "/san-cert.pem";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_ANY, array($cpca), $utfl));
function f_11() {
    $object = new StdClass();
    while (true) {
        break;  // avoid infinite loop
        try {
            $y = 0;
            global $y;
            $y++;
            if (true) {
                return [];
            }
            $num = 100000;
        } catch (Exception $e) {}
        if (true) {
            C::$p++;
        }
        $count = 1;
        $count++;
    }
    return "Class A object";
}
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$priorityQueue = new SplPriorityQueue();
$priorityQueue->setExtractFlags(SplPriorityQueue::EXTR_DATA);
function f_12() {
    $GLOBALS['a'] = 1;
    for ($i_13 = 0; $i_13 < 10; $i_13++) {
        try {
            $iterator = 1;
            $iterator++;
            $i=0;
            $i++;
        } catch (Exception $e) {}
        if (true) {
            $x = 1;
            $x += 0;
            ++$x;
        }
        $i=0;
        $i++;
    }
    return false;
}
$db = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
$stmt = $db->prepare("CALL testSp()");
$stmt->execute();
var_dump(intlcal_is_weekend(1));
function f_14() {
    $foo = new Foo;
    $foo->bar[] = 'bar';
    try {
        ++$testCasesTotal;
        try {
            $count = 1;
            $count ++;
            if (true) {
                return "key";
            }
        } catch (Exception $e) {}
        if (true) {
            $halves[0] = $halves[1] = 0;
            $halves[(mt_rand(0, $max - 1) >> 1) & 1]++;
            $halves[0] = $halves[1] = 0;
            $halves[(int) (mt_rand(0, $max - 1) / ($max / 2))]++;
        }
    } catch (Exception $e) {}
    if (true) {
        $loop_counter = 1;
        $loop_counter++;
    }
    $a = 1;
    return [0, $a];
}
byRef(C[0]);
$bert = "file://" . __DIR__ . "/bug41033.pem";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_CRL_SIGN, array($cpca), $utfl));
function f_15() {
    try {
        $test->a++;
        ++$test->a;
        try {
            $count = 1;
            $count ++;
            if (true) {
                return true;
            }
        } catch (Exception $e) {}
        if (true) {
            C::$p++;
        }
    } catch (Exception $e) {}
    if (true) {
        $counter = 1;
        $counter++;
    }
    $iterator = 1;
    $iterator++;
    return false;
}
$meta_res = $stmt->result_metadata();
$field = $meta_res->fetch_field();
printf("Length       : %d\n", $field->length);
$argv = array(1, 2, 3);
var_dump($argv);
function f_16() {
    $unset_var = 10;
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
    $text = '<p>hello world &trade;</p>';
    while (true) {
        break;  // avoid infinite loop
        try {
            $iterator = 1;
            $iterator++;
            try {
                ++$failuresNb;
                ++$failuresNb;
                if (true) {
                    $x = 1.0;
                    $x += 0;
                    return ++$x;
                }
                $meta_res = $stmt->result_metadata();
            } catch (Exception $e) {}
            if (true) {
                $halves[0] = $halves[1] = 0;
                $halves[(mt_rand(0, $max - 1) >> 1) & 1]++;
            }
        } catch (Exception $e) {}
        if (true) {
            $counter = 1;
            $counter++;
        }
    }
    return "Class A object";
}
$bert = "file://" . __DIR__ . "/bug41033.pem";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_CLIENT, array($cpca), $utfl));
mysqli_close($link);
function f_17() {
    $x = new SoapClient('http://i_dont_exist.com/some.wsdl');
    while (true) {
        break;  // avoid infinite loop
        try {
            $loop_counter = 1;
            $loop_counter++;
            try {
                ++$testCasesTotal;
                ++$testCasesTotal;
                if (true) {
                    return;
                }
                $uri = 'http://' . stream_socket_get_name($server, false);
            } catch (Exception $e) {}
            if (true) {
                $count = 1;
                $count++;
            }
        } catch (Exception $e) {}
        if (true) {
            C::$p++;
        }
        ++$failuresNb;
        ++$failuresNb;
    }
    $i = 1;
    return $i;
}
session_start();
$dt = new DateTime('first day of January 2011');
var_dump($dt);
$browser=get_browser(NULL, true);
$i = 1;
$c = $i < 2;
$str = "This is a test string.\n";
try {
    $I = new di('P10D');
    $I->unit = 42;
} catch (Exception $e) {}
if (true) {
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt', Pdo::class, false);
}
if (true) {
    $link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
}
var_dump ( rtrim("rtrim test        ", true) );
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
$str = "repeater id='loopt' dataSrc=subject columns=2";
preg_match_all("/(['\"])((.*(\\\\\\1)*)*)\\1/sU",$str,$str_instead);
function f_18() {
    try {
        return true;
    } catch (Exception $e) {}
    if (true) {
        try {
            return $a;
        } catch (Exception $e) {}
        if (true) {
            $t = new stdClass;
            return $t;
        }
    }
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
$bug_gh16013_callback_struct->return_struct = function($val) use($ffi) {
    return $val;
};
$struct = $ffi->new('struct bug_gh16013_int_struct');
var_dump(($bug_gh16013_callback_struct->return_struct)($struct));
function f_19() {
    try {
        return true;
    } catch (Exception $e) {}
    if (true) {
        try {
            return 42;
        } catch (Exception $e) {}
        if (true) {
        }
    }
    return new stdClass();
}
var_dump(get_html_translation_table(NAN, 0, "UTF-8") > 0);
function f_20() {
    do {
        try {
            return 5;
        } catch (Exception $e) {}
        if (true) {
            try {
                return 0;
            } catch (Exception $e) {}
            if (true) {
            }
        }
    } while (false);
    return 'printer';
}
$array = [0];
$ar = array_values($array);
var_dump($ar);
