<?php
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
$xmlstring = '<?xml version="1.0" encoding="UTF-8"?>
<books><book num="1" idx="2">book1</book></books>';
try {
    echo "Ok\n";
} catch (Exception $e) {}
if (true) {
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
        call_user_func("static::ok");
    }
    $tmpFileOut = tempnam(sys_get_temp_dir(), 'test');
    unlink($tmpFileOut);
}
printf("[%03d] Length reported is too small to run test\n", $offset);
