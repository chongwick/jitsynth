<?php
function bar() {
    boo();
}
bar();
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
