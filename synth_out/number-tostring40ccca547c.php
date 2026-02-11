<?php
class Test implements ArrayAccess {
    public function offsetExists($x): bool { $GLOBALS["obj"] = 24; return true; }
    public function offsetGet($x): mixed { var_dump($x); return 42; }
    public function offsetSet($x, $y): void { }
    public function offsetUnset($x): void { }
}
function display($res)
{
	echo implode("\n", array_map(fn($row) => implode("\t", $row), $res))."\n";
}
trait Foo {
    public static function myMethod(string $foo) {
        echo "Called ", __METHOD__, PHP_EOL;
        var_dump($foo);
    }
}
class MyObjectStorage extends SplObjectStorage {
    // Overwrite getHash() with just some (working) test-method
    public function getHash($object): string { return get_class($object); }
}
function test2() {
    $x = test();
}
class A {
    static function name() { return 'A'; }
    function foo() {
        $fn = function() { return static::name(); };
        echo static::name() . ' vs ' . $fn() . "\n";
    }
    function bar() {
        $fn = static function() { return static::name(); };
        echo static::name() . ' vs ' . $fn() . "\n";
    }
    static function baz() {
        $fn = function() { return static::name(); };
        echo static::name() . ' vs ' . $fn() . "\n";
    }
}
class B extends A {
    static function name() { return 'B'; }
}
class TestSoapClient extends SoapClient
{
    public function __doRequest($req, $loc, $act, $ver, $one_way = 0): string
    {
        return <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<SOAP-ENV:Envelope
  xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/"
  xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
  xmlns:ns="urn:ebay:api:PayPalAPI">
  <SOAP-ENV:Body id="_0">
    <GetExpressCheckoutDetailsResponse xmlns="urn:ebay:api:PayPalAPI">
      <Timestamp>2008-06-23T14:51:08Z</Timestamp>
      <Ack>Success</Ack>
      <CorrelationID>ae013a0ccdf13</CorrelationID>
      <Version>50.000000</Version>
      <Build>588340</Build>
      <GetExpressCheckoutDetailsResponseDetails xsi:type="ns:GetExpressCheckoutDetailsResponseDetailsType">
        <Token>EC-11Y75137T2399952C</Token>
        <PayerInfo>
          <Payer>example@example.com</Payer>
          <PayerID>MU82WA43YXM9C</PayerID>
          <PayerStatus>verified</PayerStatus>
        </PayerInfo>
      </GetExpressCheckoutDetailsResponseDetails>
    </GetExpressCheckoutDetailsResponse>
  </SOAP-ENV:Body>
</SOAP-ENV:Envelope>
XML;
    }
}
class classA
{
  public function __toString() {
    return "key";
  }
}
#[\AllowDynamicProperties]
class C {
    public $b;
    public function __construct() {
        $this->a = new Canary();
    }
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
class string1 {
  public function __toString() {
    return "Object";
  }
}
class ParentClass { }
class ChildClass extends ParentClass {
    public function testIsCallable() {
        var_dump(is_callable(array($this, 'parent::testIsCallable')));
    }
    public function testIsCallable2() {
        var_dump(is_callable(array($this, 'static::testIsCallable2')));
    }
}
function checkFlags($reported_flags, $expected_flags, $flags) {
        $found_flags = $unexpected_flags = '';
        foreach ($flags as $code => $name) {
            if ($reported_flags >= $code) {
                $reported_flags -= $code;
                $found_flags .= $name . ' ';
                if (stristr($expected_flags, $name)) {
                    $expected_flags = trim(str_ireplace($name, '', $expected_flags));
                } else {
                    $unexpected_flags .= $name . ' ';
                }
            }
        }

        return array($expected_flags, $unexpected_flags, $found_flags);
    }
class bug8318 extends \SplFileObject
{
    public function __construct()
    {
    }

