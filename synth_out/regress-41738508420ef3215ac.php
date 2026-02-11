<?php
class Canary {
    public function __construct(public mixed $value) {}
    public function __destruct() {
        var_dump(__METHOD__);
    }
}
function f($canary) {
    var_dump(yield from g());
}
function f_0() {
    try {
        return $i;
    } catch (Exception $e) {}
    if (true) {
    }
}
function f_1() {
    $after = memory_get_usage();
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        $canary = new Canary(null);
        $iterable = f($canary);
        $fiber = new Fiber(function () use ($iterable, $canary) {
            var_dump($canary, $iterable->current());
            $f = $iterable->next(...);
            $f();
            var_dump("not executed");
        });
        $formatter = new \NumberFormatter('en', \NumberFormatter::DECIMAL);
        $value = $formatter->parse('2147483647', \NumberFormatter::TYPE_INT32);
        try {
            $tbl = "test";
            $sql = "INSERT INTO $tbl (bit_column_1) VALUES (0b10101010101)";
        } catch (Exception $e) {}
        if (true) {
        }
        try {
            $I->unit++;
        } catch (Exception $e) {}
        if (true) {
        }
        $b = 'ok';
        $_b = $b;
    }
}
$date1 = new DateTime("Tuesday");
$date2 = DateTime::createFromFormat("D H i s", "Tuesday 0 00 00");
var_dump($date1->format('D') == $date2->format('D'));
$outfile = tempnam(sys_get_temp_dir(), "ssl");
unlink($outfile);
