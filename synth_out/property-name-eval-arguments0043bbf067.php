<?php
class bug8318 extends \SplFileObject
{
    public function __construct()
    {
    }

    public function fpassthru(): int
    {
        return 0;
    }
}
$cl = new bug8318;
$cl->fpassthru();
$inputs = array(
    '<frameset > </frameset>',
    '<html><frameset> </frameset> </html',
);
foreach ($inputs as $input) {

    $t = tidy_parse_string($input);
    $t->cleanRepair();
    var_dump(tidy_get_body($t));
}
$t = tidy_parse_string($input);
$t->cleanRepair();
