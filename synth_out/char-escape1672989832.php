<?php
$args = ["-d", "extension_dir=" . ini_get("extension_dir"), "-d", "extension=" . (substr(PHP_OS, 0, 3) == "WIN" ? "php_" : "") . "soap." . PHP_SHLIB_SUFFIX];
$args[] = php_ini_loaded_file();
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $b = 1;
    $im = imagecreate(800, 800);
    imagepalettetotruecolor($im);
    printf("[002] [%d] %s\n", mysqli_errno($link), mysqli_error($link));
}
function f_1() {
    return serialize($this->data);
}
$dom = Dom\HTMLDocument::createEmpty();
$container = $dom->appendChild(createElement($dom, "container"));
$container->appendChild(createElementNS($dom, "urn:foo", "htML", "5"));
$db = getDbConnection();
$sql = '
    SET NOCOUNT ON
    SELECT 0 AS [result]
';
$stmt = $db->query($sql);
$stmt->closeCursor();
$filename = __DIR__ . '/私はガラスを食べられます_003.xml';

$xmlstring = '<?xml ve
ion="1.0" encoding="UTF-8"?>
<books><book num="1" idx="2">book1</book></books>';
file_put_contents($file
ame, $xmlstring);

$reader = new XMLReade;
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
$priorityQueue = new SplPriorityQueue();
$priorityQueue->setExtractFlags(SplPriorityQueue::EXTR_BOTH);
$array = array("test" => 1);
$a = "lest";
var_dump($array[$a]);
$ch = curl_init("https://localhost/userpwd");
curl_setopt($ch, CURLOPT_VERBOSE, true);
$im = imagecreate(800, 800);
imageline($im, 600, 700, 100, 200, IMG_COLOR_STYLED);
var_dump ( rtrim("rtrim test   " , "") );
$a = new PDO("sqlite::memory:");
$b = $a->prepare("insert into test_35336 (b) values (?)");
$b->execute(array (5));
time_nanosleep(0, 1000000000);
