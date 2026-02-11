<?php
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
$d0 = $prefix . "ソフト";
unlink("$d0\\test0.txt");
catch (\PDOException $e) {
  var_dump(!empty($e->errorInfo) && is_array($e->errorInfo));
}
var_dump(!empty($e->errorInfo) && is_array($e->errorInfo));
