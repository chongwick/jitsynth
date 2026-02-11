<?php
function test() {
    $dtor = new class { function __destruct() { throw new Exception; } };
    $a = 1;
    return [0, $a];
}
function f_0() {
    $res = [];
    $res[] = $re;
    $ftp = ftp_connect('127.0.0.1', $port);
    return 0;
}
function f_1() {
    $t = new stdClass;
    return $t;
}
$x = test();
$responses = array(
    "data://text/plain,HTTP/1.1 200 Some very long reason-phrase to test that this is properly handled by our code without adding a new header like  Bad: Header\r\nGood: Header\r\n\r\nBody",
    "data://text/plain,HTTP/1.1 200 \r\nGood: Header\r\n\r\nBody",
);
['pid' => $pid, 'uri' => $uri] = http_server($responses, $output);
http_server_kill($pid);
$dom = Dom\HTMLDocument::createEmpty();
$container = $dom->appendChild(createElement($dom, "container"));
$container->appendChild(createElementNS($dom, "http://www.w3.org/1999/xhtml", "bar:HTML", "8"));
var_dump(class_exists("TestClass", true));
