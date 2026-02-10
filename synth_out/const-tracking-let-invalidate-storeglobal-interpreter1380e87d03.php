<?php
#[\AllowDynamicProperties]
class C {
    public $b;
    public function __construct() {
        $this->a = new Canary();
    }
}
$reflector = new ReflectionClass(C::class);
$obj = new C();
$reflector->resetAsLazyProxy($obj, function ($obj) {
    var_dump("initializer");
    return new C();
});
function f_0() {
    $dom = new DOMDocument;
    $element = $dom->appendChild($dom->createElement('root'));
}
$attr = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4 COLLATE utf8mb4_unicode_ci; SET SESSION sql_mode=traditional',
    PDO::ATTR_STRINGIFY_FETCHES => true,
];
$pdo = MySQLPDOTest::factoryWithAttr($attr);
var_dump($pdo->query('SELECT 42')->fetchColumn(0));
$zip = new ZipArchive();
$zip->setPassword('bar');
$link->close();
