<?php
class test
{
  var $t = 10;
  function __toString()
  {
    return "testObject";
  }
}
class SomeClass implements JsonSerializable {
    public function jsonSerialize(): mixed {
        return [get_object_vars($this)];
    }
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
$start_key = 0;
$index_array = array (1, 2, 3);
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
$a = [1,2,3];
$notDefined[$i] = 'test';
function f_0() {
    return '';
}
function f_1() {
    $tz_us = new DateTimeZone('America/Los_Angeles');
    $key_compare_func = 'compare_function';
    $certificateGenerator = new CertificateGenerator();
    $a = 'ok';
    if (true) {
        $filename = __DIR__ . '/bug77432.phar';
        $phar = new Phar($filename);
        $phar->startBuffering();
        $conn = pg_connect($conn_str);
        $table='test_68638';
        pg_query($conn, "CREATE TABLE $table (id INT, value FLOAT)");
    }
    if (!true) {
        $bar = new DateTime();
        $args = [1, &$bar];
        $function = function (int &$foo, DateTimeInterface &$bar) {};
        (new ReflectionFunction($function))->invokeArgs($args);
        phpinfo(INFO_MODULES);
    }
}
function f_2() {
    $addr = '::1';
    if (true) {
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
        $tester->expectLogStartNotices();
    }
    if (!true) {
        $cert = "file://" . __DIR__ . "/cert.crt";
        var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_CLIENT));
    }
}
function f_3() {
    if (true) {
        public function getHash($object): string { return get_class($object); }
        return get_class($object);
    }
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
    if (true) {
        $im = imagecreatetruecolor(1, 1);
        imagescale($im, 1, 0, 0);
    }
    if (!true) {
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
        var_dump($ffi->bug_gh16013_return_short());
    }
}
function f_4() {
    if (true) {
        return true;
    }
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
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_OCSP_HELPER, array($cpca)));
}
function f_5() {
    if (true) {
        return 5;
    }
    $headers = ['Host: okey.com'];
    $httpContext = [
        'http' => [
            'protocol_version'	=> '1.1',
            'method'			=> 'GET',
            'header'			=> &$headers,
            'follow_location'	=> 0,
            'max_redirects'		=> 0,
            'ignore_errors'		=> true,
            'timeout'			=> 60,
        ],
    ];
    $context = stream_context_create($httpContext);
    if (true) {
        $array_object = array();
        var_dump( end($array_object) );
    }
    if (!true) {
        $dt = new DateTime('@1604215800');
        $dt->add(new DateInterval('PT1M'));
    }
}
$table='test_68638';
$unset_var = 10;
$values = array(
            // empty string
  /* 1  */  "",
            '',
            // objects
  /* 3  */  new test(),

            // undefined variable
            @$undefined_var,

            // unset variable
  /* 5  */  @$unset_var,
);
function f_6() {
    return false;
}
function f_7() {
    var_dump("DB::__construct() called");
    $search_arr = array( TRUE, FALSE, 1, 0, -1, "1", "0", "-1",  NULL,
                         array(), "php", "");
    $class = new SomeClass;
    for ($i_8 = 0; $i_8 < 10; $i_8++) {
        $array = [0];
        $row = mysqli_fetch_assoc($res);
        $meta = mysqli_fetch_fields($res);
        $meta = $meta[0];
        $length = $meta->length;
        $expected = str_repeat('0', $length - strlen($insert));
        $expected .= $insert;
        printf("[%03d] Expecting '%s' got '%s'\n", $offset, $expected, $row['zero']);
        $array = [
            [
            'superhero'=> 'superman',
            'nanana' => 'no nana'
            ],
            [
            'superhero'=> 'acuaman',
            'nanana' => 'no nana'
            ],
        
            ];
        var_dump(array_column($array, 'superhero'));
        $reflector = new ReflectionClass(C::class);
        $obj = $reflector->newLazyGhost(function ($obj) {
            var_dump("initializer");
            $obj->__construct();
        });
        test('Ghost', $obj);
        $class = new SomeClass;
        $arr = [$class];
        var_dump(json_encode($arr));
        $str = "repeater id='loopt' dataSrc=subject columns=2";
        preg_match_all("/(['\"])((.*(\\\\\\1)*)*)\\1/sU",$str,$str_instead);
        var_dump(soundex("Hilbert")     == soundex("Heilbronn"));
        var_dump(strncasecmp("test ", "E", 10));
        $f = __DIR__ . DIRECTORY_SEPARATOR . "67647.mov";
        $fi = new finfo(FILEINFO_MIME_TYPE);
        var_dump($fi->file($f));
        $code = null;
        $err = null;
        pfsockopen('udp://127.0.0.1', '63844', $code, $err, (PHP_INT_MAX/100000)+1);
        );
            var_dump($d == get_base;
    }
}
