<?php
function test() {
    try {
        return 5;
    } finally {
        try {
            echo 1;
        } finally {
            echo 2;
        }
    }
}
class base {
    private function show() {
        echo "base\n";
    }
    function test() {
        $this->show();
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
class Foo {
  public $bar = "bat";
}
function f_0() {
    $a = test();
    $offset3 = PHP_INT_MAX * 16;
    $reflector = new ReflectionClass(C::class);
    $obj = $reflector->newLazyGhost(function ($obj) {
            var_dump("initializer");
            $obj->__construct();
        });
    $reflector->getMethod('test')->invoke($obj, $obj);
}
$db = PDOTest::factory();
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$cert = file_get_contents(__DIR__ . "/public.crt");
$priv = file_get_contents(__DIR__ . "/private.crt");
$extracert = file_get_contents(__DIR__ . "/cert.crt");
$pass = "qwerty";
openssl_pkcs12_export($cert, $p12, $priv, $pass, array('extracerts' => [$extracert, $extracert]));
$t = new base();
$t->test();
$sql = "SELECT 11111 as `1`, 22222 as `2`";
$link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
$link->real_query($sql);
$ar1 = array(1, 2);
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
foreach($inputs as $key =>$value) {
    echo "\n--$key--\n";
    try {
        var_dump( array_multisort($ar1, $value) );
    } catch (\ValueError | \TypeError $e) {
        echo $e->getMessage() . "\n";
    }
}
var_dump( array_multisort($ar1, $value) );
$r = new ResourceBundle( 'en_US', BUNDLE );
print_r( $r['testvector'] );
$bert = "file://" . __DIR__ . "/bug41033.pem";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_NS_SSL_SERVER, array($cpca)));
var_dump( range('A', 'H', 10.0**400) );
$curl = curl_init("http://www.google.com");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$now = new DateTimeImmutable();
$date = (new ReflectionClass(DateTime::class))->newInstanceWithoutConstructor();
$dateperiod = (new ReflectionClass(DatePeriod::class))->newInstanceWithoutConstructor();
$dateperiod->__unserialize(['start' => $now, 'end' => $now, 'current' => $date]);
$im = imagecreate(800, 800);
imageline($im, 650, 150, 650, 650, IMG_COLOR_STYLED);
undefined_function();
$str = "repeater id='loopt' dataSrc=subject columns=2";
preg_match_all("/(['\"])((.*(\\\\\\1)*)*)\\1/sU",$str,$str_instead);
$sert = "file://" . __DIR__ . "/san-cert.pem";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_OCSP_HELPER, array($cpca), $utfl));
$ar1 = array(1, 2);
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
foreach($inputs as $key =>$value) {
    echo "\n--$key--\n";
    try {
        var_dump( array_multisort($ar1, $value) );
    } catch (\ValueError | \TypeError $e) {
        echo $e->getMessage() . "\n";
    }
}
var_dump( array_multisort($ar1, $value) );
global $list;
$list->pop();
var_dump($sends1);
$link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
$link->close();
$foo = new Foo;
var_dump($foo);
