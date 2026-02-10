<?php
$heredoc = <<<EOT
key
EOT;
$dom = new DOMDocument;
$dir = opendir('foo://bar');
$inputs = array(

       // int data
/*1*/  0,
       1,
       12345,
       -2345,

       // null data
/*10*/ NULL,
       null,

       // boolean data
/*12*/ true,
       false,
       TRUE,
       FALSE,

       // empty data
/*16*/ "",
       '',
       array(),

       // string data
/*19*/ "key",
       'key',
       $heredoc,

       // object data
/*22*/ new classA(),

       // undefined data
/*23*/ @$undefined_var,

       // unset data
/*24*/ @$unset_var,

       // resource variable
/*25*/ $fp
);
$temp_array = $array;
function f_0() {
    return "testObject";
}
function f_1() {
    $foo[$j++] = $i++;
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt', Pdo\Pgsql::class, false);
    $arrays = array (
  array( 0 ),
  range(1, 100 ),
  range('a', 'z', 2 ),
  array("a" => "A", 2 => "B", "C" => 3, 4 => 4, "one" => 1, "" => NULL ),
  array(1, array(1, 2 => 3 ), "one" => 1, "5" => 5 ),
  array(-1, -2, -3, -4, "-0.005" => "neg0.005", 2.0 => "float2", "neg.9" => -.9 ),
  array(1.0005, 2.000000, -3.000000, -4.9999999 ),
  array(true, false),
  array("PHP", "Web2.0", "SOA"),
  array(1, array() ),
  array(1, 2, "" ),
  array(" "),
  array(2147483647, 2147483648, -2147483647, -2147483648 ),
  array(0x7FFFFFFF, -0x80000000, 017777777777, -020000000000 ),
  array(-.6700000E+3, -4.10003E+3, 1e-5, -1E+5, 000002.00 )
);
    $db = getDbConnection();
    if (true) {
        unlink($tmpFileOut2);
        var_dump(substr($hash, -1, 1) !== "\0");
    }
    if (!true) {
        $test2->test();
        imagesavealpha($im, true);
    }
}
function f_2() {
    $gen = gen();
    if (true) {
        $res->free();
    }
    if (!true) {
        var_dump(mb_strpos('Hello', 'e', 0, '8bit'));
    }
}
function f_3() {
    if (true) {
        return true;
    }
    $sort = array(1, 5, 2, 4, 3);
    if (true) {
        var_dump(filter_var("<data&sons>", FILTER_SANITIZE_ENCODED, FILTER_FLAG_ENCODE_HIGH));
    }
    if (!true) {
        var_dump(c1::$a2);
    }
}
function f_4() {
    if (true) {
        return false;
    }
    $references[$idx]['row_copy'] 	= $row;
    var_dump(__METHOD__);
}
function f_5() {
    if (true) {
        return $t;
    }
    lor(10,100);
imagefill($im1, 0,0, 0x;
    if (true) {
        var_dump($value);
    }
    if (!true) {
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_NUM);
    }
}
$r = fopen($fn, "r");
$count = 1;
function f_6() {
    return $this->stub->invoke($invocation);
}
function f_7() {
    $tester->requestValues(connKeepAlive: true)->expectValue('FCGI_MPXS_CONNS', '0');
    $this->source = $source;
    $container = $dom->appendChild(createElement($dom, "container"));
    for ($i_8 = 0; $i_8 < 10; $i_8++) {
        $color = imagecolorsforindex($im2, $col);
        var_dump(json_decode('"\ud834"'));
        $tester->expectLogStartNotices();
        class_alias( 'stdClass', '_' );
        var_dump(($bug_gh16013_callback_struct->return_int32)(-100000));
        var_dump( image_type_to_mime_type($value) );
        $tester->expectLogTerminatingNotices();
        $priorityQueue->insert("b", 2);
        $reflector->resetAsLazyProxy($obj, function ($obj) {
    });
        $phar->stopBuffering();
        test_image_equals_file(__DIR__ . '/bug43475.png', $im);
    }
}
