<?php
$bar = new DateTime();
$function = function (int &$foo, DateTimeInterface &$bar) {};
function f_0() {
    $dt = new DateTime('first day of January 2011');
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        class Foo {
            public $dummy1;
            public $dummy2;
        }
        $f = new Foo;
        $var = 10;
        $initialRequest = false;
        $y = 0;
        global $y;
        $y++;
        var_dump($initialRequest ? $x : $y);
    }
}
ini_set('exif.decode_unicode_motorola', 'UCS-2LE');
$counter = 1;
$unset_var = 10;
class classA
{
  public function __toString() {
    return "key";
  }
}
$heredoc = <<<EOT
key
EOT;
$fp = fopen(__FILE__, "r");
$inputs = array(

       // int data
/*1*/  0,
       1,
       12345,
       -2345,

       // null data
/*10*/ NULL,
       null,

       // boolean data
/*12*/ true,
       false,
       TRUE,
       FALSE,

       // empty data
/*16*/ "",
       '',
       array(),

       // string data
/*19*/ "key",
       'key',
       $heredoc,

       // object data
/*22*/ new classA(),

       // undefined data
/*23*/ @$undefined_var,

       // unset data
/*24*/ @$unset_var,

       // resource variable
/*25*/ $fp
);
$reflector = new ReflectionClass(C::class);
function f_2() {
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
    var_dump($ffi->bug_gh16013_return_struct());
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt', Pdo\Pgsql::class, true);
    var_dump($pdo->query('SELECT 1;')->fetchAll());
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
    var_dump($namespaceless->lookupNamespaceURI(NULL));
    ob_end_flush();
    function bar() {
        yield from foo();
    }
    $gen = bar();
    $datePost = DateTime::createFromFormat("!d M Y D", "17 may 2011 Fri");
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
    $tester
        ->request(
            uri: $scriptName . '/1%202',
            scriptFilename: "proxy:fcgi://" . $tester->getAddr() . $sourceFilePath . '/1%202',
            scriptName: $scriptName . '/1 2'
        )
        ->expectBody([$scriptName, $scriptName . '/1 2', $sourceFilePath, '/1 2', $scriptName . '/1 2']);
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
    $prefix . "フォルダ";
    
    mkdir($prefi
    est1.txt");
    
    rmdir($d0);
    ;
    printf("printf test 24:%.5s\n", "abcdefghij");
}
$tempstring = "abcdefghjklmnpqrstuvwxyz";
var_dump(sprintf("%030.-15s", $tempstring));
function f_3() {
    $r = new ResourceBundle( 'en_US', BUNDLE );
    $r2 = $r['testarray'];
    printf( "testarray: %s\n", $r2[2] );
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
    var_dump(sha1_file(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370_003' . DIRECTORY_SEPARATOR . 'testfile'));
    $a = new PDO("sqlite::memory:");
    class A {
        private static $x = 1;
    }
    class C extends A {
        function bar() {
            var_dump(A::$x);
        }
    }
    $b = new C;
    $b->bar();
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt', Pdo\Pgsql::class, false);
    var_dump($pdo->query('SELECT 1;')->fetchAll());
    $f = __DIR__."/data/test.txt.gz";
    $h = gzopen($f, 'r');
    var_dump(gzeof($h));
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
    $dom = new DOMDocument;
    $element = $dom->appendChild($dom->createElement('root'));
    $element->prepend('x', new DOMEntity);
    $filename = "bug51997.bz2";
    $bz = bzopen($filename, "r");
    bzclose($bz);
}
$db = MySQLPDOTest::factory();
$stmt = $db->prepare('SELECT * FROM test_33689');
print_r($stmt->getColumnMeta(0));
function f_4() {
    var_dump(imagecreatefromgd2(__DIR__ . DIRECTORY_SEPARATOR . 'bug73868.gd2'));
    $blank_line = <<<EOD
    
    EOD;
    $needles = array(
      "\n",
      '\n',
      "\r",
      "\r\n",
      "\t",
      "",
      $blank_line //needle as haystack
    );
    foreach($needles as $needle) {
      var_dump( strrchr($blank_line, $needle) );
    }
    var_dump( strrchr($blank_line, $needle) );
}
class string1 {
  public function __toString() {
    return "Object";
  }
}
$obj = new string1;
var_dump( rtrim($obj, "tc") );
function f_5() {
    $ch = curl_init("https://localhost/userpwd");
    curl_setopt($ch, CURLOPT_USERPWD, null);
    var_dump(c1::$a2);
    $im = imagecreate(800, 800);
    imageline($im, 650, 650, 150, 150, IMG_COLOR_STYLED);
    $list = new SplDoublyLinkedList();
    $list->push('o');
    class A
    {
        public function & __get($name)
        {
            return $this->test;
        }
    }
    class B extends A
    {
        private $test;
    }
    $b = new B;
    var_dump($b->test);
    class_alias( 'stdClass', '_' );
    function foo() {
      var_dump("hello");
    }
    foo();
}
set_exception_handler("foo");
class SomeClass2 implements JsonSerializable {
    public function jsonSerialize(): mixed {
        return [(array)$this];
    }
}
$class = new SomeClass2;
$arr = [$class];
function f_6() {
    $unset_var = 10;
    $fp = fopen(__FILE__, "r");
    $heredoc = <<<EOT
    Hello world
    EOT;
    $arrays = array (
    
           // empty array
    /*1*/  array(),
    
           // arrays with integer keys
           array(0 => "0"),
           array(1 => "1"),
           array(1 => "1", 2 => "2", 3 => "3", 4 => "4"),
    
           // arrays with string keys
    /*7*/  array('\tHello' => 111, 're\td' => "color",
                 '\v\fworld' => 2.2, 'pen\n' => 33),
           array("\tHello" => 111, "re\td" => "color",
                 "\v\fworld" => 2.2, "pen\n" => 33),
           array("hello", $heredoc => "string"), // heredoc
    
           // array with object, unset variable and resource variable
           array(@$unset_var => "hello", $fp => 'resource'),
    
           // array with mixed keys
    /*11*/ array('hello' => 1, "fruit" => 2.2,
                 $fp => 'resource', 133 => "int",
                 @$unset_var => "unset", $heredoc => "heredoc")
    );
    for ($i_7 = 0; $i_7 < 10; $i_7++) {
        $interval = new DateInterval('P1D');
        $dt = new DateTime('first day of January 2011');
        $dt->add($interval);
    }
    var_dump("DB::__construct() called");
    $dbh = @pg_connect($conn_str);
    pg_close($dbh);
}
$sert = "file://" . __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_ENCRYPT));
function f_8() {
    $vars = array (
      '\$ -> This represents the dollar sign. hello dollar!!!',
      '\t\r\v The quick brown fo\fx jumped over the lazy dog',
      'This is a text with special chars: \!\@\#\$\%\^\&\*\(\)\\',
      'hello world\\t',
      'This is \ta text in bold letters\r\s\malong with slashes\n : HELLO WORLD\t'
    );
    class Canary {
        public function __construct(public mixed $value) {}
        public function __destruct() {
            var_dump(__METHOD__);
        }
    }
    function f($canary) {
        var_dump(yield from g());
    }
    $canary = new Canary(null);
    $iterable = f($canary);
    $im = imagecreate(800, 800);
    imageline($im, 100, 200, 600, 200, IMG_COLOR_STYLED);
    $fp = fopen('php://input', 'r+');
    for ($i_9 = 0; $i_9 < 10; $i_9++) {
        $cert = "file://" . __DIR__ . "/cert.crt";
        $cpca = __DIR__ . "/san-cert.pem";
        var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SMIME_SIGN, array($cpca)));
        $fp = fopen("php://memory", "r+");
        stream_get_line($fp, 1024*1024*2, "aaaa");
    }
    $date = new DateTime("28-July-2008");
    $other = new DateTime("31-July-2008");
    $diff = date_diff($date, $other);
    var_dump($diff);
    var_dump(spl_autoload_functions());
}
printf("printf test 24:%.5s\n", "abcdefghij");
function f_10() {
    define('PHPT_DATETIME_SHOW', PHPT_DATETIME_SHOW_ADD);
    $plain = "The quick brown fox jumps over the lazy dog.";
    $subject = 'mail_bug80706';
    $r = new ReflectionClass('Test2');
    $m = $r->getStaticProperties();
    $m['data3'] = 300;
    $cert = "file://" . __DIR__ . "/cert.crt";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_ANY, array($cpca), $utfl));
    $varOutput = ob_get_contents();
    $varOutput = str_replace(
            [$var_dim_filename],
            ['%s'],
            $varOutput
        );
    );
    if (!$reader->open($fil
    ($filename);
    ?>;
    $bert = "file://" . __DIR__ . "/bug41033.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_SIGN, array($cpca), $utfl));
    var_dump(soundex("Euler"));
    function do_throw() { throw new Exception; }
    $f = function () {};
    $f->__invoke(do_throw());
}
var_dump(exif_read_data('data:image/jpg;base64,TU0AKgAAAAwgICAgAAIBDwAEAAAAAgAAACKSfCAgAAAAAEZVSklGSUxN'));
