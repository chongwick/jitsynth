<?php
function f_0() {
    public function setVal ($name, $val);
    public function setVal ( $name, $val ) {
        $this->vars[$name] = $val;
      }
    $this->vars[$name] = $val;
    $b = "30";
    function & test($arg) {
        return $arg;
    }
    $arg = new Stdclass();
    test($arg)->name[1] = "xxxx";
    $varOutput = ob_get_contents();
    $array = [];
    $db = PDOTest::test_factory(dirname(__FILE__) . '/common.phpt');
    $db = MySQLPDOTest::factory();
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
    $tStamp = mktime (17, 17, 17, 10, 27, 2004);
    class A
    {
        public string $prop;
    }
    class B
    {
        public function __toString()
        {
            global $a;
            $a = null;
            return str_repeat('a', 1);
        }
    }
    $a = new A();
    $a->prop = new B();
    $f = __DIR__."/data/test.txt.gz";
    $h = gzopen($f, 'r');
    $filename = "bug51997.bz2";
    class A
    {
        use T1;
    }
    class B extends A
    {
        use T2;
    }
    $b = new B();
    $timestamp = "2005-11-08T11:22:07+03:00";
    function __construct($audienceMemberId, $timestamp, $smokeStatus) {
        $this->audienceMemberId = $audienceMemberId;
        $this->timestamp = $timestamp;
        $this->smokeStatus = $smokeStatus;
        $this->callInitiator = "IVR";
      }
    function __construct($audienceMemberId, $timestamp) {
        $this->audienceMemberId = $audienceMemberId;
        $this->timestamp = $timestamp;
      }
    $this->audienceMemberId = $audienceMemberId;
    $reflection = new ReflectionClass('\DateTime');
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
    $filename = "bug51997.bz2";
    $bz = bzopen($filename, "w");
    global $user, $host, $passwd, $db, $port, $socket;
    global $user, $host, $passwd, $db, $port, $socket;
    $this->mysqli = new mysqli($host, $user, $passwd, $db, $port, $socket);
    $result = $this->mysqli->query("SELECT NOW() AS my_time FROM DUAL");
    $row = $result->fetch_object();
    $pass = "qwerty";
    $after = memory_get_usage();
    class MySQL_Ext extends mysqli{
        protected $fooData = array();
        private $extData;
    
        public function isEmpty()
        {
            $this->extData[] = 'Bar';
            return empty($this->extData);
        }
    }
    $MySQL_Ext = new MySQL_Ext($host, $user, $passwd, $db, $port, $socket);
    $isEmpty = $MySQL_Ext->isEmpty();
    $reflection = new ReflectionClass('\DateTime');
    $mutable = $reflection->newInstanceWithoutConstructor();
    $dateperiod = (new ReflectionClass(DatePeriod::class))->newInstanceWithoutConstructor();
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt', Pdo::class, false);
    $style = array();
    $i = 0;
    $style[$i++] = IMG_COLOR_TRANSPARENT;
    $unset_array = array(10);
    $fp = fopen("php://memory", "r+");
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
    $prefixed = $body->appendChild($dom->createElementNS("urn:a", "a:a"));
    class FooBar implements ArrayAccess {
        private $array = array();
    
        public function offsetExists($index): bool {
            return isset($this->array[$index]);
        }
    
        public function offsetGet($index): mixed {
            return $this->array[$index];
        }
    
        public function offsetSet($index, $value): void {
            echo __METHOD__ . "($index, $value)\n";
            $this->array[$index] = $value;
        }
    
        public function offsetUnset($index): void {
            throw new Exception('FAIL');
            unset($this->array[$index]);
        }
    
    }
    $i = 0;
    $j = 0;
    $foo = new FooBar();
    $foo[$j++] = $i++;
    $tmpFileIn = tempnam(sys_get_temp_dir(), 'test');
    $plain = "The quick brown fox jumps over the lazy dog.";
    $compressed = (string) bzcompress($plain);
    $compressed[strlen($compressed) - 15] = 'X';
    $xml =<<<EOF
    <xml>
    <fieldset1>
    </fieldset1>
    <fieldset2>
    <options>
    </options>
    </fieldset2>
    </xml>
    EOF;
    $sxe = new SimpleXMLIterator($xml);
    class foo extends SplFixedArray {
        public function __construct($size) {
        }
    }
    $x = new foo(2);
    $descriptorspec = [STDIN, STDOUT, STDOUT];
    $unset_var = 10;
    $values = array(
    
          // int data
          0,
          1,
          12345,
          -2345,
    
          // float data
          10.5,
          -10.5,
          10.1234567e10,
          10.7654321E-10,
          .5,
    
          // array data
          array(),
          array(0),
          array(1),
          array(1, 2),
          array('color' => 'red', 'item' => 'pen'),
    
          // null data
          NULL,
          null,
    
          // boolean data
          true,
          false,
          TRUE,
          FALSE,
    
          // empty data
          "",
          '',
    
          // string data
          "string",
          'string',
    
          // undefined data
          $undefined_var,
    
          // unset data
          $unset_var,
    );
    $tz1 = new DateTimeZone('Europe/Berlin');
    $d = new DateTime('2014-12-24 13:00:00', $tz1);
    $unset_var = 10;
    $data = ["k" => 0, 1, 2, 3];
    $cow_copy = $data;
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
    $str = 'Hello World';
    $shm_key = ftok(__FILE__, 'p');
    $shm_id2 = shmop_open($shm_key, 'c', 0644, strlen($str) + 10);
    $found = false;
    $style = array();
    $i = 0;
    $style[$i++] = IMG_COLOR_TRANSPARENT;
    $time = '9999-11-33';
    $timeZone = new DateTimeZone('UTC');
    $dateTime = new DateTime($time, $timeZone);
    $heredoc = <<<EOT
    key
    EOT;
    class C extends stdClass {
        public int $a;
    }
    $obj = new C();
    $r = new ReflectionClass('Test2');
    $m = $r->getStaticProperties();
    $m['data4'] = 400;
    $a = "lest";
    $textascii = 'This is an "example" of using DOM splitText';
    rt = 30;
    $le
     = new DOMDocument('1.0', 'UTF-8');
    $no
    e = $dom->createTextNode($textascii);
    $do
    ched = $node->splitText($start);
    $ma;
    $dyadic = 0.00000000000045474735088646411895751953125;
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt', Pdo::class, true);
    $res = html_entity_decode("&#x98;", ENT_QUOTES, 'WINDOWS-1251');
    $log_file = tempnam(sys_get_temp_dir(), 'php-curl-CURLOPT_WRITEFUNCTION-trampoline');
    $date_format = DATE_RFC2822;
    $offsets = array(20, 21, 22, 53, 54);
    class MyObjectStorage extends SplObjectStorage {
        // Overwrite getHash() with just some (working) test-method
        public function getHash($object): string { return get_class($object); }
    }
    $list = new MyObjectStorage();
    class D {
        public string $prop;
    }
    $d = new D();
    $instructorsAdmin = Test::INSTRUCTORS_ADMIN;
    $quote_char_string = <<<EOT
    <html>&lt; This's a string with quotes:
    "strings in double quote" &amp;
    'strings in single quote' &quot;
    this\line is &#039;single quoted&#039; /with\slashes </html>
    EOT;
    $s = "X";
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt', Pdo::class, false);
    $im = ImageCreateTrueColor(10, 10);
    $color = ImageColorAllocateAlpha($im, 0, 0, 0, 1);
    $i = 0;
    $xmlString = "<root><a><b>1</b><b>2</b><b>3</b></a></root>";
    $xml = simplexml_load_string($xmlString);
    $needle = base64_decode('44CC');
    $xml =<<<EOF
    <xml>
    <fieldset1>
    </fieldset1>
    <fieldset2>
    <options>
    </options>
    </fieldset2>
    </xml>
    EOF;
    $sxe = new SimpleXMLIterator($xml);
    $rit = new RecursiveIteratorIterator($sxe, RecursiveIteratorIterator::LEAVES_ONLY);
    foreach ($rit as $child) {
        $ancestry = $child->xpath('ancestor-or-self::*');
        // Exhaust internal iterator
        foreach ($ancestry as $ancestor) {
        }
    }
    $ancestry = $child->xpath('ancestor-or-self::*');
    class A
    {
        public string $prop;
    }
    class B
    {
        public function __toString()
        {
            global $a;
            $a = null;
            return str_repeat('a', 1);
        }
    }
    $a = new A();
    $a->prop = new B();
    $deflator = deflate_init(ZLIB_ENCODING_RAW);
    $link = mysqli_init();
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
    $namespaceless = $body->appendChild($dom->createElementNS(NULL, "foo"));
    $heredoc_str = <<<EOD
    %
    #$*&
    text & @()
    EOD;
    class SomeClass implements JsonSerializable {
        public function jsonSerialize(): mixed {
            return [get_object_vars($this)];
        }
    }
    $class = new SomeClass;
    $timestamp = "2005-11-08T11:22:07+03:00";
    function __construct($audienceMemberId, $timestamp, $smokeStatus) {
        $this->audienceMemberId = $audienceMemberId;
        $this->timestamp = $timestamp;
        $this->smokeStatus = $smokeStatus;
        $this->callInitiator = "IVR";
      }
    $this->smokeStatus = $smokeStatus;
    );
    if (!$reader->open($fil;
    $header = <<<HEADER
    extern int *(*bug79177_cb)(void);
    void bug79177(void);
    HEADER;
    $mb=148;
    $GLOBALS['b'] = 2;
    $org_b = $GLOBALS['b'];
    class SomeClass2 implements JsonSerializable {
        public function jsonSerialize(): mixed {
            return [(array)$this];
        }
    }
    $class = new SomeClass2;
    $arr = [$class];
    $b = 1;
    class C {
        public private(set) string $prop1 {
            set => $value;
        }
        public private(set) string $prop2 {
            get => $this->prop2;
        }
    }
    $c = new C();
    $c->prop1 = 'hello world';
    class Foo {
      public $bar = "bat";
    }
    $foo = new Foo;
    $baz = (float)$foo;
    $dest = dirname(realpath(__FILE__)) . '/bug27582.png';
    $im2 = imagecreatefrompng($dest);
    $col = imagecolorat($im2, 5, 5);
    $color = imagecolorsforindex($im2, $col);
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
    $sort = array(1, 5, 2, 4, 3);
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
    $haystack = 'Hello,\t\n\0\n  $&!#%\o,()*+-./:;<=>?@hello123456he \x234 \101 ';
    $needle = array(
      //regular strings
      'l',
      'L',
      'HELLO',
      'hEllo',
    
      //escape characters
      '\t',
      '\T',
      '     ',
      '\n',
      '\N',
      '
    ',  //new line
    
      //nulls
      '\0',
    
      //boolean false
      FALSE,
      false,
    
      //empty string
      '',
    
      //special chars
      ' ',
      '$',
      ' $',
      '&',
      '!#',
      '%\o',
      '\o,',
      '()',
      '*+',
      '+',
      '-',
      '.',
      '.;',
      ':;',
      ';',
      '<=>',
      '>',
      '=>',
      '?',
      '@',
      '@hEllo',
    
      '12345', //decimal numeric string
      '\x23',  //hexadecimal numeric string
      '#',  //hexadecimal numeric string
      '\101',  //octal numeric string
      'A',
      '456HEE',  //numerics + chars
      42, //needle as int(ASCII value of '*')
      $haystack  //haystack as needle
    );
    $r = new ReflectionClass('stdClass');
    $xmlString = "<root><a><b>1</b><b>2</b><b>3</b></a></root>";
    $xml = simplexml_load_string($xmlString);
    $nodes = $xml->a->b;
    $date = new DateTimeImmutable('2022-10-09 02:41:54.515330', new DateTimeZone('America/Los_Angeles'));
    $db = PDOTest::factory();
    $res = $db->query("SELECT a FROM test36428");
    class SomeClass implements JsonSerializable {
        public function jsonSerialize(): mixed {
            return [get_object_vars($this)];
        }
    }
    $class = new SomeClass;
    $arr = [$class];
    $reflector = new ReflectionClass(C::class);
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
    $bug_gh16013_callback_struct->return_struct = function($val) use($ffi) {
        return $val;
    };
    function byReference( & $array){
        foreach($array as &$item){
            $item['nanana'] = 'batman';
            $item['superhero'] = 'robin';
        }
    }
    foreach($array as &$item){
            $item['nanana'] = 'batman';
            $item['superhero'] = 'robin';
        }
    $item['superhero'] = 'robin';
    $empty_string = <<<EOT
    EOT;
    $offsets = array(20, 21, 22, 53, 54);
    $input[] = &$input;
    $a = new DateTime("2009-01-01", null);
    $dsn = ini_get('pdo.dsn.mysql');
    $found = ($dsn !== false);
    $timestamp = "2005-11-08T11:22:07+03:00";
    function __construct($audienceMemberId, $timestamp, $smokeStatus) {
        $this->audienceMemberId = $audienceMemberId;
        $this->timestamp = $timestamp;
        $this->smokeStatus = $smokeStatus;
        $this->callInitiator = "IVR";
      }
    $this->audienceMemberId = $audienceMemberId;
    $b = 'ok';
    $_b = $b;
    $arg = new Stdclass();
    $arg->name = array();
    $tests = array(
        'noon', 'midnight'
    );
    foreach ($tests as $test) {
        $t = strtotime("2005-12-22 ". $test);
        printf("%-10s => %s\n", $test, date(DATE_ISO8601, $t));
    }
    $t = strtotime("2005-12-22 ". $test);
    $res = [];
    $res[] = $re;
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
    $bug_gh16013_callback_struct->return_struct = function($val) use($ffi) {
        return $val;
    };
    $loop_counter = 1;
    $domd = new DOMDocument();
    $xp = new DOMXPath($domd);
    $parser = xml_parser_create();
    $dest = dirname(realpath(__FILE__)) . '/bug27582.png';
    $im2 = imagecreatefrompng($dest);
    $col = imagecolorat($im2, 5, 5);
    $response = ob_get_contents();
    $tStamp = mktime (17, 17, 17, 10, 27, 2004);
    $counter = 1;
    class A {
        public $a;
    }
    $b = new A();
    $b->dyn = 1;
    public function setTest($test) {
            $this->test = $test;
        }
    $this->test = $test;
    $time = '9999-11-33';
    $sql = "SELECT 11111 as `1`, 22222 as `2`";
    $link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
    $res = $link->query($sql);
    $row = $res->fetch_array();
    $pid = pcntl_fork();
    class C {
        public private(set) string $prop1 {
            set => $value;
        }
        public private(set) string $prop2 {
            get => $this->prop2;
        }
    }
    $c = new C();
    $tempnum = 12345;
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
    class PHPUnit_Framework_MockObject_Stub_ReturnCallback {
        protected $callback;
        public function __construct($callback) {
            $this->callback = $callback;
        }
        public function invoke($invocation) {
            return call_user_func_array($this->callback, $invocation->parameters);
        }
    }
    class PHPUnit_Framework_MockObject_Matcher {
        public $stub = null;
        public $methodNameMatcher;
        public function invoked($invocation) {
            return $this->stub->invoke($invocation);
        }
    }
    class MethodCallbackByReference {
        public function bar(&$a, &$b, $c) {
            Legacy::bar($a, $b, $c);
        }
        public function callback(&$a, &$b, $c) {
            $b = 1;
        }
    }
    class Mock_MethodCallbackByReference_7b180d26 extends MethodCallbackByReference {
        public $inv_mocker;
        public function bar(&$a, &$b, $c) {
            $arguments = array($a, $b, $c);
            $result = $this->inv_mocker->invoke(
                new PHPUnit_Framework_MockObject_Invocation_Static(
                    $arguments
                )
            );
            return $result;
        }
    }
    $foo = new Mock_MethodCallbackByReference_7b180d26();
    $OuterMatcher = new PHPUnit_Framework_MockObject_Matcher();
    $OuterMatcher->stub = new PHPUnit_Framework_MockObject_Stub_ReturnCallback([$foo, 'callback']);
    $data_comp_func = 'compare_function';
    $a = $b = $c = 2;
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $phar = new Phar($fname);
    $reflection = new ReflectionClass('\DateTimeImmutable');
    $var = '';
    $timeZone = new DateTimeZone('UTC');
    interface IValue
    {
       public function setVal ($name, $val);
       public function dumpVal ();
    }
    class Value implements IValue
    {
      private $vars = array ();
    
      public function setVal ( $name, $val ) {
        $this->vars[$name] = $val;
      }
    
      public function dumpVal () {
        var_dump ( $vars );
      }
    }
    $Value_object = new Value();
    public function __construct($c)
        {
            $this->b = new C($c);
        }
    public function __construct($c)
        {
            $this->c = $c;
        }
    $this->c = $c;
    $var = -PHP_INT_MAX - 1;
    $depth0 = "depth02";
    $iterator = new RecursiveDirectoryIterator(__DIR__ . DIRECTORY_SEPARATOR . $depth0);
    $it = new RecursiveIteratorIterator($iterator);
    $list = [];
    $list[] = $it->getSubPathname();
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
    php_admin_value[cgi.fix_pathinfo] = yes
    EOT;
    $code = <<<EOT
    <?php
    echo \$_SERVER["SCRIPT_NAME"] . "\n";
    echo \$_SERVER["ORIG_SCRIPT_NAME"] . "\n";
    echo \$_SERVER["SCRIPT_FILENAME"] . "\n";
    echo \$_SERVER["PATH_INFO"] . "\n";
    echo \$_SERVER["PHP_SELF"];
    EOT;
    $tester = new FPM\Tester($cfg, $code);
    [$sourceFilePath, $scriptName] = $tester->createSourceFileAndScriptName();
    $mb=148;
    $date2 = new DateTime("Fri 19 November 2011");
    for ($i = 0; $i < 5; $i++) {
        $v[$i] = 'hi'.$i;
    }
    $v[$i] = 'hi'.$i;
    $db = PDOTest::factory();
    $driver = $db->getAttribute(PDO::ATTR_DRIVER_NAME);
    $is_oci = $driver == 'oci';
    $key_compare_func = 'compare_function';
    $meta = mysqli_fetch_fields($res);
    $meta = $meta[0];
    $length = $meta->length;
    class di extends DateInterval {
        public $unit = 1;
    }
    $I = new di('P10D');
    $errcontext = '';
    list($value) = yield;
    public function __construct($c)
        {
            $this->b = new C($c);
        }
    public function __construct($c)
        {
            $this->c = $c;
        }
    $this->c = $c;
    global $box;
    $box->value = null;
    $max = 0x66666666;
    $date = new DateTimeImmutable('2022-10-09 02:41:54.515330', new DateTimeZone('America/Los_Angeles'));
    $time = '2000-01-01 00:00:00.000000';
    $tz_aus = new DateTimeZone('Australia/Sydney');
    $auz = new DateTime($time, $tz_aus);
    $wsdl = __DIR__."/bug35142.wsdl";
    class TestSoapClient extends SoapClient {
      private $server;
    
      function __construct($wsdl, $options) {
        parent::__construct($wsdl, $options);
        $this->server = new SoapServer($wsdl, $options);
        $this->server->addFunction('PostEvents');
      }
    
      function __doRequest($request, $location, $action, $version, $one_way = 0): string {
        echo "$request\n";
        ob_start();
        $this->server->handle($request);
        $response = ob_get_contents();
        ob_end_clean();
        return $response;
      }
    
    }
    function __construct($wsdl, $options) {
        parent::__construct($wsdl, $options);
        $this->server = new SoapServer($wsdl, $options);
        $this->server->addFunction('PostEvents');
      }
    $soapClient = new TestSoapClient($wsdl,
        array('trace' => 1, 'exceptions' => 0,
            'classmap' => array('logOnEvent' => 'LogOnEvent',
                'logOffEvent' => 'LogOffEvent',
                'events' => 'IVREvents')));
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
    $this->logOffEvent = $logOffEvent;
    $unset_var = 10;
    $rm = new ReflectionMethod(Collator::class, 'getSortKey');
    $im = ImageCreateTrueColor(10, 10);
    $bordercolor=ImageColorAllocateAlpha($im, 0, 0, 0, 2);
    $timestamp = "2005-11-08T11:22:07+03:00";
    function __construct($audienceMemberId, $timestamp, $smokeStatus) {
        $this->audienceMemberId = $audienceMemberId;
        $this->timestamp = $timestamp;
        $this->smokeStatus = $smokeStatus;
        $this->callInitiator = "IVR";
      }
    $this->timestamp = $timestamp;
    $bar = new DateTime();
    $ch = curl_init("https://localhost/userpwd");
    $me = new static;
    $reqOf3 = 'select 79 n union all select 80 union all select 81';
    $reflector = new ReflectionClass(C::class);
    $browser=get_browser(NULL, true);
    $needle = base64_decode('44CC');
    $references = array();
    $idx = 0;
    $rows = array();
    for ($i = 0; $i < 2; $i++) {
            $rows[$i] = mysqli_fetch_assoc($res);
            $references[$idx]['row_ref'] 		= &$rows[$i];
            $references[$idx]['row_copy'] 	= $rows[$i];
            $references[$idx]['id_ref'] 		= &$rows[$i]['id'];
            $references[$idx]['id_copy']		= $rows[$i]['id'];
            /* enforce separation */
            $references[$idx]['id_copy_mod']= $rows[$i]['id'] + 0;
        }
    $rows[$i] = mysqli_fetch_assoc($res);
    $references[$idx]['id_copy_mod']= $rows[$i]['id'] + 0;
    class Box {
        public ?Test $value;
    }
    class Test {
        function __destruct() {
            global $box;
            $box->value = null;
        }
    }
    $box = new Box();
    $box->value = new Test;
    $link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
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
    $failures[] = $error;
    $i = 1;
    $c = $i < 2;
    $heredoc_str = <<<EOD
    %
    #$*&
    text & @()
    EOD;
    $str_arr = array(
      //double quoted strings
      "%",
      "#$*",
      "text & @()",
    
      //single quoted strings
      '%',
      '#$*',
      'text & @()',
    
      //heredoc string
      $heredoc_str
    );
    $strings = array(
      "<html>Hello<br />world</html>",
      "<html><br /></html>",
      "<html>\nHello\r\nworld\r</html>",
      "<html>\n \r\n \r</html>",
    );
    public function bar(&$a, &$b, $c) {
            Legacy::bar($a, $b, $c);
        }
    public function callback(&$a, &$b, $c) {
            $b = 1;
        }
    $b = 1;
    class PHPUnit_Framework_MockObject_Invocation_Static {
        public $parameters;
        public function __construct(array $parameters) {
            $this->parameters = $parameters;
        }
    }
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
    $result = $this->inv_mocker->invoke(
                new PHPUnit_Framework_MockObject_Invocation_Static(
                    $arguments
                )
            );
    $ret = new stdClass;
    $pass	= PDO_MYSQL_TEST_PASS;
    $fixedArray = new SplFixedArray(1);
    $extracert = file_get_contents(__DIR__ . "/cert.crt");
    $sql = "SELECT 11111 as `1`, 22222 as `2`";
    $link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
    $res = $link->query($sql);
    $row = $res->fetch_array();
    $b = NULL;
    $fmt = new NumberFormatter('en_US', NumberFormatter::DECIMAL);
    $fmt2 = clone $fmt;
    $fp = fopen(__DIR__."/test2.csv", "r");
    $iterator = 1;
    class DB extends mysqli {
    
        private function __construct($hostname, $username, $password, $database) {
            var_dump("DB::__construct() called");
        }
    }
    $DB = new DB();
    $a = new PDO("sqlite::memory:");
    $i = 1;
    $references = array();
    $dbh = @pg_connect($conn_str);
    $res = pg_query($dbh, 'SET client_min_messages TO NOTICE;');
    $a[10] = "42";
    $index_array = array (1, 2, 3);
    $date = new DateTime("28-July-2008");
    $test_fl = __DIR__ . DIRECTORY_SEPARATOR . md5(uniqid());
    $test_fl_escaped = escapeshellarg($test_fl);
    $code = '$server = new SoapServer("' . __DIR__ . '"/bug49278.wsdl", ["trace"=>1]);' .
            <<<'PHP'
            function Add() {}
            $server->addFunction('Add');
            $server->handle();
            PHP;
    $_ = str_repeat("A", 512);
    $attr = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4 COLLATE utf8mb4_unicode_ci; SET SESSION sql_mode=traditional',
        PDO::ATTR_STRINGIFY_FETCHES => true,
    ];
    $strB = 'test & test';
    $twoseventy = M_PI * 1.5;
    $heredoc = <<<EOT
    key
    EOT;
    class foo
    {
    // no members
    }
    $foo_object = new foo();
    $fixedArray = new SplFixedArray(1);
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt', Pdo\Pgsql::class, false);
    $date = '7.8.2010';
    $unixtime = strtotime($date);
    global $user, $host, $passwd, $db, $port, $socket;
    global $user, $host, $passwd, $db, $port, $socket;
    $this->mysqli = new mysqli($host, $user, $passwd, $db, $port, $socket);
    $result = $this->mysqli->query("SELECT NOW() AS my_time FROM DUAL");
    $originalEnvelopeData = "any string with \x1a is cut at this point.";
    $arr  = array("test");
    list($c,$d) = is_array($arr)?: NULL;
    $db = PDOTest::factory();
    $reflection = new ReflectionClass('\DateTime');
    $res = [];
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
    $prefix . "フォルダ";
    
    mkdir($prefi;
    $tz_aus = new DateTimeZone('Australia/Sydney');
    $replace_pairs = array("$" => "%", "%" => "$", "#*&@()" => "()@&*#");
    class Foo {
        public function __destruct() {
            debug_print_backtrace();
        }
    }
    $foo = new Foo();
    class foo
    {
    // no members
    }
    $foo_object = new foo();
    $a = 4;
    $_SERVER = [ 'test' => 'test' ];
    $reference =& $_SERVER;
    $iterator = 1;
    $dbh = @pg_connect($conn_str);
    $res = pg_query($dbh, "CREATE OR REPLACE FUNCTION test_notice() RETURNS boolean AS '
    begin
            RAISE NOTICE ''11111'';
            return ''f'';
    end;
    ' LANGUAGE plpgsql;");
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
    $count = 1;
    $arr1 = array(1, "float", "f4", "hello", 2.2, 'color', "string", "pen\n", 11);
    $from = ini_get('sendmail_from');
    $search_arr = array( TRUE, FALSE, 1, 0, -1, "1", "0", "-1",  NULL,
                         array(), "php", "");
    _MIME_TYPE);
    var_dump($fi->file($f));
    $dir = opendir('foo://bar');
    $wrapper = stream_get_meta_data($dir)['wrapper_data'];
    $res = [];
    $res[] = $re;
    class Canary {
        public function __destruct() {
            var_dump(__METHOD__);
        }
    }
    $this->a = new Canary();
    function test(object $obj) {
            $obj->a = 1;
        }
    $obj->a = 1;
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
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
    $varOutput = ob_get_contents();
    $varOutput = str_replace(
            [$var_dim_filename],
            ['%s'],
            $varOutput
        );
    function f() {
        Fiber::suspend();
    }
    function g() {
        (new Fiber(function() {
            global $f;
            var_dump((new ReflectionFiber($f))->getTrace());
        }))->start();
    }
    $f = new Fiber(function() { f(); max(...[1,2,3,4,5,6,7,8,9,10,11,12]); g(); });
    $tz_us = new DateTimeZone('America/Los_Angeles');
    $descriptorspec = [STDIN, STDOUT, STDOUT];
    $unset_var = 10;
    class test
    {
      var $t = 10;
      function __toString()
      {
        return "testObject";
      }
    }
    $values = array(
                // empty string
      /* 1  */  "",
                '',
                // objects
      /* 3  */  new test(),
    
                // undefined variable
                @$undefined_var,
    
                // unset variable
      /* 5  */  @$unset_var,
    );
    $conn = odbc_connect($dsn, $user, $pass);
    $res = odbc_exec($conn, 'SELECT * FROM bug68087 ORDER BY ID ASC');
    $id = odbc_result($res, "ID");
    $bar = new DateTime();
    $function = function (int &$foo, DateTimeInterface &$bar) {};
    $reflection = new ReflectionClass('\DateTimeImmutable');
    $initialRequest = true;
    $dt = DateTime::createFromFormat('Y-m-d!', '2011-02-02');
    class P {
        public function __destruct() {
            var_dump(__METHOD__);
        }
    }
    class C extends P {
        use T;
    }
    $c = new C();
    $users = MailBox::USERS;
    $to = $users[0];
    $from = ini_get('sendmail_from');
    $bcc = $users[2];
    $subject = 'mail_bug80706';
    $message = 'hello';
    $xMailer = 'bug80706_x_mailer';
    $headers = "From: {$from}\r\n"
        . "Bcc: {$bcc}\r\n"
        . "X-Mailer: {$xMailer}";
    $res = mail($to, $subject, $message, $headers);
    function byReference( & $array){
        foreach($array as &$item){
            $item['nanana'] = 'batman';
            $item['superhero'] = 'robin';
        }
    }
    foreach($array as &$item){
            $item['nanana'] = 'batman';
            $item['superhero'] = 'robin';
        }
    $item['nanana'] = 'batman';
    $tbl = "test";
    #[AllowDynamicProperties]
    class C {
        public $a = 1;
    }
    $c = new C();
    $propReflector = new ReflectionProperty($c, 'dyn');
    $fmt = new NumberFormatter('en_US', NumberFormatter::DECIMAL);
    $fmt2 = clone $fmt;
    $array = new ArrayObject();
    $values =  array (
      //Decimal values
      0,
      1,
      12345,
      -12345,
    
      //Octal values
      02,
      010,
      030071,
      -030071,
    
      //Hexadecimal values
      0x0,
      0x1,
      0xABCD,
      -0xABCD
    );
    $db = PDOTest::factory();
    $insert = $db->prepare("insert into test34630 (id, val) values (1, EMPTY_BLOB()) RETURNING val INTO :blob");
    class A
    {
        public string $prop;
    }
    $a = new A();
    $rm = new ReflectionMethod(Collator::class, 'getSortKey');
    $document = new \DOMDocument();
    $i = 1;
    $a = new PDO("sqlite::memory:");
    $db = MySQLPDOTest::factory();
    $stmt = $db->prepare('SELECT * FROM test_33689');
    $tmp = $stmt->getColumnMeta(0);
    );
    if (!$reader->open($fil
    ttribute('idx');
                echo $reade;
    $reflector = new ReflectionClass(C::class);
    $obj = $reflector->newLazyProxy(function () {
        throw new \Exception('initializer');
    });
    $a = $b = $c = 2;
    $references = array();
    $idx = 0;
    $references[$idx]['row_copy'] 	= $row;
    function __construct($wsdl) {
        parent::__construct($wsdl);
        $this->server = new SoapServer($wsdl);
        $this->server->addFunction('Test');
      }
    $this->server = new SoapServer($wsdl);
}
function f_1() {
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        register_shutdown_function(function () {
            echo "register_shutdown_function()\n";
            throw new \Exception('shutdown');
        });
    }
}
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
$containers = array();
global $containers;
global $containers;
$containers[spl_object_hash($this)] = NULL;
$a = new PDO("sqlite::memory:");
$a->query ("CREATE TABLE test_35336 (a integer primary key, b text)");
$array = [0];
$ar = array_values($array);
var_dump($ar);
