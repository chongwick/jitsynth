<?php
class C {
    public function __toString() {
        global $c;
        $c = [];
        throw new Exception(__METHOD__);
    }
}
class D {
    public string $prop;
}
function display($res)
{
	echo implode("\n", array_map(fn($row) => implode("\t", $row), $res))."\n";
}
$c = new C();
$d = new D();
$d->prop = $c;
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $text = 'This is an ‘example’ of using DOM splitText';
    $mysqli = new mysqli("$host:$port", $user, $passwd, $db);
    $tbl = "test";
    $sql = "DROP TABLE IF EXISTS $tbl";
    $mysqli->query($sql);
    $date1 = new DateTime("Tuesday");
    $date2 = DateTime::createFromFormat("D H i s", "Tuesday 0 00 00");
    var_dump($date1->format('D') == $date2->format('D'));
}
function f_1() {
    return 'B';
}
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
foreach($arrays as $array) {
  echo "-- Iteration $iterator --\n";
  // with default argument
  echo "- with default argument -\n";
  var_dump( array_reverse($array) );
  // with all possible arguments
  echo "- with \$preserve keys = true -\n";
  var_dump( array_reverse($array, true) );
  echo "- with \$preserve_keys = false -\n";
  var_dump( array_reverse($array, false) );
  $iterator++;
}
var_dump( array_reverse($array, false) );
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
$reqOf3 = 'select 79 n union all select 80 union all select 81';
$stmt2 = $pdo->query("select * from ($reqOf3) t order by n desc");
display([ $stmt2->fetch() ]);
var_dump(rename("phar://a.phar/x", "phar://a.phar/y"));
var_dump ( rtrim("rtrim testABCXYZ", "A..Z") );
$ar1 = array("row1" => 2, "row2" => 1);
$args = array(&$ar1);
var_dump(call_user_func_array("array_multisort", $args));
ob_start("test");
$array_test = array("a", "b", "d", 7, "u" => "U", -4, "-.008" => "neg.008");
var_dump( end($array_test) );
$dt = new DateTime('first day of January 2011');
var_dump($dt);
printf("printf test 6:%-010.2f\n", 2.5);
$conn = odbc_connect($dsn, $user, $pass);
$res = odbc_exec($conn, "SELECT * FROM bug80147");
odbc_fetch_row($res);
$r = new ResourceBundle( 'en_US', BUNDLE );
$offset = 'teststring';
$ref = &$offset;
var_dump($r[$ref]);
