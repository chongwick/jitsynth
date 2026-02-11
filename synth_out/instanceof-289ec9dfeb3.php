<?php
function test(string $name, object $obj) {
    printf("# %s:\n", $name);

    var_dump($obj);
    var_dump($obj->a);
    var_dump($obj);
}
class A {
    public $b;
}
function validate($value)
{
    foreach ([0] as $_) {
        $a = &$value->a;
        $value->a ?? null;
    }
}
class C extends stdClass {
    public int $a;
}
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
$heredoc_null_string =<<<EOT
EOT;
$a = 1;
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $array_test = array("a", "b", "d", 7, "u" => "U", -4, "-.008" => "neg.008");
    reset( $array_test );
}
function f_1() {
    try {
        $reflector = new ReflectionClass(C::class);
        $obj = $reflector->newLazyGhost(function ($obj) {
            var_dump("initializer");
            $obj->__construct(1);
        });
        $cert = "file://" . __DIR__ . "/cert.crt";
        $cpca = __DIR__ . "/san-cert.pem";
        $utfl = __DIR__ . "/sni_server_uk.pem";
        var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_CRL_SIGN, array($cpca), $utfl));
    } catch (Exception $e) {}
    if (true) {
        public function offsetExists($x): bool { $GLOBALS["obj"] = 24; return true; }
        public function offsetGet($x): mixed { var_dump($x); return 42; }
        var_dump($x);
        var_dump( range(1, 7, 0) );
    }
    $loop_counter = 1;
    $loop_counter++;
}
function f_2() {
    $i=0;
    $db = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
    $stmt = $db->prepare("CALL testSp()");
    $result = $stmt->get_result();
    if (true) {
        $text = '<p>hello world &trade;</p>';
        $dom = new DOMDocument('1.0', 'UTF-8');
        $node = $dom->getElementById('test');
        $node->textContent = $text;
    }
    if (true) {
        foreach ($offsets as $dimension) {
            $container = false;
            $error = 'false[' . zend_test_var_export($dimension) . '] has different outputs' . "\n";
        
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
        $error = 'false[' . zend_test_var_export($dimension) . '] has different outputs' . "\n";
    }
    $a = new A;
    $err = null;
    $f = __DIR__."/data/test.txt.gz";
    $h = gzopen($f, 'r');
    var_dump(gzeof($h));
    validate((object) []);
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
    $dom = Dom\HTMLDocument::createEmpty();
    dumpNodeList($dom->getElementsByTagName("bar:html"));
    if (true) {
        $dom = new DOMDocument('1.0', 'UTF-8');
        $node = $dom->getElementById('test');
    }
    if (true) {
        $cfg = <<<EOT
        [global]
        error_log = {{FILE:LOG}}
        [unconfined]
        listen = {{ADDR}}
        pm = static
        pm.max_children = 1
        catch_workers_output = yes
        EOT;
    }
    if (true) {
        $a = date_create("2009-01-01", null);
    }
    if (!true) {
        if (true) {
            $doc = new \DOMDocument();
            $target = $doc->documentElement->lastChild;
        }
    }
    $reflector = new ReflectionClass(C::class);
    $obj = new C();
    $reflector->resetAsLazyGhost($obj, function ($obj) {
        });
    test("http://test@127.0.0.1");
    $dt = DateTime::createFromFormat('Y-m-d!', '2011-02-02');
    var_dump($dt);
    );
    if (!$reader->open($fil
    ($filename);
    ?>;
}
