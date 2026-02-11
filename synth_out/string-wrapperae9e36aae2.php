<?php
class C {
    public function __toString() {
        global $c;
        $c = [];
        throw new Exception(__METHOD__);
    }
}
function test(string $name, object $obj) {
    printf("# %s\n", $name);

    $c = new C();
    $c->dyn = 1;
    $propReflector = new ReflectionProperty($c, 'dyn');

    try {
        $propReflector->setRawValueWithoutLazyInitialization($obj, 'test');
    } catch (\ReflectionException $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
}
$c = new C();
function f_0() {
    $b = new SplObjectStorage();
    $object = new StdClass();
    $b->attach($object);
    clearstatcache();
    $f = __DIR__."/data/test.txt.gz";
    $h = gzopen($f, 'r');
    gzpassthru($h);
}
$GLOBALS['b'] = 2;
$a = &$GLOBALS['a'];
$b = &$GLOBALS['b'];
$GLOBALS['b'] = 3;
var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
$im = imagecreate(10,10);
trycatch_dump(
    fn() => imagecropauto($im, IMG_CROP_THRESHOLD, 0, 1337)
);
printf("# %s\n", $name);
