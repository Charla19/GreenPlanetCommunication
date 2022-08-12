<?php include "langues/decide-lan.php"; ?>

<!DOCTYPE html>
<html lang="<?php echo $lang["html-lang"]; ?>">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title><?php echo $lang["title2"]; ?></title>

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

    <div class="sub-header">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-xs-12">
            <ul class="left-info">
              <li><a href="#"><i class="fa fa-clock-o"></i><?php echo $lang['Availability']; ?> 09:00-17:00</a></li>
              <li><a href="#"><i class="fa fa-phone"></i>090-080-0760</a></li>
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
              <li class="nav-item">
                <a class="nav-link" href="about.php"><?php echo $lang["nav-about"]; ?></a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="services.php"><?php echo $lang["nav-service"]; ?></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php"><?php echo $lang["nav-contact"]; ?></a>
              </li>
			  <li class="nav-item dropdown">
				 <a class="nav-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $lang["lang-btn"]; ?></a>
				 <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					<li><a class="dropdown-item" href="services.php?lang=fr"><?php echo $lang["lang-fr"]; ?></a></li>
					<li><a class="dropdown-item" href="services.php?lang=en"><?php echo $lang["lang-ang"]; ?></a></li>
					<li><a class="dropdown-item" href="services.php?lang=es"><?php echo $lang["lang-es"]; ?></a></li>
				 </ul>
			  </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading header-text" id="top">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1><?php echo $lang["section-heading-h1-2"]; ?></h1>
            <span><?php echo $lang["section-heading-span-2"]; ?></span>
          </div>
        </div>
      </div>
    </div>

    <div class="single-services" id="Services">
      <div class="container">
        <div class="row" id="tabs">
          <div class="col-md-4">
            <ul>
              <li><a href='#tabs-1'><?php echo $lang["services-tabs1"]; ?><i class="fa fa-angle-right"></i></a></li>
              <li><a href='#tabs-2'><?php echo $lang["services-tabs2"]; ?><i class="fa fa-angle-right"></i></a></li>
              <li><a href='#tabs-3'><?php echo $lang["services-tabs3"]; ?><i class="fa fa-angle-right"></i></a></li>
              <li><a href='#tabs-4'><?php echo $lang["services-tabs4"]; ?><i class="fa fa-angle-right"></i></a></li>
            </ul>
          </div>
          <div class="col-md-8">
            <section class='tabs-content'>
              <article id='tabs-1'>
                <img src="assets/images/single_service_01.jpg" alt="">
                <h4><?php echo $lang["tabs1-h4"]; ?></h4>
                <p><?php echo $lang["tabs1-p"]; ?>
                <br><br><?php echo $lang["tabs1-p-br-br"]; ?></p>
              </article>
              <article id='tabs-2'>
              <img src="assets/images/single_service_02.jpg" alt="">
                <h4><?php echo $lang["tabs2-h4"]; ?></h4>
                <p><?php echo $lang["tabs2-p"]; ?>
                <br><br><?php echo $lang["tabs2-p-br-br"]; ?></p>
              </article>
              <article id='tabs-3'>
              <img src="assets/images/single_service_03.jpg" alt="">
                <h4><?php echo $lang["tabs3-h4"]; ?></h4>
                <p><?php echo $lang["tabs3-p"]; ?>
                <br><br><?php echo $lang["tabs3-p-br-br"]; ?></p>
              </article>
              <article id='tabs-4'>
              <img src="assets/images/single_service_04.jpg" alt="">
                <h4><?php echo $lang["tabs4-h4"]; ?></h4>
                <p><?php echo $lang["tabs4-p"]; ?>
                <br><br><?php echo $lang["tabs4-p-br-br"]; ?></p>
              </article>
            </section>
          </div>
        </div>
      </div>
    </div>

    <!-- Callback -->
    <div class="callback-form callback-services">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2><?php echo $lang["callback-h2"]; ?><em><?php echo $lang["callback-h2-em"]; ?></em></h2>
              <span><?php echo $lang["callback-span"]; ?></span>
            </div>
          </div>
          <div class="col-md-12">
            <div class="contact-form">
              <form id="contact" action="" method="post">
                <div class="row">
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="<?php echo $lang["callback-nom"]; ?>" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="<?php echo $lang["callback-mail"]; ?>" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="subject" type="text" class="form-control" id="subject" placeholder="<?php echo $lang["callback-subject"]; ?>" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="<?php echo $lang["callback-msg"]; ?>" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="border-button"><?php echo $lang["callback-btn"]; ?></button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Partners -->
    <div class="partners">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="owl-partners owl-carousel">
              <div class="partner-item">
                <img src="assets/images/client-01.png" alt="">
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
              <li><a href="#Services"><?php echo $lang["footer2-link8"]; ?></a></li>
          </div>
          <div class="col-md-3 footer-item">
            <h4><?php echo $lang["footer3-h4"]; ?></h4>
            <ul class="menu-list">
              <li><a href="index.php"><?php echo $lang["footer3-link5"]; ?></a></li>
              <li><a href="about.php"><?php echo $lang["footer3-link1"]; ?></a></li>
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