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
function f_0() {
    $date = new DateTime("28-July-2008");
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        $tz_aus = new DateTimeZone('Australia/Sydney');
    }
    $reflector = new ReflectionClass(C::class);
    for ($i = 0; $i < 2; $i++) {
        $obj = $reflector->newLazyGhost(function ($obj) use ($i) {
            if ($i === 1) {
                throw new \Exception();
            }
        });
        $obj->c = 1;
    }
    $obj = $reflector->newLazyGhost(function ($obj) use ($i) {
            if ($i === 1) {
                throw new \Exception();
            }
        });
    $a = 1;
    return [0, $a];
}
$fiber = new Fiber(function (): void {
    $self = Fiber::getCurrent();
    $self->resume();
});
$concreteClass_object = new concreteClass();
