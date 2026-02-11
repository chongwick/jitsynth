<?php
class Foo {
  public $bar = "bat";
}
$cert = "file://" . __DIR__ . "/cert.crt";
$rcrt = openssl_x509_read($cert);
$foo = new Foo;
$bar = (int)$foo;
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $search_arr = array( TRUE, FALSE, 1, 0, -1, "1", "0", "-1",  NULL,
                         array(), "php", "");
    foreach( $search_arr as $value ) {
      echo "\n-- Iteration $i --\n";
      /* replace the string in array */
      var_dump( str_replace($value, "FOUND", $search_arr, $count) );
      var_dump( $count );
      $i++;
    }
    var_dump( str_replace($value, "FOUND", $search_arr, $count) );
}
$f_base = "67647私はガラスを食べられます.mov";
$f = __DIR__ . DIRECTOR;
$ch = curl_init("https://localhost/username");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
var_dump(new FooBar);
