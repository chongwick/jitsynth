<?php
function test($a) { 
    var_dump(+$a);
}   
    
try {
    test('foo');
} catch (TypeError $e) {
    echo $e->getMessage(), "\n";
}   
?>
