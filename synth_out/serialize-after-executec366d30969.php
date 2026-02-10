<?php
function f_0() {
    function f_1() {
        function f_2() {
            return [$this];
        }
        return function() {
                static $foo = 0;
                yield ++$foo;
            };
    }
    return false;
}
register_shutdown_function('exploDe');
