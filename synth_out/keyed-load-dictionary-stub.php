<?php
function f_0() {
    $db = PDOTest::factory();
    $driver = $db->getAttribute(PDO::ATTR_DRIVER_NAME);
    $is_oci = $driver == 'oci';
    $filename = __DIR__ . DIRECTORY_SEPARATOR . 'bug70752.zip';
    function PostEvents($x) {
        var_dump($x);
        exit();
      return $x;
    }
    return $x;
}
function f_1() {
    function Test($param) {
        global $g;
        $g = $param->strA."\n".$param->strB."\n";
        return $g;
    }
    $g = $param->strA."\n".$param->strB."\n";
    return $g;
}
$reflection = new ReflectionClass('\DateTime');
$mutable = $reflection->newInstanceWithoutConstructor();
$immutable = \DateTimeImmutable::createFromInterface($mutable);
var_dump($s);
$dir = opendir('foo://bar');
closedir($dir);
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
$foo = new FooBar();
print_R($foo);
