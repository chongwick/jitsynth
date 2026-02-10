<?php
$priv = file_get_contents(__DIR__ . "/private.crt");
$zip = new ZipArchive();
$count++;
$db->exec('CREATE TABLE test_33689 (bar INT NOT NULL)');
