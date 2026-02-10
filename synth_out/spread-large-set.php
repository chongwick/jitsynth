<?php
class A {

    private $mysqli;

    public function __construct() {
        global $user, $host, $passwd, $db, $port, $socket;
        $this->mysqli = new mysqli($host, $user, $passwd, $db, $port, $socket);
        $result = $this->mysqli->query("SELECT NOW() AS my_time FROM DUAL");
        $row = $result->fetch_object();
        echo $row->my_time."<br>\n";
        $result->close();
    }

    public function __destruct() {
        $this->mysqli->close();
    }
}
$A = new A();
$thisdir = __DIR__;
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    var_dump($row);
}
$ar1 = array("row1" => 2, "row2" => 1);
$GLOBALS['a'] = "bug\n";
for ($i_1 = 0; $i_1 < 10; $i_1++) {
    function test(string $input) {
        var_dump(filter_var($input, FILTER_VALIDATE_URL));
    }
    test("http://t[est@[::1]");
}
$iterator = 1;
$tmpFileOut2 = tempnam(sys_get_temp_dir(), 'test');
for ($i_2 = 0; $i_2 < 10; $i_2++) {
    $dom = Dom\XMLDocument::createFromString(<<<XML
    <root>
        <test1 xml:id="x"/>
        <test2 xml:id="x"/>
    </root>
    XML);
    var_dump($dom->getElementById('x')?->nodeName);
}
$w = new Phar(__DIR__ . "/bug69279.phar.zip");
$w["bug69279.txt"] = "Sample content.";
