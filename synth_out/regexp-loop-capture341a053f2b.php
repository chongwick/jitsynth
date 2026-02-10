<?php
$fp = fopen(__DIR__."/test2.csv", "r");
fclose($fp);
class C {
    public int $a;
}
$reflector = new ReflectionClass(C::class);
$obj = new C();
$reflector->initializeLazyObject($obj);
