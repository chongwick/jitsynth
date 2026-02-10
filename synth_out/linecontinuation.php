<?php
var_dump ( rtrim("rtrim test        ", " ") );
printf("printf test 6:%-010.2f\n", 2.5);
function foo() {
  $i = 1;
  $x = 2;
  var_dump($i=$x);
  return $i;
}
var_dump(foo());
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
$db = PDOTest::test_factory(dirname(__FILE__) . '/common.phpt');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_NUM);
var_dump("hello");
$im = ImageCreateTrueColor(10, 10);
imagesavealpha($im, true);
$meta_res = $stmt->result_metadata();
$field = $meta_res->fetch_field();
printf("Charsetnr    : %d\n", $field->charsetnr);
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
var_dump($ffi->bug_gh16013_return_bool());
class Foo {
  public $bar = "bat";
}
$foo = new Foo;
$baz = (float)$foo;
var_dump($baz);
$rc = new ReflectionClass('Foo');
var_dump($rc->getStaticProperties());
checktimeout($s, 500);
var_dump(file_get_contents(__DIR__ . "/bug69279.txt"));
$values = ini_get_all();
foreach ($values as $name => $dsn)
        if ('pdo.dsn.mysql' == $name) {
            printf("pdo.dsn.mysql=%s\n", $dsn);
            $found = true;
            break;
        }
printf("pdo.dsn.mysql=%s\n", $dsn);
$offsets = array(20, 21, 22, 53, 54);
foreach($offsets as $i) {
    echo "\n-- Offset is $i --\n";
    echo "--Multibyte String:--\n";
    try {
        var_dump( mb_strpos($string_mb, $needle, $i, 'UTF-8') );
    } catch (\ValueError $e) {
        echo $e->getMessage() . \PHP_EOL;
    }
    echo"--ASCII String:--\n";
    try {
        var_dump(mb_strpos('This is na English ta', 'a', $i));
    } catch (\ValueError $e) {
        echo $e->getMessage() . \PHP_EOL;
    }
}
var_dump(mb_strpos('This is na English ta', 'a', $i));
