<?php
function test() {
    $a = 1;
    try {
        return $a;
    } finally {
        $a = 2;
    }
}
function display($res)
{
	echo implode("\n", array_map(fn($row) => implode("\t", $row), $res))."\n";
}
var_dump(getenv("HTTP_X_FORWARDED_FOR"));
$eml = __DIR__ . "/signed.eml";
$empty = "";
var_dump(openssl_pkcs7_verify($eml, 0, $empty));
$document = new \DOMDocument();
var_dump($document->saveHTML());
$doc = new \DOMDocument();
$target = $doc->documentElement->lastChild;
var_dump($target);
$sert = "file://" . __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_SERVER));
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
$cfg .= 'php_admin_value[browscap] = ' . __DIR__ . '/../../../ext/standard/tests/misc/browscap.ini';
$code = <<<EOT
<?php
\$cv = get_browser("Konqueror/2.0")->browser_name_pattern;
var_dump(\$cv);
EOT;
$tester = new FPM\Tester($cfg, $code);
$tester->close();
var_dump(filter_input(INPUT_SERVER, "HTTP_X_FORWARDED_FOR", FILTER_UNSAFE_RAW));
set_error_handler('error_handler');
$im = imagecreatetruecolor(1, 1);
imagescale($im, 1, 1, IMG_BICUBIC_FIXED);
function f_0() {
    $f = __DIR__."/data/test.txt.gz";
    $h = gzopen($f, 'r');
    $x = new SoapClient('http://i_dont_exist.com/some.wsdl');
    $data_comp_func = 'compare_function';
    printf("printf test 28:%2\$02d %1\$2d\n", 1, 2);
    $dom = new DOMDocument;
    var_dump($dom->getElementById('x')?->nodeName);
}
$oIntlDateFormatter = new IntlDateFormatter("en_GB");
var_dump($oIntlDateFormatter->parse('America/Los_Angeles', $offset1));
function f_1() {
    $attr = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4 COLLATE utf8mb4_unicode_ci; SET SESSION sql_mode=traditional',
        PDO::ATTR_STRINGIFY_FETCHES => true,
    ];
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $mysqli = new mysqli("$host:$port", $user, $passwd, $db);
    $tbl = "test";
    $sql = "CREATE TABLE $tbl (bit_column_1 bit(16) NOT NULL) DEFAULT CHARSET=utf8";
    $mysqli->query($sql);
    $db = PDOTest::factory();
    $db->exec("CREATE TABLE test36428 (a VARCHAR(10))");
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
    var_dump($ffi->bug_gh16013_return_short());
    var_dump(test());
}
$halves[0] = $halves[1] = 0;
$halves[(mt_rand(0, $max - 1) >> 1) & 1]++;
$total = 10000;
$halves[0] = $halves[1] = 0;
$halves[(int) (mt_rand(0, $max - 1) / ($max / 2))]++;
printf("%.1f%% vs. %.1f%%\n", 100. * $halves[0] / $total, 100. * $halves[1] / $total);
function f_2() {
    $res = [];
    for ($i_3 = 0; $i_3 < 10; $i_3++) {
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
        $res = html_entity_decode($ent, ENT_QUOTES, 'WINDOWS-1251');
        $res = unpack("H*", $res)[1];
        $c = "assert";
        $c(false);
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
        $arr = array('http'=>
                                array(
                                        'follow_location'=>0,
                                )
                        );
        var_dump(json_decode('{"key":"value", "":"value"}', true));
        $a = new PDO("sqlite::memory:");
        $a->query ("CREATE TABLE test_35336 (a integer primary key, b text)");
        $headers = ["Host: bad.com"];
        $now = new DateTime('2018-11-03 11:34:20.781751');
        $ago = new DateTime('2018-11-03 11:34:20.000000');
        $diff = $now->diff($ago, true);
        var_dump($diff->invert, $diff->s, $diff->f);
        var_dump($args);
        $regex = '/[a-z]/';
        $subject = 'string';
        var_dump(preg_match_all($regex, $subject, 'test'));
        $depth0 = "depth02";
        $depth1 = "depth1";
        $depth2 = "depth2";
        $targetDir = __DIR__ . DIRECTORY_SEPARATOR . $depth0 . DIRECTORY_SEPARATOR . $depth1 . DIRECTORY_SEPARATOR . $depth2;
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
        $ch = curl_init("https://localhost/username");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    }
}
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
display($pdo->query("select * from t2")->fetchAll());