    public function fpassthru(): int
    {
        return 0;
    }
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
function dumpElement() {
    list($value) = yield;
    var_dump($value);
}
class Box {
    public ?Test $value;
}
class TrampolineTest {
    public function __call(string $name, array $arguments) {
        echo 'Trampoline for ', $name, PHP_EOL;
    }
}
function setStyleAndThickness($im, $color, $thickness)
{
    $style = array();
    $i = 0;
    while ($i < 16 * $thickness) {
        $style[$i++] = $color;
    }
    while ($i < 20 * $thickness) {
        $style[$i++] = IMG_COLOR_TRANSPARENT;
    }
    while ($i < 28 * $thickness) {
        $style[$i++] = $color;
    }
    while ($i < 32 * $thickness) {
        $style[$i++] = IMG_COLOR_TRANSPARENT;
    }
    imagesetstyle($im, $style);
    imagesetthickness($im, $thickness);
}
function gen() {
    yield 0;
    yield from gen();
}
function bar($gen) {
    yield from $gen;
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
function __construct($val) {
        $this->priv_member = $val;
    }
function __(){
  $GLOBALS['a'] = "bug\n";
  array_splice($GLOBALS,0,count($GLOBALS));
  /* All global variables including $GLOBALS are removed */
  echo $GLOBALS['a'];
}
register_shutdown_function('timE');
printf("printf test 9:<%-20s>\n", "bar");
var_dump(spl_autoload_functions());
$curl = curl_init("http://www.google.com");
curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 1);
$c = "assert";
$c(false);
$meta_res = $stmt->result_metadata();
$field = $meta_res->fetch_field();
printf("Table        : %s\n", $field->table);
$obj = new Test;
var_dump($obj);
printf("printf test 7:%010.2f\n", 2.5);
$pdo = MySQLPDOTest::factory();
$pdo->query('CREATE TABLE bug79596 (broken FLOAT(2,1))');
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
$from = "%#$*&@()";
$to = "specials";
for($index = 0; $index < count($str_arr); $index++) {
  echo "-- Iteration $count --\n";

  $str = $str_arr[$index];  //getting the array element in 'str' variable

  //strtr() call in three args syntax form
  var_dump( strtr($str, $from, $to) );

  //strtr() call in two args syntax form
  var_dump( strtr($str, $replace_pairs) );

  $count++;
}
$str = $str_arr[$index];
var_dump( strtr($str, $from, $to) );
$dt = new DateTime('@1604219400');
$dt->setTimezone(new DateTimeZone('UTC'));
spl_autoload_register(function ($class) {
    if (!require_once($class.'.inc')) {
        error_log('Error: Autoload class: '.$class.' not found!');
    }
});
$dt = DateTime::createFromFormat('Y-m-d|', '2011-02-02');
var_dump($dt);
$originalEnvelopeData = "any string with \x1a is cut at this point.";
$tmpFileOut2 = tempnam(sys_get_temp_dir(), 'test');
$envelopeData = file_get_contents($tmpFileOut2);
var_dump($originalEnvelopeData === $envelopeData);
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
$reqOf3 = 'select 79 n union all select 80 union all select 81';
$stmt2 = $pdo->query("select * from ($reqOf3) t order by n desc");
display([ $stmt2->fetch() ]);
$inputs = array(
      'The ISO 8601:1988 week number' => "%V",
      'Weekday as decimal' => "%u",
);
foreach($inputs as $key =>$value) {
      echo "\n--$key--\n";
      var_dump( gmstrftime($value) );
      var_dump( gmstrftime($value, $timestamp) );
}
var_dump( gmstrftime($value) );
$c("abc");
$doc = new \DOMDocument();
$target = $doc->documentElement->lastChild;
$target->after('bar', $doc->documentElement->firstChild, 'baz');
$text = 'This is an ‘example’ of using DOM splitText';
$dom = new DOMDocument('1.0', 'UTF-8');
$node = $dom->createTextNode($text);
$dom->appendChild($node);
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
$reqOf3 = 'select 79 n union all select 80 union all select 81';
$stmt = $pdo->prepare($reqOf3);
$res = $stmt->fetchAll();
display($res);
$im = imagecreate(800, 800);
imagepalettetotruecolor($im);
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
$d0 = $prefix . "ソフト";
mkdir($d0);
printf("printf test 11:<%30s>\n", "hoyesterettsjustitiarius");
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
$stmt = $pdo->prepare("select :1 n union all select :1 + 1 union all select :1 + 2 union all select :1 + 3");
$stmt->execute([ 32 ]);
$list = new MyObjectStorage();
foreach($list as $x) var_dump($list->offsetExists($x));
$list2 = clone $list;
foreach($list2 as $x) var_dump($list2->offsetExists($x));
var_dump($list2->offsetExists($x));
printf("printf test 23:%016X\n", 170);
var_dump(range('a', 'z', 100));
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
$dom = new DOMDocument;
var_dump($dom->getElementById('x')?->nodeName);
var_dump(foo());
test2();
$dt = new DateTime('@1604219400');
$dt->setTimezone(new DateTimeZone('America/Boise'));
$fp = tmpfile();
rewind($fp);
$filename = "bug51997.bz2";
$bz = bzopen($filename, "r");
fseek($bz, 0, SEEK_CUR);
$meta_res = $stmt->result_metadata();
$field = $meta_res->fetch_field();
printf("Table        : %s\n", $field->table);
(new B)->baz();
printf("printf test 12:%5.2f\n", -12.34);
$reflector = new ReflectionClass(C::class);
$obj = $reflector->newLazyGhost(function () {
    throw new \Exception('initializer');
});
test('Ghost', $obj);
$fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
$phar = new Phar($fname);
var_dump(strlen($phar->getStub()));
$halves[0] = $halves[1] = 0;
$halves[(mt_rand(0, $max - 1) >> 1) & 1]++;
$total = 10000;
$halves[0] = $halves[1] = 0;
$halves[(int) (mt_rand(0, $max - 1) / ($max / 2))]++;
printf("%.1f%% vs. %.1f%%\n", 100. * $halves[0] / $total, 100. * $halves[1] / $total);
$sert = "file://" . __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_NS_SSL_SERVER));
$filename = "bug51997.bz2";
$bz = bzopen($filename, "w");
bzclose($bz);
$reflector = new ReflectionClass(C::class);
$reflector->initializeLazyObject($obj);
$sert = "file://" . __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_CRL_SIGN));
printf("pdo.dsn.mysql cannot be accessed through ini_get_all()/ini_get()\n");
date_default_timezone_set("Europe/Lisbon");
var_dump(@$obj->dynamic++);
printf("printf test 2:%d\n", 42);
$tester = new FPM\Tester($cfg);
$userMessage = "'user' directive is ignored when FPM is not running as root";
$tester->expectLogNotice($userMessage, 'cccc');
$dom = new DOMDocument;
$element = $dom->appendChild($dom->createElement('root'));
$element->prepend('x', new DOMEntity);
var_dump(mb_check_encoding("&\xc2\xb7 TEST TEST TEST TEST TEST TEST", "HTML-ENTITIES"));
$ch = curl_init("https://localhost/userpwd");
$response = curl_exec($ch);
var_dump(str_contains($response, "authorization"));
$f = __DIR__."/data/test.txt.gz";
$h = gzopen($f, 'r');
var_dump(gzread($h, 8));
$magic_file = __DIR__ . '/bug79283.db';
$finfo = new finfo(FILEINFO_NONE, $magic_file);
var_dump($finfo->buffer("buffer\n"));
$trace_file = '/tmp/mysqli_debug_phpt.trace';
printf("[003] Trace file '%s' has not been created\n", $trace_file);
$f = __DIR__."/data/test.txt.gz";
$h = gzopen($f, 'r');
gzclose($h);
$client = new TestSoapClient(__DIR__.'/bug44882.wsdl');
print_r($client->GetExpressCheckoutDetails());
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
$code = <<<EOT
<?php
echo "Test\n";
EOT;
$tester = new FPM\Tester($cfg, $code);
$tester->close();
printf("printf test 17:%X\n", 170);
$fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
$phar = new Phar($fname);
$phar->stopBuffering();
$varOutput = ob_get_contents();
$varOutput = str_replace(
        [$var_dim_filename],
        ['%s'],
        $varOutput
    );
