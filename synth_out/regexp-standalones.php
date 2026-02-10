<?php
$a = 1;
$i = "010";
global $user, $host, $passwd, $db, $port, $socket;
global $user, $host, $passwd, $db, $port, $socket;
$this->mysqli = new mysqli($host, $user, $passwd, $db, $port, $socket);
$result = $this->mysqli->query("SELECT NOW() AS my_time FROM DUAL");
$row = $result->fetch_object();
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
class C {
    public int $a;
}
$reflector = new ReflectionClass(C::class);
$obj = new C();
$reflector->resetAsLazyProxy($obj, function ($obj) use ($reflector) {
    try {
        $reflector->resetAsLazyProxy($obj, function () { });
    } catch (Error $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
    try {
        $reflector->resetAsLazyGhost($obj, function () { });
    } catch (Error $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
    return new C();
});
$fp = fopen(__DIR__."/test2.csv", "r");
fclose($fp);
$tmpFileOut2 = tempnam(sys_get_temp_dir(), 'test');
$envelopeData = file_get_contents($tmpFileOut2);
$dom = new DOMDocument;
$tag = $dom->appendChild($dom->createElement("style"));
$date = new DateTime("28-July-2008");
$other = new DateTime("31-July-2008");
$diff = date_diff($date, $other);
var_dump($diff);
function test($foo) {
    var_dump(0);
    var_dump($foo[0]);
}
test("str");
var_dump(filter_var("<data&sons>", FILTER_SANITIZE_ENCODED, FILTER_FLAG_ENCODE_LOW));
$this->values = array('a' => 0);
$a = "lest";
$this->callInitiator = "IVR";
class C extends stdClass {
    public int $a;
}
$reflector = new ReflectionClass(C::class);
$obj = new C();
$reflector->resetAsLazyGhost($obj, function () {});
class Box {
    public ?Test $value;
}
global $box;
function test($box) {
    var_dump($box->value = new Test);
}
$box = new Box();
test($box);
$mysqli = new mysqli("$host:$port", $user, $passwd, $db);
$dt = DateTime::createFromFormat('Y-m-d|', '2011-02-02');
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
$ao = new ArrayObject(new C);
$ai = $ao->getIterator();
showFirstTwoItems($ai);
catch (\Exception $e) {
    printf("%s: %s\n", $e::class, $e->getMessage());
}
catch (\Exception $e) {
    printf("%s: %s\n", $e::class, $e->getMessage());
}
printf("%s: %s\n", $e::class, $e->getMessage());
$pkcsfile = __DIR__ . "/openssl_pkcs7_verify__pkcsfile.tmp";
function new_closure_gen() {
    return function() {
        static $foo = 0;
        yield ++$foo;
    };
}
$closure2 = new_closure_gen();
$gen3 = $closure2();
$conn = odbc_connect($dsn, $user, $pass);
$curl = curl_init("http://www.google.com");
var_dump(curl_getinfo($curl, CURLINFO_PRIVATE));
function test(string $input) {
    var_dump(filter_var($input, FILTER_VALIDATE_URL));
}
test("http://te[st@2001:db8:3333:4444:5555:6666:1.2.3.4]");
$this->callInitiator = "IVR";
$filename = "bug51997.bz2";
$bz = bzopen($filename, "w");
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
$prefix . "フォルダ";

mkdir($prefi
et_basename;
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
$InvMocker = new PHPUnit_Framework_MockObject_InvocationMocker();
$OuterMatcher = new PHPUnit_Framework_MockObject_Matcher();
$InvMocker->addMatcher($OuterMatcher);
$php = getenv('TEST_PHP_EXECUTABLE_ESCAPED');
$offset = 'teststring';
$ref = &$offset;
$i= DateInterval::createFromDateString('2 days');
var_dump($i);
class C {
    public $a;
    public int $b = 1;

    public function __construct(int $a) {
        var_dump(__METHOD__);
        $this->a = $a;
        $this->b = 2;
    }
}
function test(string $name, object $obj) {
    printf("# %s:\n", $name);

    var_dump($obj);
    var_dump($obj->a);
    var_dump($obj);
}
$reflector = new ReflectionClass(C::class);
$obj = $reflector->newLazyGhost(function ($obj) {
    var_dump("initializer");
    $obj->__construct(1);
});
$obj = $reflector->newLazyProxy(function ($obj) {
    var_dump("initializer");
    return new C(1);
});
test('Proxy', $obj);
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
$code = <<<EOT
<?php
echo 1;
EOT;
$f = __DIR__."/data/test.txt.gz";
$h = gzopen($f, 'r');
var_dump(gzread($h, 10));
$document = new \DOMDocument();
$h1 = $document->getElementsByTagName('h1');
var_dump($h1->length);
