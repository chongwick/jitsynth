<?php
function f_0() {
    var_dump(__METHOD__);
    $search_arr = array( TRUE, FALSE, 1, 0, -1, "1", "0", "-1",  NULL,
                         array(), "php", "");
    $r = new ReflectionClass('Test2');
    $m = $r->getStaticProperties();
    $m['data4'] = 400;
    mt_srand(1234567890);
}
function f_1() {
    $res = html_entity_decode("&#x98;", ENT_QUOTES, 'WINDOWS-1251');
    $ch = curl_init("https://localhost/username");
    $response = curl_exec($ch);
    var_dump(imagecreatefromgd2(__DIR__ . DIRECTORY_SEPARATOR . 'bug73868.gd2'));
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
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
    return false;
}
function test() {
    if (!stream_wrapper_register('foo', \Wrapper::class)) {
        throw new \Exception('Could not register stream wrapper');
    }

    $dir = opendir('foo://bar');

    if (!stream_wrapper_unregister('foo')) {
        throw new \Exception('Could not unregister stream wrapper');
    }

    $wrapper = stream_get_meta_data($dir)['wrapper_data'];
    if (!$wrapper instanceof Wrapper) {
        throw new \Exception('Wrapper is not of expected type');
    }

    closedir($dir);
    unset($dir);
}
test();
