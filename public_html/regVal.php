<?php 
session_start();
ini_set("display_errors","1");

/* Initialize webservice with your WSDL */
$client = new SoapClient("http://ec2-3-92-203-16.compute-1.amazonaws.com:3227/ws/eacta?wsdl");


if ((isset($_POST['name'])) && (isset($_POST['email'])) && (isset($_POST['ph'])) && (isset($_POST['job'])) && (isset($_POST['passwd'])))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $ph = $_POST['ph'];
    $job = $_POST['job'];
    $passwd = $_POST['passwd'];

        $params = array("arg0"=>$email,
                        "arg1"=>$name,
                        "arg2"=>$passwd,
                        "arg3"=>$ph,
                        "arg4"=>$job);

        $response = $client->__soapCall("register", array($params));
        $retVal = $response->return;
         
            if($retVal == "Inserted")
            {
            $_SESSION['email'] = $email;
            header("Location: dashboard.php");
            exit();
            }
            else
            {
                var_dump($retVal);
                echo "Error occured. Please try again.";
            }






} 
    
    
?>