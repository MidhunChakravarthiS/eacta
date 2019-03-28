<?php
session_start();
if(empty($_SESSION['email']))
{
header('Location: ./index.php'); /* Redirect browser */
exit();
}
else{
  $uname = $_SESSION['email'];
}
?>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

  </head>

<body>
  <header>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="navigation" style="margin-bottom: 10px">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
            <div class="navbar-brand row">
              <a href="dashboard.php">
              <h1>
              Embrassing All Continental <br>
              Tourist Assistance
              </h1>
              </a>
            </div>
          </div>

          <div class="navbar-collapse collapse">
            <div class="menu">
              <ul class="nav nav-tabs" role="tablist">
                <li role="presentation"><a href="admin_dashboard.php" class="active">Add Informations</a></li>
                <li role="presentation"><a href="admin_display.php">Display Informations</a></li>
                <li role="presentation"><a href="./logOut.php">Logout</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>

<div class="container">
<div id="message" style="margin-top:10%;"></div>
  <div class="form-group" style="margin-top:5%;">
        <form id="addplace" class="form-horizontal">

          <div class="form-group">
            <label class="control-label col-sm-2" for="place">Place Name:</label>
              <div class="col-sm-10">
                <input name="place" class="form-control" id="place" placeholder="Enter place">
                <!-- <input name="placename[]" value="Goa" class="form-control" id="place" placeholder="Enter place"> -->
              </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-2" for="spot">Spots:</label>
              <div class="col-sm-10"> 
                <input name="spot" class="form-control" id="spot" placeholder="Spot Name">
              </div>
          </div>
          <div class="form-group"> 
            <div class="col-sm-offset-2 col-sm-10">
                <button id="spotBut" name="spotBut" class="btn btn-info" type="button" style="border-radius: 50%; color: white !important; margin-top: 2px !important;">+</button>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-2" for="gname">Guide Name</label>
              <div class="col-sm-10"> 
                <input name="gname" class="form-control" id="gname" placeholder="Guide Name">
              </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="gname">Guide Number</label>
              <div class="col-sm-10"> 
                <input name="gnumber" class="form-control" id="gnumber" placeholder="Guide Number">
              </div>
          </div>
          <div class="form-group"> 
            <div class="col-sm-offset-2 col-sm-10">
                <button id="guideBut" name="guideBut" class="btn btn-info" type="button" style="border-radius: 50%; color: white !important; margin-top: 2px !important;">+</button>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-2" for="pdf">Itenary <i>(PDF only)</i></label>
              <div class="col-sm-10"> 
                <input name="pdf[]" class="form-control" id="pdf" type="file" accept=".pdf" multiple="multiple" />
              </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="pdfCost">Package Cost<i>(Separated by ,)</i></label>
              <div class="col-sm-10"> 
                <input name="pdfCost" class="form-control" id="pdfCost" placeholder="Enter Package Cost">
              </div>
          </div>

          <div class="form-group"> 
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-default">Submit</button>
            </div>
          </div>
        </form>
  </div>
</div>
  

<div id="section-4">
  <!-- Footer -->
<footer class="page-footer font-small blue pt-4" style="font-weight: bold;">

<!-- Footer Links -->
<div class="container-fluid text-center text-md-left">

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-md-6 mt-md-0 mt-3">

      <!-- Content -->
      <h5 class="text-uppercase" style="color: green; font-weight: bolder;">EACTA</h5>
      <p>HI am Midhun Chakravarthi, your tour director for your next tour. I have been working as a guide for the last five years with americans, australians and spanish groups around the most important places in World. This blog is for me, but sharing it with you, it is also for you, so you can find useful information for your next tour. This is my wish.</p>

    </div>
    <!-- Grid column -->

    <hr class="clearfix w-100 d-md-none pb-3">

    <!-- Grid column -->
    <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase" style="color: green; font-weight: bolder;">Social Media</h5>

        <ul class="list-unstyled">
          <li>
            <a href="https://www.facebook.com/people/Midhun-Chakravarthi-S/100009864364695" target="_blank">Facebook</a>
          </li>
          <li>
            <a href="https://twitter.com/Midchak97" target="_blank">Twitter</a>
          </li>
          <li>
            <a href="https://www.linkedin.com/in/midhun-s/" target="_blank">LinkedIn</a>
          </li>
          <li>
            <a href="https://www.instagram.com/midchak97/?hl=en" target="_blank">Instagram</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase" style="color: green; font-weight: bolder;">Address</h5>

        <p>
            Coimbatore,
            Tamilnadu.
        </p>
      </div>
      <!-- Grid column -->

  </div>
  <!-- Grid row -->

</div>
<!-- Footer Links -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3">© 2019 Copyright:
  <a href="./dashboard.php"> EACTA</a>
</div>
<!-- Copyright -->

</footer>
<!-- Footer -->
</div>



  <script src="js/jquery.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/functions.js"></script>
  <script type="text/javascript">
        var spotArr = [];
        var gName = [];
        var gNumber = [];
        $('#spotBut').on('click', function() {
            spotArr.push($('#spot').val());
            $('#spot').val("");
        });

        $('#guideBut').on('click', function() {
            gName.push($('#gname').val());
            gNumber.push($('#gnumber').val());
            $('#gname').val("");
            $('#gnumber').val("");
        });

        
        $('#addplace').on('submit', function(e) {
            e.preventDefault();
            var place = $('#place').val();
        
            var form=document.getElementById('addplace');
            var fdata=new FormData(form);
            fdata.append('spotArr', spotArr);
            fdata.append('gName', gName);
            fdata.append('gNumber', gNumber);

        $.ajax({
            type: "POST",
            url: "admin_dashboard_sub.php",
            data: fdata,
            contentType: false,
            cache: false,
            processData:false,
            success: function(result) {
                $("#message").html(result);
                return false;
            }
        });


      });


    
  </script>
