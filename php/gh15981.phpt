<?php

namespace NS { // Namespace is important to reproduce the issue
    class Tester {
        static public function findExecutable(): string {
            return dirname(__DIR__);
        }
    }
}

namespace {
    var_dump(NS\Tester::findExecutable());
}

?>
--EXPECTF--
string(%d) "%s"
