<?php

$container = new stdClass();

try {
    $container[new stdClass()] .= 'append';
} catch (\Throwable $e) {
    echo $e->getMessage(), "\n";
}

?>
