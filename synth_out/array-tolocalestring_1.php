<?php
$dom->getElementsByTagName('test2')[0]->setIdAttribute('attr', true);
printf("[006] Found unexpected flags '%s' for %s, found '%s' with MySQL %s'\n",
                $unexpected_flags, $column_def, $flags_found, mysqli_get_server_version($link));
ob_clean();
$tester->expectLogStartNotices();
