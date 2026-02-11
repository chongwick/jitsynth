<?php
class A
{
    public string $prop;
}
class base {
    private function show() {
        echo "base\n";
    }
    function test() {
        $this->show();
    }
}
$cfg['poolTemplate'] = <<<EOT
[%name%]
listen = {{ADDR[%name%]}}
user = foo
pm = ondemand
pm.max_children = 5
EOT;
$dir = opendir('foo://bar');
$wrapper = stream_get_meta_data($dir)['wrapper_data'];
$a = new A();
$offsets = array(20, 21, 22, 53, 54);
$f = __DIR__."/data/test.txt.gz";
$meta_res = $stmt->result_metadata();
$field = $meta_res->fetch_field();
$a = date_create("2009-01-01", null);
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $dom = Dom\HTMLDocument::createEmpty();
    dumpNodeList($dom->getElementsByTagName("foo:HTML"));
    $file_handle = fopen(__FILE__, "r");
    fclose($file_handle);
    $t = new base();
}
