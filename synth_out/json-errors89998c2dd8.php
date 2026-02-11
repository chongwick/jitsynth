<?php
class P {
    protected function common() {
        throw new Exception('Unreachable');
    }
}
class A extends P {
    public function test(P $sibling) {
        $sibling->common();
    }
}
class B extends P {
    protected function common() {
        echo __METHOD__, "\n";
    }
}
#[AllowDynamicProperties]
class C {
    public $a = 1;
}
class foo1
{
  function __toString() {
    return "Object1";
  }
}
function foo($ref, $alt) {
    unset($GLOBALS['a']);
    unset($GLOBALS['b']);
    $GLOBALS['a'] = 1;
    $GLOBALS['b'] = 2;

    $org_a = $GLOBALS['a'];
    $org_b = $GLOBALS['b'];

    if ($ref) {
        global $a, $b;
    } else {
        /* zval temp_var(NULL); // refcount = 1
         * a = temp_var[x] // refcount = 2
         */
        $a = NULL;
        $b = NULL;
    }

    var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
    echo "--\n";
    if ($alt) {
        $a = &$GLOBALS['a'];
        $b = &$GLOBALS['b'];
    } else {
        extract($GLOBALS, EXTR_REFS);
    }
    var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
    echo "--\n";
    $a = &$GLOBALS['a'];
    $b = &$GLOBALS['b'];
    var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
    echo "--\n";
    $GLOBALS['b'] = 3;
    var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
    echo "--\n";
    $a = 4;
    var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
    echo "--\n";
    $c = $b;
    var_dump($b, $GLOBALS['b'], $c);
    echo "--\n";
    $b = 'x';
    var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b'], $c);
    echo "--\n";
    var_dump($org_a, $org_b);
    echo "----";
    if ($ref) echo 'r';
    if ($alt) echo 'a';
    echo "\n";
}
class classWithToString
{
    public function __toString() {
        return "Class A object";
    }
}
class classWithoutToString
{
}
function &test() {
    try {
        return $a;
    } finally {
        $a = 2;
    }
}
function f_0() {
    try {
        $dom = Dom\HTMLDocument::createFromString(<<<HTML
        <!DOCTYPE html>
        <html>
            <body>
                <svg xmlns="http://www.w3.org/2000/svg" height="1"></svg>
                <math></math>
            </body>
        </html>
        HTML);
        $body = $dom->getElementsByTagName("body")[0];
        var_dump($body->lookupNamespaceURI(""));
        $test_fl = __DIR__ . DIRECTORY_SEPARATOR . md5(uniqid());
        file_put_contents($test_fl, '<?php echo "abc\f\n \n";');
    } catch (Exception $e) {}
    if (true) {
        $ch = curl_init();
        var_dump(curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 1));
    }
}
$arr = array(
0x0402 => array(0x80, "CYRILLIC CAPITAL LETTER DJE"),
0x0403 => array(0x81, "CYRILLIC CAPITAL LETTER GJE"),
0x201A => array(0x82, "SINGLE LOW-9 QUOTATION MARK"),
0x0453 => array(0x83, "CYRILLIC SMALL LETTER GJE"),
0x201E => array(0x84, "DOUBLE LOW-9 QUOTATION MARK"),
0x2026 => array(0x85, "HORIZONTAL ELLIPSIS"),
0x2020 => array(0x86, "DAGGER"),
0x2021 => array(0x87, "DOUBLE DAGGER"),
0x20AC => array(0x88, "EURO SIGN"),
0x2030 => array(0x89, "PER MILLE SIGN"),
0x0409 => array(0x8A, "CYRILLIC CAPITAL LETTER LJE"),
0x2039 => array(0x8B, "SINGLE LEFT-POINTING ANGLE QUOTATION MARK"),
0x040A => array(0x8C, "CYRILLIC CAPITAL LETTER NJE"),
0x040C => array(0x8D, "CYRILLIC CAPITAL LETTER KJE"),
0x040B => array(0x8E, "CYRILLIC CAPITAL LETTER TSHE"),
0x040F => array(0x8F, "CYRILLIC CAPITAL LETTER DZHE"),
0x0452 => array(0x90, "CYRILLIC SMALL LETTER DJE"),
0x2018 => array(0x91, "LEFT SINGLE QUOTATION MARK"),
0x2019 => array(0x92, "RIGHT SINGLE QUOTATION MARK"),
0x201C => array(0x93, "LEFT DOUBLE QUOTATION MARK"),
0x201D => array(0x94, "RIGHT DOUBLE QUOTATION MARK"),
0x2022 => array(0x95, "BULLET"),
0x2013 => array(0x96, "EN DASH"),
0x2014 => array(0x97, "EM DASH"),
//0x98	      	#UNDEFINED
0x2122 => array(0x99, "TRADE MARK SIGN"),
0x0459 => array(0x9A, "CYRILLIC SMALL LETTER LJE"),
0x203A => array(0x9B, "SINGLE RIGHT-POINTING ANGLE QUOTATION MARK"),
0x045A => array(0x9C, "CYRILLIC SMALL LETTER NJE"),
0x045C => array(0x9D, "CYRILLIC SMALL LETTER KJE"),
0x045B => array(0x9E, "CYRILLIC SMALL LETTER TSHE"),
0x045F => array(0x9F, "CYRILLIC SMALL LETTER DZHE"),
0x00A0 => array(0xA0, "NO-BREAK SPACE"),
0x040E => array(0xA1, "CYRILLIC CAPITAL LETTER SHORT U"),
0x045E => array(0xA2, "CYRILLIC SMALL LETTER SHORT U"),
0x0408 => array(0xA3, "CYRILLIC CAPITAL LETTER JE"),
0x00A4 => array(0xA4, "CURRENCY SIGN"),
0x0490 => array(0xA5, "CYRILLIC CAPITAL LETTER GHE WITH UPTURN"),
0x00A6 => array(0xA6, "BROKEN BAR"),
0x00A7 => array(0xA7, "SECTION SIGN"),
0x0401 => array(0xA8, "CYRILLIC CAPITAL LETTER IO"),
0x00A9 => array(0xA9, "COPYRIGHT SIGN"),
0x0404 => array(0xAA, "CYRILLIC CAPITAL LETTER UKRAINIAN IE"),
0x00AB => array(0xAB, "LEFT-POINTING DOUBLE ANGLE QUOTATION MARK"),
0x00AC => array(0xAC, "NOT SIGN"),
0x00AD => array(0xAD, "SOFT HYPHEN"),
0x00AE => array(0xAE, "REGISTERED SIGN"),
0x0407 => array(0xAF, "CYRILLIC CAPITAL LETTER YI"),
0x00B0 => array(0xB0, "DEGREE SIGN"),
0x00B1 => array(0xB1, "PLUS-MINUS SIGN"),
0x0406 => array(0xB2, "CYRILLIC CAPITAL LETTER BYELORUSSIAN-UKRAINIAN I"),
0x0456 => array(0xB3, "CYRILLIC SMALL LETTER BYELORUSSIAN-UKRAINIAN I"),
0x0491 => array(0xB4, "CYRILLIC SMALL LETTER GHE WITH UPTURN"),
0x00B5 => array(0xB5, "MICRO SIGN"),
0x00B6 => array(0xB6, "PILCROW SIGN"),
0x00B7 => array(0xB7, "MIDDLE DOT"),
0x0451 => array(0xB8, "CYRILLIC SMALL LETTER IO"),
0x2116 => array(0xB9, "NUMERO SIGN"),
0x0454 => array(0xBA, "CYRILLIC SMALL LETTER UKRAINIAN IE"),
0x00BB => array(0xBB, "RIGHT-POINTING DOUBLE ANGLE QUOTATION MARK"),
0x0458 => array(0xBC, "CYRILLIC SMALL LETTER JE"),
0x0405 => array(0xBD, "CYRILLIC CAPITAL LETTER DZE"),
0x0455 => array(0xBE, "CYRILLIC SMALL LETTER DZE"),
0x0457 => array(0xBF, "CYRILLIC SMALL LETTER YI"),
0x0410 => array(0xC0, "CYRILLIC CAPITAL LETTER A"),
0x0411 => array(0xC1, "CYRILLIC CAPITAL LETTER BE"),
0x0412 => array(0xC2, "CYRILLIC CAPITAL LETTER VE"),
0x0413 => array(0xC3, "CYRILLIC CAPITAL LETTER GHE"),
0x0414 => array(0xC4, "CYRILLIC CAPITAL LETTER DE"),
0x0415 => array(0xC5, "CYRILLIC CAPITAL LETTER IE"),
0x0416 => array(0xC6, "CYRILLIC CAPITAL LETTER ZHE"),
0x0417 => array(0xC7, "CYRILLIC CAPITAL LETTER ZE"),
0x0418 => array(0xC8, "CYRILLIC CAPITAL LETTER I"),
0x0419 => array(0xC9, "CYRILLIC CAPITAL LETTER SHORT I"),
0x041A => array(0xCA, "CYRILLIC CAPITAL LETTER KA"),
0x041B => array(0xCB, "CYRILLIC CAPITAL LETTER EL"),
0x041C => array(0xCC, "CYRILLIC CAPITAL LETTER EM"),
0x041D => array(0xCD, "CYRILLIC CAPITAL LETTER EN"),
0x041E => array(0xCE, "CYRILLIC CAPITAL LETTER O"),
0x041F => array(0xCF, "CYRILLIC CAPITAL LETTER PE"),
0x0420 => array(0xD0, "CYRILLIC CAPITAL LETTER ER"),
0x0421 => array(0xD1, "CYRILLIC CAPITAL LETTER ES"),
0x0422 => array(0xD2, "CYRILLIC CAPITAL LETTER TE"),
0x0423 => array(0xD3, "CYRILLIC CAPITAL LETTER U"),
0x0424 => array(0xD4, "CYRILLIC CAPITAL LETTER EF"),
0x0425 => array(0xD5, "CYRILLIC CAPITAL LETTER HA"),
0x0426 => array(0xD6, "CYRILLIC CAPITAL LETTER TSE"),
0x0427 => array(0xD7, "CYRILLIC CAPITAL LETTER CHE"),
0x0428 => array(0xD8, "CYRILLIC CAPITAL LETTER SHA"),
0x0429 => array(0xD9, "CYRILLIC CAPITAL LETTER SHCHA"),
0x042A => array(0xDA, "CYRILLIC CAPITAL LETTER HARD SIGN"),
0x042B => array(0xDB, "CYRILLIC CAPITAL LETTER YERU"),
0x042C => array(0xDC, "CYRILLIC CAPITAL LETTER SOFT SIGN"),
0x042D => array(0xDD, "CYRILLIC CAPITAL LETTER E"),
0x042E => array(0xDE, "CYRILLIC CAPITAL LETTER YU"),
0x042F => array(0xDF, "CYRILLIC CAPITAL LETTER YA"),
0x0430 => array(0xE0, "CYRILLIC SMALL LETTER A"),
0x0431 => array(0xE1, "CYRILLIC SMALL LETTER BE"),
0x0432 => array(0xE2, "CYRILLIC SMALL LETTER VE"),
0x0433 => array(0xE3, "CYRILLIC SMALL LETTER GHE"),
0x0434 => array(0xE4, "CYRILLIC SMALL LETTER DE"),
0x0435 => array(0xE5, "CYRILLIC SMALL LETTER IE"),
0x0436 => array(0xE6, "CYRILLIC SMALL LETTER ZHE"),
0x0437 => array(0xE7, "CYRILLIC SMALL LETTER ZE"),
0x0438 => array(0xE8, "CYRILLIC SMALL LETTER I"),
0x0439 => array(0xE9, "CYRILLIC SMALL LETTER SHORT I"),
0x043A => array(0xEA, "CYRILLIC SMALL LETTER KA"),
0x043B => array(0xEB, "CYRILLIC SMALL LETTER EL"),
0x043C => array(0xEC, "CYRILLIC SMALL LETTER EM"),
0x043D => array(0xED, "CYRILLIC SMALL LETTER EN"),
0x043E => array(0xEE, "CYRILLIC SMALL LETTER O"),
0x043F => array(0xEF, "CYRILLIC SMALL LETTER PE"),
0x0440 => array(0xF0, "CYRILLIC SMALL LETTER ER"),
0x0441 => array(0xF1, "CYRILLIC SMALL LETTER ES"),
0x0442 => array(0xF2, "CYRILLIC SMALL LETTER TE"),
0x0443 => array(0xF3, "CYRILLIC SMALL LETTER U"),
0x0444 => array(0xF4, "CYRILLIC SMALL LETTER EF"),
0x0445 => array(0xF5, "CYRILLIC SMALL LETTER HA"),
0x0446 => array(0xF6, "CYRILLIC SMALL LETTER TSE"),
0x0447 => array(0xF7, "CYRILLIC SMALL LETTER CHE"),
0x0448 => array(0xF8, "CYRILLIC SMALL LETTER SHA"),
0x0449 => array(0xF9, "CYRILLIC SMALL LETTER SHCHA"),
0x044A => array(0xFA, "CYRILLIC SMALL LETTER HARD SIGN"),
0x044B => array(0xFB, "CYRILLIC SMALL LETTER YERU"),
0x044C => array(0xFC, "CYRILLIC SMALL LETTER SOFT SIGN"),
0x044D => array(0xFD, "CYRILLIC SMALL LETTER E"),
0x044E => array(0xFE, "CYRILLIC SMALL LETTER YU"),
0x044F => array(0xFF, "CYRILLIC SMALL LETTER YA"),
);
foreach ($arr as $u => $v) {
    $ent = sprintf("&#x%X;", $u);
    $res = html_entity_decode($ent, ENT_QUOTES, 'WINDOWS-1251');
    $d = unpack("H*", $res);
    echo sprintf("%s: %s => %s\n", $v[1], $ent, $d[1]);

    $ent = sprintf("&#x%X;", $v[0]);
    $res = html_entity_decode($ent, ENT_QUOTES, 'WINDOWS-1251');
    if ($res[0] != "&" || $res[1] != "#")
        $res = unpack("H*", $res)[1];
    echo sprintf("%s => %s\n\n", $ent, $res);
}
$ent = sprintf("&#x%X;", $u);
$a = new A();
$a->test(new B());
$c = new C();
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
$object2 = new foo1();
$data = array('first', 'fifth', 'second', 'forth', 'third');
$sort = array(1, 5, 2, 4, 3);
array_multisort($sort, $data);
$wrong = "wrong";
$filename = __DIR__ . '/bug77432.phar';
$phar = new Phar($filename);
$phar->stopBuffering();
$host = PHP_CLI_SERVER_HOSTNAME;
foo(false, false);
$f = __DIR__."/data/test.txt.gz";
$o = new C;
$o->foo();
$x = new SoapClient('http://i_dont_exist.com/some.wsdl');
print_r($str_instead);
$ok = false;
$compression = [
    'gz' => ['zlib.deflate', 'gzinflate'],
    'bz2' => ['bzip2.compress', 'bzdecompress']
];
foreach ($compression as $ext => [$filter, $function]) {
    $stream = fopen(__DIR__ . "/75776.$ext", 'w');
    stream_filter_append($stream, $filter);
    fwrite($stream,"sdfgdfg");
    fflush($stream);
    fclose($stream);

    $compressed = file_get_contents(__DIR__ . "/75776.$ext");
    var_dump($function($compressed));
}
$stream = fopen(__DIR__ . "/75776.$ext", 'w');
fflush($stream);
$arrays = array (
  array( 0 ),
  range(1, 100 ),
  range('a', 'z', 2 ),
  array("a" => "A", 2 => "B", "C" => 3, 4 => 4, "one" => 1, "" => NULL ),
  array(1, array(1, 2 => 3 ), "one" => 1, "5" => 5 ),
  array(-1, -2, -3, -4, "-0.005" => "neg0.005", 2.0 => "float2", "neg.9" => -.9 ),
  array(1.0005, 2.000000, -3.000000, -4.9999999 ),
  array(true, false),
  array("PHP", "Web2.0", "SOA"),
  array(1, array() ),
  array(1, 2, "" ),
  array(" "),
  array(2147483647, 2147483648, -2147483647, -2147483648 ),
  array(0x7FFFFFFF, -0x80000000, 017777777777, -020000000000 ),
  array(-.6700000E+3, -4.10003E+3, 1e-5, -1E+5, 000002.00 )
);
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
$bug_gh16013_callback_struct->return_float = function($val) use($ffi) {
    $cdata = $ffi->new('float');
    $cdata->cdata = $val;
    return $cdata;
};
var_dump(($bug_gh16013_callback_struct->return_float)(12.34));
$db = PDOTest::factory();
$insert = $db->prepare("insert into test34630 (id, val) values (1, :blob)");
$cert = "file://" . __DIR__ . "/cert.crt";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_NS_SSL_SERVER, array($cpca), $utfl));
$arr = array('http'=>
                        array(
                                'follow_location'=>1,
                        )
                );
