<?php
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
var_dump(strncmp("test ", "e", 10));
$concreteClass_object = new concreteClass();
$dom = Dom\HTMLDocument::createEmpty();
dumpNodeList($dom->getElementsByTagName("bar:HTML"));
