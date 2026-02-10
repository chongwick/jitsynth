<?php
if (true) {
    $zip = new ZipArchive();
    $obj = $reflector->newLazyProxy(function () {
    throw new \Exception('initializer');
});
    function f_0() {
        return function() {
        static $foo = 0;
        yield ++$foo;
    };
    }
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
    $heredoc_string = <<<EOT
This is line 1 of 'heredoc' string
This is line 2 of "heredoc" string
EOT;
    var_dump(sprintf("%d  %s  %d\n", $tempnum, $tempstring, $tempnum));
    $this->mysqli->close();
    $fiber->start();
    var_dump(gzfile(__DIR__."/data/test.txt.gz"));
    t2();
    $t = strtotime("2005-12-22 ". $test);
    $a = unserialize(serialize(new A()));
    var_dump( end($array_test) );
    var_dump(($bug_gh16013_callback_struct->return_float)(12.34));
    var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));
    ob_end_flush();
    $tester->close();
    zerofill(9, $link, 'DOUBLE');
    $link->close();
    var_dump($a[$i], isset($a[$i]));
    $obj = new C();
    $res = $client->Test(array('strA'=>$strA, 'strB'=>$strB));
    var_dump(json_last_error_msg());
    showFirstTwoItems($ai);
    pg_update($conn,$table, array('value' => '+inf'), array('id' => 3));
    rewind($fp);
    $a->test(new B());
    var_dump($target);
    var_dump($ffi->bug_gh16013_return_enum());
}
