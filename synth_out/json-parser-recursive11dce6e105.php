<?php
$f = __DIR__."/data/test.txt.gz";
$h = gzopen($f, 'r');
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $client = new SoapClient(__DIR__."/bug29061.wsdl", array("exceptions"=>0));
}
class C {
    public int $a;
}
$reflector = new ReflectionClass(C::class);
$obj = new C();
$reflector->initializeLazyObject($obj);
