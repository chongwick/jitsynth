<?php
$tmpFileOut2 = tempnam(sys_get_temp_dir(), 'test');
unlink($tmpFileOut2);
class MethodCallbackByReference {
    public function bar(&$a, &$b, $c) {
        Legacy::bar($a, $b, $c);
    }
    public function callback(&$a, &$b, $c) {
        $b = 1;
    }
}
public function bar(&$a, &$b, $c) {
        Legacy::bar($a, $b, $c);
    }
public function callback(&$a, &$b, $c) {
        $b = 1;
    }
$b = 1;
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
public function bar(&$a, &$b, $c) {
        $arguments = array($a, $b, $c);
        $result = $this->inv_mocker->invoke(
            new PHPUnit_Framework_MockObject_Invocation_Static(
                $arguments
            )
        );
        return $result;
    }
$foo = new Mock_MethodCallbackByReference_7b180d26();
$a = $b = $c = 0;
$foo->bar($a, $b, $c);
