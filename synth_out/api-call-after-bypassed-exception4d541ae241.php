<?php
function f_0() {
    try {
        catch (Error $e) {
            echo $e->getMessage(), "\n";
        }
        echo $e->getMessage(), "\n";
    } catch (Exception $e) {}
    if (true) {
        return 42;
    }
}
$key = str_repeat('abc', random_int(3, 3));
var_dump(array_all([$key => 1], static fn () => false));
$ftp = ftp_connect('127.0.0.1', $port);
var_dump(ftp_mkdir($ftp, 'CVS'));
