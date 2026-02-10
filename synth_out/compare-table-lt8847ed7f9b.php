<?php
$heredoc_str = <<<EOD
%
#$*&
text & @()
EOD;
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt', Pdo::class, true);
$im = imagecreate(10,10);
$date = '7.8.2010';
$unixtime = strtotime($date);
$date = new DateTime("2011-05-17T22:14:12");
function f_0() {
    function Test($param) {
        global $g;
        $g = $param->strA."\n".$param->strB."\n";
        return $g;
    }
    $g = $param->strA."\n".$param->strB."\n";
    return $g;
}
function f_1() {
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        for ($i_3 = 0; $i_3 < 10; $i_3++) {
            class TestSoapClient extends SoapClient {
              private $server;
            
              function __construct($wsdl) {
                parent::__construct($wsdl);
                $this->server = new SoapServer($wsdl);
                $this->server->addFunction('Test');
              }
            
              function __doRequest($request, $location, $action, $version, $one_way = 0): string {
                ob_start();
                $this->server->handle($request);
                $response = ob_get_contents();
                ob_end_clean();
                return $response;
              }
            }
            $client = new TestSoapClient(__DIR__.'/bug38004.wsdl');
            $strA = 'test &amp; test';
            $strB = 'test & test';
            $res = $client->Test(array('strA'=>$strA, 'strB'=>$strB));
            $x = new SoapClient(__DIR__."/bug27722.wsdl");
            class A
            {
                public string $prop;
            }
            $a = new A();
            $a->prop = '';
            $db = PDOTest::factory();
            $insert = $db->prepare("insert into test34630 (id, val) values (1, :blob)");
            $insert->execute();
            $filename =  __DIR__ . DIRECTORY_SEPARATOR . 'bug70752.txt';
            var_dump(file_exists($filename));
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
        }
    }
    $dyadic = 0.00000000000045474735088646411895751953125;
    for ($i_4 = 0; $i_4 < 10; $i_4++) {
        for ($i_5 = 0; $i_5 < 10; $i_5++) {
            set_exception_handler("foo");
        }
    }
}
$GLOBALS['b'] = 2;
$a = &$GLOBALS['a'];
$b = &$GLOBALS['b'];
var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
ini_set("soap.wsdl_cache_enabled",0);
