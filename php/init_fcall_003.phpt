<?php
include(__DIR__ . '/init_fcall_003.inc');
for($a=1; $a<100; $a++){
    f('1');
    f('1');
    f('1');
}
touch(__DIR__ . '/init_fcall_003.inc');
opcache_invalidate(__DIR__ . '/init_fcall_003.inc', true);
?>
DONE
