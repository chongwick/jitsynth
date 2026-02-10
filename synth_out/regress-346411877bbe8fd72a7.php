<?php
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $object = new StdClass();
    $reflection = new ReflectionClass('\DateTimeImmutable');
    $immutable = $reflection->newInstanceWithoutConstructor();
    $mutable = \DateTime::createFromInterface($immutable);
    function f_1() {
        setlocale(LC_ALL, "C");
        $dt = new DateTime('@1604219400');
    }
    $tmpFileIn = tempnam(sys_get_temp_dir(), 'test');
    function t3()
    {
        ob_start("test");
            echo "Hello from t3 1 ";
            ob_clean();
            echo "Hello from t3 2 ";
            ob_end_flush();
    }
    t3();
}
