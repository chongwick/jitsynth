<?php
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $tbl = "test";
    $sql = "CREATE TABLE $tbl (bit_column_1 bit(16) NOT NULL) DEFAULT CHARSET=utf8";
    $oneeighty = M_PI;
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
    printf("[001] Expecting integer on 64bit got %s/%s\n", gettype($id), var_export($id, true));
}
