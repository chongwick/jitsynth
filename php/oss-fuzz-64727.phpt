<?php
function test(){
    $a = null;
    $b = null;
    for($i = 0; $i < 2; $i++){
        $a = $a + $b;
        var_dump($a);
        $a = @[3][$a];
        var_dump($a);
    }
}
test();
?>
