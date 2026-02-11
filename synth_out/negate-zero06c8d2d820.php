<?php
function new_closure_gen() {
    return function() {
        static $foo = 0;
        yield ++$foo;
    };
}
function f_0() {
    $closure1 = new_closure_gen();
    $closure2 = new_closure_gen();
    $gen1 = $closure1();
    $gen2 = $closure1();
    $gen3 = $closure2();
    foreach (array($gen1, $gen2, $gen3) as $gen) {
        foreach ($gen as $val) {
            var_dump($val);
        }
    }
    foreach ($gen as $val) {
            var_dump($val);
        }
    var_dump($val);
    $instructorsAdmin = Test::INSTRUCTORS_ADMIN;
    $data = [
        Test::COURSES_ADMIN,
        Test::COURSES_REPORTING_ACCESS,
        Test::BUNDLES_ADMIN,
        Test::USERS_ADMIN,
        Test::B2B_DASHBOARD_ACCESS,
        Test::B2B_DASHBOARD_ACCESS,
        Test::INSTRUCTORS_ADMIN,
        &$instructorsAdmin,
        Test::COUPONS_ADMIN,
        Test::AUTHENTICATED,
    ];
    $headers2 = exif_read_data(__DIR__ . '/bug64739.jpg');
    var_dump($headers2['Title']);
    $a = 1;
    return $a;
}
$im = imagecreate(10,10);
$db = PDOTest::test_factory(dirname(__FILE__) . '/common.phpt');
$stmt = $db->prepare('select ?- lseg \'((-1,0),(1,0))\'');
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
var_dump($ffi->bug_gh16013_return_enum());
$search_arr = array( TRUE, FALSE, 1, 0, -1, "1", "0", "-1",  NULL,
                     array(), "php", "");
foreach( $search_arr as $value ) {
  echo "\n-- Iteration $i --\n";
  /* replace the string in array */
  var_dump( str_replace($value, "FOUND", $search_arr, $count) );
  var_dump( $count );
  $i++;
}
var_dump( str_replace($value, "FOUND", $search_arr, $count) );
mysqli_free_result($res);
$rm = new ReflectionMethod(Collator::class, 'getSortKey');
var_dump($rm->getNumberOfRequiredParameters());
