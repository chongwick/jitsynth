<?php
class C {
    public function __toString() {
        global $c;
        $c = [];
        throw new Exception(__METHOD__);
    }
}
$test = array(
  'a' => 1,
  'b' => 2,
  'c' => 3,
  'd' => 4,
);
foreach($test as $kk => $vv) {
        echo $test[$kk];
        if ($kk == $k) $test[$kk] = 0;
    }
$test[$kk] = 0;
$a = $b = $c = 2;
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $sql = "SELECT 11111 as `1`, 22222 as `2`";
    $link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
    $link->real_query($sql);
}
$res = [];
$res[] = $re;
$c = new C();
for ($i_1 = 0; $i_1 < 10; $i_1++) {
    $filename = __DIR__ . '/bug77432.phar';
    unlink($filename);
}
$x = new stdClass();
$im = imagecreatetruecolor(1, 1);
for ($i_2 = 0; $i_2 < 10; $i_2++) {
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
}
$date = '7.8.2010';
$unixtime = strtotime($date);
$date = new DateTime('@'.$unixtime);
