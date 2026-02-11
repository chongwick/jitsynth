<?php
class A {
    public function __call($name, $args) {
        eval('$args = array(); var_dump(debug_backtrace());');
    }
}
class Foo {
    var $bar = array();

    static function bar() {
        static $instance = null;
        $instance = new Foo();
        return $instance->bar;
    }
}
class dataAccessor
{
}
class B {

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
class C {
    public private(set) string $prop1 {
        set => $value;
    }
    public private(set) string $prop2 {
        get => $this->prop2;
    }
}
function f() {
    Fiber::suspend();
}
function g() {
    (new Fiber(function() {
        global $f;
        var_dump((new ReflectionFiber($f))->getTrace());
    }))->start();
}
function test(string $name, object $obj) {
    printf("# %s:\n", $name);

    var_dump($obj);
    var_dump($obj->a);
    var_dump($obj);
}
register_shutdown_function(function () {
    echo "register_shutdown_function()\n";
    throw new \Exception('shutdown');
});
$ftp = ftp_connect('127.0.0.1', $port);
$i = 0;
$context = stream_context_create(['dummy' => ['foo' => 'bar']]);
$halves[0] = $halves[1] = 0;
$halves[(mt_rand(0, $max - 1) >> 1) & 1]++;
$halves[0] = $halves[1] = 0;
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
$_ = str_repeat("A", 512);
$GLOBALS['b'] = 2;
$org_b = $GLOBALS['b'];
$fixedArray = new SplFixedArray(1);
$inputs = array(
    '<frameset > </frameset>',
    '<html><frameset> </frameset> </html',
);
$plain = "The quick brown fox jumps over the lazy dog.";
$compressed = (string) bzcompress($plain);
$compressed[strlen($compressed) - 15] = 'X';
$a = new A();
$dirs = array("a", "ソ", "ゾ", "şŞıİğĞ", "多国語", "王", "汚れて掘る");
$instance = new Foo();
main::$dataAccessor = new dataAccessor;
$B = new B();
$c = new C();
$c->prop2 = 'hello world';
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
$strings_with_nulls = array(
                   "\0",
                   '\0',
                           "hello\0world",
                           "\0hel\0lo",
                           "hello\0",
                           "\0\0hello\tworld\0\0",
                           "\\0he\0llo\\0",
                           'hello\0\0'
                           );
$header = <<<HEADER
extern int *(*bug79177_cb)(void);
void bug79177(void);
HEADER;
$ffi = FFI::cdef($header);
$filename = __DIR__ . '/私はガラスを食べられます_003.xml';
$dsn = 'sqlite:./bug64705NonExistingDir/bug64705NonExistingDb';
$timestamp = mktime(8, 8, 8, 8, 8, 2008);
var_dump(intlcal_get_error_message(null));
var_dump( range(1, 7, 0) );
set_error_handler(function() {
    (y);
});
$tmpFileIn = tempnam(sys_get_temp_dir(), 'test');
unlink($tmpFileIn);
$fmt = new NumberFormatter('en_US', NumberFormatter::DECIMAL);
$fmt->parse('abc');
$bert = "file://" . __DIR__ . "/bug41033.pem";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_SIGN, array($cpca), $utfl));
$cert = "file://" . __DIR__ . "/cert.crt";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_CRL_SIGN, array($cpca), $utfl));
$dom = new DOMDocument;
var_dump($dom->getElementById('x')?->nodeName);
$tempstring = "abcdefghjklmnpqrstuvwxyz";
var_dump(sprintf("%030.-15s", $tempstring));
for ($i = 0; $i < 10; $i++) {
    $zip = new ZipArchive();
    if ($zip->open($filename, ZipArchive::OVERWRITE) !== true) {
        exit("Unable to open the zip file");
    }
    $zip->addFromString("foo_{$i}.txt", 'foo bar foobar');
    $zip->close();
}
$zip = new ZipArchive();
$zip->addFromString("foo_{$i}.txt", 'foo bar foobar');
$f = new Fiber(function() { f(); max(...[1,2,3,4,5,6,7,8,9,10,11,12]); g(); });
$f->resume();
set_exception_handler(function() {
    echo 'First handler' . PHP_EOL;
});
$bert = "file://" . __DIR__ . "/bug41033.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_ENCRYPT));
ob_clean();
$im = imagecreate(800, 800);
imageline($im, 650, 650, 150, 150, IMG_COLOR_STYLED);
var_dump($obj->a);
var_dump(get_html_translation_table(NAN, 0, "UTF-8") > 0);
$dt = DateTime::createFromFormat('Y-m-d|', '2011-02-02');
var_dump($dt);
var_dump(count($cert_data['extracerts']));
printf("printf test 25:%-2s\n", "gazonk");
error_reporting(E_ALL ^ E_NOTICE);
var_dump(soundex("Hilbert")     == soundex("Heilbronn"));
$code = null;
$err = null;
pfsockopen('udp://127.0.0.1', '63844', $code, $err, INF);
$dbh = @pg_connect($conn_str);
pg_close($dbh);
function f_0() {
    $fn = "bug71263.bz2";
    $r = fopen($fn, "r");
    fclose($r);
}
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
mkdir($prefix);
$tester = new FPM\Tester($cfg);
$tester->close();
$dest = dirname(realpath(__FILE__)) . '/bug27582.png';
$im = ImageCreateTrueColor(10, 10);
imagepng($im, $dest);
$sixty = M_PI / 3.0;
var_dump(sin($sixty));
$dbh = @pg_connect($conn_str);
$res = pg_query($dbh, 'SELECT test_notice()');
pg_free_result($res);
