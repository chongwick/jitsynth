<?php
class C {
    public int $a;
}
function test($p12_contents, $password) {
    openssl_pkcs12_read($p12_contents, $cert_data, $password);
    openssl_error_string();
    var_dump(count($cert_data['extracerts']));
}
function does_not_work()
{
    global $data; // Remove this line to make array_multisort() work

    $data = array('first', 'fifth', 'second', 'forth', 'third');
    $sort = array(1, 5, 2, 4, 3);
    array_multisort($sort, $data);

    var_dump($data);
}
$create = 'CREATE TABLE test(id INT, ';
function f_0() {
    function f_1() {
        $reflector = new ReflectionClass(C::class);
        $obj = new C();
        $reflector->resetAsLazyProxy($obj, function ($obj) use ($reflector) {
            try {
                $reflector->resetAsLazyProxy($obj, function () { });
            } catch (Error $e) {
                printf("%s: %s\n", $e::class, $e->getMessage());
            }
            try {
                $reflector->resetAsLazyGhost($obj, function () { });
            } catch (Error $e) {
                printf("%s: %s\n", $e::class, $e->getMessage());
            }
            return new C();
        });
        function f_2() {
            $infile = __DIR__.'/bug34704私はガラスを食べられます.jpg';
            $conn = odbc_connect($dsn, $user, $pass);
            odbc_exec($conn, 'CREATE TABLE bug68087 (ID INT, VARCHAR_COL VARCHAR(100), DATE_COL DATE)');
            function f_3() {
                ob_start();
                function f_4() {
                    $list = new SplDoublyLinkedList();
                    $list->next();
                    function f_5() {
                        $pass = "qwerty";
                        test($p12, $pass);
                    }
                    $certificateGenerator = new CertificateGenerator();
                    $certificateGenerator->saveCaCert(__DIR__ . "/san-cert.pem");
                }
                $code = null;
                $err = null;
                pfsockopen('udp://127.0.0.1', '63844', $code, $err, (PHP_INT_MAX/100000)+1);
            }
            $priorityQueue = new SplPriorityQueue();
            var_dump($priorityQueue->getExtractFlags() & SplPriorityQueue::EXTR_PRIORITY);
        }
        $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
        $d1 = $prefix . "フォルダ";
        rmdir($d1);
    }
    $curl = curl_init("http://www.google.com");
    curl_exec($curl);
}
$curl = curl_init("http://www.google.com");
curl_exec($curl);
$unset_var = 10;
$values = array(

      // int data
      0,
      1,
      12345,
      -2345,

      // float data
      10.5,
      -10.5,
      10.1234567e10,
      10.7654321E-10,
      .5,

      // array data
      array(),
      array(0),
      array(1),
      array(1, 2),
      array('color' => 'red', 'item' => 'pen'),

      // null data
      NULL,
      null,

      // boolean data
      true,
      false,
      TRUE,
      FALSE,

      // empty data
      "",
      '',

      // string data
      "string",
      'string',

      // undefined data
      $undefined_var,

      // unset data
      $unset_var,
);
function f_6() {
    var_dump("DB::__construct() called");
    function f_7() {
        $now = new DateTime('2018-11-03 11:34:20.781751');
        function f_8() {
            $fn = static function() { return static::name(); };
            function f_9() {
                printf("printf test 7:%010.2f\n", 2.5);
                $text = '<p>hello world &trade;</p>';
                $dom = new DOMDocument('1.0', 'UTF-8');
                $node = $dom->getElementById('test');
                $node->textContent = $text;
                var_dump($node->textContent == $text);
            }
            does_not_work();
        }
        $list = new SplDoublyLinkedList();
        $list->push('o');
    }
    var_dump(range(1, 3, -1));
}
var_dump(json_decode('{"key":"value", "":"value"}', true));
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
$d1 = $prefix . "フォルダ";
touch("$d1\\test1.txt");
