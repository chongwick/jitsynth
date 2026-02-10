<?php
var_dump($shm_id2);
if (true) {
    $proc = @proc_open([$batch_file_path . chr($i), "\"&notepad.exe"], $descriptorspec, $pipes, null, null, array("bypass_shell" => true));
    var_dump($pdo->query('SELECT 1;')->fetchAll());
    date_default_timezone_set('UTC');
}
pg_query($conn, "CREATE TABLE $table (id INT, value FLOAT)");
