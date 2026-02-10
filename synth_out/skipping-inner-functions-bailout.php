<?php
function f_0() {
    $gen = (function() {
        yield from (function() { yield; })();
    })();
    $fiber = new Fiber(function() use ($gen) {
        $gen->current();
    });
    $dt = new DateTime('first day of January 2011');
    var_dump($dt);
    function f_1() {
    }
}
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt', Pdo::class, true);
var_dump($pdo->query('SELECT 1;')->fetchAll());
function f_2() {
    public function __construct($c)
        {
            $this->b = new C($c);
        }
    $this->b = new C($c);
    class C
    {
        public $c;
    
        public function __construct($c)
        {
            $this->c = $c;
        }
    };
    $dom = Dom\HTMLDocument::createEmpty();
    $container = $dom->appendChild(createElement($dom, "container"));
    $container->appendChild(createElementNS($dom, NULL, "html", "3"));
    function f_3() {
    }
}
$mysqli = new mysqli("$host:$port", $user, $passwd, $db);
$tbl = "test";
$sql = "INSERT INTO $tbl (bit_column_1) VALUES (0b10101010101)";
$mysqli->query($sql);
function f_4() {
    function f_5() {
        function f_6() {
        }
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
    }
}
$x = fprintf($fp, "fprintf test 1:%.5s", "abcdefghij");
var_dump($x);
function f_8() {
    function f_9() {
        function f_10() {
        }
    }
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
    setStyleAndThickness($im, $black, 4);
    function f_11() {
        function f_12() {
        }
    }
    $fp = fopen (__FILE__, "r");
    $dfp = opendir ( __DIR__ );
    $unset_array = array(10);
    $varient_arrays = array (
      /* integers */
      543915,
      -5322,
      0x55F,
      -0xCCF,
      123,
      -0654,
    
      /* strings */
      "",
      '',
      "0",
      '0',
      'string',
      "string",
    
      /* floats */
      10.0000000000000000005,
      .5e6,
      -.5E7,
      .5E+8,
      -.5e+90,
      1e5,
    
      /* objects */
      new stdclass,
    
      /* resources */
      $fp,
      $dfp,
    
      /* nulls */
      null,
      NULL,
    
      /* boolean */
      true,
      TRUE,
      FALSE,
      false,
    
      /* unset/undefined arrays  */
      @$unset_array,
      @$undefined_array
    );
    foreach ($varient_arrays as $type ) {
      echo "-- Iteration $loop_counter --\n"; $loop_counter++;
      var_dump( is_array ($type) );
    }
    var_dump( is_array ($type) );
}
$dir = opendir('foo://bar');
closedir($dir);
function f_13() {
    function f_14() {
        function f_15() {
        }
    }
    $fp = fopen('php://input', 'r+');
    var_dump(fseek($fp, -32, SEEK_CUR));
    function f_16() {
        function f_17() {
            function f_18() {
            }
        }
        trait Foo {
            public static function myMethod(string $foo) {
                echo "Called ", __METHOD__, PHP_EOL;
                var_dump($foo);
            }
        }
        function foo(Closure $c = Foo::myMethod(...)) {
            var_dump($c);
            $c("abc");  
        }
        foo();
    }
    date_default_timezone_set('Europe/Kiev');
}
$array_test = array("a", "b", "d", 7, "u" => "U", -4, "-.008" => "neg.008");
var_dump( end($array_test) );
function f_19() {
    function f_20() {
        function f_21() {
            function f_22() {
            }
        }
        $dbh = @pg_connect($conn_str);
        pg_close($dbh);
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
    $field = mysqli_fetch_field_direct($res, 1);
    $expected_flags = array('col1' => 'MULTIPLE_KEY PART_KEY', 'col2' => 'PART_KEY');
    list($missing_flags, $unexpected_flags, $flags_found) = checkFlags($field->flags, $expected_flags[$field->name], $flags);
    printf("[012] The flags '%s' have not been reported for %s, found '%s'\n",
                        $missing_flags, $field->name, $flags_found);
    function f_23() {
    }
}
$dt = new DateTime('@1604219400');
$dt->setTimezone(new DateTimeZone('America/Boise'));
function f_24() {
    function f_25() {
    }
}
