<?php
session_start();
?>
<!DOCTYPE html>


<head>

  <meta charset="utf-8">

  <meta name="viewport" content="width=devidev-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Railway Reservation System</title>


  <!-- [ FONT-AWESOME ICON ] 
        
=========================================================================================================================-->

  <link rel="stylesheet" type="text/css" href="library/font-awesome-4.3.0/css/font-awesome.min.css">


  <!-- [ PLUGIN STYLESHEET ]
        
=========================================================================================================================-->

  <link rel="shortcut icon" type="image/x-icon" href="images/icon.png">

  <link rel="stylesheet" type="text/css" href="css/animate.css">

  <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">

  <link rel="stylesheet" type="text/css" href="css/owl.theme.css">

  <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">

  <!-- [ Boot STYLESHEET ]
        
=========================================================================================================================-->

  <link rel="stylesheet" type="text/css" href="library/bootstrap/css/bootstrap-theme.min.css">

  <link rel="stylesheet" type="text/css" href="library/bootstrap/css/bootstrap.css">

  <!-- [ DEFAULT STYLESHEET ] 
        
=========================================================================================================================-->

  <link rel="stylesheet" type="text/css" href="css/style.css">

  <link rel="stylesheet" type="text/css" href="css/responsive.css">

  <link rel="stylesheet" type="text/css" href="css/color/rose.css">


</head>
<style>
  .username {
    color: white;
    text-align: center;
  }
  .shami:hover{
    background-color: palegreen;
    transition-delay: 0.2s;

  }
  
</style>

<body>

  <!-- [ LOADERs ]

================================================================================================================================-->

  <div class="preloader">

    <div class="loader theme_background_color">

      <span></span>


    </div>
  </div>
  <!-- [ /PRELOADER ]

=============================================================================================================================-->

  <!-- [WRAPPER ]

=============================================================================================================================-->

  <div class="wrapper">

    <!-- [NAV]
 
============================================================================================================================-->

    <!-- Navigation
    ==========================================-->

    <?php
    if (isset($_SESSION['useruid'])) {
      echo "<p class=\"username\">Welcome back " . $_SESSION['useruid'] . " !</p>";
    }
    ?>

    <nav class=" nim-menu navbar navbar-default navbar-fixed-top">

      <div class="container">

        <!-- Brand and toggle get grouped for better mobile display -->

        <div class="navbar-header">

          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">

            <span class="sr-only">Toggle navigation</span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

          </button>

          <a class="navbar-brand" href="index.html">Railway<span class="themecolor">Reservation</span>System</a>

        </div>


        <!-- Collect the nav links, forms, and other content for toggling -->

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

          <ul class="nav navbar-nav navbar-right">

            <li><a href="#home" class="page-scroll">
                <h3>Home</h3>
              </a></li>

            <li><a href="#one" class="page-scroll">
                <h3>About</h3>
              </a></li>

            <li><a href="#four" class="page-scroll">
                <h3>Travel Ideas</h3>
              </a></li>
            <?php
            if (isset($_SESSION['useruid'])) {
              echo "<li class=\"nav-item item6 page-scroll\"><a class=\"nav-link\" href=\"include/logout.inc.php\"><h3>Logout</h3></a></li>";
            } else {
              echo "<li class=\"nav-item item7 page-scroll\"><a class=\"nav-link\" href=\"signup.php\"><h3>Sign In</h3></a></li>";
              echo " <li class=\"nav-item item8 page-scroll\"><a class=\"nav-link\" href=\"login.php\"><h3>Login</h3></a></li>";
            }
            ?>

            <li><a href="admin/" class="page-scroll">
                <h3>Admin Login</h3>
              </a></li>

            <!-- <li><a href="signup.php" class="page-scroll"><h3>User SignIn</h3></a></li>
            
<li><a href="login.php" class="page-scroll"><h3>User LogIn</h3></a></li>

<li><a href="admin/" class="page-scroll"><h3>Admin Login</h3></a></li>
          
</ul>


        
</div>
<!-- /.navbar-collapse -->

        </div><!-- /.container-fluid -->


    </nav>



    <!-- [/NAV]
 
============================================================================================================================-->


    <!-- [/MAIN-HEADING]
 
============================================================================================================================-->

    <section class="main-heading" id="home">

      <div class="overlay">

        <div class="container">

          <div class="row">

            <div class="main-heading-content col-md-12 col-sm-12 text-center">

              <h1 class="main-heading-title"><span class="main-element themecolor" data-elements="Welcome to Railway Reservation System!"></span></h1>


              <p class="main-heading-text">Welcome to online Railway Reservation System-<br /> an one stop destination to hassle free ticlet bookings</p>

              <div class="btn-bar">

                <a href="reserved.php" class="btn btn-custom theme_background_color shami">BOOK NOW </a>

              </div>

            </div>

          </div>

        </div>

      </div>


      <!-- </section>
 
<section class="main-heading" id="home">
       
<div class="overlay">
           
<div class="container">
               
<div class="row">
                   
<div class="main-heading-content col-md-12 col-sm-12 text-center">
        
<h1 class="main-heading-title">WHY STAND IN LONG LINES? </h1>
        
<p class="main-heading-text">Book tickets with us online, hassle free & from the comfort of your home.
<br/></p>
        
<div class="btn-bar">
          
<a href="#" class="btn btn-custom theme_background_color">Get Started</a>
          
<a href="#" class="btn btn-custom-outline">Contact Us</a>
        
</div>
      
</div>
               
</div>
           
</div>
       
