<?php
$res = [];
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $host = PHP_CLI_SERVER_HOSTNAME;
    $r = new ReflectionClass('Test2');
    extract($GLOBALS, EXTR_REFS);
    class TrampolineTest {
        public function __call(string $name, array $arguments) {
            echo 'Trampoline for ', $name, PHP_EOL;
        }
    }
    $o = new TrampolineTest();
    $callback1 = [$o, 'trampoline1'];
    var_dump(spl_autoload_unregister($callback1));
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        mt_srand(1234567890);
        $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
        $phar = new Phar($fname);
        var_dump(strlen($phar->getStub()));
    }
}
for ($i_2 = 0; $i_2 < 10; $i_2++) {
    for ($i_3 = 0; $i_3 < 10; $i_3++) {
        $now = new DateTime('2018-11-03 11:34:20.781751');
        $reflector = new ReflectionClass(C::class);
        $obj = $reflector->newLazyProxy(function () {
            throw new \Exception('Initializer');
        }, ReflectionClass::SKIP_INITIALIZATION_ON_SERIALIZE);
        $bert = "file://" . __DIR__ . "/bug41033.pem";
        var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_CLIENT));
        $cert = "file://" . __DIR__ . "/cert.crt";
        $cpca = __DIR__ . "/san-cert.pem";
        $utfl = __DIR__ . "/sni_server_uk.pem";
        var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_CRL_SIGN, array($cpca), $utfl));
        for ($i_4 = 0; $i_4 < 10; $i_4++) {
            function __construct($wsdl) {
                parent::__construct($wsdl);
                $this->server = new SoapServer($wsdl);
                $this->server->addFunction('Test');
              }
            $this->server = new SoapServer($wsdl);
            function __doRequest($request, $location, $action, $version, $one_way = 0): string {
                ob_start();
                $this->server->handle($request);
                $response = ob_get_contents();
                ob_end_clean();
                return $response;
              }
            $this->server->handle($request);
            printf("[001] Expecting integer on 64bit got %s/%s\n", gettype($id), var_export($id, true));
        }
    }
}
for ($i_5 = 0; $i_5 < 10; $i_5++) {
    list($value) = yield;
    ob_end_flush();
    $count = 1;
    $ch = curl_init();
    var_dump(curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, true));
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
    $r = new ResourceBundle( 'en_US', BUNDLE );
    printf( "testbin: %s\n", bin2hex($r['testbin']) );
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
    $db = getDbConnection();
    var_dump($db->getAttribute(PDO::DBLIB_ATTR_SKIP_EMPTY_ROWSETS));
    $deflator = deflate_init(ZLIB_ENCODING_RAW);
    $bytes = str_repeat("*", 65536);
    $output = deflate_add(
            $deflator,
            $bytes,
            ZLIB_SYNC_FLUSH
        );
    $r = new Phar(__DIR__ . "/bug69279.phar.zip");
    $r->extractTo(__DIR__, NULL, TRUE);
    function foo(int $x) {
        $a[0] = $x;
        $a[1] = 5;
        echo $a[1];
        $a->foo = 5;
        echo $a[1];
    }
    $a[0] = $x;
    $document = new \DOMDocument();
    var_dump($document->saveHTML());
    $str = 'Hello World';
    $shm_key = ftok(__FILE__, 'p');
    $shm_id1 = shmop_open($shm_key, 'c', 0644, strlen($str));
    $xml = '<?xml version="1.0" encoding="utf-8" ?>
    <test>
    </test>';
    $root = simplexml_load_string($xml);
    $root->__construct("malformed");
    $server = stream_socket_server("tcp://[::1]:1337/");
    pcntl_sigwaitinfo($a,$a);
    $now = new DateTime('2018-11-03 11:34:20.781751');
    $ago = new DateTime('2018-11-03 11:34:20.000000');
    $diff = $ago->diff($now, true);
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
    mysqli_query($link, 'ALTER TABLE test DROP zero');
}
function f_6() {
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
    $flags[8192] = 'ON_UPDATE_NOW';
    for ($i_7 = 0; $i_7 < 10; $i_7++) {
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
    }
    return "Class A object";
}
function f_8() {
    $array = [0];
    $ar = array_values($array);
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
    $fiber = $iterable = $canary = null;
    $EXPECTED_OUTPUT_VALID_OFFSETS_REGEX = '/^' . expectf_to_regex(EXPECTED_OUTPUT_VALID_OFFSETS) . '$/s';
    $doc = new \DOMDocument();
    $doc->loadXML('<a>foo<last/></a>');
    printf("[002] Expecting string on 32bit got %s/%s\n", gettype($id), var_export($id, true));
    var_dump(isset($_POST['foo']));
}
for ($i_9 = 0; $i_9 < 10; $i_9++) {
    $filename = __DIR__ . DIRECTORY_SEPARATOR . 'bug70752.zip';
    $file_handle = fopen(__FILE__, "r");
    $domd = new DOMDocument();
    for ($i_10 = 0; $i_10 < 10; $i_10++) {
        function test(string $name, object $obj) {
            printf("# %s:\n", $name);
        
            var_dump($obj);
            var_dump($obj->a);
            var_dump($obj);
        }
        var_dump($obj);
        $r = socket_sendmsg($sends1, [
            "name" => [ "addr" => "::1", "port" => 3002],
            "iov" => ["test ", "thing", "\n"],
            "control" => [[
                "level" => IPPROTO_IPV6,
                "type" => IPV6_TCLASS,
                "data" => 40,
            ]]
        ], 0);
    }
}
for ($i_11 = 0; $i_11 < 10; $i_11++) {
    $im = imagecreatetruecolor(1, 1);
    imagescale($im, 0, 1, 0);
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
    var_dump($body->lookupNamespaceURI(""));
    printf("[002] [%d] %s\n", $link->errno, $link->error);
    set_exception_handler(function() {
        echo 'First handler' . PHP_EOL;
    });
    $date = new DateTime("28-July-2008");
    $other = new DateTime("31-July-2008");
    $diff = date_diff($date, $other);
    var_dump($diff);
    undefined_function('Null');
}
$s = 'C:15:"ReflectionClass":0:{}';
var_dump(unserialize($s));
ob_start();
$heredoc_string = <<<EOT
This is line 1 of 'heredoc' string
This is line 2 of "heredoc" string
EOT;
$arr = array('http'=>
                        array(
                                'follow_location'=>1,
                        )
                );
