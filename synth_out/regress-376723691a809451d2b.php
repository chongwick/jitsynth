<?php
class C {
    function __serialize(): array {
        global $list;
        $list->pop();
        return [];
    }
}
$xmlstring = '<?xml version="1.0" encoding="UTF-8"?>
<books></books>';
function f_0() {
    $str = 'Hello World';
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        $code = <<<EOT
        <?php
        echo "Test\n";
        EOT;
        $reflector = new ReflectionClass(C::class);
        $code = <<<EOT
        <?php
        \$cv = get_browser("Konqueror/2.0")->browser_name_pattern;
        var_dump(\$cv);
        EOT;
    }
    static function comp_func_cr($a, $b) {
            if ($a->priv_member === $b->priv_member) return 0;
            return ($a->priv_member > $b->priv_member) ? 1 : -1;
        }
    return ($a->priv_member > $b->priv_member) ? 1 : -1;
}
function f_2() {
    $curl = curl_init("http://www.google.com");
}
for ($i_3 = 0; $i_3 < 10; $i_3++) {
    var_dump($line);
}
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
$reqOf3 = 'select 79 n union all select 80 union all select 81';
$stmt = $pdo->prepare($reqOf3);
$res = $stmt->fetchAll();
$count = 1;
$list = new SplDoublyLinkedList;
$list->add(0, new C);
$code = <<<EOT
<?php
echo "Test\n";
EOT;
$mysqli = new mysqli("$host:$port", $user, $passwd, $db);
$tbl = "test";
$sql = "CREATE TABLE $tbl (bit_column_1 bit(16) NOT NULL) DEFAULT CHARSET=utf8";
$mysqli->query($sql);
var_dump( range('A', 'H', 0) );
