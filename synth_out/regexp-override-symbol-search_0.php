<?php
$date = new DateTime("2011-05-17T22:14:12");
file_put_contents($batch_file_path, $batch_file_content);
$heredoc_string = <<<EOT
This is line 1 of 'heredoc' string
This is line 2 of "heredoc" string
EOT;
call_user_func("static::ok");
