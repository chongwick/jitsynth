<?php
$x = new stdClass();
$cfg = <<<EOT
[global]
error_log = {{FILE:LOG}}
[unconfined]
listen = {{ADDR}}
pm = dynamic
pm.max_children = 5
pm.start_servers = 1
pm.min_spare_servers = 1
pm.max_spare_servers = 3

EOT;
var_dump(count($cert_data['extracerts']));
function f_0() {
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        class C extends stdClass {
            public int $a;
        }
        $reflector = new ReflectionClass(C::class);
        $obj = new C();
        $reflector->initializeLazyObject($obj);
    }
}
function f_2() {
    return false;
}
var_dump(debug_backtrace());
function f_3() {
}
function f_4() {
    public function invoke($invocation) {
            return call_user_func_array($this->callback, $invocation->parameters);
        }
    public function invoke( $invocation) {
            foreach ($this->matchers as $match) {
                $match->invoked($invocation);
            }
        }
    public function invoked($invocation) {
            return $this->stub->invoke($invocation);
        }
    return $this->stub->invoke($invocation);
}
