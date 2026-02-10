<?php
$date1 = DateTime::createFromFormat("!D d M Y", "Fri 19 November 2011");
$date2 = new DateTime("Fri 19 November 2011");
var_dump($date1->format('Y-m-d') == $date2->format('Y-m-d'));
if (true) {
    #[\AllowDynamicProperties]
    class C {
        public $b;
        public function __construct() {
            $this->a = new Canary();
        }
    }
    $obj = new C();
    extract($GLOBALS, EXTR_REFS);
    class di extends DateInterval {
        public $unit = 1;
    }
    $I = new di('P10D');
    print_r($I);
}
printf("[007] [%d] %s\n", $stmt->errno, $stmt->error);
