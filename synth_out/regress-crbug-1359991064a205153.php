<?php
function new_closure_gen() {
    return function() {
        static $foo = 0;
        yield ++$foo;
    };
}
$test2=array(
   'a1_teasermenu' => array(
        'downloadcounter' => 2777,
        'versions' => array(
            '0.1.0' => array (
                'title' => 'A1 Teasermenu',
                'description' => 'Displays a teaser for advanced subpages or a selection of advanced pages',
                'state' => 'stable',
                'reviewstate' => 0,
                'category' => 'plugin',
                'downloadcounter' => 2787,
                'lastuploaddate' => 1088427240,
                'dependencies' => array (
                      'depends' => array(
                              'typo3' =>'',
                              'php' =>'',
                              'cms' => ''
                       ),
                      'conflicts' => array('' =>'')
                ),
                'authorname' => 'Mirko Balluff',
                'authoremail' => 'balluff@amt1.de',
                'ownerusername' => 'amt1',
                't3xfilemd5' => '3a4ec198b6ea8d0bc2d69d9b7400398f',
            )
        )
    )
);
$test=array();
$test[]=$test2;
$heredoc = <<<EOT
Hello world
EOT;
class C_0 {
    public function m_1() {
        $bert = "file://" . __DIR__ . "/bug41033.pem";
        $cpca = __DIR__ . "/san-cert.pem";
        var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_ANY, array($cpca)));
        if (true) {
            $closure1 = new_closure_gen();
            print_r($str_instead);
        }
    }
}
ob_clean();
