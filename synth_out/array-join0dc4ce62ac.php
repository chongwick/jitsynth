<?php
class TrampolineTest {
    public function __call(string $name, array $arguments) {
        echo 'Trampoline for ', $name, PHP_EOL;
    }
}
#[\AllowDynamicProperties]
class C {
    public $b;
    public function __construct() {
        $this->a = new Canary();
    }
}
class classA
{
  public function __toString() {
    return "key";
  }
}
function test(string $name, object $obj) {
    printf("# %s:\n", $name);

    var_dump($obj);
    var_dump($obj->a);
    var_dump($obj);
}
class MyObjectStorage extends SplObjectStorage {
    // Overwrite getHash() with just some (working) test-method
    public function getHash($object): string { return get_class($object); }
}
class TestObject {}
function display($res)
{
	echo implode("\n", array_map(fn($row) => implode("\t", $row), $res))."\n";
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
function &test() {
    try {
        return $a;
    } finally {
        $a = 2;
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
class MethodCallbackByReference {
    public function bar(&$a, &$b, $c) {
        Legacy::bar($a, $b, $c);
    }
    public function callback(&$a, &$b, $c) {
        $b = 1;
    }
}
class Mock_MethodCallbackByReference_7b180d26 extends MethodCallbackByReference {
    public $inv_mocker;
    public function bar(&$a, &$b, $c) {
        $arguments = array($a, $b, $c);
        $result = $this->inv_mocker->invoke(
            new PHPUnit_Framework_MockObject_Invocation_Static(
                $arguments
            )
        );
        return $result;
    }
}
$GLOBALS['b'] = 2;
$a = NULL;
$b = NULL;
var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
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
$r = new ResourceBundle( 'en_US', BUNDLE );
$r2 = $r['testtable'];
printf( "testtable: %d\n", $r2['major'] );
$now = new DateTimeImmutable();
$o = new TrampolineTest();
$callback1 = [$o, 'trampoline1'];
var_dump(spl_autoload_unregister($callback1));
$obj = new C();
$array = new ArrayObject();
$array->offsetSet('key', 'value');
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
$db = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
$db->query('DROP PROCEDURE IF EXISTS testSp');
var_dump($obj);
$list = new MyObjectStorage();
$list->attach(new TestObject());
$obj = new C();
var_dump($obj);
var_dump( range(1.0, 7.0, fdiv(0, 0)) );
$res = [];
display($res);
var_dump('ERR');
$bert = "file://" . __DIR__ . "/bug41033.pem";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_ENCRYPT, array($cpca), $utfl));
$obj = new C();
var_dump($obj->a);
$dom = Dom\HTMLDocument::createFromString(<<<HTML
<!DOCTYPE html>
<html>
    <body>
        <svg xmlns="http://www.w3.org/2000/svg" height="1"></svg>
        <math></math>
    </body>
</html>
HTML);
var_dump($dom->lookupNamespaceURI(NULL));
zerofill(4, $link, 'MEDIUMINT');
$fp = tmpfile();
$array_test = array("a", "b", "d", 7, "u" => "U", -4, "-.008" => "neg.008");
var_dump(test());
$dom = Dom\HTMLDocument::createEmpty();
var_dump($dom->lookupNamespaceURI("a"));
$msgfmt = new MessageFormatter('en_US', '{0,number,integer}');
$msgfmt->parse('abc');
var_dump(exif_read_data('data:image/jpg;base64,TU0AKgAAAAwgICAgAAIBDwAEAAAAAgAAACKSfCAgAAAAAEZVSklGSUxN'));
printf("printf test 16:%x\n", 170);
var_dump(filter_var("?><!@#$%^&*()}{~Qwertyuilfdsasdfgmnbvcxcvbn", FILTER_SANITIZE_ENCODED, FILTER_FLAG_ENCODE_LOW));
$time = '2000-01-01 00:00:00.000000';
$tz_aus = new DateTimeZone('Australia/Sydney');
$tz_us = new DateTimeZone('America/Los_Angeles');
$auz = new DateTime($time, $tz_aus);
$us = new DateTime($time, $tz_us);
$diff = $auz->diff($us);
mysqli_query($link, 'ALTER TABLE test DROP zero');
$bert = "file://" . __DIR__ . "/bug41033.pem";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_SIGN, array($cpca)));
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
$ch = curl_init("https://localhost/username");
curl_setopt($ch, CURLOPT_USERNAME, null);
printf("printf test 18:%16b\n", 170);
$zip = new ZipArchive();
$zip->setPassword('bar');
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
var_dump(ob_get_contents());
printf("# %s:\n", $name);
var_dump(posix_setrlimit(POSIX_RLIMIT_NOFILE, 129, 128));
define('OBJECT_COUNT', 10000);
define("TEST",2);
$a = new PDO("sqlite::memory:");
$a->query ("CREATE TABLE test_35336 (a integer primary key, b text)");
$loop_counter = 1;
$loop_counter++;
if (true) {
    $timeZone = new DateTimeZone('UTC');
}
$tbl = "test";
$sql = "INSERT INTO $tbl (bit_column_1) VALUES (0)";
printf("printf test 9:<%-20s>\n", "bar");
catch (Error $e) {
    printf("%s: %s\n", $e::class, $e->getMessage());
}
printf("%s: %s\n", $e::class, $e->getMessage());
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
$name = "foo";
$dom = new DOMDocument;
$dom->loadXML(<<<XML
<root>
    <test1 xml:id="x"/>
    <test2 attr="x"/>
</root>
XML);
$msgfmt = new MessageFormatter('en_US', '{0,number,integer}');
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $dom = Dom\HTMLDocument::createEmpty();
}
$foo = new Mock_MethodCallbackByReference_7b180d26();
$InvMocker = new PHPUnit_Framework_MockObject_InvocationMocker();
$foo->inv_mocker = $InvMocker;
$priv = file_get_contents(__DIR__ . "/private.crt");
var_dump($http_response_header);
$rc = new ReflectionClass('Foo');
$date2 = new DateTime("Sat 19 November 2011");
$obj = new testObject();
var_dump($obj->getTest());
$ar1 = array("row1" => 2, "row2" => 1);
var_dump($ar1);
