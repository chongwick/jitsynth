<?php
class classA
{
  public function __toString() {
    return "key";
  }
}
function f_0() {
    $simpleInterval = new DateInterval("P2D");
    $depth0 = "depth02";
    $iterator = new RecursiveDirectoryIterator(__DIR__ . DIRECTORY_SEPARATOR . $depth0);
    $it = new RecursiveIteratorIterator($iterator);
    while (true) {
        break;  // avoid infinite loop
        $unset_var = 10;
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
        if (true) {
            return true;
        }
        $filename = "bug51997.bz2";
    }
    return false;
}
$dsn = ini_get('pdo.dsn.mysql');
$found = ($dsn !== false);
stream_wrapper_register('dummy', DummyWrapper::class);
$res->free();
