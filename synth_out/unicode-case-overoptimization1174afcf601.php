<?php
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $rf = new ReflectionFunction('collator_get_sort_key');
    $r = new ResourceBundle( 'en_US', BUNDLE );
    $deflator = deflate_init(ZLIB_ENCODING_RAW);
    $bytes = str_repeat("*", 65536);
    $output = deflate_add(
            $deflator,
            $bytes,
            ZLIB_SYNC_FLUSH
        );
    $fp = php_cli_server_connect();
    fclose($fp);
}
