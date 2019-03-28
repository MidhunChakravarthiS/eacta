<?php
$data = array();

/* Initialize webservice with your WSDL */
$client = new SoapClient("http://ec2-3-92-203-16.compute-1.amazonaws.com:3227/ws/eacta?wsdl");

$params = array("arg0"=>"midchak97@gmail.com");

        $response = $client->__soapCall("loadHistory", array($params));
		$retVal = $response->return;
		

$retVal = json_decode($retVal, true);

$data = array();
$count = count($retVal);
for($i = 0; $i < $count; $i++){
	$search = $retVal[$i]['Searchkey'];
	$datetime = explode(" ", $retVal[$i]['Datetime']);

    $data[]=array("date"=>$datetime['0'],
                  "time"=>$datetime['1'],
                  "searchVal"=>$search);
}
$data=array("data"=>$data);


print_r(json_encode($data));


exit();

?>