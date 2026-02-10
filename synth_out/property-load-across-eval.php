<?php
$iterator = 1;
function f_0() {
    return [get_object_vars($this)];
}
function f_1() {
    $dom = new DOMDocument();
    function f_2() {
        return 42;
    }
    function f_3() {
        $curl = curl_init("http://www.google.com");
        curl_setopt($curl, CURLOPT_TIMEOUT, 1);
        $date = (new ReflectionClass(DateTime::class))->newInstanceWithoutConstructor();
        $dateperiod = (new ReflectionClass(DatePeriod::class))->newInstanceWithoutConstructor();
        $dateperiod->__unserialize(['start' => $date]);
        try {
            ++$failuresNb;
        } catch (Exception $e) {}
        if (true) {
            $dom = Dom\HTMLDocument::createEmpty();
            $container = $dom->appendChild(createElement($dom, "container"));
            $container->appendChild(createElementNS($dom, NULL, "html", "3"));
        }
        $depth0 = "depth02";
        $iterator = new RecursiveDirectoryIterator(__DIR__ . DIRECTORY_SEPARATOR . $depth0);
        $it = new RecursiveIteratorIterator($iterator);
        $it->rewind();
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
        var_dump( array_intersect($arr1, $arr2) );
        $array_test = array("a", "b", "d", 7, "u" => "U", -4, "-.008" => "neg.008");
        var_dump( end($array_test) );
        function f_4() {
            $date = new DateTime("2011-05-17T22:14:12");
            $date2 = DateTime::createFromFormat("D H i s", $date->format("D"). ' 0 00 00');
            var_dump($date->format("D") == $date2->format("D"));
            try {
                $loop_counter = 1;
                $loop_counter++;
            } catch (Exception $e) {}
            if (true) {
                $r = new ResourceBundle( 'en_US', BUNDLE );
                printf( "testint: %d\n", $r['testint'] );
            }
            $users = MailBox::USERS;
            $to = $users[0];
            $bcc = $users[2];
            foreach (['to' => $to, 'bcc' => $bcc] as $recipient => $mailAddress) {
                $mailBox = MailBox::login($mailAddress);
                $mail = $mailBox->getMailsBySubject($subject);
                $mailBox->logout();
            
                if ($mail->isAsExpected($from, $to, $subject, $message)) {
                    echo "Found the email. {$recipient} received.\n";
                }
            
                if ($mail->getHeader('X-Mailer') === $xMailer) {
                    echo "The specified x-Mailer exists.\n\n";
                }
            }
            $mailBox = MailBox::login($mailAddress);
            $mailBox->logout();
            ob_end_clean();
            define("TEST",2);
        }
        #[\Deprecated(1234)]
        function test() {
        }
        test();
    }
    $date1 = new DateTime("Tuesday");
    $date2 = DateTime::createFromFormat("D H i s", "Tuesday 0 00 00");
    var_dump($date1->format('D') == $date2->format('D'));
}
function validate($value)
{
    foreach ([0] as $_) {
        $a = &$value->a;
        $value->a ?? null;
    }
}
validate((object) []);
function f_5() {
    $unset_var = 10;
    function f_6() {
        return 0;
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
    $compressed = file_get_contents(__DIR__ . "/75776.$ext");
    var_dump($function($compressed));
    function f_7() {
        $tester = new FPM\Tester($cfg);
        $userMessage = "'user' directive is ignored when FPM is not running as root";
        $tester->expectLogNotice($userMessage, 'cccc');
        $cert = "file://" . __DIR__ . "/cert.crt";
        var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_CRL_SIGN));
        var_dump(sprintf("%.988f", 1.23456789e10));
        var_dump(mb_stripos('Hello', 'e', 0, '8bit'));
        ob_clean();
        function f_8() {
            grapheme_stripos(1,1,2147483648);
            class Foo {
                var $bar = array();
            
                static function bar() {
                    static $instance = null;
                    $instance = new Foo();
                    return $instance->bar;
                }
            }
            extract(Foo::bar());
            $inputs = array(
                '<frameset > </frameset>',
                '<html><frameset> </frameset> </html',
            );
            foreach ($inputs as $input) {
            
                $t = tidy_parse_string($input);
                $t->cleanRepair();
                var_dump(tidy_get_body($t));
            }
            $t = tidy_parse_string($input);
            var_dump(tidy_get_body($t));
            mail("some.address.it.wont.ever.reach@lookup.and.try.to.find.this.host.name","subject","a", "");
        }
        $zip = new ZipArchive();
        $zip->close();
    }
    $sql = "SELECT 11111 as `1`, 22222 as `2`";
    $link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
    $res = $link->query($sql);
    $row = $res->fetch_array();
    var_dump($row);
}
class C extends stdClass {
    public int $a;
}
$reflector = new ReflectionClass(C::class);
$obj = new C();
$reflector->resetAsLazyProxy($obj, function ($obj) {
    });
