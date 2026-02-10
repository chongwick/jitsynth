<?php
var_dump(filter_var("<data&sons>", FILTER_SANITIZE_ENCODED, FILTER_FLAG_ENCODE_HIGH));
$xMailer = 'bug80706_x_mailer';
$db = getDbConnection();
$stmt = $db->prepare("SELECT 1, 2 AS named, 3");
var_dump($stmt->fetchAll());
