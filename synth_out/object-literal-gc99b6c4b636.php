<?php
function f_0() {
    $empty_webp = __DIR__ . "/gh13774.webp";
    $im = imagecreatefromwebp($empty_webp);
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        if (true) {
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
        }
        $g = 'hi';
    }
    $date = (new ReflectionClass(DateTime::class))->newInstanceWithoutConstructor();
    var_dump(count($cert_data['extracerts']));
    ++$testCasesTotal;
    $im = imagecreate(800, 800);
    test_image_equals_file(__DIR__ . '/bug43475.png', $im);
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        $a[10] = "42";
        $i = "010";
        var_dump($a[$i], isset($a[$i]));
    }
}
$host = PHP_CLI_SERVER_HOSTNAME;
$request = <<<REQUEST
GET / HTTP/1.1
Host: $host


REQUEST;
for ($i_3 = 0; $i_3 < 10; $i_3++) {
    $ch = curl_init();
    curl_close($ch);
}
