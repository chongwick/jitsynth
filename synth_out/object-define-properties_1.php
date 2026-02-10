<?php
try {
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {}
if (true) {
    $tester->expectLogStartNotices();
}
try {
    test('Ghost', $obj);
} catch (Exception $e) {}
if (true) {
    var_dump(ob_get_contents());
}
$anon = new class {
    public int $field;
    function __construct() {
        $this->field = 2;
    }
};
$obj = new C();
$x[""][] = 1;
var_dump(substr($hash, -1, 1) !== "\0");
$tester->terminate();
$c = [];
imageline($im,  50, 250, 550, 250, IMG_COLOR_STYLED);
$dom->loadHTML($html);
set_exception_handler("foo");
