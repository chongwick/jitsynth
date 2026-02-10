<?php
function f_0() {
    return str_repeat('a', 1);
}
function f_1() {
    return "Class A object";
}
function f_2() {
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
function f_3() {
    return false;
}
$search = array ('zero', 'key' => 'val', 'two', 10 => 'value');
$unset_var = 10;
class classA
{
  public function __toString() {
    return "key";
  }
}
$heredoc = <<<EOT
key
EOT;
$fp = fopen(__FILE__, "r");
$inputs = array(

       // int data
/*1*/  0,
       1,
       12345,
       -2345,

       // null data
/*10*/ NULL,
       null,

       // boolean data
/*12*/ true,
       false,
       TRUE,
       FALSE,

       // empty data
/*16*/ "",
       '',
       array(),

       // string data
/*19*/ "key",
       'key',
       $heredoc,

       // object data
/*22*/ new classA(),

       // undefined data
/*23*/ @$undefined_var,

       // unset data
/*24*/ @$unset_var,

       // resource variable
/*25*/ $fp
);
foreach($inputs as $input) {
  echo "\n-- Iteration $iterator --\n";
  try {
      var_dump( array_key_exists($input, $search) );
  } catch (TypeError $exception) {
      echo $exception->getMessage() . "\n";
  }
  $iterator++;
}
var_dump( array_key_exists($input, $search) );
session_write_close();
class Test {
    public static function __callStatic($method, $args) {}
    public function __call($method, $args) {}
}
function do_throw() { throw new Exception; }
(new Test)->bar(do_throw());
$sert = "file://" . __DIR__ . "/san-cert.pem";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_CRL_SIGN, array($cpca), $utfl));
