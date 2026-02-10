<?php
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
function f_0() {
    set_include_path(__DIR__.'/bug39542:.');
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
    $prefixed = $body->appendChild($dom->createElementNS("urn:a", "a:a"));
    var_dump($prefixed->lookupNamespaceURI(""));
}
function f_1() {
    $object = new StdClass();
    $object->a = str_repeat("a", 2);
    $log_file = tempnam(sys_get_temp_dir(), 'php-curl-CURLOPT_WRITEFUNCTION-trampoline');
    $fp = fopen($log_file, 'w+');
    define('OBJECT_COUNT', 10000);
    $x = fprintf($fp, "fprintf test 1:%.5s", "abcdefghij");
    var_dump($x);
    var_dump($http_response_header);
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        $row_stmt = null;
        $oneeighty = M_PI;
        function does_not_work()
        {
            global $data; // Remove this line to make array_multisort() work
        
            $data = array('first', 'fifth', 'second', 'forth', 'third');
            $sort = array(1, 5, 2, 4, 3);
            array_multisort($sort, $data);
        
            var_dump($data);
        }
        does_not_work();
    }
}
try {
    printf("# Ghost:\n");
} catch (Exception $e) {}
if (true) {
    var_dump( $count );
}
function f_3() {
    sprintf('%$s, %2$s %1$s', "a", "b");
}
try {
    array_splice($GLOBALS,0,count($GLOBALS));
    $this->show();
} catch (Exception $e) {}
if (true) {
    class C {
        private $priv1 = 'secret1';
        private $priv2 = 'secret2';
        public $pub1 = 'public1';
        public $pub2 = 'public2';
        public $pub3 = 'public3';
        public $pub4 = 'public4';
    }
    $ao = new ArrayObject(new C);
    $ai = $ao->getIterator();
    $ai->rewind();
}
function f_4() {
    var_dump(posix_setrlimit(POSIX_RLIMIT_NOFILE, 129, 128));
}
try {
    class C extends stdClass {
        public int $a;
    }
    $reflector = new ReflectionClass(C::class);
    $obj = new C();
    $reflector->resetAsLazyProxy($obj, function ($obj) {
        });
    $sh = new SessionHandler;
    $sh->read("");
} catch (Exception $e) {}
if (true) {
    define('PHPT_DATETIME_SHOW', PHPT_DATETIME_SHOW_ADD);
}
try {
    public static function myMethod(string $foo) {
            echo "Called ", __METHOD__, PHP_EOL;
            var_dump($foo);
        }
    var_dump($foo);
    $conn = pg_connect($conn_str);
    $table='test_68638';
    pg_insert($conn,$table, array('id' => 3, 'value' => 15));
} catch (Exception $e) {}
if (true) {
    $cert = "file://" . __DIR__ . "/cert.crt";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_SERVER, array($cpca), $utfl));
}
try {
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
    $tester->close();
    date_default_timezone_set('UTC');
} catch (Exception $e) {}
if (true) {
    $db = getDbConnection();
    $stmt = $db->prepare("SELECT 1, 2 AS named, 3");
    $stmt->execute();
}
try {
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
    $d0 = $prefix . "ソフト";
    $d1 =
    st0.txt");
    touch("$d1\\t;
    var_dump(strncmp("test ", "e", 10));
} catch (Exception $e) {}
if (true) {
    var_dump( range(1.0, 7.0, 0.0) );
}
date_default_timezone_set("UTC");
function test($case) {
    $plain = "The quick brown fox jumps over the lazy dog.";
    $fn = "bug71263.bz2";
    $compressed = (string) bzcompress($plain);
    echo "Compressed len = ", strlen($compressed), "\n";

    if ($case == 1) {
        // Set a random byte in the middle of the compressed data
        // --> php_bz2_decompress_filter() detects fatal error
        // --> fread() displays empty string then garbage, no errors detected:
        $compressed[strlen($compressed) - 15] = 'X';
    } else if ($case == 2) {
        // Truncate the compressed data
        // --> php_bz2_decompress_filter() does not detect errors,
        // --> fread() displays the empty string:
        $compressed = substr($compressed, 0, strlen($compressed) - 20);
    } else {
        // Corrupted final CRC
        // --> php_bz2_decompress_filter() detects fatal error
        // --> fread() displays an empty string, then the correct plain text, no error detected:
        $compressed[strlen($compressed)-2] = 'X';
    }

    file_put_contents($fn, $compressed);

    $r = fopen($fn, "r");
    stream_filter_append($r, 'bzip2.decompress', STREAM_FILTER_READ);
    while (!feof($r)) {
        $s = fread($r, 100);
        echo "read: "; var_dump($s);
    }
    fclose($r);
    unlink($fn);
}
test(3);
