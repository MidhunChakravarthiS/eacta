<?php
ini_set("display_errors","0");

/* Initialize webservice with your WSDL */
$client = new SoapClient("http://ec2-3-92-203-16.compute-1.amazonaws.com:3227/ws/eacta?wsdl");

$params = array("arg0"=>"midhun");

$response = $client->__soapCall("testPhp", array($params));

var_dump($response);
print_r($response->return);

?>