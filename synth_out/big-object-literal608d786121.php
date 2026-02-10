<?php
function f_0() {
    class D {
        public string $prop;
    }
    $d = new D();
    var_dump($d);
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
    $failures[] = $error;
    $varOutput = ob_get_contents();
    $varOutput = str_replace(
            [$var_dim_filename],
            ['%s'],
            $varOutput
        );
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        $dom = new DOMImplementation();
        $type = $dom->createDocumentType('html');
    }
    class C {
        public $a;
        public int $b = 1;
    
        public function __construct(int $a) {
            var_dump(__METHOD__);
            $this->a = $a;
            $this->b = 2;
        }
    }
    function test(string $name, object $obj) {
        printf("# %s:\n", $name);
    
        var_dump($obj);
        var_dump($obj->a);
        var_dump($obj);
    }
    $reflector = new ReflectionClass(C::class);
    $obj = $reflector->newLazyGhost(function ($obj) {
        var_dump("initializer");
        $obj->__construct(1);
    });
    $obj = $reflector->newLazyProxy(function ($obj) {
        var_dump("initializer");
        return new C(1);
    });
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        $gen = (function() {
            yield from (function() { yield; })();
        })();
        $fiber = new Fiber(function() use ($gen) {
            $gen->current();
        });
        if (true) {
            $replace_pairs = array("$" => "%", "%" => "$", "#*&@()" => "()@&*#");
        }
    }
    $i = 1;
    set_include_path(__DIR__.'/bug39542:.');
    $depth1 = "depth1";
    for ($i_3 = 0; $i_3 < 10; $i_3++) {
        $result = get_declared_classes();
    }
    if (true) {
        $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
        $prefix . "フォルダ";
        
        mkdir($prefi
        est1.txt");
        
        rmdir($d0);
        ;
        $dom = Dom\HTMLDocument::createEmpty();
    }
    if (!true) {
        var_dump( range(7.0, 1.0, 6.5) );
        $fixedArray = new SplFixedArray(1);
    }
    public function bar(&$a, &$b, $c) {
            Legacy::bar($a, $b, $c);
        }
    public function callback(&$a, &$b, $c) {
            $b = 1;
        }
    $b = 1;
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
    for ($i_4 = 0; $i_4 < 10; $i_4++) {
        #[AllowDynamicProperties]
        class A {
        }
        $a = new A;
    }
    if (true) {
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
        $sxe = new SimpleXMLIterator($xml);
        $rit = new RecursiveIteratorIterator($sxe, RecursiveIteratorIterator::LEAVES_ONLY);
        var_dump($rit->key());
        $unset_var = 10;
    }
    if (!true) {
        session_start();
        $iterator = 1;
    }
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
for ($i_5 = 0; $i_5 < 10; $i_5++) {
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
    $stmt = $pdo->prepare("select :1 n union all select :1 + 1 union all select :1 + 2 union all select :1 + 3");
    $stmt->execute([ 15 ]);
    $file = __DIR__ . '/bug38212私はガラスを食べられます.gd2';
    $im1 = imagecreatetruec
    => imagecreatefromgd2part($file, 0,0, -25, 10),
        fn() => imagecreatefromgd2part($file, 0,0, 10, -25)
    );
    
    unlink($file);
    ?>;
}
function f_6() {
    $curl = curl_init("http://www.google.com");
    curl_setopt($curl, CURLOPT_PRIVATE, "123");
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
}
function f_7() {
    $f = function () {};
    try {
        ob_start();
    } catch (Exception $e) {}
    if (true) {
        var_dump(strncasecmp("test ", "E", -1));
        $dateinterval = (new ReflectionClass(DateInterval::class))->newInstanceWithoutConstructor();
    }
    try {
        register_shutdown_function(function () {
            echo "register_shutdown_function()\n";
            throw new \Exception('shutdown');
        });
    } catch (Exception $e) {}
    if (true) {
        printf("[001] [%d] %s\n", mysqli_errno($link), mysqli_error($link));
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
    }
    $db = MySQLPDOTest::factory();
    return $db;
}
