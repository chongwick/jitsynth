<?php
function f_0() {
    try {
        var_dump(intlcal_get_error_message(null));
    } catch (Exception $e) {}
    if (true) {
        $db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, false);
    }
}
(function() {
	try {
		foo(); // Error
	} catch (\Exception $e) {
		var_dump($e);
	} catch (\ParseError $e) {
		var_dump($e);
	}
})();
