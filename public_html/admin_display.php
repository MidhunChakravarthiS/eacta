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
    <link href="css/datatables.min.css" rel="stylesheet" />
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
                <li role="presentation"><a href="admin_dashboard.php">Add Informations</a></li>
                <li role="presentation"><a href="admin_display.php" class="active">Display Informations</a></li>
                <li role="presentation"><a href="./logOut.php">Logout</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <div class="container" style="padding-top: 12%;">
  <div class="panel panel-primary">
            <div class="panel-body">
             <div id="loading" style='display:none'><img src="images/loading.gif" /></div>
            <div class="row">
                <h2 class="text-center">Tourist Assistance</h2>
            </div>
  <div class="row">
  <table id="displayInfo" class="display cell-border" cellspacing="0" width="100%">
          <thead>
            <tr>
                <th>Place</th>
                <th>Spots</th>
                <th>Guide Name</th>
                <th>Guide Number</th>
                <th>itenary</th>
                <th>Price</th>
            </tr>
          </thead>
    </table>
        </div>
        </div>
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



<script src="js/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script type="text/javascript" src="js/datatables.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/functions.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
    $('#displayInfo').DataTable({
        "ajax": "admin_display_sub.php",
         "pageLength": 10,
         language: {
            sLoadingRecords : '<span style="width:100%;"><img src="images/loading.gif"></span>'
        },
        "columns": [
            { "data": "place" },
            { "data": "spot" },
            { "data": "gname" },
            { "data": "gnumber" },
            { 
              "data": "itenary",
              "render": function(data, type, full, meta){
              if(type === 'display'){
                   data = "<a href='" + data + "' target='_blank' style='color:blue'>" + data + "</a>";
              }

              return data;
              }
            },
            { "data": "price" }
        ],
        dom: 'lBfrtip'
    });      
} );
</script>
