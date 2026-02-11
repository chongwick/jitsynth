<?php
function test($foo) {
    var_dump(0);
    var_dump($foo[0]);
}
class foo
{
// no members
}
class C extends stdClass {
    public int $a;
}
test("str");
$f = __DIR__ . DIRECTORY_SEPARATOR . "67647.mov";
$fi = new finfo(FILEINFO_MIME_TYPE);
var_dump($fi->file($f));
$fp = fopen (__FILE__, "r");
$dfp = opendir ( __DIR__ );
$unset_object = new foo();
$not_objects = array (
  0,
  -1,
  0.1,
  -10.0000000000000000005,
  10.5e+5,
  0xFF,
  0123,
  $fp,  // resource
  $dfp,
  array(),
  array("string"),
  "0",
  "1",
  "",
  true,
  NULL,
  null,
  @$unset_object, // unset object
  @$undefined_var, // undefined variable
);
foreach ($not_objects as $type ) {
  echo "-- Iteration $loop_counter --\n"; $loop_counter++;
  var_dump( is_object($type) );
}
var_dump( is_object($type) );
var_dump ( rtrim("rtrim testABCXYZ", "A..Z") );
printf("printf test 31:%.17g\n", INF);
$dom = Dom\HTMLDocument::createFromString(<<<HTML
<!DOCTYPE html>
<html>
    <body>
        <svg xmlns="http://www.w3.org/2000/svg" height="1"></svg>
        <math></math>
    </body>
</html>
HTML);
$body = $dom->getElementsByTagName("body")[0];
$body->setAttributeNS("http://www.w3.org/2000/xmlns/", "xmlns:a", "");
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    test("http://te[st@2001:db8:3333:4444:5555:6666:1.2.3.4]");
    $db = MySQLPDOTest::factory();
    $stmt = $db->prepare('SELECT * FROM test_33689');
    print_r($stmt->getColumnMeta(0));
    var_dump(soundex("Lloyd")       == soundex("Ladd"));
    $meta_res = $stmt->result_metadata();
    $field = $meta_res->fetch_field();
    printf("Table        : %s\n", $field->table);
}
$reflector = new ReflectionClass(C::class);
$obj = new C();
$reflector->resetAsLazyProxy($obj, function ($obj) {
    });
$reflector = new ReflectionClass(C::class);
$obj = $reflector->newLazyGhost(function ($obj) {
    var_dump("initializer");
    $obj->__construct();
});
$obj = $reflector->newLazyProxy(function ($obj) {
    var_dump("initializer");
    return new C();
});
test('Proxy', $obj);
var_dump(soundex("Hilbert") == soundex("Ladd"));
$fp = fopen (__FILE__, "r");
$dfp = opendir ( __DIR__ );
$unset_object = new foo();
$not_objects = array (
  0,
  -1,
  0.1,
  -10.0000000000000000005,
  10.5e+5,
  0xFF,
  0123,
  $fp,  // resource
  $dfp,
  array(),
  array("string"),
  "0",
  "1",
  "",
  true,
  NULL,
  null,
  @$unset_object, // unset object
  @$undefined_var, // undefined variable
);
foreach ($not_objects as $type ) {
  echo "-- Iteration $loop_counter --\n"; $loop_counter++;
  var_dump( is_object($type) );
}
var_dump( is_object($type) );
global $list;
$list->pop();
