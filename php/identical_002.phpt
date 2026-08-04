<?php
function t() {
    echo "!";
    return true;
}
function f() {
    echo "!";
    return false;
}
$a = 0.0;
$b = 0.0;
$c = 1.0;
$d = NAN;
var_dump($a === $b);
var_dump($a === $c);
var_dump($a === $d);
var_dump($a !== $b);
var_dump($a !== $c);
var_dump($a !== $d);
var_dump($a === $b ? 1 : 0);
var_dump($a === $c ? 1 : 0);
var_dump($a === $d ? 1 : 0);
var_dump($a !== $b ? 1 : 0);
var_dump($a !== $c ? 1 : 0);
var_dump($a !== $d ? 1 : 0);
if ($a === $b) {
    echo "1\n";
}
if ($a === $c) {
    echo "2\n";
}
if ($a === $d) {
    echo "3\n";
}
if ($a !== $b) {
    echo "4\n";
}
if ($a !== $c) {
    echo "5\n";
}
if ($a !== $d) {
    echo "6\n";
}
if ($a === $b) {
} else {
    echo "7\n";
}
if ($a === $c) {
} else {
    echo "8\n";
}
if ($a === $d) {
} else {
    echo "9\n";
}
if ($a !== $b) {
} else {
    echo "A\n";
}
if ($a !== $c) {
} else {
    echo "B\n";
}
if ($a !== $d) {
} else {
    echo "C\n";
}
var_dump($a === $b && t());
var_dump($a === $c && t());
var_dump($a === $d && t());
var_dump($a !== $b && t());
var_dump($a !== $c && t());
var_dump($a !== $d && t());
var_dump($a === $b || f());
var_dump($a === $c || f());
var_dump($a === $d || f());
var_dump($a !== $b || f());
var_dump($a !== $c || f());
var_dump($a !== $d || f());
$a=NAN;
var_dump($a === $d);
var_dump($a !== $d);
var_dump($a === $d ? 1 : 0);
var_dump($a !== $d ? 1 : 0);
?>
