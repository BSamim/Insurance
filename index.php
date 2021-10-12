<?php


require_once("header.php");
require_once("database.php");

$query = "SELECT * FROM insurence";
$insurences = db::getRecords($query);


$query = "SELECT * FROM canadian";
$canadians = db::getRecords($query);

$query = "SELECT * FROM insurance_quote";
$insurance_quotes = db::getRecords($query);

$query = "SELECT * FROM testemonail";
$testeminails = db::getRecords($query); 

$query = "SELECT * FROM brand";
$brands = db::getRecords($query);

$get_cats = "SELECT * FROM categories";
$cats = db::getRecords($get_cats);
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.checked {
	color: orange;
}

.utf-logo-carousel-block .slick-slide{
	box-shadow: 0 2px 10px rgba(0 0 0 /25%);
}
.side_image>img:hover{
	transform: scale(1.03);
	transition-property: scale;
	transition-duration: 2s;
}
.photo-box,.icon-box{
	box-shadow: 0 10px 18px rgb(0 0 0 / 30%), 0 10px 10px rgb(0 0 0 / 22%);
}
</style>
<!-- Intro Banner -->
<div class="intro-banner dark-overlay big-padding"> 
	<div class="utf-transparent-header-block-spacer"></div>
	<div class="container"> 
		<div class="row">
			<div class="col-md-12">
				<div class="utf-banner-headline-text-part" >
					<h3 data-aos="fade-down"data-aos-duration="3000">Compare Insurance Quotes</h3>
					<span data-aos="fade-right"data-aos-offset="300"
					data-aos-easing="ease-in-sine">Get the Best Insurance Quotes on Auto, Home, Travel, Life & More, all in one place.</span> 
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="utf-intro-banner-search-form-block margin-top-40" data-aos="flip-down" data-aos-duration="1000"> 
					<div class="utf-intro-search-field-item">
						<div class="utf-input-with-icon">
							<i class="icon-material-outline-gps-fixed"></i>
							<input id="selectlocation" type="text" placeholder="Select Location">
						</div>
					</div>
					<!-- <div class="utf-intro-search-field-item">
						<i class="icon-feather-search"></i>
						<input id="intro-keywords" type="text" placeholder="Search Quote">
					</div> -->
					<div class="utf-intro-search-field-item">
						<select class="selectpicker default" data-live-search="true" data-selected-text-format="count" data-size="5" title="All Categories">
							<?php if($cats) {
							    foreach($cats as $cat){
							?>
							<option value="<?php echo $cat['id']; ?>"> <?php echo $cat['name']; ?> </option>
							<?php } } ?>
						</select>
					</div>
					<div class="utf-intro-search-button">
						<button class="button ripple-effect"><i class="icon-material-outline-search"></i> Search Jobs</button>
					</div>
				</div>
			</div>
		</div>
		<div class="row" style="margin-top:30px">
			<div class="col-md-3"></div>
			<div class="col-md-6 text-center">
				<a data-aos="fade-up"
				data-aos-duration="3000" href="#" class="button utf-ripple-effect-dark utf-button-sliding-icon margin-top-0" style="z-index: -100;">Get Quotes Now <i class="icon-feather-chevron-right"></i></a>
			</div>
			<div class="col-md-3"></div>
		</div>
	</div>
	<div class="utf-video-container-block" data-background-image="images/download.jpg">
		<video loop autoplay muted>
			<!-- <source src="images/home-video.mp4" type="video/mp4"> -->
			</video>
		</div>
	</div>

	<!-- Jobs Categories -->
	<div class="section margin-top-60 margin-bottom-50">
		<div class="container">
			<div class="row"> 

				<div class="col-xl-12">
					<div class="utf-section-headline-item centered margin-top-0 margin-bottom-40">
						<h3  data-aos="zoom-in" data-aos-duration="2000">Why use InsuranceHotline.com?</h3>
						<div class="utf-headline-display-inner-item">InsuranceHotline</div>
						<p class="utf-slogan-text"  data-aos="zoom-in-up" data-aos-duration="3000">We want to help you save money on insurance because we're drivers, homeowners and travellers too, and we know that everyone loves the feeling they get when they know they're getting a good deal.</p>
					</div>
				</div>
				<?php
				if ($insurences) {
					foreach ($insurences as $insurence) {
						?>
						<div class="col-xl-4 col-md-6 col-lg-4 " > 
							<a href="#" class="photo-box photo-category-box small" data-aos="fade-up-right" data-aos-duration="2000" data-background-image="images/job-category-01.jpg">
								<div class="utf-opening-box-content-part" > 
									<div class="utf-category-box-icon-item"> <img src="admin/uploads/<?php echo $insurence['image']; ?>" style="width: 50px;"> </div>
									<h3 style="margin-top: 20px;"><?php echo $insurence['heading']; ?></h3>
									<div style="color: white;margin-top: 10px;"><?php echo $insurence['dcp']; ?></div>
								</div>
							</a> 
						</div>
						<?php

					}
				}
				?>
			</div>
		</div>
	</div>
	<!-- Jobs Categories / End -->  
	<!--  Canadians -->
	<div class="section gradient_item_area padding-top-60 padding-bottom-50"> 
		<div class="container">
			<div class="row" style="display:flex;align-items: center;justify-content: center;">
				<?php
				if ($canadians) {
				    $i=1;
					foreach ($canadians as $canadian) {
					    if($i%2!=0){
						?>
						<div class="col-xl-5" > 
							<div class=" margin-top-0 margin-bottom-40">
								<h3   data-aos="zoom-in-down" data-aos-duration="1000"style="font-size: 27px;font-weight: 800;letter-spacing: 1px;line-height: 30px;"><?php echo $canadian['heading']; ?></h3>
								<p  data-aos="fade-right" data-aos-duration="1000" class="utf-slogan-text" style="margin-top:20px"><?php echo $canadian['dcp']; ?></p>
							</div>
						</div>
						<div class="col-xl-7"> 
							<div class="utf-section-headline-item side_image centered margin-top-0 margin-bottom-40">
								<img  data-aos="fade-left" data-aos-duration="1000" src="admin/uploads/<?php echo $canadian['image']; ?>" style="border-radius: 15px; box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);">
							</div>
						</div>
						<?php } else { ?>
						<div class="col-xl-7"> 
					<div class="utf-section-headline-item  side_imag_wraper centered margin-top-0 margin-bottom-40">
						<img  data-aos="fade-left" data-aos-duration="1000" src="admin/uploads/<?php echo $canadian['image']; ?>" style="border-radius: 15px; box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);">
					</div>
				</div>
				<div class="col-xl-5"> 
					<div class=" margin-top-0 margin-bottom-40">
						<h3   data-aos="zoom-in-down" data-aos-duration="1000"style="font-size: 27px;font-weight: 800;letter-spacing: 1px;line-height: 30px;"><?php echo $canadian['heading']; ?></h3>
						<p  data-aos="fade-right" data-aos-duration="1000" class="utf-slogan-text" style="margin-top:20px"><?php echo $canadian['dcp']; ?></p>
					</div>
				</div>
						<?php
					    }
					    $i++;
					}
				}
				?>
			</div>
		</div>
	</div>  

	<!-- Icon Boxes -->
	<div class="section padding-top-65 padding-bottom-50">
		<div class="container">
			<div class="row">
				
				<div class="col-xl-12"> 
					<div class="utf-section-headline-item centered margin-top-0 margin-bottom-40">
						<h3 data-aos="zoom-in-down" data-aos-duration="1000">How to get the cheapest insurance quote</h3>
						<div class="utf-headline-display-inner-item">cheapest insurance quote</div>
						<p  data-aos="zoom-out-up" data-aos-duration="1000"  class="utf-slogan-text">Four easy steps to compare quotes from 30+ insurance companies in five minutes or less</p>
					</div>
				</div>
				<?php
				if ($insurance_quotes) {
					foreach ($insurance_quotes as $insurance_quote) {
						?>
						<div class="col-xl-3 col-md-6 col-sm-12" data-aos="fade-down" data-aos-duration="1000"> 
							<div class="icon-box with-line" style="height: 355px;" data-aos="zoom-in-down"> 
								<div class="" >
									<div class=""><img src="admin/uploads/<?php echo $insurance_quote['image']; ?>"></div>
								</div>
								<h3 style="margin-top: 35px;"><?php echo $insurance_quote['heading']; ?></h3>
								<p><?php echo $insurance_quote['dcp']; ?></p>
							</div>
						</div>
						<?php

					}
				}
				?>
			</div>
		</div>
	</div>
	<!-- Icon Boxes / End -->

	<!-- Testimonials -->
	<div class="section gray padding-top-65">
		<div class="container">
			<div class="row">
				<div class="col-xl-12"> 
					<div class="utf-section-headline-item centered margin-top-0 margin-bottom-30">
						<h3 data-aos="zoom-in-down" data-aos-duration="1000">We've got hundreds of 5 star reviews</h3>
						<div class="utf-headline-display-inner-item">5 star reviews</div>
						<p data-aos="zoom-out-up" data-aos-duration="1000" class="utf-slogan-text">1,714 reviews on TrustPilot. See some of the reviews here.</p>
					</div>
				</div>
			</div>
		</div>
		<!-- Categories Carousel -->
		<div class="utf-carousel-container-block">
			<div class="utf-testimonial-carousel-block testimonials">  
				<?php
				if ($testeminails) {
					foreach ($testeminails as $testemonail) {
						?>      
						<div class="utf-carousel-review-item">
							<div class="utf-testimonial-box">
								<div class="utf-testimonial-avatar-photo"> <img src="admin/uploads/<?php echo $testemonail['image']; ?>" alt=""> </div>
								<div class="utf-testimonial-author-utf-detail-item">
									<h4><?php echo $testemonail['heading']; ?> </h4>
								</div>
								<div class="testimonial"><?php echo $testemonail['dcp']; ?></div>
								<div>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
								</div>
							</div>
						</div>
						<?php

					}
				}
				?>
			</div>    
		</div>
		<!-- Testimonials / End -->  

		<!-- Logo Carousel -->
		<div class="section gradient_item_area padding-top-60 padding-bottom-50"> 
			<div class="container">
				<div class="row">
					<div class="col-xl-12"> 
						<div class="utf-section-headline-item centered margin-top-0 margin-bottom-40">
							<h3 data-aos="zoom-in-down" data-aos-duration="1000" >COVID-19 Update</h3>
							<div class="utf-headline-display-inner-item">COVID-19 Update</div>
							<p data-aos="zoom-out-up" data-aos-duration="1000" class="utf-slogan-text">These are uncertain times, but one thing that is certain is our commitment to you. As an online business, we’re set up to help you remotely so you can still take care of your insurance decisions.</p>
						</div>	
						<div class="col-md-12">
							<div class="utf-logo-carousel-block">
								<?php
								if ($brands) {
									foreach ($brands as $brand) {
										?>   
										<div class="utf-carousel-logo-item"> <a href="javascript:void(0);"  title="javascript:void(0)"><img src="admin/uploads/<?php echo $brand['image']; ?>" alt=""></a> </div>
										<?php

									}
								}
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

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