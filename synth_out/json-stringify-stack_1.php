<?php
session_set_save_handler(new \SessionHandler(), true);
var_dump(curl_getinfo($curl, CURLINFO_PRIVATE));
curl_close($ch);
