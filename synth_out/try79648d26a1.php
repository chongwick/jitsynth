<?php
class LogOffEvent {
  public $audienceMemberId;
  public $timestamp;
  public $smokeStatus;
  public $callInitiator;

  function __construct($audienceMemberId, $timestamp, $smokeStatus) {
    $this->audienceMemberId = $audienceMemberId;
    $this->timestamp = $timestamp;
    $this->smokeStatus = $smokeStatus;
    $this->callInitiator = "IVR";
  }
}
function foo() {
  var_dump("hello");
}
function createDB(): PDO {
    $db = MySQLPDOTest::factory();
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    return $db;
}
function testLastInsertId(PDO $db) {
    echo "Running test lastInsertId\n";
    $db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, false);
    try {
        $db->exec("INSERT INTO test_80908 (`name`) VALUES ('bar')");
        $id = $db->lastInsertId();
        echo "Last insert id is " . $id . "\n";
    } catch (PDOException $e) {
        echo $e->getMessage()."\n";
    }
}
class D {
    public string $prop;
}
class MyObjectStorage extends SplObjectStorage {
    // Overwrite getHash() with just some (working) test-method
    public function getHash($object): string { return get_class($object); }
}
class TestObject {}
#[AllowDynamicProperties]
class C {
    public int $a = 1;
    public function __construct() {
        var_dump(__METHOD__);
    }
}
function test(string $name, object $obj) {
    printf("# %s:\n", $name);

    var_dump($obj);
    var_dump(@$obj->dynamic++);
    var_dump($obj);
}
function byVal($arg) {
    var_dump($arg);
}
function byRef(&$arg) {
    var_dump($arg);
}
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
function byReference( & $array){
    foreach($array as &$item){
        $item['nanana'] = 'batman';
        $item['superhero'] = 'robin';
    }
}
function fromArray(array $props): self
    {
        $me = new static;
        foreach ($props as $k => &$v) {
            $me->{$k} = &$v;  # try to remove &
        }
        return $me;
    }
