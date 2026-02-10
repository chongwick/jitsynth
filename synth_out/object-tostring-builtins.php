<?php
$a = new DateTime("2009-01-01", null);
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        function PostEvents($x) {
            var_dump($x);
            exit();
          return $x;
        }
        var_dump($x);
        class foo
        {
        // no members
        }
        $fp = fopen (__FILE__, "r");
        $dfp = opendir ( __DIR__ );
        $unset_object = new foo();
        $not_objects = array (
          0,
          -1,
          0.1,
          -10.0000000000000000005,
          10.5e+5,
          0xFF,
          0123,
          $fp,  // resource
          $dfp,
          array(),
          array("string"),
          "0",
          "1",
          "",
          true,
          NULL,
          null,
          @$unset_object, // unset object
          @$undefined_var, // undefined variable
        );
        foreach ($not_objects as $type ) {
          echo "-- Iteration $loop_counter --\n"; $loop_counter++;
          var_dump( is_object($type) );
        }
        var_dump( is_object($type) );
    }
}
