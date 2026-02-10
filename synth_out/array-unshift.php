<?php
catch (\Error $e) {
    var_dump($e);
}
var_dump($e);
function crash()
{
    $notDefined[$i] = 'test';
}
crash();
$empty_webp = __DIR__ . "/gh13774.webp";
$im = imagecreatefromwebp($empty_webp);
var_dump($im);
$trace_file = '/tmp/mysqli_debug_phpt.trace';
unlink($trace_file);
$time = '2000-01-01 00:00:00.000000';
$tz_aus = new DateTimeZone('Australia/Sydney');
$tz_us = new DateTimeZone('America/Los_Angeles');
$auz = new DateTime($time, $tz_aus);
$us = new DateTime($time, $tz_us);
$diff = $auz->diff($us);
var_dump($diff->h);
#[AllowDynamicProperties]
class C {
    public $a = 1;
}
function test(string $name, object $obj) {
    printf("# %s\n", $name);

    $c = new C();
    $c->dyn = 1;
    $propReflector = new ReflectionProperty($c, 'dyn');

    try {
        $propReflector->setRawValueWithoutLazyInitialization($obj, 'test');
    } catch (\ReflectionException $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
}
$c = new C();
$propReflector = new ReflectionProperty($c, 'dyn');
$propReflector->setRawValueWithoutLazyInitialization($obj, 'test');
$fp = fopen("php://memory", "r+");
stream_get_line($fp, 1024*1024*2, "aaaa");
$plain = "The quick brown fox jumps over the lazy dog.";
$fn = "bug71263.bz2";
$compressed = (string) bzcompress($plain);
$compressed = substr($compressed, 0, strlen($compressed) - 20);
file_put_contents($fn, $compressed);