file_put_contents(__DIR__ . DIRECTORY_SEPARATOR . "debug_false_container_{$failuresNb}.txt", $varOutput);
$search = array ('zero', 'key' => 'val', 'two', 10 => 'value');
$unset_var = 10;
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
foreach($inputs as $input) {
  echo "\n-- Iteration $iterator --\n";
  try {
      var_dump( array_key_exists($input, $search) );
  } catch (TypeError $exception) {
      echo $exception->getMessage() . "\n";
  }
  $iterator++;
}
var_dump( array_key_exists($input, $search) );
printf("[002] Expecting string on 32bit got %s/%s\n", gettype($id), var_export($id, true));
$cert = "file://" . __DIR__ . "/cert.crt";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_CRL_SIGN, array($cpca), $utfl));
$obj = new C();
var_dump($obj->a);
$bert = "file://" . __DIR__ . "/bug41033.pem";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_CLIENT, array($cpca)));
catch (Exception $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
printf("%s: %s\n", $e::class, $e->getMessage());
$mysql = new my_mysqli($host, $user, $passwd, $db, $port, $socket);
$mysql->query("CREATE TABLE temp (id INT UNSIGNED NOT NULL)");
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
$tester->expectLogStartNotices();
$conn = odbc_connect($dsn, $user, $pass);
$res = odbc_exec($conn, "SELECT * FROM bug80147");
odbc_fetch_row($res);
var_dump($br);
phpinfo(INFO_VARIABLES);
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
$a = 'ok';
$b = 'ok';
$_a = $a;
$_b = $b;
var_dump($_a, $_b);
$dom = new DOMDocument;
$test1 = $dom->getElementById('x');
$test1->setAttribute('xml:id', 'y');
$link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
$link->close();
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
for($index=0; $index<count($needle); $index++) {
  echo "\n-- Iteration $count --\n";
  var_dump( strrchr($haystack, $needle[$index]) );
  $count ++;
}
var_dump( strrchr($haystack, $needle[$index]) );
var_dump(filter_var("<data&sons>", FILTER_SANITIZE_ENCODED, FILTER_FLAG_ENCODE_LOW));
$sert = "file://" . __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_SIGN));
$cert = "file://" . __DIR__ . "/cert.crt";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SMIME_ENCRYPT, array($cpca)));
$bert = "file://" . __DIR__ . "/bug41033.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_SIGN));
$db = PDOTest::factory();
var_dump($db->query("SELECT * from test34630")->fetchAll(PDO::FETCH_ASSOC));
$code = null;
$err = null;
pfsockopen('udp://127.0.0.1', '63844', $code, $err, INF);
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
$d0 = $prefix . "ソフト";
mkdir($d0);
var_dump(__METHOD__);
zerofill(12, $link, 'DEC');
$meta_res = $stmt->result_metadata();
$field = $meta_res->fetch_field();
printf("Table        : %s\n", $field->table);
var_dump(strlen(file_get_contents('php://input')));
$obj = new string1;
var_dump( rtrim($obj, "tc") );
var_dump(__METHOD__);
$sibling->common();
$various_arrays = array (
  array(5 => 55,  66, 22, 33, 11),
  array ("a" => "orange",  "banana", "c" => "apple"),
  array(1, 2, 3, 4, 5, 6),
  array("first", 5 => "second", "third"),
  array(1, 1, 8 => 1,  4 => 1, 19, 3 => 13),
  array('bar' => 'baz', "foo" => 1),
  array('a'=>1,'b'=>array('e'=>2,'f'=>3),'c'=>array('g'=>4),'d'=>5),
);
foreach ($various_arrays as $array) {
  echo "\n-- Iteration $count --\n";

  echo "- With default sort_flag -\n";
  $temp_array = $array;
  var_dump(asort($temp_array) );
  var_dump($temp_array);

  echo "- Sort_flag = SORT_REGULAR -\n";
  $temp_array = $array;
  var_dump(asort($temp_array, SORT_REGULAR) );
  var_dump($temp_array);
  $count++;
}
$temp_array = $array;
var_dump($temp_array);
$ch = curl_init("https://localhost/userpwd");
$response = curl_exec($ch);
var_dump(str_contains($response, "authorization"));
$depth0 = "depth02";
$iterator = new RecursiveDirectoryIterator(__DIR__ . DIRECTORY_SEPARATOR . $depth0);
$it = new RecursiveIteratorIterator($iterator);
$it->next();
$ch = curl_init("https://localhost/userpwd");
$response = curl_exec($ch);
var_dump(str_contains($response, "authorization"));
$dom = new DOMDocument;
$dom->loadXML(<<<XML
<root>
    <test1 xml:id="x"/>
    <test2 attr="x"/>
</root>
XML);
$sql = "SELECT 11111 as `1`, 22222 as `2`";
$link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
$res = $link->query($sql);
$row = $res->fetch_array();
var_dump($row);
$a = new Test();
$a->TestFunc();
mt_srand(1234567890);
test("http://te[st@2001:db8:3333:4444:5555:6666:1.2.3.4]");
$filename = "bug51997.bz2";
$str = "This is a test string.\n";
$bz = bzopen($filename, "w");
bzwrite($bz, $str);
$dom = Dom\HTMLDocument::createFromString(<<<HTML
<!DOCTYPE html>
<html>
    <body>
        <svg xmlns="http://www.w3.org/2000/svg" height="1"></svg>
        <math></math>
    </body>
</html>
HTML);
var_dump($dom->lookupNamespaceURI(""));
$ar1 = array("row1" => 2, "row2" => 1);
var_dump(array_multisort($ar1));
var_dump ( $vars );
php_cli_server_start(file_get_contents(__DIR__.'/bug64433_srv.inc'));
$outfile = tempnam(sys_get_temp_dir(), "ssl");
$contentfile = tempnam(sys_get_temp_dir(), "ssl");
$pkcsfile = __DIR__ . "/openssl_pkcs7_verify__pkcsfile.tmp";
$eml = __DIR__ . "/signed.eml";
$cainfo = array();
var_dump(openssl_pkcs7_verify($eml, PKCS7_NOVERIFY, $outfile, $cainfo, $outfile, $contentfile, $pkcsfile));
printf("printf test 5:%-10.2f\n", 2.5);
$db = getDbConnection();
$stmt = $db->prepare("SELECT 1, 2 AS named, 3");
$stmt->execute();
$child = new ChildClass();
$child->testIsCallable();
$textascii = 'This is an "example" of using DOM splitText';
$start = 30;
$length = 3;
$dom = new DOMDocument('1.0', 'UTF-8');
$node = $dom->createTextNode($textascii);
$matched = $node->splitText($start);
$matched->splitText($length);
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
$pdo->exec("create temp table t (n int, t text)");
$xmlString = "<root><a><b>1</b><b>2</b><b>3</b></a></root>";
$xml = simplexml_load_string($xmlString);
$nodes = $xml->a->b;
test($nodes, "asXml", fn ($n) => $n->asXml());
$textascii = 'This is an "example" of using DOM splitText';
$start = 30;
$length = 3;
$dom = new DOMDocument('1.0', 'UTF-8');
$node = $dom->createTextNode($textascii);
$matched = $node->splitText($start);
$matched->splitText($length);
$db = PDOTest::test_factory(dirname(__FILE__) . '/common.phpt');
foreach ([false, true] as $emulate) {
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, $emulate);

    try {
        $stmt = $db->prepare('select ?- lseg \'((-1,0),(1,0))\'');
        $stmt->execute();
    } catch (PDOException $e) {
        var_dump('ERR');
    }

    $stmt = $db->prepare('select ??- lseg \'((-1,0),(1,0))\'');
    $stmt->execute();

    var_dump($stmt->fetch());
}
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, $emulate);
test(1);
$array_test = array("a", "b", "d", 7, "u" => "U", -4, "-.008" => "neg.008");
var_dump( reset($array_test) );
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
var_dump(($bug_gh16013_callback_struct->return_int16)(-10000));
$plain = "The quick brown fox jumps over the lazy dog.";
$fn = "bug71263.bz2";
$compressed = (string) bzcompress($plain);
$compressed = substr($compressed, 0, strlen($compressed) - 20);
file_put_contents($fn, $compressed);
$fp = fopen(__FILE__, "r");
fclose($fp);
$im = imagecreate(800, 800);
imagecolorallocate($im, 255, 255, 255);
$ch = curl_init();
var_dump(curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 1));
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
foreach ($flags as $code => $name) {
            if ($reported_flags >= $code) {
                $reported_flags -= $code;
                $found_flags .= $name . ' ';
                if (stristr($expected_flags, $name)) {
                    $expected_flags = trim(str_ireplace($name, '', $expected_flags));
                } else {
                    $unexpected_flags .= $name . ' ';
                }
            }
        }
