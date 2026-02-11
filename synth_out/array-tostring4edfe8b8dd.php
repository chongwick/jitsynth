<?php
class A {
    private static $x = 1;
}
class B extends A {
    function bar() {
        var_dump(self::$x);
    }
}
class Foo {
    public function foo() {
        return $this;
    }

    public function __set($name, $value) {
        throw new Exception('Hello');
    }
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
class PHPUnit_Framework_MockObject_Matcher {
    public $stub = null;
    public $methodNameMatcher;
    public function invoked($invocation) {
        return $this->stub->invoke($invocation);
    }
}
function test(string $name, object $obj) {
    printf("# %s:\n", $name);

    var_dump($obj);
    var_dump($obj->a);
    var_dump($obj);
}
$reflector = new ReflectionClass(C::class);
$start = memory_get_usage() + 1024;
function f_0() {
    $str = 'Hello World';
    $shm_key = ftok(__FILE__, 'p');
    $shm_id1 = shmop_open($shm_key, 'c', 0644, strlen($str));
    var_dump($shm_id1);
    $tempnum = 12345;
    $tempstring = "abcdefghjklmnpqrstuvwxyz";
    var_dump(sprintf("%d  %s  %d\n", $tempnum, $tempstring, $tempnum));
    return 'B';
}
$fp = tmpfile();
for($i = 495; $i <= 1074; $i++) {
  ini_set('precision', $i);
  echo "$i: len=", strlen(strval(-1 * pow(2, -1074))), "\n";
}
ini_set('precision', $i);
$oIntlDateFormatter = new IntlDateFormatter("en_GB");
$a = Array();
$unset_var = 10;
printf("Content-Type OK" . PHP_EOL);
$a = 'ok';
$_a = $a;
$now = new DateTime('2018-11-03 11:34:20.781751');
$db = PDOTest::factory();
$db->setAttribute(PDO::ATTR_STRINGIFY_FETCHES, true);
);
if (!$reader->open($fil
ttribute('idx');
            echo $reade;
$references = array();
$idx = 0;
$references[$idx]['row_ref'] 		= &$row;
bar();
$style = array();
$i = 0;
$style[$i++] = IMG_COLOR_TRANSPARENT;
var_dump(exif_read_data(__DIR__.'/image021.tiff'));
$arrays = array(
  array(),
  array(NULL),
  array(null),
  array(true),
  array(""),
  array(''),
  array(array(), array()),
  array(array(1, 2), array('a', 'b')),
  array(1 => 'One'),
  array("test" => "is_array"),
  array(0),
  array(-1),
  array(10.5, 5.6),
  array("string", "test"),
  array('string', 'test')
);
$a = new B;
ini_set("session.save_handler","files");
$headers = ['Host: okey.com'];
$strings_with_nulls = array(
                   "\0",
                   '\0',
                           "hello\0world",
                           "\0hel\0lo",
                           "hello\0",
                           "\0\0hello\tworld\0\0",
                           "\\0he\0llo\\0",
                           'hello\0\0'
                           );
$filename = __DIR__ . DIRECTORY_SEPARATOR . 'bug70752.zip';
$zip = new ZipArchive();
$zip->open($filename);
$array_object = array();
var_dump(mysqli_get_server_version($link));
$fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
$phar = new Phar($fname, 0, 'a.phar');
$phar['x'] = 'hi';
var_dump(getenv("HTTP_X_FORWARDED_FOR"));
);
if (!$reader->open($fil
ttributeNo(0);
            echo $reade;
public static function fromArray(array $props): self
    {
        $me = new static;
        foreach ($props as $k => &$v) {
            $me->{$k} = &$v;  # try to remove &
        }
        return $me;
    }
$me = new static;
foreach ($props as $k => &$v) {
            $me->{$k} = &$v;  # try to remove &
        }
$me->{$k} = &$v;
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
$tester->close();
$EXPECTED_OUTPUT_INVALID_OFFSETS_REGEX = '/^' . expectf_to_regex(EXPECTED_OUTPUT_INVALID_OFFSETS) . '$/s';
printf("[009] Cannot run SELECT, [%d] %s\n",
                mysqli_errno($link), mysqli_error($link));
$foo = new Foo();
$i = 0;
$j = 0;
$foo = new FooBar();
$foo[$j++] = $i++;
$f = __DIR__."/data/test.txt.gz";
$h = gzopen($f, 'r');
var_dump(gzeof($h));
$OuterMatcher = new PHPUnit_Framework_MockObject_Matcher();
foo(true, false);
$textascii = 'This is an "example" of using DOM splitText';
 = new DOMDocument('1.0', 'UTF-8');
$no
e = $dom->createTextNode($textascii);
$do;
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$dsn = ini_get('pdo.dsn.mysql');
$found = ($dsn !== false);
$db = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
$db->query(<<<'SQL'
CREATE
    PROCEDURE `testSp`()
	BEGIN
		DECLARE `cur` CURSOR FOR SELECT 1;
		OPEN `cur`;
		CLOSE `cur`;
		SELECT 1;
	END;
SQL);
$epid = pcntl_waitpid(-1,$status);
var_dump($obj);
$tempstring = "abcdefghjklmnpqrstuvwxyz";
var_dump(sprintf("%s", $tempstring, $tempstring, $tempstring));
for ($i_1 = 0; $i_1 < 10; $i_1++) {
    $ch = curl_init("https://localhost/username");
    curl_setopt($ch, CURLOPT_VERBOSE, true);
}
$fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
$ar1 = array("row1" => 2, "row2" => 1);
var_dump($ar1);
var_dump(strncasecmp("test ", "E", 0));
