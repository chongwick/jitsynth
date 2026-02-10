<?php
$sql = "SELECT 11111 as `1`, 22222 as `2`";
$heredoc = <<<EOT
Hello world
EOT;
$pid = pcntl_fork();
