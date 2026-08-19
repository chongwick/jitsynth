<?php
$container = [];
// Is
try {
    echo "isset():\n";
    var_dump(isset($container[new stdClass()]));
} catch (\Throwable $e) {
    echo $e->getMessage(), "\n";
}
try {
    echo "empty():\n";
    var_dump(empty($container[new stdClass()]));
} catch (\Throwable $e) {
    echo $e->getMessage(), "\n";
}
try {
    echo "Coalesce():\n";
    var_dump($container[new stdClass()] ?? 'default');
} catch (\Throwable $e) {
    echo $e->getMessage(), "\n";
}
?>
