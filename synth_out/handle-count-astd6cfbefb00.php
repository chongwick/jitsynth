<?php
$lazy = true;
$reflection = new ReflectionClass('\DateTime');
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    class Canary {
        public function __destruct() {
            var_dump(__METHOD__);
        }
    }
    $this->a = new Canary();
}
