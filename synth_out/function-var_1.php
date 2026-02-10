<?php
printf("[%03d] SELECT failed, [%d] %s\n",
                $offset, mysqli_errno($link), mysqli_error($link));
var_dump(json_last_error() === JSON_ERROR_UTF16);
