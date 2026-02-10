<?php
$link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
$g = '00b320300a0bc55b8f0ec6edc218e2185250f38fbb8291db8a89227f6e41' .
    '00d47d6ccb9c7d42fc43280ecc2ed386e81ff65bc5d6a2ae78db7372f5dc' .
    'f780f4558e7ed3dd0c96a1b40727ac56c5165aed700a3b63997893a1fb21' .
    '4e882221f0dd9604820dc34e2725dd6901c93e0ca56f6d76d495c332edc5' .
    'b81747c4c447a941f3';
$db = MySQLPDOTest::factory();
$stmt = $db->prepare('SELECT * FROM test_33689');
$tmp = $stmt->getColumnMeta(0);
print_r($tmp);
bar();
function bar() {
    boo();
};
var_dump(error_reporting());
$anon = new class {
    public int $field;
    function __construct() {
        $this->field = 2;
    }
};
$anon->field = 123;
var_dump($anon->field);
$GLOBALS['b'] = 2;
$b = &$GLOBALS['b'];
$GLOBALS['b'] = 3;
$c = $b;
var_dump($b, $GLOBALS['b'], $c);
var_dump(soundex("Lukasiewicz"));
$originalEnvelopeData = "any string with \x1a is cut at this point.";
$tmpFileIn = tempnam(sys_get_temp_dir(), 'test');
file_put_contents($tmpFileIn, $originalEnvelopeData);
printf("printf test 18:%16b\n", 170);
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
$ai->seek(0);
$ch = curl_init("https://localhost/userpwd");
curl_setopt($ch, CURLOPT_STDERR, fopen("php://stdout", "w"));
$dom = new DOMDocument;
$test1 = $dom->getElementById('x');
$dom->documentElement->appendChild($test1);
$thisdir = __DIR__;
$filename = $thisdir . "/bug47667.zip";
unlink($filename);
class Box {
    public ?Test $value;
}
global $box;
function test($box) {
    var_dump($box->value = new Test);
}
$box = new Box();
test($box);
$im = imagecreate(800, 800);
imageline($im, 200, 100, 700, 100, IMG_COLOR_STYLED);
$cert = "file://" . __DIR__ . "/cert.crt";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_NS_SSL_SERVER, array($cpca)));
$wrong = "wrong";
var_dump(openssl_pkcs7_verify($wrong, 0));
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
var_dump($prefixed->lookupNamespaceURI(NULL));
$mysqli = new mysqli("$host:$port", $user, $passwd, $db);
$tbl = "test";
$sql = "INSERT INTO $tbl (bit_column_1) VALUES (0b10101010101)";
$mysqli->query($sql);
global $user, $host, $passwd, $db, $port, $socket;
global $user, $host, $passwd, $db, $port, $socket;
$this->mysqli = new mysqli($host, $user, $passwd, $db, $port, $socket);
$result = $this->mysqli->query("SELECT NOW() AS my_time FROM DUAL");
$row = $result->fetch_object();
$db = PDOTest::test_factory(__DIR__ . '/common.phpt');
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
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
$cl = new bug8318;
$cl->fpassthru();
$timestamp = mktime(8, 8, 8, 8, 8, 2008);
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
var_dump( strftime($value, $timestamp) );
var_dump(posix_setrlimit(POSIX_RLIMIT_NOFILE, 129, 128));
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
$reflector = new ReflectionClass(C::class);
$obj = $reflector->newLazyProxy(function () {
    throw new \Exception('initializer');
});
test('Proxy', $obj);
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
foo(false, false);
var_dump(version_compare('1.2', '2.1', '??'));
$fmt = new NumberFormatter('en_US', NumberFormatter::DECIMAL);
$fmt->parse('abc');
$conn = odbc_connect($dsn, $user, $pass);
odbc_exec($conn, "CREATE TABLE bug80147 (id INT, whatever VARBINARY(50))");
$im = imagecreatefromgd2(__DIR__ . DIRECTORY_SEPARATOR . 'bug73161.gd2');
gc_collect_cycles();
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
$tester->terminate();
function a() {
    $a = $b = $c = 2;
    foreach(range(1, 5) as $v) {
        yield $v;
    }
    return;
}
$a = $b = $c = 2;
foreach (a(range(1, 3)) as $a) {
    var_dump($a);
}
var_dump($a);
$priorityQueue = new SplPriorityQueue();
$priorityQueue->insert("b", 2);
$fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
$phar = new Phar($fname);
$phar->stopBuffering();
var_dump(filter_var("", FILTER_SANITIZE_ENCODED));
printf("[001] [%d] %s\n", mysqli_connect_errno(), mysqli_connect_error());
final class A
{
    public string $a;

