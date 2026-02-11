<?php
class C {
    private $priv1 = 'secret1';
    private $priv2 = 'secret2';
    public $pub1 = 'public1';
    public $pub2 = 'public2';
    public $pub3 = 'public3';
    public $pub4 = 'public4';
}
function f_0() {
    $dom = new DOMDocument;
    $tag = $dom->appendChild($dom->createElement("style"));
    $tag->append("foo");
}
$ao = new ArrayObject(new C);
$ai = $ao->getIterator();
for ($i_1 = 0; $i_1 < 10; $i_1++) {
    set_exception_handler(function () { print "EX\n"; });
}
function f_2() {
    $conn = pg_connect($conn_str);
    $table='test_68638';
    pg_insert($conn,$table, array('id' => 2, 'value' => 10));
}
catch (Exception $e) {
    var_dump($e->getMessage());
}
var_dump($e->getMessage());
$db = MySQLPDOTest::factory();
$db->exec('CREATE TABLE test_33689 (bar INT NOT NULL)');
$db = PDOTest::test_factory(dirname(__FILE__) . '/common.phpt');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
ob_end_clean();
