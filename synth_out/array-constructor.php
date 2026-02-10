<?php
$dateperiod = (new ReflectionClass(DatePeriod::class))->newInstanceWithoutConstructor();
for ($i_0 = 0; $i_0 < 10; $i_0++) {
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
    $bug_gh16013_callback_struct->return_struct = function($val) use($ffi) {
        return $val;
    };
    $index_array = array (1, 2, 3);
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
    $stream = fopen(__DIR__ . "/75776.$ext", 'w');
    stream_filter_append($stream, $filter);
    $fmt = new NumberFormatter('en_US', NumberFormatter::DECIMAL);
    $fmt->parse('abc');
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        ini_set('mysqlnd.fetch_data_copy', false);
        var_dump( range(1, 7, fdiv(0, 0)) );
    }
}
for ($i_2 = 0; $i_2 < 10; $i_2++) {
    for ($i_3 = 0; $i_3 < 10; $i_3++) {
        $this->b = 2;
        $arc_name = __DIR__ . "/bug40228.zip";
        $fp = fopen("php://memory", "r+");
        rewind($fp);
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
        $tester->terminate();
        for ($i_4 = 0; $i_4 < 10; $i_4++) {
            $filename = "bug51997.bz2";
            $str = "This is a test string.\n";
            $bz = bzopen($filename, "w");
            bzwrite($bz, $str);
            $header = <<<HEADER
            extern int *(*bug79177_cb)(void);
            void bug79177(void);
            HEADER;
            $ffi = FFI::cdef($header);
            $ffi->bug79177();
        }
    }
}
for ($i_5 = 0; $i_5 < 10; $i_5++) {
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
    [$sourceFilePath, $scriptName] = $tester->createSourceFileAndScriptName();
    register_shutdown_function(function (): void {
        foreach (get_resources() as $res) {
            if (get_resource_type($res) === 'persistent stream') {
                echo "ERROR: persistent stream not closed\n";
                return;
            }
        }
        echo "OK: persistent stream closed\n";
    });
    class MyObjectStorage extends SplObjectStorage {
        // Overwrite getHash() with just some (working) test-method
        public function getHash($object): string { return get_class($object); }
    }
    $list = new MyObjectStorage();
    var_dump(mb_stripos('Hello', 'e', 0, '8bit'));
    $reflector = new ReflectionClass(C::class);
    $test_array = array(1, array(1 => "one", "two" => 2, "" => "f") );
    var_dump( end($test_array) );
    $trace_file = '/tmp/mysqli_debug_phpt.trace';
    function test($foo) {
        var_dump(0);
        var_dump($foo[0]);
    }
    test("str");
    class A
    {
        use T1;
    }
    class B extends A
    {
        use T2;
    }
    $b = new B();
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
    $reflector = new ReflectionClass(C::class);
    $obj = $reflector->newLazyGhost(function () {
        throw new \Exception('initializer');
    });
    test('Ghost', $obj);
    $y = 0;
    $references = array();
    debug_zval_dump($references);
    $dsn = 'sqlite:./bug64705NonExistingDir/bug64705NonExistingDb';
    printf("printf test 11:<%30s>\n", "hoyesterettsjustitiarius");
    $codes = array(200, 201, 204, 301, 302, 303, 304, 305, 307, 404, 500);
    $depth0 = "depth02";
    $depth1 = "depth1";
    $depth2 = "depth2";
    $targetDir = __DIR__ . DIRECTORY_SEPARATOR . $depth0 . DIRECTORY_SEPARATOR . $depth1 . DIRECTORY_SEPARATOR . $depth2;
    touch($targetDir . DIRECTORY_SEPARATOR . 'getSubPathname_test_2.tmp');
    $ok = false;
    session_start();
}
function f_6() {
    $conn = odbc_connect($dsn, $user, $pass);
    $res = odbc_exec($conn, "SELECT * FROM bug80147");
    for ($i_7 = 0; $i_7 < 10; $i_7++) {
        $_ENV = [];
    }
    return false;
}
function f_8() {
    $code = <<<EOT
    <?php
    \$cv = get_browser("Konqueror/2.0")->browser_name_pattern;
    var_dump(\$cv);
    EOT;
    $fmt = new NumberFormatter('en_US', NumberFormatter::DECIMAL);
    $fmt2 = clone $fmt;
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
    $struct = $ffi->new('struct bug_gh16013_int_struct');
    $struct->field = 10;
    function test(string $name, object $obj) {
        printf("# %s:\n", $name);
    
        var_dump($obj);
        var_dump($obj->a);
        var_dump($obj);
    }
    var_dump($obj->a);
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
    mysqli_close($link);
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $phar = new Phar($fname);
    $phar->stopBuffering();
}
for ($i_9 = 0; $i_9 < 10; $i_9++) {
    $res = [];
    $input = fopen(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370.tar', 'r');
    $php = getenv('TEST_PHP_EXECUTABLE_ESCAPED');
    for ($i_10 = 0; $i_10 < 10; $i_10++) {
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
        printf("[%03d] Length reported is too small to run test\n", $offset);
        $GLOBALS['b'] = 2;
        $org_a = $GLOBALS['a'];
    }
}
for ($i_11 = 0; $i_11 < 10; $i_11++) {
    printf("printf test 31:%.17g\n", INF);
    ['pid' => $pid, 'uri' => $uri] = http_server('genResponses', $output);
    $document = new \DOMDocument();
    $document->loadHTMLFile($uri);
    printf("[005] [%d] %s\n", $link->errno, $link->error);
    $offsets = array(20, 21, 22, 53, 54);
    $string_mb = base64_decode('5pel5pys6Kqe44OG44Kt44K544OI44Gn44GZ44CCMDEyMzTvvJXvvJbvvJfvvJjvvJnjgII=');
    $needle = base64_decode('44CC');
    foreach($offsets as $i) {
        echo "\n-- Offset is $i --\n";
        echo "--Multibyte String:--\n";
        try {
            var_dump( mb_strpos($string_mb, $needle, $i, 'UTF-8') );
        } catch (\ValueError $e) {
            echo $e->getMessage() . \PHP_EOL;
        }
        echo"--ASCII String:--\n";
        try {
            var_dump(mb_strpos('This is na English ta', 'a', $i));
        } catch (\ValueError $e) {
            echo $e->getMessage() . \PHP_EOL;
        }
    }
    var_dump( mb_strpos($string_mb, $needle, $i, 'UTF-8') );
    var_dump($i=1);
    function g() {
        yield 'foo';
        Fiber::suspend();
    }
    var_dump(yield from g());
}
$im = imagecreate(800, 800);
imagepalettetotruecolor($im);
$depth0 = "depth02";
touch(__DIR__ . DIRECTORY_SEPARATOR . $depth0 . DIRECTORY_SEPARATOR . 'getSubPathname_test_1.tmp');
$tests = array(
    1 => array(
        '$6$saltstring',
        'Hello world!',
        '$6$saltstring$svn8UoSVapNtMuq1ukKS4tPQd8iKwSMHWjl/O817G3uBnIFNjnQJuesI68u4OTLiBFdcbYEdFCoEOfaS35inz1'
    ),
    2 => array(
        '$6$rounds=10000$saltstringsaltstring',
        'Hello world!',
        '$6$rounds=10000$saltstringsaltst$OW1/O6BYHV6BcXZu8QVeXbDWra3Oeqh0sbHbbMCVNSnCM/UrjmM0Dp8vOuZeHBy/YTBmSK6H9qs/y3RnOaw5v.'
    ),
    3 => array(
        '$6$rounds=5000$toolongsaltstring',
        'This is just a test',
        '$6$rounds=5000$toolongsaltstrin$lQ8jolhgVRVhY4b5pZKaysCLi0QBxGoNeKQzQ3glMhwllF7oGDZxUhx1yxdYcz/e1JSbq3y6JMxxl8audkUEm0'
    ),
    4 => array(
        '$6$rounds=1400$anotherlongsaltstring',
        'a very much longer text to encrypt.  This one even stretches over morethan one line.',
        '$6$rounds=1400$anotherlongsalts$POfYwTEok97VWcjxIiSOjiykti.o/pQs.wPvMxQ6Fm7I6IoYN3CmLs66x9t0oSwbtEW7o7UmJEiDwGqd8p4ur1'
    ),
    5 => array(
        '$6$rounds=77777$short',
        'we have a short salt string but not a short password',
        '$6$rounds=77777$short$WuQyW2YR.hBNpjjRhpYD/ifIw05xdfeEyQoMxIXbkvr0gge1a1x3yRULJ5CCaUeOxFmtlcGZelFl5CxtgfiAc0'
    ),
    6 => array(
        '$6$rounds=123456$asaltof16chars..',
        'a short string',
        '$6$rounds=123456$asaltof16chars..$BtCwjqMJGx5hrJhZywWvt0RLE8uZ4oPwcelCjmw2kSYu.Ec6ycULevoBK25fs2xXgMNrCzIMVcgEJAstJeonj1'
    ),
    7 => array(
        '$6$$bar$',
        'foo',
        '$6$$QMXjqd7rHQZPQ1yHsXkQqC1FBzDiVfTHXL.LaeDAeVV.IzMaV9VU4MQ8kPuZa2SOP1A0RPm772EaFYjpEJtdu.'
    ),
    8 => array(
        '$6$rounds=10$roundstoolow',
        'the number of rounds is too low',
        '*0'
    ),
    8 => array(
        '$6$rounds=1000000000$roundstoohigh',
        'the number of rounds is too high',
        '*0'
    ),
);
foreach ($tests as $iter => $t) {
    $res = crypt($t[1], $t[0]);
    if ($res != $t[2]) echo "Iteration $iter failed.
Expected: <$t[2]>
Got       <$res>\n";
}
$res = crypt($t[1], $t[0]);
$res = [];
$inputs = array(
      'The ISO 8601:1988 week number' => "%V",
      'Weekday as decimal' => "%u",
);
function f_12() {
    try {
        $im = imagecreate(800, 800);
        test_image_equals_file(__DIR__ . '/bug43475.png', $im);
    } catch (Exception $e) {}
    if (true) {
        $x = 1.0;
        $x += 0;
        return ++$x;
    }
    pcntl_wait($status);
}
class Foo {
  public $bar = "bat";
}
$foo = new Foo;
$baz = (float)$foo;
var_dump($baz);
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
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
$prefix . "フォルダ";

mkdir($prefi
est1.txt");

rmdir($d0);
;
$header = <<<HEADER
extern int *(*bug79177_cb)(void);
void bug79177(void);
HEADER;
$ffi = FFI::cdef($header);
$ffi->bug79177();
