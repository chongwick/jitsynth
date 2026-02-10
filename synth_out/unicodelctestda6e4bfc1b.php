<?php
$unset_var = 10;
class Test {
    public static function __callStatic($method, $args) {}
    public function __call($method, $args) {}
}
$t = new Test;
$strA = 'test &amp; test';
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $dfp = opendir ( __DIR__ );
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
    
    EOT;
    $cfg .= 'php_admin_value[browscap] = ' . __DIR__ . '/../../../ext/standard/tests/misc/browscap.ini';
    $code = <<<EOT
    <?php
    \$cv = get_browser("Konqueror/2.0")->browser_name_pattern;
    var_dump(\$cv);
    EOT;
    $tester = new FPM\Tester($cfg, $code);
    $tester->close();
}
function f_1() {
    return true;
}
$func_ptrs = [
    'bug_gh9090_void_none_ptr',
    'bug_gh9090_void_int_char_ptr',
    'bug_gh9090_void_int_char_var_ptr',
    'bug_gh9090_void_char_int_ptr',
    'bug_gh9090_int_int_char_ptr',
];
ob_start();
for ($i_2 = 0; $i_2 < 10; $i_2++) {
    $GLOBALS['a'] = 1;
    class C extends stdClass {
        public int $a;
    }
    $reflector = new ReflectionClass(C::class);
    $obj = new C();
    $reflector->resetAsLazyProxy($obj, function ($obj) {
        });
}
$heredoc_string = <<<EOT
This is line 1 of 'heredoc' string
This is line 2 of "heredoc" string
EOT;
$heredoc_null_string =<<<EOT
EOT;
$str_array = array(
                    // string without any characters that can be backslashed
                    'Hello world',

                    // string with single quotes
                    "how're you doing?",
                    "don't disturb u'r neighbours",
                    "don't disturb u'r neighbours''",
                    '',
                    '\'',
                    "'",

                    // string with double quotes
                    'he said, "he will be on leave"',
                    'he said, ""he will be on leave"',
                    '"""PHP"""',
                    "",
                    "\"",
                    '"',
            "hello\"",

                    // string with backslash characters
                    'Is your name Ram\Krishna?',
                    '\\0.0.0.0',
                    'c:\php\testcase\addslashes',
                    '\\',

                    // string with nul characters
                    'hello'.chr(0).'world',
                    chr(0).'hello'.chr(0),
                    chr(0).chr(0).'hello',
                    chr(0),

                    // mixed strings
                    "'\\0.0.0.0'",
                    "'\\0.0.0.0'".chr(0),
                    chr(0)."'c:\php\'",
                    '"\\0.0.0.0"',
                    '"c:\php\"'.chr(0)."'",
                    '"hello"'."'world'".chr(0).'//',

            // string with hexadecimal number
                    "0xABCDEF0123456789",
                    "\x00",
                    '!@#$%&*@$%#&/;:,<>',
                    "hello\x00world",

                    // heredoc strings
                    $heredoc_string,
                    $heredoc_null_string
                  );
