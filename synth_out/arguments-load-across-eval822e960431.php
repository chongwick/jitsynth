<?php
function test(string $name, object $obj) {
    printf("# %s:\n", $name);

    var_dump($obj);
    var_dump(@$obj->dynamic++);
    var_dump($obj);
}
function checkFlags($reported_flags, $expected_flags, $flags) {
        $found_flags = $unexpected_flags = '';
        foreach ($flags as $code => $name) {
            if ($reported_flags >= $code) {
                $reported_flags -= $code;
                $found_flags .= $name . ' ';
                if (stristr($expected_flags, $name)) {
                    $expected_flags = trim(str_ireplace($name, '', $expected_flags));
                } else {
                    $unexpected_flags .= $name . ' ';
                }
            }
        }

        return array($expected_flags, $unexpected_flags, $found_flags);
    }
class C {
	use T;
	private array $a = [1];
}
function do_throw() { throw new Exception; }
function f_0() {
    function f_1() {
        $db = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
        $stmt = $db->prepare("CALL testSp()");
        $stmt->execute();
        var_dump($obj);
        $flags = array(
                MYSQLI_NOT_NULL_FLAG => 'NOT_NULL',
                MYSQLI_PRI_KEY_FLAG => 'PRI_KEY',
                MYSQLI_UNIQUE_KEY_FLAG => 'UNIQUE_KEY',
                MYSQLI_MULTIPLE_KEY_FLAG => 'MULTIPLE_KEY',
                MYSQLI_BLOB_FLAG => 'BLOB',
                MYSQLI_UNSIGNED_FLAG	=> 'UNSIGNED',
                MYSQLI_ZEROFILL_FLAG => 'ZEROFILL',
                MYSQLI_AUTO_INCREMENT_FLAG => 'AUTO_INCREMENT',
                MYSQLI_TIMESTAMP_FLAG	=> 'TIMESTAMP',
                MYSQLI_SET_FLAG	=> 'SET',
                MYSQLI_NUM_FLAG => 'NUM',
                MYSQLI_PART_KEY_FLAG => 'PART_KEY',
                // MYSQLI_GROUP_FLAG => 'MYSQLI_GROUP_FLAG' - internal usage only
                (defined('MYSQLI_NO_DEFAULT_VALUE_FLAG') ? MYSQLI_NO_DEFAULT_VALUE_FLAG : 4096) => 'NO_DEFAULT_VALUE',
                (defined('MYSQLI_BINARY_FLAG') ? MYSQLI_BINARY_FLAG : 128) => 'BINARY',
                (defined('MYSQLI_ENUM_FLAG') ? MYSQLI_ENUM_FLAG : 256) => 'ENUM',
                // MYSQLI_BINCMP_FLAG
            );
        $field = mysqli_fetch_field_direct($res, 1);
        $expected_flags = array('col1' => 'MULTIPLE_KEY PART_KEY', 'col2' => 'PART_KEY');
        list($missing_flags, $unexpected_flags, $flags_found) = checkFlags($field->flags, $expected_flags[$field->name], $flags);
        printf("[012] The flags '%s' have not been reported for %s, found '%s'\n",
                            $missing_flags, $field->name, $flags_found);
        function f_2() {
            printf("printf test 25:%-2s\n", "gazonk");
            $meta_res = $stmt->result_metadata();
            $field = $meta_res->fetch_field();
            printf("Flags        : %d\n", $field->flags);
        }
        var_dump(strncasecmp("test ", "E", -1));
    }
    $unset_var = 10;
    $fp = fopen(__FILE__, "r");
    $heredoc = <<<EOT
    Hello world
    EOT;
    $var = 10;
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
    var_dump( array_unshift($temp_array, $var, "hello", 'world') );
}
$test_array = array(1, array(1 => "one", "two" => 2, "" => "f") );
var_dump( end($test_array) );
function f_3() {
    catch (Exception $e) {
        var_dump($e->getMessage());
    }
    var_dump($e->getMessage());
    function f_4() {
        $infile = __DIR__.'/bug34704私はガラスを食べられます.jpg';
        var_dump(exif_read_data
        $infile));
        ?>;
        $im = imagecreate(800, 800);
        imageline($im, 550, 250, 550, 750, IMG_COLOR_STYLED);
        var_dump ( $vars );
        function f_5() {
            var_dump(new Test);
            $GLOBALS['b'] = 2;
            $b = &$GLOBALS['b'];
            $GLOBALS['b'] = 3;
            $a = 4;
            $c = $b;
            $b = 'x';
            var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b'], $c);
        }
        $im = ImageCreateTrueColor(10, 10);
        imagealphablending($im, true);
    }
    var_dump(preg_replace_callback_array([], ''));
}
$curl = curl_init("http://www.google.com");
curl_setopt($curl, CURLOPT_TIMEOUT, 1);
function f_6() {
    function f_7() {
        printf("%0\$s", 1);
        $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
        $d0 = $prefix . "ソフト";
        $d1 =
        dir($d1);
        
        ;
        $now = new DateTime('2018-11-03 11:34:20.781751');
        $ago = new DateTime('2018-11-03 11:34:20.000000');
        $diff = $ago->diff($now);
        var_dump($diff->invert, $diff->s, $diff->f);
        $r = new ResourceBundle( 'en_US', BUNDLE );
        $offset = 'teststring';
        $ref = &$offset;
        var_dump($r[$ref]);
        $trace_file = '/tmp/mysqli_debug_phpt.trace';
        printf("[004] Trace file '%s' is very small. filesize() reports only %d bytes. Please check.\n",
                    $trace_file,
                    filesize($trace_file));
        function f_8() {
            $args = ["-d", "extension_dir=" . ini_get("extension_dir"), "-d", "extension=" . (substr(PHP_OS, 0, 3) == "WIN" ? "php_" : "") . "soap." . PHP_SHLIB_SUFFIX];
            $code = <<<'PHP'
            /* Receive */
            $content = trim(file_get_contents("php://input")) . PHP_EOL;
            PHP;
            php_cli_server_start($code, null, $args);
            $text = '<p>hello world &trade;</p>';
            $dom = new DOMDocument('1.0', 'UTF-8');
            $node = $dom->getElementById('test');
            $node->textContent = $text;
            var_dump($node->textContent == $text);
        }
        $o = new C;
        $o->foo();
    }
    $f = __DIR__ . DIRECTORY_SEPARATOR . "67647.mov";
    $fi = new finfo(FILEINFO_MIME_TYPE);
    var_dump($fi->file($f));
    $pdo = MySQLPDOTest::factory();
    $pdo->setAttribute(\PDO::ATTR_EMULATE_PREPARES, false);
    $re = new ReflectionExtension("hash");
    var_dump($re->getConstants());
}
$f = function () {};
$t = new Test;
$f->__invoke($t->bar(Test::foo(do_throw())));
