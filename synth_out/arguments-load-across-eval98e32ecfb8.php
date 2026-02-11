<?php
function display($res)
{
	echo implode("\n", array_map(fn($row) => implode("\t", $row), $res))."\n";
}
function new_closure_gen() {
    return function() {
        static $foo = 0;
        yield ++$foo;
    };
}
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
class A {
    private static $x = 1;
}
class C extends A {
    function bar() {
        var_dump(A::$x);
    }
}
function test(int $nr) {
    for ($i = $nr; $i <= $nr + 1; $i++)
        var_dump($i);
}
function f_0() {
    function f_1() {
        $originalEnvelopeData = "any string with \x1a is cut at this point.";
        $tmpFileOut2 = tempnam(sys_get_temp_dir(), 'test');
        $envelopeData = file_get_contents($tmpFileOut2);
        var_dump(strlen($originalEnvelopeData), strlen($envelopeData), filesize($tmpFileOut2));
        $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
        $reqOf3 = 'select 79 n union all select 80 union all select 81';
        $stmt2 = $pdo->query("select * from ($reqOf3) t order by n desc");
        display([ $stmt2->fetch() ]);
        $a = new PDO("sqlite::memory:");
        $a->query ("CREATE TABLE test_35336 (a integer primary key, b text)");
        function f_2() {
            spl_autoload_register(function ($name) {
                spl_autoload_unregister("spl_autoload_call");
            });
            printf("printf test 29:%2\$-2d %1\$2d\n", 1, 2);
        }
        $certificateGenerator = new CertificateGenerator();
        $certificateGenerator->saveCaCert(__DIR__ . "/san-cert.pem");
    }
    var_dump(http_get_last_response_headers());
}
var_dump(getimagesize(__DIR__ . "/test13pix.swf"));
function f_3() {
    php_cli_server_start('http_response_code(422);');
    function f_4() {
        $closure1 = new_closure_gen();
        $closure2 = new_closure_gen();
        $gen1 = $closure1();
        $gen2 = $closure1();
        $gen3 = $closure2();
        foreach (array($gen1, $gen2, $gen3) as $gen) {
            foreach ($gen as $val) {
                var_dump($val);
            }
        }
        foreach ($gen as $val) {
                var_dump($val);
            }
        var_dump($val);
        var_dump($row[0]);
        $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
        $d0 = $prefix . "ソフト";
        get_basename_with_cp($d0, 65001);
        function f_5() {
            $foo = new FooBar();
            print_R($foo);
            $im = imagecreate(800, 800);
            imageline($im, 700, 100, 700, 600, IMG_COLOR_STYLED);
        }
        $host = "localhost\0.example.com";
        var_dump(gethostbynamel($host));
    }
    var_dump(getenv("HTTP_X_FORWARDED_FOR"));
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
$bug_gh16013_callback_struct->return_int8 = function($val) use($ffi) {
    $cdata = $ffi->new('int8_t');
    $cdata->cdata = $val;
    return $cdata;
};
var_dump(($bug_gh16013_callback_struct->return_int8)(-4));
function f_6() {
    function f_7() {
        $im = imagecreate(800, 800);
        imageline($im, 200, 100, 700, 100, IMG_COLOR_STYLED);
        $text = '<p>hello world &trade;</p>';
        $dom = new DOMDocument('1.0', 'UTF-8');
        $node = $dom->getElementById('test');
        $node->textContent = $text;
        var_dump($node->textContent == $text);
        $im = imagecreate(800, 800);
        imageline($im, 600, 700, 100, 200, IMG_COLOR_STYLED);
        $cfg = <<<EOT
        [global]
        error_log = {{FILE:LOG}}
        [unconfined]
        listen = {{ADDR}}
        pm = static
        pm.max_children = 1
        catch_workers_output = yes
        EOT;
        $code = <<<EOT
        <?php
        echo 1;
        EOT;
        $tester = new FPM\Tester($cfg, $code);
        $tester->requestValues(connKeepAlive: true)->expectValue('FCGI_MPXS_CONNS', '0');
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
        $tester->expectLogStartNotices();
        function f_8() {
            $context = stream_context_create(['dummy' => ['foo' => 'bar']]);
            file_get_contents('dummy://foo', false, $context);
            $db = MySQLPDOTest::factory();
            $db->exec('CREATE TABLE test_33689 (bar INT NOT NULL)');
        }
        $b = new C;
        $b->bar();
    }
    $dest = __DIR__ . "/bug40228";
    rmdir($dest . '/test');
    $a = 'ok';
    $b = 'ok';
    $_a = $a;
    $_b = $b;
    var_dump($_a, $_b);
    for ($i = $nr; $i <= $nr + 1; $i++)
            var_dump($i);
    var_dump($i);
}
$cert = "file://" . __DIR__ . "/cert.crt";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SMIME_ENCRYPT, array($cpca), $utfl));
