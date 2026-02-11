<?php
$batch_file_content = <<<EOT
@echo off
powershell -Command "Write-Output '%0%'"
powershell -Command "Write-Output '%1%'"
EOT;
$batch_file_path = __DIR__ . '/ghsa-9fcc-425m-g385_003.bat';
file_put_contents($batch_file_path, $batch_file_content);
catch (Exception $e) {
    var_dump($e->getMessage());
}
var_dump($e->getMessage());
