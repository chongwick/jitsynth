<?php
function f_0() {
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        if (true) {
            $conn = odbc_connect($dsn, $user, $pass);
            odbc_exec($conn, "CREATE TABLE bug80147 (id INT, whatever VARBINARY(50))");
        }
        if (!true) {
            if (true) {
                stream_wrapper_register('dummy', DummyWrapper::class);
            }
            if (!true) {
                for ($i = 0; $i < 10; $i++) {
                    $zip = new ZipArchive();
                    if ($zip->open($filename, ZipArchive::OVERWRITE) !== true) {
                        exit("Unable to open the zip file");
                    }
                    $zip->addFromString("foo_{$i}.txt", 'foo bar foobar');
                    $zip->close();
                }
                $zip = new ZipArchive();
                $zip->addFromString("foo_{$i}.txt", 'foo bar foobar');
            }
        }
    }
    $db = MySQLPDOTest::factory();
    return $db;
}
$db = getDbConnection();
$sql = '
    SET NOCOUNT ON
    SELECT 0 AS [result]
';
$stmt = $db->query($sql);
$cfg = <<<EOT
[global]
error_log = {{FILE:LOG}}
[unconfined]
listen = {{ADDR}}
pm = static
pm.max_children = 1
catch_workers_output = yes
EOT;
$code = <<<EOT
<?php
echo 1;
EOT;
$tester = new FPM\Tester($cfg, $code);
$tester->request(connKeepAlive: true)->expectBody('1');
$filename =  __DIR__ . DIRECTORY_SEPARATOR . 'bug70752.txt';
var_dump(file_exists($filename));
$array = [
    [
    'superhero'=> 'superman',
    'nanana' => 'no nana'
    ],
    [
    'superhero'=> 'acuaman',
    'nanana' => 'no nana'
    ],

    ];
var_dump(array_column($array, 'superhero'));
$xml = '
<data id="1">
    <key>value</key>
</data>
';
$obj = simplexml_load_string($xml);
print_r(get_object_vars($obj));
