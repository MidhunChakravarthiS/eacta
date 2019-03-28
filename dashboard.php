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
                <li role="presentation"><a href="dashboard.php" class="active">Home</a></li>
                <li role="presentation"><a href="dashboard.php#section-2" onclick="javascript:window.open('dashboard.php#section-2','_self')">About Us</a></li>
                <li role="presentation"><a href="dashboard.php#section-3" onclick="javascript:window.open('dashboard.php#section-3','_self')">Services</a></li>
                <li role="presentation"><a href="dashboard.php#section-4" onclick="javascript:window.open('dashboard.php#section-4','_self')">Contact</a></li>
                <li role="presentation"><a href="./hist.php">History</a></li>
                <li role="presentation"><a href="./logOut.php">Logout</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <div id="home">
    <p type="hidden">Home</p>
    <div class="slider">
      <div class="container">
        <div id="about-slider">
          <div id="carousel-slider" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators visible-xs">
              <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-slider" data-slide-to="1"></li>
              <li data-target="#carousel-slider" data-slide-to="2"></li>
              <li data-target="#carousel-slider" data-slide-to="3"></li>
              <li data-target="#carousel-slider" data-slide-to="4"></li>
              <li data-target="#carousel-slider" data-slide-to="5"></li>
            </ol>

            <div class="carousel-inner">
              <div class="item active">
                <img src="images/1.jpg" class="img-responsive" alt="" style="width:100%; height: 600px !important;">
                <div class="carousel-caption">
                <div class="form-group">
                  <form method="post" action="./inProcess.php">
                  <label for="place" style="color:aquamarine; font-size:20px; font-weight:900;">Search Place</label>
                  <input type="text" name="place" placeholder="Search Place"class="form-control" id="place" required>
                  <input type="submit" class="btn-btn-primary" style="padding:5px 15px; 
                                                                      background:chocolate; 
                                                                      border:0 none;
                                                                      cursor:pointer;
                                                                      -webkit-border-radius: 5px;
                                                                      border-radius: 5px; " value="Take me">
                  </form>
                 </div>
                </div>
              </div>
              <div class="item">
                <img src="images/2.jpg" class="img-responsive" alt="" style="width:100%; height: 600px !important;">
                <div class="carousel-caption">
                <div class="form-group">
                  <form method="post" action="./inProcess.php">
                  <label for="place" style="color:aquamarine; font-size:20px; font-weight:900;">Search Place</label>
                  <input type="text" name="place" placeholder="Search Place"class="form-control" id="place" required>
                  <input type="submit" class="btn-btn-primary" style="padding:5px 15px; 
                                                                      background:chocolate; 
                                                                      border:0 none;
                                                                      cursor:pointer;
                                                                      -webkit-border-radius: 5px;
                                                                      border-radius: 5px; " value="Take me">
                  </form>
                 </div>
                </div>
              </div>
              <div class="item">
                <img src="images/3.jpg" class="img-responsive" alt="" style="width:100%; height: 600px !important;">
                <div class="carousel-caption">
                <div class="form-group">
                  <form method="post" action="./inProcess.php">
                  <label for="place" style="color:aquamarine; font-size:20px; font-weight:900;">Search Place</label>
                  <input type="text" name="place" placeholder="Search Place"class="form-control" id="place" required>
                  <input type="submit" class="btn-btn-primary" style="padding:5px 15px; 
                                                                      background:chocolate; 
                                                                      border:0 none;
                                                                      cursor:pointer;
                                                                      -webkit-border-radius: 5px;
                                                                      border-radius: 5px; " value="Take me">
                  </form>
                 </div>
                </div>
              </div>
              <div class="item">
                <img src="images/4.jpg" class="img-responsive" alt="" style="width:100%; height: 600px !important;">
                <div class="carousel-caption">
                <div class="form-group">
                  <form method="post" action="./inProcess.php">
                  <label for="place" style="color:aquamarine; font-size:20px; font-weight:900;">Search Place</label>
                  <input type="text" name="place" placeholder="Search Place"class="form-control" id="place" required>
                  <input type="submit" class="btn-btn-primary" style="padding:5px 15px; 
                                                                      background:chocolate; 
                                                                      border:0 none;
                                                                      cursor:pointer;
                                                                      -webkit-border-radius: 5px;
                                                                      border-radius: 5px; " value="Take me">
                  </form>
                 </div>
                </div>
              </div>
              <div class="item">
                <img src="images/5.jpg" class="img-responsive" alt="" style="width:100%; height: 600px !important;">
                <div class="carousel-caption">
                <div class="form-group">
                  <form method="post" action="./inProcess.php">
                  <label for="place" style="color:aquamarine; font-size:20px; font-weight:900;">Search Place</label>
                  <input type="text" name="place" placeholder="Search Place"class="form-control" id="place" required>
                  <input type="submit" class="btn-btn-primary" style="padding:5px 15px; 
                                                                      background:chocolate; 
                                                                      border:0 none;
                                                                      cursor:pointer;
                                                                      -webkit-border-radius: 5px;
                                                                      border-radius: 5px; " value="Take me">
                  </form>
                 </div>
                </div>
              </div>
              <div class="item">
                <img src="images/6.jpg" class="img-responsive" alt="" style="width:100%; height: 600px !important;">
                <div class="carousel-caption">
                <div class="form-group">
                  <form method="post" action="./inProcess.php">
                  <label for="place" style="color:aquamarine; font-size:20px; font-weight:900;">Search Place</label>
                  <input type="text" name="place" placeholder="Search Place"class="form-control" id="place" required>
                  <input type="submit" class="btn-btn-primary" style="padding:5px 15px; 
                                                                      background:chocolate; 
                                                                      border:0 none;
                                                                      cursor:pointer;
                                                                      -webkit-border-radius: 5px;
                                                                      border-radius: 5px; " value="Take me">
                  </form>
                 </div>
                </div>
              </div>
            </div>

            <a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>

            <a class=" right carousel-control hidden-xs" href="#carousel-slider" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
          </div>
          <!--/#carousel-slider-->
        </div>
        <!--/#about-slider-->
      </div>
    </div>
  </div>

  <!--About-->
  <div class="about section" id="section-2">
	  <div class="about-head text-center">
	  <h3>About Us</h3>
	  <span></span><img src="images/star.png" alt=""><span></span>
	  </div>
	   <div class="container">		  
		 <div class="col-md-4 about-grids">
			 <h4><span class="icon1"></span>Our Vision</h4>
			 <p>Tourism which is ethical, fair and a positive experience for both travellers and the people and places they visit</p>
		 </div>
		 <div class="col-md-4 about-grids grid2">
			 <h4><span class="icon2"></span>Our Mission</h4>
			 <p>To ensure tourism always benefits local people by challenging bad practice and promoting better tourism</p>
		 </div>
		 <div class="col-md-4 about-grids">
			 <h4><span class="icon3"></span>Safety Information</h4>
			 <p>Vacation is a time to relax in safe surroundings.For emergency aid of any kind, call 911 from any phone... in your hotel, dial 9-911.</p>
             <div align="right"><a href="aboutus.php"><input type="button" value="Read More" name="sbmt" /></a></div> 
		 </div>
	 </div>
</div>

<div class="tour-guides section" id="section-3" >
	  <div class="tour-guides-head text-center">
		  <h3>Services</h3>
		  <span></span><img src="images/guide.png" alt=""><span></span>
		  <div class="container">
				<p>My Tour guides are expensive, so first decide what you want to do, whether it's a general tour of a city, a day of hiking, or visiting remote villages in a third-world country. Have a ball-park time allotment in mind, whether it's a half-day, a full-day, or a multi-day experience. Once you have chosen a guide, you'll probably refine your ideas based upon the guide's knowledge.</p>
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
