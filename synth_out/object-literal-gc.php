<?php
function f_0() {
    $fp = fopen (__FILE__, "r");
    $dfp = opendir ( __DIR__ );
    $unset_array = array(10);
    $varient_arrays = array (
      /* integers */
      543915,
      -5322,
      0x55F,
      -0xCCF,
      123,
      -0654,
    
      /* strings */
      "",
      '',
      "0",
      '0',
      'string',
      "string",
    
      /* floats */
      10.0000000000000000005,
      .5e6,
      -.5E7,
      .5E+8,
      -.5e+90,
      1e5,
    
      /* objects */
      new stdclass,
    
      /* resources */
      $fp,
      $dfp,
    
      /* nulls */
      null,
      NULL,
    
      /* boolean */
      true,
      TRUE,
      FALSE,
      false,
    
      /* unset/undefined arrays  */
      @$unset_array,
      @$undefined_array
    );
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        if (true) {
            $reflector = new ReflectionClass(C::class);
        }
        $sql = "SELECT 11111 as `1`, 22222 as `2`";
        $link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
        $res = $link->query($sql);
    }
    $dyadic = 0.00000000000045474735088646411895751953125;
    $domd = new DOMDocument();
    $xp = new DOMXPath($domd);
    $xp->query("//foo[contains(text(), " . $xp->quote("tes\x00t") . ")]");
    $counter = 1;
    $counter++;
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
    $d0 = $prefix . "ソフト";
    $d1 =
    st0.txt");
    touch("$d1\\t;
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        $tempnum = 12345;
        $tempstring = "abcdefghjklmnpqrstuvwxyz";
        var_dump(sprintf("%d  %s  %d\n", $tempnum, $tempstring, $tempnum));
    }
}
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
$reqOf3 = 'select 79 n union all select 80 union all select 81';
$stmt = $pdo->prepare($reqOf3);
for ($i_3 = 0; $i_3 < 10; $i_3++) {
    $priorityQueue = new SplPriorityQueue();
    $priorityQueue->setExtractFlags(SplPriorityQueue::EXTR_DATA);
}
