<?php
class TrampolineTest {
    public function __call(string $name, array $arguments) {
        echo 'Trampoline for ', $name, PHP_EOL;
    }
}
#[\AllowDynamicProperties]
class C {
    public $b;
    public function __construct() {
        $this->a = new Canary();
    }
}
function crash()
{
    $notDefined[$i] = 'test';
}
function f_0() {
    $sql = "SELECT 11111 as `1`, 22222 as `2`";
    $link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
    $res = $link->query($sql);
    $row = $res->fetch_array();
    var_dump($row);
    $mysqli = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
    $o = new TrampolineTest();
    $callback2 = [$o, 'trampoline2'];
    var_dump(spl_autoload_unregister($callback2));
    return 1;
}
$GLOBALS['b'] = 2;
$org_b = $GLOBALS['b'];
$array = array("test" => 1);
$document = new \DOMDocument();
$h1 = $document->getElementsByTagName('h1');
var_dump($h1->length);
$obj = new C();
var_dump($obj);
crash();
$invalid_files = array(
  0,
  1234,
  -2.34555,
  TRUE,
  FALSE,
  " ",
);
foreach( $invalid_files as $invalid_file ) {
  var_dump( is_executable($invalid_file) );
  clearstatcache();
}
var_dump( is_executable($invalid_file) );
