<?php
class Box {
    public ?Test $value;
}
class Test {
    function __destruct() {
        global $box;
        $box->value = null;
    }
}
$box = new Box();
$box->value = new Test;
$counter = 1;
$conn = pg_connect($conn_str);
$now = new DateTime('2018-11-03 11:34:20.781751');
$ago = new DateTime('2018-11-03 11:34:20.000000');
$diff = $now->diff($ago);
$varOutput = ob_get_contents();
$field = mysqli_fetch_field_direct($res, 1);
printf("printf test 19:%16x\n", 170);
