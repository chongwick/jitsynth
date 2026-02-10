<?php
function f_0() {
    function test($p12_contents, $password) {
        openssl_pkcs12_read($p12_contents, $cert_data, $password);
        openssl_error_string();
        var_dump(count($cert_data['extracerts']));
    }
    $pass = "qwerty";
    test($p12, $pass);
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
    EOT;
    $code = <<<EOT
    <?php
    echo "Test\n";
    EOT;
    $tester = new FPM\Tester($cfg, $code);
    $tester
        ->request('', ['SCRIPT_FILENAME' => null])
        ->expectHeader('Status', '404 Not Found')
        ->expectError('Primary script unknown');
    $pdo = MySQLPDOTest::factory();
    $pdo->setAttribute(\PDO::ATTR_EMULATE_PREPARES, false);
    var_dump(json_decode('{"":"value", "key":"value"}', true));
    var_dump(filter_var("<data&sons>", FILTER_SANITIZE_ENCODED, FILTER_FLAG_ENCODE_HIGH));
    $fiber = new Fiber(function (): void {
        $self = Fiber::getCurrent();
        $self->resume();
    });
    $fiber->start();
}
function f_1() {
    class MySessionHandler implements SessionHandlerInterface {
        function open($save_path, $session_name): bool {
            return true;
        }
    
        function close(): bool {
            die("close: goodbye cruel world\n");
        }
    
        function read($id): string|false {
            return '';
        }
    
        function write($id, $session_data): bool {
            die("write: goodbye cruel world\n");
        }
    
        function destroy($id): bool {
            return true;
        }
    
        function gc($maxlifetime): int {
            return 1;
        }
    }
    session_set_save_handler(new MySessionHandler());
    $mysqli = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
    $res = $mysqli->query('SELECT 42');
    $obj = $res->fetch_object();
    var_dump(
        $obj,
        $obj->{42}
    );
    $thisdir = __DIR__;
    $filename = $thisdir . "/bug47667.zip";
    unlink($filename);
    catch (Error $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
    catch (Error $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
    printf("%s: %s\n", $e::class, $e->getMessage());
    $key = str_repeat('abc', random_int(3, 3));
    var_dump(array_any([$key => 1], static fn () => true));
    $ar1 = array("row1" => 2, "row2" => 1);
    $args = array(&$ar1);
    var_dump(call_user_func_array("array_multisort", $args));
}
$contentfile = tempnam(sys_get_temp_dir(), "ssl");
unlink($contentfile);
function test(object $obj) {
        $obj->a = 1;
    }
$reflector = new ReflectionClass(C::class);
$obj = $reflector->newLazyGhost(function ($obj) {
        var_dump("initializer");
        $obj->__construct();
    });
var_dump($obj);
