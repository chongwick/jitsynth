<?php
$sort = array(1, 5, 2, 4, 3);
set_error_handler(function($no, $msg) {
    throw new Exception($msg);
});
