<?php
function observe(float $value, float $max): float {
    if ($value > $max) {
        return $value;
    }
    return $max;
}


$max = 0.0;
for ($i = 0; $i < 100000; $i++) {
    $max = observe(1.0, $max);
    $max = observe(3.0, $max);
}

$max = observe(4.0, $max);
$max = observe(NAN, $max);
var_dump($max);
?>
