<?php
$values = ini_get_all();
foreach ($values as $name => $dsn)
        if ('pdo.dsn.mysql' == $name) {
            printf("pdo.dsn.mysql=%s\n", $dsn);
            $found = true;
            break;
        }
printf("pdo.dsn.mysql=%s\n", $dsn);
$meta_res = $stmt->result_metadata();
$field = $meta_res->fetch_field();
printf("Name         : %s\n", $field->name);
$array_test = array("a", "b", "d", 7, "u" => "U", -4, "-.008" => "neg.008");
reset( $array_test );
var_dump(filter_var("", FILTER_SANITIZE_ENCODED));
