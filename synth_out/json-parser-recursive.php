<?php
$empty = "";
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $GLOBALS['b'] = 3;
}
$ch = curl_init("https://localhost/username");
curl_setopt($ch, CURLOPT_VERBOSE, true);
