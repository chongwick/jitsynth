<?php
function test() {
    byVal(C[0]);
    try {
        byRef(C[0]);
    } catch (Error $e) {
        echo $e->getMessage(), "\n";
    }
}
class Foo {
  public $bar = "bat";
}
function crash()
{
    $notDefined[$i] = 'test';
}
class C {
    public int $a;
}
$reflection = new ReflectionClass('\DateTime');
function f_0() {
    return 1;
}
function f_1() {
    $reqOf3 = 'select 79 n union all select 80 union all select 81';
    function f_2() {
        return "key";
    }
    function f_3() {
        $test = array("A\x00B" => "Hello world");
        debug_zval_dump($test);
        $header = <<<HEADER
        enum bug_gh16013_enum {
        	BUG_GH16013_A = 1,
        	BUG_GH16013_B = 2,
        };
        struct bug_gh16013_int_struct {
        	int field;
        };
        struct bug_gh16013_callback_struct {
        	int8_t (*return_int8)(int8_t);
        	uint8_t (*return_uint8)(uint8_t);
        	int16_t (*return_int16)(int16_t);
        	uint16_t (*return_uint16)(uint16_t);
        	int32_t (*return_int32)(int32_t);
        	uint32_t (*return_uint32)(uint32_t);
        	float (*return_float)(float);
        	struct bug_gh16013_int_struct (*return_struct)(struct bug_gh16013_int_struct);
        	enum bug_gh16013_enum (*return_enum)(enum bug_gh16013_enum);
        };
        
        char bug_gh16013_return_char();
        bool bug_gh16013_return_bool();
        short bug_gh16013_return_short();
        int bug_gh16013_return_int();
        enum bug_gh16013_enum bug_gh16013_return_enum();
        struct bug_gh16013_int_struct bug_gh16013_return_struct();
        HEADER;
        $ffi = FFI::cdef($header, ffi_get_php_dll_name());
        var_dump($ffi->bug_gh16013_return_bool());
        try {
            $iterator = 1;
            $iterator++;
        } catch (Exception $e) {}
        if (true) {
            $dom = Dom\HTMLDocument::createFromString(<<<HTML
            <!DOCTYPE html>
            <html>
                <body>
                    <svg xmlns="http://www.w3.org/2000/svg" height="1"></svg>
                    <math></math>
                </body>
            </html>
            HTML);
            var_dump($dom->lookupNamespaceURI(NULL));
        }
        $meta_res = $stmt->result_metadata();
        $field = $meta_res->fetch_field();
        printf("Decimals     : %d\n", $field->decimals);
        $bert = "file://" . __DIR__ . "/bug41033.pem";
        $cpca = __DIR__ . "/san-cert.pem";
        $utfl = __DIR__ . "/sni_server_uk.pem";
        var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_ENCRYPT, array($cpca), $utfl));
        $dest = __DIR__ . "/bug40228";
        rmdir($dest . '/test');
        function f_4() {
            $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug54028_2" . DIRECTORY_SEPARATOR;
            $dirs = array("a", "ソ", "ゾ", "şŞıİğĞ", "多国語", "王", "汚れて掘る");
            foreach ($dirs as $d) {
                mkdir($prefix . $d);
            }
            mkdir($prefix . $d);
            try {
                $x = 1;
                $x += 0;
                ++$x;
            } catch (Exception $e) {}
            if (true) {
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
            $filename = "bug51997.bz2";
            $bz = bzopen($filename, "r");
            bzclose($bz);
            $f = __DIR__."/data/test.txt.gz";
            $h = gzopen($f, 'r');
            gzclose($h);
            test('y');
        }
        printf("[002] [%d] %s\n", $link->errno, $link->error);
    }
    $fn = "bug71263.bz2";
    $r = fopen($fn, "r");
    $s = fread($r, 100);
    var_dump($s);
}
$dom = Dom\HTMLDocument::createEmpty();
$container = $dom->appendChild(createElement($dom, "container"));
$container->appendChild(createElement($dom, "foo:HTML", "6"));
function f_5() {
    $GLOBALS["obj"] = 24;
    function f_6() {
        return <<<XML
        <?xml version="1.0" encoding="UTF-8"?>
        <SOAP-ENV:Envelope
          xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/"
          xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
          xmlns:ns="urn:ebay:api:PayPalAPI">
          <SOAP-ENV:Body id="_0">
            <GetExpressCheckoutDetailsResponse xmlns="urn:ebay:api:PayPalAPI">
              <Timestamp>2008-06-23T14:51:08Z</Timestamp>
              <Ack>Success</Ack>
              <CorrelationID>ae013a0ccdf13</CorrelationID>
              <Version>50.000000</Version>
              <Build>588340</Build>
              <GetExpressCheckoutDetailsResponseDetails xsi:type="ns:GetExpressCheckoutDetailsResponseDetailsType">
                <Token>EC-11Y75137T2399952C</Token>
                <PayerInfo>
                  <Payer>example@example.com</Payer>
                  <PayerID>MU82WA43YXM9C</PayerID>
                  <PayerStatus>verified</PayerStatus>
                </PayerInfo>
              </GetExpressCheckoutDetailsResponseDetails>
            </GetExpressCheckoutDetailsResponse>
          </SOAP-ENV:Body>
        </SOAP-ENV:Envelope>
        XML;
    }
    $foo = new Foo;
    var_dump($foo);
    function f_7() {
        $a = array(1,2,3);
        $s1 = "some string";
        var_dump($a + $s1);
        $ar1 = array("row1" => 2, "row2" => 1);
        $args = array(&$ar1);
        var_dump(call_user_func_array("array_multisort", $args));
        crash();
        printf("printf test 9:<%-20s>\n", "bar");
        $meta_res = $stmt->result_metadata();
        $field = $meta_res->fetch_field();
        printf("Flags        : %d\n", $field->flags);
        function f_8() {
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
            $tester->close();
            $doc = new \DOMDocument();
            $doc->loadXML('<a>foo<last/></a>');
            $db = PDOTest::test_factory(dirname(__FILE__) . '/common.phpt');
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $obj = new Test;
            $name = "foo";
            var_dump(empty($obj[$name]));
        }
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
    $dom = Dom\HTMLDocument::createEmpty();
    dumpNodeList($dom->getElementsByTagName("bar:HTML"));
}
debug_print_backtrace();
function f_9() {
    $mb=148;
    function f_10() {
        return "Class A object";
    }
    function f_11() {
        $dt = new DateTime('first day of January 2011');
        var_dump($dt);
        $header = <<<HEADER
        enum bug_gh16013_enum {
        	BUG_GH16013_A = 1,
        	BUG_GH16013_B = 2,
        };
        struct bug_gh16013_int_struct {
        	int field;
        };
        struct bug_gh16013_callback_struct {
        	int8_t (*return_int8)(int8_t);
        	uint8_t (*return_uint8)(uint8_t);
        	int16_t (*return_int16)(int16_t);
        	uint16_t (*return_uint16)(uint16_t);
        	int32_t (*return_int32)(int32_t);
        	uint32_t (*return_uint32)(uint32_t);
        	float (*return_float)(float);
        	struct bug_gh16013_int_struct (*return_struct)(struct bug_gh16013_int_struct);
        	enum bug_gh16013_enum (*return_enum)(enum bug_gh16013_enum);
        };
        
        char bug_gh16013_return_char();
        bool bug_gh16013_return_bool();
        short bug_gh16013_return_short();
        int bug_gh16013_return_int();
        enum bug_gh16013_enum bug_gh16013_return_enum();
        struct bug_gh16013_int_struct bug_gh16013_return_struct();
        HEADER;
        $ffi = FFI::cdef($header, ffi_get_php_dll_name());
        $bug_gh16013_callback_struct = $ffi->new('struct bug_gh16013_callback_struct');
        $bug_gh16013_callback_struct->return_int16 = function($val) use($ffi) {
            $cdata = $ffi->new('int16_t');
            $cdata->cdata = $val;
            return $cdata;
        };
        var_dump(($bug_gh16013_callback_struct->return_int16)(-10000));
        mysqli_fetch_field($res);
        var_dump(filter_var($input, FILTER_VALIDATE_URL));
        var_dump(posix_setrlimit(POSIX_RLIMIT_NOFILE, 128, 128));
        test("http://te[st@2001:db8:3333:4444:5555:6666:1.2.3.4");
        $foo = new Foo;
        var_dump($foo);
        function f_12() {
            $g = $param->strA."\n".$param->strB."\n";
            print_r($g);
            $heredoc_str = <<<EOD
            %
            #$*&
            text & @()
            EOD;
            $str_arr = array(
              //double quoted strings
              "%",
              "#$*",
              "text & @()",
            
              //single quoted strings
              '%',
              '#$*',
              'text & @()',
            
              //heredoc string
              $heredoc_str
            );
            $replace_pairs = array("$" => "%", "%" => "$", "#*&@()" => "()@&*#");
            for($index = 0; $index < count($str_arr); $index++) {
              echo "-- Iteration $count --\n";
            
              $str = $str_arr[$index];  //getting the array element in 'str' variable
            
              //strtr() call in three args syntax form
              var_dump( strtr($str, $from, $to) );
            
              //strtr() call in two args syntax form
              var_dump( strtr($str, $replace_pairs) );
            
              $count++;
            }
            $str = $str_arr[$index];
            var_dump( strtr($str, $replace_pairs) );
            bar();
            $reflector = new ReflectionClass(C::class);
            $obj = new C();
            $reflector->resetAsLazyGhost($obj, function ($obj) use ($reflector) {
                try {
                    $reflector->resetAsLazyGhost($obj, function () { });
                } catch (Error $e) {
                    printf("%s: %s\n", $e::class, $e->getMessage());
                }
                try {
                    $reflector->resetAsLazyProxy($obj, function () { });
                } catch (Error $e) {
                    printf("%s: %s\n", $e::class, $e->getMessage());
                }
            
            });
        }
        var_dump(self::$x);
    }
    $dbh = @pg_connect($conn_str);
    $res = pg_query($dbh, 'SELECT test_notice()');
    $row = pg_fetch_row($res, 0);
    var_dump($row);
}
catch (PDOException $e) {
    var_dump($e->getCode());
}
var_dump($e->getCode());
