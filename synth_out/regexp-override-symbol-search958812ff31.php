<?php
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
$d1 = $prefix . "フォルダ";
class_alias( 'stdClass', '_' );
$ok = true;
spl_autoload_register(function($class) {
    echo "$class\n";
    if ($class == 'X') {
        new Y;
    }
    if ($class == 'Y') {
        new Q;
    }
});
