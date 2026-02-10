<?php
$cert = "file://" . __DIR__ . "/cert.crt";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_CRL_SIGN, array($cpca)));
$compression = [
    'gz' => ['zlib.deflate', 'gzinflate'],
    'bz2' => ['bzip2.compress', 'bzdecompress']
];
foreach ($compression as $ext => [$filter, $function]) {
    $stream = fopen(__DIR__ . "/75776.$ext", 'w');
    stream_filter_append($stream, $filter);
    fwrite($stream,"sdfgdfg");
    fflush($stream);
    fclose($stream);

    $compressed = file_get_contents(__DIR__ . "/75776.$ext");
    var_dump($function($compressed));
}
$stream = fopen(__DIR__ . "/75776.$ext", 'w');
fwrite($stream,"sdfgdfg");
var_dump(array_map(assert(...), [true, true, false]));
ini_set("session.save_handler","files");
function test($foo) {
    var_dump(0);
    var_dump($foo[0]);
}
var_dump($foo[0]);
$ch = curl_init();
curl_exec($ch);
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
$d0 = $prefix . "ソフト";
$d1 =
ith_cp($d0, 65001);
get_basename_;
putenv('REDIR_TEST_DIR='.__DIR__ . '/../../pdo/tests/');
$fp = fopen (__FILE__, "r");
fclose($fp);
$db = getDbConnection();
$sql = '
    SET NOCOUNT ON
    SELECT 0 AS [result]
';
$stmt = $db->query($sql);
$stmt->closeCursor();
$f = __DIR__."/data/test.txt.gz";
$h = gzopen($f, 'r');
var_dump(gzread($h, 8));
function do_throw() { throw new Exception; }
$f = function () {};
$f->__invoke(do_throw());
printf("%0\$s", 1);
$tester = new FPM\Tester($cfg);
$tester->start();
class foo
{
// no members
}
abstract class abstractClass
{
  abstract protected function getClassName();
  public function printClassName () {
    echo $this->getClassName() . "\n";
  }
}
class concreteClass extends abstractClass
{
  protected function getClassName() {
    return "concreteClass";
  }
}
interface IValue
{
   public function setVal ($name, $val);
   public function dumpVal ();
}
class Value implements IValue
{
  private $vars = array ();

  public function setVal ( $name, $val ) {
    $this->vars[$name] = $val;
  }

  public function dumpVal () {
    var_dump ( $vars );
  }
}
class myClass
{
  var       $foo_object;
  public    $public_var;
  public    $public_var1;
  private   $private_var;
  protected $protected_var;

  function __construct ( ) {
    $this->foo_object = new foo();
    $this->public_var = 10;
    $this->public_var1 = new foo();
    $this->private_var = new foo();
    $this->protected_var = new foo();
  }
}
$myClass_object = new myClass();
$foo_object = new foo();
$Value_object = new Value();
$concreteClass_object = new concreteClass();
$valid_objects = array(
  new stdclass,
  new foo,
  new concreteClass,
  new Value,
  new myClass,
  $myClass_object,
  $myClass_object->foo_object,
  $myClass_object->public_var1,
  $foo_object,
  $Value_object,
  $concreteClass_object
);
foreach ($valid_objects as $object ) {
  echo "-- Iteration $loop_counter --\n"; $loop_counter++;
  var_dump( is_object($object) );
}
var_dump( is_object($object) );
