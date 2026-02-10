<?php
$re = new ReflectionExtension("hash");
var_dump($re->getConstants());
class Test implements ArrayAccess {
    public function offsetExists($x): bool { $GLOBALS["obj"] = 24; return true; }
    public function offsetGet($x): mixed { var_dump($x); return 42; }
    public function offsetSet($x, $y): void { }
    public function offsetUnset($x): void { }
}
$obj = new Test;
$name = "foo";
var_dump(empty($obj[$name]));
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
test($nodes, "manipulation combined with querying", function ($n) {
    $n->addAttribute("attr", "value");
    (bool) $n["attr"];
    $n->addChild("child", "value");
    $n->outer[]->inner = "foo";
    (bool) $n->outer;
    (bool) $n;
    isset($n->outer);
    isset($n["attr"]);
    unset($n->outer);
    unset($n["attr"]);
    unset($n->child);
});
class C {
	use T;
	private array $a = [1];
}
$o = new C;
$o->foo();
$im = imagecreatetruecolor(1, 1);
imagescale($im, 0, 1, 0);
function test(array... $args) {
    var_dump($args);
}
test([0], [1], 2);
$text = 'This is an ‘example’ of using DOM splitText';
$st
rt = 30;
$le
gth = 3;

$d
 = new DOMDocument('1.0', 'UTF-8');
$no
e = $dom->createTextNode($text);
$do
ched = $node->splitText($start);
$ma
ched->splitText($length);
pri;
$unset_var = 10;
$heredoc = <<<EOT
Hello world
EOT;
$arrays = array (

       // empty array
/*1*/  array(),

       // arrays with integer keys
       array(0 => "0"),
       array(1 => "1"),
       array(1 => "1", 2 => "2", 3 => "3", 4 => "4"),

       // arrays with string keys
/*7*/  array('\tHello' => 111, 're\td' => "color",
             '\v\fworld' => 2.2, 'pen\n' => 33),
       array("\tHello" => 111, "re\td" => "color",
             "\v\fworld" => 2.2, "pen\n" => 33),
       array("hello", $heredoc => "string"), // heredoc

       // array with unset variable
/*10*/ array( @$unset_var => "hello"),

       // array with mixed keys
/*11*/ array('hello' => 1,  "fruit" => 2.2,
             133 => "int",
             @$unset_var => "unset", $heredoc => "heredoc")
);
$arr1 = array(1, "float", "f4", "hello", 2.2, 'color', "string", "pen\n", 11);
foreach($arrays as $arr2) {
  echo "-- Iterator $iterator --\n";

  // Calling array_intersect() with default arguments
  var_dump( array_intersect($arr1, $arr2) );

  // Calling array_intersect() with more arguments.
  // additional argument passed is the same as $arr1 argument
  var_dump( array_intersect($arr1, $arr2, $arr1) );
  $iterator++;
}
var_dump( array_intersect($arr1, $arr2) );
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
$now = new DateTimeImmutable();
$simpleInterval = new DateInterval("P2D");
$dateperiod = (new ReflectionClass(DatePeriod::class))->newInstanceWithoutConstructor();
$dateperiod->__unserialize([
		'start' => $now, 'end' => $now, 'current' => $now, 'interval' => $simpleInterval,
		'recurrences' => 2, 'include_start_date' => true, 'include_end_date' => true,
	]);
class A {
    public function __call($name, $args) {
        for ($i = 0; $i < 5; $i++) {
            yield $i;
        }
    }
}
$a = new A();
foreach ($a->gen() as $n) {
    var_dump($n);
}
var_dump($n);
class Element
{
    public function ThrowException ()
    {
        throw new Exception();
    }

    public static function CallBack(Element $elem)
    {
        $elem->ThrowException();
    }
}
$arr = array(new Element(), new Element(), new Element());
array_map(array('Element', 'CallBack'), $arr);
$db = getDbConnection();
var_dump($db->getAttribute(PDO::DBLIB_ATTR_SKIP_EMPTY_ROWSETS));
