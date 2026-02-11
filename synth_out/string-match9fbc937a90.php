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
class Box {
    public ?Test $value;
}
function test($box) {
    var_dump($box->value = new Test);
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
#[AllowDynamicProperties]
class C {
    public $a = 1;
}
class SomeClass implements JsonSerializable {
    public function jsonSerialize(): mixed {
        return [get_object_vars($this)];
    }
}
class TrampolineTest {
    public function __call(string $name, array $arguments) {
        echo 'Trampoline for ', $name, PHP_EOL;
    }
}
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
function f_0() {
    $dir_handle = opendir( __DIR__ );
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
    $d0 = $prefix . "ソフト";
    rmdir($d0);
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
    $d1 = $prefix . "フォルダ";
    $assoc_array = array ('one' => 1, 'two' => 2);
    $rc = new ReflectionClass('Foo');
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
    if (true) {
        $style = array();
        $i = 0;
        $style[$i++] = $color;
        var_dump(filter_var("<data&sons>", FILTER_SANITIZE_ENCODED));
    }
    if (!true) {
        global $box;
        $box = new Box();
        test($box);
        var_dump($_SESSION);
        for ($i_1 = 0; $i_1 < 10; $i_1++) {
            spl_autoload_register(function ($name) {
            });
        }
    }
    $tester = new FPM\Tester($cfg);
    $userMessage = "'user' directive is ignored when FPM is not running as root";
    $tester->expectLogNotice($userMessage, 'dddd');
    printf("[%03d] Length reported is too small to run test\n", $offset);
    var_dump(soundex("Lloyd"));
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        if (true) {
            $dfp = opendir ( __DIR__ );
            closedir($dfp);
        }
        if (!true) {
            ob_start();
        }
    }
    $ar1 = array("row1" => 2, "row2" => 1);
    $args = array($ar1);
    var_dump(call_user_func_array("array_multisort", $args));
    $doc = new \DOMDocument();
    $target = $doc->documentElement->lastChild;
    var_dump($target);
    $f = __DIR__."/data/test.txt.gz";
    $h = gzopen($f, 'r');
    var_dump(gzeof($h));
    clearstatcache();
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
    var_dump($ffi->bug_gh16013_return_int());
    $dest = __DIR__ . "/bug40228";
    rmdir($dest . '/test');
    $im = imagecreate(800, 800);
    $black = imagecolorallocate($im, 0, 0, 0);
    setStyleAndThickness($im, $black, 6);
    var_dump( range(1.0, 7.0, fdiv(0, 0)) );
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_OCSP_HELPER));
}
$field = mysqli_fetch_field_direct($res, 1);
$host = PHP_CLI_SERVER_HOSTNAME;
$request = <<<REQUEST
GET / HTTP/1.1
Host: $host


REQUEST;
$fixedArray = new SplFixedArray(1);
$arr  = array("test");
ob_end_clean();
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
$c = new C();
$propReflector = new ReflectionProperty($c, 'dyn');
$propReflector->setRawValueWithoutLazyInitialization($obj, 'test');
$unset_var = 10;
$domd = new DOMDocument();
$xp = new DOMXPath($domd);
$xp->query("//foo[contains(text(), " . $xp->quote("tes\x00t") . ")]");
$lazy = true;
printf("[%03d] Length reported is too small to run test\n", $offset);
$class = new SomeClass;
$obj = new C();
var_dump($obj->a);
$host = PHP_CLI_SERVER_HOSTNAME;
$request = <<<REQUEST
GET / HTTP/1.1
Host: $host


REQUEST;
$o = new TrampolineTest();
$callback1 = [$o, 'trampoline1'];
spl_autoload_register($callback1);
$magic_file = __DIR__ . '/bug79283.db';
$finfo = new finfo(FILEINFO_NONE, $magic_file);
$InvMocker = new PHPUnit_Framework_MockObject_InvocationMocker();
$OuterMatcher = new PHPUnit_Framework_MockObject_Matcher();
$InvMocker->addMatcher($OuterMatcher);
$reflector = new ReflectionClass(C::class);
$obj = $reflector->newLazyGhost(function ($obj) {
    var_dump("initializer");
    $obj->__construct();
});
$obj = $reflector->newLazyProxy(function ($obj) {
    var_dump("initializer");
    return new C();
});
$pass = "qwerty";
test($p12, $pass);
