<?php
function foo() {
    for($cnt=0;$cnt<3;$cnt++) {
        $obj->ary["bas"] ??= $obj = new stdClass;
    }
}
foo();
?>
DONE
