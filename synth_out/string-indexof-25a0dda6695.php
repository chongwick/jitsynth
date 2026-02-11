<?php
$x = new SoapClient(__DIR__."/bug27722.wsdl");
$filename = __DIR__ . '/bug77432.phar';
$phar = new Phar($filename);
$phar->stopBuffering();
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        $date = '7.8.2010';
        $unixtime = strtotime($date);
        $date = new DateTime('@'.$unixtime);
        $iterator = 1;
        do {
            $arr = array('http'=>
                                    array(
                                            'follow_location'=>0,
                                    )
                            );
            register_shutdown_function('ABC');
            $var = -PHP_INT_MAX - 1;
            range($var,1,$var);
        } while (false);
        $im = imagecreate(800, 800);
        imageline($im, 650, 150, 650, 650, IMG_COLOR_STYLED);
    }
}
