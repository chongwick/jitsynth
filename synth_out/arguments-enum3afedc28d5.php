<?php
function PostEvents($x) {
    var_dump($x);
    exit();
  return $x;
}
function f_0() {
    $strings = array(
      "<html>Hello<br />world</html>",
      "<html><br /></html>",
      "<html>\nHello\r\nworld\r</html>",
      "<html>\n \r\n \r</html>",
    );
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        $halves[0] = $halves[1] = 0;
        $halves[(mt_rand(0, $max - 1) >> 1) & 1]++;
        $halves[0] = $halves[1] = 0;
        $halves[(int) (mt_rand(0, $max - 1) / ($max / 2))]++;
    }
    return $x;
}
function f_2() {
    $create = 'CREATE TABLE test(id INT, ';
    $heredoc_str = <<<EOD
    %
    #$*&
    text & @()
    EOD;
    $str_arr = array(
      //double quoted strings
      "%",
      "#$*",
      "text & @()",
    
      //single quoted strings
      '%',
      '#$*',
      'text & @()',
    
      //heredoc string
      $heredoc_str
    );
    $s1 = "some string";
    for ($i_3 = 0; $i_3 < 10; $i_3++) {
        $counter = 1;
        $counter++;
    }
    return "Class A object";
}
$priorityQueue = new SplPriorityQueue();
$priorityQueue->setExtractFlags(SplPriorityQueue::EXTR_BOTH);
$im = imagecreate(800, 800);
imageline($im, 150, 150, 650, 150, IMG_COLOR_STYLED);
$outfile = tempnam(sys_get_temp_dir(), "ssl");
$contentfile = tempnam(sys_get_temp_dir(), "ssl");
$eml = __DIR__ . "/signed.eml";
$cainfo = array();
var_dump(openssl_pkcs7_verify($eml, PKCS7_NOVERIFY, $outfile, $cainfo, $outfile, $contentfile));
$link->close();
$tz1 = new DateTimeZone('Europe/Berlin');
$tz2 = new DateTimeZone('Europe/Berlin');
$d = new DateTime('2014-12-24 13:00:00', $tz1);
var_dump($d->getTimezone(), $tz2);
$mysql = new my_mysqli($host, $user, $passwd, $db, $port, $socket);
$mysql->close();
(new Fiber(function() {
        global $f;
        var_dump((new ReflectionFiber($f))->getTrace());
    }))->start();
$dom = Dom\HTMLDocument::createEmpty();
var_dump($dom->lookupNamespaceURI(""));
