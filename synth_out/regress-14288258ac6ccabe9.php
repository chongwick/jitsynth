<?php
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
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $unset_var = 10;
    $values = array(
    
          // int data
          0,
          1,
          12345,
          -2345,
    
          // float data
          10.5,
          -10.5,
          10.1234567e10,
          10.7654321E-10,
          .5,
    
          // array data
          array(),
          array(0),
          array(1),
          array(1, 2),
          array('color' => 'red', 'item' => 'pen'),
    
          // null data
          NULL,
          null,
    
          // boolean data
          true,
          false,
          TRUE,
          FALSE,
    
          // empty data
          "",
          '',
    
          // string data
          "string",
          'string',
    
          // undefined data
          $undefined_var,
    
          // unset data
          $unset_var,
    );
    function f_1() {
    }
    $simpleInterval = new DateInterval("P2D");
    function f_2() {
        $foo = new Mock_MethodCallbackByReference_7b180d26();
    }
    $shm_key = ftok(__FILE__, 'p');
    $dateperiod = (new ReflectionClass(DatePeriod::class))->newInstanceWithoutConstructor();
    for ($i_3 = 0; $i_3 < 10; $i_3++) {
        var_dump(preg_replace_callback_array([], ''));
    }
}
