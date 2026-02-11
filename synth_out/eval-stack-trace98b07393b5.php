<?php
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
class DB extends mysqli {

    private function __construct($hostname, $username, $password, $database) {
        var_dump("DB::__construct() called");
    }
}
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
function test(string $input) {
    var_dump(filter_var($input, FILTER_VALIDATE_URL));
}
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
$test_array = array(1, array(1 => "one", "two" => 2, "" => "f") );
$style = array();
$i = 0;
$style[$i++] = $color;
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
$key = str_repeat('abc', random_int(3, 3));
$zip = new ZipArchive();
$DB = new DB();
$file_handle = fopen(__FILE__, "r");
$dir_handle = opendir( __DIR__ );
$resources = array($file_handle, $dir_handle);
function f_0() {
    $tester = new FPM\Tester($cfg);
    $userMessage = "'user' directive is ignored when FPM is not running as root";
    $tester->expectLogNotice($userMessage, 'dddd');
}
try {
    sprintf('%3$s, %2$s %1$s', "a", "b");
} catch (Exception $e) {}
if (true) {
    $i = 0;
    var_dump(debug_backtrace());
    $db = MySQLPDOTest::factory();
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $re = new ReflectionExtension("hash");
    var_dump($re->getConstants());
    $bert = "file://" . __DIR__ . "/bug41033.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_SERVER, array($cpca)));
    var_dump(A::fromArray(['a' => 'foo']));
    $text = '<p>hello world &trade;</p>';
    $dom = new DOMDocument('1.0', 'UTF-8');
    $node = $dom->getElementById('test');
    $node->textContent = $text;
    var_dump($node->textContent == $text);
}
$batch_file_path = __DIR__ . '/ghsa-9fcc-425m-g385_003.bat';
try {
    $client = new SoapClient(__DIR__ . '/bug49278.wsdl', array('location' => "http://".PHP_CLI_SERVER_ADDRESS, 'trace' => 1));
    var_dump($client->__getLastRequestHeaders());
} catch (Exception $e) {}
if (true) {
    $time = '2000-01-01 00:00:00.000000';
    $fp = fopen(__FILE__, "r");
    fclose($fp);
    $db = MySQLPDOTest::factory();
    $stmt = $db->prepare('SELECT * FROM test_33689');
    $tmp = $stmt->getColumnMeta(0);
    printf("Expecting pdo_type = 1 got %s\n", $tmp['pdo_type']);
    test("http://php.net\\@aliyun.com/aaa.do");
    $threesixty = M_PI * 2.0;
    var_dump(sin($threesixty));
    $arr = array(new Element(), new Element(), new Element());
    array_map(array('Element', 'CallBack'), $arr);
    $fn = "bug71263.bz2";
    $r = fopen($fn, "r");
    fclose($r);
}
$date = '7.8.2010';
$unixtime = strtotime($date);
try {
    var_dump(strncasecmp("test ", "E", 0));
} catch (Exception $e) {}
if (true) {
    $pass	= PDO_MYSQL_TEST_PASS;
    $dt = new DateTime('@1604215800');
    $dt->add(new DateInterval('PT1H'));
    $bert = "file://" . __DIR__ . "/bug41033.pem";
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_CLIENT));
    $a = new PDO("sqlite::memory:");
    $b = $a->prepare("insert into test_35336 (b) values (?)");
    $b->execute(array (5));
    $gen = (function() {
        yield from (function() { yield; })();
    })();
    $fiber = new Fiber(function() use ($gen) {
        $gen->current();
    });
    $fiber->start();
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
    ;
    
    ?>;
    error_reporting(E_ALL ^ E_NOTICE);
}
$browser=get_browser(NULL, true);
print_r($browser);
try {
    set_error_handler(function($no, $msg) {
        throw new Exception($msg);
    });
} catch (Exception $e) {}
if (true) {
    $dsn = 'sqlite:./bug64705NonExistingDir/bug64705NonExistingDb';
    $pdo = new \PDO($dsn, null, null);
    $dom = Dom\HTMLDocument::createEmpty();
    dumpNodeList($dom->getElementsByTagName("HTML"));
    var_dump(spl_autoload_functions());
    $dom = Dom\HTMLDocument::createFromString(<<<HTML
    <!DOCTYPE html>
    <html>
        <body>
            <svg xmlns="http://www.w3.org/2000/svg" height="1"></svg>
            <math></math>
        </body>
    </html>
    HTML);
    var_dump($dom->lookupNamespaceURI("xmlns"));
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
    $pdo->exec("create temp table t (n int, t text)");
    $priorityQueue = new SplPriorityQueue();
    $priorityQueue->setExtractFlags(SplPriorityQueue::EXTR_PRIORITY);
    $r = socket_sendmsg($sends1, [
        "name" => [ "addr" => "::1", "port" => 3002],
        "iov" => ["test ", "thing", "\n"],
        "control" => [[
            "level" => IPPROTO_IPV6,
            "type" => IPV6_TCLASS,
            "data" => 40,
        ]]
    ], 0);
    var_dump($r);
}
