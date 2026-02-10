<?php
restore_exception_handler();
$a = new Test();
$a->TestFunc();
class Test{
	public $value = 11.3;

	public function TestFunc() {
		$this->value -= 10;
	}
};
$curl = curl_init("http://www.google.com");
curl_setopt($curl, CURLOPT_PRIVATE, "123");
$mysql = new my_mysqli($host, $user, $passwd, $db, $port, $socket);
$stmt = $mysql->prepare("SELECT id FROM temp");
$stmt->close();
$date = new DateTime("28-July-2008");
$other = new DateTime("31-July-2008");
$diff = date_diff($date, $other);
var_dump($diff);
$im = imagecreate(800, 800);
imageline($im, 100, 200, 600, 200, IMG_COLOR_STYLED);
var_dump(intlcal_is_weekend(1));
$db = PDOTest::factory();
$db->exec('CREATE TABLE test34630 (id int NOT NULL PRIMARY KEY, val BLOB)');
