<?php
function test($in, $cond) {
    if ($cond) {
        eval('');
    }
    while (stream_bucket_make_writeable($in)) {}
}
?>
DONE