printf("[002] Connect failed, [%d] %s\n", mysqli_connect_errno(), mysqli_connect_error());
$file_path = __DIR__;
$array1 = array(1, 2);
$data_compare_func = 'compare_function';
$key_compare_func = 'compare_function';
$unset_var = 10;
$heredoc = <<<EOT
hello world
EOT;
$inputs = array(

      // int data
      'int 0' => 0,
      'int 1' => 1,
      'int 12345' => 12345,
      'int -12345' => -2345,

      // float data
      'float 10.5' => 10.5,
      'float -10.5' => -10.5,
      'float 12.3456789000e10' => 12.3456789000e10,
      'float -12.3456789000e10' => -12.3456789000e10,
      'float .5' => .5,

      // null data
      'uppercase NULL' => NULL,
      'lowercase null' => null,

      // boolean data
      'lowercase true' => true,
      'lowercase false' =>false,
      'uppercase TRUE' =>TRUE,
      'uppercase FALSE' =>FALSE,

      // empty data
      'empty string DQ' => "",
      'empty string SQ' => '',

      // string data
      'string DQ' => "string",
      'string SQ' => 'string',
      'mixed case string' => "sTrInG",
      'heredoc' => $heredoc,

      // object data
      'instance of classWithToString' => new classWithToString(),
      'instance of classWithoutToString' => new classWithoutToString(),

      // undefined data
      'undefined var' => @$undefined_var,

      // unset data
      'unset var' => @$unset_var,
);
foreach($inputs as $key =>$value) {
    echo "\n--$key--\n";
    try {
        var_dump( array_uintersect_uassoc($array1, $value, $data_compare_func, $key_compare_func) );
    } catch (TypeError $e) {
        echo $e->getMessage(), "\n";
    }
}
var_dump( array_uintersect_uassoc($array1, $value, $data_compare_func, $key_compare_func) );
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
$special_chars_str = <<<EOD
Example of heredoc string contains
$#%^*&*_("_")!#@@!$#$^^&*(special)
chars.
EOD;
$heredoc_needle = <<<EOD
^^&*(
EOD;
$needles = array(
  "!@@!",
  '_',
  '("_")',
  "$*",
  "(special)",
  $heredoc_needle,  //needle as heredoc string
  $special_chars_str  //needle as haystack
);
foreach($needles as $needle) {
  var_dump( strrchr($special_chars_str, $needle) );
}
var_dump( strrchr($special_chars_str, $needle) );
$quote_char_string = <<<EOT
<html>&lt; This's a string with quotes:
"strings in double quote" &amp;
'strings in single quote' &quot;
this\line is &#039;single quoted&#039; /with\slashes </html>
EOT;
var_dump(test());
$arr = array('http'=>
                        array(
                                'follow_location'=>1,
                        )
                );
$fp = php_cli_server_connect();
fclose($fp);
