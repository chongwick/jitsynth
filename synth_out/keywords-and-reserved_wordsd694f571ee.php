<?php
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
function comp_func_cr($a, $b) {
        if ($a->priv_member === $b->priv_member) return 0;
        return ($a->priv_member > $b->priv_member) ? 1 : -1;
    }
function comp_func_cr2($a, $b) {
        echo ".";
        if ($a->priv_member === $b->priv_member) return 0;
        return ($a->priv_member < $b->priv_member) ? 1 : -1;
    }
function test() {
    (new B)->foo();
    (new B)->bar();
    (new B)->baz();
    B::baz();
}
function do_throw() { throw new Exception; }
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
function f_0() {
    try {
        $array = new ArrayObject();
        $array->offsetSet('key', 'value');
    } catch (Exception $e) {}
    if (true) {
        return true;
    }
    return "key";
}
function f_1() {
    try {
        $batch_file_path = __DIR__ . '/ghsa-9fcc-425m-g385_003.bat';
        $descriptorspec = [STDIN, STDOUT, STDOUT];
        for ($i = 1; $i <= 255; $i++) {
          echo "Testing $i\n";
          try {
            $proc = @proc_open([$batch_file_path . chr($i), "\"&notepad.exe"], $descriptorspec, $pipes, null, null, array("bypass_shell" => true));
            var_dump($proc);
            proc_close($proc);
          } catch (Error) {}
        }
        $proc = @proc_open([$batch_file_path . chr($i), "\"&notepad.exe"], $descriptorspec, $pipes, null, null, array("bypass_shell" => true));
        proc_close($proc);
    } catch (Exception $e) {}
    if (true) {
        return $i;
    }
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
    $found_flags .= $name . ' ';
    $expected_flags = trim(str_ireplace($name, '', $expected_flags));
    $unexpected_flags .= $name . ' ';
    return array($expected_flags, $unexpected_flags, $found_flags);
}
function f_2() {
    if (true) {
        if (true) {
            return [];
        }
        return false;
    }
    if (true) {
        return ($a->priv_member < $b->priv_member) ? 1 : -1;
    }
    return "concreteClass";
}
function f_3() {
    test();
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
    if (true) {
        $dom = new DOMDocument;
        $dom->getElementsByTagName('test2')[0]->setIdAttribute('attr', true);
    }
    $GLOBALS['b'] = 2;
    $a = NULL;
    $b = NULL;
    var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
    var_dump(filter_input(INPUT_SERVER, "HTTP_X_FORWARDED_FOR", FILTER_UNSAFE_RAW));
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $phar = new Phar($fname);
    $phar->setDefaultStub(str_repeat('a', 400));
    php_cli_server_start('http_response_code(422);');
    $ch = curl_init("https://localhost/username");
    curl_setopt($ch, CURLOPT_STDERR, fopen("php://stdout", "w"));
    $s = "1234567890a";
    $i = "010";
    var_dump($s[$i], isset($s[$i]));
    $reflector = new ReflectionClass(C::class);
    $obj = $reflector->newLazyProxy(function () {
        throw new \Exception('initializer');
    });
    test('Proxy', $obj);
    $f = function () {};
    $f->__invoke(do_throw());
    var_dump(getopt("abcd"));
    var_dump($row);
    imagesetthickness($im, $thickness);
    printf("[%03d] UPDATE failed, [%d] %s\n",
                    $offset, mysqli_errno($link), mysqli_error($link));
    $oneeighty = M_PI;
    var_dump(sin($oneeighty));
}
$reflection = new ReflectionClass('\DateTimeImmutable');
$immutable = $reflection->newInstanceWithoutConstructor();
for ($i_4 = 0; $i_4 < 10; $i_4++) {
    $tester = new FPM\Tester($cfg);
    $userMessage = "'user' directive is ignored when FPM is not running as root";
    $tester->expectLogNotice($userMessage, 'eeee');
}
$var = -PHP_INT_MAX - 1;
for ($i_5 = 0; $i_5 < 10; $i_5++) {
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_SIGN, array($cpca)));
}
$plain = "The quick brown fox jumps over the lazy dog.";
for ($i_6 = 0; $i_6 < 10; $i_6++) {
    $dt = new DateTime('@1604215800');
    $dt->add(new DateInterval('PT1H'));
}
$fp = fopen(__FILE__, "r");
for ($i_7 = 0; $i_7 < 10; $i_7++) {
    bar();
}
