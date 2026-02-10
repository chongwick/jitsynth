<?php
class SomeClass2 implements JsonSerializable {
    public function jsonSerialize(): mixed {
        return [(array)$this];
    }
}
$class = new SomeClass2;
$reflection = new ReflectionClass('\DateTime');
function f_0() {
    try {
        $db = PDOTest::test_factory(dirname(__FILE__) . '/common.phpt');
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_NUM);
    } catch (Exception $e) {}
    if (true) {
        public function __construct($callback) {
                $this->callback = $callback;
            }
        $this->callback = $callback;
        public function invoke($invocation) {
                return call_user_func_array($this->callback, $invocation->parameters);
            }
        return call_user_func_array($this->callback, $invocation->parameters);
    }
}
function f_1() {
    return serialize($this->data);
}
class A {
    private static $x = 1;
}
class B extends A {
    function bar() {
        var_dump(self::$x);
    }
}
$a = new B;
class di extends DateInterval {
    public $unit = 1;
}
$I = new di('P10D');
$id_1_date = '2014-09-23';
$reflection = new ReflectionClass('\DateTime');
$style = array();
$i = 0;
$style[$i++] = IMG_COLOR_TRANSPARENT;
function f_2() {
    for ($i_3 = 0; $i_3 < 10; $i_3++) {
        $depth1 = "depth1";
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
        $unset_var = 10;
        $fp = fopen(__FILE__, "r");
        $heredoc = <<<EOT
        Hello world
        EOT;
        $arrays = array (
        
               // empty array
        /*1*/  array(),
        
               // arrays with integer keys
               array(0 => "0"),
               array(1 => "1"),
               array(1 => "1", 2 => "2", 3 => "3", 4 => "4"),
        
               // arrays with string keys
        /*7*/  array('\tHello' => 111, 're\td' => "color",
                     '\v\fworld' => 2.2, 'pen\n' => 33),
               array("\tHello" => 111, "re\td" => "color",
                     "\v\fworld" => 2.2, "pen\n" => 33),
               array("hello", $heredoc => "string"), // heredoc
        
               // array with object, unset variable and resource variable
               array(@$unset_var => "hello", $fp => 'resource'),
        
               // array with mixed keys
        /*11*/ array('hello' => 1, "fruit" => 2.2,
                     $fp => 'resource', 133 => "int",
                     @$unset_var => "unset", $heredoc => "heredoc")
        );
        foreach($arrays as $array) {
          echo "-- Iteration $iterator --\n";
        
          /* with default argument */
          // returns element count in the resulting array after arguments are pushed to
          // beginning of the given array
          $temp_array = $array;
          var_dump( array_unshift($temp_array, $var) );
        
          // dump the resulting array
          var_dump($temp_array);
        
          /* with optional arguments */
          // returns element count in the resulting array after arguments are pushed to
          // beginning of the given array
          $temp_array = $array;
          var_dump( array_unshift($temp_array, $var, "hello", 'world') );
        
          // dump the resulting array
          var_dump($temp_array);
          $iterator++;
        }
        $temp_array = $array;
        for ($i_4 = 0; $i_4 < 10; $i_4++) {
            $cfg['names'] = ['cccc', 'aaaa', 'eeee', 'dddd', 'bbbb'];
            $headers = ['Host: okey.com'];
            for ($i_5 = 0; $i_5 < 10; $i_5++) {
                $reflector = new ReflectionClass(C::class);
                var_dump(getopt("abcd"));
            }
            for ($i_6 = 0; $i_6 < 10; $i_6++) {
                $pkcsfile = __DIR__ . "/openssl_pkcs7_verify__pkcsfile.tmp";
                try {
                    $ch = curl_init();
                    var_dump(curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false));
                } catch (Exception $e) {}
                if (true) {
                }
            }
        }
    }
}
$cert = file_get_contents(__DIR__ . "/public.crt");
$priv = file_get_contents(__DIR__ . "/private.crt");
$extracert = file_get_contents(__DIR__ . "/cert.crt");
$pass = "qwerty";
openssl_pkcs12_export($cert, $p12, $priv, $pass, array('extracerts' => [$extracert, $extracert]));
function setStyleAndThickness($im, $color, $thickness)
{
    $style = array();
    $i = 0;
    while ($i < 16 * $thickness) {
        $style[$i++] = $color;
    }
    while ($i < 20 * $thickness) {
        $style[$i++] = IMG_COLOR_TRANSPARENT;
    }
    while ($i < 28 * $thickness) {
        $style[$i++] = $color;
    }
    while ($i < 32 * $thickness) {
        $style[$i++] = IMG_COLOR_TRANSPARENT;
    }
    imagesetstyle($im, $style);
    imagesetthickness($im, $thickness);
}
$im = imagecreate(800, 800);
$black = imagecolorallocate($im, 0, 0, 0);
setStyleAndThickness($im, $black, 6);
