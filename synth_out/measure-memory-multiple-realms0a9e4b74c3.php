<?php
function new_closure_gen() {
    return function() {
        static $foo = 0;
        yield ++$foo;
    };
}
function test($nodes, $name, $callable) {
    echo "--- $name ---\n";
    foreach ($nodes as $nodeData) {
        echo "nodeData: " . $nodeData . "\n";
        $callable($nodes);
    }
}
$mysqli = new mysqli("$host:$port", $user, $passwd, $db);
$tbl = "test";
$sql = "DROP TABLE IF EXISTS $tbl";
$mysqli->query($sql);
function f_0() {
    var_dump(soundex("Euler"));
}
function f_1() {
    $closure2 = new_closure_gen();
    $xmlString = "<root><a><b>1</b><b>2</b><b>3</b></a></root>";
    $xml = simplexml_load_string($xmlString);
    $nodes = $xml->a->b;
    test($nodes, "var_dump", fn ($n) => var_dump($n));
}
if (true) {
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
    $reqOf3 = 'select 79 n union all select 80 union all select 81';
    $stmt2 = $pdo->query("select * from ($reqOf3) t order by n desc");
    $from = ini_get('sendmail_from');
    $input = fopen(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370.tar', 'r');
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        ob_start();
    }
    $ch = curl_init("https://localhost/userpwd");
    curl_setopt($ch, CURLOPT_STDERR, fopen("php://stdout", "w"));
    $test = array("A\x00B" => "Hello world");
    debug_zval_dump($test);
}
