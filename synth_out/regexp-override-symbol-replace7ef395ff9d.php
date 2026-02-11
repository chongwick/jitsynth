<?php
class A
{
    use T1;
}
class B extends A
{
    use T2;
}
class C {
    public function __toString() {
        global $c;
        $c = [];
        throw new Exception(__METHOD__);
    }
}
class D {
    public string $prop;
}
$iterator = 1;
$b = new B();
$b->aa();
$d = new D();
$c = new C();
$d->prop = $c;
$dom = Dom\HTMLDocument::createEmpty();
dumpNodeList($dom->getElementsByTagName("htML"));
