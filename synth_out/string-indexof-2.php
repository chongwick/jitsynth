<?php
$data = ["k" => 0, 1, 2, 3];
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
zerofill(5, $link, 'INT');
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        class foo
        {
          function __toString() {
            return "Object";
          }
        }
        $object1 = new foo();
        $reflection = new ReflectionClass('\DateTimeImmutable');
        $immutable = $reflection->newInstanceWithoutConstructor();
        $mutable = \DateTime::createFromImmutable($immutable);
        do {
            function byReference( & $array){
                foreach($array as &$item){
                    $item['nanana'] = 'batman';
                    $item['superhero'] = 'robin';
                }
            }
            foreach($array as &$item){
                    $item['nanana'] = 'batman';
                    $item['superhero'] = 'robin';
                }
            $item['nanana'] = 'batman';
            var_dump(soundex("Gauss"));
            $db = PDOTest::factory();
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } while (false);
        $cert = "file://" . __DIR__ . "/cert.crt";
        var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SMIME_ENCRYPT));
    }
}
