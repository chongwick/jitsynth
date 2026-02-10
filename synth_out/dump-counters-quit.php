<?php
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
test($nodes, "children", fn ($n) => $n->children());
if (true) {
    class C extends stdClass {
        public int $a;
    }
    $obj = new C();
    mysqli_free_result($res);
    public function invoke($invocation) {
            return call_user_func_array($this->callback, $invocation->parameters);
        }
    public function invoke( $invocation) {
            foreach ($this->matchers as $match) {
                $match->invoked($invocation);
            }
        }
    foreach ($this->matchers as $match) {
                $match->invoked($invocation);
            }
    $match->invoked($invocation);
}
$array = array("test" => 1);
$a = "lest";
var_dump($array[$a]);
