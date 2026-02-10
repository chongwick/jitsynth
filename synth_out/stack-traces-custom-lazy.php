<?php
function f_0() {
    $context = stream_context_create(['http' => ['method' => 'MKCALENDAR']]);
    try {
        $a = new Test();
        $a->TestFunc();
        class Test{
        	public $value = 11.3;
        
        	public function TestFunc() {
        		$this->value -= 10;
        	}
        };
        $im = imagecreatetruecolor(1, 1);
        imagescale($im, 1, 1, -10);
    } catch (Exception $e) {}
    if (true) {
        $references = array();
        $idx = 0;
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
        $references[$idx]['id_copy_mod']= $rows[$i]['id'] + 0;
    }
    class A
    {
        use T1;
    }
    class B extends A
    {
        use T2;
    }
    $b = new B();
    printf("[009] Cannot run SELECT, [%d] %s\n",
                    mysqli_errno($link), mysqli_error($link));
    $a = new Test();
    class Test{
    	public $value = 11.3;
    
    	public function TestFunc() {
    		$this->value -= 10;
    	}
    };
}
$sert = "file://" . __DIR__ . "/san-cert.pem";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_ENCRYPT, array($cpca)));
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
$d0 = $prefix . "ソフト";
$d1 =
dir($d1);

;
