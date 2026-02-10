<?php
$file = __DIR__ . "/bug71127.inc";
$stmt->bind_result($id);
$readonly_anon->field = 123;
$list->next();
