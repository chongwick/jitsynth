<?php
class C extends stdClass {
    public int $a;
}
function byVal($arg) {
    var_dump($arg);
}
function byRef(&$arg) {
    var_dump($arg);
}
function test(string $name, object $obj) {
    printf("# %s:\n", $name);

    var_dump($obj);
    var_dump($obj->a);
    var_dump($obj);
}
$reflector = new ReflectionClass(C::class);
$obj = new C();
$reflector->resetAsLazyGhost($obj, function ($obj) {
    });
function f_0() {
    var_dump(new Foo);
}
function f_1() {
    $dom = new DOMDocument;
    var_dump($dom->getElementById('x')?->nodeName);
    $depth0 = "depth02";
    $depth1 = "depth1";
    touch(__DIR__ . DIRECTORY_SEPARATOR . $depth0 . DIRECTORY_SEPARATOR . $depth1 . DIRECTORY_SEPARATOR . 'getSubPathname_test_3.tmp');
    $conn = pg_connect($conn_str);
    $table='test_68638';
    pg_insert($conn,$table, array('id' => 2, 'value' => 10));
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
    $code = <<<EOT
    <?php
    echo "Test\n";
    EOT;
    $tester = new FPM\Tester($cfg, $code);
    $tester->expectLogStartNotices();
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
    $fn = "bug71263.bz2";
    $r = fopen($fn, "r");
    stream_filter_append($r, 'bzip2.decompress', STREAM_FILTER_READ);
    $array = array("test" => 1);
    $a = "lest";
    var_dump($array[$a]);
    $im = imagecreate(800, 800);
    imageline($im, 650, 150, 650, 650, IMG_COLOR_STYLED);
}
function f_2() {
    (function() {
    	try {
    		foo(); // Error
    	} catch (\Exception $e) {
    		var_dump($e);
    	} catch (\ParseError $e) {
    		var_dump($e);
    	}
    })();
    var_dump($arg);
    if (true) {
        $file_handle = fopen(__FILE__, "r");
        $values = array (
          /* integers */
          0,  // zero as argument
          000000123,  //octal value of 83
          123000000,
          -00000123,  //octal value of 83
          -12300000,
          0xffffff,  //hexadecimal value
          123456789,
          1,
          -1,
        
          /* floats */
          -0.0,
          +0.0,
          1.234,
          -1.234,
          -2.000000,
          2.0000000,
          -4.0001e+5,
          4.0001E+5,
          6.99999989,
          -.5,
          .567,
          -.6700000e-3,
          -.6700000E+3,
          1E-5,
          -1e+5,
          1e+5,
          1E-5,
        
          /* strings */
          "",
          '',
          " ",
          ' ',
          "0",
          "\0",
          '\0',
          "\t",
          '\t',
          "PHP",
          'PHP',
          "1234\t\n5678\n\t9100\rabcda\x0000cdeh\0stuv",  // strings with escape chars
        
          /* boolean */
          TRUE,
          FALSE,
          true,
          false,
        
          /* arrays */
          array(),
          array(NULL),
          array(true),
          array(""),
          array(''),
          array(array(1, 2), array('a', 'b')),
          array("test" => "is_array", 1 => 'One'),
          array(0),
          array(-1),
          array(10.5, 5.6),
          array("string", "test"),
          array('string', 'test'),
        
          /* resources */
          $file_handle
        );
        foreach( $values as $value ) {
          echo "-- Iteration $counter --\n";
          debug_zval_dump( $value );
          $counter++;
        }
        debug_zval_dump( $value );
        $eml = __DIR__ . "/signed.eml";
        var_dump(openssl_pkcs7_verify($eml, 0));
        $doc = new \DOMDocument();
        $target = $doc->documentElement->lastChild;
        $target->after('bar', $doc->documentElement->firstChild, 'baz');
        for ($i_3 = 0; $i_3 < 10; $i_3++) {
            $sert = "file://" . __DIR__ . "/san-cert.pem";
            var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_OCSP_HELPER));
        }
    }
}
if (true) {
    $inputs = array(
          'The ISO 8601:1988 week number' => "%V",
          'Weekday as decimal' => "%u",
    );
    foreach($inputs as $key =>$value) {
          echo "\n--$key--\n";
          var_dump( gmstrftime($value) );
          var_dump( gmstrftime($value, $timestamp) );
    }
    var_dump( gmstrftime($value) );
    $dom = Dom\HTMLDocument::createEmpty();
    $container = $dom->appendChild(createElement($dom, "container"));
    $container->appendChild(createElement($dom, "foo:HTML", "6"));
    var_dump($obj);
    ++$failuresNb;
    $varOutput = ob_get_contents();
    $varOutput = str_replace(
            [$var_dim_filename],
            ['%s'],
            $varOutput
        );
    file_put_contents(__DIR__ . DIRECTORY_SEPARATOR . "debug_false_container_{$failuresNb}.txt", $varOutput);
}
