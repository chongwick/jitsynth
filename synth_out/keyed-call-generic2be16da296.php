<?php
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
class Test{
	public $value = 11.3;

	public function TestFunc() {
		$this->value -= 10;
	}
}
class TrampolineTest {
    public function __call(string $name, array $arguments) {
        echo 'Trampoline for ', $name, PHP_EOL;
    }
}
function PostEvents($x) {
    var_dump($x);
    exit();
  return $x;
}
class C {
    public int $a;
}
function comp_func_cr($a, $b) {
        if ($a->priv_member === $b->priv_member) return 0;
        return ($a->priv_member > $b->priv_member) ? 1 : -1;
    }
function comp_func_cr2($a, $b) {
        echo ".";
        if ($a->priv_member === $b->priv_member) return 0;
        return ($a->priv_member < $b->priv_member) ? 1 : -1;
    }
function f_0() {
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        global $list;
        $list->pop();
    }
}
function f_2() {
    for ($i_3 = 0; $i_3 < 10; $i_3++) {
        for ($i_4 = 0; $i_4 < 10; $i_4++) {
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
            foreach($needles as $needle) {
              var_dump( strrchr($special_chars_str, $needle) );
            }
            var_dump( strrchr($special_chars_str, $needle) );
        }
    }
}
$sql = sprintf('ALTER TABLE test ADD zero %s UNSIGNED ZEROFILL', $datatype);
$a = new Test();
function f_5() {
    return true;
}
$tbl = "test";
$sql = "CREATE TABLE $tbl (bit_column_1 bit(16) NOT NULL) DEFAULT CHARSET=utf8";
$unset_var = 10;
$values = array(

      // int data
      0,
      1,
      12345,
      -2345,

      // float data
      10.5,
      -10.5,
      10.1234567e10,
      10.7654321E-10,
      .5,

      // array data
      array(),
      array(0),
      array(1),
      array(1, 2),
      array('color' => 'red', 'item' => 'pen'),

      // null data
      NULL,
      null,

      // boolean data
      true,
      false,
      TRUE,
      FALSE,

      // empty data
      "",
      '',

      // string data
      "string",
      'string',

      // undefined data
      $undefined_var,

      // unset data
      $unset_var,
);
$date = new DateTime("2011-05-17T22:14:12");
$o = new TrampolineTest();
$batch_file_path = __DIR__ . '/ghsa-9fcc-425m-g385_003.bat';
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
var_dump($ffi->bug_gh16013_return_char());
$reflector = new ReflectionClass(C::class);
$obj = $reflector->newLazyGhost(function ($obj) {
    throw new \Exception('Initializer');
}, ReflectionClass::SKIP_INITIALIZATION_ON_SERIALIZE);
test('Ghost', $obj);
$oIntlDateFormatter = new IntlDateFormatter("en_GB");
$offset3 = PHP_INT_MAX * 16;
$oIntlDateFormatter->parseToCalendar('America/Los_Angeles', $offset3);
$pkcsfile = __DIR__ . "/openssl_pkcs7_verify__pkcsfile.tmp";
var_dump(file_get_contents($pkcsfile));
$db = getDbConnection();
$sql = '
    SET NOCOUNT ON
    SELECT 0 AS [result]
';
$stmt = $db->query($sql);
$stmt->closeCursor();
$sert = "file://" . __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_CLIENT));
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
mkdir($prefix);
var_dump($x);
var_dump(getopt("abcd"));
$data = array('first', 'fifth', 'second', 'forth', 'third');
$sort = array(1, 5, 2, 4, 3);
array_multisort($sort, $data);
$reflector = new ReflectionClass(C::class);
$obj = new C();
$reflector->resetAsLazyProxy($obj, function ($obj) use ($reflector) {
    try {
        $reflector->resetAsLazyProxy($obj, function () { });
    } catch (Error $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
    try {
        $reflector->resetAsLazyGhost($obj, function () { });
    } catch (Error $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
    return new C();
});
function f_6() {
    return ($a->priv_member < $b->priv_member) ? 1 : -1;
}
function f_7() {
    $response = ob_get_contents();
    return $response;
}
function f_8() {
    return true;
}
$c = "assert";
$res = [];
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
$start = 30;
$column_def = array('col1 CHAR(1)', 'col2 CHAR(2)','INDEX idx_col1_col2(col1, col2)');
$counter = 1;
$loop_counter = 1;
$loop_counter++;
$rows = array();
$link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
$res = $link->use_result();
$row = $res->fetch_array();
var_dump(posix_setrlimit(POSIX_RLIMIT_NOFILE, 129, 128));
$db = MySQLPDOTest::factory();
$db->exec('INSERT INTO test_33689 VALUES(1)');
$originalEnvelopeData = "any string with \x1a is cut at this point.";
$tmpFileIn = tempnam(sys_get_temp_dir(), 'test');
file_put_contents($tmpFileIn, $originalEnvelopeData);
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
set_error_handler(function($_, $m) { throw new Exception($m); });
function f_9() {
    for ($i_10 = 0; $i_10 < 10; $i_10++) {
        for ($i_11 = 0; $i_11 < 10; $i_11++) {
            $subject = 'string';
            try {
                $arr = array('http'=>
                                        array(
                                                'follow_location'=>0,
                                        )
                                );
                $context = stream_context_create($arr);
            } catch (Exception $e) {}
            if (true) {
                $date = (new ReflectionClass(DateTime::class))->newInstanceWithoutConstructor();
            }
            var_dump ( rtrim("rtrim test   \t\0 ") );
        }
    }
}
catch (\PDOException $e) {
  var_dump(!empty($e->errorInfo) && is_array($e->errorInfo));
}
var_dump(!empty($e->errorInfo) && is_array($e->errorInfo));
