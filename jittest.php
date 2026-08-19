<?php

$before = opcache_get_status(false)['jit']['buffer_free'];
for ($i = 0; $i < 100; $i++) { $x = $i * 2.5; }
$after = opcache_get_status(false)['jit']['buffer_free'];
printf("JIT emitted %d bytes\n", $before - $after);
#function foo($h) {
#    if ($h > 3) {
#        return 7;
#    }
#    return 0;
#}

// Call it many times so it becomes "hot"
#for ($i = 0; $i < 2; $i++) {
#        $x = $i * 2;
#    #foo(3);
#    #foo(5);
#}

#$status = opcache_get_status(false);
#$jit = $status['jit'] ?? null;
#
#echo "=== JIT Status ===\n";
#var_dump($jit);

#if ($jit) {
#    $used = $jit['buffer_size'] - $jit['buffer_free'];
#    echo "\nJIT buffer used: $used bytes\n";
#    
#    if ($used > 0) {
#        echo "→ JIT compilation happened\n";
#    } else {
#        echo "→ No JIT compilation detected\n";
#    }
#}
