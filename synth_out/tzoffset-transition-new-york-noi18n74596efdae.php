<?php
function validate($value)
{
    foreach ([0] as $_) {
        $a = &$value->a;
        $value->a ?? null;
    }
}
function test($nodes, $name, $callable) {
    echo "--- $name ---\n";
    foreach ($nodes as $nodeData) {
        echo "nodeData: " . $nodeData . "\n";
        $callable($nodes);
    }
}
var_dump($row);
validate((object) []);
$db = PDOTest::test_factory(dirname(__FILE__) . '/common.phpt');
foreach ([false, true] as $emulate) {
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, $emulate);

    try {
        $stmt = $db->prepare('select ?- lseg \'((-1,0),(1,0))\'');
        $stmt->execute();
    } catch (PDOException $e) {
        var_dump('ERR');
    }

    $stmt = $db->prepare('select ??- lseg \'((-1,0),(1,0))\'');
    $stmt->execute();

    var_dump($stmt->fetch());
}
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, $emulate);
$dom = Dom\HTMLDocument::createEmpty();
$container = $dom->appendChild(createElement($dom, "container"));
$container->appendChild(createElementNS($dom, "http://www.w3.org/1999/xhtml", "html", "2"));
$xmlString = "<root><a><b>1</b><b>2</b><b>3</b></a></root>";
$xml = simplexml_load_string($xmlString);
$nodes = $xml->a->b;
test($nodes, "attributes", fn ($n) => $n->attributes());
test();
$a = 'ok';
$b = 'ok';
$_a = $a;
$_b = $b;
var_dump($_a, $_b);
define("FOO", "okey");
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
$pdo->exec("create temp table t (n int, t text)");
var_dump(intlcal_get_error_message(null));
$dom = Dom\HTMLDocument::createEmpty();
var_dump($dom->lookupNamespaceURI("a"));
var_dump ( rtrim("rtrim test$#@", "#@$") );
