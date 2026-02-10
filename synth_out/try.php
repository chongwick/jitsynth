<?php
function f_0() {
    $r = new ResourceBundle( 'en_US', BUNDLE );
    try {
        gth = 3;
        
        $d;
    } catch (Exception $e) {}
    if (true) {
        return str_repeat('a', 1);
    }
    return str_repeat('a', 1);
}
function f_1() {
    try {
        $a = 1;
        return [0, $a];
    } catch (Exception $e) {}
    if (true) {
        return "Object1";
    }
}
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
for ($i_2 = 0; $i_2 < 10; $i_2++) {
    $tmpFileOut = tempnam(sys_get_temp_dir(), 'test');
    function test(array... $args) {
        var_dump($args);
    }
    test([0], [1], [2]);
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
    $html = <<<HTML
    <div id="test"><span>hi there</span></div>
    HTML;
    $dom = new DOMDocument('1.0', 'UTF-8');
    $dom->loadHTML($html);
    $tempstring = "abcdefghjklmnpqrstuvwxyz";
    var_dump(sprintf("%s", $tempstring, $tempstring, $tempstring));
}
md5('foo');
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
var_dump( $count );
sprintf('%3$s, %2$s %1$s', "a", "b");
function f_3() {
    try {
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
    } catch (Exception $e) {}
    if (true) {
        $var = 10;
    }
}
public function test(P $sibling) {
        $sibling->common();
    }
$sibling->common();
$this->show();
function f_4() {
    try {
        $test_array = array(1, array(1 => "one", "two" => 2, "" => "f") );
        var_dump( end($test_array[1]) );
    } catch (Exception $e) {}
    if (true) {
        function PostEvents($x) {
            var_dump($x);
            exit();
          return $x;
        }
        return $x;
    }
}
function test(string $input) {
    var_dump(filter_var($input, FILTER_VALIDATE_URL));
}
test("http://test@127.0.0.1");
$dir = opendir('foo://bar');
closedir($dir);
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
$a = new PDO("sqlite::memory:");
$a->query ("CREATE TABLE test_35336 (a integer primary key, b text)");
$key = str_repeat('abc', random_int(3, 3));
var_dump(array_all([$key => 1], static fn () => false));
function foo(): never {
    if (false) {
        throw new Exception('bad');
    }
}
foo();
function f_5() {
    $fn = "bug71263.bz2";
    $r = fopen($fn, "r");
    $s = fread($r, 100);
    try {
        $dom = new DOMDocument;
        echo $dom->saveXML();
    } catch (Exception $e) {}
    if (true) {
        var_dump('ERR');
        try {
            catch (Error $e) {
            	echo get_class($e), ': ', $e->getMessage(), "\n";
            }
            catch (Error $e) {
            	echo get_class($e), ': ', $e->getMessage(), "\n";
            }
            catch (Error $e) {
            	echo get_class($e), ': ', $e->getMessage(), "\n";
            }
            catch (Error $e) {
            	echo get_class($e), ': ', $e->getMessage(), "\n";
            }
            echo get_class($e), ': ', $e->getMessage(), "\n";
        } catch (Exception $e) {}
        if (true) {
            $readonly_anon = new readonly class {
                public int $field;
                function __construct() {
                    $this->field = 2;
                }
            };
            var_dump($readonly_anon->field);
        }
        $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt', Pdo::class, true);
        var_dump($pdo->query('SELECT 1;')->fetchAll());
    }
    $datefmt = new IntlDateFormatter('en_US', IntlDateFormatter::FULL, IntlDateFormatter::FULL);
    $datefmt->parse('abc');
}
$heredoc_str = <<<EOD
%
#$*&
text & @()
EOD;
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
$prefix . "フォルダ";

