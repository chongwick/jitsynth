<?php
class testObject extends ArrayObject {
    protected $test;

    public function getTest() {
        return $this->test;
    }

    public function setTest($test) {
        $this->test = $test;
    }
}
$obj = new testObject();
function f_0() {
    $i = 1;
    return $i;
}
function f_1() {
    $epid = pcntl_waitpid(-1,$status);
    function f_2() {
        return 1;
    }
    function f_3() {
        $sert = "file://" . __DIR__ . "/san-cert.pem";
        $cpca = __DIR__ . "/san-cert.pem";
        $utfl = __DIR__ . "/sni_server_uk.pem";
        var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_SIGN, array($cpca), $utfl));
        $client = new SoapClient(__DIR__ . '/bug49278.wsdl', array('location' => "http://".PHP_CLI_SERVER_ADDRESS, 'trace' => 1));
        var_dump($client->__getLastRequestHeaders());
        try {
            $count = 1;
            $count ++;
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
            foreach($arrays as $array) {
              echo "-- Iteration $iterator --\n";
              // with default argument
              echo "- with default argument -\n";
              var_dump( array_reverse($array) );
              // with all possible arguments
              echo "- with \$preserve keys = true -\n";
              var_dump( array_reverse($array, true) );
              echo "- with \$preserve_keys = false -\n";
              var_dump( array_reverse($array, false) );
              $iterator++;
            }
            var_dump( array_reverse($array, true) );
        }
        $file = __DIR__ . '/bug38212私はガラスを食べられます.gd2';
        $im1 = imagecreatetruec
        lor(10,100);
        imagefill($im1, 0,0, 0x
        trycatch_dump(
            fn(;
        $dom = new DOMDocument('1.0', 'UTF-8');
        $node = $dom->getElementById('test');
        var_dump($dom->saveHTML($node));
        php_cli_server_start('foo bar');
        function f_4() {
            $a[10] = "42";
            var_dump($a["010"], isset($a["010"]));
            try {
                $iterator = 1;
                $iterator++;
            } catch (Exception $e) {}
            if (true) {
                printf("[009] Cannot run SELECT, [%d] %s\n",
                                mysqli_errno($link), mysqli_error($link));
            }
            $empty_webp = __DIR__ . "/gh13774.webp";
            $im = imagecreatefromwebp($empty_webp);
            var_dump($im);
            printf("printf test 16:%x\n", 170);
            $filename = "bug51997.bz2";
            unlink($filename);
        }
        function showFirstTwoItems($it) {
          echo str_replace("\0", '\0', $it->key()) . " => " . $it->current() .
        "\n";
          $it->next();
          echo str_replace("\0", '\0', $it->key()) . " => " . $it->current() .
        "\n";
        }
        $it->next();
    }
    $sh = new SessionHandler;
    $sh->open('path', 'name');
}
$db = MySQLPDOTest::factory();
$stmt = $db->prepare('SELECT * FROM test_33689');
$stmt->execute();
function f_5() {
    $b = 1;
    function f_6() {
        return false;
    }
    public function invoke($invocation) {
            return call_user_func_array($this->callback, $invocation->parameters);
        }
    public function invoke( $invocation) {
            foreach ($this->matchers as $match) {
                $match->invoked($invocation);
            }
        }
    foreach ($this->matchers as $match) {
                $match->invoked($invocation);
            }
    $match->invoked($invocation);
    function f_7() {
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
        setStyleAndThickness($im, $black, 2);
        function gen() {
            yield 0;
            yield from gen();
        }
        function bar($gen) {
            yield from $gen;
        }
        $gen = gen();
        $a = bar($gen);
        $a->rewind();
        $inputs = array(
              // Predefined Date constants
              'DATE_ATOM Constant' => DATE_ATOM,
              'DATE_COOKIE Constant' => DATE_COOKIE,
              'DATE_RFC822 Constant' => DATE_RFC822,
              'DATE_RFC850 Constant' => DATE_RFC850,
              'DATE_RFC1036 Constant' => DATE_RFC1036,
              'DATE_RFC1123 Constant' => DATE_RFC1123,
              'DATE_RFC2822 Constant' => DATE_RFC2822,
              'DATE_RFC3339 Constant' => DATE_RFC3339,
              'DATE_RSS Constant' => DATE_RSS,
              'DATE_W3C Constant' => DATE_W3C,
        );
        foreach($inputs as $key =>$value) {
              echo "\n--$key--\n";
              var_dump( gmdate($value, $timestamp) );
              var_dump( gmdate($value) );
        }
        var_dump( gmdate($value) );
        $row_stmt = null;
        var_dump($row_stmt);
        restore_exception_handler();
        function f_8() {
            function test()
            {
                echo "Undefined index here: '{$data['HTTP_HEADER']}'\n";
            }
            test();
            $dom = Dom\HTMLDocument::createEmpty();
            $container = $dom->appendChild(createElement($dom, "container"));
            $container->appendChild(createElementNS($dom, "http://www.w3.org/1999/xhtml", "html", "2"));
            spl_autoload_register(function ($class) {
                if (!require_once($class.'.inc')) {
                    error_log('Error: Autoload class: '.$class.' not found!');
                }
            });
            $a = new Test();
            var_dump($a->value);
            class Test{
            	public $value = 11.3;
            
            	public function TestFunc() {
            		$this->value -= 10;
            	}
            };
        }
        function byReference( & $array){
            foreach($array as &$item){
                $item['nanana'] = 'batman';
                $item['superhero'] = 'robin';
            }
        }
        $array = [
            [
            'superhero'=> 'superman',
            'nanana' => 'no nana'
            ],
            [
            'superhero'=> 'acuaman',
            'nanana' => 'no nana'
            ],
        
            ];
        byReference($array);
    }
    $func_ptrs = [
        'bug_gh9090_void_none_ptr',
        'bug_gh9090_void_int_char_ptr',
        'bug_gh9090_void_int_char_var_ptr',
        'bug_gh9090_void_char_int_ptr',
        'bug_gh9090_int_int_char_ptr',
    ];
    $func_argvs = [
        [ 'bug_gh9090_void_none',         [ ]                           ],
        [ 'bug_gh9090_void_int_char',     [ 42, "hello" ]               ],
        [ 'bug_gh9090_void_int_char_var', [ 42, "d=%d s=%s", -1, "ok" ] ],
    ];
    foreach ($func_ptrs as $func_ptr) {
        foreach ($func_argvs as $func_argv) {
            [ $func, $argv ] = $func_argv;
    
            $ok = true;
            try {
                $ffi->$func_ptr = $ffi->$func;
                call_user_func_array($ffi->$func_ptr, $argv);
            } catch (FFI\Exception $e) {
                $ok = false;
            }
    
            printf("%-36s = %-36s ? %s\n", $func_ptr, $func, $ok ? 'yes' : 'no');
        }
    }
    foreach ($func_argvs as $func_argv) {
            [ $func, $argv ] = $func_argv;
    
            $ok = true;
            try {
                $ffi->$func_ptr = $ffi->$func;
                call_user_func_array($ffi->$func_ptr, $argv);
            } catch (FFI\Exception $e) {
                $ok = false;
            }
    
            printf("%-36s = %-36s ? %s\n", $func_ptr, $func, $ok ? 'yes' : 'no');
        }
    [ $func, $argv ] = $func_argv;
    $ok = false;
    printf("%-36s = %-36s ? %s\n", $func_ptr, $func, $ok ? 'yes' : 'no');
}
$bar = new DateTime();
$args = [1, &$bar];
$function = function (int &$foo, DateTimeInterface &$bar) {};
(new ReflectionFunction($function))->invokeArgs($args);
function f_9() {
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
    $reqOf3 = 'select 79 n union all select 80 union all select 81';
    $stmt2 = $pdo->query("select * from ($reqOf3) t order by n desc");
    function f_10() {
        return [get_object_vars($this)];
    }
    function f_11() {
        $filename = "bug51997.bz2";
        unlink($filename);
        error_reporting(E_ALL);
        class base {
            private function show() {
                echo "base\n";
            }
            function test() {
                $this->show();
            }
        }
        $t = new base();
        $t->test();
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
        var_dump($temp_array);
        $file_handle = fopen(__FILE__, "r");
        $dir_handle = opendir( __DIR__ );
        $resources = array($file_handle, $dir_handle);
        var_dump( current($resources) );
        $ar1 = array("row1" => 2, "row2" => 1);
        var_dump(array_multisort($ar1));
        date_default_timezone_set('UTC');
        function f_12() {
            $text = '<p>hello world &trade;</p>';
            $dom = new DOMDocument('1.0', 'UTF-8');
            $node = $dom->getElementById('test');
            $node->textContent = $text;
            var_dump($node->textContent == $text);
            $certificateGenerator = new CertificateGenerator();
            $certificateGenerator->saveCaCert(__DIR__ . "/san-cert.pem");
            $bert = "file://" . __DIR__ . "/bug41033.pem";
            $cpca = __DIR__ . "/san-cert.pem";
            var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_SIGN, array($cpca)));
            $db = PDOTest::test_factory(__DIR__ . '/common.phpt');
            $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        }
        $row_stmt = null;
        var_dump($row_stmt);
    }
    function test(int $nr) {
        for ($i = $nr; $i <= $nr + 1; $i++)
            var_dump($i);
    }
    for ($i = $nr; $i <= $nr + 1; $i++)
            var_dump($i);
    var_dump($i);
}
$doc = new \DOMDocument();
$target = $doc->documentElement->lastChild;
$target->before('bar', $doc->documentElement->firstChild, 'baz');
