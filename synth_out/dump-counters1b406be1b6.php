<?php
$meta_res = $stmt->result_metadata();
$field = $meta_res->fetch_field();
printf("Charsetnr    : %d\n", $field->charsetnr);
$curl = curl_init("http://www.google.com");
curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 1);
