<?php 

require_once("header.php");
require_once("database.php");

$query = "SELECT * FROM contact";
$contacts = db::getRecords($query); 
?>   

<!-- Titlebar -->
<div id="titlebar" class="gradient">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2  data-aos="fade-right" data-aos-duration="2000">Contact Us</h2>
        <nav id="breadcrumbs" >
          <ul data-aos="fade-left" data-aos-duration="2000">
            <li><a href="index-1.html">Home</a></li>
            <li>Contact Us</li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</div>

<!-- Content --> 
<div class="container">
  <div class="row">
    <div class="col-xl-12">
      <div class="utf-contact-location-info-aera margin-bottom-50" data-aos="fade-up" data-aos-duration="2000">
        <div id="utf-single-job-map-container-item">
          <div id="singleListingMap" data-latitude="48.8566" data-longitude="2.3522" data-map-icon="im im-icon-Hamburger"></div>
        </div>
      </div>
    </div>      
    <div class="col-xl-4 col-lg-4" data-aos="flip-left" data-aos-duration="2000">
      <div class="utf-boxed-list-headline-item margin-bottom-35" >
        <h3><i class="icon-feather-map-pin"></i> Office Address</h3>
      </div>
      <div class="utf-contact-location-info-aera margin-bottom-50">
       <div class="contact-address">
        <ul>
          <li><strong>Phone:-</strong> (+21) 124 123 4546</li>
          <li><strong>Website:-</strong> <a href="#">www.example.com</a></li>
          <li><strong>E-Mail:-</strong> <a href="#">info@example.com</a></li>              
          <li><strong>Address:-</strong> 3241, Lorem ipsum dolor sit amet, consectetur adipiscing elit Proin fermentum condimentum mauris.</li>
        </ul>
      </div>
    </div>		
  </div>
  <div class="col-xl-8 col-lg-8"  data-aos="flip-left" data-aos-duration="2000">
    <section id="contact" class="margin-bottom-50">
      <div class="utf-boxed-list-headline-item margin-bottom-35">
        <h3><i class="icon-material-outline-description"></i> Contact Form</h3>
      </div>
      <div class="utf-contact-form-item">
        <form method="post" action="action.php" >
        <div class="row">
          <div class="col-md-6 " data-aos="fade-down"
          data-aos-duration="2000">
          <div class="utf-no-border">
           <input class="utf-with-border" name="first_name" type="text" id="firstname" placeholder="first_name" required />
         </div>
       </div>
       <div class="col-md-6" data-aos="fade-down"
       data-aos-duration="2000">
       <div class="utf-no-border">
         <input class="utf-with-border" name="last_name" type="text" id="lastname" placeholder="Last Name" required />
       </div>
     </div>
     <div class="col-md-6" data-aos="fade-right" data-aos-duration="1000">
       <div class="utf-no-border">
         <input class="utf-with-border" name="email" type="email" id="email" placeholder="Email Address" required />
       </div>
     </div>
     <div class="col-md-6" data-aos="fade-left" data-aos-duration="1000">
       <div class="utf-no-border">
         <input class="utf-with-border" name="subject" type="text" id="subject" placeholder="Subject" required />
       </div>
     </div>
   </div>
   <div  >
    <textarea class="utf-with-border" data-aos="zoom-in-up" name="message" cols="40" rows="3" id="comments" placeholder="Message..." required></textarea>
  </div>
  <div class="utf-centered-button margin-top-10" data-aos="fade-up"
  data-aos-duration="2000">
  <input type="submit" class="submit button" name="submit" id="submit" value="Submit Message" />
</div>
</form>
</div>
</section>
</div>
</div>
</div>
<!-- Container / End --> 

<!-- Subscribe Block Start -->
<section class="utf_cta_area_item utf_cta_area2_block">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="utf_subscribe_block"  data-aos="fade-up"
        data-aos-duration="3000">
        <div class="col-xl-8 col-md-7">
          <div class="section-heading">
            <h2 class="utf_sec_title_item utf_sec_title_item2">Subscribe to Our Newsletter!</h2>
            <p class="utf_sec_meta">Subscribe to get latest updates and information.</p>
          </div>
        </div>
        <div class="col-xl-4 col-md-5">
          <div class="contact-form-action">
            <form method="post">
              <i class="icon-material-baseline-mail-outline"></i>
              <input class="form-control" type="email" placeholder="Enter your email" required="">
              <button class="utf_theme_btn" type="submit">Subscribe</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<!-- Subscribe Block End -->
<?php require_once("footer.php");?>  