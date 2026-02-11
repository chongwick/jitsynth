<?php
class Foo {
  public $bar = "bat";
}
class C {
	use T;
	private array $a = [1];
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
    $id_2_date = '2014-09-24';
    try {
        $sert = "file://" . __DIR__ . "/san-cert.pem";
        var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_TIMESTAMP_SIGN));
    } catch (Exception $e) {}
    if (true) {
        var_dump( range(1.0, 7.0, fdiv(0, 0)) );
    }
    try {
        $foo = new Foo;
        $baz = (float)$foo;
        var_dump($baz);
    } catch (Exception $e) {}
    if (true) {
        $infile = __DIR__.'/bug34704私はガラスを食べられます.jpg';
        var_dump(exif_read_data($infile));
    }
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
    $d1 = $prefix . "フォルダ";
    touch("$d1\\test1.txt");
    $dom = new DOMDocument;
    $element = $dom->appendChild($dom->createElement('root'));
    $element->prepend('x', new DOMEntity);
}
$mysqli = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
$res = $mysqli->query('SELECT 42');
$obj = $res->fetch_object();
var_dump(
    $obj,
    $obj->{42}
);
ini_set("soap.wsdl_cache_enabled",0);
$o = new C;
$o->foo();
$client = new SoapClient(__DIR__ . '/bug49278.wsdl', array('location' => "http://".PHP_CLI_SERVER_ADDRESS, 'trace' => 1));
var_dump($client->__getLastRequestHeaders());
$empty_webp = __DIR__ . "/gh13774.webp";
file_put_contents($empty_webp, "");
$heredoc = <<<EOT
Hello world
EOT;
function f_1() {
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
    http_server_kill($pid);
}
ini_set("soap.wsdl_cache_enabled",0);
$sql = "SELECT 11111 as `1`, 22222 as `2`";
$link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
$res = $link->query($sql);
$row = $res->fetch_array();
var_dump($row);
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
var_dump(array_pop($input), $input);
