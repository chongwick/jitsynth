<?php
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
$notDefined[$i] = 'test';
class Canary {
    public function __destruct() {
        var_dump(__METHOD__);
    }
}
$this->a = new Canary();
$dt = new DateTime('first day of January 2011');
$dom = new DOMDocument;
class Test implements ArrayAccess {
    public function offsetExists($x): bool { $GLOBALS["obj"] = 24; return true; }
    public function offsetGet($x): mixed { var_dump($x); return 42; }
    public function offsetSet($x, $y): void { }
    public function offsetUnset($x): void { }
}
$obj = new Test;
var_dump($obj);
$db = getDbConnection();
$sql = '
    SET NOCOUNT ON
    SELECT 0 AS [result]
';
$stmt = $db->query($sql);
var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));
printf("printf test 23:%016X\n", 170);
$priorityQueue = new SplPriorityQueue();
var_dump($priorityQueue->getExtractFlags() & SplPriorityQueue::EXTR_PRIORITY);
$dt = new DateTime('first day of January 2011');
var_dump($dt);
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
printf("[008] %s [%d] %s\n", $column_def,
            mysqli_errno($link), mysqli_error($link));
#[\AllowDynamicProperties]
class C {
    public $b;
    public function __construct() {
        $this->a = new Canary();
    }
}
$obj = new C();
var_dump($obj);
function byVal($arg) {
    var_dump($arg);
}
function byRef(&$arg) {
    var_dump($arg);
}
var_dump($arg);
$args = ["-d", "extension_dir=" . ini_get("extension_dir"), "-d", "extension=" . (substr(PHP_OS, 0, 3) == "WIN" ? "php_" : "") . "soap." . PHP_SHLIB_SUFFIX];
$code = <<<'PHP'
/* Receive */
$content = trim(file_get_contents("php://input")) . PHP_EOL;
PHP;
php_cli_server_start($code, null, $args);
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
$d0 = $prefix . "ソフト";
$d1 =
dir($d1);

;
$wsdl = __DIR__."/bug35142.wsdl";
function __construct($wsdl, $options) {
    parent::__construct($wsdl, $options);
    $this->server = new SoapServer($wsdl, $options);
    $this->server->addFunction('PostEvents');
  }
$this->server = new SoapServer($wsdl, $options);
$this->server->addFunction('PostEvents');
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
function test(string $input) {
    var_dump(filter_var($input, FILTER_VALIDATE_URL));
}
test("http://test@[2001:db8:3333:4444:5555:6666:1.2.3.4]");
var_dump(strlen(file_get_contents('php://input')));
$log_file = tempnam(sys_get_temp_dir(), 'php-curl-CURLOPT_WRITEFUNCTION-trampoline');
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'file://' . $log_file);
$bert = "file://" . __DIR__ . "/bug41033.pem";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_SIGN, array($cpca)));
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
fflush($stream);
$curl = curl_init("http://www.google.com");
curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 1);
public function invoke($invocation) {
        return call_user_func_array($this->callback, $invocation->parameters);
    }
public function invoke( $invocation) {
        foreach ($this->matchers as $match) {
            $match->invoked($invocation);
        }
    }
foreach ($this->matchers as $match) {
            $match->invoked($invocation);
        }