$expected_flags = trim(str_ireplace($name, '', $expected_flags));
foreach ($columns as $column_def => $expected_flags) {
        if (!mysqli_query($link, 'DROP TABLE IF EXISTS test')) {
            printf("[002] %s [%d] %s\n", $column_def,
                mysqli_errno($link), mysqli_error($link));
            continue;
        }

        $create = sprintf('CREATE TABLE test(id INT, col1 %s)', $column_def);
        if (!mysqli_query($link, $create)) {
            // Server might not support it - skip
            continue;
        }

        if (!$res = mysqli_query($link, 'SELECT * FROM test')) {
            printf("[003] Can't select from table, %s [%d] %s\n", $column_def,
                mysqli_errno($link), mysqli_error($link));
            continue;
        }

        $field = mysqli_fetch_field_direct($res, 1);
        if (!is_object($field)) {
            printf("[004] Fetching the meta data failed, %s [%d] %s\n", $column_def,
                mysqli_errno($link), mysqli_error($link));
            continue;
        }
        if ($field->name != 'col1') {
            printf("[005] Field information seems wrong, %s [%d] %s\n", $column_def,
                mysqli_errno($link), mysqli_error($link));
            continue;
        }

        /*
        TODO
        Unfortunately different server versions give you slightly different
        results.The test does not yet fully reflect all server changes/bugs etc.
        */
        switch ($column_def) {
            case 'INT UNSIGNED NOT NULL':
            case 'INT NOT NULL':
            case 'CHAR(1) NOT NULL':
            case 'SET("one", "two") NOT NULL':
            case 'ENUM("one", "two") NOT NULL':
                $version = mysqli_get_server_version($link);
                if ($version < 50000) {
                    // TODO - check exact version!
                    $expected_flags = trim(str_replace('NO_DEFAULT_VALUE', '', $expected_flags));
                }
                break;

            case 'BIT':
                $version = mysqli_get_server_version($link);
                if (($version <= 50114 && $version > 50100) || ($version == 50200)) {
                    // TODO - check exact version!
                    $expected_flags = trim(str_replace('UNSIGNED', '', $expected_flags));
                }

            default:
                break;
        }

        list($missing_flags, $unexpected_flags, $flags_found) = checkFlags($field->flags, $expected_flags, $flags);
        if ($unexpected_flags) {
            printf("[006] Found unexpected flags '%s' for %s, found '%s' with MySQL %s'\n",
                $unexpected_flags, $column_def, $flags_found, mysqli_get_server_version($link));
        }
        if ($missing_flags) {
            printf("[007] The flags '%s' have not been reported for %s, found '%s'\n",
                $missing_flags, $column_def, $flags_found);
            var_dump($create);
            var_dump(mysqli_get_server_version($link));
            die($missing_flags);
        }

        mysqli_free_result($res);
    }
printf("[002] %s [%d] %s\n", $column_def,
                mysqli_errno($link), mysqli_error($link));
