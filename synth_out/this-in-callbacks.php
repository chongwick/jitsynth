<?php
$fn = "bug71263.bz2";
$r = fopen($fn, "r");
$s = fread($r, 100);
function f_0() {
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
    function test($s, $mode)
    {
        return (($mode & PHP_OUTPUT_HANDLER_START)?"[":"") . $s . (($mode & PHP_OUTPUT_HANDLER_END)?"]\n":"");
    }
    return (($mode & PHP_OUTPUT_HANDLER_START)?"[":"") . $s . (($mode & PHP_OUTPUT_HANDLER_END)?"]\n":"");
}
$fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
$phar = new Phar($fname);
var_dump($phar->getStub());
function f_1() {
    return "Class A object";
}
$dfp = opendir ( __DIR__ );
closedir($dfp);
$depth0 = "depth02";
$iterator = new RecursiveDirectoryIterator(__DIR__ . DIRECTORY_SEPARATOR . $depth0);
$it = new RecursiveIteratorIterator($iterator);
$it->next();
