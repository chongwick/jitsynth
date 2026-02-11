<?php
function f_0() {
    if (true) {
        return true;
    }
    if (!true) {
        $x = 1.0;
        $x += 0;
        return ++$x;
    }
}
for ($i_1 = 0; $i_1 < 10; $i_1++) {
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $phar = new Phar($fname);
    $phar->setDefaultStub('my/custom/thingy.php', 'the/web.php');
    $rc = new ReflectionClass('Foo');
    var_dump($rc->getStaticProperties());
}
