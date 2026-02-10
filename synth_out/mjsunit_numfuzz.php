<?php
$ch = curl_init("https://localhost/userpwd");
$response = curl_exec($ch);
var_dump(str_contains($response, "authorization"));
