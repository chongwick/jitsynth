<?php
$hash = password_hash(
    "php",
    PASSWORD_ARGON2I,
    ['memory_cost' => 64 << 10, 'time_cost' => 4, 'threads' => 1]
);
$to = "specials";
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    try {
        echo date('r', strtotime('May 18th 2006 5:05pm', 1168156376)), "\n";
    } catch (Exception $e) {}
    if (true) {
        $counter = 1;
        $counter++;
    }
}
class C extends stdClass {
    public int $a;
}
$reflector = new ReflectionClass(C::class);
$obj = new C();
$reflector->resetAsLazyGhost($obj, function () {});
$sql = '
    SET NOCOUNT ON
    SELECT 0 AS [result]
';
for ($i_1 = 0; $i_1 < 10; $i_1++) {
    try {
        $iterator = 1;
        $iterator++;
    } catch (Exception $e) {}
    if (true) {
        $iterator = 1;
        $iterator++;
    }
}
class Box {
    public ?Test $value;
}
global $box;
function test($box) {
    var_dump($box->value = new Test);
}
$box = new Box();
test($box);
class foo
{
// no members
}
$this->public_var1 = new foo();
for ($i_2 = 0; $i_2 < 10; $i_2++) {
    try {
        C::$p++;
    } catch (Exception $e) {}
    if (true) {
        try {
            catch (Error $e) {
            	echo get_class($e), ': ', $e->getMessage(), "\n";
            }
            catch (Error $e) {
            	echo get_class($e), ': ', $e->getMessage(), "\n";
            }
            echo get_class($e), ': ', $e->getMessage(), "\n";
        } catch (Exception $e) {}
        if (true) {
            try {
                $loop_counter = 1;
                $loop_counter++;
            } catch (Exception $e) {}
            if (true) {
                $iterator = 1;
                $iterator++;
            }
        }
    }
}
$fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
$phar = new Phar($fname);
var_dump(strlen($phar->getStub()));
