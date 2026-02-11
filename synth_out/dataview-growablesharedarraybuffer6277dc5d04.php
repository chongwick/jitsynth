<?php
class A {
    public function __call($name, $args) {
        for ($i = 0; $i < 5; $i++) {
            yield $i;
        }
    }
}
class Foo {
  public $bar = "bat";
}
$a = new PDO("sqlite::memory:");
$b = $a->prepare("insert into test_35336 (b) values (?)");
$b->execute(array (5));
$a = new A();
foreach ($a->gen() as $n) {
    var_dump($n);
}
var_dump($n);
$meta_res = $stmt->result_metadata();
$field = $meta_res->fetch_field();
printf("Orgtable     : %s\n", $field->orgtable);
$dom = Dom\HTMLDocument::createEmpty();
$container = $dom->appendChild(createElement($dom, "container"));
$container->appendChild(createElement($dom, "foo:HTML", "6"));
ob_start();
$foo = new Foo;
var_dump($foo);
