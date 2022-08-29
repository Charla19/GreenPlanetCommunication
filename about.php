<?php include "langues/decide-lan.php"; ?>

<!DOCTYPE html>
<html lang="<?php echo $lang["html-lang"]; ?>">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title><?php echo $lang["title"]; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-finance-business.css">
    <link rel="stylesheet" href="assets/css/owl.css">
<!--

Finance Business TemplateMo

https://templatemo.com/tm-545-finance-business

-->
  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <div class="sub-header">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-xs-12">
            <ul class="left-info">
            <li><a href="https://greenplanetcommunication.com/"><img src="assets/images/logo.png" width="250px" height="50px"></a></li>
              <li><a href="#"><i class="fa fa-clock-o"></i><?php echo $lang['Availability']; ?> 09:00-17:00</a></li>
              <li><a href="#"><i class="fa fa-phone"></i>+33 6 30 07 70 20</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="right-icons">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-behance"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    
    <!-- header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a href="index.php" class="d-lg-none"><img src="assets/images/logo-w.png" alt="logo" width="40" height="40" style="margin-left: 20px; margin-top: 5px;"></a>
          <a class="navbar-brand d-none d-lg-block" href="index.php"><h2>Green Planet Communication</h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php"><?php echo $lang["nav-home"]; ?>
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="about.php"><?php echo $lang["nav-about"]; ?></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="services.php"><?php echo $lang["nav-service"]; ?></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php"><?php echo $lang["nav-contact"]; ?></a>
              </li>
              <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $lang["lang-btn"]; ?></a>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <li><a class="dropdown-item" href="about.php?lang=fr"><?php echo $lang["lang-fr"]; ?></a></li>
                <li><a class="dropdown-item" href="about.php?lang=en"><?php echo $lang["lang-ang"]; ?></a></li>
                <li><a class="dropdown-item" href="about.php?lang=es"><?php echo $lang["lang-es"]; ?></a></li>
              </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading header-text about"  id="Top">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1><?php echo $lang["section-heading-h1-1"]; ?><?php echo $lang["section-heading-em"]; ?></h1>
            <span><?php echo $lang["section-heading-span-1"]; ?></span>
          </div>
        </div>
      </div>
    </div>

    <!-- Signature Green Planet Communication -->
    <div class="more-info about-info">
      <div class="container">
        <div class="row">
		      <div class="col-md-12">
            <div class="section-heading">
              <h2><?php echo $lang["signature-h2"]; ?><em><?php echo $lang["signature-h2-em"]; ?></em></h2>
            </div>
          </div>
          <div class="col-md-12" id="signature">
            <div class="more-info-content">
              <div class="row">
                <div class="col-md-6 d-md-none">
                  <div class="left-image">
                    <img src="assets/gifs/Durability.gif" alt="">
                  </div>
                </div>
                <div class="col-md-6 align-self-center">
                  <div class="right-content">
                  <hr class="border border-3 opacity-50">
                    <span><?php echo $lang["signature1-span"]; ?></span>
                    <h2><?php echo $lang["signature1-h2"]; ?><em></em></h2>
                    <p><?php echo $lang["signature1-p"]; ?></p>
                    <!--<a href="" class="filled-button">Read More</a>-->
                  </div>
                </div>
                <div class="col-md-6 d-none d-md-block">
                  <div class="left-image">
                    <img src="assets/gifs/Team.gif" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
		  <div class="col-md-12">
            <div class="more-info-content">
              <div class="row">
                <div class="col-md-6 d-none d-md-block">
                  <div class="left-image">
                    <img src="assets/gifs/excellence.gif" alt="">
                  </div>
                </div>
                <div class="col-md-6 align-self-center">
                  <div class="right-content">
                    <hr class="border border-3 opacity-50">
                    <span><?php echo $lang["signature2-span"]; ?></span>
                    <h2><?php echo $lang["signature2-h2"]; ?></h2>
                    <p><?php echo $lang["signature2-p"]; ?></p>
                    <!--<a href="" class="filled-button">Read More</a>-->
                  </div>
                </div>
              </div>
             </div>
          </div>
		  <div class="col-md-12">
            <div class="more-info-content">
              <div class="row">
                <div class="col-md-6 align-self-center">
                  <div class="right-content">
                    <hr class="border border-3 opacity-50">
                    <span><?php echo $lang["signature3-span"]; ?></span>
                    <h2><?php echo $lang["signature3-h2"]; ?></h2>
                    <p><?php echo $lang["signature3-p"]; ?></p>
                    <!--<a href="" class="filled-button">Read More</a>-->
                  </div>
                </div>
                <div class="col-md-6 d-none d-md-block">
                  <div class="left-image">
                    <img src="assets/gifs/Confiance.gif" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
		  <div class="col-md-12">
            <div class="more-info-content">
              <div class="row">
                <div class="col-md-6 d-none d-md-block">
                  <div class="left-image">
                    <img src="assets/gifs/Durability.gif" alt="">
                  </div>
                </div>
                <div class="col-md-6 align-self-center">
                  <div class="right-content">
                    <hr class="border border-3 opacity-50">
                    <span><?php echo $lang["signature4-span"]; ?></span>
                    <h2><?php echo $lang["signature4-h2"]; ?></h2>
                    <p><?php echo $lang["signature4-p"]; ?></p>
                    <!--<a href="" class="filled-button">Read More</a>-->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Valeurs -->
    <div class="team" id="valeur">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2><?php echo $lang["value-heading-h2"]; ?><em><?php echo $lang["value-heading-em"]; ?></em></h2>
              <span><?php echo $lang["value-heading-span"]; ?></span>
            </div>
          </div>
          <div class="col-md-4">
            <div class="team-item">
              <img src="assets/images/team_01.jpg" alt="">
              <div class="down-content">
                <h4><?php echo $lang["value1"]; ?></h4>
                <span><?php echo $lang["value1-span"]; ?></span>
                <p><?php echo $lang["value1-p"]; ?></p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="team-item">
              <img src="assets/images/team_02.jpg" alt="">
              <div class="down-content">
                <h4><?php echo $lang["value2"]; ?></h4>
                <span><?php echo $lang["value2-span"]; ?></span>
                <p><?php echo $lang["value2-p"]; ?></p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="team-item">
              <img src="assets/images/team_03.jpg" alt="">
              <div class="down-content">
                <h4><?php echo $lang["value3"]; ?></h4>
                <span><?php echo $lang["value3-span"]; ?></span>
                <p><?php echo $lang["value3-p"]; ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Fun facts -->
    <div class="fun-facts">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="left-content">
              <span><?php echo $lang["fun-fact-span"]; ?></span>
              <h2><?php echo $lang["fun-fact-h2"]; ?><em><?php echo $lang["fun-fact-em"]; ?></em></h2>
              <p><?php echo $lang["fun-fact-p"]; ?>
              <br><br><?php echo $lang["fun-fact-br"]; ?></p>
              <a href="" class="filled-button"><?php echo $lang["fun-fact-btn"]; ?></a>
            </div>
          </div>
          <div class="col-md-6 align-self-center">
            <div class="row">
              <div class="col-md-6">
                <div class="count-area-content">
                  <div class="count-digit">945</div>
                  <div class="count-title"><?php echo $lang["count-title1"]; ?></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="count-area-content">
                  <div class="count-digit">1280</div>
                  <div class="count-title"><?php echo $lang["count-title2"]; ?></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="count-area-content">
                  <div class="count-digit">578</div>
                  <div class="count-title"><?php echo $lang["count-title3"]; ?></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="count-area-content">
                  <div class="count-digit">26</div>
                  <div class="count-title"><?php echo $lang["count-title4"]; ?></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Testimonials -->
    <div class="testimonials" id="pov">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2><?php echo $lang["testimonial-h2"]; ?><em><?php echo $lang["testimonial-h2-em"]; ?></em></h2>
              <span><?php echo $lang["testimonial-span"]; ?></span>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-testimonials owl-carousel">
              <div class="testimonial-item">
                <div class="inner-content">
                  <h4><?php echo $lang["testimonial1-h4"]; ?></h4>
                  <span><?php echo $lang["testimonial1-span"]; ?></span>
                  <p><?php echo $lang["testimonial1-p"]; ?></p>
                </div>
                <img src="http://placehold.it/60x60" alt="">
              </div>
              
              <div class="testimonial-item">
                <div class="inner-content">
                  <h4><?php echo $lang["testimonial2-h4"]; ?></h4>
                  <span><?php echo $lang["testimonial2-span"]; ?></span>
                  <p><?php echo $lang["testimonial2-p"]; ?></p>
                </div>
                <img src="http://placehold.it/60x60" alt="">
              </div>

              <div class="testimonial-item">
                <div class="inner-content">
                  <h4><?php echo $lang["testimonial3-h4"]; ?></h4>
                  <span><?php echo $lang["testimonial3-span"]; ?></span>
                  <p><?php echo $lang["testimonial3-p"]; ?></p>
                </div>
                <img src="http://placehold.it/60x60" alt="">
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer Starts Here -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-3 footer-item">
            <h4><?php echo $lang["footer1-h4"]; ?></h4>
            <p><?php echo $lang["footer1-p"]; ?></p>
            <ul class="social-icons">
              <li><a rel="nofollow" href="https://fb.com/templatemo" target="_blank"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-behance"></i></a></li>
            </ul>
          </div>
          <div class="col-md-3 footer-item">
            <h4><?php echo $lang["footer2-h4"]; ?></h4>
            <ul class="menu-list">
              <li><a href="#Top"><?php echo $lang["footer2-link1"]; ?></a></li>
              <li><a href="#signature"><?php echo $lang["footer2-link6"]; ?></a></li>
              <li><a href="#valeur"><?php echo $lang["footer2-link7"]; ?></a></li>
              <li><a href="#pov"><?php echo $lang["footer2-link4"]; ?></a></li>
            </ul>
          </div>
          <div class="col-md-3 footer-item">
            <h4><?php echo $lang["footer3-h4"]; ?></h4>
            <ul class="menu-list">
              <li><a href="index.php"><?php echo $lang["footer3-link5"]; ?></a></li>
              <li><a href="services.php"><?php echo $lang["footer3-link6"]; ?></a></li>
              <li><a href="contact.php"><?php echo $lang["footer3-link2"]; ?></a></li>
              <li><a href="#"><?php echo $lang["footer3-link3"]; ?></a></li>
              <li><a href="#"><?php echo $lang["footer3-link4"]; ?></a></li>
            </ul>
          </div>
          <div class="col-md-3 footer-item last-item">
            <h4><?php echo $lang["footer4-h4"]; ?></h4>
            <div class="contact-form">
              <form id="contact footer-contact" action="" method="post">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="<?php echo $lang["footer4-placeholder-fullname"]; ?>" required>
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="<?php echo $lang["footer4-placeholder-mailAdress"]; ?>" required>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="<?php echo $lang["footer4-placeholder-message"]; ?>" required></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="filled-button"><?php echo $lang["footer4-btn"]; ?></button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/accordions.js"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</html>