<?php
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
$input = fopen(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370.tar', 'r');
$date = new DateTimeImmutable('2022-10-09 02:41:54.515330', new DateTimeZone('America/Los_Angeles'));
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $style = array();
}
$d = new D();
$c = new C();
$d->prop = $c;
