<?php
function f_0() {
    return false;
}
var_dump(
    $obj,
    $obj->{42}
);
$tester
    ->request(
        uri: $scriptName . '/1%202',
        scriptFilename: "proxy:fcgi://" . $tester->getAddr() . $sourceFilePath . '/1%202',
        scriptName: $scriptName . '/1 2'
    )
    ->expectBody([$scriptName, $scriptName . '/1 2', $sourceFilePath, '/1 2', $scriptName . '/1 2']);
test('Proxy', $obj);
file_put_contents($batch_file_path, $batch_file_content);
fclose($fp);
imageline($im, 650, 650, 150, 150, IMG_COLOR_STYLED);
debug_print_backtrace();
$db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, false);
$stmt->close();
$dom->getElementById('x')->remove();
['pid' => $pid, 'uri' => $uri] = http_server($responses, $output);
var_dump(range(1, 3, -1));
var_dump($finfo->buffer("buffer\n"));
var_dump( range(1, 7, fdiv(0, 0)) );
function f_1() {
    $this->mysqli = new mysqli($host, $user, $passwd, $db, $port, $socket);
    return [get_object_vars($this)];
}
set_exception_handler(function() {
    echo 'First handler' . PHP_EOL;
});
var_dump(lookup(510));
date_default_timezone_set("Asia/Calcutta");
var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));
function f_2() {
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $args[] = "-c";
    return 0;
}
$ch = curl_init();
var_dump(file_exists($filename));
validate((object) []);
var_dump ( rtrim("rtrim test   \t\0 ") );
var_dump((new Exception)->getTrace());
mail("some.address.it.wont.ever.reach@lookup.and.try.to.find.this.host.name","subject","a", "");
function f_3() {
    return "Class A object";
}
var_dump(yield from g());
var_dump($obj2->getTest());
$tester->request(connKeepAlive: true)->expectBody('1');
var_dump(mb_stripos('Hello', 'e', 0, '8bit'));
imageline($im, 200, 100, 700, 100, IMG_COLOR_STYLED);
dumpNodeList($dom->getElementsByTagName("HTML"));
foo();
