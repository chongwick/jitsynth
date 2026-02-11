<?php
#[AllowDynamicProperties]
class C {
    public $a = 1;
}
class cr {
    private $priv_member;
    function __construct($val) {
        $this->priv_member = $val;
    }
    static function comp_func_cr($a, $b) {
        if ($a->priv_member === $b->priv_member) return 0;
        return ($a->priv_member > $b->priv_member) ? 1 : -1;
    }
    static function comp_func_cr2($a, $b) {
        echo ".";
        if ($a->priv_member === $b->priv_member) return 0;
        return ($a->priv_member < $b->priv_member) ? 1 : -1;
    }
    function dump() {
        echo $this->priv_member . "\n";
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
class foo
{
  function __toString() {
    return "Object";
  }
}
function throw_exc() {
  throw new Exception('TEST_EXCEPTION');
}
class Test {

  public function __construct() {
    echo 'Constr' ."\n";
  }

  public function __destruct() {
    echo 'Destr' ."\n";
  }

}
class testObject extends ArrayObject {
    protected $test;

    public function getTest() {
        return $this->test;
    }

    public function setTest($test) {
        $this->test = $test;
    }
}
class A {

    private $mysqli;

    public function __construct() {
        global $user, $host, $passwd, $db, $port, $socket;
        $this->mysqli = new mysqli($host, $user, $passwd, $db, $port, $socket);
        $result = $this->mysqli->query("SELECT NOW() AS my_time FROM DUAL");
        $row = $result->fetch_object();
        echo $row->my_time."<br>\n";
        $result->close();
    }

    public function __destruct() {
        $this->mysqli->close();
    }
}
function f_0() {
    return true;
}
function f_1() {
    $rounds = [
        'disp', // Correct.
        3, // Error, so the old callback is kept, and will be used in the call that follows the caught error.
        null, // No callback. Hopefully this clears everything.
        'wouldAnyoneNameAFunctionThatWay', // So this one will crash and *no output will follow*.
    ];
    _MIME_TYPE);
    var_dump($fi->file($f));
}
function f_2() {
    $db = PDOTest::factory();
    $res = $db->query("SELECT a FROM test36428");
    $c = new C();
    $c->dyn = 1;
    $before = memory_get_usage();
    $code = <<<'PHP'
    /* Receive */
    $content = trim(file_get_contents("php://input")) . PHP_EOL;
    PHP;
    $x = 'abc';
    foreach ($offsets as $offset) {
        $dimension = &$offset;
        $container = false;
        $error = 'false[&' . zend_test_var_export($dimension) . '] has different outputs' . "\n";
    
        include $var_dim_filename;
        $varOutput = ob_get_contents();
        ob_clean();
        $varOutput = str_replace(
            [$var_dim_filename],
            ['%s'],
            $varOutput
        );
    
        if (
            !preg_match($EXPECTED_OUTPUT_VALID_OFFSETS_REGEX, $varOutput)
            && !preg_match($EXPECTED_OUTPUT_INVALID_OFFSETS_REGEX, $varOutput)
            && !preg_match($EXPECTED_OUTPUT_FLOAT_OFFSETS_REGEX, $varOutput)
            && $varOutput !== EXPECTED_OUTPUT_RESOURCE_STDERR_OFFSETS
        ) {
            file_put_contents(__DIR__ . DIRECTORY_SEPARATOR . "debug_false_container_{$failuresNb}.txt", $varOutput);
            ++$failuresNb;
            $failures[] = $error;
        }
        ++$testCasesTotal;
    }
    $dimension = &$offset;
    $error = 'false[&' . zend_test_var_export($dimension) . '] has different outputs' . "\n";
    while (true) {
        break;  // avoid infinite loop
        $now = new DateTimeImmutable('2022-10-10 08:41:54.534620', new DateTimeZone('UTC'));
        $p = '00f8000ae45b2dacb47dd977d58b719d097bdf07cb2c17660ad898518c08' .
            '1a61659a16daadfaa406a0a994c743df5eda07e36bd0adcad921b77432ff' .
            '24ccc31e782d647e66768122b578857e9293df78387dc8b44af2a4a3f305' .
            '1f236b1000a3e31da489c6681b0031f7ec37c2e1091bdb698e7660f135b6' .
            '996def90090303b7ad';
        $h = <<<'EOD'
        void (*bug_gh9090_void_none_ptr)();
        void (*bug_gh9090_void_int_char_ptr)(int, char *);
        void (*bug_gh9090_void_int_char_var_ptr)(int, char *, ...);
        void (*bug_gh9090_void_char_int_ptr)(char *, int);
        int (*bug_gh9090_int_int_char_ptr)(int, char *);
        
        void bug_gh9090_void_none();
        void bug_gh9090_void_int_char(int i, char *s);
        void bug_gh9090_void_int_char_var(int i, char *fmt, ...);
        EOD;
        $ffi = FFI::cdef($h);
        $func_argvs = [
            [ 'bug_gh9090_void_none',         [ ]                           ],
            [ 'bug_gh9090_void_int_char',     [ 42, "hello" ]               ],
            [ 'bug_gh9090_void_int_char_var', [ 42, "d=%d s=%s", -1, "ok" ] ],
        ];
        foreach ($func_argvs as $func_argv) {
                [ $func, $argv ] = $func_argv;
        
                $ok = true;
                try {
                    $ffi->$func_ptr = $ffi->$func;
                    call_user_func_array($ffi->$func_ptr, $argv);
                } catch (FFI\Exception $e) {
                    $ok = false;
                }
        
                printf("%-36s = %-36s ? %s\n", $func_ptr, $func, $ok ? 'yes' : 'no');
            }
        [ $func, $argv ] = $func_argv;
        $ffi->$func_ptr = $ffi->$func;
        $b = array("0.2" => new cr(9), "0.5" => new cr(22), 0 => new cr(3), 1 => new cr(4), 2 => new cr(-15),);
        $dbConnection = new Com('ADODB.Connection');
        $server = new soapserver(null,array('uri'=>"http://testuri.org"));
        $im = imagecreate(800, 800);
        $black = imagecolorallocate($im, 0, 0, 0);
        setStyleAndThickness($im, $black, 4);
        $object1 = new foo();
        $array_object = array();
        $array_object[0] = &$object1;
        $compression = [
            'gz' => ['zlib.deflate', 'gzinflate'],
            'bz2' => ['bzip2.compress', 'bzdecompress']
        ];
        $T =new Test(throw_exc());
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
        $a = [1,2,3];
        $f_base = "67647私はガラスを食べられます.mov";
        $f = __DIR__ . DIRECTOR
        _SEPARATOR . $f_base;
        
        /* Streams mb path sup;
        $obj = new testObject();
        $obj2 = unserialize(serialize($obj));
        var_dump($obj2->getTest());
        $depth0 = "depth02";
        $iterator = new RecursiveDirectoryIterator(__DIR__ . DIRECTORY_SEPARATOR . $depth0);
        $it = new RecursiveIteratorIterator($iterator);
        $url = ""
            . "php://filter/read="
            . urlencode("convert.iconv.ISO-8859-15/UTF-8")
            . '|' . urlencode("string.rot13")
            . '|' . urlencode("string.rot13")
            . '|' . urlencode("convert.iconv.UTF-8/ISO-8859-15")
            . "/resource=data://text/plain,foob%E2r";
        );
        if (!$reader->open($fil
        ttribute('num');
                    echo $reade;
        $res = [];
        $formatter = new \NumberFormatter('en', \NumberFormatter::DECIMAL);
        $value = $formatter->parse('2147483647', \NumberFormatter::TYPE_INT32);
        $empty_webp = __DIR__ . "/gh13774.webp";
        foreach ($offsets as $offset) {
            $dimension = &$offset;
            $container = false;
            $error = 'false[&' . zend_test_var_export($dimension) . '] has different outputs' . "\n";
        
            include $var_dim_filename;
            $varOutput = ob_get_contents();
            ob_clean();
            $varOutput = str_replace(
                [$var_dim_filename],
                ['%s'],
                $varOutput
            );
        
            if (
                !preg_match($EXPECTED_OUTPUT_VALID_OFFSETS_REGEX, $varOutput)
                && !preg_match($EXPECTED_OUTPUT_INVALID_OFFSETS_REGEX, $varOutput)
                && !preg_match($EXPECTED_OUTPUT_FLOAT_OFFSETS_REGEX, $varOutput)
                && $varOutput !== EXPECTED_OUTPUT_RESOURCE_STDERR_OFFSETS
            ) {
                file_put_contents(__DIR__ . DIRECTORY_SEPARATOR . "debug_false_container_{$failuresNb}.txt", $varOutput);
                ++$failuresNb;
                $failures[] = $error;
            }
            ++$testCasesTotal;
        }
        $dimension = &$offset;
        $bert = "file://" . __DIR__ . "/bug41033.pem";
        var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_SERVER));
        $varOutput = ob_get_contents();
        $f = __DIR__."/data/test.txt.gz";
        $replace_pairs = array("$" => "%", "%" => "$", "#*&@()" => "()@&*#");
        $dt = DateTime::createFromFormat('Y-m-d!', '2011-02-02');
        $date2 = new DateTime("Fri 19 November 2011");
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
        $strings = array(
          "<html>Hello<br />world</html>",
          "<html><br /></html>",
          "<html>\nHello\r\nworld\r</html>",
          "<html>\n \r\n \r</html>",
        );
        catch (Error $e) {
            printf("%s: %s\n", $e::class, $e->getMessage());
        }
        catch (Error $e) {
            printf("%s: %s\n", $e::class, $e->getMessage());
        }
        printf("%s: %s\n", $e::class, $e->getMessage());
        $rows = array();
        $a = "lest";
        $a[0] = "f";
        $EXPECTED_OUTPUT_INVALID_OFFSETS_REGEX = '/^' . expectf_to_regex(EXPECTED_OUTPUT_INVALID_OFFSETS) . '$/s';
        $ret = $y;
        $heredoc = <<<EOT
        hello world
        EOT;
        $GLOBALS['b'] = 2;
        $b = &$GLOBALS['b'];
        $c = $b;
        $filename = __DIR__ . '/bug77432.phar';
        unlink($filename);
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
        $responses = array(
            "data://text/plain,HTTP/1.1 200 Some very long reason-phrase to test that this is properly handled by our code without adding a new header like  Bad: Header\r\nGood: Header\r\n\r\nBody",
            "data://text/plain,HTTP/1.1 200 \r\nGood: Header\r\n\r\nBody",
        );
        $iterator = 1;
        $pass	= PDO_MYSQL_TEST_PASS;
        $heredoc = <<<EOT
        Hello world
        EOT;
        $total = 10000;
        $ch = curl_init("https://localhost/username");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $dom = new DOMDocument;
        $oldcwd = getcwd();
        $dom = new DOMDocument();
        $A = new A();
        $php = getenv('TEST_PHP_EXECUTABLE_ESCAPED');
        $cmd = "$php -n -d memory_limit=4M -a \"".__DIR__."\"/bug40236.inc";
        $arg = new Stdclass();
        $arg->name = array();
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
        $body->setAttributeNS("http://www.w3.org/2000/xmlns/", "xmlns:a", "urn:another");
        $db = PDOTest::factory();
        $driver = $db->getAttribute(PDO::ATTR_DRIVER_NAME);
        $now = new DateTimeImmutable();
        $containers = array();
        $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
        $stmt = $pdo->prepare("select :1 n union all select :1 + 1 union all select :1 + 2 union all select :1 + 3");
        $arg = new Stdclass();
        $a = new A;
        $im = imagecreatetruecolor(1, 1);
        imagescale($im, 1, 1, IMG_BICUBIC_FIXED);
        $dest = dirname(realpath(__FILE__)) . '/bug27582.png';
        $im2 = imagecreatefrompng($dest);
        $col = imagecolorat($im2, 5, 5);
        $header = <<<HEADER
        extern int *(*bug79177_cb)(void);
        void bug79177(void);
        HEADER;
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
        $EXPECTED_OUTPUT_INVALID_OFFSETS_REGEX = '/^' . expectf_to_regex(EXPECTED_OUTPUT_INVALID_OFFSETS) . '$/s';
        $header = <<<HEADER
        extern int *(*bug79177_cb)(void);
        void bug79177(void);
        HEADER;
        $ffi = FFI::cdef($header);
        $db = PDOTest::factory();
        $res = $db->query("SELECT a FROM test36428");
        var_dump($res->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'SimpleXMLElement', array('<root/>')));
        $date = (new ReflectionClass(DateTime::class))->newInstanceWithoutConstructor();
        $fp = fopen (__FILE__, "r");
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
        var_dump( array_unshift($temp_array, $var) );
        var_dump($i=1);
        var_dump(gc_collect_cycles());
        $sql = "SELECT 11111 as `1`, 22222 as `2`";
        $link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
        $res = $link->query($sql);
    }
}
rename("phar://a.phar/x", "phar://a.phar/y");