$data_comp_func = 'compare_function';
function f_12() {
    try {
        $dom = Dom\XMLDocument::createFromString(<<<XML
        <root>
            <test1 xml:id="x"/>
            <test2 xml:id="x"/>
        </root>
        XML);
        var_dump($dom->getElementById('x')?->nodeName);
    } catch (Exception $e) {}
    if (true) {
        return;
    }
    $wrong = "wrong";
    var_dump(openssl_pkcs7_verify($wrong, 0));
}
function foo($ref, $alt) {
    unset($GLOBALS['a']);
    unset($GLOBALS['b']);
    $GLOBALS['a'] = 1;
    $GLOBALS['b'] = 2;

    $org_a = $GLOBALS['a'];
    $org_b = $GLOBALS['b'];

    if ($ref) {
        global $a, $b;
    } else {
        /* zval temp_var(NULL); // refcount = 1
         * a = temp_var[x] // refcount = 2
         */
        $a = NULL;
        $b = NULL;
    }

    var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
    echo "--\n";
    if ($alt) {
        $a = &$GLOBALS['a'];
        $b = &$GLOBALS['b'];
    } else {
        extract($GLOBALS, EXTR_REFS);
    }
    var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
    echo "--\n";
    $a = &$GLOBALS['a'];
    $b = &$GLOBALS['b'];
    var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
    echo "--\n";
    $GLOBALS['b'] = 3;
    var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
    echo "--\n";
    $a = 4;
    var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
    echo "--\n";
    $c = $b;
    var_dump($b, $GLOBALS['b'], $c);
    echo "--\n";
    $b = 'x';
    var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b'], $c);
    echo "--\n";
    var_dump($org_a, $org_b);
    echo "----";
    if ($ref) echo 'r';
    if ($alt) echo 'a';
    echo "\n";
}
foo(false, false);
$dest = __DIR__ . "/bug40228";
$zip = new ZipArchive;
$zip->extractTo($dest);
byVal(C[0]);
function byVal($arg) {
    var_dump($arg);
};
$html = <<<HTML
<div id="test"><span>hi there</span></div>
HTML;
$dom = new DOMDocument('1.0', 'UTF-8');
$dom->loadHTML($html);
