<?php
class C extends stdClass {
    public int $a;
}
function checkFlags($reported_flags, $expected_flags, $flags) {
        $found_flags = $unexpected_flags = '';
        foreach ($flags as $code => $name) {
            if ($reported_flags >= $code) {
                $reported_flags -= $code;
                $found_flags .= $name . ' ';
                if (stristr($expected_flags, $name)) {
                    $expected_flags = trim(str_ireplace($name, '', $expected_flags));
                } else {
                    $unexpected_flags .= $name . ' ';
                }
            }
        }

        return array($expected_flags, $unexpected_flags, $found_flags);
    }
function test(string $name, object $obj) {
    printf("# %s:\n", $name);

    var_dump($obj);
    var_dump(@$obj->dynamic++);
    var_dump($obj);
}
function f_0() {
    $depth0 = "depth02";
    $depth1 = "depth1";
    touch(__DIR__ . DIRECTORY_SEPARATOR . $depth0 . DIRECTORY_SEPARATOR . $depth1 . DIRECTORY_SEPARATOR . 'getSubPathname_test_3.tmp');
    $obj = new C();
    $tests = array(
        1 => array(
            '$6$saltstring',
            'Hello world!',
            '$6$saltstring$svn8UoSVapNtMuq1ukKS4tPQd8iKwSMHWjl/O817G3uBnIFNjnQJuesI68u4OTLiBFdcbYEdFCoEOfaS35inz1'
        ),
        2 => array(
            '$6$rounds=10000$saltstringsaltstring',
            'Hello world!',
            '$6$rounds=10000$saltstringsaltst$OW1/O6BYHV6BcXZu8QVeXbDWra3Oeqh0sbHbbMCVNSnCM/UrjmM0Dp8vOuZeHBy/YTBmSK6H9qs/y3RnOaw5v.'
        ),
        3 => array(
            '$6$rounds=5000$toolongsaltstring',
            'This is just a test',
            '$6$rounds=5000$toolongsaltstrin$lQ8jolhgVRVhY4b5pZKaysCLi0QBxGoNeKQzQ3glMhwllF7oGDZxUhx1yxdYcz/e1JSbq3y6JMxxl8audkUEm0'
        ),
        4 => array(
            '$6$rounds=1400$anotherlongsaltstring',
            'a very much longer text to encrypt.  This one even stretches over morethan one line.',
            '$6$rounds=1400$anotherlongsalts$POfYwTEok97VWcjxIiSOjiykti.o/pQs.wPvMxQ6Fm7I6IoYN3CmLs66x9t0oSwbtEW7o7UmJEiDwGqd8p4ur1'
        ),
        5 => array(
            '$6$rounds=77777$short',
            'we have a short salt string but not a short password',
            '$6$rounds=77777$short$WuQyW2YR.hBNpjjRhpYD/ifIw05xdfeEyQoMxIXbkvr0gge1a1x3yRULJ5CCaUeOxFmtlcGZelFl5CxtgfiAc0'
        ),
        6 => array(
            '$6$rounds=123456$asaltof16chars..',
            'a short string',
            '$6$rounds=123456$asaltof16chars..$BtCwjqMJGx5hrJhZywWvt0RLE8uZ4oPwcelCjmw2kSYu.Ec6ycULevoBK25fs2xXgMNrCzIMVcgEJAstJeonj1'
        ),
        7 => array(
            '$6$$bar$',
            'foo',
            '$6$$QMXjqd7rHQZPQ1yHsXkQqC1FBzDiVfTHXL.LaeDAeVV.IzMaV9VU4MQ8kPuZa2SOP1A0RPm772EaFYjpEJtdu.'
        ),
        8 => array(
            '$6$rounds=10$roundstoolow',
            'the number of rounds is too low',
            '*0'
        ),
        8 => array(
            '$6$rounds=1000000000$roundstoohigh',
            'the number of rounds is too high',
            '*0'
        ),
    );
    foreach ($tests as $iter => $t) {
        $res = crypt($t[1], $t[0]);
        if ($res != $t[2]) echo "Iteration $iter failed.
    Expected: <$t[2]>
    Got       <$res>\n";
    }
    $res = crypt($t[1], $t[0]);
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        $lazy = true;
        $mem = $lazy ? 0 : 1;
    }
    $varOutput = ob_get_contents();
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        $h = <<<'EOD'
        void (*bug_gh9090_void_none_ptr)();
        void (*bug_gh9090_void_int_char_ptr)(int, char *);
        void (*bug_gh9090_void_int_char_var_ptr)(int, char *, ...);
        void (*bug_gh9090_void_char_int_ptr)(char *, int);
        int (*bug_gh9090_int_int_char_ptr)(int, char *);
        
        void bug_gh9090_void_none();
        void bug_gh9090_void_int_char(int i, char *s);
        void bug_gh9090_void_int_char_var(int i, char *fmt, ...);
        EOD;
        if (true) {
            $server = stream_socket_server("tcp://[::1]:1337/");
        }
    }
    $dtor = new class { function __destruct() { throw new Exception; } };
    chdir(__DIR__);
    $args = ["-d", "extension_dir=" . ini_get("extension_dir"), "-d", "extension=" . (substr(PHP_OS, 0, 3) == "WIN" ? "php_" : "") . "soap." . PHP_SHLIB_SUFFIX];
    $args[] = php_ini_loaded_file();
    for ($i_3 = 0; $i_3 < 10; $i_3++) {
        $re = new ReflectionExtension("hash");
    }
    if (true) {
        $f = __DIR__."/data/test.txt.gz";
        $h = gzopen($f, 'r');
        gzclose($h);
        $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
        $prefix . "フォルダ";
        
        mkdir($prefi;
    }
    if (!true) {
        $args = ["-d", "extension_dir=" . ini_get("extension_dir"), "-d", "extension=" . (substr(PHP_OS, 0, 3) == "WIN" ? "php_" : "") . "soap." . PHP_SHLIB_SUFFIX];
        $code = <<<'PHP'
        /* Receive */
        $content = trim(file_get_contents("php://input")) . PHP_EOL;
        PHP;
        php_cli_server_start($code, null, $args);
        $url = ""
            . "php://filter/read="
            . urlencode("convert.iconv.ISO-8859-15/UTF-8")
            . '|' . urlencode("string.rot13")
            . '|' . urlencode("string.rot13")
            . '|' . urlencode("convert.iconv.UTF-8/ISO-8859-15")
            . "/resource=data://text/plain,foob%E2r";
    }
    $x = 1.0;
    for ($i_4 = 0; $i_4 < 10; $i_4++) {
        $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    }
    if (true) {
        $flags = array(
                MYSQLI_NOT_NULL_FLAG => 'NOT_NULL',
                MYSQLI_PRI_KEY_FLAG => 'PRI_KEY',
                MYSQLI_UNIQUE_KEY_FLAG => 'UNIQUE_KEY',
                MYSQLI_MULTIPLE_KEY_FLAG => 'MULTIPLE_KEY',
                MYSQLI_BLOB_FLAG => 'BLOB',
                MYSQLI_UNSIGNED_FLAG	=> 'UNSIGNED',
                MYSQLI_ZEROFILL_FLAG => 'ZEROFILL',
                MYSQLI_AUTO_INCREMENT_FLAG => 'AUTO_INCREMENT',
                MYSQLI_TIMESTAMP_FLAG	=> 'TIMESTAMP',
                MYSQLI_SET_FLAG	=> 'SET',
                MYSQLI_NUM_FLAG => 'NUM',
                MYSQLI_PART_KEY_FLAG => 'PART_KEY',
                // MYSQLI_GROUP_FLAG => 'MYSQLI_GROUP_FLAG' - internal usage only
                (defined('MYSQLI_NO_DEFAULT_VALUE_FLAG') ? MYSQLI_NO_DEFAULT_VALUE_FLAG : 4096) => 'NO_DEFAULT_VALUE',
                (defined('MYSQLI_BINARY_FLAG') ? MYSQLI_BINARY_FLAG : 128) => 'BINARY',
                (defined('MYSQLI_ENUM_FLAG') ? MYSQLI_ENUM_FLAG : 256) => 'ENUM',
                // MYSQLI_BINCMP_FLAG
            );
        $columns = array(
                'INT DEFAULT NULL' => 'NUM',
                'INT NOT NULL' => 'NOT_NULL NO_DEFAULT_VALUE NUM',
                'INT NOT NULL DEFAULT 1' => 'NOT_NULL NUM',
                'INT UNSIGNED DEFAULT NULL' => 'UNSIGNED NUM',
                'INT UNSIGNED NOT NULL'	=> 'NOT_NULL UNSIGNED NO_DEFAULT_VALUE NUM',
                'INT UNSIGNED NOT NULL DEFAULT 1' => 'NOT_NULL UNSIGNED NUM',
                'INT UNSIGNED ZEROFILL DEFAULT NULL' => 'UNSIGNED ZEROFILL NUM',
                'INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY' => 'NOT_NULL PRI_KEY UNSIGNED AUTO_INCREMENT NUM PART_KEY',
                'CHAR(1) DEFAULT NULL'	=> '',
                'CHAR(1) NOT NULL' => 'NOT_NULL NO_DEFAULT_VALUE',
                'VARBINARY(127) DEFAULT NULL' => 'BINARY',
                'BLOB'	=> 'BLOB BINARY',
                'TINYBLOB'	=> 'BLOB BINARY',
                'MEDIUMBLOB'	=> 'BLOB BINARY',
                'LONGBLOB'	=> 'BLOB BINARY',
                'TEXT'	=> 'BLOB',
                'TINYTEXT'	=> 'BLOB',
                'MEDIUMTEXT'	=> 'BLOB',
                'LONGTEXT'	=> 'BLOB',
                'SET("one", "two")'	=> 'SET',
                'SET("one", "two") NOT NULL'	=> 'NOT_NULL SET NO_DEFAULT_VALUE',
                'SET("one", "two") NOT NULL DEFAULT "one"'	=> 'NOT_NULL SET',
                'ENUM("one", "two")'	=> 'ENUM',
                'ENUM("one", "two") NOT NULL' => 'NOT_NULL ENUM NO_DEFAULT_VALUE',
                'ENUM("one", "two") NOT NULL DEFAULT "one"' => 'NOT_NULL ENUM',
                'TINYINT UNIQUE' => 'UNIQUE_KEY NUM PART_KEY',
                'SMALLINT UNIQUE' => 'UNIQUE_KEY NUM PART_KEY',
                'MEDIUMINT UNIQUE DEFAULT 1' => 'UNIQUE_KEY NUM PART_KEY',
                'BIGINT UNSIGNED UNIQUE DEFAULT 100' => 'UNIQUE_KEY UNSIGNED NUM PART_KEY',
                'BIT' => 'UNSIGNED',
                'VARCHAR(2) NOT NULL PRIMARY KEY' => 'NOT_NULL PRI_KEY NO_DEFAULT_VALUE PART_KEY'
            );
        foreach ($flags as $code => $name) {
                    if ($reported_flags >= $code) {
                        $reported_flags -= $code;
                        $found_flags .= $name . ' ';
                        if (stristr($expected_flags, $name)) {
                            $expected_flags = trim(str_ireplace($name, '', $expected_flags));
                        } else {
                            $unexpected_flags .= $name . ' ';
                        }
                    }
                }
        $expected_flags = trim(str_ireplace($name, '', $expected_flags));
        foreach ($columns as $column_def => $expected_flags) {
                if (!mysqli_query($link, 'DROP TABLE IF EXISTS test')) {
                    printf("[002] %s [%d] %s\n", $column_def,
                        mysqli_errno($link), mysqli_error($link));
                    continue;
                }
        
                $create = sprintf('CREATE TABLE test(id INT, col1 %s)', $column_def);
                if (!mysqli_query($link, $create)) {
                    // Server might not support it - skip
                    continue;
                }
        
                if (!$res = mysqli_query($link, 'SELECT * FROM test')) {
                    printf("[003] Can't select from table, %s [%d] %s\n", $column_def,
                        mysqli_errno($link), mysqli_error($link));
                    continue;
                }
        
                $field = mysqli_fetch_field_direct($res, 1);
                if (!is_object($field)) {
                    printf("[004] Fetching the meta data failed, %s [%d] %s\n", $column_def,
                        mysqli_errno($link), mysqli_error($link));
                    continue;
                }
                if ($field->name != 'col1') {
                    printf("[005] Field information seems wrong, %s [%d] %s\n", $column_def,
                        mysqli_errno($link), mysqli_error($link));
                    continue;
                }
        
                /*
                TODO
                Unfortunately different server versions give you slightly different
                results.The test does not yet fully reflect all server changes/bugs etc.
                */
                switch ($column_def) {
                    case 'INT UNSIGNED NOT NULL':
                    case 'INT NOT NULL':
                    case 'CHAR(1) NOT NULL':
                    case 'SET("one", "two") NOT NULL':
                    case 'ENUM("one", "two") NOT NULL':
                        $version = mysqli_get_server_version($link);
                        if ($version < 50000) {
                            // TODO - check exact version!
                            $expected_flags = trim(str_replace('NO_DEFAULT_VALUE', '', $expected_flags));
                        }
                        break;
        
                    case 'BIT':
                        $version = mysqli_get_server_version($link);
                        if (($version <= 50114 && $version > 50100) || ($version == 50200)) {
                            // TODO - check exact version!
                            $expected_flags = trim(str_replace('UNSIGNED', '', $expected_flags));
                        }
        
                    default:
                        break;
                }
        
                list($missing_flags, $unexpected_flags, $flags_found) = checkFlags($field->flags, $expected_flags, $flags);
                if ($unexpected_flags) {
                    printf("[006] Found unexpected flags '%s' for %s, found '%s' with MySQL %s'\n",
                        $unexpected_flags, $column_def, $flags_found, mysqli_get_server_version($link));
                }
                if ($missing_flags) {
                    printf("[007] The flags '%s' have not been reported for %s, found '%s'\n",
                        $missing_flags, $column_def, $flags_found);
                    var_dump($create);
                    var_dump(mysqli_get_server_version($link));
                    die($missing_flags);
                }
        
                mysqli_free_result($res);
            }
        printf("[002] %s [%d] %s\n", $column_def,
                        mysqli_errno($link), mysqli_error($link));
        $fn = function() { return static::name(); };
    }
    if (!true) {
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
        $code = <<<EOT
        <?php
        echo \$_SERVER["SCRIPT_NAME"] . "\n";
        echo \$_SERVER["ORIG_SCRIPT_NAME"] . "\n";
        echo \$_SERVER["SCRIPT_FILENAME"] . "\n";
        echo \$_SERVER["PATH_INFO"] . "\n";
        echo \$_SERVER["PHP_SELF"];
        EOT;
        $tester = new FPM\Tester($cfg, $code);
        $tester->start();
        $flags = array(
                MYSQLI_NOT_NULL_FLAG => 'NOT_NULL',
                MYSQLI_PRI_KEY_FLAG => 'PRI_KEY',
                MYSQLI_UNIQUE_KEY_FLAG => 'UNIQUE_KEY',
                MYSQLI_MULTIPLE_KEY_FLAG => 'MULTIPLE_KEY',
                MYSQLI_BLOB_FLAG => 'BLOB',
                MYSQLI_UNSIGNED_FLAG	=> 'UNSIGNED',
                MYSQLI_ZEROFILL_FLAG => 'ZEROFILL',
                MYSQLI_AUTO_INCREMENT_FLAG => 'AUTO_INCREMENT',
                MYSQLI_TIMESTAMP_FLAG	=> 'TIMESTAMP',
                MYSQLI_SET_FLAG	=> 'SET',
                MYSQLI_NUM_FLAG => 'NUM',
                MYSQLI_PART_KEY_FLAG => 'PART_KEY',
                // MYSQLI_GROUP_FLAG => 'MYSQLI_GROUP_FLAG' - internal usage only
                (defined('MYSQLI_NO_DEFAULT_VALUE_FLAG') ? MYSQLI_NO_DEFAULT_VALUE_FLAG : 4096) => 'NO_DEFAULT_VALUE',
                (defined('MYSQLI_BINARY_FLAG') ? MYSQLI_BINARY_FLAG : 128) => 'BINARY',
                (defined('MYSQLI_ENUM_FLAG') ? MYSQLI_ENUM_FLAG : 256) => 'ENUM',
                // MYSQLI_BINCMP_FLAG
            );
        $flags[8192] = 'ON_UPDATE_NOW';
    }
}
$compression = [
    'gz' => ['zlib.deflate', 'gzinflate'],
    'bz2' => ['bzip2.compress', 'bzdecompress']
];
foreach ($compression as $ext => [$filter, $function]) {
    $stream = fopen(__DIR__ . "/75776.$ext", 'w');
    stream_filter_append($stream, $filter);
    fwrite($stream,"sdfgdfg");
    fflush($stream);
    fclose($stream);

    $compressed = file_get_contents(__DIR__ . "/75776.$ext");
    var_dump($function($compressed));
}
$stream = fopen(__DIR__ . "/75776.$ext", 'w');
for ($i_5 = 0; $i_5 < 10; $i_5++) {
    $reflector = new ReflectionClass(C::class);
    $obj = $reflector->newLazyGhost(function ($obj) {
        var_dump("initializer");
        $obj->__construct();
    });
    test('Ghost', $obj);
    $headers1 = exif_read_data(__DIR__ . '/bug64739.jpg');
    var_dump($headers1['Author'][0] === '?');
}
function f_6() {
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_TIMESTAMP_SIGN, array($cpca), $utfl));
    $s = "1234567890a";
    var_dump($s["10"], isset($s["10"]));
}
function f_7() {
    $b = 'x';
    try {
        $im = imagecreate(800, 800);
        imageline($im, 550, 250, 550, 750, IMG_COLOR_STYLED);
    } catch (Exception $e) {}
    if (true) {
        var_dump(preg_replace_callback_array([], []));
        $data_comp_func = 'compare_function';
    }
    try {
        $conn = odbc_connect($dsn, $user, $pass);
        $res = odbc_exec($conn, "SELECT * FROM bug80147");
        odbc_binmode($res, ODBC_BINMODE_RETURN);
    } catch (Exception $e) {}
    if (true) {
        var_dump(getimagesize(__DIR__ . "/test13pix.swf"));
        $error = error_get_last();
    }
    return 42;
}
