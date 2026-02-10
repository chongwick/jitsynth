<?php
$thirty = M_PI / 6.0;
$context = stream_context_create(['dummy' => ['foo' => 'bar']]);
$cert = "file://" . __DIR__ . "/cert.crt";
$rcrt = openssl_x509_read($cert);
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
$ffi = FFI::cdef($header, 'php_zend_test.dll');
$db = PDOTest::factory();
function f_0() {
    $t = new stdClass;
    return $t;
}
for ($i_1 = 0; $i_1 < 10; $i_1++) {
    $tz_aus = new DateTimeZone('Australia/Sydney');
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        $list = [];
        );
        if (!$reader->open($fil;
        $various_arrays = array (
          array(5 => 55,  66, 22, 33, 11),
          array ("a" => "orange",  "banana", "c" => "apple"),
          array(1, 2, 3, 4, 5, 6),
          array("first", 5 => "second", "third"),
          array(1, 1, 8 => 1,  4 => 1, 19, 3 => 13),
          array('bar' => 'baz', "foo" => 1),
          array('a'=>1,'b'=>array('e'=>2,'f'=>3),'c'=>array('g'=>4),'d'=>5),
        );
        $quote_char_string = <<<EOT
        <html>&lt; This's a string with quotes:
        "strings in double quote" &amp;
        'strings in single quote' &quot;
        this\line is &#039;single quoted&#039; /with\slashes </html>
        EOT;
        $lazy = true;
        $mem = $lazy ? 0 : 1;
        $host = PHP_CLI_SERVER_HOSTNAME;
        $datePre = DateTime::createFromFormat("!D d M Y", "Fri 17 may 2011");
        printf("printf test 11: 123456789012345678901234567890\n");
        $dbh = @pg_connect($conn_str);
        _set_lc_messages($dbh);
        $regex = '/[a-z]/';
        $subject = 'string';
        var_dump(preg_match_all($regex, $subject, 'test'));
        $file_handle = fopen(__FILE__, "r");
        $dir_handle = opendir( __DIR__ );
        $resources = array($file_handle, $dir_handle);
        var_dump( end($resources) );
        $tempstring = "abcdefghjklmnpqrstuvwxyz";
        var_dump(sprintf("%s", $tempstring, $tempstring, $tempstring));
        putenv('REDIR_TEST_DIR='.__DIR__ . '/../../pdo/tests/');
        $cert = "-----BEGIN CERTIFICATE-----
        MIIDXDCCAkSgAwIBAgIKq/f5U3FzthdKUzANBgkqhkiG9w0BAQUFADBcMRIwEAYD
        VQQDEwlzZXRhcGRmLWExCTAHBgNVBAoTADEJMAcGA1UECxMAMSMwIQYJKoZIhvcN
        AQkBFhRzdXBwb3J0QHNldGFzaWduLmNvbTELMAkGA1UEBhMCREUwHhcNMTUwOTA4
        MDkzNDExWhcNMjAwOTA4MDkzNDExWjBcMRIwEAYDVQQDEwlzZXRhcGRmLWExCTAH
        BgNVBAoTADEJMAcGA1UECxMAMSMwIQYJKoZIhvcNAQkBFhRzdXBwb3J0QHNldGFz
        aWduLmNvbTELMAkGA1UEBhMCREUwggEiMA0GCSqGSIb3DQEBAQUAA4IBDwAwggEK
        AoIBAQCkmTLvUIYfqAKC1CHVgABlemrFIVRm4JGeB0jIGofyrm3yVwR4YcK0eUmt
        /0nbFfsFsU0/C9dXKZYD42t5YpLFsj666Z1EoU1CfSIW2bf0HaWVJ+oNT5twS3dv
        RTzAcnPM44GxO4y6GUW6un0/bT/MZbFKbb3NI1L0mwY7EoqUXR68XxuHqWETaslm
        Sbp1XvbLsJjgV9X3ihi7JC7A9kEzrKh+RBsXEXwlSv5JO2TUdwq9P4EbjqvgiaV1
        vFNAArioX5pIUIm9ahAm8d7jjW6DFfV798rTzaQ3GJs0yC3UD6xhmbTbdC/D9Pot
        8RGu89Fx6E+O5j4LwGH4kiYjgvYZAgMBAAGjIDAeMA8GCSqGSIb3LwEBCgQCBQAw
        CwYDVR0PBAQDAgOYMA0GCSqGSIb3DQEBBQUAA4IBAQBCA8iXz7zxAmCWNZ0faiLm
        aKw8u2PUq+EPKrGKc9Q70Ksw/e/EHvWrghFzmu5MOZRn/QIWq++sbbc8eOiaRDE8
        lWCW596FLW4habXKw0sjDNcyEBArPgDp17O6NgHqI2U1KL1P2Y40e0YH2BWxNS+f
        pmWZekjiC6jfId2JGsyPZUTX4USwthG4dFX0/BWYg+K7kXvQzMobes2NxW3Iqn8h
        FUNgraCzlQMSfE2gwAMSUXTJubUGorj4LFYSiLIIJvf6KlmuR5uOIi5lSjSeZf5E
        FLEHVhrz3o2icUeyb1K1BTAQRZ/H3GZ0QpgqSK5vmuV9C+rzezQMoy4/8UUnNPMt
        -----END CERTIFICATE-----
        ";
        $pkey = "-----BEGIN PRIVATE KEY-----
        MIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQCkmTLvUIYfqAKC
        1CHVgABlemrFIVRm4JGeB0jIGofyrm3yVwR4YcK0eUmt/0nbFfsFsU0/C9dXKZYD
        42t5YpLFsj666Z1EoU1CfSIW2bf0HaWVJ+oNT5twS3dvRTzAcnPM44GxO4y6GUW6
        un0/bT/MZbFKbb3NI1L0mwY7EoqUXR68XxuHqWETaslmSbp1XvbLsJjgV9X3ihi7
        JC7A9kEzrKh+RBsXEXwlSv5JO2TUdwq9P4EbjqvgiaV1vFNAArioX5pIUIm9ahAm
        8d7jjW6DFfV798rTzaQ3GJs0yC3UD6xhmbTbdC/D9Pot8RGu89Fx6E+O5j4LwGH4
        kiYjgvYZAgMBAAECggEABO4JOGF4KOvQanB11HYNXPy4BLA5Pc0RU3M6pvKjen1m
        sdzRF5Vu/laJIkbchI0xm+Op8X7Wa+gFFBf8RLIS/QyYBCNh2Fe/74M9sYNDFxLJ
        vjBIOm6VVF1QRhMD7SwoY303adJjpkHCRMPX4z3PjLzJfPYROpsJnaWkf8GwCJ4+
        kufOhYcE8ekuLX7EzXFU74Uo0OnMEhMJgiAjlHhC21YLkgLoGq45sdktVgvD6sds
        7BcmH6oUCDCJ8wxUVM1+Ks1D3vKHfeAhCFHvj9M/lf5OWylhmQh4CQf+NMDNsAc6
        mXNIzUvZEgs/PJpd3SymHchf60m6faJtGv43GsdsgQKBgQDUx8t649O/vGRI26t4
        4XrzVC2w5271UlhFaRiH03BrV+pECVoH4bw+ZIUuGke2xe+LrNkhMNJSGcbB0WDa
        Jes+4Gf++AuSXRvMo+xHenfgUWQqYHJPkh5q6gknZ2YDfikFNLdqApXvp0m+FaVP
        +F/2HMjQfTITQgkAiEn45s4agQKBgQDGCAZkIUcdyXQTplLE0Zx1/uiTBrQGyzsb
        cDgAQIHt19wIRjoGOFatAj6TQ5gUj9Remn12v6d5Wi02i7hlu8V6O1VXLGqqeQ27
        0MHBXzrFBVljOz96D7VP5Xx0DB1cGMbtg5ivjd91OUVrwC7fbXE9sfOI1FqlTb7p
        6xi9Wl+fmQKBgGdzR/vUfqPOvVcq7gBUaAmb2KcUrj65rU753MJUy2h1EuHHRi1k
        07fl+VZD0rALJf7bp6laajcebyLWYGdPXkNwqT8ua7naaOSiogLSiSvXhoKP56PG
        H+HNLWwp+lAia2Erky0IWstsow62yWvLDyTCM+QhqlHwnh3TJVvNI1GBAoGAUl+y
        MOJ6z5Ql2aqc0UwT1i1Tlxz5s73D93Tlho1Ovp3E5Bg6OK4kt9CwMNe0IhF2GGgQ
        +l1cj6kIF6Fk8cR6r46QwDM0p3a1VMPQZNx0+NFxzkot7FsuY26lJyyG5fFUhiXw
        VE4ifoN1Mg3+MWg3657jG66hihNd77WgU9uM3TkCgYEAypuvVrfFrrtXnbEUcBHq
        mguKumn9miD9DPb6gi8ZaKOddGzw+qFPukiqi7rM3oRMg02evfK/VQC87Gmev663
        RV9sQOlB9gNlMOOw/0R3ABEWDoSRCcrLhb6Z5Y72WVnZvpTPO0cDw2i1hyaEM6d+
        2WR7c6FhRCLxG0DObEOfiO0=
        -----END PRIVATE KEY-----
        ";
        $tmpFileOut = tempnam(sys_get_temp_dir(), 'test');
        $tmpFileOut2 = tempnam(sys_get_temp_dir(), 'test');
        openssl_pkcs7_decrypt($tmpFileOut, $tmpFileOut2, $cert, $pkey);
        $arrays = array(
          array(),
          array(NULL),
          array(null),
          array(true),
          array(""),
          array(''),
          array(array(), array()),
          array(array(1, 2), array('a', 'b')),
          array(1 => 'One'),
          array("test" => "is_array"),
          array(0),
          array(-1),
          array(10.5, 5.6),
          array("string", "test"),
          array('string', 'test')
        );
        foreach ($arrays as $var_array ) {
          echo "-- Iteration $loop_counter --\n"; $loop_counter++;
          var_dump( is_array ($var_array) );
        }
        var_dump( is_array ($var_array) );
        $bert = "file://" . __DIR__ . "/bug41033.pem";
        $cpca = __DIR__ . "/san-cert.pem";
        var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_CLIENT, array($cpca)));
        $empty_webp = __DIR__ . "/gh13774.webp";
        $im = imagecreatefromwebp($empty_webp);
        var_dump($im);
        $str = <<<EOD
        us
        ing heredoc string
        EOD;
        var_dump( rtrim($str, "ing") );
        $dom = Dom\HTMLDocument::createEmpty();
        $container = $dom->appendChild(createElement($dom, "container"));
        $container->appendChild(createElementNS($dom, NULL, "html", "3"));
        if (true) {
            class Box {
                public ?Test $value;
            }
            global $box;
            function test($box) {
                var_dump($box->value = new Test);
            }
            $box = new Box();
            test($box);
            $fp = php_cli_server_connect();
            fclose($fp);
        }
    }
    if (true) {
        var_dump(soundex("Lloyd"));
        var_dump(get_class_vars(C::class));
    }
}
for ($i_3 = 0; $i_3 < 10; $i_3++) {
    var_dump(filter_var("?><!@#$%^&*()}{~Qwertyuilfdsasdfgmnbvcxcvbn", FILTER_SANITIZE_ENCODED, FILTER_FLAG_ENCODE_HIGH));
    if (true) {
        printf("# Proxy:\n");
    }
}
for ($i_4 = 0; $i_4 < 10; $i_4++) {
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
    $client = new SoapClient(__DIR__."/bug29061.wsdl", array("exceptions"=>0));
    $empty_string = <<<EOT
    EOT;
    $blank_line = <<<EOT
    
    EOT;
    $multiline_string = <<<EOT
    <html>Roy&#039;s height &gt; Sam&#039;s height
    13 &lt; 25
    1111 &amp; 0000 = 0000
    &quot;This is a double quoted string&quot;
    EOT;
    $diff_whitespaces = <<<EOT
    <html>Roy&#039;s height\r &gt; Sam\t&#039;s height
    1111\t\t &amp; 0000\v\v = \f0000
    &quot; heredoc\ndouble quoted string. with\vdifferent\fwhite\vspaces&quot;
    EOT;
    $numeric_string = <<<EOT
    <html>11 &lt; 12. 123 string 4567
    &quot;string&quot; 1111\t &amp; 0000\t = 0000\n;
    EOT;
    $quote_char_string = <<<EOT
    <html>&lt; This's a string with quotes:
    "strings in double quote" &amp;
    'strings in single quote' &quot;
    this\line is &#039;single quoted&#039; /with\slashes </html>
    EOT;
    $res_heredoc_strings = array(
      //heredoc strings
      $empty_string,
      $blank_line,
      $multiline_string,
      $diff_whitespaces,
      $numeric_string,
      $quote_char_string
    );
    for($index =0; $index < count($res_heredoc_strings); $index ++) {
      echo "-- Iteration $count --\n";
      var_dump( htmlspecialchars_decode($res_heredoc_strings[$index]) );
      $count++;
    }
    var_dump( htmlspecialchars_decode($res_heredoc_strings[$index]) );
    $w = new Phar(__DIR__ . "/bug69279.phar.zip");
    $w->compressFiles(Phar::GZ);
    function test() {
        if (!stream_wrapper_register('foo', \Wrapper::class)) {
            throw new \Exception('Could not register stream wrapper');
        }
    
        $dir = opendir('foo://bar');
    
        if (!stream_wrapper_unregister('foo')) {
            throw new \Exception('Could not unregister stream wrapper');
        }
    
        $wrapper = stream_get_meta_data($dir)['wrapper_data'];
        if (!$wrapper instanceof Wrapper) {
            throw new \Exception('Wrapper is not of expected type');
        }
    
        closedir($dir);
        unset($dir);
    }
    test();
    $dom = new DOMDocument;
    var_dump($dom->getElementById('x')?->nodeName);
    $link = mysqli_init();
    $link->set_charset('sjis');
    $cert = "file://" . __DIR__ . "/cert.crt";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_NS_SSL_SERVER, array($cpca)));
    $filename = __DIR__ . '/bug77432.phar';
    $phar = new Phar($filename);
    $phar->startBuffering();
    ini_set("intl.error_level", E_WARNING);
    function test(string $name, object $obj) {
        printf("# %s\n", $name);
    
        $c = new C();
        $c->dyn = 1;
        $propReflector = new ReflectionProperty($c, 'dyn');
    
        try {
            $propReflector->setRawValueWithoutLazyInitialization($obj, 'test');
        } catch (\ReflectionException $e) {
            printf("%s: %s\n", $e::class, $e->getMessage());
        }
    }
    printf("# %s\n", $name);
    $db = MySQLPDOTest::factory();
    foreach ($db->query('DESCRIBE test_pecl_bug_5200 phase')->fetchAll(PDO::FETCH_ASSOC) as $row) {
        print_r($row);
    }
    print_r($row);
    $ch = curl_init();
    curl_close($ch);
    $var = -PHP_INT_MAX - 1;
    range($var,1,$var);
}
for ($i_5 = 0; $i_5 < 10; $i_5++) {
    $iterator = 1;
    $db = PDOTest::factory();
    global $box;
    $box->value = null;
    function test(string $input) {
        var_dump(filter_var($input, FILTER_VALIDATE_URL));
    }
    test("http://test@127.0.0.1");
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_SERVER));
    $text = 'This is an ‘example’ of using DOM splitText';
    $st
    rt = 30;
    $le
    gth = 3;
    
    $d
     = new DOMDocument('1.0', 'UTF-8');
    $no
    e = $dom->createTextNode($text);
    $do
    ched = $node->splitText($start);
    $ma
    ched->splitText($length);
    pri;
    var_dump(filter_var("", FILTER_SANITIZE_ENCODED));
    $file_handle = fopen(__FILE__, "r");
    $values = array (
      /* integers */
      0,  // zero as argument
      000000123,  //octal value of 83
      123000000,
      -00000123,  //octal value of 83
      -12300000,
      0xffffff,  //hexadecimal value
      123456789,
      1,
      -1,
    
      /* floats */
      -0.0,
      +0.0,
      1.234,
      -1.234,
      -2.000000,
      2.0000000,
      -4.0001e+5,
      4.0001E+5,
      6.99999989,
      -.5,
      .567,
      -.6700000e-3,
      -.6700000E+3,
      1E-5,
      -1e+5,
      1e+5,
      1E-5,
    
      /* strings */
      "",
      '',
      " ",
      ' ',
      "0",
      "\0",
      '\0',
      "\t",
      '\t',
      "PHP",
      'PHP',
      "1234\t\n5678\n\t9100\rabcda\x0000cdeh\0stuv",  // strings with escape chars
    
      /* boolean */
      TRUE,
      FALSE,
      true,
      false,
    
      /* arrays */
      array(),
      array(NULL),
      array(true),
      array(""),
      array(''),
      array(array(1, 2), array('a', 'b')),
      array("test" => "is_array", 1 => 'One'),
      array(0),
      array(-1),
      array(10.5, 5.6),
      array("string", "test"),
      array('string', 'test'),
    
      /* resources */
      $file_handle
    );
    foreach( $values as $value ) {
      echo "-- Iteration $counter --\n";
      debug_zval_dump( $value );
      $counter++;
    }
    debug_zval_dump( $value );
    $result = get_declared_classes();
    var_dump(array_search('foo', $result));
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
    $references[$idx]['id_copy_mod']= $rows[$i]['id'] + 0;
    var_dump(session_cache_expire());
    $array = array('f' => "first", "s" => 'second', 1, 2.222);
    $temp_array = $array;
    var_dump($temp_array);
    $instructorsAdmin = Test::INSTRUCTORS_ADMIN;
    $data = [
        Test::COURSES_ADMIN,
        Test::COURSES_REPORTING_ACCESS,
        Test::BUNDLES_ADMIN,
        Test::USERS_ADMIN,
        Test::B2B_DASHBOARD_ACCESS,
        Test::B2B_DASHBOARD_ACCESS,
        Test::INSTRUCTORS_ADMIN,
        &$instructorsAdmin,
        Test::COUPONS_ADMIN,
        Test::AUTHENTICATED,
    ];
    $data = array_unique($data, flags: SORT_REGULAR);
    var_dump($data);
    $dt = DateTime::createFromFormat('Y-m-d!', '2011-02-02');
    var_dump($dt);
    $data = array('first', 'fifth', 'second', 'forth', 'third');
    $sort = array(1, 5, 2, 4, 3);
    array_multisort($sort, $data);
    var_dump(filter_var("", FILTER_SANITIZE_ENCODED, FILTER_FLAG_ENCODE_LOW));
    $codes = array(200, 201, 204, 301, 302, 303, 304, 305, 307, 404, 500);
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
    var_dump($body->lookupNamespaceURI("a"));
    function test() {
        byVal(C[0]);
        try {
            byRef(C[0]);
        } catch (Error $e) {
            echo $e->getMessage(), "\n";
        }
    }
    test('y');
    $dom = Dom\XMLDocument::createFromString(<<<XML
    <root>
        <test1 xml:id="x"/>
        <test2 xml:id="x"/>
    </root>
    XML);
    var_dump($dom->getElementById('x')?->nodeName);
    $dom = Dom\HTMLDocument::createFromString(<<<HTML
    <!DOCTYPE html>
    <html>
        <body>
            <svg xmlns="http://www.w3.org/2000/svg" height="1"></svg>
            <math></math>
        </body>
    </html>
    HTML);
    var_dump($dom->lookupNamespaceURI("xml"));
    $dir_handle = opendir( __DIR__ );
    closedir( $dir_handle );
    $fp = tmpfile();
    rewind($fp);
}
for ($i_6 = 0; $i_6 < 10; $i_6++) {
    $reflector = new ReflectionClass(DateTime::class);
    $obj = $reflector->newLazyGhost(function ($obj) {
            var_dump("initializer");
            $obj->__construct();
        });
    $obj = $reflector->newLazyProxy(function ($obj) {
            var_dump("initializer");
            $obj->__construct();
        });
    for ($i_7 = 0; $i_7 < 10; $i_7++) {
        $fn = "bug71263.bz2";
        $r = fopen($fn, "r");
        $s = fread($r, 100);
        $a = $b = $c = 2;
        $reflection = new ReflectionClass('\DateTimeImmutable');
        $immutable = $reflection->newInstanceWithoutConstructor();
        $mutable = \DateTime::createFromInterface($immutable);
        for ($i_8 = 0; $i_8 < 10; $i_8++) {
            $str = <<<EOD
            us
            ing heredoc string
            EOD;
            $php = getenv('TEST_PHP_EXECUTABLE_ESCAPED');
            $this->a[] = new B(2);
            class B implements Serializable
            {
                public $b;
            
                public function __construct($c)
                {
                    $this->b = new C($c);
                }
            
                public function serialize()
                {
                    return serialize(clone $this->b);
                }
            
                public function unserialize($data)
                {
                    $this->b = unserialize($data);
                }
            };
            $args = ["-d", "extension_dir=" . ini_get("extension_dir"), "-d", "extension=" . (substr(PHP_OS, 0, 3) == "WIN" ? "php_" : "") . "soap." . PHP_SHLIB_SUFFIX];
            function test(string $name, object $obj) {
                printf("# %s:\n", $name);
            
                var_dump($obj);
                var_dump(@$obj->dynamic++);
                var_dump($obj);
            }
            printf("# %s:\n", $name);
            set_error_handler('error_handler');
            $empty_webp = __DIR__ . "/gh13774.webp";
            $im = imagecreatefromwebp($empty_webp);
            var_dump($im);
            function test(string $input) {
                var_dump(filter_var($input, FILTER_VALIDATE_URL));
            }
            test("http://t[est@[::1]");
            $im = imagecreatetruecolor(1, 1);
            imagescale($im, 1, 0, 0);
        }
    }
}
