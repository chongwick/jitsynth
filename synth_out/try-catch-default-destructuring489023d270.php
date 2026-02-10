<?php
function f_0() {
    $conn = odbc_connect($dsn, $user, $pass);
    $res = odbc_exec($conn, 'SELECT * FROM bug68087 ORDER BY ID ASC');
    $id = odbc_result($res, "ID");
    try {
        echo "Done\n";
    } catch (Exception $e) {}
    if (true) {
        return "key";
    }
}
$r = new ResourceBundle( 'en_US', BUNDLE );
print_r( $r['testvector'] );
function f_1() {
    #[AllowDynamicProperties]
    class A {
    }
    function foo(int $x) {
        $a = new A;
        $a->foo = $x;
    }
    $a = new A;
    $a->foo = $x;
    try {
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
        foreach($values as $value) {
            echo @"\nArg value: $value (type: " . gettype($value) . ")\n";
            try {
                var_dump( get_class($value) );
            } catch (TypeError $e) {
                echo $e->getMessage(), "\n";
            }
        }
        echo @"\nArg value: $value (type: " . gettype($value) . ")\n";
    } catch (Exception $e) {}
    if (true) {
        $num = 100000;
        for ($i=0; $i<$num; $i++) {
          $a[$i] = Array(1);
        }
        for ($i=0; $i<$num; $i++) {
          $b[$i] = $a[$i][0];
        }
        for ($i=0; $i<$num; $i++) {
          $b[$i] = "12345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890";
        }
        $b[$i] = "12345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890";
        return [];
    }
}
phpinfo(INFO_VARIABLES);
