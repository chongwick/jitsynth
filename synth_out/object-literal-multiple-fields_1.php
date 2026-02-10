<?php
var_dump(nl2br($str) );
set_error_handler('my_error_handler');
var_dump( array_unshift($temp_array, $var, "hello", 'world') );
var_dump(printf ("%1.41f\n",unserialize(serialize($dyadic))));
$stmt->execute();
var_dump(get_class_vars(C::class));
var_dump($target);
set_exception_handler(function (\Throwable $exception) {
    echo 'Caught: ' . $exception->getMessage() . "\n";
});
