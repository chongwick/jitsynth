<?php
function f_0() {
    $xml = '<?xml version="1.0" encoding="utf-8" ?>
    <test>
    </test>';
    $root = simplexml_load_string($xml);
    $root->__construct("malformed");
    $ftp = ftp_connect('127.0.0.1', $port);
    var_dump(ftp_mkdir($ftp, 'CVS'));
    $fiber = new Fiber(function (): void {
        $self = Fiber::getCurrent();
        $self->resume();
    });
    $inputs = array(
          'Century number' => "%C",
          'Month Date Year' => "%D",
          'Year with century' => "%G",
          'Year without century' => "%g",
    );
    foreach($inputs as $key =>$value) {
          echo "\n--$key--\n";
          var_dump( strftime($value) );
          var_dump( strftime($value, $timestamp) );
    }
    var_dump( strftime($value) );
    $strings = array(
      "<html>Hello<br />world</html>",
      "<html><br /></html>",
      "<html>\nHello\r\nworld\r</html>",
      "<html>\n \r\n \r</html>",
    );
    $interval = new DateInterval('P1D');
    $dt = new DateTime('first day of January 2011');
    $dt->sub($interval);
    $responses = array(
        "data://text/plain,HTTP/1.1 302 Moved Temporarily\r\n"
        . "Location: /try-again\r\n"
        . "Transfer-Encoding: chunked\r\n\r\n"
        . "0\r\n\r\n",
        "data://text/plain,HTTP/1.1 200 Ok\r\n"
        . "Transfer-Encoding: chunked\r\n\r\n"
        . "4\r\n1234\r\n0\r\n\r\n",
    );
    ['pid' => $pid, 'uri' => $uri] = http_server($responses, $output);
    http_server_kill($pid);
    $GLOBALS['a'] = "bug\n";
    $eml = __DIR__ . "/signed.eml";
    $list = new SplDoublyLinkedList();
    $list->push('f');
}
$r = new ReflectionClass('Test2');
var_dump($r->getStaticProperties());
$tester = new FPM\Tester($cfg);
$tester->expectLogTerminatingNotices();