    public static function fromArray(array $props): self
    {
        $me = new static;
        foreach ($props as $k => &$v) {
            $me->{$k} = &$v;  # try to remove &
        }
        return $me;
    }

    public function __get($name)
    {
        throw new \LogicException("Property '$name' is not defined.");
    }
}
var_dump(A::fromArray(['a' => 'foo']));
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
$pdo->setAttribute(PDO::ATTR_PREFETCH, 0);
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
$im = imagecreate(800, 800);
$black = imagecolorallocate($im, 0, 0, 0);
setStyleAndThickness($im, $black, 2);
$array = array(
    1 => "entry_1",
    2 => "entry_2",
    3 => "entry_3",
    4 => "entry_4",
    5 => "entry_5"
);
usort($array, function($a, $b) use (&$array, &$ref) {
    unset($array[2]);
    $ref = $array;
    return $a <=> $b;
});
$strings = array(
  "<html>Hello<br />world</html>",
  "<html><br /></html>",
  "<html>\nHello\r\nworld\r</html>",
  "<html>\n \r\n \r</html>",
);
foreach( $strings as $str ){
  var_dump(nl2br($str) );
}
var_dump(nl2br($str) );
$field = mysqli_fetch_field_direct($res, 1);
printf("[010] Found unexpected field '%s'\n", $field->name);
$client = new SoapClient(__DIR__ . '/bug49278.wsdl', array('location' => "http://".PHP_CLI_SERVER_ADDRESS, 'trace' => 1));
var_dump($client->__getLastResponse());
class MyObjectStorage extends SplObjectStorage {
    // Overwrite getHash() with just some (working) test-method
    public function getHash($object): string { return get_class($object); }
}
class TestObject {}
$list = new MyObjectStorage();
$list->attach(new TestObject());
$r = new Phar(__DIR__ . "/bug69279.phar.zip");
$r->extractTo(__DIR__, NULL, TRUE);
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
var_dump($c);
#[\AllowDynamicProperties]
class C {
    public $b;
    public function __construct() {
        $this->a = new Canary();
    }
}
$obj = new C();
var_dump($obj);
var_dump(new Foo);
function t2()
{
    ob_start("test");
    echo "Hello from t2 1 ";
        ob_flush();
        echo "Hello from t2 2 ";
        ob_end_flush();
}
t2();
$doc = new \DOMDocument();
$target = $doc->documentElement->lastChild;
$target->before('bar', $doc->documentElement->firstChild, 'baz');
$f = __DIR__."/data/test.txt.gz";
$h = gzopen($f, 'r');
var_dump(gzread($h, 0));
$batch_file_path = __DIR__ . '/ghsa-9fcc-425m-g385_003.bat';
$descriptorspec = [STDIN, STDOUT, STDOUT];
for ($i = 1; $i <= 255; $i++) {
  echo "Testing $i\n";
  try {
    $proc = @proc_open([$batch_file_path . chr($i), "\"&notepad.exe"], $descriptorspec, $pipes, null, null, array("bypass_shell" => true));
    var_dump($proc);
    proc_close($proc);
  } catch (Error) {}
}
$proc = @proc_open([$batch_file_path . chr($i), "\"&notepad.exe"], $descriptorspec, $pipes, null, null, array("bypass_shell" => true));
var_dump($proc);
$dom = Dom\HTMLDocument::createEmpty();
dumpNodeList($dom->getElementsByTagName("HTml"));
