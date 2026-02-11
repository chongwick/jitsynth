<?php
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $container = false;
    $empty_webp = __DIR__ . "/gh13774.webp";
    $file_handle = fopen(__FILE__, "r");
    $dir_handle = opendir( __DIR__ );
    $resources = array($file_handle, $dir_handle);
    $zip = new ZipArchive();
    $zip->close();
}
