<?php 
session_start();
ini_set("display_errors","1");

/* Initialize webservice with your WSDL */
$client = new SoapClient("http://ec2-3-92-203-16.compute-1.amazonaws.com:3227/ws/eacta?wsdl");


if ((isset($_POST['uname'])) && (isset($_POST['passwd'])))
{
    $uname = $_POST['uname'];
    $passwd = $_POST['passwd'];

        $params = array("arg0"=>"$uname",
                        "arg1"=>"$passwd");

        $response = $client->__soapCall("login", array($params));
        $retVal = $response->return;
         
            if($retVal == "Authenticated" && $uname != "admin@eacta.com")
            {
                $_SESSION['email'] = $uname;
                header('Location: ./dashboard.php');
                exit;
            }
            else if($retVal == "Authenticated" && $uname == "admin@eacta.com")
            {
                $_SESSION['email'] = $uname;
                header('Location: ./admin_dashboard.php');
                exit;
            }
            else
            {
                echo "Error in Authentication";
            }



} 
    
    
?>