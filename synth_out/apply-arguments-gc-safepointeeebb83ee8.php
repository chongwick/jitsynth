<?php
class SomeClass2 implements JsonSerializable {
    public function jsonSerialize(): mixed {
        return [(array)$this];
    }
}
function f_0() {
    if (true) {
        $context = stream_context_create(['dummy' => ['foo' => 'bar']]);
        file_get_contents('dummy://foo', false, $context);
    }
    return false;
}
function f_1() {
    $class = new SomeClass2;
    $arr = [$class];
    var_dump(json_encode($arr));
}
for ($i_2 = 0; $i_2 < 10; $i_2++) {
    $dom = new DOMDocument();
    $dom->loadXML('<root><child/></root>');
}
