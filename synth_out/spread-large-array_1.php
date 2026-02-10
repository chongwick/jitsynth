<?php
$r = socket_sendmsg($sends1, [
    "name" => [ "addr" => "::1", "port" => 3002],
    "iov" => ["test ", "thing", "\n"],
    "control" => [[
        "level" => IPPROTO_IPV6,
        "type" => IPV6_TCLASS,
        "data" => 40,
    ]]
], 0);
$headers2 = exif_read_data(__DIR__ . '/bug64739.jpg');
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $response = curl_exec($ch);
}
$containers[spl_object_hash($this)] = NULL;
