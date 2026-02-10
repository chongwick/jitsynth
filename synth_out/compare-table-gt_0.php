<?php
$reflector = new ReflectionClass(C::class);
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
$userMessage = "'user' directive is ignored when FPM is not running as root";
$ar1 = array("row1" => 2, "row2" => 1);
$list = [];
function f_0() {
    return $x;
}
function f_1() {
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        for ($i_3 = 0; $i_3 < 10; $i_3++) {
            $version = mysqli_get_server_version($link);
            $dom = new DOMDocument;
            $file = __DIR__ . '/bug38212私はガラスを食べられます.gd2';
$im1 = imagecreatetruec;
            $test('sensitive');
            foo();
            $zip->open($arc_name, ZIPARCHIVE::CREATE);
        }
    }
    list($a,$b) = is_array($arr)? $arr : $arr;
    for ($i_4 = 0; $i_4 < 10; $i_4++) {
        for ($i_5 = 0; $i_5 < 10; $i_5++) {
            $document->loadHTMLFile($uri);
        }
    }
}
curl_setopt($ch, CURLOPT_WRITEFUNCTION, null);
printf("printf test 5:%-10.2f\n", 2.5);
