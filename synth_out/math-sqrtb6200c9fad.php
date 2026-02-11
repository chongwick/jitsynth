<?php
function test(string $name, object $obj) {
    printf("# %s\n", $name);

    $c = new C();
    $c->dyn = 1;
    $propReflector = new ReflectionProperty($c, 'dyn');

    try {
        $propReflector->setRawValueWithoutLazyInitialization($obj, 'test');
    } catch (\ReflectionException $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
}
class base {
    private function show() {
        echo "base\n";
    }
    function test() {
        $this->show();
    }
}
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
    $body = $dom->getElementsByTagName("body")[0];
    $body->setAttributeNS("http://www.w3.org/2000/xmlns/", "xmlns:a", "");
    if (true) {
        if (true) {
            $host = PHP_CLI_SERVER_HOSTNAME;
        }
        $various_arrays = array (
          array(5 => 55,  66, 22, 33, 11),
          array ("a" => "orange",  "banana", "c" => "apple"),
          array(1, 2, 3, 4, 5, 6),
          array("first", 5 => "second", "third"),
          array(1, 1, 8 => 1,  4 => 1, 19, 3 => 13),
          array('bar' => 'baz', "foo" => 1),
          array('a'=>1,'b'=>array('e'=>2,'f'=>3),'c'=>array('g'=>4),'d'=>5),
        );
        foreach ($various_arrays as $array) {
          echo "\n-- Iteration $count --\n";
        
          echo "- With default sort_flag -\n";
          $temp_array = $array;
          var_dump(asort($temp_array) );
          var_dump($temp_array);
        
          echo "- Sort_flag = SORT_REGULAR -\n";
          $temp_array = $array;
          var_dump(asort($temp_array, SORT_REGULAR) );
          var_dump($temp_array);
          $count++;
        }
        $temp_array = $array;
        var_dump(asort($temp_array, SORT_REGULAR) );
    }
}
$bert = "file://" . __DIR__ . "/bug41033.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_SERVER));
$reflector = new ReflectionClass(C::class);
$obj = $reflector->newLazyProxy(function () {
    throw new \Exception('initializer');
});
test('Proxy', $obj);
$a = array(1,2,3);
$s1 = "some string";
var_dump($a + $s1);
catch (\Error $e) {
    var_dump($e);
}
var_dump($e);
test();
$code = null;
$err = null;
pfsockopen('udp://127.0.0.1', '63844', $code, $err, (PHP_INT_MIN/100000)-1);
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
var_dump($body->lookupNamespaceURI("a"));
$t = new base();
$t->test();