</div>  
      
   
</section> -->


      <!-- [/MAIN-HEADING]
 
============================================================================================================================-->



      <!-- [ABOUT US]
 
============================================================================================================================-->

      <section class="aboutus white-background black" id="one">

        <div class="container">

          <div class="row">

            <div class="col-md-12 text-center black">

              <h3 class="title">Why use our<span class="themecolor"> Portal ?</span></h3>

              <p class="a-slog">Few advantages of using our system for boking your tickets</p>

            </div>

          </div>

          <div class="gap">


          </div>


          <div class="row about-box">

            <div class="col-sm-4 text-center">

              <div class="margin-bottom">

                <i class="fa fa-newspaper-o"></i>

                <h4>QUICK SERVICE</h4>

                <p class="black">Book tickets 24/7 with just a few clicks!</p>

              </div> <!-- / margin -->

            </div> <!-- /col -->

            <div class="col-sm-4 about-line text-center">

              <div class="margin-bottom">

                <i class="fa fa-diamond"></i>

                <h4>Loyalty Points</h4>

                <p class="black">Book tickets using our system and earn loyalty points which can be further used to get amazing offers</p>

              </div> <!-- / margin -->

            </div><!-- /col -->

            <div class="col-sm-4 text-center">

              <div class="margin-bottom">

                <i class="fa fa-plane"></i>

                <h4>Assistance</h4>

                <p class="black">Unable to plan your journey? Contact us and we will curate a perfect holiday for you! </p>

              </div> <!-- / margin -->

            </div><!-- /col -->

          </div> <!-- /row -->





        </div>
      </section>



      <!-- [/ABOUTUS]
 
 
============================================================================================================================-->





      <!-- [INSPIRATION]
 
============================================================================================================================-->

      <section class="inspiration" id="four">

        <div class="overlay">

          <div class="container">

            <div class="row">

              <article class="col-md-12 text-center">

                <div class="intermediate-container">

                  <div class="subheading">

                    <h4>Get ready for all new <span class="themecolor">EXPERIENCES</span></h4>

                  </div>

                  <div class="heading">

                    <h2> Here are some travel ideas especially curated for you! </h2>

                  </div>

                  <div class="">

                    <a class="btn btn-custom-outline" href="Travelideas.html"><span>LET's GO!</span></a>

                  </div>

                </div>

              </article>

            </div>

          </div>

        </div>

      </section>


      <!-- [/INSPIRATION]
 

============================================================================================================================-->




      <!-- [CONTACT]
 
============================================================================================================================-->

      <!--sub-form-->
      <!-- <section class="sub-form text-center" id="eight">
  
<div class="container">
    <div class="col-md-12">
        
<h3 class="title">Subscribe to our <span class="themecolor"> News letter</span></h3>
            
<p class="lead">Lorem ipsum dolor sit amet ne onsectetuer adipiscing elit. Aenean commodo ligula eget dolor in tashin ty</p>
    
</div> 
    
<div class="row">
        
<div class="col-md-3 col-sm-3"></div>
      
<div class="col-md-6 center-block col-sm-6 ">
        
<form id="mc-form">
          
<div class="input-group">
            
<input type="email" class="form-control" placeholder="Email Address" required id="mc-email">
           
<span class="input-group-btn">
            
<button type="submit" class="btn btn-default">SUBSCRIBE <i class="fa fa-envelope"></i> </button>
            
</span> </div>
          
<label for="mc-email" id="mc-notification"></label>
       
 </form>
      
</div>
   
 </div>
  
</div>

</section> -->

      <!--sub-form end-->




      <!-- [/CONTACT]
 
============================================================================================================================-->



      <!-- [FOOTER]
 
============================================================================================================================-->


      <footer class="site-footer section-spacing text-center " id="eight">


        <div class="container">

          <div class="row">

            <div class="col-md-4">

              <p class="footer-links"><a href="#"></a> <a href="#"></a></p>

            </div>

            <div class="col-md-4"> <small>Created by:<br>Himanshu Bharuka</small></div>

            <div class="col-md-4">

              <!--social-->


              <ul class="social">

                <li><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter "></i></a></li>

                <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>

                <li><a href="https://www.youtube.com/" target="_blank"><i class="fa fa-youtube-play"></i></a></li>

              </ul>


              <!--social end-->


            </div>

          </div>

        </div>

      </footer>




      <!-- [/FOOTER]
 
============================================================================================================================-->




  </div>


  <!-- [ /WRAPPER ]

=============================================================================================================================-->


  <!-- [ DEFAULT SCRIPT ] -->

  <script src="library/modernizr.custom.97074.js"></script>

  <script src="library/jquery-1.11.3.min.js"></script>

  <script src="library/bootstrap/js/bootstrap.js"></script>

  <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>

  <!-- [ PLUGIN SCRIPT ] -->

  <script src="library/vegas/vegas.min.js"></script>

  <script src="js/plugins.js"></script>

  <!-- [ TYPING SCRIPT ] -->

  <script src="js/typed.js"></script>

  <!-- [ COUNT SCRIPT ] -->

  <script src="js/fappear.js"></script>

  <script src="js/jquery.countTo.js"></script>

  <!-- [ SLIDER SCRIPT ] -->

  <script src="js/owl.carousel.js"></script>

  <script src="js/jquery.magnific-popup.min.js" type="text/javascript"></script>

  <script type="text/javascript" src="js/SmoothScroll.js"></script>


  <!-- [ COMMON SCRIPT ] -->
  <script src="js/common.js"></script>

</body>


</html>