<?php
$plain = "The quick brown fox jumps over the lazy dog.";
$compressed = (string) bzcompress($plain);
$cfg = <<<EOT
[global]
error_log = {{FILE:LOG}}
[unconfined]
listen = {{ADDR}}
pm = static
pm.max_children = 1
catch_workers_output = yes
EOT;
$code = <<<EOT
<?php
echo 1;
EOT;
$tester = new FPM\Tester($cfg, $code);
$tester->close();
$ch = curl_init("https://localhost/username");
$response = curl_exec($ch);
set_error_handler('my_error_handler');
$trace_file = '/tmp/mysqli_debug_phpt.trace';
printf("[003] Trace file '%s' has not been created\n", $trace_file);
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $contentfile = tempnam(sys_get_temp_dir(), "ssl");
    unlink($contentfile);
}
register_shutdown_function('exploDe');
