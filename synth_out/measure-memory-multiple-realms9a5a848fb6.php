<?php
$db = PDOTest::factory();
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
function f_0() {
    $dom = Dom\HTMLDocument::createFromString(<<<HTML
    <!DOCTYPE html>
    <html>
        <body>
            <svg xmlns="http://www.w3.org/2000/svg" height="1"></svg>
            <math></math>
        </body>
    </html>
    HTML);
    var_dump($dom->lookupNamespaceURI("xml"));
}
function f_1() {
    function gen() {
        yield 0;
        yield from gen();
    }
    $gen = gen();
    $file_handle = fopen(__FILE__, "r");
    fclose( $file_handle );
}
if (true) {
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
    $from = ini_get('sendmail_from');
    class TrampolineTest {
        public function __call(string $name, array $arguments) {
            echo 'Trampoline for ', $name, PHP_EOL;
        }
    }
    $o = new TrampolineTest();
    $callback2 = [$o, 'trampoline2'];
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        $db = PDOTest::test_factory(__DIR__ . '/common.phpt');
        $stmt = $db->prepare("SELECT 1");
        var_dump($stmt->execute([1]));
    }
    $textascii = 'This is an "example" of using DOM splitText';
     = new DOMDocument('1.0', 'UTF-8');
    $no
    e = $dom->createTextNode($textascii);
    $do
    ->appendChild($node);
    
    pr;
    class A {
        private static $x = 1;
    }
    class B extends A {
        function bar() {
            var_dump(self::$x);
        }
    }
    $a = new B;
    $a->bar();
}
