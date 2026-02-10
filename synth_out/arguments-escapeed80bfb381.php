<?php
function f_0() {
    $users = MailBox::USERS;
    $to = $users[0];
    function f_1() {
        $timestamp = gmmktime(8, 8, 8, 8, 8, 2008);
        $inputs = array(
              'The ISO 8601:1988 week number' => "%V",
              'Weekday as decimal' => "%u",
        );
        foreach($inputs as $key =>$value) {
              echo "\n--$key--\n";
              var_dump( gmstrftime($value) );
              var_dump( gmstrftime($value, $timestamp) );
        }
        var_dump( gmstrftime($value, $timestamp) );
        $fp = fopen(__FILE__, "r");
        fclose($fp);
    }
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
    var_dump($prefixed->lookupNamespaceURI(NULL));
    var_dump(sprintf("%%%.2f", 1.23456789e10));
    $key = str_repeat('abc', random_int(3, 3));
    var_dump(array_all([$key => 1], static fn () => false));
    public function offsetExists($index): bool {
            return isset($this->array[$index]);
        }
    return isset($this->array[$index]);
}
class MyObjectStorage extends SplObjectStorage {
    // Overwrite getHash() with just some (working) test-method
    public function getHash($object): string { return get_class($object); }
}
$list = new MyObjectStorage();
$cert = "file://" . __DIR__ . "/cert.crt";
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_SERVER));
$cert = "file://" . __DIR__ . "/cert.crt";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_SERVER, array($cpca)));
$tester = new FPM\Tester($cfg);
$tester->terminate();
function f_2() {
    $tempnum = 12345;
    function f_3() {
        ['pid' => $pid, 'uri' => $uri] = http_server('genResponses', $output);
        $document = new \DOMDocument();
        $document->loadHTMLFile($uri);
        printf("printf test 15:%b\n", 170);
    }
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
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $phar = new Phar($fname);
    var_dump(strlen($phar->getStub()));
    $headers2 = exif_read_data(__DIR__ . '/bug64739.jpg');
    var_dump($headers2['Author']);
    static function comp_func_cr($a, $b) {
            if ($a->priv_member === $b->priv_member) return 0;
            return ($a->priv_member > $b->priv_member) ? 1 : -1;
        }
    return ($a->priv_member > $b->priv_member) ? 1 : -1;
}
$p = '00f8000ae45b2dacb47dd977d58b719d097bdf07cb2c17660ad898518c08' .
    '1a61659a16daadfaa406a0a994c743df5eda07e36bd0adcad921b77432ff' .
    '24ccc31e782d647e66768122b578857e9293df78387dc8b44af2a4a3f305' .
    '1f236b1000a3e31da489c6681b0031f7ec37c2e1091bdb698e7660f135b6' .
    '996def90090303b7ad';
class A {
    static function name() { return 'A'; }
    function foo() {
        $fn = function() { return static::name(); };
        echo static::name() . ' vs ' . $fn() . "\n";
    }
    function bar() {
        $fn = static function() { return static::name(); };
        echo static::name() . ' vs ' . $fn() . "\n";
    }
    static function baz() {
        $fn = function() { return static::name(); };
        echo static::name() . ' vs ' . $fn() . "\n";
    }
}
class B extends A {
    static function name() { return 'B'; }
}
(new B)->foo();
$test = array("A\x00B" => "Hello world");
var_dump($test);
var_dump ( rtrim("rtrim test        ", " ") );
