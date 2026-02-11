<?php
class TrampolineTest {
    public function __call(string $name, array $arguments) {
        echo 'Trampoline for ', $name, PHP_EOL;
    }
}
$thirty = M_PI / 6.0;
$b = 1;
$res = [];
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
$f_base = "67647私はガラスを食べられます.mov";
$f = __DIR__ . DIRECTOR;
function f_0() {
    return str_repeat('a', 1);
}
function f_1() {
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        for ($i_3 = 0; $i_3 < 10; $i_3++) {
            $dest = dirname(realpath(__FILE__)) . '/bug27582.png';
            $im2 = imagecreatefrompng($dest);
            $col = imagecolorat($im2, 5, 5);
            $color = imagecolorsforindex($im2, $col);
            $hash = password_hash(
                "php",
                PASSWORD_ARGON2I,
                ['memory_cost' => 64 << 10, 'time_cost' => 4, 'threads' => 1]
            );
            $o = new TrampolineTest();
            $tester = new FPM\Tester($cfg);
            $tester->close();
            $oldcwd = getcwd();
            chdir($oldcwd);
            list($value) = yield;
            var_dump($value);
        }
    }
    $dsn = 'sqlite:./bug64705NonExistingDir/bug64705NonExistingDb';
    $pdo = new \PDO($dsn, null, null);
    for ($i_4 = 0; $i_4 < 10; $i_4++) {
        for ($i_5 = 0; $i_5 < 10; $i_5++) {
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
        }
    }
}
$header = <<<HEADER
extern int *(*bug79177_cb)(void);
void bug79177(void);
HEADER;
$ffi = FFI::cdef($header);
$ffi->bug79177();
$list = new SplDoublyLinkedList();
$list->rewind();
