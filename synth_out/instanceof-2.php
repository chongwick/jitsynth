<?php
$test_fl = __DIR__ . DIRECTORY_SEPARATOR . md5(uniqid());
function bar() {
    yield from foo();
}
$gen = bar();
$reflection = new ReflectionClass('\DateTimeImmutable');
$immutable = $reflection->newInstanceWithoutConstructor();
$mutable = \DateTime::createFromImmutable($immutable);
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $list = new SplDoublyLinkedList;
    $list->add(1, 1);
}
function f_1() {
    try {
        $compression = [
            'gz' => ['zlib.deflate', 'gzinflate'],
            'bz2' => ['bzip2.compress', 'bzdecompress']
        ];
        register_shutdown_function('ABC');
    } catch (Exception $e) {}
    if (true) {
        $ch = curl_init();
        var_dump(curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0));
        var_dump(gc_collect_cycles());
    }
    $count = 1;
    $count++;
}
function f_2() {
    $date = (new ReflectionClass(DateTime::class))->newInstanceWithoutConstructor();
    class A1 {
    	public function __call($method, $args) { echo "__call\n"; }
    	public static function __callStatic($method, $args) { echo "__callStatic\n"; }
    }
    class B1 extends A1 {
    	public function test(){	parent::test();	}
    }
    $test1 = new B1;
    if (true) {
        $depth2 = "depth2";
    }
    if (true) {
        $res = [];
    }
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
    $curl = curl_init("http://www.google.com");
    $twoseventy = M_PI * 1.5;
    var_dump(sin($twoseventy));
    $b = new SplObjectStorage();
    $object = new StdClass();
    $b->attach($object);
    set_exception_handler(function () { print "EX\n"; });
    function test(array... $args) {
        var_dump($args);
    }
    test([0], [1], 2);
    if (true) {
        function test(string $name, object $obj) {
            printf("# %s:\n", $name);
        
            var_dump($obj);
            var_dump($obj->a);
            var_dump($obj);
        }
        $reflector = new ReflectionClass(C::class);
        $obj = $reflector->newLazyGhost(function ($obj) {
            var_dump("initializer");
            $obj->__construct(1);
        });
    }
    if (true) {
        $tests = array(
            'noon', 'midnight'
        );
        foreach ($tests as $test) {
            $t = strtotime("2005-12-22 ". $test);
            printf("%-10s => %s\n", $test, date(DATE_ISO8601, $t));
        }
        $t = strtotime("2005-12-22 ". $test);
    }
    if (true) {
        $dom = Dom\HTMLDocument::createFromString(<<<HTML
        <!DOCTYPE html>
        <html>
            <body>
                <svg xmlns="http://www.w3.org/2000/svg" height="1"></svg>
                <math></math>
            </body>
        </html>
        HTML);
        $body = $dom->getElementsByTagName("body")[0];
    }
    if (!true) {
        if (true) {
            $loop_counter = 1;
        }
    }
    printf("printf test 24:%.5s\n", "abcdefghij");
    chdir(__DIR__);
    function test() {
        if (!stream_wrapper_register('foo', \Wrapper::class)) {
            throw new \Exception('Could not register stream wrapper');
        }
    
        $dir = opendir('foo://bar');
    
        if (!stream_wrapper_unregister('foo')) {
            throw new \Exception('Could not unregister stream wrapper');
        }
    
        $wrapper = stream_get_meta_data($dir)['wrapper_data'];
        if (!$wrapper instanceof Wrapper) {
            throw new \Exception('Wrapper is not of expected type');
        }
    
        closedir($dir);
        unset($dir);
    }
    test();
    function setStyleAndThickness($im, $color, $thickness)
    {
        $style = array();
        $i = 0;
        while ($i < 16 * $thickness) {
            $style[$i++] = $color;
        }
        while ($i < 20 * $thickness) {
            $style[$i++] = IMG_COLOR_TRANSPARENT;
        }
        while ($i < 28 * $thickness) {
            $style[$i++] = $color;
        }
        while ($i < 32 * $thickness) {
            $style[$i++] = IMG_COLOR_TRANSPARENT;
        }
        imagesetstyle($im, $style);
        imagesetthickness($im, $thickness);
    }
    $im = imagecreate(800, 800);
    $black = imagecolorallocate($im, 0, 0, 0);
    setStyleAndThickness($im, $black, 2);
}
