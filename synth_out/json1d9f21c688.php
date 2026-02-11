<?php
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
class D {
    public string $prop;
}
class C {
    private $priv1 = 'secret1';
    private $priv2 = 'secret2';
    public $pub1 = 'public1';
    public $pub2 = 'public2';
    public $pub3 = 'public3';
    public $pub4 = 'public4';
}
function showFirstTwoItems($it) {
  echo str_replace("\0", '\0', $it->key()) . " => " . $it->current() .
"\n";
  $it->next();
  echo str_replace("\0", '\0', $it->key()) . " => " . $it->current() .
"\n";
}
function display($res)
{
	echo implode("\n", array_map(fn($row) => implode("\t", $row), $res))."\n";
}
class MySQL_Ext extends mysqli{
    protected $fooData = array();
    private $extData;

    public function isEmpty()
    {
        $this->extData[] = 'Bar';
        return empty($this->extData);
    }
}
class base {
    private function show() {
        echo "base\n";
    }
    function test() {
        $this->show();
    }
}
class derived extends base {
    function show() {
        echo "derived\n";
    }
    function test() {
        echo "test\n";
        $this->show();
        parent::test();
        parent::show();
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
function test(string $input) {
    var_dump(filter_var($input, FILTER_VALIDATE_URL));
}
function attach($db, $callback) { $db->setNoticeCallback($callback); }
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
function g() {
    yield 'foo';
    Fiber::suspend();
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
function do_throw() { throw new Exception; }
function foo() {
  var_dump("hello");
}
function something() {
        foreach(array(1, 2) as $value) {
                for($i = 0; $i < 1; $i++) {
                        continue 2;
                }
                return;
        }
}
class TrampolineTest {
    public function __call(string $name, array $arguments) {
        echo 'Trampoline for ', $name, PHP_EOL;
    }
}
class LogOnEvent {
  public $audienceMemberId;
  public $timestamp;

  function __construct($audienceMemberId, $timestamp) {
    $this->audienceMemberId = $audienceMemberId;
    $this->timestamp = $timestamp;
  }
}
class IVREvents {
  public $version;
  public $activityId;
  public $messageId;
  public $source;
  public $logOnEvent;
  public $logOffEvent;

  function __construct($version, $activityId, $messageId, $source, $logOnEvent=NULL, $logOffEvent=NULL) {
    $this->version = $version;
    $this->activityId = $activityId;
    $this->messageId = $messageId;
    $this->source = $source;
    $this->logOnEvent = $logOnEvent;
    $this->logOffEvent = $logOffEvent;
  }
}
class MyObjectStorage extends SplObjectStorage {
    // Overwrite getHash() with just some (working) test-method
    public function getHash($object): string { return get_class($object); }
}
function gen() {
    yield 0;
    yield from gen();
}
function bar($gen) {
    yield from $gen;
}
class foo1
{
  function __toString() {
    return "Object1";
  }
}
function __(){
  $GLOBALS['a'] = "bug\n";
  array_splice($GLOBALS,0,count($GLOBALS));
  /* All global variables including $GLOBALS are removed */
  echo $GLOBALS['a'];
}
class PHPUnit_Framework_MockObject_InvocationMocker {
    protected $matchers = [];
    public function addMatcher( $matcher) {
        $this->matchers[] = $matcher;
    }
    public function invoke( $invocation) {
        foreach ($this->matchers as $match) {
            $match->invoked($invocation);
        }
    }
}
class PHPUnit_Framework_MockObject_Matcher {
    public $stub = null;
    public $methodNameMatcher;
    public function invoked($invocation) {
        return $this->stub->invoke($invocation);
    }
}
function new_closure_gen() {
    return function() {
        static $foo = 0;
        yield ++$foo;
    };
}
function byReference( & $array){
    foreach($array as &$item){
        $item['nanana'] = 'batman';
        $item['superhero'] = 'robin';
    }
}
class SomeClass implements JsonSerializable {
    public function jsonSerialize(): mixed {
        return [get_object_vars($this)];
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
printf("printf test 3:%f\n", 10.0/3);
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
printf("[012] The flags '%s' have not been reported for %s, found '%s'\n",
                    $missing_flags, $field->name, $flags_found);
$f = __DIR__."/data/test.txt.gz";
$h = gzopen($f, 'r');
gzclose($h);
$d = new D();
$references = array();
$ao = new ArrayObject(new C);
$ai = $ao->getIterator();
showFirstTwoItems($ai);
$conn = odbc_connect($dsn, $user, $pass);
$r = new Phar(__DIR__ . "/bug69279.phar.zip");
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
$reqOf3 = 'select 79 n union all select 80 union all select 81';
$stmt2 = $pdo->query("select * from ($reqOf3) t order by n desc");
display([ $stmt2->fetch() ]);
$MySQL_Ext = new MySQL_Ext($host, $user, $passwd, $db, $port, $socket);
$s = 'O:15:"ReflectionClass":0:{}';
$date = (new ReflectionClass(DateTime::class))->newInstanceWithoutConstructor();
$dateperiod = (new ReflectionClass(DatePeriod::class))->newInstanceWithoutConstructor();
$dateperiod->__unserialize(['start' => $date]);
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
var_dump( array_intersect($arr1, $arr2) );
$db = getDbConnection();
$sql = '
    SET NOCOUNT ON
    SELECT 0 AS [result]
';
$stmt = $db->query($sql);
var_dump($stmt->nextRowset());
$t = new derived();
$fn = "bug71263.bz2";
$r = fopen($fn, "r");
$s = fread($r, 100);
var_dump($s);
$unset_var = 10;
$tempstring = "abcdefghjklmnpqrstuvwxyz";
var_dump(sprintf("%s", $tempstring, $tempstring, $tempstring));
$zip = new ZipArchive;
$bert = "file://" . __DIR__ . "/bug41033.pem";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_ENCRYPT, array($cpca)));
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
$dom = Dom\HTMLDocument::createEmpty();
var_dump($dom->lookupNamespaceURI(NULL));
$xml = '
<data id="1">
    <key>value</key>
</data>
';
$db = PDOTest::factory();
$insert = $db->prepare("insert into test34630 (id, val) values (1, :blob)");
$insert->execute();
$plain = "The quick brown fox jumps over the lazy dog.";
$compressed = (string) bzcompress($plain);
$compressed[strlen($compressed) - 15] = 'X';
$code = null;
$err = null;
pfsockopen('udp://127.0.0.1', '63844', $code, $err, (PHP_INT_MAX/100000)+1);
$tbl = "test";
$sql = "DROP TABLE IF EXISTS $tbl";
$empty_webp = __DIR__ . "/gh13774.webp";
$im = imagecreatefromwebp($empty_webp);
var_dump($im);
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $output = fopen(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370_003' . DIRECTORY_SEPARATOR . 'testfile', 'w');
    fclose($output);
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
spl_autoload_register(function ($class) {
    if (!require_once($class.'.inc')) {
        error_log('Error: Autoload class: '.$class.' not found!');
    }
});
error_reporting(0);
$reflector = new ReflectionClass(C::class);
$obj = new C();
$reflector->resetAsLazyProxy($obj, function ($obj) {
    var_dump("initializer");
    return new C();
});
printf("printf test 13:%5d\n", -12);
$code = null;
$err = null;
pfsockopen('udp://127.0.0.1', '63844', $code, $err, INF);
$dom = Dom\XMLDocument::createFromString(<<<XML
<root>
    <test1 xml:id="x"/>
    <test2 xml:id="x"/>
</root>
XML);
$dom->getElementById('x')->removeAttribute('xml:id');
$array_object = array();
var_dump( end($array_object) );
printf("[002] [%d] %s\n", $link->errno, $link->error);
$f = __DIR__."/data/test.txt.gz";
$h = gzopen($f, 'r');
var_dump(gzread($h, 8));
$formatter = new \NumberFormatter('en', \NumberFormatter::DECIMAL);
$value = $formatter->parse('2147483650', \NumberFormatter::TYPE_INT64);
var_dump($value);
test("http://test@[2001:db8:3333:4444:5555:6666:1.2.3.4]");
$now = new DateTimeImmutable();
$dateperiod = (new ReflectionClass(DatePeriod::class))->newInstanceWithoutConstructor();
$dateinterval = (new ReflectionClass(DateInterval::class))->newInstanceWithoutConstructor();
$dateperiod->__unserialize(['start' => $now, 'end' => $now, 'current' => $now, 'interval' => $dateinterval]);
$dom = new DOMDocument('1.0', 'UTF-8');
$node = $dom->getElementById('test');
var_dump($node->textContent);
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
var_dump($rit->valid());
$db = new Pdo\Pgsql($config['ENV']['PDOTEST_DSN']);
$db->setNoticeCallback($callback);
$array = array('f' => "first", "s" => 'second', 1, 2.222);
$vars = array (
  '\$ -> This represents the dollar sign. hello dollar!!!',
  '\t\r\v The quick brown fo\fx jumped over the lazy dog',
  'This is a text with special chars: \!\@\#\$\%\^\&\*\(\)\\',
  'hello world\\t',
  'This is \ta text in bold letters\r\s\malong with slashes\n : HELLO WORLD\t'
);
foreach($vars as $var) {
  echo "-- Iteration $iterator --\n";
  $temp_array = $array;  // assign $array to another temporary $temp_array

  /* with default argument */
  // returns element count in the resulting array after arguments are pushed to
  // beginning of the given array
  var_dump( array_unshift($temp_array, $var) );

  // dump the resulting array
  var_dump($temp_array);

  /* with optional arguments */
  // returns element count in the resulting array after arguments are pushed to
  // beginning of the given array
  $temp_array = $array;
  var_dump( array_unshift($temp_array, $var, "hello", 'world') );

  // dump the resulting array
  var_dump($temp_array);
  $iterator++;
}
$temp_array = $array;
var_dump( array_unshift($temp_array, $var) );
var_dump(soundex("Gauss")       == soundex("Ghosh"));
var_dump($obj->a);
$context = stream_context_create(['dummy' => ['foo' => 'bar']]);
file_get_contents('dummy://foo', false, $context);
$file = __DIR__ . '/bug38212私はガラスを食べられます.gd2';
unlink($file);
zerofill(3, $link, 'SMALLINT');
var_dump(isset($_POST['foo']));
(new B)->baz();
$file = __DIR__ . "/bug71127.inc";
file_put_contents($file, "<?php define('FOO', 'bad'); echo FOO;?>");
$dom = Dom\HTMLDocument::createEmpty();
$container = $dom->appendChild(createElement($dom, "container"));
$container->appendChild(createElementNS($dom, "http://www.w3.org/1999/xhtml", "bar:html", "9"));
$cert = "file://" . __DIR__ . "/cert.crt";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_NS_SSL_SERVER, array($cpca)));
$certificateGenerator = new CertificateGenerator();
$certificateGenerator->saveCaCert(__DIR__ . "/san-cert.pem");
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
var_dump($body->lookupNamespaceURI(NULL));
bar();
$fn = "bug71263.bz2";
$r = fopen($fn, "r");
stream_filter_append($r, 'bzip2.decompress', STREAM_FILTER_READ);
$varOutput = ob_get_contents();
$varOutput = str_replace(
        [$var_dim_filename],
        ['%s'],
        $varOutput
    );
file_put_contents(__DIR__ . DIRECTORY_SEPARATOR . "debug_false_container_{$failuresNb}.txt", $varOutput);
var_dump( range(7.0, 1.0, 6.5) );
$bert = "file://" . __DIR__ . "/bug41033.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_NS_SSL_SERVER));
function f_1() {
    function f_2() {
        return (($mode & PHP_OUTPUT_HANDLER_START)?"[":"") . $s . (($mode & PHP_OUTPUT_HANDLER_END)?"]\n":"");
    }
    $response = ob_get_contents();
    return $response;
}
$obj = new C();
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
var_dump($function($compressed));
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
stream_filter_append($stream, $filter);
catch (\ReflectionException $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
printf("%s: %s\n", $e::class, $e->getMessage());
date_default_timezone_set('UTC');
$foo = new FooBar();
var_dump(yield from g());
$cl = new bug8318;
$cl->fpassthru();
$php = getenv('TEST_PHP_EXECUTABLE_ESCAPED');
$cmd = "$php -n -d memory_limit=4M -a \"".__DIR__."\"/bug40236.inc";
$output = array();
var_dump($output);
var_dump(mb_check_encoding("&\xc2\xb7 TEST TEST TEST TEST TEST TEST", "HTML-ENTITIES"));
function f_3() {
    return 42;
}
$filename = __DIR__ . '/bug77432.phar';
$phar = new Phar($filename);
$fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
$phar = new Phar($fname);
$phar->setDefaultStub('my/custom/thingy.php', 'the/web.php');
$tester = new FPM\Tester($cfg);
$tester->terminate();
function f_4() {
    $res = [];
    display($res);
}
imagesetthickness($im, $thickness);
$tester = new FPM\Tester($cfg);
$tester->start();
$now = new DateTime('2018-11-03 11:34:20.781751');
$ago = new DateTime('2018-11-03 11:34:20.000000');
$diff = $now->diff($ago);
var_dump($diff->invert, $diff->s, $diff->f);
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
$im = imagecreate(800, 800);
test_image_equals_file(__DIR__ . '/bug43475.png', $im);
var_dump(soundex("Knuth")       == soundex("Kant"));
catch (PDOException $e) {
    var_dump($e->getCode());
}
var_dump($e->getCode());
$bert = "file://" . __DIR__ . "/bug41033.pem";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_SIGN, array($cpca), $utfl));
spl_autoload_register(function ($name) {
});
$db = createDB();
$db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, false);
$filename = __DIR__ . '/_fromUri_custom_constructor.xml';
$reader = XMLReader::fromUri($filename);
$reader->close();
$dom = Dom\HTMLDocument::createEmpty();
var_dump($dom->lookupNamespaceURI(""));
var_dump(posix_setrlimit(POSIX_RLIMIT_NOFILE, 129, 128));
printf("printf test 26:%2\$d %1\$d\n", 1, 2);
(new Test)->bar(do_throw());
$dom = Dom\HTMLDocument::createEmpty();
dumpNodeList($dom->getElementsByTagName("HTml"));
$dom = new DOMDocument;
var_dump($dom->getElementById('x')?->nodeName);
var_dump($row);
printf("[007] [%d] %s\n", $stmt->errno, $stmt->error);
$ar1 = array("row1" => 2, "row2" => 1);
var_dump($ar1);
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
$tester->terminate();
putenv('REDIR_TEST_DIR='.__DIR__ . '/../../pdo/tests/');
$mysqli = new mysqli("$host:$port", $user, $passwd, $db);
$tbl = "test";
$sql = "DROP TABLE IF EXISTS $tbl";
$mysqli->query($sql);
$tester = new FPM\Tester($cfg);
$userMessage = "'user' directive is ignored when FPM is not running as root";
$tester->expectLogNotice($userMessage, 'eeee');
$ao = new ArrayObject(new C);
$ai = $ao->getIterator();
$ai->rewind();
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
test(2);
printf("Content-Type Default OK" . PHP_EOL);
$a=glob("./*.jpeg");
var_dump($a);
$dt = new DateTime('@1604215800');
$dt->add(new DateInterval('PT1H'));
ob_start(function() {
    declare(ticks=1);
    register_tick_function(
       function() { }
    );
});
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
var_dump($rit->key());
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
var_dump($prefixed->lookupNamespaceURI(""));
$o = new SplFileInfo('.');
var_dump((bool) $o);
$a = new PDO("sqlite::memory:");
$a->query ("CREATE TABLE test_35336 (a integer primary key, b text)");
ob_end_clean();
foo();
ini_set("intl.error_level", E_WARNING);
$db = PDOTest::factory();
$insert = $db->prepare("insert into test34630 (id, val) values (1, :blob)");
$insert->execute();
$zip = new ZipArchive();
$zip->extractTo(__DIR__);
mysqli_close($link);
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
test("http://test@[2001:db8:3333:4444:5555:6666:1.2.3.4]");
something();
$ao = new ArrayObject(new C);
$ai = $ao->getIterator();
showFirstTwoItems($ai);
var_dump(__METHOD__);
unserialize('a:2:{i:0;O:9:"000000000":10000000');
$client = new SoapClient(__DIR__."/bug29061.wsdl", array("exceptions"=>0));
$client->getQuote("ibm");
$db = MySQLPDOTest::factory();
$db->exec('INSERT INTO test_33689 VALUES(1)');
$o = new TrampolineTest();
$callback2 = [$o, 'trampoline2'];
var_dump(spl_autoload_unregister($callback2));
$text = 'This is an ‘example’ of using DOM splitText';
$start = 30;
$length = 3;
$dom = new DOMDocument('1.0', 'UTF-8');
$node = $dom->createTextNode($text);
$matched = $node->splitText($start);
$matched->splitText($length);
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
pcntl_wait($status);
function f_5() {
    var_dump(json_decode('{"key":"value", "":"value"}', true));
    printf("printf test 11:<%30s>\n", "hoyesterettsjustitiarius");
    printf("[003] No result, [%d] %s\n", $link->errno, $link->error);
}
var_dump($row[0]);
mysqli_free_result($res);
var_dump(preg_replace_callback_array([], []));
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
var_dump( array_reverse($array) );
$fmt = new NumberFormatter('en_US', NumberFormatter::DECIMAL);
$fmt->parse('abc');
$priorityQueue = new SplPriorityQueue();
$priorityQueue->setExtractFlags(SplPriorityQueue::EXTR_DATA);
$ar1 = array("row1" => 2, "row2" => 1);
$args = array(&$ar1);
var_dump(call_user_func_array("array_multisort", $args));
$root = simplexml_load_string('<root xmlns:x="urn:x" x:attr="foo"/>');
$attr = $root->attributes('urn:x');
var_dump(dom_import_simplexml($attr)->textContent);
ini_set('mysqlnd.fetch_data_copy', false);
$dom = new DOMDocument;
$test1 = $dom->getElementById('x');
$dom->documentElement->appendChild($test1);
$counter = 0;
ob_start(function ($buffer) use (&$c, &$counter) {
        $c = 0;
        ++$counter;
}, 1);
$db = MySQLPDOTest::factory();
$db->exec('INSERT INTO test_33689 VALUES(1)');
zerofill(10, $link, 'DOUBLE PRECISION');
$sh = new SessionHandler;
$sh->read("");
$time = '2000-01-01 00:00:00.000000';
$tz_aus = new DateTimeZone('Australia/Sydney');
$tz_us = new DateTimeZone('America/Los_Angeles');
$auz = new DateTime($time, $tz_aus);
$us = new DateTime($time, $tz_us);
$diff = $auz->diff($us);
var_dump($diff->h);
$db = PDOTest::test_factory(dirname(__FILE__) . '/common.phpt');
$stmt = $db->prepare('select ??- lseg \'((-1,0),(1,0))\'');
$stmt->execute();
$a = new A();
$a->test("test");
$rm = new ReflectionMethod(Collator::class, 'getSortKey');
var_dump($rm->getNumberOfParameters());
var_dump(mb_check_encoding("&\xc2\xb7 TEST TEST TEST TEST TEST TEST", "HTML-ENTITIES"));
$dom = Dom\HTMLDocument::createEmpty();
$container = $dom->appendChild(createElement($dom, "container"));
$container->appendChild(createElement($dom, "HTML", "1"));
var_dump(__METHOD__);
printf("printf test 4:%.10f\n", 10.0/3);
$id_1_date = '2014-09-23';
$id_2_date = '2014-09-24';
$conn = odbc_connect($dsn, $user, $pass);
odbc_exec($conn, "INSERT INTO bug68087(ID, VARCHAR_COL, DATE_COL) VALUES (1, 'hello', '$id_1_date'), (2, 'helloagain', '$id_2_date')");
$sql = "SELECT 11111 as `1`, 22222 as `2`";
$link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
$res = $link->query($sql);
$row = $res->fetch_array();
var_dump($row);
$list = new SplDoublyLinkedList();
$list->push('o');
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
var_dump($ffi->bug_gh16013_return_char());
unserialize('O:17:"Random\Randomizer":1:{i:0;a:2:{s:3:"foo";N;s:6:"engine";O:32:"Random\Engine\Xoshiro256StarStar":2:{i:0;a:0:{}i:1;a:4:{i:0;s:16:"7520fbc2d6f8de46";i:1;s:16:"84d2d2b9d7ba0a34";i:2;s:16:"d975f36db6490b32";i:3;s:16:"c19991ee16785b94";}}}}');
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
$tester->request(connKeepAlive: true)->expectBody('1');
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
$struct = $ffi->new('struct bug_gh16013_int_struct');
$struct->field = 10;
var_dump(spl_autoload_functions());
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
$bert = "file://" . __DIR__ . "/bug41033.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_ANY));
$bert = "file://" . __DIR__ . "/bug41033.pem";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_ANY, array($cpca), $utfl));
$array_test = array("a", "b", "d", 7, "u" => "U", -4, "-.008" => "neg.008");
reset( $array_test );
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt', Pdo\Pgsql::class, true);
$loop_counter = 1;
$loop_counter++;
var_dump($s);
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
$references[$idx]['id_ref'] 		= &$rows[$i]['id'];
$GLOBALS['b'] = 2;
$org_a = $GLOBALS['a'];
$org_b = $GLOBALS['b'];
var_dump($org_a, $org_b);
$timestamp = "2005-11-08T11:22:07+03:00";
$logOnEvent = new LogOnEvent(34567, $timestamp);
$ivrEvents = new IVREvents("1.0", 101, 12345, 'IVR', $logOnEvent, $logOffEvents);
$datefmt = new IntlDateFormatter('en_US', IntlDateFormatter::FULL, IntlDateFormatter::FULL);
$datefmt2 = clone $datefmt;
for ($i_6 = 0; $i_6 < 10; $i_6++) {
    ob_clean();
    $mysqli = new mysqli("$host:$port", $user, $passwd, $db);
    $tbl = "test";
    $sql = "SELECT bit_column_1 FROM $tbl";
    $result = $mysqli->query($sql);
}
$x = (object)['y' => 'foobar'];
printf("[001] Expecting integer on 64bit got %s/%s\n", gettype($id), var_export($id, true));
$fn = "bug71263.bz2";
$r = fopen($fn, "r");
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
$references[$idx]['row_copy'] 	= $rows[$i];
set_exception_handler(function() {
    echo 'First handler' . PHP_EOL;
});
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
$d1 = $prefix . "フォルダ";
mkdir($d1);
$timestamp = gmmktime(8, 8, 8, 8, 8, 2008);
$a = 1;
sprintf('%3$s, %2$s %1$s', "a", "b");
list($value) = yield;
var_dump($value);
$args = ["-d", "extension_dir=" . ini_get("extension_dir"), "-d", "extension=" . (substr(PHP_OS, 0, 3) == "WIN" ? "php_" : "") . "soap." . PHP_SHLIB_SUFFIX];
$code = '$server = new SoapServer("' . __DIR__ . '"/bug49278.wsdl", ["trace"=>1]);' .
        <<<'PHP'
        function Add() {}
        $server->addFunction('Add');
        $server->handle();
        PHP;
