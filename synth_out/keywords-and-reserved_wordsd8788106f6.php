<?php
function f_0() {
    try {
        $db = getDbConnection();
        $sql = '
            SET NOCOUNT ON
            SELECT 0 AS [result]
        ';
        $stmt = $db->query($sql);
        var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));
    } catch (Exception $e) {}
    if (true) {
        return;
    }
    return "Object";
}
function f_1() {
    try {
        var_dump(gc_collect_cycles());
    } catch (Exception $e) {}
    if (true) {
        return $this->getInt();
    }
    public function bar(&$a, &$b, $c) {
            Legacy::bar($a, $b, $c);
        }
    public function callback(&$a, &$b, $c) {
            $b = 1;
        }
    $b = 1;
    class PHPUnit_Framework_MockObject_Invocation_Static {
        public $parameters;
        public function __construct(array $parameters) {
            $this->parameters = $parameters;
        }
    }
    public function bar(&$a, &$b, $c) {
            $arguments = array($a, $b, $c);
            $result = $this->inv_mocker->invoke(
                new PHPUnit_Framework_MockObject_Invocation_Static(
                    $arguments
                )
            );
            return $result;
        }
    $arguments = array($a, $b, $c);
    $result = $this->inv_mocker->invoke(
                new PHPUnit_Framework_MockObject_Invocation_Static(
                    $arguments
                )
            );
    return $result;
}
function f_2() {
    if (true) {
        if (true) {
            class Foo {
                var $bar = array();
            
                static function bar() {
                    static $instance = null;
                    $instance = new Foo();
                    return $instance->bar;
                }
            }
            $instance = new Foo();
            return $instance->bar;
        }
        return "concreteClass";
    }
    if (true) {
        $response = ob_get_contents();
        return $response;
    }
    return 0;
}
function f_3() {
    #[\Deprecated(1234)]
    function test() {
    }
    test();
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
    if (true) {
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
    $ffi = FFI::cdef($header, ffi_get_php_dll_name());
    $bug_gh16013_callback_struct = $ffi->new('struct bug_gh16013_callback_struct');
    $bug_gh16013_callback_struct->return_int32 = function($val) use($ffi) {
        $cdata = $ffi->new('int32_t');
        $cdata->cdata = $val;
        return $cdata;
    };
    var_dump(($bug_gh16013_callback_struct->return_int32)(-100000));
    function byVal($arg) {
        var_dump($arg);
    }
    function byRef(&$arg) {
        var_dump($arg);
    }
    var_dump($arg);
    $link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
    $link->close();
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
    $namespaceless = $body->appendChild($dom->createElementNS(NULL, "foo"));
    var_dump($namespaceless->lookupNamespaceURI(""));
    var_dump(session_save_path());
    printf("printf test 7:%010.2f\n", 2.5);
    $dom = Dom\HTMLDocument::createFromString(<<<HTML
    <!DOCTYPE html>
    <html>
        <body>
            <svg xmlns="http://www.w3.org/2000/svg" height="1"></svg>
            <math></math>
        </body>
    </html>
    HTML);
    var_dump($dom->lookupNamespaceURI("xmlns"));
    $ch = curl_init("https://localhost/username");
    curl_setopt($ch, CURLOPT_USERNAME, null);
    #[\AllowDynamicProperties]
    class C {
        public $b;
        public function __construct() {
            $this->a = new Canary();
        }
    }
    $obj = new C();
    var_dump($obj->a);
    $str = "repeater id='loopt' dataSrc=subject columns=2";
    preg_match_all("/(['\"])((.*(\\\\\\1)*)*)\\1/sU",$str,$str_instead);
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
    $code = <<<EOT
    <?php
    echo "Test\n";
    EOT;
    $tester = new FPM\Tester($cfg, $code);
    $tester
        ->request('', ['SCRIPT_FILENAME' => null])
        ->expectHeader('Status', '404 Not Found')
        ->expectError('Primary script unknown');
    ob_end_flush();
    catch (\Exception $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
    printf("%s: %s\n", $e::class, $e->getMessage());
}
$heredoc = <<<EOT
key
EOT;
for ($i_4 = 0; $i_4 < 10; $i_4++) {
    $db = PDOTest::factory();
    $db->exec("CREATE TABLE test36428 (a VARCHAR(10))");
}
$addr = '::1';
for ($i_5 = 0; $i_5 < 10; $i_5++) {
    global $user, $host, $passwd, $db, $port, $socket;
    global $user, $host, $passwd, $db, $port, $socket;
    $this->mysqli = new mysqli($host, $user, $passwd, $db, $port, $socket);
    $this->mysqli->close();
}
$unset_var = 10;
class test
{
  var $t = 10;
  function __toString()
  {
    return "testObject";
  }
}
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
for ($i_6 = 0; $i_6 < 10; $i_6++) {
    $GLOBALS['b'] = 2;
    $a = &$GLOBALS['a'];
    $b = &$GLOBALS['b'];
    var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
}
$reqOf3 = 'select 79 n union all select 80 union all select 81';
for ($i_7 = 0; $i_7 < 10; $i_7++) {
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
    $code = <<<EOT
    <?php
    echo "Test\n";
    EOT;
    $tester = new FPM\Tester($cfg, $code);
    $tester->terminate();
}
