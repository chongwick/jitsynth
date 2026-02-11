<?php
class A {
    private static $x = 1;
}
class B extends A {
    function bar() {
        var_dump(self::$x);
    }
}
class TrampolineTest {
    public function __call(string $name, array $arguments) {
        echo 'Trampoline for ', $name, PHP_EOL;
    }
}
function f_0() {
    $references = array();
    $idx = 0;
    $references[$idx++]['id_copy']	= $row['id'];
    try {
        $document = new \DOMDocument();
        var_dump($document->saveHTML());
    } catch (Exception $e) {}
    if (true) {
        $arrays = array (
        /*1*/  array(1, 2), // array with default keys and numeric values
               array(1.1, 2.2), // array with default keys & float values
               array( array(2), array(1)), // sub arrays
               array(false,true), // array with default keys and boolean values
               array(), // empty array
               array(NULL), // array with NULL
               array("a","aaaa","b","bbbb","c","ccccc"),
        
               // associative arrays
        /*8*/  array(1 => "one", 2 => "two", 3 => "three"),  // explicit numeric keys, string values
               array("one" => 1, "two" => 2, "three" => 3 ),  // string keys & numeric values
               array( 1 => 10, 2 => 20, 4 => 40, 3 => 30),  // explicit numeric keys and numeric values
               array( "one" => "ten", "two" => "twenty", "three" => "thirty"),  // string key/value
               array("one" => 1, 2 => "two", 4 => "four"),  //mixed
        
               // associative array, containing null/empty/boolean values as key/value
        /*13*/ array(NULL => "NULL", null => "null", "NULL" => NULL, "null" => null),
               array(true => "true", false => "false", "false" => false, "true" => true),
               array("" => "emptyd", '' => 'emptys', "emptyd" => "", 'emptys' => ''),
               array(1 => '', 2 => "", 3 => NULL, 4 => null, 5 => false, 6 => true),
               array('' => 1, "" => 2, NULL => 3, null => 4, false => 5, true => 6),
        
               // array with repetitive keys
        /*18*/ array("One" => 1, "two" => 2, "One" => 10, "two" => 20, "three" => 3)
        );
        $a = new B;
        $a->bar();
    }
    printf("printf test 23:%016X\n", 170);
}
$bert = "file://" . __DIR__ . "/bug41033.pem";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_ENCRYPT, array($cpca), $utfl));
$o = new TrampolineTest();
$callback1 = [$o, 'trampoline1'];
var_dump(spl_autoload_unregister($callback1));
var_dump(soundex("Euler"));
var_dump($row);
var_dump(mhash(133, 1086849124, 133));
set_error_handler(function (int $errno, string $errstr, ?string $errfile = null, ?int $errline = null) {
    throw new \ErrorException($errstr, 0, $errno, $errfile, $errline);
});
