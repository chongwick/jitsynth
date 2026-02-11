<?php
$db = getDbConnection();
$sql = '
    SET NOCOUNT ON
    SELECT 0 AS [result]
';
$stmt = $db->query($sql);
var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));
function f_0() {
    $reflector = new ReflectionClass(C::class);
}
$r = new Phar(__DIR__ . "/bug69279.phar.zip");
$r->extractTo(__DIR__, NULL, TRUE);
(function() {
	try {
		foo(); // Error
	} catch (\Exception $e) {
		var_dump($e);
	} finally {
		print "handle first\n";
		return "ok";
	}
})();
call_user_func("static::ok");
