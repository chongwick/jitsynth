<?php
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    class SomeClass implements JsonSerializable {
        public function jsonSerialize(): mixed {
            return [get_object_vars($this)];
        }
    }
    $class = new SomeClass;
    $fmt = new NumberFormatter('en_US', NumberFormatter::DECIMAL);
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        $reflector = new ReflectionClass(C::class);
        $obj = $reflector->newLazyProxy(function () {
            throw new \Exception('initializer');
        });
    }
}
