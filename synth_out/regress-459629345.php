<?php
$a = [1,2,3];
$i = 1;
$k = 2 * $i;
$a[$k] = $i;
$timeZone = new DateTimeZone('UTC');
function f_0() {
    function f_1() {
        public function bar(&$a, &$b, $c) {
                Legacy::bar($a, $b, $c);
            }
        public function callback(&$a, &$b, $c) {
                $b = 1;
            }
        $b = 1;
        class PHPUnit_Framework_MockObject_Invocation_Static {
            public $parameters;
            public function __construct(array $parameters) {
                $this->parameters = $parameters;
            }
        }
        public function bar(&$a, &$b, $c) {
                $arguments = array($a, $b, $c);
                $result = $this->inv_mocker->invoke(
                    new PHPUnit_Framework_MockObject_Invocation_Static(
                        $arguments
                    )
                );
                return $result;
            }
        $arguments = array($a, $b, $c);
        $result = $this->inv_mocker->invoke(
                    new PHPUnit_Framework_MockObject_Invocation_Static(
                        $arguments
                    )
                );
        return $result;
    }
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
    return 0;
}
$zip = new ZipArchive();
$zip->setPassword('bar');
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
$dateinterval = (new ReflectionClass(DateInterval::class))->newInstanceWithoutConstructor();
$test_array = array(1, array(1 => "one", "two" => 2, "" => "f") );
$file_handle = fopen(__FILE__, "r");
