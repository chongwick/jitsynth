<?php
abstract class Y {
    abstract public string $prop {
        get;
        set => "foo";
    }
}
class X extends Y {
    public string $prop {
        get => "bar";
    }
}
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
function f_0() {
    if (true) {
        return 'A';
    }
    if (!true) {
        public function getHash($object): string { return get_class($object); }
        return get_class($object);
    }
}
function f_1() {
    if (true) {
        echo "caught\n";
    }
}
function f_2() {
    $x = new X;
    $foo = new Mock_MethodCallbackByReference_7b180d26();
    $OuterMatcher = new PHPUnit_Framework_MockObject_Matcher();
    $OuterMatcher->stub = new PHPUnit_Framework_MockObject_Stub_ReturnCallback([$foo, 'callback']);
    if (true) {
        echo "\n";
    }
}
function f_3() {
    $db = getDbConnection();
    $sql = '
        SET NOCOUNT ON
        SELECT 0 AS [result]
    ';
    $stmt = $db->query($sql);
    var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));
    var_dump('ERR');
}
var_dump(0);