$bert = "file://" . __DIR__ . "/bug41033.pem";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_NS_SSL_SERVER, array($cpca), $utfl));
$dbh = @pg_connect($conn_str);
$res = pg_query($dbh, 'SET client_min_messages TO NOTICE;');
var_dump($res);
$inputs = array(
      'Century number' => "%C",
      'Month Date Year' => "%D",
      'Year with century' => "%G",
      'Year without century' => "%g",
);
foreach($inputs as $key =>$value) {
      echo "\n--$key--\n";
      var_dump( strftime($value) );
      var_dump( strftime($value, $timestamp) );
}
var_dump( strftime($value) );
error_reporting(0);
restore_exception_handler();
$cert = "file://" . __DIR__ . "/cert.crt";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_SERVER, array($cpca), $utfl));
$users = MailBox::USERS;
$to = $users[0];
$bcc = $users[2];
foreach (['to' => $to, 'bcc' => $bcc] as $recipient => $mailAddress) {
    $mailBox = MailBox::login($mailAddress);
    $mail = $mailBox->getMailsBySubject($subject);
    $mailBox->logout();

    if ($mail->isAsExpected($from, $to, $subject, $message)) {
        echo "Found the email. {$recipient} received.\n";
    }

    if ($mail->getHeader('X-Mailer') === $xMailer) {
        echo "The specified x-Mailer exists.\n\n";
    }
}
$mailBox = MailBox::login($mailAddress);
$mailBox->logout();
var_dump(mb_check_encoding("&\xc2\xb7 TEST TEST TEST TEST TEST TEST", "HTML-ENTITIES"));
$db = PDOTest::factory();
$fp = tmpfile();
$insert = $db->prepare("insert into test34630 (id, val) values (1, :blob)");
$insert->bindValue(':blob', $fp, PDO::PARAM_LOB);
$bert = "file://" . __DIR__ . "/bug41033.pem";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_CRL_SIGN, array($cpca), $utfl));
$cl = new bug8318;
$cl->fpassthru();
$conn = odbc_connect($dsn, $user, $pass);
odbc_exec($conn, "INSERT INTO bug80147 VALUES (1, CONVERT(VARBINARY(50), 'whatever'))");
$list = new SplDoublyLinkedList();
$list->push('o');
$array_object = array();
var_dump($array_object);
printf("printf test 27:%3\$d %d %d\n", 1, 2, 3);
$textascii = 'This is an "example" of using DOM splitText';
$dom = new DOMDocument('1.0', 'UTF-8');
$node = $dom->createTextNode($textascii);
$dom->appendChild($node);
$im = ImageCreateTrueColor(10, 10);
imagesavealpha($im, true);
var_dump(c1::$a3);
$doc = new \DOMDocument();
$target = $doc->documentElement->lastChild;
$target->after('bar', $doc->documentElement->firstChild, 'baz');
$data = array('first', 'fifth', 'second', 'forth', 'third');
var_dump($data);
$varOutput = ob_get_contents();
$varOutput = str_replace(
        [$var_dim_filename],
        ['%s'],
        $varOutput
    );
