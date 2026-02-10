<?php
$reflector = new ReflectionClass(C::class);
$obj = $reflector->newLazyProxy(function () {
    throw new \Exception('Initializer');
}, ReflectionClass::SKIP_INITIALIZATION_ON_SERIALIZE);
function f_0() {
    return "Object1";
}
function f_1() {
    try {
        function test() {
            try {
                return 5;
            } finally {
                try {
                    echo 1;
                } finally {
                    echo 2;
                }
            }
        }
        $a = test();
        echo "--- After removing the first id ---\n";
    } catch (Exception $e) {}
    if (true) {
        $this->values = array('a' => 0);
        function __set($name, $value)
          {
            print "set $name = $value ($name was ".$this->values[$name].")\n";
            $this->values[$name] = $value;
          }
        $this->values[$name] = $value;
        function __get($name)
          {
            print "get $name (returns ".$this->values[$name].")\n";
            return $this->values[$name];
          }
        return $this->values[$name];
    }
}
$link = mysqli_init();
$japanese_so = pack('H4', '835c');
var_dump($link->real_escape_string($japanese_so) === $japanese_so);
