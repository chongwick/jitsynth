<?php
function test(string $input) {
    var_dump(filter_var($input, FILTER_VALIDATE_URL));
}
#[\AllowDynamicProperties]
class C {
    public $b;
    public function __construct() {
        $this->a = new Canary();
    }
}
function setStyleAndThickness($im, $color, $thickness)
{
    $style = array();
    $i = 0;
    while ($i < 16 * $thickness) {
        $style[$i++] = $color;
    }
    while ($i < 20 * $thickness) {
        $style[$i++] = IMG_COLOR_TRANSPARENT;
    }
    while ($i < 28 * $thickness) {
        $style[$i++] = $color;
    }
    while ($i < 32 * $thickness) {
        $style[$i++] = IMG_COLOR_TRANSPARENT;
    }
    imagesetstyle($im, $style);
    imagesetthickness($im, $thickness);
}
function f_0() {
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
    $reqOf3 = 'select 79 n union all select 80 union all select 81';
    $stmt1 = $pdo->query($reqOf3);
    try {
        $ar1 = array("row1" => 2, "row2" => 1);
        $args = array(&$ar1);
        var_dump(call_user_func_array("array_multisort", $args));
    } catch (Exception $e) {}
    if (true) {
        $dt = DateTime::createFromFormat('Y-m-d|', '2011-02-02');
        $trace_file = '/tmp/mysqli_debug_phpt.trace';
        printf("[004] Trace file '%s' is very small. filesize() reports only %d bytes. Please check.\n",
                    $trace_file,
                    filesize($trace_file));
    }
    $array_test = array("a", "b", "d", 7, "u" => "U", -4, "-.008" => "neg.008");
    var_dump( end($array_test) );
}
$trace_file = '/tmp/mysqli_debug_phpt.trace';
unlink($trace_file);
test("http://php.net\\@aliyun.com/aaa.do");
$reflector = new ReflectionClass(C::class);
$obj = new C();
$reflector->resetAsLazyGhost($obj, function ($obj) {
    var_dump("initializer");
    $obj->__construct();
});
set_error_handler(function($no, $msg) {
    throw new Exception($msg);
});
function unserialize($data) {
        session_decode($data);
    }
session_decode($data);
$im = imagecreate(800, 800);
$black = imagecolorallocate($im, 0, 0, 0);
setStyleAndThickness($im, $black, 2);
