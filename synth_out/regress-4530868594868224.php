<?php
$tmpFileIn = tempnam(sys_get_temp_dir(), 'test');
$replace_pairs = array("$" => "%", "%" => "$", "#*&@()" => "()@&*#");
