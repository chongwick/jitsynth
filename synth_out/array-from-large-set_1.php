<?php
$bug_gh16013_callback_struct->return_enum = function($val) use($ffi) {
    $cdata = $ffi->new('enum bug_gh16013_enum');
    $cdata->cdata = $val;
    return $cdata;
};
$host = curl_cli_server_start();
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $stmt->bind_result($id);
}
$object2 = new foo1();
