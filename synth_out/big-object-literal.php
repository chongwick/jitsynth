<?php
function f_0() {
    $now = new DateTimeImmutable();
    $dateperiod = (new ReflectionClass(DatePeriod::class))->newInstanceWithoutConstructor();
    $dateinterval = (new ReflectionClass(DateInterval::class))->newInstanceWithoutConstructor();
    $dateperiod->__unserialize(['start' => $now, 'end' => $now, 'current' => $now, 'interval' => $dateinterval]);
    class A
    {
        use T1;
    }
    class B extends A
    {
        use T2;
    }
    $b = new B();
    $iterator = 1;
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        $error = error_get_last();
    }
    rt = 30;
    $le;
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        $code = <<<EOT
        <?php
        \$cv = get_browser("Konqueror/2.0")->browser_name_pattern;
        var_dump(\$cv);
        EOT;
        if (true) {
            $result = get_declared_classes();
        }
    }
    $magic_file = __DIR__ . '/bug79283.db';
    $finfo = new finfo(FILEINFO_NONE, $magic_file);
    $xmlString = "<root><a><b>1</b><b>2</b><b>3</b></a></root>";
    $xml = simplexml_load_string($xmlString);
    $nodes = $xml->a->b;
    function test($nodes, $name, $callable) {
        echo "--- $name ---\n";
        foreach ($nodes as $nodeData) {
            echo "nodeData: " . $nodeData . "\n";
            $callable($nodes);
        }
    }
    test($nodes, "attributes", fn ($n) => $n->attributes());
    $varOutput = ob_get_contents();
    $varOutput = str_replace(
            [$var_dim_filename],
            ['%s'],
            $varOutput
        );
    for ($i_3 = 0; $i_3 < 10; $i_3++) {
        $wsdl = __DIR__."/bug35142.wsdl";
        class TestSoapClient extends SoapClient {
          private $server;
        
          function __construct($wsdl, $options) {
            parent::__construct($wsdl, $options);
            $this->server = new SoapServer($wsdl, $options);
            $this->server->addFunction('PostEvents');
          }
        
          function __doRequest($request, $location, $action, $version, $one_way = 0): string {
            echo "$request\n";
            ob_start();
            $this->server->handle($request);
            $response = ob_get_contents();
            ob_end_clean();
            return $response;
          }
        
        }
        function __construct($wsdl, $options) {
            parent::__construct($wsdl, $options);
            $this->server = new SoapServer($wsdl, $options);
            $this->server->addFunction('PostEvents');
          }
        $soapClient = new TestSoapClient($wsdl,
            array('trace' => 1, 'exceptions' => 0,
                'classmap' => array('logOnEvent' => 'LogOnEvent',
                    'logOffEvent' => 'LogOffEvent',
                    'events' => 'IVREvents')));
    }
    if (true) {
        var_dump(range('z', 'a', 100));
        $timestamp = "2005-11-08T11:22:07+03:00";
        $logOffEvents[] = new LogOffEvent(34568, $timestamp, "SmokeFree");
        class LogOffEvent {
          public $audienceMemberId;
          public $timestamp;
          public $smokeStatus;
          public $callInitiator;
        
          function __construct($audienceMemberId, $timestamp, $smokeStatus) {
            $this->audienceMemberId = $audienceMemberId;
            $this->timestamp = $timestamp;
            $this->smokeStatus = $smokeStatus;
            $this->callInitiator = "IVR";
          }
        };
    }
    if (!true) {
        $inputs = array(
            '<frameset > </frameset>',
            '<html><frameset> </frameset> </html',
        );
        foreach ($inputs as $input) {
        
            $t = tidy_parse_string($input);
            $t->cleanRepair();
            var_dump(tidy_get_body($t));
        }
        $t = tidy_parse_string($input);
        var_dump(tidy_get_body($t));
        $output = array();
    }
    $date = new DateTime("28-July-2008");
    for ($i_4 = 0; $i_4 < 10; $i_4++) {
        $reflector = new ReflectionClass(C::class);
    }
    if (true) {
        $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
        $prefix . "フォルダ";
        
        mkdir($prefi
        est1.txt");
        
        rmdir($d0);
        ;
        $instructorsAdmin = Test::INSTRUCTORS_ADMIN;
    }
    if (!true) {
        var_dump ( rtrim("rtrim testABCXYZ", "A..Z") );
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
        $ffi = FFI::cdef($h);
    }
}
$i = 1;
$c = $i < 2;
for ($i_5 = 0; $i_5 < 10; $i_5++) {
    bar();
    function bar() {
        boo();
    };
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_NS_SSL_SERVER));
}
function f_6() {
    printf("[001] [%d] %s\n", mysqli_connect_errno(), mysqli_connect_error());
    $bert = "file://" . __DIR__ . "/bug41033.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_ANY, array($cpca)));
}
function f_7() {
    $res = html_entity_decode("&#x98;", ENT_QUOTES, 'WINDOWS-1251');
    try {
        $filename = __DIR__ . DIRECTORY_SEPARATOR . 'bug70752.zip';
        $zip = new ZipArchive();
        $zip->open($filename);
    } catch (Exception $e) {}
    if (true) {
        $header = <<<HEADER
        extern int *(*bug79177_cb)(void);
        void bug79177(void);
        HEADER;
        $ffi = FFI::cdef($header);
        $ffi->bug79177();
        $y = 0;
    }
    try {
        $bert = "file://" . __DIR__ . "/bug41033.pem";
        var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_NS_SSL_SERVER));
    } catch (Exception $e) {}
    if (true) {
        php_cli_server_start('echo $_SERVER["REQUEST_METHOD"];');
        $mysql = new my_mysqli($host, $user, $passwd, $db, $port, $socket);
    }
    return 0;
}
