<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_WRITEFUNCTION, null);
ob_start();