file_put_contents(__DIR__ . DIRECTORY_SEPARATOR . "debug_false_container_{$failuresNb}.txt", $varOutput);
$fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
$phar = new Phar($fname);
$phar->stopBuffering();
printf("printf test 29:%2\$-2d %1\$2d\n", 1, 2);
$context = stream_context_create(['dummy' => ['foo' => 'bar']]);
file_get_contents('dummy://foo', false, $context);
$conn = odbc_connect($dsn, $user, $pass);
odbc_exec($conn, "INSERT INTO bug80147 VALUES (1, CONVERT(VARBINARY(50), 'whatever'))");
$fp = fopen('php://input', 'r+');
var_dump(fseek($fp, -1, SEEK_SET));
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
$tester->start();
$dfp = opendir ( __DIR__ );
closedir($dfp);
printf("[002] Expecting string on 32bit got %s/%s\n", gettype($id), var_export($id, true));
$db = getDbConnection();
var_dump($db->getAttribute(PDO::DBLIB_ATTR_SKIP_EMPTY_ROWSETS));
var_dump(test());
$test_array = array(1, array(1 => "one", "two" => 2, "" => "f") );
var_dump( end($test_array) );
printf("printf test 20:%16X\n", 170);
printf("printf test 8:<%20s>\n", "foo");
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
foreach ($not_objects as $type ) {
  echo "-- Iteration $loop_counter --\n"; $loop_counter++;
  var_dump( is_object($type) );
}
var_dump( is_object($type) );
var_dump('ERR');
$msgfmt = new MessageFormatter('en_US', '{0,number,integer}');
$msgfmt->parse('abc');
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
var_dump(($bug_gh16013_callback_struct->return_int8)(-4));
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
$fixedArray = new SplFixedArray(1);
$generator = dumpElement();
$generator->send($fixedArray);
$bert = "file://" . __DIR__ . "/bug41033.pem";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_SERVER, array($cpca)));
$datePre = DateTime::createFromFormat("!D d M Y", "Fri 17 may 2011");
$datePost = DateTime::createFromFormat("!d M Y D", "17 may 2011 Fri");
var_dump($datePre->format("Y-m-d") == $datePost->format("Y-m-d"));
$ar1 = array("row1" => 2, "row2" => 1);
$args = array(&$ar1);
var_dump(call_user_func_array("array_multisort", $args));
$filename =  __DIR__ . DIRECTORY_SEPARATOR . 'bug70752.txt';
var_dump(file_exists($filename));
$array_object = array();
var_dump( end($array_object) );
global $box;
$box = new Box();
test($box);
var_dump(error_get_last());
$arrays = array (
/*1*/  array(1, 2), // array with default keys and numeric values
       array(1.1, 2.2), // array with default keys & float values
       array( array(2), array(1)), // sub arrays
       array(false,true), // array with default keys and boolean values
       array(), // empty array
       array(NULL), // array with NULL
       array("a","aaaa","b","bbbb","c","ccccc"),

       // associative arrays
/*8*/  array(1 => "one", 2 => "two", 3 => "three"),  // explicit numeric keys, string values
       array("one" => 1, "two" => 2, "three" => 3 ),  // string keys & numeric values
       array( 1 => 10, 2 => 20, 4 => 40, 3 => 30),  // explicit numeric keys and numeric values
       array( "one" => "ten", "two" => "twenty", "three" => "thirty"),  // string key/value
       array("one" => 1, 2 => "two", 4 => "four"),  //mixed

       // associative array, containing null/empty/boolean values as key/value
/*13*/ array(NULL => "NULL", null => "null", "NULL" => NULL, "null" => null),
       array(true => "true", false => "false", "false" => false, "true" => true),
       array("" => "emptyd", '' => 'emptys', "emptyd" => "", 'emptys' => ''),
       array(1 => '', 2 => "", 3 => NULL, 4 => null, 5 => false, 6 => true),
       array('' => 1, "" => 2, NULL => 3, null => 4, false => 5, true => 6),

       // array with repetitive keys
/*18*/ array("One" => 1, "two" => 2, "One" => 10, "two" => 20, "three" => 3)
);
foreach($arrays as $array) {
  echo "-- Iteration $iterator --\n";
  // with default argument
  echo "- with default argument -\n";
  var_dump( array_reverse($array) );
  // with all possible arguments
  echo "- with \$preserve keys = true -\n";
  var_dump( array_reverse($array, true) );
  echo "- with \$preserve_keys = false -\n";
  var_dump( array_reverse($array, false) );
  $iterator++;
}
var_dump( array_reverse($array, false) );
$o = new TrampolineTest();
$callback1 = [$o, 'trampoline1'];
spl_autoload_register($callback1);
$data = array('first', 'fifth', 'second', 'forth', 'third');
$sort = array(1, 5, 2, 4, 3);
array_multisort($sort, $data);
$im = imagecreate(800, 800);
$black = imagecolorallocate($im, 0, 0, 0);
setStyleAndThickness($im, $black, 6);
global $box;
$box = new Box();
test($box);
$o = new TrampolineTest();
$callback2 = [$o, 'trampoline2'];
spl_autoload_register($callback2);
printf("printf test 14:%c\n", 64);
$link = mysqli_init();
$link->set_charset('sjis');
$db = PDOTest::factory();
$db->exec("CREATE TABLE test36428 (a VARCHAR(10))");
mysqli_free_result($res);
var_dump(gzfile(__DIR__."/data/test.txt.gz", true));
$now = new DateTime('2018-11-03 11:34:20.781751');
$ago = new DateTime('2018-11-03 11:34:20.000000');
$diff = $ago->diff($now, true);
var_dump($diff->invert, $diff->s, $diff->f);
setlocale(LC_ALL, 'de_DE', 'de-DE');
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
var_dump( gmdate($value) );
ini_set('mysqlnd.fetch_data_copy', false);
$now = new DateTimeImmutable();
$date = (new ReflectionClass(DateTime::class))->newInstanceWithoutConstructor();
$dateperiod = (new ReflectionClass(DatePeriod::class))->newInstanceWithoutConstructor();
$dateperiod->__unserialize(['start' => $now, 'end' => $date]);
$dom = Dom\HTMLDocument::createEmpty();
var_dump($dom->lookupNamespaceURI("a"));
$dom = new DOMDocument;
$dom->loadXML(<<<XML
<root>
    <test1 xml:id="x"/>
    <test2 attr="x"/>
</root>
XML);
$initialRequest = false;
$y = 0;
global $y;
$y++;
var_dump($initialRequest ? $x : $y);
var_dump( range(1, 7, 10.0**400) );
$link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
$link->close();
$test = function (#[SensitiveParameter] $sensitive)
{
    debug_print_backtrace();
    var_dump(debug_backtrace());
    var_dump((new Exception)->getTrace());
};
$test('sensitive');
$bert = "file://" . __DIR__ . "/bug41033.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_ENCRYPT));
set_error_handler(function() {
//    var_dump(func_get_args());
    DoesNotExists::$nope = true;
}, E_ALL);
$outfile = tempnam(sys_get_temp_dir(), "ssl");
$contentfile = tempnam(sys_get_temp_dir(), "ssl");
$pkcsfile = __DIR__ . "/openssl_pkcs7_verify__pkcsfile.tmp";
$eml = __DIR__ . "/signed.eml";
$cainfo = array();
var_dump(openssl_pkcs7_verify($eml, PKCS7_NOVERIFY, $outfile, $cainfo, $outfile, $contentfile, $pkcsfile));
var_dump( $count );
test();
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
$reqOf3 = 'select 79 n union all select 80 union all select 81';
$stmt1 = $pdo->query($reqOf3);
display([ $stmt1->fetch() ]);
$args = ["-d", "extension_dir=" . ini_get("extension_dir"), "-d", "extension=" . (substr(PHP_OS, 0, 3) == "WIN" ? "php_" : "") . "soap." . PHP_SHLIB_SUFFIX];
$code = '$server = new SoapServer("' . __DIR__ . '"/bug49278.wsdl", ["trace"=>1]);' .
        <<<'PHP'
        function Add() {}
        $server->addFunction('Add');
        $server->handle();
        PHP;
php_cli_server_start($code, null, $args);
printf("[002] [%d] %s\n", mysqli_errno($link), mysqli_error($link));
var_dump(posix_setrlimit(POSIX_RLIMIT_NOFILE, 128, 128));
test('<?php echo "1";//2');
$fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
$phar = new Phar($fname);
$phar->stopBuffering();
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
var_dump("done");
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt', Pdo::class, true);
var_dump($pdo->query('SELECT 1;')->fetchAll());
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
$tester->expectLogStartNotices();
$date = (new ReflectionClass(DateTime::class))->newInstanceWithoutConstructor();
$dateperiod = (new ReflectionClass(DatePeriod::class))->newInstanceWithoutConstructor();
$dateperiod->__unserialize(['start' => $date]);
date_default_timezone_set('Europe/Kiev');
printf("[001] Cannot connect to the server using host=%s, user=%s, passwd=***, dbname=%s, port=%s, socket=%s\n",
            $host, $user, $db, $port, $socket);
$GLOBALS['b'] = 2;
$b = &$GLOBALS['b'];
$GLOBALS['b'] = 3;
$a = 4;
var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
var_dump( range(1, 7, fdiv(0, 0)) );
$dom = Dom\HTMLDocument::createEmpty();
dumpNodeList($dom->getElementsByTagName("foo:html"));
session_set_save_handler(new \SessionHandler(), true);
$filename = "bug51997.bz2";
unlink($filename);
$str = 'Hello World';
$shm_key = ftok(__FILE__, 'p');
$shm_id1 = shmop_open($shm_key, 'c', 0644, strlen($str));
var_dump($shm_id1);
printf("[%03d] UPDATE failed, [%d] %s\n",
                $offset, mysqli_errno($link), mysqli_error($link));
$db = getDbConnection();
$db->setAttribute(PDO::DBLIB_ATTR_SKIP_EMPTY_ROWSETS, true);
putenv('REDIR_TEST_DIR='.__DIR__ . '/../../pdo/tests/');
$dbh = @pg_connect($conn_str);
$res = pg_query($dbh, 'SELECT test_notice()');
var_dump($res);
$context = stream_context_create(['http' => ['method' => 'MKCALENDAR']]);
var_dump(file_get_contents("http://" . PHP_CLI_SERVER_ADDRESS, false, $context));
$conn = pg_connect($conn_str);
$table='test_68638';
pg_insert($conn,$table, array('id' => 1, 'value' => 1.2));
$sert = "file://" . __DIR__ . "/san-cert.pem";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_TIMESTAMP_SIGN, array($cpca)));
$dom = new DOMDocument;
$element = $dom->appendChild($dom->createElement('root'));
$element->prepend('x', new DOMEntity);
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
foreach($values as $value) {
      echo "\n-- Iteration $iterator --\n";
      var_dump( image_type_to_mime_type($value) );
      $iterator++;
}
var_dump( image_type_to_mime_type($value) );
date_default_timezone_set('UTC');
zerofill(9, $link, 'DOUBLE');
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
foreach ($arrays as $sub_array){
  echo "-- Iteration $counter --\n";
  var_dump( end($sub_array) );
  /* ensure that internal pointer is moved to last element */
  var_dump( current($sub_array) );
  $counter++;
}
var_dump( current($sub_array) );
$a = new PDO("sqlite::memory:");
$b = $a->prepare("insert into test_35336 (b) values (?)");
$b->execute(array (5));
$responses = array(
    "data://text/plain,HTTP/1.1 302 Moved Temporarily\r\n"
    . "Location: /try-again\r\n"
    . "Transfer-Encoding: chunked\r\n\r\n"
    . "0\r\n\r\n",
    "data://text/plain,HTTP/1.1 200 Ok\r\n"
    . "Transfer-Encoding: chunked\r\n\r\n"
    . "4\r\n1234\r\n0\r\n\r\n",
);
['pid' => $pid, 'uri' => $uri] = http_server($responses, $output);
http_server_kill($pid);
restore_exception_handler();
$heredoc_string = <<<EOT
This is line 1 of 'heredoc' string
This is line 2 of "heredoc" string
EOT;
$heredoc_null_string =<<<EOT
EOT;
$str_array = array(
                    // string without any characters that can be backslashed
                    'Hello world',

                    // string with single quotes
                    "how're you doing?",
                    "don't disturb u'r neighbours",
                    "don't disturb u'r neighbours''",
                    '',
                    '\'',
                    "'",

                    // string with double quotes
                    'he said, "he will be on leave"',
                    'he said, ""he will be on leave"',
                    '"""PHP"""',
                    "",
                    "\"",
                    '"',
            "hello\"",

                    // string with backslash characters
                    'Is your name Ram\Krishna?',
                    '\\0.0.0.0',
                    'c:\php\testcase\addslashes',
                    '\\',

                    // string with nul characters
                    'hello'.chr(0).'world',
                    chr(0).'hello'.chr(0),
                    chr(0).chr(0).'hello',
                    chr(0),

                    // mixed strings
                    "'\\0.0.0.0'",
                    "'\\0.0.0.0'".chr(0),
                    chr(0)."'c:\php\'",
                    '"\\0.0.0.0"',
                    '"c:\php\"'.chr(0)."'",
                    '"hello"'."'world'".chr(0).'//',

            // string with hexadecimal number
                    "0xABCDEF0123456789",
                    "\x00",
                    '!@#$%&*@$%#&/;:,<>',
                    "hello\x00world",

                    // heredoc strings
                    $heredoc_string,
                    $heredoc_null_string
                  );
