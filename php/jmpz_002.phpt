<?php
function test($b) {
    if ($b ? 0 : (X>0)){
        echo "Not taken\n";
    }
}
test(true);
?>
DONE
