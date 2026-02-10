<?php
function f_0() {
    $dyadic = 0.00000000000045474735088646411895751953125;
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $phar = new Phar($fname);
    $phar['a.php'] = '<php echo "this is a\n"; ?>';
    while (true) {
        break;  // avoid infinite loop
        $counter = 1;
        $counter++;
        if (true) {
        }
    }
    $key = str_repeat('abc', random_int(3, 3));
    var_dump(array_any([$key => 1], static fn () => true));
}
function display($res)
{
	echo implode("\n", array_map(fn($row) => implode("\t", $row), $res))."\n";
}
$res = [];
display($res);
function f_1() {
    $r = new ReflectionClass('Test2');
    $m = $r->getStaticProperties();
    $arrays = array (
    /*1*/  array(1, 2), // array with default keys and numeric values
           array(1.1, 2.2), // array with default keys & float values
           array( array(2), array(1)), // sub arrays
           array(false,true), // array with default keys and boolean values
           array(), // empty array
           array(NULL), // array with NULL
           array("a","aaaa","b","bbbb","c","ccccc"),
    
           // associative arrays
    /*8*/  array(1 => "one", 2 => "two", 3 => "three"),  // explicit numeric keys, string values
           array("one" => 1, "two" => 2, "three" => 3 ),  // string keys & numeric values
           array( 1 => 10, 2 => 20, 4 => 40, 3 => 30),  // explicit numeric keys and numeric values
           array( "one" => "ten", "two" => "twenty", "three" => "thirty"),  // string key/value
           array("one" => 1, 2 => "two", 4 => "four"),  //mixed
    
           // associative array, containing null/empty/boolean values as key/value
    /*13*/ array(NULL => "NULL", null => "null", "NULL" => NULL, "null" => null),
           array(true => "true", false => "false", "false" => false, "true" => true),
           array("" => "emptyd", '' => 'emptys', "emptyd" => "", 'emptys' => ''),
           array(1 => '', 2 => "", 3 => NULL, 4 => null, 5 => false, 6 => true),
           array('' => 1, "" => 2, NULL => 3, null => 4, false => 5, true => 6),
    
           // array with repetitive keys
    /*18*/ array("One" => 1, "two" => 2, "One" => 10, "two" => 20, "three" => 3)
    );
    while (true) {
        break;  // avoid infinite loop
        $i = 0;
        $i++;
        if (true) {
        }
    }
    function foo() {
      var_dump("hello");
    }
    foo();
}
var_dump(sha1_file(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370_003' . DIRECTORY_SEPARATOR . 'testfile'));
function f_2() {
    $inner = 'r:2;';
    $exploit = 'a:2:{i:0;C:3:"obj":'.strlen($inner).':{'.$inner.'}i:1;C:3:"obj":'.strlen($inner).':{'.$inner.'}}';
    $xml =<<<EOF
    <xml>
    <fieldset1>
    </fieldset1>
    <fieldset2>
    <options>
    </options>
    </fieldset2>
    </xml>
    EOF;
    $sxe = new SimpleXMLIterator($xml);
    $rit = new RecursiveIteratorIterator($sxe, RecursiveIteratorIterator::LEAVES_ONLY);
    while (true) {
        break;  // avoid infinite loop
        $dtor = new class { function __destruct() { throw new Exception; } };
        while (true) {
            break;  // avoid infinite loop
            $iterator = 1;
            $iterator++;
            if (true) {
            }
            if (true) {
            }
        }
    }
    var_dump(rename("phar://a.phar/x", "phar://a.phar/y"));
}
$timestamp = gmmktime(8, 8, 8, 8, 8, 2008);
$inputs = array(
      'The ISO 8601:1988 week number' => "%V",
      'Weekday as decimal' => "%u",
);
foreach($inputs as $key =>$value) {
      echo "\n--$key--\n";
      var_dump( gmstrftime($value) );
      var_dump( gmstrftime($value, $timestamp) );
}
var_dump( gmstrftime($value, $timestamp) );
catch (\Exception $e) {
    printf("%s: %s\n", $e::class, $e->getMessage());
}
catch (\Exception $e) {
    printf("%s: %s\n", $e::class, $e->getMessage());
}
printf("%s: %s\n", $e::class, $e->getMessage());
