<?php
class SomeClass2 implements JsonSerializable {
    public function jsonSerialize(): mixed {
        return [(array)$this];
    }
}
$class = new SomeClass2;
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    function bar($x='no argument')
    {
        throw new Exception("This is an exception from bar({$x}).");
    }
    bar('first try');
    var_dump("done");
}
function display($res)
{
	echo implode("\n", array_map(fn($row) => implode("\t", $row), $res))."\n";
}
$res = [];
display($res);
$log_file = tempnam(sys_get_temp_dir(), 'php-curl-CURLOPT_WRITEFUNCTION-trampoline');
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'file://' . $log_file);
$file = __DIR__ . "/bug71127.inc";
file_put_contents($file, "<?php define('FOO', 'bad'); echo FOO;?>");
$ch = curl_init("https://localhost/username");
curl_setopt($ch, CURLOPT_STDERR, fopen("php://stdout", "w"));