php_cli_server_start($code, null, $args);
php_cli_server_start(file_get_contents(__DIR__.'/bug64433_srv.inc'));
var_dump($br);
var_dump( strtok("\0") );
$interval = new DateInterval('P1D');
$document = new \DOMDocument();
var_dump($document->saveHTML());
$originalEnvelopeData = "any string with \x1a is cut at this point.";
$tmpFileIn = tempnam(sys_get_temp_dir(), 'test');
var_dump(filesize($tmpFileIn) === strlen($originalEnvelopeData));
var_dump(mb_stripos('Hello', 'e', 0, '8bit'));
$instructorsAdmin = Test::INSTRUCTORS_ADMIN;
$data = [
    Test::COURSES_ADMIN,
    Test::COURSES_REPORTING_ACCESS,
    Test::BUNDLES_ADMIN,
    Test::USERS_ADMIN,
    Test::B2B_DASHBOARD_ACCESS,
    Test::B2B_DASHBOARD_ACCESS,
    Test::INSTRUCTORS_ADMIN,
    &$instructorsAdmin,
    Test::COUPONS_ADMIN,
    Test::AUTHENTICATED,
];
$data = array_unique($data, flags: SORT_REGULAR);
var_dump($data);
$sibling->common();
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
$tester->requestValues(connKeepAlive: true)->expectValue('FCGI_MPXS_CONNS', '0');
$sert = "file://" . __DIR__ . "/san-cert.pem";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_OCSP_HELPER, array($cpca)));
$tz1 = new DateTimeZone('Europe/Berlin');
$tz2 = new DateTimeZone('Europe/Berlin');
$d = new DateTime('2014-12-24 13:00:00', $tz1);
var_dump($d->getTimezone(), $tz2);
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
clearstatcache();
var_dump(1);
$list = new MyObjectStorage();
foreach($list as $x) var_dump($list->offsetExists($x));
$list2 = clone $list;
foreach($list2 as $x) var_dump($list2->offsetExists($x));
var_dump($list2->offsetExists($x));
$code = null;
$err = null;
pfsockopen('udp://127.0.0.1', '63844', $code, $err, (PHP_INT_MIN/100000)-1);
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
$dt = new DateTime('@1604215800');
$varOutput = ob_get_contents();
$datePre = DateTime::createFromFormat("!D d M Y", "Fri 17 may 2011");
restore_exception_handler();
printf("printf test 6:%-010.2f\n", 2.5);
$db = PDOTest::factory();
$db->exec("CREATE TABLE test36428 (a VARCHAR(10))");
function f_7() {
    return $i;
}
set_exception_handler(null);
$client = new soapclient(NULL, [
  'location' => 'http://' . PHP_CLI_SERVER_ADDRESS,
  'uri' => 'misc-uri',
  'soap_version' => SOAP_1_2,
  'user_agent' => 'Vincent JARDIN, test headers',
  'trace' => true, /* record the headers before sending */
  'stream_context' => stream_context_create([
    'http' => [
      'header' => sprintf("MIME-Version: 1.0\r\n"),
      'content_type' => sprintf("Multipart/Related")
    ],
  ]),
]);
$client->__soapCall("foo", [ 'arg1' => "XXXbar"]);
var_dump(1);
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
$reqOfBig = 'select * from t';
$attrs = [ PDO::ATTR_PREFETCH => 0 ];
$stmt = $pdo->prepare($reqOfBig, $attrs);
$stmt->execute();
$gen = (function() {
    yield from (function() { yield; })();
})();
$fiber = new Fiber(function() use ($gen) {
    $gen->current();
});
$fiber->start();
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
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
$d1 = $prefix . "フォルダ";
unlink("$d1\\test1.txt");
$dom = new DOMDocument;
var_dump($dom->getElementById('x')?->nodeName);
$tester = new FPM\Tester($cfg);
$userMessage = "'user' directive is ignored when FPM is not running as root";
$tester->expectLogNotice($userMessage, 'dddd');
$date = new DateTime("28-July-2008");
$tests = array(
    'noon', 'midnight'
);
foreach ($tests as $test) {
    $t = strtotime("2005-12-22 ". $test);
    printf("%-10s => %s\n", $test, date(DATE_ISO8601, $t));
}
$t = strtotime("2005-12-22 ". $test);
printf("%-10s => %s\n", $test, date(DATE_ISO8601, $t));
$conn = odbc_connect($dsn, $user, $pass);
$res = odbc_exec($conn, "SELECT * FROM bug80147");
var_dump(odbc_result($res, 'whatever'));
$strings = array(
  "<html>Hello<br />world</html>",
  "<html><br /></html>",
  "<html>\nHello\r\nworld\r</html>",
  "<html>\n \r\n \r</html>",
);
gc_collect_cycles();
for ($i_8 = 0; $i_8 < 10; $i_8++) {
    $file_handle = fopen(__FILE__, "r");
    $file_handle = fopen(__FILE__, "r");
    $values = array (
      /* integers */
      0,  // zero as argument
      000000123,  //octal value of 83
      123000000,
      -00000123,  //octal value of 83
      -12300000,
      0xffffff,  //hexadecimal value
      123456789,
      1,
      -1,
    
      /* floats */
      -0.0,
      +0.0,
      1.234,
      -1.234,
      -2.000000,
      2.0000000,
      -4.0001e+5,
      4.0001E+5,
      6.99999989,
      -.5,
      .567,
      -.6700000e-3,
      -.6700000E+3,
      1E-5,
      -1e+5,
      1e+5,
      1E-5,
    
      /* strings */
      "",
      '',
      " ",
      ' ',
      "0",
      "\0",
      '\0',
      "\t",
      '\t',
      "PHP",
      'PHP',
      "1234\t\n5678\n\t9100\rabcda\x0000cdeh\0stuv",  // strings with escape chars
    
      /* boolean */
      TRUE,
      FALSE,
      true,
      false,
    
      /* arrays */
      array(),
      array(NULL),
      array(true),
      array(""),
      array(''),
      array(array(1, 2), array('a', 'b')),
      array("test" => "is_array", 1 => 'One'),
      array(0),
      array(-1),
      array(10.5, 5.6),
      array("string", "test"),
      array('string', 'test'),
    
      /* resources */
      $file_handle
    );
    $reflector = new ReflectionClass(C::class);
    if (true) {
        $dom = Dom\HTMLDocument::createEmpty();
    }
    if (!true) {
        if (true) {
            if (true) {
                $filename = __DIR__ . '/bug77432.phar';
                $phar = new Phar($filename);
            }
            if (!true) {
                if (true) {
                    $gen = gen();
                    $a = bar($gen);
                }
                if (!true) {
                    if (true) {
                        $unset_var = 10;
                    }
                    if (!true) {
                        if (true) {
                            $reflection = new ReflectionClass('\DateTime');
                            $mutable = $reflection->newInstanceWithoutConstructor();
                        }
                        if (!true) {
                            if (true) {
                                $mysqli = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
                                $res = $mysqli->query('SELECT 42');
                                $obj = $res->fetch_object();
                            }
                        }
                    }
                }
            }
        }
        if (!true) {
            if (true) {
                $mysqli = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
                $res = $mysqli->query('SELECT 42');
            }
            if (!true) {
                $GLOBALS['b'] = 2;
                $a = &$GLOBALS['a'];
            }
        }
    }
    zerofill(5, $link, 'INT');
}
$pid = pcntl_fork();
$obj = new C();
$server = new soapserver(null,array('uri'=>"http://testuri.org"));
$dsn = ini_get('pdo.dsn.mysql');
$found = ($dsn !== false);
$heredoc = <<<EOT
hello world
EOT;
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
$diff_whitespaces = <<<EOT
<html>Roy&#039;s height\r &gt; Sam\t&#039;s height
1111\t\t &amp; 0000\v\v = \f0000
&quot; heredoc\ndouble quoted string. with\vdifferent\fwhite\vspaces&quot;
EOT;
$users = MailBox::USERS;
$bcc = $users[2];
$xml = '<?xml version="1.0" encoding="utf-8" ?>
<test>
</test>';
$im = imagecreate(10,10);
$num = 100000;
$a = Array();
for ($i=0; $i<$num; $i++) {
  $a[$i] = Array(1);
}
$a[$i] = Array(1);
$zip = new ZipArchive();
$pass = "qwerty";
$object2 = new foo1();
$array_object = array();
$array_object[1] = &$object2;
$array1 = array(1, 2);
$reflector = new ReflectionClass(C::class);
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
$xml = <<<'EOT'
        <!doctype html>
        <html>
            <head>
                <title>GHSA-p3x9-6h7p-cgfc</title>

                <meta charset="utf-8" />
                <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
            </head>

            <body>
                <h1>GHSA-p3x9-6h7p-cgfc</h1>
            </body>
        </html>
        EOT;
