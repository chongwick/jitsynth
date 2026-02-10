<?php
$name = "foo";
$ch = curl_init("https://localhost/userpwd");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
function f_0() {
    $start = memory_get_usage() + 1024;
    $client = new SoapClient(__DIR__ . '/bug49278.wsdl', array('location' => "http://".PHP_CLI_SERVER_ADDRESS, 'trace' => 1));
    var_dump($client->__getLastResponse());
}
function f_1() {
    try {
        $xml = '<?xml version="1.0" encoding="utf-8" ?>
        <test>
        </test>';
        $root = simplexml_load_string($xml);
        echo $root;
    } catch (Exception $e) {}
    if (true) {
        class TrampolineTest {
            public function __call(string $name, array $arguments) {
                echo 'Trampoline for ', $name, PHP_EOL;
            }
        }
        $o = new TrampolineTest();
        $callback2 = [$o, 'trampoline2'];
        var_dump(spl_autoload_unregister($callback2));
    }
}
function f_2() {
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
        $interval = new DateInterval('P1D');
        $dt = new DateTime('first day of January 2011');
        $dt->sub($interval);
        var_dump ( rtrim("rtrim test0123456789", "0..9") );
    }
}
function zerofill($offset, $link, $datatype, $insert = 1) {

        mysqli_query($link, 'ALTER TABLE test DROP zero');
        $sql = sprintf('ALTER TABLE test ADD zero %s UNSIGNED ZEROFILL', $datatype);
        if (!mysqli_query($link, $sql)) {
            // no worries - server might not support it
            return true;
        }

        if (!mysqli_query($link, sprintf('UPDATE test SET zero = %s', $insert))) {
            printf("[%03d] UPDATE failed, [%d] %s\n",
                $offset, mysqli_errno($link), mysqli_error($link));
            return false;
        }

        if (!($res = mysqli_query($link, 'SELECT zero FROM test LIMIT 1'))) {
            printf("[%03d] SELECT failed, [%d] %s\n",
                $offset, mysqli_errno($link), mysqli_error($link));
            return false;
        }

        $row = mysqli_fetch_assoc($res);
        $meta = mysqli_fetch_fields($res);
        mysqli_free_result($res);
        $meta = $meta[0];
        $length = $meta->length;
        if ($length > strlen($insert)) {

            $expected = str_repeat('0', $length - strlen($insert));
            $expected .= $insert;
            if ($expected !== $row['zero']) {
                printf("[%03d] Expecting '%s' got '%s'\n", $offset, $expected, $row['zero']);
                return false;
            }

        } else if ($length <= 1) {
            printf("[%03d] Length reported is too small to run test\n", $offset);
            return false;
        }

        return true;
    }
zerofill(10, $link, 'DOUBLE PRECISION');
$zip = new ZipArchive();
$zip->close();
