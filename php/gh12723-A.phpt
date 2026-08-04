<?php

$container = '';
$dimension = [];

try {
    var_dump($container[$dimension]);
} catch (\Throwable $e) {
    echo $e->getMessage(), "\n";
}

?>
