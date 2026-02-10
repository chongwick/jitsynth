<?php
$im = ImageCreateTrueColor(10, 10);
$var = '';
$xml =<<<EOF
<xml>
<fieldset1>
</fieldset1>
<fieldset2>
<options>
</options>
</fieldset2>
</xml>
EOF;
$sxe = new SimpleXMLIterator($xml);
$conn = odbc_connect($dsn, $user, $pass);
$res = odbc_exec($conn, 'SELECT * FROM bug68087 ORDER BY ID ASC');
$id = odbc_result($res, "ID");
$input = fopen(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370.tar', 'r');
$i = 1;
$c = $i < 2;
$ar1 = array("row1" => 2, "row2" => 1);
var_dump(getopt("abcd"));
