<?php
set_error_handler(function($no, $msg) {
    throw new Exception($msg);
});
