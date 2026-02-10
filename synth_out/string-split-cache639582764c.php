<?php
$str = "This is a test string.\n";
var_dump("hello");
$arc_name = __DIR__ . "/bug40228.zip";
$zip = new ZipArchive;
$zip->open($arc_name, ZIPARCHIVE::CREATE);
var_dump(mb_stripos('Hello', 'e', 0, '8bit'));
$date2 = DateTime::createFromFormat("D H i s", "Tuesday 0 00 00");
class A
{
    use T1;
}
class B extends A
{
    use T2;
}
$b = new B();
public function offsetExists($x): bool { $GLOBALS["obj"] = 24; return true; }
public function offsetGet($x): mixed { var_dump($x); return 42; }
var_dump($x);
