<?php
#[AllowDynamicProperties]
class A {
}
function t1()
{
    ob_start("test");
    echo "Hello from t1 1 ";
        echo "Hello from t1 2 ";
        ob_end_flush();
}
$a = new A;
t1();
$f = __DIR__."/data/test.txt.gz";
$h = gzopen($f, 'r');
var_dump(gzread($h, 5));
