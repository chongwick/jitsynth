<?php
class MyObjectStorage extends SplObjectStorage {
    // Overwrite getHash() with just some (working) test-method
    public function getHash($object): string { return get_class($object); }
}
$list = new MyObjectStorage();
$list2 = clone $list;
$a->foo = 5;
$dom = Dom\XMLDocument::createFromString(<<<XML
<root>
    <test1 xml:id="x"/>
    <test2 xml:id="x"/>
</root>
XML);
$dom->getElementById('x')->removeAttribute('xml:id');
$fp = php_cli_server_connect();
$rf = new ReflectionFunction('collator_get_sort_key');
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $sql = '
        SET NOCOUNT ON
        SELECT 0 AS [result]
    ';
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $phar = new Phar($fname);
    $phar->stopBuffering();
}
$db = getDbConnection();
$sql = '
    SET NOCOUNT ON
    SELECT 0 AS [result]
';
$stmt = $db->query($sql);
$str = 'Hello World';
$shm_key = ftok(__FILE__, 'p');
$shm_id2 = shmop_open($shm_key, 'c', 0644, strlen($str) + 10);
var_dump($shm_id2);
$strA = 'test &amp; test';
$dom = Dom\XMLDocument::createFromString(<<<XML
<root>
    <test1 xml:id="x"/>
    <test2 xml:id="x"/>
</root>
XML);
var_dump($dom->getElementById('x')?->nodeName);
$dom = new DOMDocument();
$dom->loadXML('<root><child/></root>');
$arg = new Stdclass();
$arg->name = array();
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
zerofill(11, $link, 'DECIMAL');
class Test implements ArrayAccess {
    public function offsetExists($x): bool { $GLOBALS["obj"] = 24; return true; }
    public function offsetGet($x): mixed { var_dump($x); return 42; }
    public function offsetSet($x, $y): void { }
    public function offsetUnset($x): void { }
}
$obj = new Test;
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
$d0 = $prefix . "ソフト";
$d1 =
ith_cp($d0, 65001);
get_basename_;
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
printf("# %s\n", $name);
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
global $user, $host, $passwd, $db, $port, $socket;
$this->mysqli = new mysqli($host, $user, $passwd, $db, $port, $socket);
$this->mysqli->close();
$time = '9999-11-33';
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
var_dump($body->lookupNamespaceURI("a"));
$fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
$phar = new Phar($fname);
$phar['b.php'] = '<php echo "this is b\n"; ?>';
boo();
function boo(){
    debug_print_backtrace();
};
$tmpFileIn = tempnam(sys_get_temp_dir(), 'test');
$cert = "-----BEGIN CERTIFICATE-----
MIIDXDCCAkSgAwIBAgIKq/f5U3FzthdKUzANBgkqhkiG9w0BAQUFADBcMRIwEAYD
VQQDEwlzZXRhcGRmLWExCTAHBgNVBAoTADEJMAcGA1UECxMAMSMwIQYJKoZIhvcN
AQkBFhRzdXBwb3J0QHNldGFzaWduLmNvbTELMAkGA1UEBhMCREUwHhcNMTUwOTA4
MDkzNDExWhcNMjAwOTA4MDkzNDExWjBcMRIwEAYDVQQDEwlzZXRhcGRmLWExCTAH
BgNVBAoTADEJMAcGA1UECxMAMSMwIQYJKoZIhvcNAQkBFhRzdXBwb3J0QHNldGFz
aWduLmNvbTELMAkGA1UEBhMCREUwggEiMA0GCSqGSIb3DQEBAQUAA4IBDwAwggEK
AoIBAQCkmTLvUIYfqAKC1CHVgABlemrFIVRm4JGeB0jIGofyrm3yVwR4YcK0eUmt
/0nbFfsFsU0/C9dXKZYD42t5YpLFsj666Z1EoU1CfSIW2bf0HaWVJ+oNT5twS3dv
RTzAcnPM44GxO4y6GUW6un0/bT/MZbFKbb3NI1L0mwY7EoqUXR68XxuHqWETaslm
Sbp1XvbLsJjgV9X3ihi7JC7A9kEzrKh+RBsXEXwlSv5JO2TUdwq9P4EbjqvgiaV1
vFNAArioX5pIUIm9ahAm8d7jjW6DFfV798rTzaQ3GJs0yC3UD6xhmbTbdC/D9Pot
8RGu89Fx6E+O5j4LwGH4kiYjgvYZAgMBAAGjIDAeMA8GCSqGSIb3LwEBCgQCBQAw
CwYDVR0PBAQDAgOYMA0GCSqGSIb3DQEBBQUAA4IBAQBCA8iXz7zxAmCWNZ0faiLm
aKw8u2PUq+EPKrGKc9Q70Ksw/e/EHvWrghFzmu5MOZRn/QIWq++sbbc8eOiaRDE8
lWCW596FLW4habXKw0sjDNcyEBArPgDp17O6NgHqI2U1KL1P2Y40e0YH2BWxNS+f
pmWZekjiC6jfId2JGsyPZUTX4USwthG4dFX0/BWYg+K7kXvQzMobes2NxW3Iqn8h
FUNgraCzlQMSfE2gwAMSUXTJubUGorj4LFYSiLIIJvf6KlmuR5uOIi5lSjSeZf5E
FLEHVhrz3o2icUeyb1K1BTAQRZ/H3GZ0QpgqSK5vmuV9C+rzezQMoy4/8UUnNPMt
-----END CERTIFICATE-----
";
for ($i_1 = 0; $i_1 < 10; $i_1++) {
    $extracert = file_get_contents(__DIR__ . "/cert.crt");
    set_exception_handler(function (\Throwable $exception) {
        echo 'Caught: ' . $exception->getMessage() . "\n";
    });
}
$filename = __DIR__ . '/bug77432.phar';
$phar = new Phar($filename);
var_dump($s);
$errcontext = '';
class SomeClass2 implements JsonSerializable {
    public function jsonSerialize(): mixed {
        return [(array)$this];
    }
}
$class = new SomeClass2;
$arr = [$class];
var_dump(json_encode($arr));
$filename = __DIR__ . '/_fromUri_custom_constructor.xml';
$xmlstring = '<?xml version="1.0" encoding="UTF-8"?>
<books></books>';
file_put_contents($filename, $xmlstring);
$dom = Dom\HTMLDocument::createEmpty();
dumpNodeList($dom->getElementsByTagName("bar:html"));
class foo
{
// no members
}
$this->foo_object = new foo();
$curl = curl_init("http://www.google.com");
curl_setopt($curl, CURLOPT_TIMEOUT, 1);
$originalEnvelopeData = "any string with \x1a is cut at this point.";
$tmpFileIn = tempnam(sys_get_temp_dir(), 'test');
file_put_contents($tmpFileIn, $originalEnvelopeData);
function f_2() {
    $fp = fopen("php://memory", "r+");
    stream_get_line($fp, 1024*1024*2, "aaaa");
    for ($i_3 = 0; $i_3 < 10; $i_3++) {
        var_dump($br);
    }
}
function f_4() {
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
    for ($i_5 = 0; $i_5 < 10; $i_5++) {
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
    }
}
function f_6() {
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
    $gen = (function() {
        yield from (function() { yield; })();
    })();
    if (true) {
        return [get_object_vars($this)];
    }
    $dt = new DateTime('first day of January 2011');
    var_dump($dt);
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
    $file = __DIR__ . '/bug38212私はガラスを食べられます.gd2';
    $im1 = imagecreatetruec
    ;
    stream_socket_client('tcp://9999.9999.9999.9999:9999', $error_code, $error_message, 0.2, STREAM_CLIENT_CONNECT | STREAM_CLIENT_PERSISTENT);
    class A2 { // A1 with private function test
    	public function __call($method, $args) { echo "__call\n"; }
    	public static function __callStatic($method, $args) { echo "__callStatic\n"; }
    	private function test() {}
    }
    class B2 extends A2 {
    	public function test(){	parent::test();	}
    }
    $test2 = new B2;
    sprintf('%$s, %2$s %1$s', "a", "b");
    $header = <<<HEADER
    extern int *(*bug79177_cb)(void);
    void bug79177(void);
    HEADER;
    $ffi = FFI::cdef($header);
}
function f_7() {
    global $user, $host, $passwd, $db, $port, $socket;
    global $user, $host, $passwd, $db, $port, $socket;
    $this->mysqli = new mysqli($host, $user, $passwd, $db, $port, $socket);
    $result = $this->mysqli->query("SELECT NOW() AS my_time FROM DUAL");
    if (true) {
        return 42;
    }
    $cert = "file://" . __DIR__ . "/cert.crt";
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_SERVER));
    $curl = curl_init("http://www.google.com");
    var_dump(
            strnatcmp('foo ', 'foo '),
            strnatcmp('foo', 'foo'),
            strnatcmp(' foo', ' foo')
        );
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
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $phar = new Phar($fname);
    $phar['b.php'] = '<php echo "this is b\n"; ?>';
    $str = "repeater id='loopt' dataSrc=subject columns=2";
    preg_match_all("/(['\"])((.*(\\\\\\1)*)*)\\1/sU",$str,$str_instead);
}
function f_8() {
    class TrampolineTest {
        public function __call(string $name, array $arguments) {
            echo 'Trampoline for ', $name, PHP_EOL;
        }
    }
    $o = new TrampolineTest();
    $callback1 = [$o, 'trampoline1'];
    if (true) {
        return false;
    }
    $oIntlDateFormatter = new IntlDateFormatter("en_GB");
    $oIntlDateFormatter->setPattern('VV');
    $sixty = M_PI / 3.0;
    var_dump(is_callable(array($this, 'static::testIsCallable2')));
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
    var_dump($ffi->bug_gh16013_return_enum());
    $file_handle = fopen(__FILE__, "r");
    $cert = "file://" . __DIR__ . "/cert.crt";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_CLIENT, array($cpca)));
}
function test(#[SensitiveParameter] $sensitive)
{
    debug_print_backtrace();
    var_dump(debug_backtrace());
    var_dump((new Exception)->getTrace());
}
test('sensitive');
