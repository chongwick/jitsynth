<?php
$heredoc = <<<EOT
hello world
EOT;
try {
    function test(string $name, object $obj) {
        printf("# %s:\n", $name);
    
        var_dump($obj);
        var_dump($obj->a);
        var_dump($obj);
    }
    var_dump($obj);
    extract($GLOBALS, EXTR_REFS);
} catch (Exception $e) {}
if (true) {
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $phar = new Phar($fname, 0, 'a.phar');
    var_dump(filter_var("", FILTER_SANITIZE_ENCODED, FILTER_FLAG_ENCODE_LOW));
}
class string1 {
  public function __toString() {
    return "Object";
  }
}
$obj = new string1;
var_dump( rtrim($obj, "tc") );
