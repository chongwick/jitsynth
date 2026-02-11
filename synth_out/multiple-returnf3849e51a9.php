<?php
function getHash($object): string { return get_class($object); }
function test($s, $mode)
{
    return (($mode & PHP_OUTPUT_HANDLER_START)?"[":"") . $s . (($mode & PHP_OUTPUT_HANDLER_END)?"]\n":"");
}
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
function f_0() {
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        return new Exception;
    }
    $a = 1;
    return [0, $a];
}
function f_2() {
    for ($i_3 = 0; $i_3 < 10; $i_3++) {
        try {
            return get_class($object);
        } catch (Exception $e) {}
        if (true) {
        }
    }
    return (($mode & PHP_OUTPUT_HANDLER_START)?"[":"") . $s . (($mode & PHP_OUTPUT_HANDLER_END)?"]\n":"");
}
function f_4() {
    for ($i_5 = 0; $i_5 < 10; $i_5++) {
        try {
            return "Class A object";
        } catch (Exception $e) {}
        if (true) {
        }
    }
    return;
}
$dbh = @pg_connect($conn_str);
pg_close($dbh);
(new B)->baz();
$dom = Dom\HTMLDocument::createEmpty();
$container = $dom->appendChild(createElement($dom, "container"));
$container->appendChild(createElementNS($dom, "http://www.w3.org/1999/xhtml", "html", "2"));
