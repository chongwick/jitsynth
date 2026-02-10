<?php
$meta_res = $stmt->result_metadata();
$field = $meta_res->fetch_field();
printf("Table        : %s\n", $field->table);
$list = new SplDoublyLinkedList();
$list->next();
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
$d0 = $prefix . "ソフト";
$d1 =
st0.txt");
touch("$d1\\t;
class A {
    public $b;
}
$a = new A;
var_dump($a);
class testObject extends ArrayObject {
    protected $test;

    public function getTest() {
        return $this->test;
    }

    public function setTest($test) {
        $this->test = $test;
    }
}
$obj = new testObject();
$obj2 = unserialize(serialize($obj));
var_dump($obj2->getTest());
$zip = new ZipArchive();
$zip->extractTo(__DIR__);
var_dump(soundex("Lloyd")       == soundex("Ladd"));
var_dump(gzfile(__DIR__."/data/test.txt.gz", true));
