<?php
function test($a, $b) {
    echo "Start\n";
    $i = $j = 0;
    do {
        $i++;
        try {
           continue;
        } catch (Exception $e) {
        }
        do {
           $j++;
        } while ($j < $b);
    } while ($i < $a);
    echo "Done $i $j\n";
}
test(5, 6);
?>
