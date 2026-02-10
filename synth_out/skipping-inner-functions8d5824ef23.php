<?php
$date1 = new DateTime("Tuesday");
$date2 = DateTime::createFromFormat("D H i s", "Tuesday 0 00 00");
var_dump($date1->format('D') == $date2->format('D'));
$dirs = array("a", "ソ", "ゾ", "şŞıİğĞ", "多国語", "王", "汚れて掘る");

mkdir($prefix);
foreach ($
mkdir($prefix . $d);
}

$old_cwd = getcwd();
forea
$now = $prefix . $d;
    var_dump(chdir($now));
    var_dump($dn = realpath("."));
    var_dump($d == get_basename_with_cp($dn, 65001, false));
}
chdir($old_cwd);

foreach (
with_cp($dn, 65001, false));
}
chdir($old_cwd);

foreach;
var_dump($row);
$array = array("test" => 1);
$a = "lest";
var_dump($array[$a]);
debug_print_backtrace();
function test(object $obj) {
        $obj->a = 1;
    }
$obj->a = 1;
function f_0() {
    class base {
        private function show() {
            echo "base\n";
        }
        function test() {
            $this->show();
        }
    }
    $t = new base();
    function f_1() {
        );
        if (!$reader->open($fil
        ttributeNo(0);
                    echo $reade;
    }
    function does_not_work()
    {
        global $data; // Remove this line to make array_multisort() work
    
        $data = array('first', 'fifth', 'second', 'forth', 'third');
        $sort = array(1, 5, 2, 4, 3);
        array_multisort($sort, $data);
    
        var_dump($data);
    }
    does_not_work();
}
$a[10] = "42";
var_dump($a["10"], isset($a["10"]));
$fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
$phar = new Phar($fname);
var_dump($phar->getStub());
$strings_with_nulls = array(
                   "\0",
                   '\0',
                           "hello\0world",
                           "\0hel\0lo",
                           "hello\0",
                           "\0\0hello\tworld\0\0",
                           "\\0he\0llo\\0",
                           'hello\0\0'
                           );
$filename = "bug51997.bz2";
unlink($filename);
function f_2() {
    function __construct($wsdl) {
        parent::__construct($wsdl);
        $this->server = new SoapServer($wsdl);
        $this->server->addFunction('Test');
      }
    $this->server = new SoapServer($wsdl);
    $unset_var = 10;
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
    
           // array with unset variable
    /*10*/ array( @$unset_var => "hello"),
    
           // array with mixed keys
    /*11*/ array('hello' => 1,  "fruit" => 2.2,
                 133 => "int",
                 @$unset_var => "unset", $heredoc => "heredoc")
    );
    $arr1 = array(1, "float", "f4", "hello", 2.2, 'color', "string", "pen\n", 11);
    foreach($arrays as $arr2) {
      echo "-- Iterator $iterator --\n";
    
      // Calling array_intersect() with default arguments
      var_dump( array_intersect($arr1, $arr2) );
    
      // Calling array_intersect() with more arguments.
      // additional argument passed is the same as $arr1 argument
      var_dump( array_intersect($arr1, $arr2, $arr1) );
      $iterator++;
    }
    var_dump( array_intersect($arr1, $arr2, $arr1) );
}
$dom = Dom\HTMLDocument::createEmpty();
$container = $dom->appendChild(createElement($dom, "container"));
$container->appendChild(createElement($dom, "HTML", "1"));
function f_3() {
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
    for ($i_4 = 0; $i_4 < 10; $i_4++) {
        $GLOBALS['b'] = 2;
        $b = &$GLOBALS['b'];
    }
    #[\AllowDynamicProperties]
    class C {
        public $b;
        public function __construct() {
            $this->a = new Canary();
        }
    }
    $obj = new C();
    var_dump($obj->a);
}
$fn = "bug71263.bz2";
unlink($fn);
var_dump(rename("phar://a.phar/x", "phar://a.phar/y"));
function f_5() {
    $dom = new DOMDocument;
    function f_6() {
        $heredoc_needle = <<<EOD
        ^^&*(
        EOD;
        function f_7() {
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
        }
        return [$this];
    }
    $heredoc_null_string =<<<EOT
    EOT;
    var_dump(soundex("Lloyd"));
    $dom = Dom\HTMLDocument::createEmpty();
    $container = $dom->appendChild(createElement($dom, "container"));
    $container->appendChild(createElement($dom, "HTML", "1"));
}
$values = array(10,
                10.3,
                3.9505e3,
                037,
                0x5F,
                "10",
                "3950.5",
                "3.9505e3",
                "039",
                true,
                false,
                );
foreach($values as $value) {
    echo "\n-- Iteration $iterator --\n";
    var_dump(expm1($value));
    $iterator++;
}
var_dump(expm1($value));
function f_8() {
     = new DOMDocument('1.0', 'UTF-8');
    $no;
    $zip = new ZipArchive();
    $xmlString = "<root><a><b>1</b><b>2</b><b>3</b></a></root>";
    $xml = simplexml_load_string($xmlString);
    $nodes = $xml->a->b;
    function test($nodes, $name, $callable) {
        echo "--- $name ---\n";
        foreach ($nodes as $nodeData) {
            echo "nodeData: " . $nodeData . "\n";
            $callable($nodes);
        }
    }
    test($nodes, "manipulation combined with querying", function ($n) {
        $n->addAttribute("attr", "value");
        (bool) $n["attr"];
        $n->addChild("child", "value");
        $n->outer[]->inner = "foo";
        (bool) $n->outer;
        (bool) $n;
        isset($n->outer);
        isset($n["attr"]);
        unset($n->outer);
        unset($n["attr"]);
        unset($n->child);
    });
    ini_set("intl.error_level", E_WARNING);
}
setlocale(LC_ALL, 'de_DE', 'de-DE');
function f_9() {
    function gen() {
        yield 0;
        yield from gen();
    }
    $gen = gen();
    $headers2 = exif_read_data(__DIR__ . '/bug64739.jpg');
    function f_10() {
        $db = getDbConnection();
        $sql = '
            SET NOCOUNT ON
            SELECT 0 AS [result]
        ';
        $stmt = $db->query($sql);
        function f_11() {
            class overloaded
            {
              private $values;
              function __construct()
              {
                $this->values = array('a' => 0);
              }
              function __set($name, $value)
              {
                print "set $name = $value ($name was ".$this->values[$name].")\n";
                $this->values[$name] = $value;
              }
              function __get($name)
              {
                print "get $name (returns ".$this->values[$name].")\n";
                return $this->values[$name];
              }
            }
            $test = new overloaded();
        }
        return 0;
    }
}
$bert = "file://" . __DIR__ . "/bug41033.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_CRL_SIGN));
class foo
{
// no members
}
$fp = fopen (__FILE__, "r");
$dfp = opendir ( __DIR__ );
$unset_object = new foo();
$not_objects = array (
  0,
  -1,
  0.1,
  -10.0000000000000000005,
  10.5e+5,
  0xFF,
  0123,
  $fp,  // resource
  $dfp,
  array(),
  array("string"),
  "0",
  "1",
  "",
  true,
  NULL,
  null,
  @$unset_object, // unset object
  @$undefined_var, // undefined variable
);
$tbl = "test";
$sql = "SELECT bit_column_1 FROM $tbl";
$array = [
    [
    'superhero'=> 'superman',
    'nanana' => 'no nana'
    ],
    [
    'superhero'=> 'acuaman',
    'nanana' => 'no nana'
    ],

    ];
var_dump(array_column($array, 'superhero'));
$xml = '
<data id="1">
    <key>value</key>
</data>
';
$obj = simplexml_load_string($xml);
print_r(get_object_vars($obj));
function f_12() {
    function gen() {
        yield 0;
        yield from gen();
    }
    $gen = gen();
    function f_13() {
        function f_14() {
            $now = new DateTime('2018-11-03 11:34:20.781751');
            $ago = new DateTime('2018-11-03 11:34:20.000000');
            $diff = $now->diff($ago, true);
        }
        return "Object";
    }
    $file_handle = fopen(__FILE__, "r");
    fclose($file_handle);
    $db = getDbConnection();
    $sql = '
        SET NOCOUNT ON
        SELECT 0 AS [result]
    ';
    $stmt = $db->query($sql);
    var_dump($stmt->nextRowset());
    function f_15() {
    }
}
grapheme_strpos(1,1,2147483648);
function f_16() {
    $i = 1;
    $k = 2 * $i;
    function f_17() {
        $tests = array(
            1 => array(
                '$6$saltstring',
                'Hello world!',
                '$6$saltstring$svn8UoSVapNtMuq1ukKS4tPQd8iKwSMHWjl/O817G3uBnIFNjnQJuesI68u4OTLiBFdcbYEdFCoEOfaS35inz1'
            ),
            2 => array(
                '$6$rounds=10000$saltstringsaltstring',
                'Hello world!',
                '$6$rounds=10000$saltstringsaltst$OW1/O6BYHV6BcXZu8QVeXbDWra3Oeqh0sbHbbMCVNSnCM/UrjmM0Dp8vOuZeHBy/YTBmSK6H9qs/y3RnOaw5v.'
            ),
            3 => array(
                '$6$rounds=5000$toolongsaltstring',
                'This is just a test',
                '$6$rounds=5000$toolongsaltstrin$lQ8jolhgVRVhY4b5pZKaysCLi0QBxGoNeKQzQ3glMhwllF7oGDZxUhx1yxdYcz/e1JSbq3y6JMxxl8audkUEm0'
            ),
            4 => array(
                '$6$rounds=1400$anotherlongsaltstring',
                'a very much longer text to encrypt.  This one even stretches over morethan one line.',
                '$6$rounds=1400$anotherlongsalts$POfYwTEok97VWcjxIiSOjiykti.o/pQs.wPvMxQ6Fm7I6IoYN3CmLs66x9t0oSwbtEW7o7UmJEiDwGqd8p4ur1'
            ),
            5 => array(
                '$6$rounds=77777$short',
                'we have a short salt string but not a short password',
                '$6$rounds=77777$short$WuQyW2YR.hBNpjjRhpYD/ifIw05xdfeEyQoMxIXbkvr0gge1a1x3yRULJ5CCaUeOxFmtlcGZelFl5CxtgfiAc0'
            ),
            6 => array(
                '$6$rounds=123456$asaltof16chars..',
                'a short string',
                '$6$rounds=123456$asaltof16chars..$BtCwjqMJGx5hrJhZywWvt0RLE8uZ4oPwcelCjmw2kSYu.Ec6ycULevoBK25fs2xXgMNrCzIMVcgEJAstJeonj1'
            ),
            7 => array(
                '$6$$bar$',
                'foo',
                '$6$$QMXjqd7rHQZPQ1yHsXkQqC1FBzDiVfTHXL.LaeDAeVV.IzMaV9VU4MQ8kPuZa2SOP1A0RPm772EaFYjpEJtdu.'
            ),
            8 => array(
                '$6$rounds=10$roundstoolow',
                'the number of rounds is too low',
                '*0'
            ),
            8 => array(
                '$6$rounds=1000000000$roundstoohigh',
                'the number of rounds is too high',
                '*0'
            ),
        );
        foreach ($tests as $iter => $t) {
            $res = crypt($t[1], $t[0]);
            if ($res != $t[2]) echo "Iteration $iter failed.
        Expected: <$t[2]>
        Got       <$res>\n";
        }
        $res = crypt($t[1], $t[0]);
        function f_18() {
            $reflector = new ReflectionClass(C::class);
            $obj = $reflector->newLazyGhost(function () {
                throw new \Exception('initializer');
            });
        }
        var_dump(range(1, 3, -1));
        return false;
    }
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
    var_dump(A::$x);
    function f_19() {
        $a = simplexml_load_string("<a><b><c/></b></a>");
        function f_20() {
            $bert = "file://" . __DIR__ . "/bug41033.pem";
            $cpca = __DIR__ . "/san-cert.pem";
            $utfl = __DIR__ . "/sni_server_uk.pem";
            var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_SERVER, array($cpca), $utfl));
        }
        return $i;
    }
    $cert = "file://" . __DIR__ . "/cert.crt";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SMIME_ENCRYPT, array($cpca)));
    $empty_webp = __DIR__ . "/gh13774.webp";
    file_put_contents($empty_webp, "");
}
$thisdir = __DIR__;
$filename = $thisdir . "/bug47667.zip";
unlink($filename);
function f_21() {
    $magic_file = __DIR__ . '/bug79283.db';
    $finfo = new finfo(FILEINFO_NONE, $magic_file);
    function f_22() {
        for ($i_23 = 0; $i_23 < 10; $i_23++) {
        }
    }
    var_dump(soundex("Hilbert") == soundex("Ladd"));
    $mixedEndiannessFile = dirname(__FILE__).'/P1000506.JPG';
    $tags = exif_read_data($mixedEndiannessFile, 'EXIF', true, false);
    #[AllowDynamicProperties]
    class C {
        public $a = 1;
    }
    function test(string $name, object $obj) {
        printf("# %s\n", $name);
    
        $c = new C();
        $c->dyn = 1;
        $propReflector = new ReflectionProperty($c, 'dyn');
    
        try {
            $propReflector->setRawValueWithoutLazyInitialization($obj, 'test');
        } catch (\ReflectionException $e) {
            printf("%s: %s\n", $e::class, $e->getMessage());
        }
    }
    $c = new C();
    $propReflector = new ReflectionProperty($c, 'dyn');
    $propReflector->setRawValueWithoutLazyInitialization($obj, 'test');
}
$fmt = new NumberFormatter('en_US', NumberFormatter::DECIMAL);
$fmt->parse('abc');
function f_24() {
    $reflector = new ReflectionClass(C::class);
    function f_25() {
        for ($i_26 = 0; $i_26 < 10; $i_26++) {
            $i = 1;
        }
    }
    $im = imagecreate(800, 800);
    imageline($im, 550, 250, 550, 750, IMG_COLOR_STYLED);
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
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_OCSP_HELPER, array($cpca)));
}
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
$tester->start();
function f_27() {
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $phar = new Phar($fname, 0, 'a.phar');
    global $user, $host, $passwd, $db, $port, $socket;
    $this->mysqli = new mysqli($host, $user, $passwd, $db, $port, $socket);
    function f_28() {
        for ($i_29 = 0; $i_29 < 10; $i_29++) {
            $root = simplexml_load_string('<root xmlns:x="urn:x" x:attr="foo"/>');
        }
    }
    ['pid' => $pid, 'uri' => $uri] = http_server('genResponses', $output);
    http_server_kill($pid);
    $fp = fopen(__FILE__, "r");
    class Element
    {
        public function ThrowException ()
        {
            throw new Exception();
        }
    
        public static function CallBack(Element $elem)
        {
            $elem->ThrowException();
        }
    }
    $arr = array(new Element(), new Element(), new Element());
    array_map(array('Element', 'CallBack'), $arr);
}
$fp = php_cli_server_connect();
fclose($fp);
function zerofill($offset, $link, $datatype, $insert = 1) {

        mysqli_query($link, 'ALTER TABLE test DROP zero');
        $sql = sprintf('ALTER TABLE test ADD zero %s UNSIGNED ZEROFILL', $datatype);
        if (!mysqli_query($link, $sql)) {
            // no worries - server might not support it
            return true;
        }

        if (!mysqli_query($link, sprintf('UPDATE test SET zero = %s', $insert))) {
            printf("[%03d] UPDATE failed, [%d] %s\n",
                $offset, mysqli_errno($link), mysqli_error($link));
            return false;
        }

        if (!($res = mysqli_query($link, 'SELECT zero FROM test LIMIT 1'))) {
            printf("[%03d] SELECT failed, [%d] %s\n",
                $offset, mysqli_errno($link), mysqli_error($link));
            return false;
        }

        $row = mysqli_fetch_assoc($res);
        $meta = mysqli_fetch_fields($res);
        mysqli_free_result($res);
        $meta = $meta[0];
        $length = $meta->length;
        if ($length > strlen($insert)) {

            $expected = str_repeat('0', $length - strlen($insert));
            $expected .= $insert;
            if ($expected !== $row['zero']) {
                printf("[%03d] Expecting '%s' got '%s'\n", $offset, $expected, $row['zero']);
                return false;
            }

        } else if ($length <= 1) {
            printf("[%03d] Length reported is too small to run test\n", $offset);
            return false;
        }

        return true;
    }
zerofill(12, $link, 'DEC');
sprintf('%3$s, %2$s %1$s', "a", "b");
class C extends stdClass {
    public int $a;
}
$reflector = new ReflectionClass(C::class);
$obj = new C();
$reflector->resetAsLazyGhost($obj, function ($obj) {
    });
function byReference( & $array){
    foreach($array as &$item){
        $item['nanana'] = 'batman';
        $item['superhero'] = 'robin';
    }
}
$array = [
    [
    'superhero'=> 'superman',
    'nanana' => 'no nana'
    ],
    [
    'superhero'=> 'acuaman',
    'nanana' => 'no nana'
    ],

    ];
byReference($array);
$certificateGenerator = new CertificateGenerator();
$certificateGenerator->saveCaCert(__DIR__ . "/san-cert.pem");
printf("printf test 5:%-10.2f\n", 2.5);
