<?php
$code = <<<EOT
<?php
\$cv = get_browser("Konqueror/2.0")->browser_name_pattern;
var_dump(\$cv);
EOT;
$foo_object = new foo();
$a = null;
$dt = DateTime::createFromFormat('Y-m-d!', '2011-02-02');
var_dump(preg_match_all($regex, $subject, 'test'));
$bz = bzopen($filename, "w");
zerofill(3, $link, 'SMALLINT');
test($nodes, "children", fn ($n) => $n->children());
$this->test = $test;
try {
} catch (Exception $e) {}
if (true) {
    list($c,$d) = is_array($arr)?: NULL;
}
$priv = file_get_contents(__DIR__ . "/private.crt");
$dimension = &$offset;
var_dump($stmt->nextRowset());
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
(new Fiber(function() {
        global $f;
        var_dump((new ReflectionFiber($f))->getTrace());
    }))->start();
var_dump($r);