$users = MailBox::USERS;
$to = $users[0];
$iterator = 1;
var_dump(session_save_path());
$a = date_create("2009-01-01", null);
$references = array();
var_dump($obj->a);
$filename = "bug51997.bz2";
$bz = bzopen($filename, "r");
$style = array();
$i = 0;
$style[$i++] = $color;
$zip = new ZipArchive();
++$failuresNb;
$varOutput = ob_get_contents();
$varOutput = str_replace(
        [$var_dim_filename],
        ['%s'],
        $varOutput
    );
file_put_contents(__DIR__ . DIRECTORY_SEPARATOR . "debug_false_container_{$failuresNb}.txt", $varOutput);
$filename = __DIR__ . '/_fromUri_custom_constructor.xml';
$reader = XMLReader::fromUri($filename);
$reader->close();
$bert = "file://" . __DIR__ . "/bug41033.pem";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_SIGN, array($cpca)));
$ar1 = array("row1" => 2, "row2" => 1);
$args = array(&$ar1);
var_dump(call_user_func_array("array_multisort", $args));
$dt = DateTime::createFromFormat('Y-m-d!', '2011-02-02');
$magic_file = __DIR__ . '/bug79283.db';
$GLOBALS['b'] = 3;
$context = stream_context_create(['http' => ['method' => 'MKCALENDAR']]);
__();
$f = function () {};
$s = "X";
for($i = 495; $i <= 1074; $i++) {
  ini_set('precision', $i);
  echo "$i: len=", strlen(strval(-1 * pow(2, -1074))), "\n";
}
ini_set('precision', $i);
$c = new C();
$c->prop1 = 'hello world';
$fn = "bug71263.bz2";
$r = fopen($fn, "r");
$s = fread($r, 100);
$tbl = "test";
$sql = "CREATE TABLE $tbl (bit_column_1 bit(16) NOT NULL) DEFAULT CHARSET=utf8";
$xmlString = "<root><a><b>1</b><b>2</b><b>3</b></a></root>";
$xml = simplexml_load_string($xmlString);
$nodes = $xml->a->b;
$callable($nodes);
$list = [];
var_dump(preg_replace_callback_array([], []));
$InvMocker = new PHPUnit_Framework_MockObject_InvocationMocker();
$OuterMatcher = new PHPUnit_Framework_MockObject_Matcher();
$InvMocker->addMatcher($OuterMatcher);
php_cli_server_start('foo bar');
ini_set('mysqlnd.fetch_data_copy', true);
session_set_save_handler(new \SessionHandler(), true);
ob_start();
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
test([0], [1], [2]);
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
$xmlString = "<root><a><b>1</b><b>2</b><b>3</b></a></root>";
$xml = simplexml_load_string($xmlString);
$nodes = $xml->a->b;
test($nodes, "asXml", fn ($n) => $n->asXml());
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
print_r($str_instead);
$bert = "file://" . __DIR__ . "/bug41033.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_NS_SSL_SERVER));
$fp = php_cli_server_connect();
$oldcwd = getcwd();
chdir($oldcwd);
$str = 'Hello World';
$shm_key = ftok(__FILE__, 'p');
$shm_id2 = shmop_open($shm_key, 'c', 0644, strlen($str) + 10);
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
$replace_pairs = array("$" => "%", "%" => "$", "#*&@()" => "()@&*#");
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
var_dump( strtr($str, $replace_pairs) );
$closure1 = new_closure_gen();
$gen1 = $closure1();
set_exception_handler(function() {
    echo 'Fourth handler' . PHP_EOL;
});
$fn = function() { return static::name(); };
$db = MySQLPDOTest::factory();
$stmt = $db->prepare('SELECT * FROM test_33689');
$tmp = $stmt->getColumnMeta(0);
printf("Expecting pdo_type = 1 got %s\n", $tmp['pdo_type']);
foreach($array as &$item){
        $item['nanana'] = 'batman';
        $item['superhero'] = 'robin';
    }
