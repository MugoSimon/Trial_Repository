<?php include 'database/database.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mugo Simon">

    <title>&Hopf;ospital.</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-warning">
      <a class="navbar-brand" href="login.php">
    <img src="image/logo.jfif" width="30" height="30" class="d-inline-block align-top" alt="logo">
    	&Sscr;&Tscr;' &Mfr;&ifr;&cfr;&hfr;&afr;&efr;&lfr;
     </a>
     <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto" id="navbar">
      
      <li class="nav-item" style="float: left;">
      	<a class="btn btn-outline-secondary" style="margin: 0px 15px;" href="doctor.php" role="button"><i>Doctor Previews</i></a>
      </li>
      <li class="nav-item" style="float: left;">
        <a class="btn btn-outline-secondary" style="margin: 0px 15px;" href="about_us.php" role="button"><i>About Us</i></a>
      </li>
 		<li class="nav-item" style="float: left;">
 			<a class="btn btn-outline-success" style="margin: 0px 15px; float: left;" href="login.php" role="button"><i>Sign in</i></a>
      </li>
      <li>
    </ul>
    <span class="navbar-text">
      <b> <em>We treat and The Almighty heals</em></b>
    </span>
  </div>
    </nav>

    <main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron" id="hello">
        <div class="container">
          <h1 class="display-3"><i> Welcome to St Michael's</h1>
          <p><b>The <i style="color: blue; text-decoration-style: dashed;">Hospital</i> of intense natural care and medication proffesionals all in one aim to make citizens' health their goal in life and saving a life at a time...</b></p>
          <p><a class="btn btn-primary btn-lg" href="login.php" role="button">Learn more &raquo;</a></p>
        </div>
      </div>

      <div class="container">
        <!-- Example row of columns -->
        <div class="row">
        	<div class="col-md-4">
            <h2>Health</h2>
            <p>Your doctor can tell your nurse to write down a prescription for you. Then your nurse can send the prescription to the pharmacy.</p>
            <p><a class="btn btn-secondary" href="login.php" role="button">View details &raquo;</a></p>
          </div>
         <div class="col-md-4">
            <h2>Medics </h2>
            <p>The hospital pharmacist reads and fills the prescription. The medicine is labeled with the type of medicine and your name, and then sent to your nurse...</p>
            <p><a class="btn btn-secondary" href="login.php" role="button">View details &raquo;</a></p>
          </div>
          <div class="col-md-4">
            <h2>Sample</h2>
            <video controls src="videos/visit.mp4" width="450" height="300">
            	This broswer doesn't support videos
            </video>
            <p>Professionally Doctor visit</p>
            <p><a class="btn btn-secondary" href="login.php" role="button">View details &raquo;</a></p>
          </div>
          
          
        </div>

        <hr>

      </div> <!-- /container -->

    </main>

    <footer class="container">
    	<section class="bbi-page-section bbi-engagement-footer bg-color white">
				<div class="container-fluid">
			    <h1 class="bbi-engagement-title">Why Support ST' Michaels</h1>
    		<div class="bbi-engagement-text-media">
			<div class="bbi-wrap bbi-page-videos">

		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-7 bbi-engage-media single-video">
			<img src="image/calldoc.jpg" width="600" height="300" />
			</div>

		<div class="col-sm-12 col-md-12 col-lg-5 bbi-engage-text">
			<div class="bbi-text-wrap">
					<h3>Patient Visits Last Year</h3>
           <p style="text-align: left;">
           	39,803   Cancer Center<br />
            38,819   Emergency Department<br />
            2,702     Newborns Delivered<br />
            8,068     Operating Room Procedures<br />
            45,997   Physical Medicine &amp; Rehabilitation
           </p>
			<p>
				<a class="btn btn-primary" href="login.php">SUPPORT A HEALTHY FUTURE</a>
			</p>
			</div>
			</div>
		</div>
	</div>
</div>

    	</div>
	</section>	
    		
      <p>&copy; Company 2017-2018</p>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="js/vendor/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>
