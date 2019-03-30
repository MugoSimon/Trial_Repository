<?php session_start(); ?>
<?php if(!isset($_SESSION['username'])): ?>
<?php header("Location: index.php?content=news&doctor=preview"); ?>
<?php else: ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mugo Simon">
    
    <title>St Michael's Hospital</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <script src="js/jquery/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Custom styles for this template -->
    <!-- <link href="css/carousel.css" rel="stylesheet"> -->
    <link rel="stylesheet" type="text/css" href="css/all.min.css">
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <a class="navbar-brand" href="login.php">
          <img src="image/logo.jfif" width="30" height="30" class="d-inline-block align-top" alt="logo">
          &Sscr;&Tscr;' &Mfr;&ifr;&cfr;&hfr;&afr;&efr;&lfr;
        </a>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto" id="navbar">
            
            <li class="nav-item">
              <a class="btn btn-outline-secondary" style="margin: 0px 15px;" href="news.php" role="button"><i>News & Events</i></a>
            </li>
            <li>
              <li class="nav-item">
                <a class="btn btn-outline-secondary" style="margin: 0px 15px;" href="medics/life.php" role="button"><i>Parental Guide</i></a>
              </li>
            </li>
            <li>
              <a class="btn btn-outline-secondary" style="margin: 0px 15px;" href="doctor.php" role="button"><i>Doctor Previews</i></a>
            </li>
            <li class="nav-item">
              <a class="btn btn-outline-secondary" style="margin: 0px 15px;" href="about_us.php" role="button"><i>About Us</i></a>
            </li>
            <li class="nav-item">
              <a class="btn btn-outline-danger" style="margin: 0px 15px;" href="logout.php" role="button"><i>Sign out</i></a>
            </li>
            <li>
            </ul>
            <span class="navbar-text">
              <b> <em>We treat and The Almighty heals</em></b>
            </span>
          </div>
        </nav>
      </header>
      <main role="main">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="first-slide" src="image/scan.jpg" alt="First slide" height="500" width="1400">
              <div class="container">
                <div class="carousel-caption text-left">
                  <h1 style="color: white;">We do know what you are experiencing...</h1>
                  <p style="color: white;"> Healing in a matter of time, but it is sometimes also a matter of opportunity. </p>
                  <!-- <p><a class="btn btn-lg btn-primary" href="register.php" role="button">Become a member too</a></p> -->
                </div>
              </div>
            </div>
            <div class="carousel-item" id="image1">
              <img class="second-slide" src="image/surgery.jpg" alt="Second slide" height="500" width="1400">
              <div class="container">
                <div class="carousel-caption">
                  <h1 style="color: red;"> We treat....God heals.</h1>
                  <p style="color: red;">This hospital, like every other, is a hole in the universe through which holiness issues in blasts. It blows both ways, in and out of time.</p>
                  <!-- <p><a class="btn btn-lg btn-primary" href="register.php" role="button">Sign up</a></p> -->
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <img class="third-slide" src="image/naas.jpg" alt="Third slide" height="500" width="1400">
              <div class="container">
                <div class="carousel-caption text-right">
                  <h1 style="color: blue;">Come for Quality</h1>
                  <p style="color: blue;">Great hospitals do two things. They look after patients, and they teach young doctors. We look after clients, and we teach young advertising people.</p>
                  <!-- <p><a class="btn btn-lg btn-primary" href="image" role="button">Browse gallery</a></p> -->
                </div>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <!-- Marketing messaging and featurettes
        ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->
        <div class="container marketing">
          <!-- Three columns of text below the carousel -->
          <div class="row">
            <div class="col-lg-4">
              <img class="rounded-circle" src="image/drugs.jpg" alt="Generic placeholder image" width="140" height="140">
              <h2>Medical</h2>
              <p>Your nurse and the rest of your health care team monitor (watch) you to see how you respond to the medicine. They watch to make sure the medicine is working. They also look for side effects the medicine could cause.</p>
              <p><a class="btn btn-secondary" href="medics/medics.php" role="button">View details &raquo;</a></p>
              </div><!-- /.col-lg-4 -->
              <div class="col-lg-4">
                <img class="rounded-circle" src="image/heart.jpg" alt="Generic placeholder image" width="140" height="140">
                <h2>Life</h2>
                <p>Your doctor, nurse, and pharmacist will check to make sure any new medicines you receive do not cause a bad reaction with other medicines you are already taking</p>
                <p><a class="btn btn-secondary" href="medics/life.php" role="button">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                  <img class="rounded-circle" src="image/drop.jpg" alt="Generic placeholder image" width="140" height="140">
                  <h2>The Future</h2>
                  <p>All hospitals have a process in place to make sure you get the right medicines. A mistake could cause a problem for you...</p>
                  <p><a class="btn btn-secondary" href="medics/medics.php" role="button">View details &raquo;</a></p>
                  </div><!-- /.col-lg-4 -->
                  </div><!-- /.row -->
                  <!-- START THE FEATURETTES -->
                  <hr class="featurette-divider">
                  <div class="row featurette">
                    <div class="col-md-7">
                      <h2 class="featurette-heading">Believing is seeing... <span class="text-muted">Visit us.</span></h2>
                      <p class="lead">Our donors are visionary. They take an entrepreneurial view and often see needs where others do not. They embrace the hospital as a partner in philanthropy and play a vital role in the hospital’s success. Because of donor support,St' Michaels has invested in clinical innovation, superb teams and operational excellence.</p>
                    </div>
                    <div class="col-md-5">
                      <!-- <img class="featurette-image img-fluid mx-auto" src="image/toto.jpg" alt="Generic placeholder image"> -->
                      <video controls src="videos/beats.mp4" width="500">
                        The doesn't support videos
                      </video>
                    </div>
                  </div>
                  <hr class="featurette-divider">
                  <div class="row featurette">
                    <div class="col-md-7 order-md-2">
                      <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
                      <p class="lead">By committing to bring a MRI suite to Langley by fall of 2019, we can ensure Langley residents have access to an important emergency service when they need it most. </p>
                    </div>
                    <div class="col-md-5 order-md-1">
                      <img class="featurette-image img-fluid mx-auto" src="image/eyes.jpg" alt="Generic placeholder image">
                    </div>
                  </div>
                  <hr class="featurette-divider">
                  <div class="row featurette">
                    <div class="col-md-7">
                      <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
                      <p class="lead">The Foundation is governed by a board made up of 21 community volunteers. Their role is to provide fiscal oversight and stewardship, set policies and goals, as well as fundraise for the organization to meet its objectives.
                      </p>
                    </div>
                    <div class="col-md-5">
                      <img class="featurette-image img-fluid mx-auto" src="image/naas.jpg" alt="Generic placeholder image">
                    </div>
                  </div>
                  <hr class="featurette-divider">
                  <!-- /END THE FEATURETTES -->
                  </div><!-- /.container -->
                  <div>
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
                                    <a class="btn btn-primary" href="index.php">SUPPORT A HEALTHY FUTURE</a>
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </section>
                  </div>
                  <!-- FOOTER -->
                  <footer class="container">
                    <p class="float-right"><a href="#">Back to top</a></p>
                    <div class="icon-bar">
                      <a class="active" href="#"><i class="fas fa-home"></i></a>
                      <a href="#"><i class="fas fa-search"></i></a>
                      <a href="#"><i class="fa fa-envelope"></i></a>
                      <a href="#"><i class="fa fa-globe"></i></a>
                      <a href="#"><i class="fa fa-trash"></i></a>
                    </div>
                    
                    <p>&copy; 2017-2018 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
                  </footer>
                </main>
                <!-- Bootstrap core JavaScript
                ================================================== -->
                <!-- Placed at the end of the document so the pages load faster -->
                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                
                <script src="js/bootstrap.js"></script>
                <script type="text/javascript" src="js/all.js"></script>
                <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
                
              </body>
            </html>
            <?php endif;  ?>