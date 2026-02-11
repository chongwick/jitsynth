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
$concreteClass_object = new concreteClass();
var_dump(exif_read_data(__DIR__.'/image021.tiff'));
$sh = new SessionHandler;
$r = new Phar(__DIR__ . "/bug69279.phar.zip");
