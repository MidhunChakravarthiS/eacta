<?php
/* Initialize webservice with your WSDL */
$client = new SoapClient("http://ec2-3-92-203-16.compute-1.amazonaws.com:3227/ws/eacta?wsdl");

         

if(isset($_REQUEST['place']) && isset($_REQUEST['spotArr']) && isset($_REQUEST['gName']) && isset($_REQUEST['gNumber']) && isset($_FILES['pdf']['name']) && isset($_REQUEST['pdfCost']))
{
/* echo "Success";
   var_dump($_REQUEST['place']);
   var_dump($_REQUEST['spotArr']);
   var_dump($_REQUEST['gName']);
   var_dump($_REQUEST['gNumber']);
   var_dump($_FILES['pdf']['name']);
   var_dump($_REQUEST['pdfCost']); */

   $spotArr = [];
   $gName = [];
   $gNumber = [];
   $pdfCost = [];
   $retVal = [];
   $place = $_REQUEST['place'];
   $spots = $_REQUEST['spotArr'];
   $gNames = $_REQUEST['gName'];
   $gNumbers = $_REQUEST['gNumber'];
   $pdfCosts = $_REQUEST['pdfCost'];

   $i = 0;

   while(strpos($spots, ',') !== false) {
        $spotsTemp = explode(",", $spots, 2);
        $spotArr[$i] = $spotsTemp[0];
        $spots = $spotsTemp[1];
        $spotsTemp = [];
        $i++;
  }
  $spotArr[$i] = $spots;
  //var_dump($spotArr);
  
  $i = 0;

  while(strpos($gNames, ',') !== false) {
    $gnameTemp = explode(",", $gNames, 2);
    $gName[$i] = $gnameTemp[0];
    $gNames = $gnameTemp[1];
    $gnameTemp = [];
    $i++;
}
$gName[$i] = $gNames;
//var_dump($gName);

$i = 0;

  while(strpos($gNumbers, ',') !== false) {
    $gnumberTemp = explode(",", $gNumbers, 2);
    $gNumber[$i] = $gnumberTemp[0];
    $gNumbers = $gnumberTemp[1];
    $gnumberTemp = [];
    $i++;
}
$gNumber[$i] = $gNumbers;
//var_dump($gNumber);

$i = 0;

//var_dump($_FILES['pdf']['name']);

while(strpos($pdfCosts, ',') !== false) {
    $pdfTemp = explode(",", $pdfCosts, 2);
    $pdfCost[$i] = $pdfTemp[0];
    $pdfCosts = $pdfTemp[1];
    $pdfTemp = [];
    $i++;
}
$pdfCost[$i] = $pdfCosts;
//var_dump($pdfCost);


$i = 0;

   for($i = 0; $i < count($spotArr); $i++)
   {
        $params = array("arg0" => "$place",
                        "arg1" => "$spotArr[$i]");
        $response = $client->__soapCall("tourSpotInsert", array($params));
        $retVal[] = $response->return;
   } 
   if(in_array('error', $retVal))
            echo "Error in Adding Spot Information";
      
   
   if (count($gName) == count($gNumber))
    {
        $retVal = [];
        for($i = 0; $i < count($gName); $i++)
        {
        $params = array("arg0" => "$place",
                        "arg1" => "$gName[$i]",
                        "arg2" => "$gNumber[$i]");
        $response = $client->__soapCall("tourGuideInsert", array($params));
        $retVal[] = $response->return;
        }
        if(in_array('error', $retVal))
            echo "Error in Adding Guide Information";
    }
    else
    {
    echo "Please specify Required Fields; Regds., Guide Details";
    }

    $total = count($_FILES['pdf']['name']);

    if($total == count($pdfCost))
    {
    for( $i=0 ; $i < $total ; $i++ ) {

        $tmpFilePath = $_FILES['pdf']['tmp_name'][$i];
        if ($tmpFilePath != ""){
          $newFilePath = "../itenary/";
          $file_parts =  pathinfo($_FILES['pdf']['name'][$i]);
          $file_path = $place.$i.'.'.$file_parts['extension'];
          if(move_uploaded_file($tmpFilePath, $newFilePath.$file_path)) {
                $file = $newFilePath.$file_path;
                $params = array("arg0" => "$place",
                                "arg1" => "$file",
                                "arg2" => "$pdfCost[$i]");
                $response = $client->__soapCall("tourItnryInsert", array($params));
                $retVal[] = $response->return;
      
          }
        }
    }
        if(in_array('error', $retVal))
            echo "Error in Adding Itenary Information";
    }
    else
    {
        echo "Please specify Fields Properly; Regds., Itenary";
    }


    echo "success";
}
else
{
    echo "Please specify Required Fields";
}

?>