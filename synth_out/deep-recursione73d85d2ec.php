<?php
function f_0() {
    $s = 'O:15:"ReflectionClass":0:{}';
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
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
    }
    return;
}
$dest = dirname(realpath(__FILE__)) . '/bug27582.png';
$db = PDOTest::factory();
$insert = $db->prepare("insert into test34630 (id, val) values (1, :blob)");
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
$GLOBALS['b'] = 2;
$org_a = $GLOBALS['a'];
$dest = dirname(realpath(__FILE__)) . '/bug27582.png';
$im2 = imagecreatefrompng($dest);
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
$inner = 'r:2;';
$exploit = 'a:2:{i:0;C:3:"obj":'.strlen($inner).':{'.$inner.'}i:1;C:3:"obj":'.strlen($inner).':{'.$inner.'}}';
var_dump(range(1.5, 3.5, -1.5));
$needle = base64_decode('44CC');
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
public function __construct($callback) {
        $this->callback = $callback;
    }
$this->callback = $callback;
$special_chars_str = <<<EOD
Example of heredoc string contains
$#%^*&*_("_")!#@@!$#$^^&*(special)
chars.
EOD;
for ($i_2 = 0; $i_2 < 10; $i_2++) {
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
    $InvMocker = new PHPUnit_Framework_MockObject_InvocationMocker();
}
function test(string $name, object $obj) {
    printf("# %s:\n", $name);

    var_dump($obj);
    var_dump($obj->a);
    var_dump($obj);
}
var_dump($obj);
var_dump(__METHOD__);
