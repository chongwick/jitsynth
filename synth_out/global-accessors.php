<?php
$dfp = opendir ( __DIR__ );
$ch = curl_init("https://localhost/username");
curl_setopt($ch, CURLOPT_STDERR, fopen("php://stdout", "w"));
$test = array("A\x00B" => "Hello world");
var_dump($test);
var_dump(json_decode('{"key":"value", "":"value"}', true));
var_dump(c1::$a1);
function f_0() {
    $options = stream_context_get_options($this->context);
    return true;
}
function f_1() {
    $i = 1;
    $k = 2 * $i;
    $this->values = array('a' => 0);
    function __set($name, $value)
      {
        print "set $name = $value ($name was ".$this->values[$name].")\n";
        $this->values[$name] = $value;
      }
    $this->values[$name] = $value;
    function __get($name)
      {
        print "get $name (returns ".$this->values[$name].")\n";
        return $this->values[$name];
      }
    return $this->values[$name];
}
public function test(P $sibling) {
        $sibling->common();
    }
$sibling->common();
$now = new DateTime('2018-11-03 11:34:20.781751');
$ago = new DateTime('2018-11-03 11:34:20.000000');
$diff = $ago->diff($now);
var_dump($diff->invert, $diff->s, $diff->f);
class C {
    public int $a;
}
$reflector = new ReflectionClass(C::class);
$obj = new C();
$reflector->resetAsLazyGhost($obj, function ($obj) use ($reflector) {
    try {
        $reflector->resetAsLazyGhost($obj, function () { });
    } catch (Error $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
    try {
        $reflector->resetAsLazyProxy($obj, function () { });
    } catch (Error $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }

});
$dom = new DOMImplementation();
$type = $dom->createDocumentType('html');
var_dump($type->childNodes);
