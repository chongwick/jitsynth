<?php
function Test($param) {
    global $g;
    $g = $param->strA."\n".$param->strB."\n";
    return $g;
}
class foo1
{
  function __toString() {
    return "Object1";
  }
}
function display($res)
{
	echo implode("\n", array_map(fn($row) => implode("\t", $row), $res))."\n";
}
class classWithToString
{
    public function __toString() {
        return "Class A object";
    }
}
class classWithoutToString
{
}
class MyObjectStorage extends SplObjectStorage {
    // Overwrite getHash() with just some (working) test-method
    public function getHash($object): string { return get_class($object); }
}
class TestObject {}
function f_0() {
    function f_1() {
        $link = mysqli_init();
        var_dump ( $vars );
    }
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        $file = __DIR__ . "/bug71127.inc";
        $g = $param->strA."\n".$param->strB."\n";
        print_r($g);
    }
    $object2 = new foo1();
    $array_object = array();
    $array_object[1] = &$object2;
    for ($i_3 = 0; $i_3 < 10; $i_3++) {
        $a = Array();
        $res = [];
        display($res);
    }
}
$dom = new DOMDocument;
var_dump($dom->getElementById('x')?->nodeName);
function f_4() {
    $xmlstring = '<?xml version="1.0" encoding="UTF-8"?>
    <books><book num="1" idx="2">book1</book></books>';
    function f_5() {
        $object = new StdClass();
        $object->a = str_repeat("a", 2);
        printf("[007] [%d] %s\n", $stmt->errno, $stmt->error);
    }
    for ($i_6 = 0; $i_6 < 10; $i_6++) {
        $f = __DIR__."/data/test.txt.gz";
        $h = gzopen($f, 'r');
        var_dump(gzeof($h));
    }
    $reader = new XMLReader();
    $attr = $reader->moveToAttribute('num');
    for ($i_7 = 0; $i_7 < 10; $i_7++) {
        $id_1_date = '2014-09-23';
        $id_2_date = '2014-09-24';
        $conn = odbc_connect($dsn, $user, $pass);
        odbc_exec($conn, "INSERT INTO bug68087(ID, VARCHAR_COL, DATE_COL) VALUES (1, 'hello', '$id_1_date'), (2, 'helloagain', '$id_2_date')");
    }
}
date_default_timezone_set('UTC');
function f_8() {
    $EXPECTED_OUTPUT_VALID_OFFSETS_REGEX = '/^' . expectf_to_regex(EXPECTED_OUTPUT_VALID_OFFSETS) . '$/s';
    function f_9() {
        $unset_var = 10;
        $heredoc = <<<EOT
        hello world
        EOT;
        $inputs = array(
        
              // int data
              'int 0' => 0,
              'int 1' => 1,
              'int 12345' => 12345,
              'int -12345' => -2345,
        
              // float data
              'float 10.5' => 10.5,
              'float -10.5' => -10.5,
              'float 12.3456789000e10' => 12.3456789000e10,
              'float -12.3456789000e10' => -12.3456789000e10,
              'float .5' => .5,
        
              // null data
              'uppercase NULL' => NULL,
              'lowercase null' => null,
        
              // boolean data
              'lowercase true' => true,
              'lowercase false' =>false,
              'uppercase TRUE' =>TRUE,
              'uppercase FALSE' =>FALSE,
        
              // empty data
              'empty string DQ' => "",
              'empty string SQ' => '',
        
              // string data
              'string DQ' => "string",
              'string SQ' => 'string',
              'mixed case string' => "sTrInG",
              'heredoc' => $heredoc,
        
              // object data
              'instance of classWithToString' => new classWithToString(),
              'instance of classWithoutToString' => new classWithoutToString(),
        
              // undefined data
              'undefined var' => @$undefined_var,
        
              // unset data
              'unset var' => @$unset_var,
        );
        printf("printf test 27:%3\$d %d %d\n", 1, 2, 3);
    }
    for ($i_10 = 0; $i_10 < 10; $i_10++) {
        test('sensitive');
    }
    $create = 'CREATE TABLE test(id INT, ';
    for ($i_11 = 0; $i_11 < 10; $i_11++) {
        catch (Error $e) {
            printf("%s: %s\n", $e::class, $e->getMessage());
        }
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
}
$list = new MyObjectStorage();
$list->attach(new TestObject());
