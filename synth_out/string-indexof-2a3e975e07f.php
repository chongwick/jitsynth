<?php
$date = new DateTime("2011-05-17T22:14:12");
class Test {
    public static function __callStatic($method, $args) {}
    public function __call($method, $args) {}
}
function do_throw() { throw new Exception; }
(new Test)->bar(do_throw());
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        $unset_var = 10;
        $fp = fopen(__FILE__, "r");
        $heredoc = <<<EOT
        Hello world
        EOT;
        $arrays = array (
        
               // empty array
        /*1*/  array(),
        
               // arrays with integer keys
               array(0 => "0"),
               array(1 => "1"),
               array(1 => "1", 2 => "2", 3 => "3", 4 => "4"),
        
               // arrays with string keys
        /*7*/  array('\tHello' => 111, 're\td' => "color",
                     '\v\fworld' => 2.2, 'pen\n' => 33),
               array("\tHello" => 111, "re\td" => "color",
                     "\v\fworld" => 2.2, "pen\n" => 33),
               array("hello", $heredoc => "string"), // heredoc
        
               // array with object, unset variable and resource variable
               array(@$unset_var => "hello", $fp => 'resource'),
        
               // array with mixed keys
        /*11*/ array('hello' => 1, "fruit" => 2.2,
                     $fp => 'resource', 133 => "int",
                     @$unset_var => "unset", $heredoc => "heredoc")
        );
        foreach($arrays as $array) {
          echo "-- Iteration $iterator --\n";
        
          /* with default argument */
          // returns element count in the resulting array after arguments are pushed to
          // beginning of the given array
          $temp_array = $array;
          var_dump( array_unshift($temp_array, $var) );
        
          // dump the resulting array
          var_dump($temp_array);
        
          /* with optional arguments */
          // returns element count in the resulting array after arguments are pushed to
          // beginning of the given array
          $temp_array = $array;
          var_dump( array_unshift($temp_array, $var, "hello", 'world') );
        
          // dump the resulting array
          var_dump($temp_array);
          $iterator++;
        }
        $temp_array = $array;
        $r = new ReflectionClass('stdClass');
        do {
            class Foo {
                public function foo() {
                    return $this;
                }
            
                public function __set($name, $value) {
                    throw new Exception('Hello');
                }
            }
            $foo = new Foo();
            catch (\ReflectionException $e) {
                    printf("%s: %s\n", $e::class, $e->getMessage());
                }
            printf("%s: %s\n", $e::class, $e->getMessage());
            $conn = odbc_connect($dsn, $user, $pass);
            $res = odbc_exec($conn, "SELECT * FROM bug80147");
            var_dump(odbc_result($res, 'whatever'));
        } while (false);
        $conn = pg_connect($conn_str);
        $table='test_68638';
        pg_insert($conn,$table, array('id' => 1, 'value' => 1.2));
    }
}
