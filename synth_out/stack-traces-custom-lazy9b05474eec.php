<?php
class C extends stdClass {
    public int $a;
}
function f_0() {
    $inputs = array(
          'Century number' => "%C",
          'Month Date Year' => "%D",
          'Year with century' => "%G",
          'Year without century' => "%g",
    );
    try {
        pcntl_wait($status);
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
        $tester->expectLogStartNotices();
    } catch (Exception $e) {}
    if (true) {
        $rows = array();
    }
    $fi = new finfo(FILEINFO_MIME_TYPE);
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
    $bug_gh16013_callback_struct->return_uint16 = function($val) use($ffi) {
        $cdata = $ffi->new('uint16_t');
        $cdata->cdata = $val;
        return $cdata;
    };
}
$sert = "file://" . __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_TIMESTAMP_SIGN));
printf("printf test 9:<%-20s>\n", "bar");
