<?php
function f_0() {
    return [(array)$this];
}
function f_1() {
    $before = memory_get_usage();
    $columns = array(
            'INT DEFAULT NULL' => 'NUM',
            'INT NOT NULL' => 'NOT_NULL NO_DEFAULT_VALUE NUM',
            'INT NOT NULL DEFAULT 1' => 'NOT_NULL NUM',
            'INT UNSIGNED DEFAULT NULL' => 'UNSIGNED NUM',
            'INT UNSIGNED NOT NULL'	=> 'NOT_NULL UNSIGNED NO_DEFAULT_VALUE NUM',
            'INT UNSIGNED NOT NULL DEFAULT 1' => 'NOT_NULL UNSIGNED NUM',
            'INT UNSIGNED ZEROFILL DEFAULT NULL' => 'UNSIGNED ZEROFILL NUM',
            'INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY' => 'NOT_NULL PRI_KEY UNSIGNED AUTO_INCREMENT NUM PART_KEY',
            'CHAR(1) DEFAULT NULL'	=> '',
            'CHAR(1) NOT NULL' => 'NOT_NULL NO_DEFAULT_VALUE',
            'VARBINARY(127) DEFAULT NULL' => 'BINARY',
            'BLOB'	=> 'BLOB BINARY',
            'TINYBLOB'	=> 'BLOB BINARY',
            'MEDIUMBLOB'	=> 'BLOB BINARY',
            'LONGBLOB'	=> 'BLOB BINARY',
            'TEXT'	=> 'BLOB',
            'TINYTEXT'	=> 'BLOB',
            'MEDIUMTEXT'	=> 'BLOB',
            'LONGTEXT'	=> 'BLOB',
            'SET("one", "two")'	=> 'SET',
            'SET("one", "two") NOT NULL'	=> 'NOT_NULL SET NO_DEFAULT_VALUE',
            'SET("one", "two") NOT NULL DEFAULT "one"'	=> 'NOT_NULL SET',
            'ENUM("one", "two")'	=> 'ENUM',
            'ENUM("one", "two") NOT NULL' => 'NOT_NULL ENUM NO_DEFAULT_VALUE',
            'ENUM("one", "two") NOT NULL DEFAULT "one"' => 'NOT_NULL ENUM',
            'TINYINT UNIQUE' => 'UNIQUE_KEY NUM PART_KEY',
            'SMALLINT UNIQUE' => 'UNIQUE_KEY NUM PART_KEY',
            'MEDIUMINT UNIQUE DEFAULT 1' => 'UNIQUE_KEY NUM PART_KEY',
            'BIGINT UNSIGNED UNIQUE DEFAULT 100' => 'UNIQUE_KEY UNSIGNED NUM PART_KEY',
            'BIT' => 'UNSIGNED',
            'VARCHAR(2) NOT NULL PRIMARY KEY' => 'NOT_NULL PRI_KEY NO_DEFAULT_VALUE PART_KEY'
        );
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
    $date_format = DATE_RFC2822;
    $data = ["k" => 0, 1, 2, 3];
    $unset_var = 10;
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
        $stmt = $pdo->prepare("select :1 n union all select :1 + 1 union all select :1 + 2 union all select :1 + 3");
        $res = [];
        $res[] = $stmt->fetch();
        $eml = __DIR__ . "/signed.eml";
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
        public function bar(&$a, &$b, $c) {
                Legacy::bar($a, $b, $c);
            }
        public function callback(&$a, &$b, $c) {
                $b = 1;
            }
        $b = 1;
        public function bar(&$a, &$b, $c) {
                $arguments = array($a, $b, $c);
                $result = $this->inv_mocker->invoke(
                    new PHPUnit_Framework_MockObject_Invocation_Static(
                        $arguments
                    )
                );
                return $result;
            }
        $a = $b = $c = 0;
        $date1 = new DateTime("Tuesday");
        global $user, $host, $passwd, $db, $port, $socket;
        $this->mysqli = new mysqli($host, $user, $passwd, $db, $port, $socket);
        $result = $this->mysqli->query("SELECT NOW() AS my_time FROM DUAL");
        $strB = 'test & test';
        $response = ob_get_contents();
        public function bar(&$a, &$b, $c) {
                Legacy::bar($a, $b, $c);
            }
        public function callback(&$a, &$b, $c) {
                $b = 1;
            }
        $b = 1;
        public function bar(&$a, &$b, $c) {
                $arguments = array($a, $b, $c);
                $result = $this->inv_mocker->invoke(
                    new PHPUnit_Framework_MockObject_Invocation_Static(
                        $arguments
                    )
                );
                return $result;
            }
        $arguments = array($a, $b, $c);
        function createDB(): PDO {
            $db = MySQLPDOTest::factory();
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            return $db;
        }
        $db = createDB();
        $ninety = M_PI /2.0;
        $offset = 'teststring';
        public function __construct($c)
            {
                $this->b = new C($c);
            }
        $this->b = new C($c);
        class C
        {
            public $c;
        
            public function __construct($c)
            {
                $this->c = $c;
            }
        };
        $pass = "qwerty";
        class Foo {
          public $bar = "bat";
        }
        $foo = new Foo;
        $baz = (float)$foo;
        $test = array(
          'a' => 1,
          'b' => 2,
          'c' => 3,
          'd' => 4,
        );
        $a[0] = &$a;
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
        $arr  = array("test");
        list($a,$b) = is_array($arr)? $arr : $arr;
        $curl = curl_init("http://www.google.com");
        $depth0 = "depth02";
        $reqOfBig = 'select * from t';
        public function bar(&$a, &$b, $c) {
                Legacy::bar($a, $b, $c);
            }
        public function callback(&$a, &$b, $c) {
                $b = 1;
            }
        $b = 1;
        public function bar(&$a, &$b, $c) {
                $arguments = array($a, $b, $c);
                $result = $this->inv_mocker->invoke(
                    new PHPUnit_Framework_MockObject_Invocation_Static(
                        $arguments
                    )
                );
                return $result;
            }
        $arguments = array($a, $b, $c);
        $args = ["-d", "extension_dir=" . ini_get("extension_dir"), "-d", "extension=" . (substr(PHP_OS, 0, 3) == "WIN" ? "php_" : "") . "soap." . PHP_SHLIB_SUFFIX];
        $args[] = php_ini_loaded_file();
        $tests = array(
            'noon', 'midnight'
        );
        foreach ($tests as $test) {
            $t = strtotime("2005-12-22 ". $test);
            printf("%-10s => %s\n", $test, date(DATE_ISO8601, $t));
        }
        $t = strtotime("2005-12-22 ". $test);
        $headers = ["Host: bad.com"];
        class D {
            public string $prop;
        }
        $d = new D();
        $d->prop = 'foo';
        $before = memory_get_usage();
        $link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
        $res = $link->use_result();
        $attrs = [];
        $reflection = new ReflectionClass('\DateTimeImmutable');
        $immutable = $reflection->newInstanceWithoutConstructor();
        $mutable = \DateTime::createFromInterface($immutable);
        $db = PDOTest::factory();
        $counter = 1;
        $ar1 = array("row1" => 2, "row2" => 1);
        $args = array(&$ar1);
        $document = new \DOMDocument();
        $h1 = $document->getElementsByTagName('h1');
        $insert = null;
        class myClass
        {
          var       $foo_object;
          public    $public_var;
          public    $public_var1;
          private   $private_var;
          protected $protected_var;
        
          function __construct ( ) {
            $this->foo_object = new foo();
            $this->public_var = 10;
            $this->public_var1 = new foo();
            $this->private_var = new foo();
            $this->protected_var = new foo();
          }
        }
        $myClass_object = new myClass();
        $array_object = array();
        $containers = array();
        global $containers;
        global $containers;
        $containers[spl_object_hash($this)] = NULL;
        );
        if (!$reader->open($fil
        ttribute('idx');
                    echo $reade;
        $tz_aus = new DateTimeZone('Australia/Sydney');
        $GLOBALS['a'] = 1;
        $unset_var = 10;
        $dt = DateTime::createFromFormat('Y-m-d|', '2011-02-02');
        $unset_var = 10;
        class classWithToString
        {
            public function __toString() {
                return "Class A object";
            }
        }
        class classWithoutToString
        {
        }
        $heredoc = <<<EOT
        hello world
        EOT;
        $index_array = array (1, 2, 3);
        $assoc_array = array ('one' => 1, 'two' => 2);
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
        
              // array data
              'empty array' => array(),
              'int indexed array' => $index_array,
              'associative array' => $assoc_array,
              'nested arrays' => array('foo', $index_array, $assoc_array),
        
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
        $responses = array(
            "data://text/plain,HTTP/1.1 200 Some very long reason-phrase to test that this is properly handled by our code without adding a new header like  Bad: Header\r\nGood: Header\r\n\r\nBody",
            "data://text/plain,HTTP/1.1 200 \r\nGood: Header\r\n\r\nBody",
        );
        c1::$a3[] = 1;
        foreach ($offsets as $dimension) {
            $container = false;
            $error = 'false[' . zend_test_var_export($dimension) . '] has different outputs' . "\n";
        
            include $var_dim_filename;
            $varOutput = ob_get_contents();
            ob_clean();
            $varOutput = str_replace(
                [$var_dim_filename],
                ['%s'],
                $varOutput
            );
        
            if (
                !preg_match($EXPECTED_OUTPUT_VALID_OFFSETS_REGEX, $varOutput)
                && !preg_match($EXPECTED_OUTPUT_INVALID_OFFSETS_REGEX, $varOutput)
                && !preg_match($EXPECTED_OUTPUT_FLOAT_OFFSETS_REGEX, $varOutput)
                && $varOutput !== EXPECTED_OUTPUT_RESOURCE_STDERR_OFFSETS
            ) {
                file_put_contents(__DIR__ . DIRECTORY_SEPARATOR . "debug_false_container_{$failuresNb}.txt", $varOutput);
                ++$failuresNb;
                $failures[] = $error;
            }
            ++$testCasesTotal;
        }
        $error = 'false[' . zend_test_var_export($dimension) . '] has different outputs' . "\n";
        $depth2 = "depth2";
        $rows = array();
        public function __construct($b)
                {
                    global $y;
                    $y++;
        
                    $this->foo = self::A + $b;
                }
        $this->foo = self::A + $b;
        $i=0;
        $offset = 'teststring';
        $ref = &$offset;
        function test(object $obj) {
                $obj->a = 1;
            }
        $reflector = new ReflectionClass(C::class);
        $obj = $reflector->newLazyGhost(function ($obj) {
                var_dump("initializer");
                $obj->__construct();
            });
        $g = 1;
        function throw_exc() {
          throw new Exception('TEST_EXCEPTION');
        }
        class Test {
        
          public function __construct() {
            echo 'Constr' ."\n";
          }
        
          public function __destruct() {
            echo 'Destr' ."\n";
          }
        
        }
        $T =new Test(throw_exc());
        $sql = '
            SET NOCOUNT ON
            SELECT 0 AS [result]
        ';
        $a = date_create("2009-01-01", null);
        $meta = mysqli_fetch_fields($res);
        $meta = $meta[0];
        $f_base = "67647私はガラスを食べられます.mov";
        $f = __DIR__ . DIRECTOR;
        $timestamp = "2005-11-08T11:22:07+03:00";
        function __doRequest($request, $location, $action, $version, $one_way = 0): string {
            echo "$request\n";
            ob_start();
            $this->server->handle($request);
            $response = ob_get_contents();
            ob_end_clean();
            return $response;
          }
        $logOnEvent = new LogOnEvent(34567, $timestamp);
        class LogOnEvent {
          public $audienceMemberId;
          public $timestamp;
        
          function __construct($audienceMemberId, $timestamp) {
            $this->audienceMemberId = $audienceMemberId;
            $this->timestamp = $timestamp;
          }
        }
        function __construct($version, $activityId, $messageId, $source, $logOnEvent=NULL, $logOffEvent=NULL) {
            $this->version = $version;
            $this->activityId = $activityId;
            $this->messageId = $messageId;
            $this->source = $source;
            $this->logOnEvent = $logOnEvent;
            $this->logOffEvent = $logOffEvent;
          }
        $this->version = $version;
        $tStamp = mktime (17, 17, 17, 10, 27, 2004);
        class cr {
            private $priv_member;
            function __construct($val) {
                $this->priv_member = $val;
            }
            static function comp_func_cr($a, $b) {
                if ($a->priv_member === $b->priv_member) return 0;
                return ($a->priv_member > $b->priv_member) ? 1 : -1;
            }
            static function comp_func_cr2($a, $b) {
                echo ".";
                if ($a->priv_member === $b->priv_member) return 0;
                return ($a->priv_member < $b->priv_member) ? 1 : -1;
            }
            function dump() {
                echo $this->priv_member . "\n";
            }
        }
        $a = array("0.1" => new cr(9), "0.5" => new cr(12), 0 => new cr(23), 1 => new cr(4), 2 => new cr(-15),);
        $b = array("0.2" => new cr(9), "0.5" => new cr(22), 0 => new cr(3), 1 => new cr(4), 2 => new cr(-15),);
        $result = array_udiff_assoc($a, $b, array("cr", "comp_func_cr"));
        $reflection = new ReflectionClass('\DateTime');
        $mutable = $reflection->newInstanceWithoutConstructor();
        $immutable = \DateTimeImmutable::createFromMutable($mutable);
        $a = date_create("2009-01-01", null);
        $dbConnection = new Com('ADODB.Connection');
        $readonly_anon = new readonly class {
            public int $field;
            function __construct() {
                $this->field = 2;
            }
        };
        $x = new SoapClient('http://i_dont_exist.com/some.wsdl');
        $php = getenv('TEST_PHP_EXECUTABLE_ESCAPED');
        $db = MySQLPDOTest::factory();
        $stmt = $db->prepare('SELECT * FROM test_33689');
        $tmp = $stmt->getColumnMeta(0);
        $fp = fopen (__FILE__, "r");
        $dfp = opendir ( __DIR__ );
        $unset_array = array(10);
        $varient_arrays = array (
          /* integers */
          543915,
          -5322,
          0x55F,
          -0xCCF,
          123,
          -0654,
        
          /* strings */
          "",
          '',
          "0",
          '0',
          'string',
          "string",
        
          /* floats */
          10.0000000000000000005,
          .5e6,
          -.5E7,
          .5E+8,
          -.5e+90,
          1e5,
        
          /* objects */
          new stdclass,
        
          /* resources */
          $fp,
          $dfp,
        
          /* nulls */
          null,
          NULL,
        
          /* boolean */
          true,
          TRUE,
          FALSE,
          false,
        
          /* unset/undefined arrays  */
          @$unset_array,
          @$undefined_array
        );
    }
    return new Exception;
}
function f_3() {
    return $i;
}
function f_4() {
    return;
}
function f_5() {
    public function getHash($object): string { return get_class($object); }
    return get_class($object);
}
function f_6() {
    public function invoke($invocation) {
            return call_user_func_array($this->callback, $invocation->parameters);
        }
    public function invoke( $invocation) {
            foreach ($this->matchers as $match) {
                $match->invoked($invocation);
            }
        }
    public function invoked($invocation) {
            return $this->stub->invoke($invocation);
        }
    return $this->stub->invoke($invocation);
}
function f_7() {
    $response = ob_get_contents();
    return $response;
}
function f_8() {
    $test = array(
      'a' => 1,
      'b' => 2,
      'c' => 3,
      'd' => 4,
    );
    global $user, $host, $passwd, $db, $port, $socket;
    global $user, $host, $passwd, $db, $port, $socket;
    $this->mysqli = new mysqli($host, $user, $passwd, $db, $port, $socket);
    $result = $this->mysqli->query("SELECT NOW() AS my_time FROM DUAL");
    $row = $result->fetch_object();
    return [];
}
function f_9() {
    return false;
}
function f_10() {
    $document = new \DOMDocument();
    $trace_file = '/tmp/mysqli_debug_phpt.trace';
    for ($i_11 = 0; $i_11 < 10; $i_11++) {
        $dbh = @pg_connect($conn_str);
        $res = pg_query($dbh, 'SET client_min_messages TO NOTICE;');
    }
    return 0;
}
function f_12() {
    $host = curl_cli_server_start();
    class A {
        private static $x = 1;
    }
    class C extends A {
        function bar() {
            var_dump(A::$x);
        }
    }
    $b = new C;
    for ($i_13 = 0; $i_13 < 10; $i_13++) {
        $date1 = DateTime::createFromFormat("!D d M Y", "Sat 19 November 2011");
    }
    return new stdClass();
}
$a[1] = 5;
for ($i_14 = 0; $i_14 < 10; $i_14++) {
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
    $obj2 = unserialize(serialize($obj));
}
var_dump(ini_get('mysqlnd.debug'));
function byVal($arg) {
    var_dump($arg);
}
var_dump($arg);
