<?php
function throw_exc() {
  throw new Exception('TEST_EXCEPTION');
}
class Test {

  public function __construct() {
    echo 'Constr' ."\n";
  }

  public function __destruct() {
    echo 'Destr' ."\n";
  }

}
class C {
    private $priv1 = 'secret1';
    private $priv2 = 'secret2';
    public $pub1 = 'public1';
    public $pub2 = 'public2';
    public $pub3 = 'public3';
    public $pub4 = 'public4';
}
function f_0() {
    $T =new Test(throw_exc());
    return 1;
}
$ao = new ArrayObject(new C);
$ai = $ao->getIterator();
$ai->rewind();
$dom = new DOMDocument;
$dom->getElementsByTagName('test2')[0]->setIdAttribute('attr', true);
