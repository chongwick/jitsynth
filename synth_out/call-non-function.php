<?php
function f_0() {
    $strA = 'test &amp; test';
    try {
        $im = imagecreate(800, 800);
        imagecolorallocate($im, 255, 255, 255);
    } catch (Exception $e) {}
    if (true) {
        $fn = "bug71263.bz2";
        unlink($fn);
    }
    try {
        $db = MySQLPDOTest::factory();
        var_dump($db->query('SELECT * FROM test_33689'));
    } catch (Exception $e) {}
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
        $bug_gh16013_callback_struct->return_int8 = function($val) use($ffi) {
            $cdata = $ffi->new('int8_t');
            $cdata->cdata = $val;
            return $cdata;
        };
        var_dump(($bug_gh16013_callback_struct->return_int8)(-4));
    }
    $link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
    $link->close();
    register_shutdown_function(function (): void {
        foreach (get_resources() as $res) {
            if (get_resource_type($res) === 'persistent stream') {
                echo "ERROR: persistent stream not closed\n";
                return;
            }
        }
        echo "OK: persistent stream closed\n";
    });
}
$test_array = array(1, array(1 => "one", "two" => 2, "" => "f") );
var_dump( end($test_array) );
function test(string $name, object $obj) {
    printf("# %s:\n", $name);

    var_dump($obj);
    var_dump(@$obj->dynamic++);
    var_dump($obj);
}
var_dump($obj);
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
$prefix . "フォルダ";

mkdir($prefi
mdir($prefi;
catch (\Exception $e) {
    printf("%s: %s\n", $e::class, $e->getMessage());
}
catch (\Exception $e) {
    printf("%s: %s\n", $e::class, $e->getMessage());
}
catch (\Exception $e) {
    printf("%s: %s\n", $e::class, $e->getMessage());
}
printf("%s: %s\n", $e::class, $e->getMessage());
$ch = curl_init();
$fp = fopen(PHP_OS_FAMILY === 'Windows' ? 'nul' : '/dev/null', 'w');
curl_setopt($ch, CURLOPT_FILE, $fp);
$reflector = new ReflectionClass(C::class);
function f_1() {
    class A {
        public $a;
    }
    $a = new A();
    $b = new A();
    $prop = new ReflectionProperty($b, 'dyn');
    $prop->setRawValue($a, 1);
}
$various_arrays = array (
  array(5 => 55,  66, 22, 33, 11),
  array ("a" => "orange",  "banana", "c" => "apple"),
  array(1, 2, 3, 4, 5, 6),
  array("first", 5 => "second", "third"),
  array(1, 1, 8 => 1,  4 => 1, 19, 3 => 13),
  array('bar' => 'baz', "foo" => 1),
  array('a'=>1,'b'=>array('e'=>2,'f'=>3),'c'=>array('g'=>4),'d'=>5),
);
foreach ($various_arrays as $array) {
  echo "\n-- Iteration $count --\n";

  echo "- With default sort_flag -\n";
  $temp_array = $array;
  var_dump(asort($temp_array) );
  var_dump($temp_array);

  echo "- Sort_flag = SORT_REGULAR -\n";
  $temp_array = $array;
  var_dump(asort($temp_array, SORT_REGULAR) );
  var_dump($temp_array);
  $count++;
}
$temp_array = $array;
var_dump(asort($temp_array, SORT_REGULAR) );
$cert = "file://" . __DIR__ . "/cert.crt";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_SERVER, array($cpca), $utfl));
$dbh = @pg_connect($conn_str);
$res = pg_query($dbh, 'SELECT test_notice()');
pg_free_result($res);
ob_start();
