<?php
class PHPUnit_Framework_MockObject_Matcher {
    public $stub = null;
    public $methodNameMatcher;
    public function invoked($invocation) {
        return $this->stub->invoke($invocation);
    }
}
function test(array... $args) {
    var_dump($args);
}
function bar($x='no argument')
{
    throw new Exception("This is an exception from bar({$x}).");
}
function f_0() {
    $start_key = 0;
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
    function f_1() {
    }
}
$str = 'Hello World';
$shm_key = ftok(__FILE__, 'p');
$shm_id1 = shmop_open($shm_key, 'c', 0644, strlen($str));
var_dump($shm_id1);
function f_2() {
    $OuterMatcher = new PHPUnit_Framework_MockObject_Matcher();
    $fn = "bug71263.bz2";
    $r = fopen($fn, "r");
    fclose($r);
    function f_3() {
    }
}
$dom = Dom\HTMLDocument::createFromString(<<<HTML
<!DOCTYPE html>
<html>
    <body>
        <svg xmlns="http://www.w3.org/2000/svg" height="1"></svg>
        <math></math>
    </body>
</html>
HTML);
$body = $dom->getElementsByTagName("body")[0];
$namespaceless = $body->appendChild($dom->createElementNS(NULL, "foo"));
var_dump($namespaceless->lookupNamespaceURI(NULL));
function f_4() {
    function f_5() {
        function f_6() {
        }
    }
    var_dump( range(1, 7, fdiv(0, 0)) );
    function f_7() {
    }
}
printf("[001] [%d] %s\n", mysqli_errno($link), mysqli_error($link));
function f_8() {
    function f_9() {
        function f_10() {
        }
    }
    var_dump($args);
    function f_11() {
        function f_12() {
        }
    }
    $r = new Phar(__DIR__ . "/bug69279.phar.zip");
    $r->extractTo(__DIR__, NULL, TRUE);
}
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
$pdo->setAttribute(PDO::ATTR_PREFETCH, 0);
function f_13() {
    function f_14() {
        function f_15() {
        }
    }
    $ch = curl_init();
    var_dump(curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2));
    function f_16() {
        function f_17() {
            function f_18() {
            }
        }
        $compression = [
            'gz' => ['zlib.deflate', 'gzinflate'],
            'bz2' => ['bzip2.compress', 'bzdecompress']
        ];
        foreach ($compression as $ext => [$filter, $function]) {
            $stream = fopen(__DIR__ . "/75776.$ext", 'w');
            stream_filter_append($stream, $filter);
            fwrite($stream,"sdfgdfg");
            fflush($stream);
            fclose($stream);
        
            $compressed = file_get_contents(__DIR__ . "/75776.$ext");
            var_dump($function($compressed));
        }
        $stream = fopen(__DIR__ . "/75776.$ext", 'w');
        fflush($stream);
    }
    var_dump(self::$x);
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
php_admin_value[cgi.fix_pathinfo] = yes
EOT;
$code = <<<EOT
<?php
echo \$_SERVER["SCRIPT_NAME"] . "\n";
echo \$_SERVER["ORIG_SCRIPT_NAME"] . "\n";
echo \$_SERVER["SCRIPT_FILENAME"] . "\n";
echo \$_SERVER["PATH_INFO"] . "\n";
echo \$_SERVER["PHP_SELF"];
EOT;
$tester = new FPM\Tester($cfg, $code);
$tester->terminate();
function f_19() {
    function f_20() {
        function f_21() {
            function f_22() {
            }
        }
        var_dump(c1::$a1);
    }
    bar('first try');
    function f_23() {
    }
}
gc_collect_cycles();
function f_24() {
    function f_25() {
    }
}
