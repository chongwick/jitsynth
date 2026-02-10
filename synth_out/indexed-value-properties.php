<?php
function f_0() {
    return reset($this->a);
}
function f_1() {
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        $html = <<<HTML
        <div id="test"><span>hi there</span></div>
        HTML;
        $dom = new DOMDocument('1.0', 'UTF-8');
        $dom->loadHTML($html);
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
        test($nodes, "attributes", fn ($n) => $n->attributes());
        $im = imagecreatetruecolor(1, 1);
        imagescale($im, 1, 0, 0);
        $array = new ArrayObject();
        $array->offsetSet('key', 'value');
        var_dump(new Foo);
        mysqli_free_result($res);
    }
}
$lazy = true;
$responses = array(
    "data://text/plain,HTTP/1.1 200 Some very long reason-phrase to test that this is properly handled by our code without adding a new header like  Bad: Header\r\nGood: Header\r\n\r\nBody",
    "data://text/plain,HTTP/1.1 200 \r\nGood: Header\r\n\r\nBody",
);
['pid' => $pid, 'uri' => $uri] = http_server($responses, $output);
$f = @fopen($uri, "r");
$db = MySQLPDOTest::factory();
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
class testObject extends ArrayObject {
    protected $test;

    public function getTest() {
        return $this->test;
    }

    public function setTest($test) {
        $this->test = $test;
    }
}
$obj = new testObject();
$obj->setTest('test');
$y = 0;
function gen() {
    yield 0;
    yield from gen();
}
$gen = gen();
$bert = "file://" . __DIR__ . "/bug41033.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_ANY));
$dt = new DateTime('@1604215800');
function validate($value)
{
    foreach ([0] as $_) {
        $a = &$value->a;
        $value->a ?? null;
    }
}
$a = &$value->a;
var_dump(intlcal_is_weekend(1));
var_dump(posix_setrlimit(POSIX_RLIMIT_NOFILE, 128, 128));
