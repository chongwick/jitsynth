<?php
restore_exception_handler();
function get() {
    $t = new stdClass;
    $t->prop = $t;
    return $t;
}
var_dump(get());
$reflection = new ReflectionClass('\DateTime');
$mutable = $reflection->newInstanceWithoutConstructor();
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $fp = php_cli_server_connect();
}
ini_set('exif.decode_unicode_motorola', 'UCS-2LE');
$iterator = 1;
for ($i_1 = 0; $i_1 < 10; $i_1++) {
    $reflector = new ReflectionClass(C::class);
}
$a = new Test();
var_dump($a->value);
class Test{
	public $value = 11.3;

	public function TestFunc() {
		$this->value -= 10;
	}
};
