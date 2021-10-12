<?php 

require_once("header.php"); 
require_once("database.php");

$query = "SELECT * FROM post_quote";
$post_quotes = db::getRecords($query);
?>
<!-- Titlebar -->

<div id="titlebar" class="gradient">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 data-aos="fade-right" data-aos-duration="2000">Insurance</h2>
        <nav id="breadcrumbs">
          <ul data-aos="fade-left" data-aos-duration="2000">
            <li><a href="index.php">Home</a></li>
            <li>Need an Insurance?</li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</div>

<!-- About List Start -->
<div class="section margin-top-65 padding-bottom-55">
  <div class="container">
    <div class="row">
     <?php
     if ($post_quotes) {
      foreach ($post_quotes as $post_quote) {
        ?>
        <div class="col-xl-12 col-md-12">
          <div class="utf-section-headline-item  margin-top-0 margin-bottom-40">
            <h3 data-aos="zoom-in-down" data-aos-duration="1000"><?php echo $post_quote['heading']; ?></h3>
            <div class="utf-headline-display-inner-item"><?php echo $post_quote['heading']; ?></div>
          </div>
          <p data-aos="fade-down" data-aos-duration="3000"><?php echo $post_quote['dcp']; ?></p>
        </div>
        <?php

      }
    }
    ?>
  </div>
</div>
</div>
<!-- About List End -->
<div class="utf-centered-button">
  <a data-aos="fade-up"
  data-aos-duration="2000"  href="quote_detail.php" class="button utf-ripple-effect-dark utf-button-sliding-icon margin-top-0">Enter Quote Detail<i class="icon-feather-plus"></i></a>
</div>

<!-- Subscribe Block Start -->
<section class="utf_cta_area_item utf_cta_area2_block">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="utf_subscribe_block" data-aos="fade-up"
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

<?php require_once("footer.php"); ?>