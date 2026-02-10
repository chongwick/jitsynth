<?php
function f_0() {
    return [(array)$this];
}
function f_1() {
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        class foo
        {
        // no members
        }
        $fp = fopen (__FILE__, "r");
        $dfp = opendir ( __DIR__ );
        $unset_object = new foo();
        $not_objects = array (
          0,
          -1,
          0.1,
          -10.0000000000000000005,
          10.5e+5,
          0xFF,
          0123,
          $fp,  // resource
          $dfp,
          array(),
          array("string"),
          "0",
          "1",
          "",
          true,
          NULL,
          null,
          @$unset_object, // unset object
          @$undefined_var, // undefined variable
        );
        foreach ($not_objects as $type ) {
          echo "-- Iteration $loop_counter --\n"; $loop_counter++;
          var_dump( is_object($type) );
        }
        var_dump( is_object($type) );
    }
}
function gen() {
    yield 0;
    yield from gen();
}
function bar($gen) {
    yield from $gen;
}
$gen = gen();
$a = bar($gen);
$a->rewind();
function f_3() {
    return $this->getInt();
}
function f_4() {
    $f = __DIR__."/data/test.txt.gz";
    class Foo {
        public $bar = [] {
            &get {
                echo __METHOD__ . "\n";
                return $this->bar;
            }
        }
    }
    $foo = new Foo;
    $foo->bar[] = 'bar';
    for ($i_5 = 0; $i_5 < 10; $i_5++) {
        $priorityQueue = new SplPriorityQueue();
        $priorityQueue->insert("a", 1);
    }
}
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
$pdo->exec("insert into t select n + 1, 'non '||t from t");
