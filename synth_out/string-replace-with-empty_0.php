<?php
function f_0() {
    var_dump($dom->getElementById('x')?->nodeName);
    printf("printf test 21:%016b\n", 170);
    $dbh = @pg_connect($conn_str);
    $heredoc = <<<EOT
hello world
EOT;
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        $start_key = 0;
        $meta = $meta[0];
    }
    var_dump(getopt("abcd"));
    $column_def = array('col1 CHAR(1)', 'col2 CHAR(2)','INDEX idx_col1_col2(col1, col2)');
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
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
    }
    var_dump(json_decode('[]', false, 0x100000000));
    $assoc_array = array ('one' => 1, 'two' => 2);
    $stmt = $db->prepare('SELECT * FROM test_33689');
    for ($i_3 = 0; $i_3 < 10; $i_3++) {
        $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt', Pdo::class, false);
        test($arg)->name[1] = "xxxx";
    }
    set_error_handler(function($no, $msg) {
    throw new Exception($msg);
});
    test('Ghost', $obj);
    $color = imagecolorsforindex($im2, $col);
    for ($i_4 = 0; $i_4 < 10; $i_4++) {
        $arg = new Stdclass();
    }
    printf("printf test 2:%d\n", 42);
    var_dump(session_cache_limiter());
}
$b->attach($object);
putenv('REDIR_TEST_DIR='.__DIR__ . '/../../pdo/tests/');
var_dump($x->prop);
printf("printf test 21:%016b\n", 170);
