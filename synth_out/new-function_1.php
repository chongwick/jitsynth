<?php
$tmpFileOut2 = tempnam(sys_get_temp_dir(), 'test');
try {
    curl_setopt($ch, CURLOPT_USERPWD, null);
} catch (Exception $e) {}
if (true) {
    var_dump(filter_var("<data&sons>", FILTER_SANITIZE_ENCODED, FILTER_FLAG_ENCODE_LOW));
}
$oIntlDateFormatter->setTimeZone('Europe/Berlin');
