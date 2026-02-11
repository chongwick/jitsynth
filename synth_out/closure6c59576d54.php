<?php
class PHPUnit_Framework_MockObject_Stub_ReturnCallback {
    protected $callback;
    public function __construct($callback) {
        $this->callback = $callback;
    }
    public function invoke($invocation) {
        return call_user_func_array($this->callback, $invocation->parameters);
    }
}
class PHPUnit_Framework_MockObject_Matcher {
    public $stub = null;
    public $methodNameMatcher;
    public function invoked($invocation) {
        return $this->stub->invoke($invocation);
    }
}
class MethodCallbackByReference {
    public function bar(&$a, &$b, $c) {
        Legacy::bar($a, $b, $c);
    }
    public function callback(&$a, &$b, $c) {
        $b = 1;
    }
}
class Mock_MethodCallbackByReference_7b180d26 extends MethodCallbackByReference {
    public $inv_mocker;
    public function bar(&$a, &$b, $c) {
        $arguments = array($a, $b, $c);
        $result = $this->inv_mocker->invoke(
            new PHPUnit_Framework_MockObject_Invocation_Static(
                $arguments
            )
        );
        return $result;
    }
}
function boo(){
    debug_print_backtrace();
}
function f_0() {
    return true;
}
for ($i_1 = 0; $i_1 < 10; $i_1++) {
    $foo = new Mock_MethodCallbackByReference_7b180d26();
    $OuterMatcher = new PHPUnit_Framework_MockObject_Matcher();
    $OuterMatcher->stub = new PHPUnit_Framework_MockObject_Stub_ReturnCallback([$foo, 'callback']);
    boo();
}
