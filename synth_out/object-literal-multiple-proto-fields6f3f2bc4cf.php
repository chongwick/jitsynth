<?php
class C extends stdClass {
    public int $a;
}
class Test implements ArrayAccess {
    public function offsetExists($x): bool { $GLOBALS["obj"] = 24; return true; }
    public function offsetGet($x): mixed { var_dump($x); return 42; }
    public function offsetSet($x, $y): void { }
    public function offsetUnset($x): void { }
}
$obj = new C();
$batch_file_path = __DIR__ . '/ghsa-9fcc-425m-g385_003.bat';
$descriptorspec = [STDIN, STDOUT, STDOUT];
for ($i = 1; $i <= 255; $i++) {
  echo "Testing $i\n";
  try {
    $proc = @proc_open([$batch_file_path . chr($i), "\"&notepad.exe"], $descriptorspec, $pipes, null, null, array("bypass_shell" => true));
    var_dump($proc);
    proc_close($proc);
  } catch (Error) {}
}
$proc = @proc_open([$batch_file_path . chr($i), "\"&notepad.exe"], $descriptorspec, $pipes, null, null, array("bypass_shell" => true));
$index_array = array (1, 2, 3);
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
$x = 2;
$reflector = new ReflectionClass(C::class);
$obj = $reflector->newLazyGhost(function () {
    throw new \Exception('initializer');
});
$db = PDOTest::test_factory(__DIR__ . '/common.phpt');
$stmt = $db->prepare("SELECT 1");
var_dump($stmt->execute([1]));
$obj = new Test;
$name = "foo";
var_dump(empty($obj[$name]));
$cert = "file://" . __DIR__ . "/cert.crt";
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_CLIENT));
$fp = fopen("php://memory", "r+");
fwrite($fp, str_repeat("baad", 1024*1024));
var_dump ( rtrim("rtrim test        ", " ") );
