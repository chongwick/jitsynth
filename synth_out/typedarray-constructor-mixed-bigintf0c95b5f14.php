<?php
$file = __DIR__ . '/bug38212私はガラスを食べられます.gd2';
$im1 = imagecreatetruec;
$data_compare_func = 'compare_function';
function f_0() {
    function test(array... $args) {
        var_dump($args);
    }
    test([0], [1], 2);
}
for ($i_1 = 0; $i_1 < 10; $i_1++) {
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
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
        var_dump($temp_array);
        $dom = Dom\HTMLDocument::createFromString(<<<HTML
        <!DOCTYPE html>
        <html>
            <body>
                <svg xmlns="http://www.w3.org/2000/svg" height="1"></svg>
                <math></math>
            </body>
        </html>
        HTML);
        $body = $dom->getElementsByTagName("body")[0];
        $namespaceless = $body->appendChild($dom->createElementNS(NULL, "foo"));
        var_dump($namespaceless->lookupNamespaceURI(NULL));
        $result = get_declared_classes();
        var_dump(array_search('foo', $result));
        $f = __DIR__."/data/test.txt.gz";
        $h = gzopen($f, 'r');
        var_dump(gzeof($h));
    }
}
