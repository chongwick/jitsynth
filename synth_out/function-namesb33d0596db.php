<?php
function byVal($arg) {
    var_dump($arg);
}
function byRef(&$arg) {
    var_dump($arg);
}
class Test {
    public static function __callStatic($method, $args) {}
    public function __call($method, $args) {}
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
class classWithToString
{
    public function __toString() {
        return "Class A object";
    }
}
class classWithoutToString
{
}
function f_0() {
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        $link = mysqli_init();
        mysqli_close($link);
    }
}
$start = 30;
$dom = new DOMDocument;
var_dump($dom->getElementById('x')?->nodeName);
$fp = fopen("php://memory", "r+");
byRef(C[0]);
$t = new Test;
restore_exception_handler();
$x = (object)['y' => 'foobar'];
var_dump(soundex("Euler"));
$contentfile = tempnam(sys_get_temp_dir(), "ssl");
unlink($contentfile);
$filename = __DIR__ . DIRECTORY_SEPARATOR . 'bug70752.zip';
$inputs = array(
    '<frameset > </frameset>',
    '<html><frameset> </frameset> </html',
);
foreach ($inputs as $input) {

    $t = tidy_parse_string($input);
    $t->cleanRepair();
    var_dump(tidy_get_body($t));
}
$t = tidy_parse_string($input);
var_dump(tidy_get_body($t));
$foo = new Mock_MethodCallbackByReference_7b180d26();
$InvMocker = new PHPUnit_Framework_MockObject_InvocationMocker();
$foo->inv_mocker = $InvMocker;
$now = new DateTime('2018-11-03 11:34:20.781751');
$ago = new DateTime('2018-11-03 11:34:20.000000');
$diff = $ago->diff($now, true);
var_dump($diff->invert, $diff->s, $diff->f);
$i= DateInterval::createFromDateString('2 days');
$dom = new DOMDocument;
$dom->loadXML(<<<XML
<root>
    <test1 xml:id="x"/>
    <test2 attr="x"/>
</root>
XML);
$hash = password_hash(
    "php",
    PASSWORD_ARGON2I,
    ['memory_cost' => 64 << 10, 'time_cost' => 4, 'threads' => 1]
);
ini_set('exif.decode_unicode_motorola', 'UCS-2LE');
$unset_var = 10;
$heredoc = <<<EOT
hello world
EOT;
$index_array = array (1, 2, 3);
$assoc_array = array ('one' => 1, 'two' => 2);
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

      // array data
      'empty array' => array(),
      'int indexed array' => $index_array,
      'associative array' => $assoc_array,
      'nested arrays' => array('foo', $index_array, $assoc_array),

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
$fn = "bug71263.bz2";
$r = fopen($fn, "r");
fclose($r);
$index_array = array (1, 2, 3);
$filename = __DIR__ . '/bug77432.phar';
unlink($filename);
$ch = curl_init();
var_dump(filter_var("?><!@#$%^&*()}{~Qwertyuilfdsasdfgmnbvcxcvbn", FILTER_SANITIZE_ENCODED, FILTER_FLAG_ENCODE_HIGH));
$meta = mysqli_fetch_fields($res);
$meta = $meta[0];
for($i = 495; $i <= 1074; $i++) {
  ini_set('precision', $i);
  echo "$i: len=", strlen(strval(-1 * pow(2, -1074))), "\n";
}
ini_set('precision', $i);
