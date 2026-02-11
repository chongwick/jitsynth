<?php
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
class C extends stdClass {
    public int $a;
}
class testObject extends ArrayObject {
    protected $test;

    public function getTest() {
        return $this->test;
    }

    public function setTest($test) {
        $this->test = $test;
    }
}
function byVal($arg) {
    var_dump($arg);
}
function crash()
{
    $notDefined[$i] = 'test';
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
$header = <<<HEADER
extern int *(*bug79177_cb)(void);
void bug79177(void);
HEADER;
$ffi = FFI::cdef($header);
$ffi->bug79177_cb = function() {
    throw new \RuntimeException('Not allowed');
};
$cl = new bug8318;
$inner = 'r:2;';
$exploit = 'a:2:{i:0;C:3:"obj":'.strlen($inner).':{'.$inner.'}i:1;C:3:"obj":'.strlen($inner).':{'.$inner.'}}';
$data = unserialize($exploit);
function f_0() {
    $im = imagecreatefromgd2(__DIR__ . DIRECTORY_SEPARATOR . 'bug73161.gd2');
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        $f = __DIR__."/data/test.txt.gz";
        $h = gzopen($f, 'r');
        var_dump(gzread($h, -1));
    }
}
$dt = new DateTime('first day of January 2011');
var_dump($dt);
$im1 = imagecreatetruecolor(10,100);
imagefill($im1, 0,0, 0xffffff);
for ($i_2 = 0; $i_2 < 10; $i_2++) {
    $rc = new ReflectionClass(B::class);
    $reflector = new ReflectionClass(C::class);
    $obj = new C();
    $reflector->resetAsLazyProxy($obj, function ($obj) {
        });
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
    $bug_gh16013_callback_struct->return_uint8 = function($val) use($ffi) {
        $cdata = $ffi->new('uint8_t');
        $cdata->cdata = $val;
        return $cdata;
    };
    var_dump(($bug_gh16013_callback_struct->return_uint8)(4));
    $obj = new testObject();
    $obj2 = unserialize(serialize($obj));
    var_dump($obj2->getTest());
    var_dump(session_cache_limiter());
    var_dump($sends1);
}
for ($i_3 = 0; $i_3 < 10; $i_3++) {
    $arr = array('a', 'b');
    $arr();
    byVal(C[0]);
    $fp = fopen(__FILE__, "r");
    fclose($fp);
    crash();
    $GLOBALS['b'] = 2;
    $a = &$GLOBALS['a'];
    $b = &$GLOBALS['b'];
    var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
    $fp = fopen('php://input', 'r+');
    var_dump(fseek($fp, -1, SEEK_SET));
    $mysql = new my_mysqli($host, $user, $passwd, $db, $port, $socket);
    $mysql->close();
    mysqli_query($link, 'ALTER TABLE test DROP zero');
}
for ($i_4 = 0; $i_4 < 10; $i_4++) {
    array_splice($GLOBALS,0,count($GLOBALS));
    $headers2 = exif_read_data(__DIR__ . '/bug64739.jpg');
    var_dump($headers2['Author']);
}
$cert = "file://" . __DIR__ . "/cert.crt";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_CLIENT, array($cpca)));
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
$reflector = new ReflectionClass(C::class);
$obj = new C();
$reflector->resetAsLazyGhost($obj, function ($obj) {
    var_dump("initializer");
    $obj->__construct();
});
printf("[001] [%d] %s\n", mysqli_errno($link), mysqli_error($link));
for ($i_5 = 0; $i_5 < 10; $i_5++) {
    $argv = array(1, 2, 3);
    var_dump(range('a', 'c', -1));
}
