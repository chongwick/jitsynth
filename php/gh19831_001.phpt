<?php

if (getenv('RT_COND')) {
    class Base {
    }
}

// Class is not linked
class Test extends Base {
	public int $layers = 1;

	public function getLayers(): int {
        // Prop info is not known, but res_addr is REG
		return $this->layers;
	}
}

$t = new Test();
$a = &$t->layers;
var_dump($t->getLayers());

?>
