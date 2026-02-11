<?php
class bug8318 extends \SplFileObject
{
    public function __construct()
    {
    }

    public function fpassthru(): int
    {
        return 0;
    }
}
abstract class abstractClass
{
  abstract protected function getClassName();
  public function printClassName () {
    echo $this->getClassName() . "\n";
  }
}
class concreteClass extends abstractClass
{
  protected function getClassName() {
    return "concreteClass";
  }
}
class A {
    public function __call($name, $args) {
        eval('$args = array(); var_dump(debug_backtrace());');
    }
}
$cl = new bug8318;
$concreteClass_object = new concreteClass();
$arr  = array("test");
list($c,$d) = is_array($arr)?: NULL;
$a = array(1,2,3);
$a = new A();
$a->test("test");
var_dump(soundex("Lloyd"));
