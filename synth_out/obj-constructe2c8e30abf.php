<?php
class classA
{
  public function __toString() {
    return "key";
  }
}
class Canary {
    public function __construct(public mixed $value) {}
    public function __destruct() {
        var_dump(__METHOD__);
    }
}
function f($canary) {
    var_dump(yield from g());
}
$dsn = 'sqlite:./bug64705NonExistingDir/bug64705NonExistingDb';
function f_0() {
    $argv = null;
}
function f_1() {
    $column_def = array('col1 CHAR(1)', 'col2 CHAR(2)','INDEX idx_col1_col2(col1, col2)');
}
var_dump(filter_var("<data&sons>", FILTER_SANITIZE_ENCODED, FILTER_FLAG_ENCODE_HIGH));
$str = <<<EOD
us
ing heredoc string
EOD;
$s = "1234567890a";
var_dump($s["10"], isset($s["10"]));
$reflector = new ReflectionClass(C::class);
for ($i = 0; $i < 2; $i++) {
    $obj = $reflector->newLazyGhost(function ($obj) use ($i) {
        if ($i === 1) {
            throw new \Exception();
        }
    });
    $obj->c = 1;
}
$obj = $reflector->newLazyGhost(function ($obj) use ($i) {
        if ($i === 1) {
            throw new \Exception();
        }
    });
$search = array ('zero', 'key' => 'val', 'two', 10 => 'value');
$unset_var = 10;
$heredoc = <<<EOT
key
EOT;
$fp = fopen(__FILE__, "r");
$inputs = array(

       // int data
/*1*/  0,
       1,
       12345,
       -2345,

       // null data
/*10*/ NULL,
       null,

       // boolean data
/*12*/ true,
       false,
       TRUE,
       FALSE,

       // empty data
/*16*/ "",
       '',
       array(),

       // string data
/*19*/ "key",
       'key',
       $heredoc,

       // object data
/*22*/ new classA(),

       // undefined data
/*23*/ @$undefined_var,

       // unset data
/*24*/ @$unset_var,

       // resource variable
/*25*/ $fp
);
foreach($inputs as $input) {
  echo "\n-- Iteration $iterator --\n";
  try {
      var_dump( array_key_exists($input, $search) );
  } catch (TypeError $exception) {
      echo $exception->getMessage() . "\n";
  }
  $iterator++;
}
var_dump( array_key_exists($input, $search) );
$canary = new Canary(null);
$iterable = f($canary);
session_set_save_handler(new \SessionHandler(), true);
$reflector = new ReflectionClass(C::class);
$array = new ArrayObject();
$array->offsetSet('key', 'value');
