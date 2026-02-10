<?php
function f_0() {
    $xml = <<<'EOT'
            <!doctype html>
            <html>
                <head>
                    <title>GHSA-p3x9-6h7p-cgfc</title>
    
                    <meta charset="utf-8" />
                    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
                </head>
    
                <body>
                    <h1>GHSA-p3x9-6h7p-cgfc</h1>
                </body>
            </html>
            EOT;
    $rm = new ReflectionMethod(Collator::class, 'getSortKey');
    var_dump($rm->getNumberOfParameters());
    function f_1() {
    }
}
function foo($ref, $alt) {
    unset($GLOBALS['a']);
    unset($GLOBALS['b']);
    $GLOBALS['a'] = 1;
    $GLOBALS['b'] = 2;

    $org_a = $GLOBALS['a'];
    $org_b = $GLOBALS['b'];

    if ($ref) {
        global $a, $b;
    } else {
        /* zval temp_var(NULL); // refcount = 1
         * a = temp_var[x] // refcount = 2
         */
        $a = NULL;
        $b = NULL;
    }

    var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
    echo "--\n";
    if ($alt) {
        $a = &$GLOBALS['a'];
        $b = &$GLOBALS['b'];
    } else {
        extract($GLOBALS, EXTR_REFS);
    }
    var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
    echo "--\n";
    $a = &$GLOBALS['a'];
    $b = &$GLOBALS['b'];
    var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
    echo "--\n";
    $GLOBALS['b'] = 3;
    var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
    echo "--\n";
    $a = 4;
    var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
    echo "--\n";
    $c = $b;
    var_dump($b, $GLOBALS['b'], $c);
    echo "--\n";
    $b = 'x';
    var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b'], $c);
    echo "--\n";
    var_dump($org_a, $org_b);
    echo "----";
    if ($ref) echo 'r';
    if ($alt) echo 'a';
    echo "\n";
}
foo(true, false);
function f_2() {
    $dom = new DOMDocument;
    $element = $dom->appendChild($dom->createElement('root'));
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $phar = new Phar($fname);
    var_dump(strlen($phar->getStub()));
    function f_3() {
    }
}
$db = getDbConnection();
$sql = '
    SET NOCOUNT ON
    SELECT 0 AS [result]
';
$stmt = $db->query($sql);
$stmt->closeCursor();
function f_4() {
    function f_5() {
        function f_6() {
        }
    }
    $s = new SplObjectStorage();
    $s->attach($s);
    function f_7() {
    }
}
$headers2 = exif_read_data(__DIR__ . '/bug64739.jpg');
var_dump($headers2['Author']);
function f_8() {
    function f_9() {
        function f_10() {
        }
    }
    class_alias( 'stdClass', '_' );
    function f_11() {
        function f_12() {
        }
    }
    set_exception_handler(function () { print "EX\n"; });
}
$a = 'ok';
$b = 'ok';
$_a = $a;
$_b = $b;
var_dump($_a, $_b);
function f_13() {
    function f_14() {
        function f_15() {
        }
    }
    $file = __DIR__ . '/bug38212私はガラスを食べられます.gd2';
    $im1 = imagecreatetruec
    lor(10,100);
    imagefill($im1, 0,0, 0x
    trycatch_dump(
        fn(;
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
        var_dump($c);
    }
    $mysqli = new mysqli("$host:$port", $user, $passwd, $db);
    $tbl = "test";
    $sql = "INSERT INTO $tbl (bit_column_1) VALUES (0b10101010101)";
    $mysqli->query($sql);
}
var_dump ( rtrim("rtrim testABCXYZ", "A..Z") );
function f_19() {
    function f_20() {
        function f_21() {
            function f_22() {
            }
        }
        printf("[008] PS and non-PS results differ, dumping data\n");
    }
    $meta_res = $stmt->result_metadata();
    $field = $meta_res->fetch_field();
    printf("Orgname      : %s\n", $field->orgname);
    function f_23() {
    }
}
$conn = pg_connect($conn_str);
$table='test_68638';
pg_update($conn,$table, array('value' => '+inf'), array('id' => 3));
function f_24() {
    function f_25() {
    }
}
