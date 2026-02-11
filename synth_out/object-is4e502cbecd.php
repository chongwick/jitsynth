<?php
class Test implements ArrayAccess {
    public function offsetExists($x): bool { $GLOBALS["obj"] = 24; return true; }
    public function offsetGet($x): mixed { var_dump($x); return 42; }
    public function offsetSet($x, $y): void { }
    public function offsetUnset($x): void { }
}
$plain = "The quick brown fox jumps over the lazy dog.";
$compressed = (string) bzcompress($plain);
$compressed = substr($compressed, 0, strlen($compressed) - 20);
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        if (true) {
            var_dump(substr_count("aaa", "a", 0, 0));
            $array = array('f' => "first", "s" => 'second', 1, 2.222);
            $temp_array = $array;
            var_dump($temp_array);
        }
        if (!true) {
            $obj = new Test;
            var_dump($obj);
        }
    }
}
