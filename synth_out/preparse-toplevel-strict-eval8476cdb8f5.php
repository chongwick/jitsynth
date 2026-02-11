<?php
class ParentClass { }
class ChildClass extends ParentClass {
    public function testIsCallable() {
        var_dump(is_callable(array($this, 'parent::testIsCallable')));
    }
    public function testIsCallable2() {
        var_dump(is_callable(array($this, 'static::testIsCallable2')));
    }
}
$x = 1;
$errcontext = '';
$child = new ChildClass();
$child->testIsCallable();
$browser=get_browser(NULL, true);
print_r($browser);
$priorityQueue = new SplPriorityQueue();
$priorityQueue->insert("a", 1);
