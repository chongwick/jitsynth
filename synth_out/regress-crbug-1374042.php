<?php
function f_0() {
    try {
        function Test($param) {
            global $g;
            $g = $param->strA."\n".$param->strB."\n";
            return $g;
        }
        $g = $param->strA."\n".$param->strB."\n";
        print_r($g);
    } catch (Exception $e) {}
    if (true) {
        $field = mysqli_fetch_field_direct($res, 1);
        printf("[010] Found unexpected field '%s'\n", $field->name);
    }
}
class Test implements ArrayAccess {
    public function offsetExists($x): bool { $GLOBALS["obj"] = 24; return true; }
    public function offsetGet($x): mixed { var_dump($x); return 42; }
    public function offsetSet($x, $y): void { }
    public function offsetUnset($x): void { }
}
$obj = new Test;
var_dump($obj);
