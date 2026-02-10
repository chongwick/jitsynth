<?php
function f_0() {
    $index_array = array (1, 2, 3);
    function &test() {
        try {
            return $a;
        } finally {
            $a = 2;
        }
    }
    var_dump(test());
    $unset_var = 10;
    class classWithToString
    {
        public function __toString() {
            return "Class A object";
        }
    }
    class classWithoutToString
    {
    }
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
    $message = 'hello';
    $timestamp = mktime(8, 8, 8, 8, 8, 2008);
    $now = new DateTimeImmutable();
    if (true) {
        $PHP_SELF = 1;
        $ch = curl_init("https://localhost/userpwd");
        curl_setopt($ch, CURLOPT_STDERR, fopen("php://stdout", "w"));
    }
    if (!true) {
        (function() {
        	try {
        		foo(); // Error
        	} catch (\Exception $e) {
        		var_dump($e);
        	} finally {
        		print "handle first\n";
        		return "ok";
        	}
        })();
        $db = PDOTest::test_factory(dirname(__FILE__) . '/common.phpt');
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_NUM);
        for ($i_1 = 0; $i_1 < 10; $i_1++) {
            var_dump(sprintf("%%%.2f", 1.23456789e10));
        }
    }
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
    var_dump(http_get_last_response_headers());
    set_error_handler(function() {
        (y);
    });
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        if (true) {
            $date = new DateTime("2011-05-17T22:14:12");
            $date2 = DateTime::createFromFormat("D H i s", $date->format("D"). ' 0 00 00');
            var_dump($date->format("D") == $date2->format("D"));
        }
        if (!true) {
            function test(int $nr) {
                for ($i = $nr; $i <= $nr + 1; $i++)
                    var_dump($i);
            }
            for ($i = $nr; $i <= $nr + 1; $i++)
                    var_dump($i);
            var_dump($i);
        }
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
    zerofill(6, $link, 'INTEGER');
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
    #[\AllowDynamicProperties]
    class C {
        public $b;
        public function __construct() {
            $this->a = new Canary();
        }
    }
    $obj = new C();
    var_dump($obj);
    $array = new ArrayObject();
    $array->offsetSet('key', 'value');
    $originalEnvelopeData = "any string with \x1a is cut at this point.";
    $tmpFileIn = tempnam(sys_get_temp_dir(), 'test');
    var_dump(filesize($tmpFileIn) === strlen($originalEnvelopeData));
    var_dump(sprintf("%X", 12));
    set_error_handler(
                function ($errno, $errstr, $errfile, $errline) {
                    $this->handleError($errno, $errstr, $errfile, $errline);
                }
            );
    class Box {
        public ?Test $value;
    }
    global $box;
    function test($box) {
        var_dump($box->value = new Test);
    }
    $box = new Box();
    test($box);
    spl_autoload_register();
}
$tz_us = new DateTimeZone('America/Los_Angeles');
$msgfmt = new MessageFormatter('en_US', '{0,number,integer}');
$timestamp = "2005-11-08T11:22:07+03:00";
function __construct($audienceMemberId, $timestamp, $smokeStatus) {
    $this->audienceMemberId = $audienceMemberId;
    $this->timestamp = $timestamp;
    $this->smokeStatus = $smokeStatus;
    $this->callInitiator = "IVR";
  }
$this->audienceMemberId = $audienceMemberId;
$r = new ReflectionClass('stdClass');
$rc = new ReflectionClass('Foo');
var_dump($rc->getStaticProperties());
$cfg['names'] = ['cccc', 'aaaa', 'eeee', 'dddd', 'bbbb'];
error_reporting(E_ALL);
function gen() {
    yield 0;
    yield from gen();
}
function bar($gen) {
    yield from $gen;
}
$gen = gen();
$a = bar($gen);
var_dump(getenv("HTTP_X_FORWARDED_FOR"));
$dir = opendir('foo://bar');
$wrapper = stream_get_meta_data($dir)['wrapper_data'];
$im = imagecreate(800, 800);
imageline($im,  50, 250, 550, 250, IMG_COLOR_STYLED);
$strB = 'test & test';
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
$d0 = $prefix . "ソフト";
$d1 =
dir($d1);

;
$heredoc = <<<EOT
hello world
EOT;
$arrays = array (
  array( 0 ),
  range(1, 100 ),
  range('a', 'z', 2 ),
  array("a" => "A", 2 => "B", "C" => 3, 4 => 4, "one" => 1, "" => NULL ),
  array(1, array(1, 2 => 3 ), "one" => 1, "5" => 5 ),
  array(-1, -2, -3, -4, "-0.005" => "neg0.005", 2.0 => "float2", "neg.9" => -.9 ),
  array(1.0005, 2.000000, -3.000000, -4.9999999 ),
  array(true, false),
  array("PHP", "Web2.0", "SOA"),
  array(1, array() ),
  array(1, 2, "" ),
  array(" "),
  array(2147483647, 2147483648, -2147483647, -2147483648 ),
  array(0x7FFFFFFF, -0x80000000, 017777777777, -020000000000 ),
  array(-.6700000E+3, -4.10003E+3, 1e-5, -1E+5, 000002.00 )
);
foreach ($arrays as $sub_array){
  echo "-- Iteration $counter --\n";
  var_dump( end($sub_array) );
  /* ensure that internal pointer is moved to last element */
  var_dump( current($sub_array) );
  $counter++;
}
var_dump( end($sub_array) );
$initialRequest = false;
$rf = new ReflectionFunction('collator_get_sort_key');
var_dump($rf->getNumberOfRequiredParameters());
$conn = pg_connect($conn_str);
$table='test_68638';
$rs = pg_query($conn, "SELECT * FROM $table");
class A {
    public function __call($name, $args) {
        eval('$args = array(); var_dump(debug_backtrace());');
    }
}
$a = new A();
$a->test("test");
