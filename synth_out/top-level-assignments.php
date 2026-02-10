<?php
$reflector = new ReflectionClass(DateTime::class);
$obj = $reflector->newLazyGhost(function ($obj) {
        var_dump("initializer");
        $obj->__construct();
    });
public function unserialize($data)
    {
        $this->b = unserialize($data);
    }
$this->b = unserialize($data);
$inner = 'r:2;';
$exploit = 'a:2:{i:0;C:3:"obj":'.strlen($inner).':{'.$inner.'}i:1;C:3:"obj":'.strlen($inner).':{'.$inner.'}}';
$data = unserialize($exploit);
$expected_flags = array('col1' => 'MULTIPLE_KEY PART_KEY', 'col2' => 'PART_KEY');
$invalid_files = array(
  0,
  1234,
  -2.34555,
  TRUE,
  FALSE,
  " ",
);
$conn = pg_connect($conn_str);
$table='test_68638';
pg_update($conn,$table, array('value' => '+inf'), array('id' => 3));
$tester = new FPM\Tester($cfg);
$userMessage = "'user' directive is ignored when FPM is not running as root";
$tester->expectLogNotice($userMessage, 'bbbb');
function test($case) {
    $plain = "The quick brown fox jumps over the lazy dog.";
    $fn = "bug71263.bz2";
    $compressed = (string) bzcompress($plain);
    echo "Compressed len = ", strlen($compressed), "\n";

    if ($case == 1) {
        // Set a random byte in the middle of the compressed data
        // --> php_bz2_decompress_filter() detects fatal error
        // --> fread() displays empty string then garbage, no errors detected:
        $compressed[strlen($compressed) - 15] = 'X';
    } else if ($case == 2) {
        // Truncate the compressed data
        // --> php_bz2_decompress_filter() does not detect errors,
        // --> fread() displays the empty string:
        $compressed = substr($compressed, 0, strlen($compressed) - 20);
    } else {
        // Corrupted final CRC
        // --> php_bz2_decompress_filter() detects fatal error
        // --> fread() displays an empty string, then the correct plain text, no error detected:
        $compressed[strlen($compressed)-2] = 'X';
    }

    file_put_contents($fn, $compressed);

    $r = fopen($fn, "r");
    stream_filter_append($r, 'bzip2.decompress', STREAM_FILTER_READ);
    while (!feof($r)) {
        $s = fread($r, 100);
        echo "read: "; var_dump($s);
    }
    fclose($r);
    unlink($fn);
}
test(2);
$array_test = array("a", "b", "d", 7, "u" => "U", -4, "-.008" => "neg.008");
var_dump( end($array_test) );
$users = MailBox::USERS;
$from = ini_get('sendmail_from');
$bcc = $users[2];
$xMailer = 'bug80706_x_mailer';
$headers = "From: {$from}\r\n"
    . "Bcc: {$bcc}\r\n"
    . "X-Mailer: {$xMailer}";
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
$list = new SplDoublyLinkedList;
$reflector = new ReflectionClass(C::class);
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
function test() {
    if (!stream_wrapper_register('foo', \Wrapper::class)) {
        throw new \Exception('Could not register stream wrapper');
    }

    $dir = opendir('foo://bar');

    if (!stream_wrapper_unregister('foo')) {
        throw new \Exception('Could not unregister stream wrapper');
    }

    $wrapper = stream_get_meta_data($dir)['wrapper_data'];
    if (!$wrapper instanceof Wrapper) {
        throw new \Exception('Wrapper is not of expected type');
    }

    closedir($dir);
    unset($dir);
}
test();
$f = function () {};
$array1 = array(1, 2);
function f_0() {
    $a = 1;
    return [0, $a];
}
$dest = dirname(realpath(__FILE__)) . '/bug27582.png';
$im2 = imagecreatefrompng($dest);
$offset = 'teststring';
$sort = array(1, 5, 2, 4, 3);
$b = "30";
$db = MySQLPDOTest::factory();
$stmt = $db->prepare('SELECT * FROM test_33689');
$tmp = $stmt->getColumnMeta(0);
$dom = Dom\HTMLDocument::createEmpty();
$container = $dom->appendChild(createElement($dom, "container"));
$container->appendChild(createElementNS($dom, "http://www.w3.org/1999/xhtml", "bar:html", "9"));
$inner = 'r:2;';
$exploit = 'a:2:{i:0;C:3:"obj":'.strlen($inner).':{'.$inner.'}i:1;C:3:"obj":'.strlen($inner).':{'.$inner.'}}';
$dom = Dom\HTMLDocument::createEmpty();
$container = $dom->appendChild(createElement($dom, "container"));
$im = ImageCreateTrueColor(10, 10);
$color = ImageColorAllocateAlpha($im, 0, 0, 0, 1);
class foo
{
  function __toString() {
    return "Object";
  }
}
$object1 = new foo();
$i = 0;
$array = new ArrayObject();
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
$object = new StdClass();
$array = array('f' => "first", "s" => 'second', 1, 2.222);
$dom = new DOMDocument;
$dom->strictErrorChecking = false;
$depth0 = "depth02";
$depth1 = "depth1";
$depth2 = "depth2";
$targetDir = __DIR__ . DIRECTORY_SEPARATOR . $depth0 . DIRECTORY_SEPARATOR . $depth1 . DIRECTORY_SEPARATOR . $depth2;
touch($targetDir . DIRECTORY_SEPARATOR . 'getSubPathname_test_2.tmp');
$fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
$phar = new Phar($fname);
$phar->setDefaultStub(str_repeat('a', 401));
$fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
$phar = new Phar($fname);
$phar->setDefaultStub(str_repeat('a', 400));
$bert = "file://" . __DIR__ . "/bug41033.pem";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_SERVER, array($cpca)));
mysqli_free_result($res);
$db = getDbConnection();
$sql = '
    SET NOCOUNT ON
    SELECT 0 AS [result]
