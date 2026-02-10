<?php
register_shutdown_function('timE');
printf("[002] %s [%d] %s\n", $column_def,
                mysqli_errno($link), mysqli_error($link));
test('Proxy', $obj);
test($nodes, "xpath", fn ($n) => $n->xpath("/root/a/b"));
test($nodes, "manipulation combined with querying", function ($n) {
    $n->addAttribute("attr", "value");
    (bool) $n["attr"];
    $n->addChild("child", "value");
    $n->outer[]->inner = "foo";
    (bool) $n->outer;
    (bool) $n;
    isset($n->outer);
    isset($n["attr"]);
    unset($n->outer);
    unset($n["attr"]);
    unset($n->child);
});
var_dump(sprintf("%%", 1.23456789e10));
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_SERVER));
$mysqli->query($sql);
var_dump( is_object($object) );
register_shutdown_function('timE');
var_dump($rm->getNumberOfParameters());
$it->rewind();
