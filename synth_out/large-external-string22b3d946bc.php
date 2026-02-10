<?php
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
$date1 = DateTime::createFromFormat("!D d M Y", "Fri 19 November 2011");
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
    $link->close();
}
class Test {
    public static function __callStatic($method, $args) {}
    public function __call($method, $args) {}
}
$t = new Test;
spl_autoload_register(function ($class) {
    if (!require_once($class.'.inc')) {
        error_log('Error: Autoload class: '.$class.' not found!');
    }
});
$formatter = new \NumberFormatter('en', \NumberFormatter::DECIMAL);
$value = $formatter->parse('2147483650', \NumberFormatter::TYPE_INT64);
var_dump($value);
