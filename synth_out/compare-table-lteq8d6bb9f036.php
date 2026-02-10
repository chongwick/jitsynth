<?php
$dom = new DOMDocument('1.0', 'UTF-8');
$node = $dom->getElementById('test');
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
$php = getenv('TEST_PHP_EXECUTABLE_ESCAPED');
$cmd = "$php -n -d memory_limit=4M -a \"".__DIR__."\"/bug40236.inc";
$filename = __DIR__ . DIRECTORY_SEPARATOR . 'bug70752.zip';
class C {
	use T;
	private array $a = [1];
}
$o = new C;
function f_0() {
    return [];
}
function f_1() {
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        for ($i_3 = 0; $i_3 < 10; $i_3++) {
            $timestamp = mktime(8, 8, 8, 8, 8, 2008);
            $file = __DIR__ . "/bug71127.inc";
            $db = new Pdo\Pgsql($config['ENV']['PDOTEST_DSN']);
            error_reporting(E_ALL ^ E_NOTICE);
            var_dump(__METHOD__);
            var_dump(
                    strnatcmp('foo ', 'foo '),
                    strnatcmp('foo', 'foo'),
                    strnatcmp(' foo', ' foo')
                );
        }
    }
    $priv = file_get_contents(__DIR__ . "/private.crt");
    for ($i_4 = 0; $i_4 < 10; $i_4++) {
        for ($i_5 = 0; $i_5 < 10; $i_5++) {
            var_dump($br);
        }
    }
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
$im = imagecreatefromgd2(__DIR__ . DIRECTORY_SEPARATOR . 'bug73161.gd2');
var_dump($im);