mkdir($prefi
st1.txt");

var_dump(cou;
$ch = curl_init("https://localhost/userpwd");
curl_setopt($ch, CURLOPT_USERPWD, null);
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
$fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
$phar = new Phar($fname);
$phar->setDefaultStub(str_repeat('a', 400));
$link = mysqli_init();
mysqli_close($link);
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
function f_6() {
    try {
        try {
            $a = 1;
            return [0, $a];
        } catch (Exception $e) {}
        if (true) {
            return 0;
        }
    } catch (Exception $e) {}
    if (true) {
        return serialize($this->data);
    }
}
var_dump(substr_compare('/', '/asd', 0, 4));
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
function f_7() {
    $formatter = new \NumberFormatter('en', \NumberFormatter::DECIMAL);
    $value = $formatter->parse('2147483647', \NumberFormatter::TYPE_INT32);
    try {
        try {
            public function getHash($object): string { return get_class($object); }
            return get_class($object);
        } catch (Exception $e) {}
        if (true) {
            ++$testCasesTotal;
            ++$testCasesTotal;
        }
    } catch (Exception $e) {}
    if (true) {
        $iterator = 1;
        $iterator++;
    }
}
$input = fopen(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370.tar', 'r');
fclose($input);
$meta_res = $stmt->result_metadata();
$field = $meta_res->fetch_field();
printf("Charsetnr    : %d\n", $field->charsetnr);
function f_8() {
    $x = 1;
    $x += 0;
    ++$x;
    try {
        $i=0;
        $i++;
        if (true) {
            $i = 1;
            return $i;
        }
    } catch (Exception $e) {}
    if (true) {
        $iterator = 1;
        $iterator++;
    }
    function test($s, $mode)
    {
        return (($mode & PHP_OUTPUT_HANDLER_START)?"[":"") . $s . (($mode & PHP_OUTPUT_HANDLER_END)?"]\n":"");
    }
    return (($mode & PHP_OUTPUT_HANDLER_START)?"[":"") . $s . (($mode & PHP_OUTPUT_HANDLER_END)?"]\n":"");
}
$cert = "file://" . __DIR__ . "/cert.crt";
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_CLIENT));
$im = imagecreatefromgd2(__DIR__ . DIRECTORY_SEPARATOR . 'bug73161.gd2');
var_dump($im);
function f_9() {
    try {
        $count = 1;
        $count ++;
        if (true) {
            return "Class A object";
        }
    } catch (Exception $e) {}
    if (true) {
        $i = 0;
        $i++;
    }
    $test->a++;
    ++$test->a;
    return;
}
var_dump(new Foo);
$ch = curl_init();
var_dump(curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2));
function f_10() {
    $count = 1;
    $count++;
    $list = new SplDoublyLinkedList();
    while (true) {
        break;  // avoid infinite loop
        try {
            $loop_counter = 1;
            $loop_counter++;
            if (true) {
                $x = 1.0;
                $x += 0;
                return ++$x;
            }
            $fiber = new Fiber(function (): void {
                $self = Fiber::getCurrent();
                $self->resume();
            });
        } catch (Exception $e) {}
        if (true) {
            $y = 0;
            global $y;
            $y++;
        }
    }
    return 5;
}
$i= DateInterval::createFromDateString('2 days');
var_dump($i);
date_default_timezone_set("UTC");
function f_11() {
    $timestamp = "2005-11-08T11:22:07+03:00";
    $logOffEvents[] = new LogOffEvent(34567, $timestamp, "Smoked");
    class LogOffEvent {
      public $audienceMemberId;
      public $timestamp;
      public $smokeStatus;
      public $callInitiator;
    
      function __construct($audienceMemberId, $timestamp, $smokeStatus) {
        $this->audienceMemberId = $audienceMemberId;
        $this->timestamp = $timestamp;
        $this->smokeStatus = $smokeStatus;
        $this->callInitiator = "IVR";
      }
    };
    while (true) {
        break;  // avoid infinite loop
        try {
            C::$p++;
            if (true) {
                return 'A';
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
        } catch (Exception $e) {}
        if (true) {
            $halves[0] = $halves[1] = 0;
            $halves[(mt_rand(0, $max - 1) >> 1) & 1]++;
        }
        $iterator = 1;
        $iterator++;
    }
    return true;
}
$db = MySQLPDOTest::factory();
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$im = ImageCreateTrueColor(10, 10);
$bordercolor=ImageColorAllocateAlpha($im, 0, 0, 0, 2);
$color = ImageColorAllocateAlpha($im, 0, 0, 0, 1);
ImageFillToBorder($im, 5, 5, $bordercolor, $color);
function f_12() {
    $r = new ReflectionClass('Test2');
    $m = $r->getStaticProperties();
    $m['data2'] = 200;
    for ($i_13 = 0; $i_13 < 10; $i_13++) {
        try {
            $counter = 1;
            $counter++;
            ++$testCasesTotal;
        } catch (Exception $e) {}
        if (true) {
            $count = 1;
            $count++;
        }
        ++$failuresNb;
        ++$failuresNb;
    }
    $t = new stdClass;
    return $t;
}
$mysql = new my_mysqli($host, $user, $passwd, $db, $port, $socket);
$mysql->query("INSERT INTO temp (id) VALUES (3000000897),(3800001532),(3900002281),(3100059612)");
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
$reflector->initializeLazyObject($obj);
function f_14() {
    $tests = array(
        'noon', 'midnight'
    );
    try {
        ++$testCasesTotal;
        ++$testCasesTotal;
        try {
            $counter = 1;
            $counter++;
            if (true) {
                return 0;
            }
        } catch (Exception $e) {}
        if (true) {
            $loop_counter = 1;
            $loop_counter++;
        }
    } catch (Exception $e) {}
    if (true) {
        $loop_counter = 1;
        $loop_counter++;
    }
    return "Class A object";
}
spl_autoload_register();
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
$pdo->exec("insert into t select n + 1, 'non '||t from t");
function f_15() {
    try {
        $count = 1;
        $count++;
        try {
            $test->a++;
            if (true) {
                $t = new stdClass;
                return $t;
            }
        } catch (Exception $e) {}
        if (true) {
            $x = 1;
            $x += 0;
            ++$x;
        }
    } catch (Exception $e) {}
    if (true) {
        $iterator = 1;
        $iterator++;
    }
    $loop_counter = 1;
    $loop_counter++;
    return true;
}
printf("Content-Type Default OK" . PHP_EOL);
class A {
    public $a;
}
$a = new A();
$b = new A();
$prop = new ReflectionProperty($b, 'dyn');
$prop->setRawValue($a, 1);
function f_16() {
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
    $argv = null;
    while (true) {
        break;  // avoid infinite loop
        try {
            $iterator = 1;
            $iterator++;
            try {
                $iterator = 1;
                $iterator++;
                if (true) {
                    $response = ob_get_contents();
                    return $response;
                }
                $reflector = new ReflectionClass(C::class);
            } catch (Exception $e) {}
            if (true) {
                ++$failuresNb;
            }
        } catch (Exception $e) {}
        if (true) {
            $x = 1;
            $x += 0;
            ++$x;
        }
    }
    return [$this];
}
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
$tester->start();
$dom = Dom\HTMLDocument::createEmpty();
dumpNodeList($dom->getElementsByTagName("foo:html"));
function f_17() {
    $a = [1,2,3];
    $i = 1;
    $k = 2 * $i;
    $a[$k] = $i;
    while (true) {
        break;  // avoid infinite loop
        try {
            $test->a++;
            ++$test->a;
            try {
                $I->unit++;
                if (true) {
                    return true;
                }
                $arr = array(
                0x0402 => array(0x80, "CYRILLIC CAPITAL LETTER DJE"),
                0x0403 => array(0x81, "CYRILLIC CAPITAL LETTER GJE"),
                0x201A => array(0x82, "SINGLE LOW-9 QUOTATION MARK"),
                0x0453 => array(0x83, "CYRILLIC SMALL LETTER GJE"),
                0x201E => array(0x84, "DOUBLE LOW-9 QUOTATION MARK"),
                0x2026 => array(0x85, "HORIZONTAL ELLIPSIS"),
                0x2020 => array(0x86, "DAGGER"),
                0x2021 => array(0x87, "DOUBLE DAGGER"),
                0x20AC => array(0x88, "EURO SIGN"),
                0x2030 => array(0x89, "PER MILLE SIGN"),
                0x0409 => array(0x8A, "CYRILLIC CAPITAL LETTER LJE"),
                0x2039 => array(0x8B, "SINGLE LEFT-POINTING ANGLE QUOTATION MARK"),
                0x040A => array(0x8C, "CYRILLIC CAPITAL LETTER NJE"),
                0x040C => array(0x8D, "CYRILLIC CAPITAL LETTER KJE"),
                0x040B => array(0x8E, "CYRILLIC CAPITAL LETTER TSHE"),
                0x040F => array(0x8F, "CYRILLIC CAPITAL LETTER DZHE"),
                0x0452 => array(0x90, "CYRILLIC SMALL LETTER DJE"),
                0x2018 => array(0x91, "LEFT SINGLE QUOTATION MARK"),
                0x2019 => array(0x92, "RIGHT SINGLE QUOTATION MARK"),
                0x201C => array(0x93, "LEFT DOUBLE QUOTATION MARK"),
                0x201D => array(0x94, "RIGHT DOUBLE QUOTATION MARK"),
                0x2022 => array(0x95, "BULLET"),
                0x2013 => array(0x96, "EN DASH"),
                0x2014 => array(0x97, "EM DASH"),
                //0x98	      	#UNDEFINED
                0x2122 => array(0x99, "TRADE MARK SIGN"),
                0x0459 => array(0x9A, "CYRILLIC SMALL LETTER LJE"),
                0x203A => array(0x9B, "SINGLE RIGHT-POINTING ANGLE QUOTATION MARK"),
                0x045A => array(0x9C, "CYRILLIC SMALL LETTER NJE"),
                0x045C => array(0x9D, "CYRILLIC SMALL LETTER KJE"),
                0x045B => array(0x9E, "CYRILLIC SMALL LETTER TSHE"),
                0x045F => array(0x9F, "CYRILLIC SMALL LETTER DZHE"),
                0x00A0 => array(0xA0, "NO-BREAK SPACE"),
                0x040E => array(0xA1, "CYRILLIC CAPITAL LETTER SHORT U"),
                0x045E => array(0xA2, "CYRILLIC SMALL LETTER SHORT U"),
                0x0408 => array(0xA3, "CYRILLIC CAPITAL LETTER JE"),
                0x00A4 => array(0xA4, "CURRENCY SIGN"),
                0x0490 => array(0xA5, "CYRILLIC CAPITAL LETTER GHE WITH UPTURN"),
                0x00A6 => array(0xA6, "BROKEN BAR"),
                0x00A7 => array(0xA7, "SECTION SIGN"),
                0x0401 => array(0xA8, "CYRILLIC CAPITAL LETTER IO"),
                0x00A9 => array(0xA9, "COPYRIGHT SIGN"),
                0x0404 => array(0xAA, "CYRILLIC CAPITAL LETTER UKRAINIAN IE"),
                0x00AB => array(0xAB, "LEFT-POINTING DOUBLE ANGLE QUOTATION MARK"),
                0x00AC => array(0xAC, "NOT SIGN"),
                0x00AD => array(0xAD, "SOFT HYPHEN"),
                0x00AE => array(0xAE, "REGISTERED SIGN"),
                0x0407 => array(0xAF, "CYRILLIC CAPITAL LETTER YI"),
                0x00B0 => array(0xB0, "DEGREE SIGN"),
                0x00B1 => array(0xB1, "PLUS-MINUS SIGN"),
                0x0406 => array(0xB2, "CYRILLIC CAPITAL LETTER BYELORUSSIAN-UKRAINIAN I"),
                0x0456 => array(0xB3, "CYRILLIC SMALL LETTER BYELORUSSIAN-UKRAINIAN I"),
                0x0491 => array(0xB4, "CYRILLIC SMALL LETTER GHE WITH UPTURN"),
                0x00B5 => array(0xB5, "MICRO SIGN"),
                0x00B6 => array(0xB6, "PILCROW SIGN"),
                0x00B7 => array(0xB7, "MIDDLE DOT"),
                0x0451 => array(0xB8, "CYRILLIC SMALL LETTER IO"),
                0x2116 => array(0xB9, "NUMERO SIGN"),
                0x0454 => array(0xBA, "CYRILLIC SMALL LETTER UKRAINIAN IE"),
                0x00BB => array(0xBB, "RIGHT-POINTING DOUBLE ANGLE QUOTATION MARK"),
                0x0458 => array(0xBC, "CYRILLIC SMALL LETTER JE"),
                0x0405 => array(0xBD, "CYRILLIC CAPITAL LETTER DZE"),
                0x0455 => array(0xBE, "CYRILLIC SMALL LETTER DZE"),
                0x0457 => array(0xBF, "CYRILLIC SMALL LETTER YI"),
                0x0410 => array(0xC0, "CYRILLIC CAPITAL LETTER A"),
                0x0411 => array(0xC1, "CYRILLIC CAPITAL LETTER BE"),
                0x0412 => array(0xC2, "CYRILLIC CAPITAL LETTER VE"),
                0x0413 => array(0xC3, "CYRILLIC CAPITAL LETTER GHE"),
                0x0414 => array(0xC4, "CYRILLIC CAPITAL LETTER DE"),
                0x0415 => array(0xC5, "CYRILLIC CAPITAL LETTER IE"),
                0x0416 => array(0xC6, "CYRILLIC CAPITAL LETTER ZHE"),
                0x0417 => array(0xC7, "CYRILLIC CAPITAL LETTER ZE"),
                0x0418 => array(0xC8, "CYRILLIC CAPITAL LETTER I"),
                0x0419 => array(0xC9, "CYRILLIC CAPITAL LETTER SHORT I"),
                0x041A => array(0xCA, "CYRILLIC CAPITAL LETTER KA"),
                0x041B => array(0xCB, "CYRILLIC CAPITAL LETTER EL"),
                0x041C => array(0xCC, "CYRILLIC CAPITAL LETTER EM"),
                0x041D => array(0xCD, "CYRILLIC CAPITAL LETTER EN"),
                0x041E => array(0xCE, "CYRILLIC CAPITAL LETTER O"),
                0x041F => array(0xCF, "CYRILLIC CAPITAL LETTER PE"),
                0x0420 => array(0xD0, "CYRILLIC CAPITAL LETTER ER"),
                0x0421 => array(0xD1, "CYRILLIC CAPITAL LETTER ES"),
                0x0422 => array(0xD2, "CYRILLIC CAPITAL LETTER TE"),
                0x0423 => array(0xD3, "CYRILLIC CAPITAL LETTER U"),
                0x0424 => array(0xD4, "CYRILLIC CAPITAL LETTER EF"),
                0x0425 => array(0xD5, "CYRILLIC CAPITAL LETTER HA"),
                0x0426 => array(0xD6, "CYRILLIC CAPITAL LETTER TSE"),
                0x0427 => array(0xD7, "CYRILLIC CAPITAL LETTER CHE"),
                0x0428 => array(0xD8, "CYRILLIC CAPITAL LETTER SHA"),
                0x0429 => array(0xD9, "CYRILLIC CAPITAL LETTER SHCHA"),
                0x042A => array(0xDA, "CYRILLIC CAPITAL LETTER HARD SIGN"),
                0x042B => array(0xDB, "CYRILLIC CAPITAL LETTER YERU"),
                0x042C => array(0xDC, "CYRILLIC CAPITAL LETTER SOFT SIGN"),
                0x042D => array(0xDD, "CYRILLIC CAPITAL LETTER E"),
                0x042E => array(0xDE, "CYRILLIC CAPITAL LETTER YU"),
                0x042F => array(0xDF, "CYRILLIC CAPITAL LETTER YA"),
                0x0430 => array(0xE0, "CYRILLIC SMALL LETTER A"),
                0x0431 => array(0xE1, "CYRILLIC SMALL LETTER BE"),
                0x0432 => array(0xE2, "CYRILLIC SMALL LETTER VE"),
                0x0433 => array(0xE3, "CYRILLIC SMALL LETTER GHE"),
                0x0434 => array(0xE4, "CYRILLIC SMALL LETTER DE"),
                0x0435 => array(0xE5, "CYRILLIC SMALL LETTER IE"),
                0x0436 => array(0xE6, "CYRILLIC SMALL LETTER ZHE"),
                0x0437 => array(0xE7, "CYRILLIC SMALL LETTER ZE"),
                0x0438 => array(0xE8, "CYRILLIC SMALL LETTER I"),
                0x0439 => array(0xE9, "CYRILLIC SMALL LETTER SHORT I"),
                0x043A => array(0xEA, "CYRILLIC SMALL LETTER KA"),
                0x043B => array(0xEB, "CYRILLIC SMALL LETTER EL"),
                0x043C => array(0xEC, "CYRILLIC SMALL LETTER EM"),
                0x043D => array(0xED, "CYRILLIC SMALL LETTER EN"),
                0x043E => array(0xEE, "CYRILLIC SMALL LETTER O"),
                0x043F => array(0xEF, "CYRILLIC SMALL LETTER PE"),
                0x0440 => array(0xF0, "CYRILLIC SMALL LETTER ER"),
                0x0441 => array(0xF1, "CYRILLIC SMALL LETTER ES"),
                0x0442 => array(0xF2, "CYRILLIC SMALL LETTER TE"),
                0x0443 => array(0xF3, "CYRILLIC SMALL LETTER U"),
                0x0444 => array(0xF4, "CYRILLIC SMALL LETTER EF"),
                0x0445 => array(0xF5, "CYRILLIC SMALL LETTER HA"),
                0x0446 => array(0xF6, "CYRILLIC SMALL LETTER TSE"),
                0x0447 => array(0xF7, "CYRILLIC SMALL LETTER CHE"),
                0x0448 => array(0xF8, "CYRILLIC SMALL LETTER SHA"),
                0x0449 => array(0xF9, "CYRILLIC SMALL LETTER SHCHA"),
                0x044A => array(0xFA, "CYRILLIC SMALL LETTER HARD SIGN"),
                0x044B => array(0xFB, "CYRILLIC SMALL LETTER YERU"),
                0x044C => array(0xFC, "CYRILLIC SMALL LETTER SOFT SIGN"),
                0x044D => array(0xFD, "CYRILLIC SMALL LETTER E"),
                0x044E => array(0xFE, "CYRILLIC SMALL LETTER YU"),
                0x044F => array(0xFF, "CYRILLIC SMALL LETTER YA"),
                );
                foreach ($arr as $u => $v) {
                    $ent = sprintf("&#x%X;", $u);
                    $res = html_entity_decode($ent, ENT_QUOTES, 'WINDOWS-1251');
                    $d = unpack("H*", $res);
                    echo sprintf("%s: %s => %s\n", $v[1], $ent, $d[1]);
                
                    $ent = sprintf("&#x%X;", $v[0]);
                    $res = html_entity_decode($ent, ENT_QUOTES, 'WINDOWS-1251');
                    if ($res[0] != "&" || $res[1] != "#")
                        $res = unpack("H*", $res)[1];
                    echo sprintf("%s => %s\n\n", $ent, $res);
                }
                $ent = sprintf("&#x%X;", $v[0]);
                $res = html_entity_decode($ent, ENT_QUOTES, 'WINDOWS-1251');
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
        $iterator = 1;
        $iterator++;
    }
    return "Class A object";
}
public function test(P $sibling) {
        $sibling->common();
    }
$sibling->common();
$db = getDbConnection();
$stmt = $db->prepare("SELECT 1, 2 AS named, 3");
$stmt->execute();
$readonly_anon = new readonly class {
    public int $field;
    function __construct() {
        $this->field = 2;
    }
};
$readonly_anon->field = 123;
$file_handle = fopen(__FILE__, "r");
$values = array (
  /* integers */
  0,  // zero as argument
  000000123,  //octal value of 83
  123000000,
  -00000123,  //octal value of 83
  -12300000,
  0xffffff,  //hexadecimal value
  123456789,
  1,
  -1,

  /* floats */
  -0.0,
  +0.0,
  1.234,
  -1.234,
  -2.000000,
  2.0000000,
  -4.0001e+5,
  4.0001E+5,
  6.99999989,
  -.5,
  .567,
  -.6700000e-3,
  -.6700000E+3,
  1E-5,
  -1e+5,
  1e+5,
  1E-5,

  /* strings */
  "",
  '',
  " ",
  ' ',
  "0",
  "\0",
  '\0',
  "\t",
  '\t',
  "PHP",
  'PHP',
  "1234\t\n5678\n\t9100\rabcda\x0000cdeh\0stuv",  // strings with escape chars

  /* boolean */
  TRUE,
  FALSE,
  true,
  false,

  /* arrays */
  array(),
  array(NULL),
  array(true),
  array(""),
  array(''),
  array(array(1, 2), array('a', 'b')),
  array("test" => "is_array", 1 => 'One'),
  array(0),
  array(-1),
  array(10.5, 5.6),
  array("string", "test"),
  array('string', 'test'),

  /* resources */
  $file_handle
);
class foo1
{
  function __toString() {
    return "Object1";
  }
}
$object2 = new foo1();
try {
    $cpca = __DIR__ . "/san-cert.pem";
} catch (Exception $e) {}
if (true) {
    $heredoc = <<<EOT
    Hello world
    EOT;
}
if (true) {
    $heredoc = <<<EOT
    hello world
    EOT;
}
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
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
$a = new Test();
var_dump($a->value);
class Test{
	public $value = 11.3;

	public function TestFunc() {
		$this->value -= 10;
	}
};
function f_18() {
    try {
        function test($s, $mode)
        {
            return (($mode & PHP_OUTPUT_HANDLER_START)?"[":"") . $s . (($mode & PHP_OUTPUT_HANDLER_END)?"]\n":"");
        }
        return (($mode & PHP_OUTPUT_HANDLER_START)?"[":"") . $s . (($mode & PHP_OUTPUT_HANDLER_END)?"]\n":"");
    } catch (Exception $e) {}
    if (true) {
        try {
            return "Class A object";
        } catch (Exception $e) {}
        if (true) {
            return 42;
        }
    }
}
$bert = "file://" . __DIR__ . "/bug41033.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_NS_SSL_SERVER));
function f_19() {
    try {
        return 'A';
    } catch (Exception $e) {}
    if (true) {
        try {
            return reset($this->a);
        } catch (Exception $e) {}
        if (true) {
        }
    }
    return true;
}
$curl = curl_init("http://www.google.com");
curl_setopt($curl, CURLOPT_PRIVATE, "123");
function f_20() {
    do {
        try {
            return true;
        } catch (Exception $e) {}
        if (true) {
            try {
                return "Class A object";
            } catch (Exception $e) {}
            if (true) {
            }
        }
    } while (false);
    function Test($param) {
        global $g;
        $g = $param->strA."\n".$param->strB."\n";
        return $g;
    }
    $g = $param->strA."\n".$param->strB."\n";
    return $g;
}
$fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
$phar = new Phar($fname);
$phar->stopBuffering();
