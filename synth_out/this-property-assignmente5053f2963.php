<?php
class foo1
{
  function __toString() {
    return "Object1";
  }
}
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
function f_0() {
    $reflection = new ReflectionClass('\DateTimeImmutable');
    $immutable = $reflection->newInstanceWithoutConstructor();
    $mutable = \DateTime::createFromImmutable($immutable);
    $count = 1;
    $object2 = new foo1();
}
$i = 0;
$j = 0;
$foo = new FooBar();
$foo[$j++] = $i++;
printf("[002] Expecting string on 32bit got %s/%s\n", gettype($id), var_export($id, true));
$fp = php_cli_server_connect();
$dest = __DIR__ . "/bug40228";
rmdir($dest . '/test/empty');
