<?php
set_error_handler(function (int $errno, string $errstring): never {
    throw new Exception($errstring);
});
