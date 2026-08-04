<?php

function test1(string $val) {
    switch ($val) {
        case 'str1':
        case 'str2':
            echo "correct\n";
            return;
    }
    echo "wrong\n";
}
function test2(int $val) {
    switch ($val) {
        case 1:
        case 2:
        case 3:
        case 4:
        case 5:
            echo "correct\n";
            return;
    }
    echo "wrong\n";
}
test1("str1");
test2(1);

?>
