<?php
class classWithToString
{
    public function __toString() {
        return "Class A object";
    }
}
class classWithoutToString
{
}
function display($res)
{
	echo implode("\n", array_map(fn($row) => implode("\t", $row), $res))."\n";
}
$info = opcache_get_status()['interned_strings_usage'];
var_dump($info['buffer_size']);
var_dump(error_reporting());
$array1 = array(1, 2);
$data_compare_func = 'compare_function';
$key_compare_func = 'compare_function';
$unset_var = 10;
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
foreach($inputs as $key =>$value) {
    echo "\n--$key--\n";
    try {
        var_dump( array_uintersect_uassoc($array1, $value, $data_compare_func, $key_compare_func) );
    } catch (TypeError $e) {
        echo $e->getMessage(), "\n";
    }
}
var_dump( array_uintersect_uassoc($array1, $value, $data_compare_func, $key_compare_func) );
$res = [];
display($res);
