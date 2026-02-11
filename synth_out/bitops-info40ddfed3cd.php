<?php
class ErrorHandler {
    private $private = 'THIS IS PRIVATE'."\n";

    function __construct() {
        set_error_handler(
            function ($errno, $errstr, $errfile, $errline) {
                $this->handleError($errno, $errstr, $errfile, $errline);
            }
        );
    }

    private function handleError($errno, $errstr, $errfile, $errline, $errmodule = null) {
        echo __METHOD__. " dealing with error $errstr\n";

        // This attribute is no longer accessible in this object.  Same for other
        // objects and their private attributes once we reach in this state.
        echo $this->private;
    }
}
function something() {
        foreach(array(1, 2) as $value) {
                for($i = 0; $i < 1; $i++) {
                        continue 2;
                }
                return;
        }
}
class A {
    private static $x = 1;
}
class C extends A {
    function bar() {
        var_dump(A::$x);
    }
}
function test(string $input) {
    var_dump(filter_var($input, FILTER_VALIDATE_URL));
}
class string1 {
  public function __toString() {
    return "Object";
  }
}
function f_0() {
    return "Object";
}
function f_1() {
    return 0;
}
function f_2() {
    return true;
}
function f_3() {
    $res = [];
    $a = array(1,2,3);
    $s1 = "some string";
    $c = $a + $s1;
    $errorHandler = new ErrorHandler();
    something();
    $halves[0] = $halves[1] = 0;
    $halves[(mt_rand(0, $max - 1) >> 1) & 1]++;
    $total = 10000;
    $halves[0] = $halves[1] = 0;
    $halves[(int) (mt_rand(0, $max - 1) / ($max / 2))]++;
    printf("%.1f%% vs. %.1f%%\n", 100. * $halves[0] / $total, 100. * $halves[1] / $total);
    $empty_webp = __DIR__ . "/gh13774.webp";
    $im = imagecreatefromwebp($empty_webp);
    var_dump($im);
    $input = fopen(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370.tar', 'r');
    fclose($input);
    $doc = new \DOMDocument();
    $target = $doc->documentElement->lastChild;
    $target->before('bar', $doc->documentElement->firstChild, 'baz');
    $link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
    $link->close();
    $b = new C;
    $b->bar();
    $xml = '
    <data id="1">
        <key>value</key>
    </data>
    ';
    $obj = simplexml_load_string($xml);
    print_r(get_object_vars($obj));
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_SIGN));
    $ao = new ArrayObject(new C);
    $ai = $ao->getIterator();
    $ai->seek(0);
    test("http://te[st@2001:db8:3333:4444:5555:6666:1.2.3.4");
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_SIGN, array($cpca), $utfl));
    pcntl_sigwaitinfo($a,$a);
    $doc = new \DOMDocument();
    $target = $doc->documentElement->lastChild;
    var_dump($target);
    $reflector = new ReflectionClass(C::class);
    $obj = new C();
    $reflector->initializeLazyObject($obj);
    $twoseventy = M_PI * 1.5;
    var_dump(sin($twoseventy));
    $input = fopen(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370.tar', 'r');
    fclose($input);
    $cert = "file://" . __DIR__ . "/cert.crt";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_ANY, array($cpca), $utfl));
    var_dump("DB::__construct() called");
    $db = MySQLPDOTest::factory();
    $db->exec('CREATE TABLE test_33689 (bar INT NOT NULL)');
    $filename = "bug51997.bz2";
    $bz = bzopen($filename, "r");
    fseek($bz, 0, SEEK_CUR);
    $priorityQueue = new SplPriorityQueue();
    print_r($priorityQueue->top());
    var_dump ( rtrim("rtrim test0123456789", "0..9") );
    $obj = new string1;
    var_dump( rtrim($obj, "tc") );
    $reflector = new ReflectionClass(C::class);
    $obj = new C();
    $reflector->initializeLazyObject($obj);
    var_dump(ini_get('mysqlnd.debug'));
    var_dump( range(1.0, 7.0, 0.0) );
    $obj = new C();
    var_dump($obj->a);
    ini_set('mysqlnd.fetch_data_copy', false);
    $oIntlDateFormatter = new IntlDateFormatter("en_GB");
    $oIntlDateFormatter->setPattern('VV');
    $list = new SplDoublyLinkedList();
    $list->push('f');
}
for ($i_4 = 0; $i_4 < 10; $i_4++) {
    $a=glob("./*.jpeg");
    var_dump($a);
}
