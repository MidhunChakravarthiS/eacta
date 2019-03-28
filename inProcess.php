<?php
session_start();

/* Initialize webservice with your WSDL */
$client = new SoapClient("http://ec2-3-92-203-16.compute-1.amazonaws.com:3227/ws/eacta?wsdl");

if(empty($_SESSION['email']))
{
header('Location: ./index.php'); /* Redirect browser */
exit();
}
else{
  $uname = $_SESSION['email'];
}

?>

<?php
    require_once './head.php';
?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
}
</style>

<div class="container" style="margin-top:7%;">



<?php
    //var_dump($uname);
    if(isset($_REQUEST['place']))
    {
        $place=$_REQUEST['place'];
        $params = array("arg0" => "$uname",
                        "arg1" => "$place");
        $response = $client->__soapCall("searchInsert", array($params));
        $retVal = $response->return;

        if($retVal == "Success")
        {

        }
        else
        {
            echo "Error connecting to the server";
        }


        $params1 = array("arg0" => "$place");
        $response1 = $client->__soapCall("loadSearchVal", array($params1));
        $response1 = $response1->return;

        $resp = json_decode($response1, true);

        $resCount = count($resp);


        $spotArr = array();
        $itr = 0;
        for($i = 0; $i < $resCount; $i++)
        {
            if(!in_array($resp[$i]['spot'], $spotArr))
            {
                $spotArr[$itr] =  $resp[$i]['spot'];
                $itr = $itr + 1;
            }
        }

        
        $gnameArr = array();
        $itr = 0;
        for($i = 0; $i < $resCount; $i++)
        {
            if(!in_array($resp[$i]['gname'], $gnameArr))
            {
                $gnameArr[$itr] =  $resp[$i]['gname'];
                $itr = $itr + 1;
            }
        }


        $gnumberArr = array();
        $itr = 0;
        for($i = 0; $i < $resCount; $i++)
        {
            if(!in_array($resp[$i]['gnumber'], $gnumberArr))
            {
                $gnumberArr[$itr] =  $resp[$i]['gnumber'];
                $itr = $itr + 1;
            }
        }


        $itenaryArr = array();
        $itr = 0;
        for($i = 0; $i < $resCount; $i++)
        {
            if(!in_array($resp[$i]['itenary'], $itenaryArr))
            {
                $itenaryArr[$itr] =  $resp[$i]['itenary'];
                $itr = $itr + 1;
            }
        }


        $itenaryPrArr = array();
        $itr = 0;
        for($i = 0; $i < $resCount; $i++)
        {
            if(!in_array($resp[$i]['price'], $itenaryPrArr))
            {
                $itenaryPrArr[$itr] =  $resp[$i]['price'];
                $itr = $itr + 1;
            }
        }

        $spotCount = count($spotArr);
        $gnameCount = count($gnameArr);
        $gnumberCount = count($gnumberArr);
        $itenaryCount = count($itenaryArr);
        $priceCount = count($itenaryPrArr);

        echo '<div class="row">';
        for($i = 0; $i < $spotCount; $i++)
        {
        echo '<div class="col">';
        echo '<div class="card" style="width: 18rem;">';
        echo '<img class="card-img-top" src="images/book-travel.png">';
        echo '<div class="card-body">';
        echo '<h3 class="card-title">' . $spotArr[$i] . '</h3>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        }


        echo '</div>';
        
        echo '<br><br>';

        echo '<div class="row">';
        echo '<table style="width:100%">';
        echo '<tr>';
        echo '<th>Guide Name</th>';
        echo '<th>Guide Number</th>';
        echo '</tr>';
        for($i = 0; $i < $gnameCount; $i++)
        {
            echo '<tr>';
            echo '<td>' . $gnameArr[$i] . '</td>';
            echo '<td>' . $gnumberArr[$i] . '</td>';
            echo '</tr>';
        }
        echo '</table>';

        echo '</div>';

        echo '<br><br>';

        echo '<div class="row">';
        echo '<table style="width:100%; margin-top:2%; margin-bottom:2%;">';
        echo '<tr>';
        echo '<th>Itenary</th>';
        echo '<th>Itenary Price</th>';
        echo '</tr>';
        for($i = 0; $i < $itenaryCount; $i++)
        {
            echo '<tr>';
            echo '<td><a href="' . $itenaryArr[$i] . '" target="_blank"><img src="images/travel-cover.jpg" width="80" height="100"></a></td>';
            echo '<td>' . $itenaryPrArr[$i] . '</td>';
            echo '</tr>';
        }
        echo '</table>';

        echo '</div>';

        
        
    }
    else
    {

    }

?>

</div>


<?php
    include './footer.php';
?>