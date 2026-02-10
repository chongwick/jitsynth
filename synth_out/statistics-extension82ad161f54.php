<?php
var_dump(mb_check_encoding("&\xc2\xb7 TEST TEST TEST TEST TEST TEST", "HTML-ENTITIES"));
class FooBar implements ArrayAccess {
    private $array = array();

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

    public function offsetUnset($index): void {
        throw new Exception('FAIL');
        unset($this->array[$index]);
    }

}
$i = 0;
$j = 0;
$foo = new FooBar();
$foo[$j++] = $i++;
$dom = Dom\HTMLDocument::createEmpty();
var_dump($dom->lookupNamespaceURI(""));
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    set_include_path(__DIR__.'/bug39542;.');
}
