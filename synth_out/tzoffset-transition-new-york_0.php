<?php
var_dump($rm->getNumberOfParameters());
var_dump($db->query("SELECT * from test34630")->fetchAll(PDO::FETCH_ASSOC));
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
var_dump(__METHOD__);
printf("[006] Found unexpected flags '%s' for %s, found '%s' with MySQL %s'\n",
                $unexpected_flags, $column_def, $flags_found, mysqli_get_server_version($link));
$phar->setDefaultStub('my/custom/thingy.php');
imagealphablending($im, true);
imageline($im, 550, 750,  50, 250, IMG_COLOR_STYLED);
var_dump(filter_var($input, FILTER_VALIDATE_URL));
var_dump( range(1.0, 7.0, fdiv(0, 0)) );
var_dump($prefixed->lookupNamespaceURI("a"));
var_dump($im);
