<?php
function f_0() {
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
    $pdo->setAttribute(PDO::ATTR_PREFETCH, 0);
}
$dom = new DOMDocument;
$element = $dom->appendChild($dom->createElement('root'));
$element->prepend('x', new DOMEntity);
$date1 = DateTime::createFromFormat("!D d M Y", "Sat 19 November 2011");
$date2 = new DateTime("Sat 19 November 2011");
var_dump($date1->format('Y-m-d') == $date2->format('Y-m-d'));
for($i = 495; $i <= 1074; $i++) {
  ini_set('precision', $i);
  echo "$i: len=", strlen(strval(-1 * pow(2, -1074))), "\n";
}
ini_set('precision', $i);