foreach( $str_array as $str )  {
  echo "\n-- Iteration $count --\n";
  var_dump( addslashes($str) );
  $count ++;
}
var_dump( addslashes($str) );
$ch = curl_init();
curl_exec($ch);
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
var_dump(gc_collect_cycles());
$mysqli = new mysqli("$host:$port", $user, $passwd, $db);
$tbl = "test";
$sql = "CREATE TABLE $tbl (bit_column_1 bit(16) NOT NULL) DEFAULT CHARSET=utf8";
$mysqli->query($sql);
$empty_string = <<<EOT
EOT;
$blank_line = <<<EOT

EOT;
$multiline_string = <<<EOT
<html>Roy&#039;s height &gt; Sam&#039;s height
13 &lt; 25
1111 &amp; 0000 = 0000
&quot;This is a double quoted string&quot;
EOT;
$diff_whitespaces = <<<EOT
<html>Roy&#039;s height\r &gt; Sam\t&#039;s height
1111\t\t &amp; 0000\v\v = \f0000
&quot; heredoc\ndouble quoted string. with\vdifferent\fwhite\vspaces&quot;
EOT;
$numeric_string = <<<EOT
<html>11 &lt; 12. 123 string 4567
&quot;string&quot; 1111\t &amp; 0000\t = 0000\n;
EOT;
$quote_char_string = <<<EOT
<html>&lt; This's a string with quotes:
"strings in double quote" &amp;
'strings in single quote' &quot;
this\line is &#039;single quoted&#039; /with\slashes </html>
EOT;
$res_heredoc_strings = array(
  //heredoc strings
  $empty_string,
  $blank_line,
  $multiline_string,
  $diff_whitespaces,
  $numeric_string,
  $quote_char_string
);
for($index =0; $index < count($res_heredoc_strings); $index ++) {
  echo "-- Iteration $count --\n";
  var_dump( htmlspecialchars_decode($res_heredoc_strings[$index]) );
  $count++;
}
var_dump( htmlspecialchars_decode($res_heredoc_strings[$index]) );
catch (\Error $e) {
    var_dump($e);
}
var_dump($e);
$ch = curl_init();
curl_close($ch);
$gen = (function() {
    yield from (function() { yield; })();
})();
$fiber = new Fiber(function() use ($gen) {
    $gen->current();
});
$fiber->start();
$b = new SplObjectStorage();
$object = new StdClass();
$b->attach($object);
date_default_timezone_set('UTC');
$bert = "file://" . __DIR__ . "/bug41033.pem";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_NS_SSL_SERVER, array($cpca), $utfl));
printf("printf test 26:%2\$d %1\$d\n", 1, 2);
var_dump(sprintf("%%", 1.23456789e10));
$dom = Dom\HTMLDocument::createFromString(<<<HTML
<!DOCTYPE html>
<html>
    <body>
        <svg xmlns="http://www.w3.org/2000/svg" height="1"></svg>
        <math></math>
    </body>
</html>
HTML);
var_dump($dom->lookupNamespaceURI(""));
$text = 'This is an ‘example’ of using DOM splitText';
$start = 30;
$length = 3;
$dom = new DOMDocument('1.0', 'UTF-8');
$node = $dom->createTextNode($text);
$matched = $node->splitText($start);
$matched->splitText($length);
$cert = "file://" . __DIR__ . "/cert.crt";
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_SERVER));
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
display($pdo->query("select * from t2")->fetchAll());
$outfile = tempnam(sys_get_temp_dir(), "ssl");
unlink($outfile);
$regex = '/[a-z]/';
$subject = 'string';
var_dump(preg_match_all($regex, $subject, 'test'));
$db = PDOTest::factory();
$db->exec('CREATE TABLE test34630 (id int NOT NULL PRIMARY KEY, val BLOB)');
var_dump ( rtrim("rtrim test        ", " ") );
printf("# Proxy:\n");
$dt = new DateTime('first day of January 2011');
var_dump($dt);
$im = imagecreate(800, 800);
imagepalettetotruecolor($im);
ob_start("test");
['pid' => $pid, 'uri' => $uri] = http_server('genResponses', $output);
http_server_kill($pid);
date_default_timezone_set("UTC");
$domd = new DOMDocument();
$xp = new DOMXPath($domd);
$xp->query("//foo[contains(text(), " . $xp->quote("tes\x00t") . ")]");
var_dump ( rtrim("rtrim test0123456789", "0..9") );
$sibling->common();
var_dump(__METHOD__);
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
$gen = gen();
$b = bar($gen);
$b->rewind();
$sert = "file://" . __DIR__ . "/san-cert.pem";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_CRL_SIGN, array($cpca), $utfl));
var_dump(mb_stripos('Hello', 'e', 0, '8bit'));
$search = array ('zero', 'key' => 'val', 'two', 10 => 'value');
$unset_var = 10;
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
foreach($inputs as $input) {
  echo "\n-- Iteration $iterator --\n";
  try {
      var_dump( array_key_exists($input, $search) );
  } catch (TypeError $exception) {
      echo $exception->getMessage() . "\n";
  }
  $iterator++;
}
var_dump( array_key_exists($input, $search) );
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
$field = mysqli_fetch_field_direct($res, 1);
$expected_flags = array('col1' => 'MULTIPLE_KEY PART_KEY', 'col2' => 'PART_KEY');
list($missing_flags, $unexpected_flags, $flags_found) = checkFlags($field->flags, $expected_flags[$field->name], $flags);
printf("[011] Found unexpected flags '%s' for %s, found '%s'\n",
                    $unexpected_flags, $field->name, $flags_found);