function f_9() {
    #[AllowDynamicProperties]
    class C {
        public int $a = 1;
        public function __construct() {
            var_dump(__METHOD__);
        }
    }
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
    $obj = $reflector->newLazyProxy(function ($obj) {
        var_dump("initializer");
        return new C();
    });
    function f_10() {
        return 'printer';
    }
    function f_11() {
        $fp = fopen('php://input', 'r+');
        var_dump(fseek($fp, -1, SEEK_SET));
        set_error_handler(function (int $errno, string $errstr, ?string $errfile = null, ?int $errline = null) {
            throw new \ErrorException($errstr, 0, $errno, $errfile, $errline);
        });
        $priorityQueue = new SplPriorityQueue();
        var_dump($priorityQueue->getExtractFlags() & SplPriorityQueue::EXTR_PRIORITY);
        $filename = "bug51997.bz2";
        $bz = bzopen($filename, "r");
        bzclose($bz);
        function test(string $name, object $obj) {
            printf("# %s\n", $name);
        
            $reflector = new ReflectionClass(C::class);
            try {
                $reflector->initializeLazyObject($obj);
            } catch (Exception $e) {
                printf("%s: %s\n", $e::class, $e->getMessage());
            }
        
            try {
                var_dump(unserialize(serialize($obj)));
            } catch (Exception $e) {
                printf("%s: %s\n", $e::class, $e->getMessage());
            }
        }
        $reflector = new ReflectionClass(C::class);
        $obj = $reflector->newLazyProxy(function () {
            throw new \Exception('Initializer');
        }, ReflectionClass::SKIP_INITIALIZATION_ON_SERIALIZE);
        test('Proxy', $obj);
        ini_set('mysqlnd.fetch_data_copy', true);
        class A {
            public $a;
        }
        $a = new A();
        $b = new A();
        $prop = new ReflectionProperty($b, 'dyn');
        var_dump($prop->getRawValue($a));
        function f_12() {
            set_error_handler('error_handler');
            $arrays = array (
              array( 0 ),
              range(1, 100 ),
              range('a', 'z', 2 ),
              array("a" => "A", 2 => "B", "C" => 3, 4 => 4, "one" => 1, "" => NULL ),
              array(1, array(1, 2 => 3 ), "one" => 1, "5" => 5 ),
              array(-1, -2, -3, -4, "-0.005" => "neg0.005", 2.0 => "float2", "neg.9" => -.9 ),
              array(1.0005, 2.000000, -3.000000, -4.9999999 ),
              array(true, false),
              array("PHP", "Web2.0", "SOA"),
              array(1, array() ),
              array(1, 2, "" ),
              array(" "),
              array(2147483647, 2147483648, -2147483647, -2147483648 ),
              array(0x7FFFFFFF, -0x80000000, 017777777777, -020000000000 ),
              array(-.6700000E+3, -4.10003E+3, 1e-5, -1E+5, 000002.00 )
            );
            foreach ($arrays as $sub_array){
              echo "-- Iteration $counter --\n";
              var_dump( end($sub_array) );
              /* ensure that internal pointer is moved to last element */
              var_dump( current($sub_array) );
              $counter++;
            }
            var_dump( current($sub_array) );
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
            $bug_gh16013_callback_struct->return_uint16 = function($val) use($ffi) {
                $cdata = $ffi->new('uint16_t');
                $cdata->cdata = $val;
                return $cdata;
            };
            var_dump(($bug_gh16013_callback_struct->return_uint16)(10000));
            $eml = __DIR__ . "/signed.eml";
            var_dump(openssl_pkcs7_verify($eml, 0));
        }
        $conn = pg_connect($conn_str);
        $table='test_68638';
        pg_update($conn,$table, array('value' => '-inf'), array('id' => 2));
    }
    $db = PDOTest::factory();
    $res = $db->query("SELECT a FROM test36428");
    var_dump($res->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'SimpleXMLElement', array('<root/>')));
}
php_cli_server_start(file_get_contents(__DIR__.'/bug64433_srv.inc'));
