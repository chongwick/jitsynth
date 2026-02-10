<?php
$fp = fopen (__FILE__, "r");
$strA = 'test &amp; test';
$str = "This is a test string.\n";
global $box;
$box->value = null;
class Canary {
    public function __construct(public mixed $value) {}
    public function __destruct() {
        var_dump(__METHOD__);
    }
}
function f($canary) {
    var_dump(yield from g());
}
$canary = new Canary(null);
$iterable = f($canary);
$fiber = $iterable = $canary = null;
function f_0() {
    return true;
}
function f_1() {
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        for ($i_3 = 0; $i_3 < 10; $i_3++) {
            $dir = opendir('foo://bar');
            $wrapper = stream_get_meta_data($dir)['wrapper_data'];
            $num = 2;
            $data = array('first', 'fifth', 'second', 'forth', 'third');
            class Foo {
              public $bar = "bat";
            }
            $foo = new Foo;
            var_dump($foo);
            $various_arrays = array (
              array(5 => 55,  66, 22, 33, 11),
              array ("a" => "orange",  "banana", "c" => "apple"),
              array(1, 2, 3, 4, 5, 6),
              array("first", 5 => "second", "third"),
              array(1, 1, 8 => 1,  4 => 1, 19, 3 => 13),
              array('bar' => 'baz', "foo" => 1),
              array('a'=>1,'b'=>array('e'=>2,'f'=>3),'c'=>array('g'=>4),'d'=>5),
            );
            foreach ($various_arrays as $array) {
              echo "\n-- Iteration $count --\n";
            
              echo "- With default sort_flag -\n";
              $temp_array = $array;
              var_dump(asort($temp_array) );
              var_dump($temp_array);
            
              echo "- Sort_flag = SORT_REGULAR -\n";
              $temp_array = $array;
              var_dump(asort($temp_array, SORT_REGULAR) );
              var_dump($temp_array);
              $count++;
            }
            $temp_array = $array;
            var_dump(asort($temp_array) );
            function zerofill($offset, $link, $datatype, $insert = 1) {
            
                    mysqli_query($link, 'ALTER TABLE test DROP zero');
                    $sql = sprintf('ALTER TABLE test ADD zero %s UNSIGNED ZEROFILL', $datatype);
                    if (!mysqli_query($link, $sql)) {
                        // no worries - server might not support it
                        return true;
                    }
            
                    if (!mysqli_query($link, sprintf('UPDATE test SET zero = %s', $insert))) {
                        printf("[%03d] UPDATE failed, [%d] %s\n",
                            $offset, mysqli_errno($link), mysqli_error($link));
                        return false;
                    }
            
                    if (!($res = mysqli_query($link, 'SELECT zero FROM test LIMIT 1'))) {
                        printf("[%03d] SELECT failed, [%d] %s\n",
                            $offset, mysqli_errno($link), mysqli_error($link));
                        return false;
                    }
            
                    $row = mysqli_fetch_assoc($res);
                    $meta = mysqli_fetch_fields($res);
                    mysqli_free_result($res);
                    $meta = $meta[0];
                    $length = $meta->length;
                    if ($length > strlen($insert)) {
            
                        $expected = str_repeat('0', $length - strlen($insert));
                        $expected .= $insert;
                        if ($expected !== $row['zero']) {
                            printf("[%03d] Expecting '%s' got '%s'\n", $offset, $expected, $row['zero']);
                            return false;
                        }
            
                    } else if ($length <= 1) {
                        printf("[%03d] Length reported is too small to run test\n", $offset);
                        return false;
                    }
            
                    return true;
                }
            printf("[%03d] Length reported is too small to run test\n", $offset);
        }
    }
    $_ = str_repeat("A", 512);
    for ($i_4 = 0; $i_4 < 10; $i_4++) {
        for ($i_5 = 0; $i_5 < 10; $i_5++) {
            $tmpFileOut = tempnam(sys_get_temp_dir(), 'test');
            unlink($tmpFileOut);
        }
    }
}
function test(array... $args) {
    var_dump($args);
}
test();
$info = opcache_get_status()['interned_strings_usage'];
var_dump($info['used_memory'] + $info['free_memory']);
