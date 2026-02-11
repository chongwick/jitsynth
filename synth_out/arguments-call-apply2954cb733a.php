<?php
function f_0() {
    $row_stmt = null;
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        $heredoc_str = <<<EOD
        %
        #$*&
        text & @()
        EOD;
        $str_arr = array(
          //double quoted strings
          "%",
          "#$*",
          "text & @()",
        
          //single quoted strings
          '%',
          '#$*',
          'text & @()',
        
          //heredoc string
          $heredoc_str
        );
    }
    return 0;
}
$fn = "bug71263.bz2";
$r = fopen($fn, "r");
fclose($r);
var_dump(new FooBar);
$fp = fopen("php://memory", "r+");
rewind($fp);
printf("[001] Expecting integer on 64bit got %s/%s\n", gettype($id), var_export($id, true));
