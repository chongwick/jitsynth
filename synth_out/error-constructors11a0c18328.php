<?php
$ar1 = array(1, 2);
var_dump(soundex("Lukasiewicz"));
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
printf("[001] [%d] %s\n", mysqli_errno($link), mysqli_error($link));
class A
{
    public $a = array();

    public function __construct()
    {
        $this->a[] = new B(1);
        $this->a[] = new B(2);
    }
}
$a = unserialize(serialize(new A()));
$arr1 = array(1, "float", "f4", "hello", 2.2, 'color', "string", "pen\n", 11);
printf("[002] Connect failed, [%d] %s\n", mysqli_connect_errno(), mysqli_connect_error());
$im = imagecreate(800, 800);
$black = imagecolorallocate($im, 0, 0, 0);
var_dump(-9_223_372_036_860_776_000 % -1);
public function bar(&$a, &$b, $c) {
        Legacy::bar($a, $b, $c);
    }
public function callback(&$a, &$b, $c) {
        $b = 1;
    }
$b = 1;
public function bar(&$a, &$b, $c) {
        $arguments = array($a, $b, $c);
        $result = $this->inv_mocker->invoke(
            new PHPUnit_Framework_MockObject_Invocation_Static(
                $arguments
            )
        );
        return $result;
    }
$arguments = array($a, $b, $c);
var_dump($row['bit_column_1']);
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    var_dump(filter_var("?><!@#$%^&*()}{~Qwertyuilfdsasdfgmnbvcxcvbn", FILTER_SANITIZE_ENCODED, FILTER_FLAG_ENCODE_HIGH));
}
function f_1() {
    $r = new ResourceBundle( 'en_US', BUNDLE );
    $offset = 'teststring';
    $ref = &$offset;
    var_dump($r[$ref]);
}
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug54028_2" . DIRECTORY_SEPARATOR;
rs as $d) {
;
$fp = fopen (__FILE__, "r");
fclose($fp);
$filename = __DIR__ . DIRECTORY_SEPARATOR . 'bug70752.zip';
$zip = new ZipArchive();
$zip->open($filename);
$array = array("test" => 1);
function foo() {
  var_dump($i=1);
  return $i;
}
var_dump(foo());
$GLOBALS['b'] = 2;
$b = &$GLOBALS['b'];
$c = $b;
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug54028_2" . DIRECTORY_SEPARATOR;
$dirs = array("a", "ソ", "ゾ", "şŞıİğĞ", "多国語", "王", "汚れて掘る");

mkdir($prefix);
foreach ($
mkdir($prefix . $d);
}

$old_cwd = getcwd();
forea
_cwd = getcwd();
for;
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
var_dump(file_get_contents($uri));
try {
    class testObject extends ArrayObject {
        protected $test;
    
        public function getTest() {
            return $this->test;
        }
    
        public function setTest($test) {
            $this->test = $test;
        }
    }
    $obj = new testObject();
    $obj2 = unserialize(serialize($obj));
    var_dump($obj2->getTest());
} catch (Exception $e) {}
if (true) {
    $res = [];
    $res[] = $re;
}
ini_set("soap.wsdl_cache_enabled",0);
$assoc_array = array ('one' => 1, 'two' => 2);
$db = getDbConnection();
$sql = '
    SET NOCOUNT ON
    SELECT 0 AS [result]
';
$stmt = $db->query($sql);
for ($i_2 = 0; $i_2 < 10; $i_2++) {
    for ($i_3 = 0; $i_3 < 10; $i_3++) {
        $log_file = tempnam(sys_get_temp_dir(), 'php-curl-CURLOPT_WRITEFUNCTION-trampoline');
        $fp = fopen($log_file, 'w+');
        fwrite($fp, "test");
    }
    $test_array = array(1, array(1 => "one", "two" => 2, "" => "f") );
    var_dump( end($test_array[1]) );
}
function f_4() {
}
class relay
{
   public function __get( $name )
   {
       main::$dataAccessor = new dataAccessor;
   }
}
main::$dataAccessor = new relay();
$zip = new ZipArchive;
for ($i_5 = 0; $i_5 < 10; $i_5++) {
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $phar = new Phar($fname);
    var_dump($phar->getStub());
    function test(string $input) {
        var_dump(filter_var($input, FILTER_VALIDATE_URL));
    }
    test("http://te[st@2001:db8:3333:4444:5555:6666:1.2.3.4]");
    class B {
    
        private $mysqli;
    
        public function __construct() {
            global $user, $host, $passwd, $db, $port, $socket;
            $this->mysqli = new mysqli($host, $user, $passwd, $db, $port, $socket);
            $result = $this->mysqli->query("SELECT NOW() AS my_time FROM DUAL");
            $row = $result->fetch_object();
            echo $row->my_time."<br>\n";
            $result->close();
        }
    
        public function __destruct() {
            $this->mysqli->close();
        }
    }
    $B = new B();
    $r = new ResourceBundle( 'en_US', BUNDLE );
    print_r( $r['testvector'] );
}
$reflection = new ReflectionClass('\DateTime');
function foo() {
  var_dump($i=1);
  return $i;
}
var_dump(foo());
$ar1 = array("row1" => 2, "row2" => 1);
var_dump($ar1);
$rf = new ReflectionFunction('collator_get_sort_key');
function foo() {
    $x = 1;
    $x += 0;
    ++$x; // mem -> reg
    return $x;
}
var_dump(foo());
