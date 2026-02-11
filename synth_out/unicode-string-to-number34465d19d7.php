<?php
function dumpElement() {
    list($value) = yield;
    var_dump($value);
}
session_set_save_handler(new \SessionHandler(), true);
$ftp = ftp_connect('127.0.0.1', $port);
var_dump(ftp_login($ftp, 'anonymous', 'IEUser@'));
$dom = new DOMDocument('1.0', 'UTF-8');
$node = $dom->getElementById('test');
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $generator = dumpElement();
}
$priorityQueue = new SplPriorityQueue();
print_r($priorityQueue->top());
$text = 'This is an ‘example’ of using DOM splitText';
$st
 = new DOMDocument('1.0', 'UTF-8');
$no
e = $dom->createTextNode($text);
$do;
for ($i_1 = 0; $i_1 < 10; $i_1++) {
    $epid = pcntl_waitpid(-1,$status);
}
$meta_res = $stmt->result_metadata();
$field = $meta_res->fetch_field();
printf("Name         : %s\n", $field->name);
