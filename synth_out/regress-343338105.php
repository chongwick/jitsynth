<?php
function f_0() {
    static function comp_func_cr($a, $b) {
            if ($a->priv_member === $b->priv_member) return 0;
            return ($a->priv_member > $b->priv_member) ? 1 : -1;
        }
    return ($a->priv_member > $b->priv_member) ? 1 : -1;
}
$column_def = array('col1 CHAR(1)', 'col2 CHAR(2)','INDEX idx_col1_col2(col1, col2)');
$create = 'CREATE TABLE test(id INT, ';
foreach ($column_def as $v) {
        $create .= sprintf('%s, ', $v);
    }
$create .= sprintf('%s, ', $v);
$create = sprintf('%s)', substr($create, 0, -2));
$date = '7.8.2010';
$unixtime = strtotime($date);
$date1 = DateTime::createFromFormat("!D d M Y", "Sat 19 November 2011");
$date2 = new DateTime("Sat 19 November 2011");
var_dump($date1->format('Y-m-d') == $date2->format('Y-m-d'));
