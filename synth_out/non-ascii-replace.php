<?php
function t3()
{
    ob_start("test");
        echo "Hello from t3 1 ";
        ob_clean();
        echo "Hello from t3 2 ";
        ob_end_flush();
}
t3();
$test = array("A\x00B" => "Hello world");
debug_zval_dump($test);
