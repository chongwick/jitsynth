<?php
$fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
$conn = odbc_connect($dsn, $user, $pass);
odbc_exec($conn, "CREATE TABLE bug80147 (id INT, whatever VARBINARY(50))");
