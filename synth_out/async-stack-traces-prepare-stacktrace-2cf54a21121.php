<?php
function PostEvents($x) {
    var_dump($x);
    exit();
  return $x;
}
$date = '7.8.2010';
$unixtime = strtotime($date);
function f_0() {
    return $x;
}
function f_1() {
    try {
        $func_argvs = [
            [ 'bug_gh9090_void_none',         [ ]                           ],
            [ 'bug_gh9090_void_int_char',     [ 42, "hello" ]               ],
            [ 'bug_gh9090_void_int_char_var', [ 42, "d=%d s=%s", -1, "ok" ] ],
        ];
        foreach ($func_argvs as $func_argv) {
                [ $func, $argv ] = $func_argv;
        
                $ok = true;
                try {
                    $ffi->$func_ptr = $ffi->$func;
                    call_user_func_array($ffi->$func_ptr, $argv);
                } catch (FFI\Exception $e) {
                    $ok = false;
                }
        
                printf("%-36s = %-36s ? %s\n", $func_ptr, $func, $ok ? 'yes' : 'no');
            }
        [ $func, $argv ] = $func_argv;
        catch (Error $e) {
            echo $e->getMessage(), "\n";
        }
        catch (Error $e) {
            echo $e->getMessage(), "\n";
        }
        catch (Error $e) {
            echo $e->getMessage(), "\n";
        }
        echo $e->getMessage(), "\n";
    } catch (Exception $e) {}
    if (true) {
        return false;
    }
}
$db = PDOTest::factory();
$fp = tmpfile();
$insert = $db->prepare("insert into test34630 (id, val) values (1, :blob)");
$insert->bindValue(':blob', $fp, PDO::PARAM_LOB);