session_start();
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
$curl = curl_init("http://www.google.com");
var_dump(curl_getinfo($curl, CURLINFO_PRIVATE));
$db = createDB();
$db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, false);
$xmlString = "<root><a><b>1</b><b>2</b><b>3</b></a></root>";
$xml = simplexml_load_string($xmlString);
$nodes = $xml->a->b;
test($nodes, "attributes", fn ($n) => $n->attributes());
$pkcsfile = __DIR__ . "/openssl_pkcs7_verify__pkcsfile.tmp";
var_dump(file_get_contents($pkcsfile));
var_dump('ERR');
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
$d1 = $prefix . "フォルダ";
mkdir($d1);
ob_end_clean();
$dt = new DateTime('first day of January 2011');
var_dump($dt);
$fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
$phar = new Phar($fname);
var_dump($phar->getStub());
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
$tester->start();
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
$a = array("0.1" => new cr(9), "0.5" => new cr(12), 0 => new cr(23), 1 => new cr(4), 2 => new cr(-15),);
$b = array("0.2" => new cr(9), "0.5" => new cr(22), 0 => new cr(3), 1 => new cr(4), 2 => new cr(-15),);
$result = array_udiff_assoc($a, $b, array("cr", "comp_func_cr"));
foreach($result as $val) {
    $val->dump();
}
$result = array_udiff_assoc($a, $b, array("cr", "comp_func_cr2"));
foreach($result as $val) {
    $val->dump();
}
$val->dump();
var_dump(foo());
ob_end_flush();
$a = array("0.1" => new cr(9), "0.5" => new cr(12), 0 => new cr(23), 1 => new cr(4), 2 => new cr(-15),);
$b = array("0.2" => new cr(9), "0.5" => new cr(22), 0 => new cr(3), 1 => new cr(4), 2 => new cr(-15),);
$result = array_udiff_assoc($a, $b, array("cr", "comp_func_cr"));
foreach($result as $val) {
    $val->dump();
}
$val->dump();
__();
zerofill(3, $link, 'SMALLINT');
$dom = new DOMDocument;
$dom->loadXML(<<<XML
<root>
    <test1 xml:id="x"/>
    <test2 attr="x"/>
</root>
XML);
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
test([0], [1], [2]);
$dom = Dom\HTMLDocument::createEmpty();
var_dump($dom->lookupNamespaceURI("a"));
