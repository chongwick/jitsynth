<?php
function does_not_work()
{
    global $data; // Remove this line to make array_multisort() work

    $data = array('first', 'fifth', 'second', 'forth', 'third');
    $sort = array(1, 5, 2, 4, 3);
    array_multisort($sort, $data);

    var_dump($data);
}
class A {
    public $b;
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
class C {
	use T;
	private array $a = [1];
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
class TrampolineTest {
    public function __call(string $name, array $arguments) {
        echo 'Trampoline for ', $name, PHP_EOL;
    }
}
function new_closure_gen() {
    return function() {
        static $foo = 0;
        yield ++$foo;
    };
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
$x = 1.0;
$conn = pg_connect($conn_str);
var_dump($row);
$domd = new DOMDocument();
$xmlstring = '<?xml version="1.0" encoding="UTF-8"?>
<books></books>';
does_not_work();
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
$blank_line = <<<EOD

EOD;
$a = new A;
var_dump($a);
$tmpFileOut2 = tempnam(sys_get_temp_dir(), 'test');
foreach ($offsets as $offset) {
    $dimension = &$offset;
    $container = false;
    $error = 'false[&' . zend_test_var_export($dimension) . '] has different outputs' . "\n";

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
$dimension = &$offset;
$r = new ResourceBundle( 'en_US', BUNDLE );
printf( "length: %d\n", count($r) );
$cfg = <<<EOT
[global]
error_log = {{FILE:LOG}}
[unconfined]
listen = {{ADDR}}
pm = static
pm.max_children = 1
catch_workers_output = yes
EOT;
$date = '7.8.2010';
$unixtime = strtotime($date);
$date = new DateTime('@'.$unixtime);
$text = 'This is an ‘example’ of using DOM splitText';
$st
 = new DOMDocument('1.0', 'UTF-8');
$no
e = $dom->createTextNode($text);
$do
->appendChild($node);

pr;
$zip = new ZipArchive;
$link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
$list = new SplDoublyLinkedList;
$list->add(1, 1);
$me = new static;
$dom = new DOMDocument('1.0', 'UTF-8');
$node = $dom->getElementById('test');
var_dump($br);
$special_chars_str = <<<EOD
Example of heredoc string contains
$#%^*&*_("_")!#@@!$#$^^&*(special)
chars.
EOD;
$id_1_date = '2014-09-23';
printf("# %s\n", $name);
$fi = new finfo(FILEINFO_MIME_TYPE);
$mixedEndiannessFile = dirname(__FILE__).'/P1000506.JPG';
$tags = exif_read_data($mixedEndiannessFile, 'EXIF', true, false);
$bert = "file://" . __DIR__ . "/bug41033.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_SERVER));
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
$text = 'This is an ‘example’ of using DOM splitText';
$st
rt = 30;
$le
 = new DOMDocument('1.0', 'UTF-8');
$no
e = $dom->createTextNode($text);
$do
ched = $node->splitText($start);
$ma;
$headers1 = exif_read_data(__DIR__ . '/bug64739.jpg');
var_dump($headers1['Title'][0] === '?');
$filename = "bug51997.bz2";
$bz = bzopen($filename, "w");
$fn = static function() { return static::name(); };
$sert = "file://" . __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_SIGN));
$cfg = <<<EOT
[global]
error_log = {{FILE:LOG}}
[unconfined]
listen = {{ADDR}}
pm = static
pm.max_children = 1
catch_workers_output = yes
EOT;
$code = <<<EOT
<?php
echo 1;
EOT;
$tester = new FPM\Tester($cfg, $code);
$plain = "The quick brown fox jumps over the lazy dog.";
$compressed = (string) bzcompress($plain);
$compressed = substr($compressed, 0, strlen($compressed) - 20);
public static function myMethod(string $foo) {
        echo "Called ", __METHOD__, PHP_EOL;
        var_dump($foo);
    }
var_dump($foo);
$depth0 = "depth02";
$iterator = new RecursiveDirectoryIterator(__DIR__ . DIRECTORY_SEPARATOR . $depth0);
for ($i_0 = 0; $i_0 < 10; $i_0++) {
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
}
$o = new C;
$values = ini_get_all();
$obj = new testObject();
$obj2 = unserialize(serialize($obj));
$link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
$reflector = new ReflectionClass(C::class);
$obj = new C();
$reflector->resetAsLazyProxy($obj, function () {
    return new C();
});
$references = array();
debug_zval_dump($references);
$sh = new SessionHandler;
$sh->read("");
var_dump(getopt("abcd"));
printf("printf test 29:%2\$-2d %1\$2d\n", 1, 2);
foo(false, true);
$filename = "bug51997.bz2";
$bz = bzopen($filename, "r");
fseek($bz, 0, SEEK_CUR);
define("TEST",3);
var_dump("hello");
$pkcsfile = __DIR__ . "/openssl_pkcs7_verify__pkcsfile.tmp";
var_dump(file_get_contents($pkcsfile));
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
$dom = new DOMDocument;
$dom->getElementById('x')->remove();
function f_1() {
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        $sert = "file://" . __DIR__ . "/san-cert.pem";
        $cpca = __DIR__ . "/san-cert.pem";
        $utfl = __DIR__ . "/sni_server_uk.pem";
        var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_TIMESTAMP_SIGN, array($cpca), $utfl));
        $data = array('first', 'fifth', 'second', 'forth', 'third');
        $sort = array(1, 5, 2, 4, 3);
        array_multisort($sort, $data);
        if (true) {
            $key = str_repeat('abc', random_int(3, 3));
            var_dump(array_any([$key => 1], static fn () => true));
            ob_clean();
        }
        if (!true) {
            $outfile = tempnam(sys_get_temp_dir(), "ssl");
            $contentfile = tempnam(sys_get_temp_dir(), "ssl");
            $pkcsfile = __DIR__ . "/openssl_pkcs7_verify__pkcsfile.tmp";
            $eml = __DIR__ . "/signed.eml";
            $cainfo = array();
            var_dump(openssl_pkcs7_verify($eml, PKCS7_NOVERIFY, $outfile, $cainfo, $outfile, $contentfile, $pkcsfile));
            var_dump(defined('SO_REUSEPORT'));
        }
    }
}
function f_3() {
    for ($i_4 = 0; $i_4 < 10; $i_4++) {
        $ch = curl_init("https://localhost/username");
        curl_setopt($ch, CURLOPT_USERNAME, null);
        if (true) {
            $o = new TrampolineTest();
            $callback2 = [$o, 'trampoline2'];
            var_dump(spl_autoload_unregister($callback2));
        }
        if (!true) {
            $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
            $phar = new Phar($fname);
            $phar->stopBuffering();
        }
        if (true) {
            $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
            $reqOf3 = 'select 79 n union all select 80 union all select 81';
            $stmt = $pdo->prepare($reqOf3);
            $stmt->execute();
            catch (Exception $e) {
                var_dump($e->getMessage());
            }
            var_dump($e->getMessage());
        }
        if (!true) {
            $empty_webp = __DIR__ . "/gh13774.webp";
            $im = imagecreatefromwebp($empty_webp);
            var_dump($im);
            $now = new DateTime('2018-11-03 11:34:20.781751');
            $ago = new DateTime('2018-11-03 11:34:20.000000');
            $diff = $ago->diff($now, true);
            var_dump($diff->invert, $diff->s, $diff->f);
        }
    }
}
for ($i_5 = 0; $i_5 < 10; $i_5++) {
    );
    if (!$reader->open($fil
    irstAttribute();
                echo $reade;
    $now = new DateTime('2018-11-03 11:34:20.781751');
    $sort = array(1, 5, 2, 4, 3);
    $f = __DIR__."/data/test.txt.gz";
    $h = gzopen($f, 'r');
    for ($i_6 = 0; $i_6 < 10; $i_6++) {
        $oneeighty = M_PI;
        $res = [];
        $data_comp_func = 'compare_function';
        $fn = "bug71263.bz2";
        unlink($fn);
    }
    $tmpFileOut = tempnam(sys_get_temp_dir(), 'test');
    unlink($tmpFileOut);
    function f_7() {
        return "Object";
    }
    list($value) = yield;
    var_dump($value);
    $tester = new FPM\Tester($cfg);
    $userMessage = "'user' directive is ignored when FPM is not running as root";
    $tester->expectLogNotice($userMessage, 'bbbb');
    $closure1 = new_closure_gen();
    $closure2 = new_closure_gen();
    $gen1 = $closure1();
    $gen2 = $closure1();
    $gen3 = $closure2();
    foreach (array($gen1, $gen2, $gen3) as $gen) {
        foreach ($gen as $val) {
            var_dump($val);
        }
    }
    foreach ($gen as $val) {
            var_dump($val);
        }
    var_dump($val);
}
$im = ImageCreateTrueColor(10, 10);
for ($i_8 = 0; $i_8 < 10; $i_8++) {
    $obj = new C();
}
printf("[%03d] SELECT failed, [%d] %s\n",
                $offset, mysqli_errno($link), mysqli_error($link));
$b = 'ok';
$assoc_array = array ('one' => 1, 'two' => 2);
$time = '2000-01-01 00:00:00.000000';
$tz_us = new DateTimeZone('America/Los_Angeles');
$us = new DateTime($time, $tz_us);
for ($i_9 = 0; $i_9 < 10; $i_9++) {
    $assoc_array = array ('one' => 1, 'two' => 2);
}
$pdo = MySQLPDOTest::factory();
var_dump($pdo->query('SELECT broken FROM bug79596')->fetchColumn(0));
$s1 = "some string";
$list = new SplDoublyLinkedList();
$list->push('f');
$ar1 = array("row1" => 2, "row2" => 1);
$args = array($ar1);
$fmt = new NumberFormatter('en_US', NumberFormatter::DECIMAL);
$fmt2 = clone $fmt;
var_dump(ini_get('mysqlnd.debug'));
$curl = curl_init("http://www.google.com");
$mysql = new my_mysqli($host, $user, $passwd, $db, $port, $socket);
$mysql->query("INSERT INTO temp (id) VALUES (3000000897),(3800001532),(3900002281),(3100059612)");
$xmlString = "<root><a><b>1</b><b>2</b><b>3</b></a></root>";
var_dump($br);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
printf("printf test 32:%.17g\n", -INF);