';
$stmt = $db->query($sql);
var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));
$db = MySQLPDOTest::factory();
$stmt = $db->prepare('SELECT * FROM test_33689');
$tmp = $stmt->getColumnMeta(0);
print_r($tmp);
grapheme_strpos(1,1,2147483648);
function f_1() {
    $outfile = tempnam(sys_get_temp_dir(), "ssl");
    class A {
        public $a;
    }
    $b = new A();
    $b->dyn = 1;
}
$pass	= PDO_MYSQL_TEST_PASS;
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
$compressed = file_get_contents(__DIR__ . "/75776.$ext");
public function __construct($b)
        {
            global $y;
            $y++;

            $this->foo = self::A + $b;
        }
$this->foo = self::A + $b;
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
$sql = sprintf('ALTER TABLE test ADD zero %s UNSIGNED ZEROFILL', $datatype);
$fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
$phar = new Phar($fname);
$phar['b.php'] = '<php echo "this is b\n"; ?>';
call_user_func(array("static","ok"));
$dom = new DOMDocument('1.0', 'UTF-8');
$node = $dom->getElementById('test');
var_dump($node->textContent);
trait Foo {
    public static function myMethod(string $foo) {
        echo "Called ", __METHOD__, PHP_EOL;
        var_dump($foo);
    }
}
function foo(Closure $c = Foo::myMethod(...)) {
    var_dump($c);
    $c("abc");  
}
$c("abc");
printf("printf test 10:<%15s>\n", "hoyesterettsjustitiarius");
$tmpFileOut2 = tempnam(sys_get_temp_dir(), 'test');
function test($p12_contents, $password) {
    openssl_pkcs12_read($p12_contents, $cert_data, $password);
    openssl_error_string();
    var_dump(count($cert_data['extracerts']));
}
openssl_pkcs12_read($p12_contents, $cert_data, $password);
$column_def = array('col1 CHAR(1)', 'col2 CHAR(2)','INDEX idx_col1_col2(col1, col2)');
$create = 'CREATE TABLE test(id INT, ';
foreach ($column_def as $v) {
        $create .= sprintf('%s, ', $v);
    }
$create .= sprintf('%s, ', $v);
$create = sprintf('%s)', substr($create, 0, -2));
$datePre = DateTime::createFromFormat("!D d M Y", "Fri 17 may 2011");
$a[10] = "42";
$bert = "file://" . __DIR__ . "/bug41033.pem";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_CRL_SIGN, array($cpca)));
var_dump(http_get_last_response_headers());
class A
{
    use T1;
}
class B extends A
{
    use T2;
}
$b = new B();
$b->aa();
printf("printf test 27:%3\$d %d %d\n", 1, 2, 3);
