<?php
function f_0() {
    $contentfile = tempnam(sys_get_temp_dir(), "ssl");
    function f_1() {
        var_dump( range(1, 7, fdiv(0, 0)) );
        function test($x) {
            switch ($x->y) {
                default:
                    throw new Exception;
                case 'foobar':
                    return new stdClass();
                    break;
            }
        }
        $x = (object)['y' => 'foobar'];
        var_dump(test($x));
    }
    byVal(C[0]);
    function byVal($arg) {
        var_dump($arg);
    };
    var_dump($row);
    var_dump(json_decode('{"key":"value", "":"value"}', true));
    return str_repeat('a', 1);
}
$browser=get_browser(NULL, true);
putenv('PDOTEST_ATTR='.serialize([PDO::ATTR_PERSISTENT => true]));
$fp = fopen('php://input', 'r+');
fclose($fp);
$fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
$phar = new Phar($fname);
$phar->stopBuffering();
function f_2() {
    $im = ImageCreateTrueColor(10, 10);
    $color = ImageColorAllocateAlpha($im, 0, 0, 0, 1);
    function f_3() {
        $ar1 = array("row1" => 2, "row2" => 1);
        var_dump($ar1);
        var_dump(session_save_path());
    }
    $array = array('f' => "first", "s" => 'second', 1, 2.222);
    $vars = array (
      '\$ -> This represents the dollar sign. hello dollar!!!',
      '\t\r\v The quick brown fo\fx jumped over the lazy dog',
      'This is a text with special chars: \!\@\#\$\%\^\&\*\(\)\\',
      'hello world\\t',
      'This is \ta text in bold letters\r\s\malong with slashes\n : HELLO WORLD\t'
    );
    foreach($vars as $var) {
      echo "-- Iteration $iterator --\n";
      $temp_array = $array;  // assign $array to another temporary $temp_array
    
      /* with default argument */
      // returns element count in the resulting array after arguments are pushed to
      // beginning of the given array
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
    var_dump( array_unshift($temp_array, $var) );
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_NS_SSL_SERVER));
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
    $style = array();
    imagesetstyle($im, $style);
    return false;
}
$empty_string = <<<EOT
EOT;
$filename = __DIR__ . '/私はガラスを食べられます_003.xml';

$xmlstring = '<?xml ve
ion="1.0" encoding="UTF-8"?>
<books><book num="1" idx="2">book1</book></books>';
file_put_contents($file
ame, $xmlstring);

$reader = new XMLReade;
$fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
$phar = new Phar($fname);
$phar->setDefaultStub(str_repeat('a', 401));
putenv('PDOTEST_ATTR='.serialize([PDO::ATTR_PERSISTENT => true]));
