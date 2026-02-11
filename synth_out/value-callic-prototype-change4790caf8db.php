<?php
function test($x) {
    switch ($x->y) {
        default:
            throw new Exception;
        case 'foobar':
            return new stdClass();
            break;
    }
}
class D {
    public string $prop;
}
class base {
    private function show() {
        echo "base\n";
    }
    function test() {
        $this->show();
    }
}
function f_0() {
    function f_1() {
        $x = new SoapClient('http://i_dont_exist.com/some.wsdl');
        $x = (object)['y' => 'foobar'];
        var_dump(test($x));
    }
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        $empty_webp = __DIR__ . "/gh13774.webp";
        var_dump(soundex("Knuth")       == soundex("Kant"));
    }
    $arrays = array(
      array(),
      array(NULL),
      array(null),
      array(true),
      array(""),
      array(''),
      array(array(), array()),
      array(array(1, 2), array('a', 'b')),
      array(1 => 'One'),
      array("test" => "is_array"),
      array(0),
      array(-1),
      array(10.5, 5.6),
      array("string", "test"),
      array('string', 'test')
    );
    for ($i_3 = 0; $i_3 < 10; $i_3++) {
        $priv = file_get_contents(__DIR__ . "/private.crt");
        mysqli_fetch_field($res);
    }
}
$d = new D();
var_dump($d);
function f_4() {
    $t = new base();
    function f_5() {
        $x = fprintf($fp, "fprintf test 1:%.5s", "abcdefghij");
        $trace_file = '/tmp/mysqli_debug_phpt.trace';
        unlink($trace_file);
    }
    for ($i_6 = 0; $i_6 < 10; $i_6++) {
        var_dump(soundex("Hilbert")     == soundex("Heilbronn"));
    }
    $ch = curl_init("https://localhost/userpwd");
    for ($i_7 = 0; $i_7 < 10; $i_7++) {
        $unset_var = 10;
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
        
               // array with unset variable
        /*10*/ array( @$unset_var => "hello"),
        
               // array with mixed keys
        /*11*/ array('hello' => 1,  "fruit" => 2.2,
                     133 => "int",
                     @$unset_var => "unset", $heredoc => "heredoc")
        );
        $arr1 = array(1, "float", "f4", "hello", 2.2, 'color', "string", "pen\n", 11);
        foreach($arrays as $arr2) {
          echo "-- Iterator $iterator --\n";
        
          // Calling array_intersect() with default arguments
          var_dump( array_intersect($arr1, $arr2) );
        
          // Calling array_intersect() with more arguments.
          // additional argument passed is the same as $arr1 argument
          var_dump( array_intersect($arr1, $arr2, $arr1) );
          $iterator++;
        }
        var_dump( array_intersect($arr1, $arr2, $arr1) );
    }
}
$fd = fopen('php://memory','w');
fwrite($fd, "foo");
function f_8() {
    $php = getenv('TEST_PHP_EXECUTABLE_ESCAPED');
    function f_9() {
        $dom = new DOMDocument;
        $tag = $dom->appendChild($dom->createElement("style"));
        $html = simplexml_import_dom($tag);
        $array = new ArrayObject();
        var_dump($array->offsetExists('key'));
    }
    for ($i_10 = 0; $i_10 < 10; $i_10++) {
        $p = '00f8000ae45b2dacb47dd977d58b719d097bdf07cb2c17660ad898518c08' .
            '1a61659a16daadfaa406a0a994c743df5eda07e36bd0adcad921b77432ff' .
            '24ccc31e782d647e66768122b578857e9293df78387dc8b44af2a4a3f305' .
            '1f236b1000a3e31da489c6681b0031f7ec37c2e1091bdb698e7660f135b6' .
            '996def90090303b7ad';
        $q = '009b3734fc9f7a4a9d6437ec314e0a78c2889af64b';
        $g = '00b320300a0bc55b8f0ec6edc218e2185250f38fbb8291db8a89227f6e41' .
            '00d47d6ccb9c7d42fc43280ecc2ed386e81ff65bc5d6a2ae78db7372f5dc' .
            'f780f4558e7ed3dd0c96a1b40727ac56c5165aed700a3b63997893a1fb21' .
            '4e882221f0dd9604820dc34e2725dd6901c93e0ca56f6d76d495c332edc5' .
            'b81747c4c447a941f3';
        var_dump(openssl_pkey_new(array('dsa' => array('p' => $p, 'q' => $q, 'g' => $g))));
    }
    $header = <<<HEADER
    extern int *(*bug79177_cb)(void);
    void bug79177(void);
    HEADER;
    $ffi = FFI::cdef($header);
    $ffi->bug79177_cb = function() {
        throw new \RuntimeException('Not allowed');
    };
    for ($i_11 = 0; $i_11 < 10; $i_11++) {
        $db = PDOTest::test_factory(dirname(__FILE__) . '/common.phpt');
        foreach ([false, true] as $emulate) {
            $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, $emulate);
        
            try {
                $stmt = $db->prepare('select ?- lseg \'((-1,0),(1,0))\'');
                $stmt->execute();
            } catch (PDOException $e) {
                var_dump('ERR');
            }
        
            $stmt = $db->prepare('select ??- lseg \'((-1,0),(1,0))\'');
            $stmt->execute();
        
            var_dump($stmt->fetch());
        }
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, $emulate);
    }
}
stream_wrapper_register('dummy', DummyWrapper::class);