function getHash($object): string { return get_class($object); }
class Box {
    public ?Test $value;
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
function comp_func_cr($a, $b) {
        if ($a->priv_member === $b->priv_member) return 0;
        return ($a->priv_member > $b->priv_member) ? 1 : -1;
    }
function f_0() {
    $reflection = new ReflectionClass('\DateTimeImmutable');
    $immutable = $reflection->newInstanceWithoutConstructor();
    try {
        $num = 100000;
        for ($i=0; $i<$num; $i++) {
          $a[$i] = Array(1);
        }
        for ($i=0; $i<$num; $i++) {
          $b[$i] = $a[$i][0];
        }
        for ($i=0; $i<$num; $i++) {
          $b[$i] = "12345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890";
        }
        $b[$i] = "12345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890";
    } catch (Exception $e) {}
    if (true) {
        return 42;
    }
    return "Class A object";
}
function f_1() {
    try {
        $x = 1;
        $x += 0;
        ++$x;
        return $x;
    } catch (Exception $e) {}
    if (true) {
        return true;
    }
}
$reflector = new ReflectionClass(C::class);
for ($i_2 = 0; $i_2 < 10; $i_2++) {
    $timestamp = "2005-11-08T11:22:07+03:00";
    $logOffEvents[] = new LogOffEvent(34568, $timestamp, "SmokeFree");
    var_dump("done");
    $url = ""
        . "php://filter/read="
        . urlencode("convert.iconv.ISO-8859-15/UTF-8")
        . '|' . urlencode("string.rot13")
        . '|' . urlencode("string.rot13")
        . '|' . urlencode("convert.iconv.UTF-8/ISO-8859-15")
        . "/resource=data://text/plain,foob%E2r";
    var_dump(urlencode(file_get_contents($url)));
    date_default_timezone_set('UTC');
    $db = getDbConnection();
    $stmt = $db->prepare("SELECT 1, 2 AS named, 3");
    var_dump($stmt->fetchAll());
}
$filename = __DIR__ . '/bug77432.phar';
$phar = new Phar($filename);
$phar->setStub('<?php echo "hello world\n"; __HALT_COMPILER(); ?>');
$r = new Phar(__DIR__ . "/bug69279.phar.zip");
$r->extractTo(__DIR__, NULL, TRUE);
$references = array();
debug_zval_dump($references);
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
function f_3() {
    try {
        return true;
    } catch (Exception $e) {}
    if (true) {
        $bytes = str_repeat("*", 65536);
    }
}
debug_print_backtrace();
foo();
function f_4() {
    try {
        var_dump(gc_collect_cycles());
    } catch (Exception $e) {}
    if (true) {
        return 'A';
    }
}
var_dump(__METHOD__);
$fp = php_cli_server_connect();
fclose($fp);
$sert = "file://" . __DIR__ . "/san-cert.pem";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_SERVER, array($cpca)));
foo(false, false);
$sert = "file://" . __DIR__ . "/san-cert.pem";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_SIGN, array($cpca), $utfl));
$date1 = DateTime::createFromFormat("!D d M Y", "Sat 19 November 2011");
$date2 = new DateTime("Sat 19 November 2011");
var_dump($date1->format('Y-m-d') == $date2->format('Y-m-d'));
function f_5() {
    $b = 'ok';
    $_b = $b;
    try {
        $db = createDB();
        $id = $db->lastInsertId();
        echo "Last insert id is " . $id . "\n";
    } catch (Exception $e) {}
    if (true) {
        mt_srand(1234567890);
        try {
            echo "ok\n";
        } catch (Exception $e) {}
        if (true) {
            var_dump(0);
        }
        $d = new D();
        var_dump($d);
    }
    $invalid_files = array(
      0,
      1234,
      -2.34555,
      TRUE,
      FALSE,
      " ",
    );
    foreach( $invalid_files as $invalid_file ) {
      var_dump( is_executable($invalid_file) );
      clearstatcache();
    }
    var_dump( is_executable($invalid_file) );
}
$mysql = new my_mysqli($host, $user, $passwd, $db, $port, $socket);
$stmt = $mysql->prepare("SELECT id FROM temp");
$zip = new ZipArchive();
$zip->close();
printf("printf test 14:%c\n", 64);
$pdo = MySQLPDOTest::factory();
$pdo->setAttribute(\PDO::ATTR_EMULATE_PREPARES, false);
$data = [
    "name" => ["family" => AF_INET6, "addr" => "::1"],
    "buffer_size" => 2000,
    "controllen" => socket_cmsg_space(IPPROTO_IPV6, IPV6_PKTINFO) +
            socket_cmsg_space(IPPROTO_IPV6, IPV6_TCLASS),
];
print_r($data);
$im = imagecreatetruecolor(1, 1);
imagescale($im, 1, 1, -10);
$r = new ResourceBundle( 'en_US', BUNDLE );
printf( "length: %d\n", count($r) );
$list = new MyObjectStorage();
$list->attach(new TestObject());
function f_6() {
    try {
        try {
            return true;
        } catch (Exception $e) {}
        if (true) {
            $instance = new Foo();
            return $instance->bar;
        }
    } catch (Exception $e) {}
    if (true) {
        return new Exception;
    }
}
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
$d0 = $prefix . "ソフト";
touch("$d0\\test0.txt");
$conn = pg_connect($conn_str);
$table='test_68638';
var_dump(pg_update($conn,$table, array('value' => 'inf'), array('id' => 1), PGSQL_DML_STRING));
function f_7() {
    $ar2 = array(1, 2);
    try {
        try {
            return "Class A object";
        } catch (Exception $e) {}
        if (true) {
            $count = 1;
            $count ++;
        }
    } catch (Exception $e) {}
    if (true) {
        $counter = 1;
        $counter++;
    }
}
$curl = curl_init("http://www.google.com");
curl_setopt($curl, CURLOPT_PRIVATE, "123");
$reflector = new ReflectionClass(C::class);
$obj = $reflector->newLazyGhost(function ($obj) {
    var_dump("initializer");
    $obj->__construct();
});
$obj = $reflector->newLazyProxy(function ($obj) {
    var_dump("initializer");
    return new C();
});
test('Proxy', $obj);
function f_8() {
    $I->d++;
    try {
        $iterator = 1;
        $iterator++;
        if (true) {
            return "Class A object";
        }
    } catch (Exception $e) {}
    if (true) {
        $loop_counter = 1;
        $loop_counter++;
    }
    return "key";
}
byRef(C[0]);
$headers2 = exif_read_data(__DIR__ . '/bug64739.jpg');
var_dump($headers2['Title']);
function f_9() {
    try {
        $iterator = 1;
        $iterator++;
        if (true) {
            return (($mode & PHP_OUTPUT_HANDLER_START)?"[":"") . $s . (($mode & PHP_OUTPUT_HANDLER_END)?"]\n":"");
        }
    } catch (Exception $e) {}
    if (true) {
        $counter = 1;
        $counter++;
    }
    $iterator = 1;
    $iterator++;
    return 'B';
}
test(2);
var_dump( range(1, 7, 10.0**400) );
function f_10() {
    $loop_counter = 1;
    $loop_counter++;
    $sql = sprintf('ALTER TABLE test ADD zero %s UNSIGNED ZEROFILL', $datatype);
    while (true) {
        break;  // avoid infinite loop
        try {
            $i = 0;
            $i++;
            if (true) {
                return false;
            }
            $empty_webp = __DIR__ . "/gh13774.webp";
            $im = imagecreatefromwebp($empty_webp);
        } catch (Exception $e) {}
        if (true) {
            ++$testCasesTotal;
            ++$testCasesTotal;
        }
    }
    return "key";
}
$tester = new FPM\Tester($cfg);
$userMessage = "'user' directive is ignored when FPM is not running as root";
$tester->expectLogNotice($userMessage, 'bbbb');
var_dump ( rtrim("rtrim test        ", " ") );
function f_11() {
    foreach($array as &$item){
            $item['nanana'] = 'batman';
            $item['superhero'] = 'robin';
        }
    $item['nanana'] = 'batman';
    while (true) {
        break;  // avoid infinite loop
        try {
            $iterator = 1;
            $iterator++;
            if (true) {
                return $a;
            }
            $max = 0x66666666;
        } catch (Exception $e) {}
        if (true) {
            $count = 1;
            $count++;
        }
        $iterator = 1;
        $iterator++;
    }
    $me = new static;
    foreach ($props as $k => &$v) {
                $me->{$k} = &$v;  # try to remove &
            }
    $me->{$k} = &$v;
    return $me;
}
$domd = new DOMDocument();
$xp = new DOMXPath($domd);
$xp->query("//foo[contains(text(), " . $xp->quote("tes\x00t") . ")]");
var_dump(-2147483648 % -2);
function f_12() {
    $d = new D();
    for ($i_13 = 0; $i_13 < 10; $i_13++) {
        try {
            $count = 1;
            $count ++;
            $i = 0;
            $i++;
        } catch (Exception $e) {}
        if (true) {
            $iterator = 1;
            $iterator++;
        }
        $x = 1;
        $x += 0;
        ++$x;
    }
    $db = MySQLPDOTest::factory();
    return $db;
}
$host = "localhost\0.example.com";
var_dump(gethostbyname($host));
$context = stream_context_create(['http' => ['method' => 'MKCALENDAR']]);
var_dump(file_get_contents("http://" . PHP_CLI_SERVER_ADDRESS, false, $context));
function f_14() {
    $a[0] = $x;
    try {
        $I->d++;
        try {
            ++$testCasesTotal;
            if (true) {
                return get_class($object);
            }
        } catch (Exception $e) {}
        if (true) {
            $count = 1;
            $count++;
        }
    } catch (Exception $e) {}
    if (true) {
        $x = 1;
        $x += 0;
        ++$x;
    }
    return false;
}
var_dump(soundex("Lukasiewicz") == soundex("Ghosh"));
zerofill(2, $link, 'TINYINT');
function f_15() {
    try {
        ++$failuresNb;
        try {
            $counter = 1;
            $counter++;
            if (true) {
                return;
            }
        } catch (Exception $e) {}
        if (true) {
            $iterator = 1;
            $iterator++;
        }
    } catch (Exception $e) {}
    if (true) {
        $test->a++;
        ++$test->a;
    }
    C::$p++;
    $x = 1.0;
    $x += 0;
    return ++$x;
}
$reflector = new ReflectionClass(C::class);
$obj = new C();
$reflector->resetAsLazyGhost($obj, function () {});
$c("abc");
function f_16() {
    $to = "specials";
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
    while (true) {
        break;  // avoid infinite loop
        try {
            $test->a++;
            try {
                $loop_counter = 1;
                $loop_counter++;
                if (true) {
                    return 0;
                }
                $box = new Box();
                $box->value = new Test;
            } catch (Exception $e) {}
            if (true) {
                $i=0;
                $i++;
            }
        } catch (Exception $e) {}
        if (true) {
            $iterator = 1;
            $iterator++;
        }
    }
    return 5;
}
$a = 'ok';
$b = 'ok';
$_a = $a;
$_b = $b;
var_dump($_a, $_b);
$sert = "file://" . __DIR__ . "/san-cert.pem";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_SERVER, array($cpca)));
function f_17() {
    $code = <<<EOT
    <?php
    echo \$_SERVER["SCRIPT_NAME"] . "\n";
    echo \$_SERVER["ORIG_SCRIPT_NAME"] . "\n";
    echo \$_SERVER["SCRIPT_FILENAME"] . "\n";
    echo \$_SERVER["PATH_INFO"] . "\n";
    echo \$_SERVER["PHP_SELF"];
    EOT;
    while (true) {
        break;  // avoid infinite loop
        try {
            $iterator = 1;
            $iterator++;
            try {
                $loop_counter = 1;
                $loop_counter++;
                if (true) {
                    return (($mode & PHP_OUTPUT_HANDLER_START)?"[":"") . $s . (($mode & PHP_OUTPUT_HANDLER_END)?"]\n":"");
                }
                $data = [
                    "name" => ["family" => AF_INET6, "addr" => "::1"],
                    "buffer_size" => 2000,
                    "controllen" => socket_cmsg_space(IPPROTO_IPV6, IPV6_PKTINFO) +
                            socket_cmsg_space(IPPROTO_IPV6, IPV6_TCLASS),
                ];
            } catch (Exception $e) {}
            if (true) {
                $iterator = 1;
                $iterator++;
            }
        } catch (Exception $e) {}
        if (true) {
            $iterator = 1;
            $iterator++;
        }
        $halves[0] = $halves[1] = 0;
        $halves[(mt_rand(0, $max - 1) >> 1) & 1]++;
        $halves[0] = $halves[1] = 0;
        $halves[(int) (mt_rand(0, $max - 1) / ($max / 2))]++;
    }
    return 'A';
}
global $box;
$box = new Box();
test($box);
$f = __DIR__."/data/test.txt.gz";
$h = gzopen($f, 'r');
var_dump(gzread($h, 0));
$fn = "bug71263.bz2";
$test2=array(
   'a1_teasermenu' => array(
        'downloadcounter' => 2777,
        'versions' => array(
            '0.1.0' => array (
                'title' => 'A1 Teasermenu',
                'description' => 'Displays a teaser for advanced subpages or a selection of advanced pages',
                'state' => 'stable',
                'reviewstate' => 0,
                'category' => 'plugin',
                'downloadcounter' => 2787,
                'lastuploaddate' => 1088427240,
                'dependencies' => array (
                      'depends' => array(
                              'typo3' =>'',
                              'php' =>'',
                              'cms' => ''
                       ),
                      'conflicts' => array('' =>'')
                ),
                'authorname' => 'Mirko Balluff',
                'authoremail' => 'balluff@amt1.de',
                'ownerusername' => 'amt1',
                't3xfilemd5' => '3a4ec198b6ea8d0bc2d69d9b7400398f',
            )
        )
    )
);
$test=array();
$test[]=$test2;
$pid = pcntl_fork();
try {
    $datefmt = new IntlDateFormatter('en_US', IntlDateFormatter::FULL, IntlDateFormatter::FULL);
    $datefmt2 = clone $datefmt;
} catch (Exception $e) {}
if (true) {
    $dest = dirname(realpath(__FILE__)) . '/bug27582.png';
}
if (true) {
    $dom = Dom\XMLDocument::createFromString(<<<XML
    <root>
        <test1 xml:id="x"/>
        <test2 xml:id="x"/>
    </root>
    XML);
}
$oIntlDateFormatter = new IntlDateFormatter("en_GB");
$oIntlDateFormatter->setTimeZone('Europe/Berlin');
ob_start("test");
$array = array(
    1 => "entry_1",
    2 => "entry_2",
    3 => "entry_3",
    4 => "entry_4",
    5 => "entry_5"
);
var_dump($array);
function f_18() {
    try {
        return str_repeat('a', 1);
    } catch (Exception $e) {}
    if (true) {
        try {
            return 0;
        } catch (Exception $e) {}
        if (true) {
            return true;
        }
    }
}
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
function f_19() {
    try {
        return new stdClass();
    } catch (Exception $e) {}
    if (true) {
        try {
            return 'printer';
        } catch (Exception $e) {}
        if (true) {
        }
    }
    return ($a->priv_member > $b->priv_member) ? 1 : -1;
}
ob_start();
function f_20() {
    do {
        try {
            $instance = new Foo();
            return $instance->bar;
        } catch (Exception $e) {}
        if (true) {
            try {
                return false;
            } catch (Exception $e) {}
            if (true) {
            }
        }
    } while (false);
    return function() {
            static $foo = 0;
            yield ++$foo;
        };
}
var_dump(ini_get('mysqlnd.debug'));