$item['superhero'] = 'robin';
$class = new SomeClass;
$arr = [$class];
var_dump(json_encode($arr));
$key = str_repeat('abc', random_int(3, 3));
var_dump(array_all([$key => 1], static fn () => false));
$magic_file = __DIR__ . '/bug79283.db';
$finfo = new finfo(FILEINFO_NONE, $magic_file);
var_dump($finfo->buffer("buffer\n"));
$ar1 = array("row1" => 2, "row2" => 1);
$args = array(&$ar1);
var_dump(call_user_func_array("array_multisort", $args));
$test_fl = __DIR__ . DIRECTORY_SEPARATOR . md5(uniqid());
$test_fl_escaped = escapeshellarg($test_fl);
$rf = new ReflectionFunction('collator_get_sort_key');
$empty = "";
$initialRequest = false;
$dom = new DOMDocument;
var_dump($dom->getElementById('x')?->nodeName);
pcntl_sigwaitinfo($a,$a);
$ch = curl_init("https://localhost/username");
$response = curl_exec($ch);
var_dump(str_contains($response, "authorization"));
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
$d0 = $prefix . "ソフト";
get_basename_with_cp($d0, 65001);
grapheme_stripos(1,1,2147483648);
function f_9() {
    class C_10 {
    }
    $child = new ChildClass();
    $child->testIsCallable2();
    $t = new stdClass;
    return $t;
}
$certificateGenerator = new CertificateGenerator();
for ($i_11 = 0; $i_11 < 10; $i_11++) {
}
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
$reqOf3 = 'select 79 n union all select 80 union all select 81';
$stmt1 = $pdo->query($reqOf3);
$arr  = array("test");
$outfile = tempnam(sys_get_temp_dir(), "ssl");
$contentfile = tempnam(sys_get_temp_dir(), "ssl");
$eml = __DIR__ . "/signed.eml";
$cainfo = array();
var_dump(openssl_pkcs7_verify($eml, PKCS7_NOVERIFY, $outfile, $cainfo, $outfile, $contentfile));
$db = getDbConnection();
$sql = '
    SET NOCOUNT ON
    SELECT 0 AS [result]
';
$stmt = $db->query($sql);
$stmt->closeCursor();
$x[""][] = 1;
var_dump(c1::$a1);
printf("printf test 7:%010.2f\n", 2.5);
$responses = array(
    "data://text/plain,HTTP/1.1 200 Some very long reason-phrase to test that this is properly handled by our code without adding a new header like  Bad: Header\r\nGood: Header\r\n\r\nBody",
    "data://text/plain,HTTP/1.1 200 \r\nGood: Header\r\n\r\nBody",
);
['pid' => $pid, 'uri' => $uri] = http_server($responses, $output);
$dom = new DOMDocument();
$dom->loadXML('<root><child/></root>');
