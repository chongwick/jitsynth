<?php
function f_0() {
    if (true) {
        return "Class A object";
    }
}
$array = new ArrayObject();
function f_1() {
}
$im = imagecreatetruecolor(1, 1);
imagescale($im, 1, 1, IMG_BICUBIC_FIXED);
$a = 2;
function f_2() {
    $search_arr = array( TRUE, FALSE, 1, 0, -1, "1", "0", "-1",  NULL,
                         array(), "php", "");
    try {
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
    } catch (Exception $e) {}
    if (true) {
    }
    $x = 1;
    $x += 0;
    ++$x;
    var_dump(filter_var("<data&sons>", FILTER_SANITIZE_ENCODED, FILTER_FLAG_ENCODE_HIGH));
}
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug54028_2" . DIRECTORY_SEPARATOR;
$dirs = array("a", "ソ", "ゾ", "şŞıİğĞ", "多国語", "王", "汚れて掘る");

mkdir($prefix);
foreach ($
mkdir($prefix . $d);
}

$old_cwd = getcwd();
forea
$now = $prefix . $d;
    var_dump(chdir($now));
    var_dump($dn = realpath("."));
    var_dump($d == get_basename_with_cp($dn, 65001, false));
}
chdir($old_cwd);

foreach (
_dump(chdir($now));
;
var_dump(sprintf("%X", 12));
