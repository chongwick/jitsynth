<?php
$db = getDbConnection();
$stmt = $db->prepare("SELECT 1, 2 AS named, 3");
$stmt->execute();
