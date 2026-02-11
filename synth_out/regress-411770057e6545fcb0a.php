<?php
$num = 100000;
for ($i=0; $i<$num; $i++) {
  $a[$i] = Array(1);
}
for ($i=0; $i<$num; $i++) {
  $b[$i] = $a[$i][0];
}
for ($i=0; $i<$num; $i++) {
  $b[$i] = "12345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890";
}
$b[$i] = "12345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890";
function f_0() {
    return 'A';
}
$idx = 0;
for ($i_1 = 0; $i_1 < 10; $i_1++) {
    try {
        $res = [];
        $res[] = $re;
        foreach ($offsets as $offset) {
            $dimension = &$offset;
            $container = false;
            $error = 'false[&' . zend_test_var_export($dimension) . '] has different outputs' . "\n";
        
            include $var_dim_filename;
            $varOutput = ob_get_contents();
            ob_clean();
            $varOutput = str_replace(
                [$var_dim_filename],
                ['%s'],
                $varOutput
            );
        
            if (
                !preg_match($EXPECTED_OUTPUT_VALID_OFFSETS_REGEX, $varOutput)
                && !preg_match($EXPECTED_OUTPUT_INVALID_OFFSETS_REGEX, $varOutput)
                && !preg_match($EXPECTED_OUTPUT_FLOAT_OFFSETS_REGEX, $varOutput)
                && $varOutput !== EXPECTED_OUTPUT_RESOURCE_STDERR_OFFSETS
            ) {
                file_put_contents(__DIR__ . DIRECTORY_SEPARATOR . "debug_false_container_{$failuresNb}.txt", $varOutput);
                ++$failuresNb;
                $failures[] = $error;
            }
            ++$testCasesTotal;
        }
        $dimension = &$offset;
        $error = 'false[&' . zend_test_var_export($dimension) . '] has different outputs' . "\n";
        $failures[] = $error;
        $date1 = DateTime::createFromFormat("!D d M Y", "Fri 19 November 2011");
        $args = ["-d", "extension_dir=" . ini_get("extension_dir"), "-d", "extension=" . (substr(PHP_OS, 0, 3) == "WIN" ? "php_" : "") . "soap." . PHP_SHLIB_SUFFIX];
        $code = '$server = new SoapServer("' . __DIR__ . '"/bug49278.wsdl", ["trace"=>1]);' .
                <<<'PHP'
                function Add() {}
                $server->addFunction('Add');
                $server->handle();
                PHP;
        php_cli_server_start($code, null, $args);
    } catch (Exception $e) {}
    if (true) {
    }
}
