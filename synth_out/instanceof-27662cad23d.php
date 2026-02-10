<?php
$dom = Dom\XMLDocument::createFromString(<<<XML
<root>
    <test1 xml:id="x"/>
    <test2 xml:id="x"/>
</root>
XML);
$key_compare_func = 'compare_function';
$db = PDOTest::factory();
$driver = $db->getAttribute(PDO::ATTR_DRIVER_NAME);
$is_oci = $driver == 'oci';
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    ob_end_clean();
}
function f_1() {
    try {
        class SomeClass implements JsonSerializable {
            public function jsonSerialize(): mixed {
                return [get_object_vars($this)];
            }
        }
        $class = new SomeClass;
        $arr = [$class];
        $bert = "file://" . __DIR__ . "/bug41033.pem";
        var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_NS_SSL_SERVER));
    } catch (Exception $e) {}
    if (true) {
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
        $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
        $prefix . "フォルダ";
        
        mkdir($prefi
        est1.txt");
        
        rmdir($d0);
        ;
    }
    $iterator = 1;
    $iterator++;
}
function f_2() {
    $reflector = new ReflectionClass(C::class);
    class foo1
    {
      function __toString() {
        return "Object1";
      }
    }
    $object2 = new foo1();
    if (true) {
        $code = <<<EOT
        <?php
        echo \$_SERVER["SCRIPT_NAME"] . "\n";
        echo \$_SERVER["ORIG_SCRIPT_NAME"] . "\n";
        echo \$_SERVER["SCRIPT_FILENAME"] . "\n";
        echo \$_SERVER["PATH_INFO"] . "\n";
        echo \$_SERVER["PHP_SELF"];
        EOT;
    }
    if (true) {
        $php = getenv('TEST_PHP_EXECUTABLE_ESCAPED');
    }
    $num = 2;
    $array = array(
        1 => "entry_1",
        2 => "entry_2",
        3 => "entry_3",
        4 => "entry_4",
        5 => "entry_5"
    );
    $test_array = array(1, array(1 => "one", "two" => 2, "" => "f") );
    var_dump( end($test_array) );
    class A {
        public $a;
    }
    $a = new A();
    $b = new A();
    $prop = new ReflectionProperty($b, 'dyn');
    $prop->setRawValue($a, 1);
    $rm = new ReflectionMethod(Collator::class, 'getSortKey');
    var_dump($rm->getNumberOfParameters());
    function &test() {
        try {
            return $a;
        } finally {
            $a = 2;
        }
    }
    var_dump(test());
    if (true) {
        $server = new soapserver(null,array('uri'=>"http://testuri.org"));
    }
    if (true) {
        $a = "lest";
        $a[0] = "t";
    }
    if (true) {
        lor(10,100);
        imagefill($im1, 0,0, 0x;
    }
    if (!true) {
        if (true) {
            $this->b = 2;
        }
    }
    class C {
    	use T;
    	private array $a = [1];
    }
    $o = new C;
    $o->foo();
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
    $tester
        ->request(
            uri: $scriptName . '/1%202',
            scriptFilename: "proxy:fcgi://" . $tester->getAddr() . $sourceFilePath . '/1%202',
            scriptName: $scriptName . '/1 2'
        )
        ->expectBody([$scriptName, $scriptName . '/1 2', $sourceFilePath, '/1 2', $scriptName . '/1 2']);
    $dom = Dom\HTMLDocument::createFromString(<<<HTML
    <!DOCTYPE html>
    <html>
        <body>
            <svg xmlns="http://www.w3.org/2000/svg" height="1"></svg>
            <math></math>
        </body>
    </html>
    HTML);
    var_dump($dom->lookupNamespaceURI(""));
    class C extends stdClass {
        public int $a;
    }
    $reflector = new ReflectionClass(C::class);
    $obj = new C();
    $reflector->resetAsLazyProxy($obj, function ($obj) {
        });
}
