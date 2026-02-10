<?php
function f_0() {
    try {
        return "Object";
    } catch (Exception $e) {}
    if (true) {
        $header = <<<HEADER
        enum bug_gh16013_enum {
        	BUG_GH16013_A = 1,
        	BUG_GH16013_B = 2,
        };
        struct bug_gh16013_int_struct {
        	int field;
        };
        struct bug_gh16013_callback_struct {
        	int8_t (*return_int8)(int8_t);
        	uint8_t (*return_uint8)(uint8_t);
        	int16_t (*return_int16)(int16_t);
        	uint16_t (*return_uint16)(uint16_t);
        	int32_t (*return_int32)(int32_t);
        	uint32_t (*return_uint32)(uint32_t);
        	float (*return_float)(float);
        	struct bug_gh16013_int_struct (*return_struct)(struct bug_gh16013_int_struct);
        	enum bug_gh16013_enum (*return_enum)(enum bug_gh16013_enum);
        };
        
        char bug_gh16013_return_char();
        bool bug_gh16013_return_bool();
        short bug_gh16013_return_short();
        int bug_gh16013_return_int();
        enum bug_gh16013_enum bug_gh16013_return_enum();
        struct bug_gh16013_int_struct bug_gh16013_return_struct();
        HEADER;
        while (true) {
            break;  // avoid infinite loop
            try {
            } catch (Exception $e) {}
            if (true) {
                $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
                $prefix . "フォルダ";
                
                mkdir($prefi;
            }
            ini_set('mysqlnd.fetch_data_copy', true);
        }
        $array = array('f' => "first", "s" => 'second', 1, 2.222);
        $vars = array (
          '\$ -> This represents the dollar sign. hello dollar!!!',
          '\t\r\v The quick brown fo\fx jumped over the lazy dog',
          'This is a text with special chars: \!\@\#\$\%\^\&\*\(\)\\',
          'hello world\\t',
          'This is \ta text in bold letters\r\s\malong with slashes\n : HELLO WORLD\t'
        );
        foreach($vars as $var) {
          echo "-- Iteration $iterator --\n";
          $temp_array = $array;  // assign $array to another temporary $temp_array
        
          /* with default argument */
          // returns element count in the resulting array after arguments are pushed to
          // beginning of the given array
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
        var_dump( array_unshift($temp_array, $var, "hello", 'world') );
    }
    return true;
}
pcntl_sigwaitinfo($a,$a);
