<?php
$conn = odbc_connect($dsn, $user, $pass);
$res = odbc_exec($conn, 'SELECT * FROM bug68087 ORDER BY ID ASC');
$date = odbc_result($res, "DATE_COL");
$datePre = DateTime::createFromFormat("!D d M Y", "Fri 17 may 2011");
$unset_var = 10;
$inner = 'r:2;';
$exploit = 'a:2:{i:0;C:3:"obj":'.strlen($inner).':{'.$inner.'}i:1;C:3:"obj":'.strlen($inner).':{'.$inner.'}}';
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
$bug_gh16013_callback_struct->return_int16 = function($val) use($ffi) {
    $cdata = $ffi->new('int16_t');
    $cdata->cdata = $val;
    return $cdata;
};
function f_0() {
    return 0;
}
function f_1() {
    public function __construct($c)
        {
            $this->b = new C($c);
        }
    public function __construct($c)
        {
            $this->c = $c;
        }
    $this->c = $c;
    $lazy = true;
    $mem = $lazy ? 0 : 1;
    $dyadic = 0.00000000000045474735088646411895751953125;
    $column_def = array('col1 CHAR(1)', 'col2 CHAR(2)','INDEX idx_col1_col2(col1, col2)');
    if (true) {
        $cert = file_get_contents(__DIR__ . "/public.crt");
        $priv = file_get_contents(__DIR__ . "/private.crt");
        $extracert = file_get_contents(__DIR__ . "/cert.crt");
        $pass = "qwerty";
        openssl_pkcs12_export($cert, $p12, $priv, $pass, array('extracerts' => [$extracert, $extracert]));
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
    }
    if (!true) {
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
        $info = opcache_get_status()['interned_strings_usage'];
        var_dump($info['used_memory'] + $info['free_memory']);
    }
}
function f_2() {
    $conn = odbc_connect($dsn, $user, $pass);
    if (true) {
        $bert = "file://" . __DIR__ . "/bug41033.pem";
        $cpca = __DIR__ . "/san-cert.pem";
        $utfl = __DIR__ . "/sni_server_uk.pem";
        var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_SERVER, array($cpca), $utfl));
    }
    if (!true) {
        var_dump(strncmp("test ", "e", -1));
    }
}
function f_3() {
    if (true) {
        return true;
    }
    $oldcwd = getcwd();
    if (true) {
        class testObject extends ArrayObject {
            protected $test;
        
            public function getTest() {
                return $this->test;
            }
        
            public function setTest($test) {
                $this->test = $test;
            }
        }
        $obj = new testObject();
        var_dump($obj->getTest());
    }
    if (!true) {
        $conn = odbc_connect($dsn, $user, $pass);
        $res = odbc_exec($conn, "SELECT * FROM bug80147");
        odbc_fetch_row($res);
    }
}
function f_4() {
    if (true) {
        return serialize($this->data);
    }
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
    class C {
        private $priv1 = 'secret1';
        private $priv2 = 'secret2';
        public $pub1 = 'public1';
        public $pub2 = 'public2';
        public $pub3 = 'public3';
        public $pub4 = 'public4';
    }
    $ao = new ArrayObject(new C);
    $ai = $ao->getIterator();
    $ai->current();
}
function f_5() {
    if (true) {
        return "Class A object";
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
    $ent = sprintf("&#x%X;", $v[0]);
    if (true) {
        $fp = fopen(__DIR__."/test2.csv", "r");
        fclose($fp);
    }
    if (!true) {
        $file = __DIR__ . '/bug38212私はガラスを食べられます.gd2';
        $im1 = imagecreatetruec
        lor(10,100);
        imagefill($im1, 0,0, 0x
        trycatch_dump(
            fn(;
    }
}
class A
{
    use T1;
}
class B extends A
{
    use T2;
}
$b = new B();
$code = '$server = new SoapServer("' . __DIR__ . '"/bug49278.wsdl", ["trace"=>1]);' .
        <<<'PHP'
        function Add() {}
        $server->addFunction('Add');
        $server->handle();
        PHP;
function f_6() {
    return "Class A object";
}
function f_7() {
    #[\AllowDynamicProperties]
    class C {
        public $b;
        public function __construct() {
            $this->a = new Canary();
        }
    }
    $obj = new C();
    var_dump($obj);
    $array = array('f' => "first", "s" => 'second', 1, 2.222);
    $temp_array = $array;
    $flags = array(
            MYSQLI_NOT_NULL_FLAG => 'NOT_NULL',
            MYSQLI_PRI_KEY_FLAG => 'PRI_KEY',
            MYSQLI_UNIQUE_KEY_FLAG => 'UNIQUE_KEY',
            MYSQLI_MULTIPLE_KEY_FLAG => 'MULTIPLE_KEY',
            MYSQLI_BLOB_FLAG => 'BLOB',
            MYSQLI_UNSIGNED_FLAG	=> 'UNSIGNED',
            MYSQLI_ZEROFILL_FLAG => 'ZEROFILL',
            MYSQLI_AUTO_INCREMENT_FLAG => 'AUTO_INCREMENT',
            MYSQLI_TIMESTAMP_FLAG	=> 'TIMESTAMP',
            MYSQLI_SET_FLAG	=> 'SET',
            MYSQLI_NUM_FLAG => 'NUM',
            MYSQLI_PART_KEY_FLAG => 'PART_KEY',
            // MYSQLI_GROUP_FLAG => 'MYSQLI_GROUP_FLAG' - internal usage only
            (defined('MYSQLI_NO_DEFAULT_VALUE_FLAG') ? MYSQLI_NO_DEFAULT_VALUE_FLAG : 4096) => 'NO_DEFAULT_VALUE',
            (defined('MYSQLI_BINARY_FLAG') ? MYSQLI_BINARY_FLAG : 128) => 'BINARY',
            (defined('MYSQLI_ENUM_FLAG') ? MYSQLI_ENUM_FLAG : 256) => 'ENUM',
            // MYSQLI_BINCMP_FLAG
        );
    for ($i_8 = 0; $i_8 < 10; $i_8++) {
        $tbl = "test";
        $sql = "DROP TABLE IF EXISTS $tbl";
        $ch = curl_init();
        var_dump(curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2));
        function test(string $name, object $obj) {
            printf("# %s:\n", $name);
        
            var_dump($obj);
            var_dump($obj->a);
            var_dump($obj);
        }
        $reflector = new ReflectionClass(C::class);
        $obj = $reflector->newLazyGhost(function ($obj) {
            var_dump("initializer");
            $obj->__construct(1);
        });
        test('Ghost', $obj);
        $certificateGenerator = new CertificateGenerator();
        $certificateGenerator->saveCaCert(__DIR__ . "/san-cert.pem");
        $headers = ['Host: okey.com'];
        $httpContext = [
            'http' => [
                'protocol_version'	=> '1.1',
                'method'			=> 'GET',
                'header'			=> &$headers,
                'follow_location'	=> 0,
                'max_redirects'		=> 0,
                'ignore_errors'		=> true,
                'timeout'			=> 60,
            ],
        ];
        $context = stream_context_create($httpContext);
        print_r(stream_context_get_options($context));
        $db = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
        $db->query('DROP PROCEDURE IF EXISTS testSp');
        $GLOBALS['b'] = 2;
        $a = &$GLOBALS['a'];
        $b = &$GLOBALS['b'];
        var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
        $timestamp = mktime(8, 8, 8, 8, 8, 2008);
        $inputs = array(
              // Predefined Date constants
              'DATE_ATOM Constant' => DATE_ATOM,
              'DATE_COOKIE Constant' => DATE_COOKIE,
              'DATE_RFC822 Constant' => DATE_RFC822,
              'DATE_RFC850 Constant' => DATE_RFC850,
              'DATE_RFC1036 Constant' => DATE_RFC1036,
              'DATE_RFC1123 Constant' => DATE_RFC1123,
              'DATE_RFC2822 Constant' => DATE_RFC2822,
              'DATE_RFC3339 Constant' => DATE_RFC3339,
              'DATE_RSS Constant' => DATE_RSS,
              'DATE_W3C Constant' => DATE_W3C,
        );
        foreach($inputs as $key =>$value) {
              echo "\n--$key--\n";
              var_dump( gmdate($value, $timestamp) );
              var_dump( gmdate($value) );
        }
        var_dump( gmdate($value, $timestamp) );
        $cert = "file://" . __DIR__ . "/cert.crt";
        $cpca = __DIR__ . "/san-cert.pem";
        $utfl = __DIR__ . "/sni_server_uk.pem";
        var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_CLIENT, array($cpca), $utfl));
        #[\AllowDynamicProperties]
        class C {
            public $b;
            public function __construct() {
                $this->a = new Canary();
            }
        }
        $obj = new C();
        var_dump($obj);
        printf("# Ghost:\n");
    }
}