function f_3() {
    $file = __DIR__ . "/bug71127.inc";
    $a = 1;
    $columns = array(
            'INT DEFAULT NULL' => 'NUM',
            'INT NOT NULL' => 'NOT_NULL NO_DEFAULT_VALUE NUM',
            'INT NOT NULL DEFAULT 1' => 'NOT_NULL NUM',
            'INT UNSIGNED DEFAULT NULL' => 'UNSIGNED NUM',
            'INT UNSIGNED NOT NULL'	=> 'NOT_NULL UNSIGNED NO_DEFAULT_VALUE NUM',
            'INT UNSIGNED NOT NULL DEFAULT 1' => 'NOT_NULL UNSIGNED NUM',
            'INT UNSIGNED ZEROFILL DEFAULT NULL' => 'UNSIGNED ZEROFILL NUM',
            'INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY' => 'NOT_NULL PRI_KEY UNSIGNED AUTO_INCREMENT NUM PART_KEY',
            'CHAR(1) DEFAULT NULL'	=> '',
            'CHAR(1) NOT NULL' => 'NOT_NULL NO_DEFAULT_VALUE',
            'VARBINARY(127) DEFAULT NULL' => 'BINARY',
            'BLOB'	=> 'BLOB BINARY',
            'TINYBLOB'	=> 'BLOB BINARY',
            'MEDIUMBLOB'	=> 'BLOB BINARY',
            'LONGBLOB'	=> 'BLOB BINARY',
            'TEXT'	=> 'BLOB',
            'TINYTEXT'	=> 'BLOB',
            'MEDIUMTEXT'	=> 'BLOB',
            'LONGTEXT'	=> 'BLOB',
            'SET("one", "two")'	=> 'SET',
            'SET("one", "two") NOT NULL'	=> 'NOT_NULL SET NO_DEFAULT_VALUE',
            'SET("one", "two") NOT NULL DEFAULT "one"'	=> 'NOT_NULL SET',
            'ENUM("one", "two")'	=> 'ENUM',
            'ENUM("one", "two") NOT NULL' => 'NOT_NULL ENUM NO_DEFAULT_VALUE',
            'ENUM("one", "two") NOT NULL DEFAULT "one"' => 'NOT_NULL ENUM',
            'TINYINT UNIQUE' => 'UNIQUE_KEY NUM PART_KEY',
            'SMALLINT UNIQUE' => 'UNIQUE_KEY NUM PART_KEY',
            'MEDIUMINT UNIQUE DEFAULT 1' => 'UNIQUE_KEY NUM PART_KEY',
            'BIGINT UNSIGNED UNIQUE DEFAULT 100' => 'UNIQUE_KEY UNSIGNED NUM PART_KEY',
            'BIT' => 'UNSIGNED',
            'VARCHAR(2) NOT NULL PRIMARY KEY' => 'NOT_NULL PRI_KEY NO_DEFAULT_VALUE PART_KEY'
        );
    $zip = new ZipArchive;
    $error = error_get_last();
    $heredoc_needle = <<<EOD
    ^^&*(
    EOD;
    $input = fopen(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370.tar', 'r');
    return true;
}
function f_4() {
    $datefmt = new IntlDateFormatter('en_US', IntlDateFormatter::FULL, IntlDateFormatter::FULL);
    if (true) {
        class FooBar implements ArrayAccess {
            private $array = array();
        
            public function offsetExists($index): bool {
                return isset($this->array[$index]);
            }
        
            public function offsetGet($index): mixed {
                return $this->array[$index];
            }
        
            public function offsetSet($index, $value): void {
                echo __METHOD__ . "($index, $value)\n";
                $this->array[$index] = $value;
            }
        
            public function offsetUnset($index): void {
                throw new Exception('FAIL');
                unset($this->array[$index]);
            }
        
        }
        $i = 0;
        $j = 0;
        $foo = new FooBar();
        $foo[$j++] = $i++;
    }
    if (true) {
        $index_array = array (1, 2, 3);
    }
    if (true) {
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
    }
    if (true) {
        class Element
        {
            public function ThrowException ()
            {
                throw new Exception();
            }
        
            public static function CallBack(Element $elem)
            {
                $elem->ThrowException();
            }
        }
        $arr = array(new Element(), new Element(), new Element());
    }
    $i = 1;
    return $i;
}
function f_5() {
    class C {
        public function __toString() {
            global $c;
            $c = [];
            throw new Exception(__METHOD__);
        }
    }
    $c = new C();
    $dom = new DOMImplementation();
    for ($i_6 = 0; $i_6 < 10; $i_6++) {
        $timestamp = "2005-11-08T11:22:07+03:00";
        function __doRequest($request, $location, $action, $version, $one_way = 0): string {
            echo "$request\n";
            ob_start();
            $this->server->handle($request);
            $response = ob_get_contents();
            ob_end_clean();
            return $response;
          }
        $logOnEvent = new LogOnEvent(34567, $timestamp);
        class LogOnEvent {
          public $audienceMemberId;
          public $timestamp;
        
          function __construct($audienceMemberId, $timestamp) {
            $this->audienceMemberId = $audienceMemberId;
            $this->timestamp = $timestamp;
          }
        }
        function __construct($version, $activityId, $messageId, $source, $logOnEvent=NULL, $logOffEvent=NULL) {
            $this->version = $version;
            $this->activityId = $activityId;
            $this->messageId = $messageId;
            $this->source = $source;
            $this->logOnEvent = $logOnEvent;
            $this->logOffEvent = $logOffEvent;
          }
        $this->logOnEvent = $logOnEvent;
        $initialRequest = false;
        $plain = "The quick brown fox jumps over the lazy dog.";
        $compressed = (string) bzcompress($plain);
        $compressed = substr($compressed, 0, strlen($compressed) - 20);
        $compressed[strlen($compressed)-2] = 'X';
        for ($i_7 = 0; $i_7 < 10; $i_7++) {
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
            $strA = 'test &amp; test';
        }
        $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
        ;
        
        mkdir($d0);
        ;
        $rc = new ReflectionClass(B::class);
        for ($i_8 = 0; $i_8 < 10; $i_8++) {
            $xml =<<<EOF
            <xml>
            <fieldset1>
            </fieldset1>
            <fieldset2>
            <options>
            </options>
            </fieldset2>
            </xml>
            EOF;
            if (true) {
                $dom = new DOMDocument;
                $test1 = $dom->getElementById('x');
            }
            $user = PDO_MYSQL_TEST_USER;
            if (true) {
                $a = $b = $c = 2;
            }
        }
        $doc = new \DOMDocument();
        $timestamp = "2005-11-08T11:22:07+03:00";
        function __construct($audienceMemberId, $timestamp, $smokeStatus) {
            $this->audienceMemberId = $audienceMemberId;
            $this->timestamp = $timestamp;
            $this->smokeStatus = $smokeStatus;
            $this->callInitiator = "IVR";
          }
        function __construct($audienceMemberId, $timestamp) {
            $this->audienceMemberId = $audienceMemberId;
            $this->timestamp = $timestamp;
          }
        $this->audienceMemberId = $audienceMemberId;
        $cfg = <<<EOT
        [global]
        error_log = {{FILE:LOG}}
        [unconfined]
        listen = {{ADDR}}
        pm = static
        pm.max_children = 1
        catch_workers_output = yes
        EOT;
        for ($i_9 = 0; $i_9 < 10; $i_9++) {
            #[\AllowDynamicProperties]
            class C {
                public $b;
                public function __construct() {
                    $this->a = new Canary();
                }
            }
            $reflector = new ReflectionClass(C::class);
            $obj = new C();
            $reflector->resetAsLazyGhost($obj, function ($obj) {
                var_dump("initializer");
                $obj->__construct();
            });
            class Canary {
                public function __construct(public mixed $value) {}
                public function __destruct() {
                    var_dump(__METHOD__);
                }
            }
            function f($canary) {
                var_dump(yield from g());
            }
            $canary = new Canary(null);
            $iterable = f($canary);
            $iterable->current();
            $r = new ResourceBundle( 'en_US', BUNDLE );
            printf( "length: %d\n", count($r) );
        }
    }
}
function f_10() {
    $test = function (#[SensitiveParameter] $sensitive)
    {
        debug_print_backtrace();
        var_dump(debug_backtrace());
        var_dump((new Exception)->getTrace());
    };
    function test($p12_contents, $password) {
        openssl_pkcs12_read($p12_contents, $cert_data, $password);
        openssl_error_string();
        var_dump(count($cert_data['extracerts']));
    }
    $pass = "qwerty";
    test($p12, $pass);
}
function f_11() {
    return $i;
}
function f_12() {
    return true;
}