$match->invoked($invocation);
time_nanosleep(0, 1000000000);
var_dump(sha1_file(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370_003' . DIRECTORY_SEPARATOR . 'testfile'));
define("TEST",3);
$bert = "file://" . __DIR__ . "/bug41033.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_SERVER));
register_shutdown_function('exploDe');
$dest = __DIR__ . "/bug40228";
rmdir($dest . '/test');
$dbh = @pg_connect($conn_str);
pg_close($dbh);
$a[10] = "42";
var_dump($a["010"], isset($a["010"]));
function foo() {
  $i = 1;
  $x = 2;
  var_dump($i=$x);
  return $i;
}
var_dump(foo());
$count = 1;
$tempstring = "abcdefghjklmnpqrstuvwxyz";
var_dump(sprintf("%030.-15s", $tempstring));
$curl = curl_init("http://www.google.com");
var_dump(curl_getinfo($curl, CURLINFO_PRIVATE));
php_cli_server_start('echo $_SERVER["REQUEST_METHOD"];');
class MyObjectStorage extends SplObjectStorage {
    // Overwrite getHash() with just some (working) test-method
    public function getHash($object): string { return get_class($object); }
}
$list = new MyObjectStorage();
foreach($list as $x) var_dump($list->offsetExists($x));
var_dump($list->offsetExists($x));
function get() {
    $t = new stdClass;
    $t->prop = $t;
    return $t;
}
var_dump(get());
$conn = pg_connect($conn_str);
$table='test_68638';
pg_update($conn,$table, array('value' => '-inf'), array('id' => 2));
$dom = Dom\HTMLDocument::createEmpty();
$container = $dom->appendChild(createElement($dom, "container"));
$container->appendChild(createElementNS($dom, "urn:foo", "htML", "5"));
$zip = new ZipArchive();
$zip->extractTo(__DIR__);
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
$prefix . "フォルダ";

mkdir($prefi
est1.txt");

rmdir($d0);
;
$dom = Dom\HTMLDocument::createEmpty();
dumpNodeList($dom->getElementsByTagName("htML"));
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
$file_handle = fopen(__FILE__, "r");
fclose($file_handle);
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
var_dump(mb_strpos('Hello', 'e', 0, '8bit'));
$trace_file = '/tmp/mysqli_debug_phpt.trace';
unlink($trace_file);
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
foreach ($not_objects as $type ) {
  echo "-- Iteration $loop_counter --\n"; $loop_counter++;
  var_dump( is_object($type) );
}
var_dump( is_object($type) );
$im = imagecreate(800, 800);
imageline($im, 600, 200, 600, 700, IMG_COLOR_STYLED);
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
$namespaceless = $body->appendChild($dom->createElementNS(NULL, "foo"));
var_dump($namespaceless->lookupNamespaceURI(NULL));
$dt = new DateTime('first day of January 2011');
var_dump($dt);
var_dump(json_decode('[]', false, 0x100000000));
$tester = new FPM\Tester($cfg);
$tester->expectLogTerminatingNotices();
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
$tester = new FPM\Tester($cfg);
$userMessage = "'user' directive is ignored when FPM is not running as root";
$tester->expectLogNotice($userMessage, 'bbbb');
function test($p12_contents, $password) {
    openssl_pkcs12_read($p12_contents, $cert_data, $password);
    openssl_error_string();
    var_dump(count($cert_data['extracerts']));
}
$pass = "qwerty";
test($p12, $pass);
class SomeClass2 implements JsonSerializable {
    public function jsonSerialize(): mixed {
        return [(array)$this];
    }
}
$class = new SomeClass2;
$arr = [$class];
var_dump(json_encode($arr));
set_error_handler(function() {
//    var_dump(func_get_args());
    DoesNotExists::$nope = true;
}, E_ALL);
$o = new SplFileInfo('.');
var_dump((bool) $o);
$tempstring = "abcdefghjklmnpqrstuvwxyz";
var_dump(sprintf("%s", $tempstring, $tempstring, $tempstring));
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
$reqOfBig = 'select * from t';
$attrs = [ PDO::ATTR_PREFETCH => 0 ];
$stmt = $pdo->prepare($reqOfBig, $attrs);
$mem = $stmt->getAttribute(PDO::PGSQL_ATTR_RESULT_MEMORY_SIZE);
$date = (new ReflectionClass(DateTime::class))->newInstanceWithoutConstructor();
$dt = new DateTime('@1604219400');
$dt->setTimezone(new DateTimeZone('America/Boise'));
var_dump(soundex("Knuth"));
var_dump(mb_stripos('Hello', 'e', 0, '8bit'));
ini_set('display_errors',true);
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
var_dump(__METHOD__);
#[\AllowDynamicProperties]
class C {
    public $b;
    public function __construct() {
        $this->a = new Canary();
    }
}
$obj = new C();
var_dump($obj);
session_write_close();
function crash()
{
    $notDefined[$i] = 'test';
}
crash();
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
var_dump($prefixed->lookupNamespaceURI("a"));
$tester = new FPM\Tester($cfg);
$tester->terminate();
$filename =  __DIR__ . DIRECTORY_SEPARATOR . 'bug70752.txt';
var_dump(file_exists($filename));
$twoseventy = M_PI * 1.5;
var_dump(sin($twoseventy));
$tester = new FPM\Tester($cfg);
$tester->terminate();
$res->free();
$ch = curl_init("https://localhost/username");
$response = curl_exec($ch);
var_dump(str_contains($response, "authorization"));
class Foo {
    var $bar = array();

    static function bar() {
        static $instance = null;
        $instance = new Foo();
        return $instance->bar;
    }
}
extract(Foo::bar());
$fp = fopen("php://memory", "r+");
rewind($fp);
$r = new ReflectionClass('stdClass');
$tbl = "test";
$sql = "INSERT INTO $tbl (bit_column_1) VALUES (0)";
class SomeClass2 implements JsonSerializable {
    public function jsonSerialize(): mixed {
        return [(array)$this];
    }
}
$class = new SomeClass2;
$arr = [$class];
var_dump(json_encode($arr));
$r = new Phar(__DIR__ . "/bug69279.phar.zip");
var_dump($r["bug69279.txt"]->isCompressed());
var_dump(soundex("Lloyd"));
$r = new Phar(__DIR__ . "/bug69279.phar.zip");
$r->extractTo(__DIR__, NULL, TRUE);
global $list;
$list->pop();
function test(string $name, object $obj) {
    printf("# %s:\n", $name);

    var_dump($obj);
    var_dump(@$obj->dynamic++);
    var_dump($obj);
}
var_dump($obj);
$fp = fopen("php://memory", "r+");
rewind($fp);
$im = imagecreate(800, 800);
imageline($im, 650, 650, 150, 150, IMG_COLOR_STYLED);
$db = getDbConnection();
$sql = '
    SET NOCOUNT ON
    SELECT 0 AS [result]
';
$stmt = $db->query($sql);
var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));
md5('foo');
class TestSoapClient extends SoapClient {
  private $server;

  function __construct($wsdl) {
    parent::__construct($wsdl);
    $this->server = new SoapServer($wsdl);
    $this->server->addFunction('Test');
  }

  function __doRequest($request, $location, $action, $version, $one_way = 0): string {
    ob_start();
    $this->server->handle($request);
    $response = ob_get_contents();
    ob_end_clean();
    return $response;
  }
}
$client = new TestSoapClient(__DIR__.'/bug38004.wsdl');
$strA = 'test &amp; test';
$strB = 'test & test';
$res = $client->Test(array('strA'=>$strA, 'strB'=>$strB));
print_r($res);
$ch = curl_init();
curl_setopt($ch, CURLOPT_WRITEFUNCTION, null);
$s = "1234567890a";
var_dump($s["10"], isset($s["10"]));
$fp = fopen(__FILE__, "r");
fclose($fp);
$h = <<<'EOD'
void (*bug_gh9090_void_none_ptr)();
void (*bug_gh9090_void_int_char_ptr)(int, char *);
void (*bug_gh9090_void_int_char_var_ptr)(int, char *, ...);
void (*bug_gh9090_void_char_int_ptr)(char *, int);
int (*bug_gh9090_int_int_char_ptr)(int, char *);

void bug_gh9090_void_none();
void bug_gh9090_void_int_char(int i, char *s);
void bug_gh9090_void_int_char_var(int i, char *fmt, ...);
EOD;
$ffi = FFI::cdef($h);
$func_ptrs = [
    'bug_gh9090_void_none_ptr',
    'bug_gh9090_void_int_char_ptr',
    'bug_gh9090_void_int_char_var_ptr',
    'bug_gh9090_void_char_int_ptr',
    'bug_gh9090_int_int_char_ptr',
];
$func_argvs = [
    [ 'bug_gh9090_void_none',         [ ]                           ],
    [ 'bug_gh9090_void_int_char',     [ 42, "hello" ]               ],
    [ 'bug_gh9090_void_int_char_var', [ 42, "d=%d s=%s", -1, "ok" ] ],
];
foreach ($func_ptrs as $func_ptr) {
    foreach ($func_argvs as $func_argv) {
        [ $func, $argv ] = $func_argv;

        $ok = true;
        try {
            $ffi->$func_ptr = $ffi->$func;
            call_user_func_array($ffi->$func_ptr, $argv);
        } catch (FFI\Exception $e) {
            $ok = false;
        }

        printf("%-36s = %-36s ? %s\n", $func_ptr, $func, $ok ? 'yes' : 'no');
    }
}
foreach ($func_argvs as $func_argv) {
        [ $func, $argv ] = $func_argv;

        $ok = true;
        try {
            $ffi->$func_ptr = $ffi->$func;
            call_user_func_array($ffi->$func_ptr, $argv);
        } catch (FFI\Exception $e) {
            $ok = false;
        }

        printf("%-36s = %-36s ? %s\n", $func_ptr, $func, $ok ? 'yes' : 'no');
    }
[ $func, $argv ] = $func_argv;
$ffi->$func_ptr = $ffi->$func;
call_user_func_array($ffi->$func_ptr, $argv);
ob_start("test");
class A {
    public $a;
}
$a = new A();
$b = new A();
$prop = new ReflectionProperty($b, 'dyn');
$prop->setRawValue($a, 1);
var_dump(range('a', 'z', 100));
$db = getDbConnection();
$sql = '
    SET NOCOUNT ON
    SELECT 0 AS [result]
';
$stmt = $db->query($sql);
var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));
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
var_dump($isEmpty);
$filename = "bug51997.bz2";
$bz = bzopen($filename, "w");
bzclose($bz);
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
