<?php
class TrampolineTest {
    public function __call(string $name, array $arguments) {
        echo 'Trampoline for ', $name, PHP_EOL;
    }
}
$flags = array(
        MYSQLI_NOT_NULL_FLAG => 'NOT_NULL',
        MYSQLI_PRI_KEY_FLAG => 'PRI_KEY',
        MYSQLI_UNIQUE_KEY_FLAG => 'UNIQUE_KEY',
        MYSQLI_MULTIPLE_KEY_FLAG => 'MULTIPLE_KEY',
        MYSQLI_BLOB_FLAG => 'BLOB',
        MYSQLI_UNSIGNED_FLAG	=> 'UNSIGNED',
        MYSQLI_ZEROFILL_FLAG => 'ZEROFILL',
        MYSQLI_AUTO_INCREMENT_FLAG => 'AUTO_INCREMENT',
        MYSQLI_TIMESTAMP_FLAG	=> 'TIMESTAMP',
        MYSQLI_SET_FLAG	=> 'SET',
        MYSQLI_NUM_FLAG => 'NUM',
        MYSQLI_PART_KEY_FLAG => 'PART_KEY',
        // MYSQLI_GROUP_FLAG => 'MYSQLI_GROUP_FLAG' - internal usage only
        (defined('MYSQLI_NO_DEFAULT_VALUE_FLAG') ? MYSQLI_NO_DEFAULT_VALUE_FLAG : 4096) => 'NO_DEFAULT_VALUE',
        (defined('MYSQLI_BINARY_FLAG') ? MYSQLI_BINARY_FLAG : 128) => 'BINARY',
        (defined('MYSQLI_ENUM_FLAG') ? MYSQLI_ENUM_FLAG : 256) => 'ENUM',
        // MYSQLI_BINCMP_FLAG
    );
$flags[8192] = 'ON_UPDATE_NOW';
$object = new StdClass();
$object->a = str_repeat("a", 2);
$o = new TrampolineTest();
$callback2 = [$o, 'trampoline2'];
spl_autoload_register($callback2);
function f_0() {
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        $offsets = array(20, 21, 22, 53, 54);
        foreach($offsets as $i) {
            echo "\n-- Offset is $i --\n";
            echo "--Multibyte String:--\n";
            try {
                var_dump( mb_strpos($string_mb, $needle, $i, 'UTF-8') );
            } catch (\ValueError $e) {
                echo $e->getMessage() . \PHP_EOL;
            }
            echo"--ASCII String:--\n";
            try {
                var_dump(mb_strpos('This is na English ta', 'a', $i));
            } catch (\ValueError $e) {
                echo $e->getMessage() . \PHP_EOL;
            }
        }
        var_dump(mb_strpos('This is na English ta', 'a', $i));
    }
}
function f_2() {
    return false;
}
var_dump( range(1.0, 7.0, 10.0**400) );
function f_3() {
}
function f_4() {
    public function getHash($object): string { return get_class($object); }
    return get_class($object);
}
