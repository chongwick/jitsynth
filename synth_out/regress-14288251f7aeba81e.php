<?php
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    function f_1() {
    }
    $formatter = new \NumberFormatter('en', \NumberFormatter::DECIMAL);
    $value = $formatter->parse('2147483647', \NumberFormatter::TYPE_INT32);
    function f_2() {
        $arrays = array(
          array(),
          array(NULL),
          array(null),
          array(true),
          array(""),
          array(''),
          array(array(), array()),
          array(array(1, 2), array('a', 'b')),
          array(1 => 'One'),
          array("test" => "is_array"),
          array(0),
          array(-1),
          array(10.5, 5.6),
          array("string", "test"),
          array('string', 'test')
        );
    }
    $reflector = new ReflectionClass(C::class);
    class foo
    {
    // no members
    }
    abstract class abstractClass
    {
      abstract protected function getClassName();
      public function printClassName () {
        echo $this->getClassName() . "\n";
      }
    }
    class concreteClass extends abstractClass
    {
      protected function getClassName() {
        return "concreteClass";
      }
    }
    interface IValue
    {
       public function setVal ($name, $val);
       public function dumpVal ();
    }
    class Value implements IValue
    {
      private $vars = array ();
    
      public function setVal ( $name, $val ) {
        $this->vars[$name] = $val;
      }
    
      public function dumpVal () {
        var_dump ( $vars );
      }
    }
    class myClass
    {
      var       $foo_object;
      public    $public_var;
      public    $public_var1;
      private   $private_var;
      protected $protected_var;
    
      function __construct ( ) {
        $this->foo_object = new foo();
        $this->public_var = 10;
        $this->public_var1 = new foo();
        $this->private_var = new foo();
        $this->protected_var = new foo();
      }
    }
    $myClass_object = new myClass();
    $foo_object = new foo();
    $Value_object = new Value();
    $concreteClass_object = new concreteClass();
    $valid_objects = array(
      new stdclass,
      new foo,
      new concreteClass,
      new Value,
      new myClass,
      $myClass_object,
      $myClass_object->foo_object,
      $myClass_object->public_var1,
      $foo_object,
      $Value_object,
      $concreteClass_object
    );
    for ($i_3 = 0; $i_3 < 10; $i_3++) {
        function validate($value)
        {
            foreach ([0] as $_) {
                $a = &$value->a;
                $value->a ?? null;
            }
        }
        validate((object) []);
    }
}
