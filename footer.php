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
        <li><a href="#Contacts"><?php echo $lang["footer2-link9"]; ?></a></li>
        <li><a href="#map"><?php echo $lang["footer2-link10"]; ?></a></li>
      </div>
    <div class="col-md-3 footer-item">
      <h4><?php echo $lang["footer3-h4"]; ?></h4>
      <ul class="menu-list">
        <li><a href="index.php"><?php echo $lang["footer3-link5"]; ?></a></li>
        <li><a href="about.php"><?php echo $lang["footer3-link1"]; ?></a></li>
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