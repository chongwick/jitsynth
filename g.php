<?php
function foo($n) {
        return 3;
}

$h = 14 <=> 2;
$n = 2; 
$g = $h + $n;
$h = $g;
if($h > 2){
        if($g < 3){
                $h = 23;
        }
}
foo($g);
echo $h;
