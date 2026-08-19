<?php
$allInternalFunctions = array();
$definedFunctions = get_defined_functions();
$internalFunctions = $definedFunctions['internal'];
$allInternalFunctions = array_merge($allInternalFunctions, $internalFunctions);
$allInternalFunctions = array_filter($allInternalFunctions, function($func) {
    strpos($func, 'posix_') !== 0;
});
echo "Done\n";
?>
