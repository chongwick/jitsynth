<?php
function f_0() {
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        $row = $result->fetch_object();
        for ($i_2 = 0; $i_2 < 10; $i_2++) {
            if (true) {
                $im = imagecreatefromgd2(__DIR__ . DIRECTORY_SEPARATOR . 'bug73161.gd2');
            }
            $a = null;
            test('sensitive');
            $test_array = array(1, array(1 => "one", "two" => 2, "" => "f") );
            var_dump($ffi->bug_gh16013_return_int());
            $container = false;
            var_dump(__METHOD__);
            if (true) {
                extract($GLOBALS, EXTR_REFS);
            }
            $obj = $reflector->newLazyProxy(function ($obj) {
    var_dump("initializer");
    return new C(1);
});
            var_dump(ob_get_contents());
            if (true) {
                bzwrite($bz, $str);
            }
            $halves[(mt_rand(0, $max - 1) >> 1) & 1]++;
        }
    }
}
$db->beginTransaction();
