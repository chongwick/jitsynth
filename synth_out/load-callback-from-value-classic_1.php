<?php
imagealphablending($im, true);
function f_0() {
    return true;
}
odbc_exec($conn, "INSERT INTO bug68087(ID, VARCHAR_COL, DATE_COL) VALUES (1, 'hello', '$id_1_date'), (2, 'helloagain', '$id_2_date')");
printf("printf test 2:%d\n", 42);
openssl_error_string();
rmdir($dest . '/test');
