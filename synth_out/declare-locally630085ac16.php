<?php
function bar() {
    yield from foo();
}
$gen = bar();
class C {
    private $priv1 = 'secret1';
    private $priv2 = 'secret2';
    public $pub1 = 'public1';
    public $pub2 = 'public2';
    public $pub3 = 'public3';
    public $pub4 = 'public4';
}
$ao = new ArrayObject(new C);
$ai = $ao->getIterator();
$ai->rewind();
$test_array = array(1, array(1 => "one", "two" => 2, "" => "f") );
var_dump( end($test_array) );
