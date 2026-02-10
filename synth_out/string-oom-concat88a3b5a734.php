<?php
function f_0() {
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $phar = new Phar($fname);
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        $unset_var = 10;
    }
    return str_repeat('a', 1);
}
$meta_res = $stmt->result_metadata();
$field = $meta_res->fetch_field();
printf("Orgtable     : %s\n", $field->orgtable);
