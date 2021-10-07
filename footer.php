<?php
include('database.php');
?>
<!-- Footer -->
<div id="footer">
  <div class="utf-footer-section-item-block">
    <div class="container">
      <div class="row">
        <div class="col-xl-6 col-md-12" data-aos="zoom-in-right" data-aos-duration="3000">
          <div class="utf-footer-item-links">
            <a href="index.php"><img class="footer-logo" src="images/logo3.png" alt=""></a>
            <p>Lorem Ipsum is simply dummy text of printing and type setting industry. Lorem Ipsum been industry standard dummy text ever since, when unknown printer took a galley type scrambled.</p>
          </div>
        </div>


        <div class="col-xl-3 col-md-3 col-sm-6" data-aos="zoom-in" data-aos-duration="3000">
          <div class="utf-footer-item-links">
            <h3>Resources</h3>
            <ul>
              <li><a href="#"><i class="icon-feather-chevron-right"></i> <span>My Account</span></a></li>
              <li><a href="#"><i class="icon-feather-chevron-right"></i> <span>Support</span></a></li>
              <li><a href="#"><i class="icon-feather-chevron-right"></i> <span>How It Works</span></a></li>
              <li><a href="#"><i class="icon-feather-chevron-right"></i> <span>Underwriting</span></a></li>
              <li><a href="#"><i class="icon-feather-chevron-right"></i> <span>Employers</span></a></li>
            </ul>
          </div>
        </div>

        <div class="col-xl-3 col-md-3 col-sm-6" data-aos="zoom-in-left" data-aos-duration="3000">
          <div class="utf-footer-item-links">
            <h3>Quick Links</h3>
            <ul>
              <li><a href="#"><i class="icon-feather-chevron-right"></i> <span>Jobs Listing</span></a></li>
              <li><a href="about-us.php"><i class="icon-feather-chevron-right"></i> <span>About Us</span></a></li>
              <li><a href="contact.php"><i class="icon-feather-chevron-right"></i> <span>Contact Us</span></a></li>
              <li><a href="#"><i class="icon-feather-chevron-right"></i> <span>Privacy Policy</span></a></li>
              <li><a href="#"><i class="icon-feather-chevron-right"></i> <span>Term & Condition</span></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer Copyrights -->
  <div class="utf-footer-copyright-item">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">Copyright &copy; 2021 All Rights Reserved Softrobo System</div>
      </div>
    </div>
  </div>
  <!-- Footer Copyrights / End -->
</div>
<!-- Footer / End -->
</div>
<!-- Wrapper / End -->

<!-- Sign In Popup -->
<div id="utf-signin-dialog-block" class="zoom-anim-dialog mfp-hide dialog-with-tabs">
  <div class="utf-signin-form-part">
    <ul class="utf-popup-tabs-nav-item">
      <li><a href="#login">Log In</a></li>
      <li><a href="#register">Register</a></li>
    </ul>
    <div class="utf-popup-container-part-tabs">
      <!-- Login -->
      <div class="utf-popup-tab-content-item" id="login">
        <div class="utf-welcome-text-item">
          <h3>Welcome Back Sign in to Continue</h3>
          <span>Don't Have an Account? <a href="#" class="register-tab">Sign Up!</a></span>
        </div>
        <form action="signup.php" method="post" id="login-form">
          <div class="utf-no-border">
            <input type="text" class="utf-with-border" name="email" id="emailaddress" placeholder="Email Address" required />
          </div>
          <div class="utf-no-border">
            <input type="password" class="utf-with-border" name="password" id="password" placeholder="Password" required />
          </div>
          <div class="checkbox margin-top-0" style="display:flex">
            <input type="radio" id="two-step" name="checktype" value="User" required>
            <label style="padding-left: 27px;" name="label" for="two-step"><span class="checkbox-icon"></span>User</label>
            <input type="radio" id="one-step" name="checktype" value="Vendor">
            <label style="margin-left: 20px;padding-left: 27px;" name="label" for="one-step"><span class="checkbox-icon"></span>Vender</label>
          </div>
          <a href="#" class="forgot-password" style="top: -24px;">Forgot Password?</a>

          <button class="button full-width utf-button-sliding-icon ripple-effect" type="submit" name="login" form="login-form">Log In <i class="icon-feather-chevron-right"></i></button>
        </form>
      </div>

      <!-- Register -->
      <div class="utf-popup-tab-content-item" id="register">
        <div class="utf-welcome-text-item">
          <h3>Create your Account!</h3>
          <!-- <span>Don't Have an Account? <a href="#" class="register-tab">Sign Up!</a></span>  -->
        </div>
        <form action="signup.php" method="post" id="utf-register-account-form">
          <div class="utf-no-border">
            <input type="text" class="utf-with-border" name="name" id="name" placeholder="User Name" required />
          </div>
          <div class="utf-no-border">
            <input type="text" class="utf-with-border" name="emailaddress-register" id="emailaddress-register" placeholder="Email Address" required />
          </div>

          <div class="utf-no-border" title="Should be at least 8 characters long" data-tippy-placement="bottom">
            <input type="password" class="utf-with-border" name="password-register" id="password-register" placeholder="Password" required />
          </div>
          <div class="utf-no-border">
            <input type="password" class="utf-with-border" name="password-repeat-register" id="password-repeat-register" placeholder="Repeat Password" required />
          </div>
          <div class="checkbox margin-top-0" style="display:flex">
            <input type="radio" id="two_step" name="checktype" value="User" required>
            <label style="padding-left: 27px;" name="label" for="two_step"><span class="checkbox-icon"></span>User</label>
            <input type="radio" id="one_step" name="checktype" value="Vendor">
            <label style="margin-left: 20px;padding-left: 27px;" name="label" for="one_step"><span class="checkbox-icon"></span>Vendor</label>
          </div>
          <div class="checkbox margin-top-0">
            <input type="checkbox" id="two-step0" required>
            <label for="two-step0"><span class="checkbox-icon"></span> I Have Read and Agree to the <a href="#">Terms &amp; Conditions</a></label>
          </div>
          <button class="margin-top-10 button full-width utf-button-sliding-icon ripple-effect" type="submit" name="add_acc" form="utf-register-account-form">Register <i class="icon-feather-chevron-right"></i></button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Sign In Popup / End -->

<!-- Scripts -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-migrate-3.0.0.min.js"></script>
<script src="js/mmenu.min.js"></script>
<script src="js/tippy.all.min.js"></script>
<script src="js/simplebar.min.js"></script>
<script src="js/bootstrap-slider.min.js"></script>
<script src="js/bootstrap-select.min.js"></script>
<script src="js/snackbar.js"></script>
<script src="js/clipboard.min.js"></script>
<script src="js/counterup.min.js"></script>
<script src="js/magnific-popup.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/custom_jquery.js"></script>
<!-- Geting an API Key: https://developers.google.com/maps/documentation/javascript/get-api-key -->
<script src="https://maps.googleapis.com/maps/api/js?key=&amp;libraries=places"></script>
<script src="js/infobox.min.js"></script>
<script src="js/markerclusterer.js"></script>
<script src="js/maps.js"></script>
<script src='jquery-animation/js/css3-animate-it.js'></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
  if ($('.utf-intro-banner-search-form-block')[0]) {
    setTimeout(function() {
      $(".pac-container").prependTo(".utf-intro-search-field-item.with-autocomplete");
    }, 300);
  }
  AOS.init();
</script>
</body>

</html>