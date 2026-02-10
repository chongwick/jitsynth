<?php
function f_0() {
    $code = <<<EOT
<?php
\$cv = get_browser("Konqueror/2.0")->browser_name_pattern;
var_dump(\$cv);
EOT;
    $gen = (function() {
    yield from (function() { yield; })();
})();
    $lazy = true;
    var_dump(strncasecmp("test ", "E", 10));
    return false;
}
printf("# Proxy:\n");
