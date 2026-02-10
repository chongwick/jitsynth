<?php
function f_0() {
    $cfg = <<<EOT
    [global]
    error_log = {{FILE:LOG}}
    [unconfined]
    listen = {{ADDR}}
    pm = dynamic
    pm.max_children = 5
    pm.start_servers = 1
    pm.min_spare_servers = 1
    pm.max_spare_servers = 3
    EOT;
    $code = <<<EOT
    <?php
    echo "Test\n";
    EOT;
    $tester = new FPM\Tester($cfg, $code);
    $tester->start();
    $time = '9999-11-33';
    $timeZone = new DateTimeZone('UTC');
    $dateTime = new DateTime($time, $timeZone);
    $im = ImageCreateTrueColor(10, 10);
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        $to = "specials";
    }
    class A {
        private static $x = 1;
    }
    class C extends A {
        function bar() {
            var_dump(A::$x);
        }
    }
    $b = new C;
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        $strA = 'test &amp; test';
    }
    $time = '2000-01-01 00:00:00.000000';
    $tz_us = new DateTimeZone('America/Los_Angeles');
    $us = new DateTime($time, $tz_us);
    $output = array();
    $test_fl = __DIR__ . DIRECTORY_SEPARATOR . md5(uniqid());
    $test_fl_escaped = escapeshellarg($test_fl);
    exec(getenv('TEST_PHP_EXECUTABLE_ESCAPED') . " -n $test_fl_escaped", $output);
    class TrampolineTest {
        public function __call(string $name, array $arguments) {
            echo 'Trampoline for ', $name, PHP_EOL;
        }
    }
    $o = new TrampolineTest();
    for ($i_3 = 0; $i_3 < 10; $i_3++) {
        $a = "lest";
        $a[0] = "f";
    }
    if (true) {
        function zerofill($offset, $link, $datatype, $insert = 1) {
        
                mysqli_query($link, 'ALTER TABLE test DROP zero');
                $sql = sprintf('ALTER TABLE test ADD zero %s UNSIGNED ZEROFILL', $datatype);
                if (!mysqli_query($link, $sql)) {
                    // no worries - server might not support it
                    return true;
                }
        
                if (!mysqli_query($link, sprintf('UPDATE test SET zero = %s', $insert))) {
                    printf("[%03d] UPDATE failed, [%d] %s\n",
                        $offset, mysqli_errno($link), mysqli_error($link));
                    return false;
                }
        
                if (!($res = mysqli_query($link, 'SELECT zero FROM test LIMIT 1'))) {
                    printf("[%03d] SELECT failed, [%d] %s\n",
                        $offset, mysqli_errno($link), mysqli_error($link));
                    return false;
                }
        
                $row = mysqli_fetch_assoc($res);
                $meta = mysqli_fetch_fields($res);
                mysqli_free_result($res);
                $meta = $meta[0];
                $length = $meta->length;
                if ($length > strlen($insert)) {
        
                    $expected = str_repeat('0', $length - strlen($insert));
                    $expected .= $insert;
                    if ($expected !== $row['zero']) {
                        printf("[%03d] Expecting '%s' got '%s'\n", $offset, $expected, $row['zero']);
                        return false;
                    }
        
                } else if ($length <= 1) {
                    printf("[%03d] Length reported is too small to run test\n", $offset);
                    return false;
                }
        
                return true;
            }
        mysqli_query($link, 'ALTER TABLE test DROP zero');
        $_SERVER = [ 'test' => 'test' ];
    }
    if (!true) {
        class TrampolineTest {
            public function __call(string $name, array $arguments) {
                echo 'Trampoline for ', $name, PHP_EOL;
            }
        }
        $o = new TrampolineTest();
        $callback1 = [$o, 'trampoline1'];
        spl_autoload_register($callback1);
        $depth1 = "depth1";
    }
    function f() {
        Fiber::suspend();
    }
    function g() {
        (new Fiber(function() {
            global $f;
            var_dump((new ReflectionFiber($f))->getTrace());
        }))->start();
    }
    $f = new Fiber(function() { f(); max(...[1,2,3,4,5,6,7,8,9,10,11,12]); g(); });
    for ($i_4 = 0; $i_4 < 10; $i_4++) {
        $t = new stdClass;
        $t->prop = $t;
    }
    if (true) {
        function test(string $input) {
            var_dump(filter_var($input, FILTER_VALIDATE_URL));
        }
        test("http://test@[2001:db8:3333:4444:5555:6666:1.2.3.4]");
        class D {
            public string $prop;
        }
        $d = new D();
    }
    if (!true) {
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
        var_dump( array_unshift($temp_array, $var, "hello", 'world') );
        $i = 0;
    }
}
$cfg = <<<EOT
[global]
error_log = {{FILE:LOG}}
[unconfined]
listen = {{ADDR}}
pm = dynamic
pm.max_children = 5
pm.start_servers = 1
pm.min_spare_servers = 1
pm.max_spare_servers = 3

EOT;
for ($i_5 = 0; $i_5 < 10; $i_5++) {
    ini_set("intl.error_level", E_WARNING);
    $invalid_files = array(
      0,
      1234,
      -2.34555,
      TRUE,
      FALSE,
      " ",
    );
    foreach( $invalid_files as $invalid_file ) {
      var_dump( is_executable($invalid_file) );
      clearstatcache();
    }
    var_dump( is_executable($invalid_file) );
}
function f_6() {
    $array = array(
        1 => "entry_1",
        2 => "entry_2",
        3 => "entry_3",
        4 => "entry_4",
        5 => "entry_5"
    );
    var_dump($array);
    function t2()
    {
        ob_start("test");
        echo "Hello from t2 1 ";
            ob_flush();
            echo "Hello from t2 2 ";
            ob_end_flush();
    }
    t2();
}
function f_7() {
    $ok = true;
    try {
        $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
        $phar = new Phar($fname);
        $phar->setDefaultStub('my/custom/thingy.php', 'the/web.php');
    } catch (Exception $e) {}
    if (true) {
        $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
        ;
        
        ?>;
        $responses = array(
            "data://text/plain,HTTP/1.1 200 Some very long reason-phrase to test that this is properly handled by our code without adding a new header like  Bad: Header\r\nGood: Header\r\n\r\nBody",
            "data://text/plain,HTTP/1.1 200 \r\nGood: Header\r\n\r\nBody",
        );
    }
    try {
        $arr = array(
            range(1, 5),
            range(1, 5),
            range(1, 5),
            range(1, 5),
            range(1, 5),
        );
        array_walk_recursive($arr,
            function (&$value, $key) use(&$arr) {
                var_dump($key);
                unset($arr[$key]);
            }
        );
    } catch (Exception $e) {}
    if (true) {
        function crash()
        {
            $notDefined[$i] = 'test';
        }
        crash();
        $heredoc = <<<EOT
        hello world
        EOT;
    }
    return false;
}
