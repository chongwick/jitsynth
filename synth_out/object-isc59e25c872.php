<?php
function t2()
{
    ob_start("test");
    echo "Hello from t2 1 ";
        ob_flush();
        echo "Hello from t2 2 ";
        ob_end_flush();
}
$list = [];
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        if (true) {
            t2();
            $dom = Dom\HTMLDocument::createEmpty();
            dumpNodeList($dom->getElementsByTagName("foo:html"));
        }
        if (!true) {
            var_dump(new FooBar);
        }
    }
}
