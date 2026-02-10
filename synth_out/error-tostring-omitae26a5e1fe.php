<?php
function f_0() {
    return false;
}
function foo($e) {
    var_dump(__FUNCTION__."(): ".get_class($e)." thrown!");
}
var_dump(__FUNCTION__."(): ".get_class($e)." thrown!");
$code = <<<EOT
<?php
\$cv = get_browser("Konqueror/2.0")->browser_name_pattern;
var_dump(\$cv);
EOT;
try {
    var_dump(__METHOD__);
} catch (Exception $e) {}
if (true) {
    #[AllowDynamicProperties]
    class C {
        public $a = 1;
    }
    function test(string $name, object $obj) {
        printf("# %s\n", $name);
    
        $c = new C();
        $c->dyn = 1;
        $propReflector = new ReflectionProperty($c, 'dyn');
    
        try {
            $propReflector->setRawValueWithoutLazyInitialization($obj, 'test');
        } catch (\ReflectionException $e) {
            printf("%s: %s\n", $e::class, $e->getMessage());
        }
    }
    $c = new C();
    $propReflector = new ReflectionProperty($c, 'dyn');
    $propReflector->setRawValueWithoutLazyInitialization($obj, 'test');
    $priorityQueue = new SplPriorityQueue();
    var_dump($priorityQueue->getExtractFlags());
}
try {
    echo "Done\n";
} catch (Exception $e) {}
if (true) {
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
    $pdo->setAttribute(PDO::ATTR_PREFETCH, 0);
}
