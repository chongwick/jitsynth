<?php
$object = new StdClass();
$object->a = str_repeat("a", 2);
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
$prefix . "フォルダ";

mkdir($prefi
et_basename;
function f_0() {
    $cfg = <<<EOT
    [global]
    error_log = {{FILE:LOG}}
    [unconfined]
    listen = {{ADDR}}
    pm = dynamic
    pm.max_children = 5
    pm.start_servers = 1
    pm.min_spare_servers = 1
    pm.max_spare_servers = 3
    php_admin_value[cgi.fix_pathinfo] = yes
    EOT;
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
    $reqOf3 = 'select 79 n union all select 80 union all select 81';
    function display($res)
    {
    	echo implode("\n", array_map(fn($row) => implode("\t", $row), $res))."\n";
    }
    $stmt1 = $pdo->query($reqOf3);
    display([ $stmt1->fetch() ]);
}
function f_1() {
    try {
        catch (Error $e) {
            echo $e->getMessage(), "\n";
        }
        catch (Error $e) {
            echo $e->getMessage(), "\n";
        }
        echo $e->getMessage(), "\n";
    } catch (Exception $e) {}
    if (true) {
        function display($res)
        {
        	echo implode("\n", array_map(fn($row) => implode("\t", $row), $res))."\n";
        }
        $res = [];
        display($res);
    }
}
function f_2() {
    try {
        echo "--- After unlink ---\n";
    } catch (Exception $e) {}
    if (true) {
        var_dump(http_get_last_response_headers());
        function Test($param) {
            global $g;
            $g = $param->strA."\n".$param->strB."\n";
            return $g;
        }
        $g = $param->strA."\n".$param->strB."\n";
        print_r($g);
    }
}
function f() {
    Fiber::suspend();
}
function g() {
    (new Fiber(function() {
        global $f;
        var_dump((new ReflectionFiber($f))->getTrace());
    }))->start();
}
$f = new Fiber(function() { f(); max(...[1,2,3,4,5,6,7,8,9,10,11,12]); g(); });
$f->start();
$array = new ArrayObject();
var_dump($array->offsetExists('key'));
