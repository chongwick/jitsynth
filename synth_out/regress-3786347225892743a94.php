<?php
$rc = new ReflectionClass('Foo');
function f_0() {
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
    $stmt = $pdo->prepare("select :1 n union all select :1 + 1 union all select :1 + 2 union all select :1 + 3");
    $res = [];
    $res[] = $stmt->fetch();
}
$db = PDOTest::test_factory(dirname(__FILE__) . '/common.phpt');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_NUM);
function test(string $name, object $obj) {
    printf("# %s:\n", $name);

    var_dump($obj);
    var_dump($obj->a);
    var_dump($obj);
}
var_dump($obj->a);
$filename = __DIR__ . DIRECTORY_SEPARATOR . 'bug70752.zip';
$zip = new ZipArchive();
$zip->open($filename);
$ch = curl_init("https://localhost/userpwd");
curl_setopt($ch, CURLOPT_VERBOSE, true);
