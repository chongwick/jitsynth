<?php
class Test {
    public function __debugInfo() {
        return [$this];
    }
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
$test_array = array(1, array(1 => "one", "two" => 2, "" => "f") );
function f_0() {
    function f_1() {
        $plain = "The quick brown fox jumps over the lazy dog.";
        $fn = "bug71263.bz2";
        $compressed = (string) bzcompress($plain);
        $compressed = substr($compressed, 0, strlen($compressed) - 20);
        file_put_contents($fn, $compressed);
        function f_2() {
            $inner = 'r:2;';
            $exploit = 'a:2:{i:0;C:3:"obj":'.strlen($inner).':{'.$inner.'}i:1;C:3:"obj":'.strlen($inner).':{'.$inner.'}}';
            printf("printf test 7:%010.2f\n", 2.5);
            function f_3() {
                var_dump(new Test);
                function f_4() {
                    $r = new ResourceBundle( 'en_US', BUNDLE );
                    $r2 = $r['testarray'];
                    printf( "testarray: %s\n", $r2[2] );
                    function f_5() {
                        $im = imagecreate(800, 800);
                        imageline($im, 700, 600, 200, 100, IMG_COLOR_STYLED);
                    }
                    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
                    $prefix . "フォルダ";
                    
                    mkdir($prefi
                    mdir($prefi;
                }
                $xmlString = "<root><a><b>1</b><b>2</b><b>3</b></a></root>";
                $xml = simplexml_load_string($xmlString);
                $nodes = $xml->a->b;
                test($nodes, "var_dump", fn ($n) => var_dump($n));
            }
            sprintf('%$s, %2$s %1$s', "a", "b");
        }
        $im = ImageCreateTrueColor(10, 10);
        imagealphablending($im, true);
    }
    printf("[003] No result, [%d] %s\n", $link->errno, $link->error);
}
$inputs = array(
      'Century number' => "%C",
      'Month Date Year' => "%D",
      'Year with century' => "%G",
      'Year without century' => "%g",
);
foreach($inputs as $key =>$value) {
      echo "\n--$key--\n";
      var_dump( strftime($value) );
      var_dump( strftime($value, $timestamp) );
}
var_dump( strftime($value) );
$sixty = M_PI / 3.0;
function f_6() {
    var_dump(spl_autoload_functions());
    function f_7() {
        $InvMocker = new PHPUnit_Framework_MockObject_InvocationMocker();
        function f_8() {
            $conn = odbc_connect($dsn, $user, $pass);
            $res = odbc_exec($conn, "SELECT * FROM bug80147");
            function f_9() {
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
                ob_end_flush();
            }
            var_dump($sends1);
        }
        $list = new SplDoublyLinkedList();
        $list->push('f');
    }
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $phar = new Phar($fname);
    $phar->stopBuffering();
}
$dom = Dom\HTMLDocument::createEmpty();
dumpNodeList($dom->getElementsByTagName("HTML"));
$offsets = array(20, 21, 22, 53, 54);
$string_mb = base64_decode('5pel5pys6Kqe44OG44Kt44K544OI44Gn44GZ44CCMDEyMzTvvJXvvJbvvJfvvJjvvJnjgII=');
$needle = base64_decode('44CC');
foreach($offsets as $i) {
    echo "\n-- Offset is $i --\n";
    echo "--Multibyte String:--\n";
    try {
        var_dump( mb_strpos($string_mb, $needle, $i, 'UTF-8') );
    } catch (\ValueError $e) {
        echo $e->getMessage() . \PHP_EOL;
    }
    echo"--ASCII String:--\n";
    try {
        var_dump(mb_strpos('This is na English ta', 'a', $i));
    } catch (\ValueError $e) {
        echo $e->getMessage() . \PHP_EOL;
    }
}
var_dump( mb_strpos($string_mb, $needle, $i, 'UTF-8') );
