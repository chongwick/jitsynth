<?php
#[AllowDynamicProperties]
class C {
    public $a = 1;
}
function test(string $input) {
    var_dump(filter_var($input, FILTER_VALIDATE_URL));
}
$headers = ['Host: okey.com'];
$now = new DateTime('2018-11-03 11:34:20.781751');
$db = MySQLPDOTest::factory();
$db = new Pdo\Pgsql($config['ENV']['PDOTEST_DSN']);
$reflector = new ReflectionClass(C::class);
$obj = $reflector->newLazyProxy(function () {
    throw new \Exception('initializer');
});
$r = new ResourceBundle( 'en_US', BUNDLE );
printf( "teststring: %s\n", $r['teststring'] );
var_dump(gc_collect_cycles());
var_dump("DB::__construct() called");
var_dump(json_decode('[]', false, 0x100000000));
function f_0() {
    $c = new C();
    $propReflector = new ReflectionProperty($c, 'dyn');
    try {
        set_error_handler('test_error_handler');
    } catch (Exception $e) {}
    if (true) {
        $simpleInterval = new DateInterval("P2D");
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
    }
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug54028_2" . DIRECTORY_SEPARATOR;
    $dirs = array("a", "ソ", "ゾ", "şŞıİğĞ", "多国語", "王", "汚れて掘る");
    
    mkdir($prefix);
    foreach ($
    mkdir($prefix . $d);
    }
    
    $old_cwd = getcwd();
    forea
    $now = $prefix . $d;
        var_dump(chdir($now));
        var_dump($dn = realpath("."));
        var_dump($d == get_basename_with_cp($dn, 65001, false));
    }
    chdir($old_cwd);
    
    foreach (
    rmdir($prefix . $d);
    }
    rmdir($prefix);
    
    ?>
    ($prefix);
    
    ?>;
    function f_1() {
        $date2 = DateTime::createFromFormat("D H i s", "Tuesday 0 00 00");
        try {
            $key = str_repeat('abc', random_int(3, 3));
            var_dump(array_any([$key => 1], static fn () => true));
        } catch (Exception $e) {}
        if (true) {
            $idx = 0;
            var_dump(scandir(''));
        }
        $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
        $phar = new Phar($fname);
        $phar->setDefaultStub('my/custom/thingy.php');
        function f_2() {
            $reflection = new ReflectionClass('\DateTime');
            $mutable = $reflection->newInstanceWithoutConstructor();
            $immutable = \DateTimeImmutable::createFromMutable($mutable);
            try {
                $list = new SplDoublyLinkedList;
                var_dump($list->serialize());
            } catch (Exception $e) {}
            if (true) {
                $iterator = 1;
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
                var_dump($body->lookupNamespaceURI(""));
            }
            ob_end_flush();
            function f_3() {
                $depth0 = "depth02";
                try {
                    $filename =  __DIR__ . DIRECTORY_SEPARATOR . 'bug70752.txt';
                    var_dump(file_exists($filename));
                } catch (Exception $e) {}
                if (true) {
                    $date = (new ReflectionClass(DateTime::class))->newInstanceWithoutConstructor();
                    var_dump(soundex("Gauss")       == soundex("Ghosh"));
                }
                $msgfmt = new MessageFormatter('en_US', '{0,number,integer}');
                $msgfmt->parse('abc');
            }
            $a=glob("./*.jpeg");
            var_dump($a);
        }
        printf("[009] Cannot run SELECT, [%d] %s\n",
                        mysqli_errno($link), mysqli_error($link));
    }
    $ch = curl_init("https://localhost/userpwd");
    $response = curl_exec($ch);
    var_dump(str_contains($response, "authorization"));
}
test("http://test[@2001:db8:3333:4444:5555:6666:1.2.3.4]");
