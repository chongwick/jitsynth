<?php
$dateinterval = (new ReflectionClass(DateInterval::class))->newInstanceWithoutConstructor();
class TestSoapClient extends SoapClient {
  private $server;

  function __construct($wsdl) {
    parent::__construct($wsdl);
    $this->server = new SoapServer($wsdl);
    $this->server->addFunction('Test');
  }

  function __doRequest($request, $location, $action, $version, $one_way = 0): string {
    ob_start();
    $this->server->handle($request);
    $response = ob_get_contents();
    ob_end_clean();
    return $response;
  }
}
$client = new TestSoapClient(__DIR__.'/bug38004.wsdl');
$strA = 'test &amp; test';
$strB = 'test & test';
$res = $client->Test(array('strA'=>$strA, 'strB'=>$strB));
class C_0 {
    public function m_1() {
        function test(object $obj) {
                $obj->a = 1;
            }
        $reflector = new ReflectionClass(C::class);
        $obj = $reflector->newLazyGhost(function ($obj) {
                var_dump("initializer");
                $obj->__construct();
            });
        $reflector->getMethod('test')->invoke($obj, $obj);
        if (true) {
            $datePre = DateTime::createFromFormat("!D d M Y", "Fri 17 may 2011");
            $various_arrays = array (
              array(5 => 55,  66, 22, 33, 11),
              array ("a" => "orange",  "banana", "c" => "apple"),
              array(1, 2, 3, 4, 5, 6),
              array("first", 5 => "second", "third"),
              array(1, 1, 8 => 1,  4 => 1, 19, 3 => 13),
              array('bar' => 'baz', "foo" => 1),
              array('a'=>1,'b'=>array('e'=>2,'f'=>3),'c'=>array('g'=>4),'d'=>5),
            );
            foreach ($various_arrays as $array) {
              echo "\n-- Iteration $count --\n";
            
              echo "- With default sort_flag -\n";
              $temp_array = $array;
              var_dump(asort($temp_array) );
              var_dump($temp_array);
            
              echo "- Sort_flag = SORT_REGULAR -\n";
              $temp_array = $array;
              var_dump(asort($temp_array, SORT_REGULAR) );
              var_dump($temp_array);
              $count++;
            }
            $temp_array = $array;
            var_dump($temp_array);
        }
    }
}
$options = stream_context_get_options($this->context);
var_dump($options['dummy']['foo']);
