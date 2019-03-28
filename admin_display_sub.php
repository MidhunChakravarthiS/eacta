<?php
$data = array();

/* Initialize webservice with your WSDL */
$client = new SoapClient("http://ec2-3-92-203-16.compute-1.amazonaws.com:3227/ws/eacta?wsdl");

$params = array("");

        $response = $client->__soapCall("loadInfo", array($params));
		$retVal = $response->return;

$retVal = json_decode($retVal, true);

$data = array();
$count = count($retVal);
for($i = 0; $i < $count; $i++){

	

    $data[]=array("place"=>$retVal[$i]['place'],
                  "spot"=>$retVal[$i]['spot'],
				  "gname"=>$retVal[$i]['gname'],
				  "gnumber"=>$retVal[$i]['gnumber'],
				  "itenary"=>$retVal[$i]['itenary'],
				  "price"=>$retVal[$i]['price']);
}
$data=array("data"=>$data);


print_r(json_encode($data));


exit();

?>
