<?php
function f_0() {
}
public function offsetExists($index): bool {
        return isset($this->array[$index]);
    }
public function offsetGet($index): mixed {
        return $this->array[$index];
    }
public function offsetSet($index, $value): void {
        echo __METHOD__ . "($index, $value)\n";
        $this->array[$index] = $value;
    }
$this->array[$index] = $value;
class A {
    static function name() { return 'A'; }
    function foo() {
        $fn = function() { return static::name(); };
        echo static::name() . ' vs ' . $fn() . "\n";
    }
    function bar() {
        $fn = static function() { return static::name(); };
        echo static::name() . ' vs ' . $fn() . "\n";
    }
    static function baz() {
        $fn = function() { return static::name(); };
        echo static::name() . ' vs ' . $fn() . "\n";
    }
}
class B extends A {
    static function name() { return 'B'; }
}
(new B)->bar();
$im = imagecreate(800, 800);
imageline($im, 600, 700, 100, 200, IMG_COLOR_STYLED);
$depth2 = "depth2";
$oIntlDateFormatter = new IntlDateFormatter("en_GB");
$offset3 = PHP_INT_MAX * 16;
$oIntlDateFormatter->parseToCalendar('America/Los_Angeles', $offset3);
function f_1() {
}
class Foo {
  public $bar = "bat";
}
$foo = new Foo;
$baz = (float)$foo;
var_dump($row['bit_column_1']);
$dbh = @pg_connect($conn_str);
$res = pg_query($dbh, 'SELECT test_notice()');
pg_free_result($res);
