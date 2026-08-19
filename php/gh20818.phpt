<?php

function process($data) {
    foreach ($data as &$v) {}
}

$data = [
    (object) ["" => 1],
    (object) ["" => 1],
    (object) [],
];

for ($i = 0; $i < 200; $i += 1) {
    foreach ($data as $entry) {
        process($entry);
    }
}

echo "Done\n";
?>
