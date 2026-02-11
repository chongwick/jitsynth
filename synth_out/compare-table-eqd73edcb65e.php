<?php
function PostEvents($x) {
    var_dump($x);
    exit();
  return $x;
}
class PHPUnit_Framework_MockObject_Matcher {
    public $stub = null;
    public $methodNameMatcher;
    public function invoked($invocation) {
        return $this->stub->invoke($invocation);
    }
}
class SomeClass implements JsonSerializable {
    public function jsonSerialize(): mixed {
        return [get_object_vars($this)];
    }
}
class C {
    public function __toString() {
        global $c;
        $c = [];
        throw new Exception(__METHOD__);
    }
}
class D {
    public string $prop;
}
function foo() {
  var_dump("hello");
}
$found_flags = $unexpected_flags = '';
$r = new ResourceBundle( 'en_US', BUNDLE );
$t = $r['nonexisting'];
$conn = pg_connect($conn_str);
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
$style = array();
function f_0() {
    return $x;
}
function f_1() {
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        for ($i_3 = 0; $i_3 < 10; $i_3++) {
            $wsdl = __DIR__."/bug35142.wsdl";
            $OuterMatcher = new PHPUnit_Framework_MockObject_Matcher();
            $OuterMatcher->methodNameMatcher = null;
            $counter = 1;
            $class = new SomeClass;
            $arr = [$class];
            var_dump(json_encode($arr));
            error_reporting(E_ALL ^ E_NOTICE);
            var_dump(mb_stripos('Hello', 'e', 0, '8bit'));
        }
    }
    $d = new D();
    $c = new C();
    $d->prop = $c;
    for ($i_4 = 0; $i_4 < 10; $i_4++) {
        for ($i_5 = 0; $i_5 < 10; $i_5++) {
            foo();
        }
    }
}
$array = array('f' => "first", "s" => 'second', 1, 2.222);
$temp_array = $array;
var_dump($temp_array);
ob_start("test");
