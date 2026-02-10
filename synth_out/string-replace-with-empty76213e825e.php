<?php
function f_0() {
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
    zerofill(11, $link, 'DECIMAL');
    class base {
        private function show() {
            echo "base\n";
        }
        function test() {
            $this->show();
        }
    }
    class derived extends base {
        function show() {
            echo "derived\n";
        }
        function test() {
            echo "test\n";
            $this->show();
            parent::test();
            parent::show();
        }
    }
    $t = new derived();
    $t->test();
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt', Pdo::class, true);
    $references = array();
    $idx = 0;
    $rows = array();
    for ($i = 0; $i < 2; $i++) {
            $rows[$i] = mysqli_fetch_assoc($res);
            $references[$idx]['row_ref'] 		= &$rows[$i];
            $references[$idx]['row_copy'] 	= $rows[$i];
            $references[$idx]['id_ref'] 		= &$rows[$i]['id'];
            $references[$idx]['id_copy']		= $rows[$i]['id'];
            /* enforce separation */
            $references[$idx]['id_copy_mod']= $rows[$i]['id'] + 0;
        }
    $rows[$i] = mysqli_fetch_assoc($res);
    $references[$idx]['id_copy']		= $rows[$i]['id'];
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
        $phar = new Phar($fname, 0, 'a.phar');
        $reflector = new ReflectionClass(C::class);
        for ($i = 0; $i < 2; $i++) {
            $obj = $reflector->newLazyGhost(function ($obj) use ($i) {
                if ($i === 1) {
                    throw new \Exception();
                }
            });
            $obj->c = 1;
        }
        $obj = $reflector->newLazyGhost(function ($obj) use ($i) {
                if ($i === 1) {
                    throw new \Exception();
                }
            });
        $obj->c = 1;
    }
    class Box {
        public ?Test $value;
    }
    global $box;
    function test($box) {
        var_dump($box->value = new Test);
    }
    $box = new Box();
    test($box);
    function test(string $name, object $obj) {
        printf("# %s:\n", $name);
    
        var_dump($obj);
        var_dump(@$obj->dynamic++);
        var_dump($obj);
    }
    $reflector = new ReflectionClass(C::class);
    $obj = $reflector->newLazyGhost(function ($obj) {
        var_dump("initializer");
        $obj->__construct();
    });
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        $meta_res = $stmt->result_metadata();
        $field = $meta_res->fetch_field();
    }
    $arc_name = __DIR__ . "/bug40228.zip";
    $zip = new ZipArchive;
    $zip->open($arc_name, ZIPARCHIVE::CREATE);
    class P {
        public function __destruct() {
            var_dump(__METHOD__);
        }
    }
    class C extends P {
        use T;
    }
    $c = new C();
    $iterator = 1;
    for ($i_3 = 0; $i_3 < 10; $i_3++) {
        function test() {
            $dtor = new class { function __destruct() { throw new Exception; } };
            $a = 1;
            return [0, $a];
        }
        $x = test();
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
    }
    $im = imagecreate(800, 800);
    imageline($im, 600, 200, 600, 700, IMG_COLOR_STYLED);
    $tester = new FPM\Tester($cfg);
    $userMessage = "'user' directive is ignored when FPM is not running as root";
    $tester->expectLogNotice($userMessage, 'eeee');
    $index_array = array (1, 2, 3);
    for ($i_4 = 0; $i_4 < 10; $i_4++) {
        class foo
        {
        // no members
        }
        $foo_object = new foo();
    }
    $dir_handle = opendir( __DIR__ );
    closedir( $dir_handle );
    function test(string $input) {
        var_dump(filter_var($input, FILTER_VALIDATE_URL));
    }
    test("http://te[st@2001:db8:3333:4444:5555:6666:1.2.3.4");
}
mail("some.address.it.wont.ever.reach@lookup.and.try.to.find.this.host.name","subject","a", NULL);
$fp = fopen("php://memory", "r+");
rewind($fp);
$ar1 = array("row1" => 2, "row2" => 1);
$args = array(&$ar1);
var_dump(call_user_func_array("array_multisort", $args));
$sert = "file://" . __DIR__ . "/san-cert.pem";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_ENCRYPT, array($cpca), $utfl));
