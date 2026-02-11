<?php
abstract class Y {
    abstract public string $prop {
        get;
        set => "foo";
    }
}
class X extends Y {
    public string $prop {
        get => "bar";
    }
}
$a = "lest";
$a[0] = "t";
$x = new X;
$str = "This is a test string.\n";
$test = array("A\x00B" => "Hello world");
var_export($test);
$priorityQueue = new SplPriorityQueue();
print_r($priorityQueue->top());
$fn = "bug71263.bz2";
unlink($fn);
undefined_function();
