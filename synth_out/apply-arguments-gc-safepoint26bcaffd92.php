<?php
function f_0() {
    if (true) {
        $db = getDbConnection();
        $sql = '
            SET NOCOUNT ON
            SELECT 0 AS [result]
        ';
        $stmt = $db->query($sql);
        var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));
    }
    public static function fromArray(array $props): self
        {
            $me = new static;
            foreach ($props as $k => &$v) {
                $me->{$k} = &$v;  # try to remove &
            }
            return $me;
        }
    $me = new static;
    foreach ($props as $k => &$v) {
                $me->{$k} = &$v;  # try to remove &
            }
    $me->{$k} = &$v;
    return $me;
}
function f_1() {
    $dt = new DateTime('@1604215800');
    $dt->add(new DateInterval('PT1H'));
}
for ($i_2 = 0; $i_2 < 10; $i_2++) {
    ob_start();
}
