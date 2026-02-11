<?php
class A
{
    use T1;
}
class B extends A
{
    use T2;
}
function test(string $input) {
    var_dump(filter_var($input, FILTER_VALIDATE_URL));
}
$meta = mysqli_fetch_fields($res);
$meta = $meta[0];
$im = imagecreate(800, 800);
imageline($im, 650, 650, 150, 150, IMG_COLOR_STYLED);
$db = getDbConnection();
$sql = '
    SET NOCOUNT ON
    SELECT 0 AS [result]
';
$stmt = $db->query($sql);
var_dump($stmt->nextRowset());
$cert = "file://" . __DIR__ . "/cert.crt";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_ANY, array($cpca), $utfl));
$html = <<<HTML
<div id="test"><span>hi there</span></div>
HTML;
$references = array();
$idx = 0;
$rows = array();
for ($i = 0; $i < 2; $i++) {
        $rows[$i] = mysqli_fetch_assoc($res);
        $references[$idx]['row_ref'] 		= &$rows[$i];
        $references[$idx]['row_copy'] 	= $rows[$i];
        $references[$idx]['id_ref'] 		= &$rows[$i]['id'];
        $references[$idx]['id_copy']		= $rows[$i]['id'];
        /* enforce separation */
        $references[$idx]['id_copy_mod']= $rows[$i]['id'] + 0;
    }
$rows[$i] = mysqli_fetch_assoc($res);
$references[$idx]['id_ref'] 		= &$rows[$i]['id'];
$b = new B();
$b->aa();
$input = fopen(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370.tar', 'r');
fclose($input);
clearstatcache();
$ok = true;
test("http://te[st@2001:db8:3333:4444:5555:6666:1.2.3.4]");
