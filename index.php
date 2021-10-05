<?php require_once("header.php");?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.checked {
	color: orange;
}
/*.icon-box {
    box-shadow: 0 2px 20px rgb(0 0 0 / 12%);
}*/

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
							<option>Bussiness Insurance</option>
							<option>Ontario Liabilit insurance</option>
							<option>Ontario small bussiness insurance</option>
							<option>Life insurance</option>
							<option>Home insurance</option>
							<option>Motorcycle insurance</option>
							<option>Travel insurance</option>
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
				<div class="col-xl-4 col-md-6 col-lg-4 " > 
					<a href="#" class="photo-box photo-category-box small" data-aos="fade-up-right" data-aos-duration="2000" data-background-image="images/job-category-01.jpg">
						<div class="utf-opening-box-content-part" > 
							<div class="utf-category-box-icon-item"> <img src="images/9.png" style="width: 80px;"> </div>
							<h3 style="margin-top: 20px;">SAVE MONEY</h3>
							<div style="color: white;margin-top: 10px;">Get a quote that is 26% less than<br> the average market rate.</div>
						</div>
					</a> 
				</div>
				<div class="col-xl-4 col-md-6 col-lg-4"> 
					<a href="#" class="photo-box photo-category-box small" data-aos="fade-down" data-aos-duration="2000" data-background-image="images/job-category-02.jpg">
						<div class="utf-opening-box-content-part">
							<div class="utf-category-box-icon-item"> <img src="images/10.png" style="width: 80px;"> </div>
							<h3 style="margin-top: 20px;">SAVE TIME</h3>
							<div style="color: white;margin-top: 10px;">All it takes is a few minutes to compare<br> quotes from our network of over 30 insurers.</div>
						</div>
					</a> 
				</div>
				<div class="col-xl-4 col-md-6 col-lg-4"> 
					<a href="#" class="photo-box photo-category-box small" data-aos="fade-up-left" data-aos-duration="2000" data-background-image="images/job-category-03.jpg">
						<div class="utf-opening-box-content-part">
							<div class="utf-category-box-icon-item"> <img src="images/11.png" style="width: 80px;"> </div>
							<h3 style="margin-top: 20px;">THERE'S NO COST TO YOU</h3>
							<div style="color: white;margin-top: 10px;">There’s no catch or fine print; our service is<br> absolutely free for you to use.</div>
						</div>
					</a> 
				</div>
				<div class="col-xl-4 col-md-6 col-lg-4" > 
					<a href="#" class="photo-box photo-category-box small" data-background-image="images/job-category-06.jpg" data-aos="fade-up-right" data-aos-duration="2000">
						<div class="utf-opening-box-content-part">
							<div class="utf-category-box-icon-item"> <img src="images/12.png" style="width: 80px;"> </div>
							<h3 style="margin-top: 20px;">IT'S EASY AND QUICK</h3>
							<div style="color: white;margin-top: 10px;">Tell us a little about yourself and your car<br> in three easy steps. That’s really all there is to it!</div>
						</div>
					</a> 
				</div>
				<div class="col-xl-4 col-md-6 col-lg-4"> 
					<a href="#" class="photo-box photo-category-box small" data-background-image="images/job-category-07.jpg" data-aos="fade-up" data-aos-duration="2000">
						<div class="utf-opening-box-content-part">
							<div class="utf-category-box-icon-item"> <img src="images/13.png" style="width: 40px;"> </div>
							<h3 style="margin-top: 20px;">YOUR INFORMATION IS SAFE</h3>
							<div style="color: white;margin-top: 10px;">Your details are secure. Look for a <br>locked padlock in your browser as well as https.</div>
						</div>
					</a> 
				</div>
				<div class="col-xl-4 col-md-6 col-lg-4"> 
					<a href="#" class="photo-box photo-category-box small" data-aos="fade-up-left" data-aos-duration="1000" data-background-image="images/job-category-08.jpg">
						<div class="utf-opening-box-content-part">
							<div class="utf-category-box-icon-item"> <img src="images/14.png" style="width: 40px;"> </div>
							<h3 style="margin-top: 20px;">WE RESPECT YOUR PRIVACY</h3>
							<div style="color: white;margin-top: 10px;">Your privacy is important to us and we <br>never share your details without your consent.</div>
						</div>
					</a> 
				</div>
			</div>
		</div>
	</div>
	<!-- Jobs Categories / End -->  
	<!--  Canadians -->
	<div class="section gradient_item_area padding-top-60 padding-bottom-50"> 
		<div class="container">
			<div class="row" style="display:flex;align-items: center;justify-content: center;">
				<div class="col-xl-5" > 
					<div class=" margin-top-0 margin-bottom-40">
						<h3   data-aos="zoom-in-down" data-aos-duration="1000"style="font-size: 27px;font-weight: 800;letter-spacing: 1px;line-height: 30px;">Canadians save millions<br> year after year</h3>
						<p  data-aos="fade-right" data-aos-duration="1000" class="utf-slogan-text" style="margin-top:20px">There are many ways to save on your insurance premiums, but none are more effective than shopping around. With auto insurance, for example, drivers saved over $4.4 million in premiums last year alone by comparing quotes with InsuranceHotline.com.</p>
						<p  data-aos="fade-up" data-aos-duration="1000" class="utf-slogan-text">Whether you’re looking to pay less for your auto insurance, home insurance, or maybe you’re going on a trip and need travel insurance; getting insurance quotes at InsuranceHotline.com is as simple as 1, 2, 3.</p>
					</div>
				</div>
				<div class="col-xl-7"> 
					<div class="utf-section-headline-item side_image centered margin-top-0 margin-bottom-40">
						<img  data-aos="fade-left" data-aos-duration="1000" src="images/download1.jpg" style="border-radius: 15px; box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);">
					</div>
				</div>
			</div>
		</div>
	</div>  

	<!-- Icon Boxes -->

	<!--  Canadians -->
	<div class="section gradient_item_area padding-top-60 padding-bottom-50"> 
		<div class="container">
			<div class="row" style="display:flex;align-items: center;justify-content: center;">
				<div class="col-xl-7"> 
					<div class="utf-section-headline-item  side_imag_wraper centered margin-top-0 margin-bottom-40">
						<img data-aos="fade-right" data-aos-duration="1000" src="images/download2.png" style="border-radius: 15px; box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);">
					</div>
				</div>
				<div class="col-xl-5"> 
					<div class=" margin-top-0 margin-bottom-40">
						<h3 data-aos="zoom-in-down" data-aos-duration="1000" style="font-size: 27px;font-weight: 800;letter-spacing: 1px;line-height: 30px;">Comparison shopping can<br> help you save!</h3>
						<p data-aos="fade-left" data-aos-duration="1000" class="utf-slogan-text" style="margin-top:20px">Insurance rates are always changing. Take car insurance, for example. In many provinces, rates change every three months. Car insurance companies typically apply to their respective regulating board to have their rates either increased or decreased. This means that even if you were getting the best rate two years ago, you might not be getting the best rate today. It's just the nature of the car insurance industry, which is why these same regulating boards recommend drivers shop around and compare rates from at least three different car insurance companies before purchasing a policy. </p>
						<p data-aos="fade-up" data-aos-duration="1000" class="utf-slogan-text">At InsuranceHotline.com, we take this one step further by empowering you to compare rates from more than 30 of Canada's leading car insurance providers in the time it would take to get just one quote. Millions of Canadians have saved money this way. Find out how much you can save by <a href="#">comparing rates today.</a></p>
					</div>
				</div>
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
				<div class="col-xl-3 col-md-6 col-sm-12" data-aos="fade-right" data-aos-duration="1000"> 
					<div  data-aos="flip-left" data-aos-duration="1000" class="icon-box with-line" style="height: 355px;"> 
						<div class="">
							<select class="form-control" name="cars" id="cars">
								<option >Province</option>
								<option >Alberta</option>
								<option >Ontario</option>
								<option >Quebec</option>
							</select>
						</div>
						<h3  style="margin-top: 60px;">Select Your Province</h3>
						<p>Select your province to begin!</p>
					</div>
				</div>
				<div class="col-xl-3 col-md-6 col-sm-12" data-aos="fade-down" data-aos-duration="1000"> 
					<div class="icon-box with-line" style="height: 355px;" data-aos="zoom-in-down"> 
						<div class="" >
							<div class=""><img src="images/6.png"></div>
						</div>
						<h3 style="margin-top: 35px;">Enter Driver Details</h3>
						<p>Tell us a little bit about your vehicle, driving & car insurance history.</p>
					</div>
				</div>
				<div class="col-xl-3 col-md-6 col-sm-12" data-aos="fade-up" data-aos-duration="1000"> 
					<div class="icon-box" style="height: 355px;" data-aos="zoom-in-up"> 
						<div class="">
							<div class=""><div class=""><img src="images/7.png"></div></div>
						</div>
						<h3 style="margin-top: 30px;">Compare Your Quotes</h3>
						<p>Compare your car insurance quotes from more than 30 top insurance companies.</p>
					</div>
				</div>
				<div class="col-xl-3 col-md-6 col-sm-12"  data-aos="fade-right" data-aos-duration="1000"> 
					<div class="icon-box" style="height: 355px;" data-aos="flip-left" data-aos-duration="1000" > 
						<div class="">
							<div class=""><div class=""><img src="images/8.png"></div></div>
						</div>
						<h3 style="margin-top: 14px;">Pick Your Policy</h3>
						<p>Pick the insurance policy that's right for you to connect directly with the insurance professional of your choice.</p>
						<a href="#" class="button utf-ripple-effect-dark utf-button-sliding-icon margin-top-0">Get Quotes Now <i class="icon-feather-chevron-right"></i></a>
					</div>
				</div>
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
				<div class="utf-carousel-review-item">
					<div class="utf-testimonial-box">
						<div class="utf-testimonial-avatar-photo"> <img src="images/user_small_1.jpg" alt=""> </div>
						<div class="utf-testimonial-author-utf-detail-item">
							<h4>Regent </h4>
						</div>
						<div class="testimonial">Good experience and service.</div>
						<div>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
						</div>
					</div>
				</div>
				<div class="utf-carousel-review-item">
					<div class="utf-testimonial-box">
						<div class="utf-testimonial-avatar-photo"> <img src="images/user_small_2.jpg" alt=""> </div>
						<div class="utf-testimonial-author-utf-detail-item">
							<h4>Agent was very helpful and…</h4>
						</div>
						<div class="testimonial">Agent was very helpful and knowledgeable!</div>
						<div>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star"></span>
						</div>
					</div>
				</div>
				<div class="utf-carousel-review-item">
					<div class="utf-testimonial-box">
						<div class="utf-testimonial-avatar-photo"> <img src="images/user_small_2.jpg" alt=""> </div>
						<div class="utf-testimonial-author-utf-detail-item">
							<h4>Excellent service</h4>
						</div>
						<div class="testimonial">Excellent service. Directed to a broker, that saved me $$$. Make certain you list any associations, schools, or employee groups to access discounts. CAA may help some. Teri did a fantastic job.</div>
						<div>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
						</div>
					</div>
				</div>
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
								<div class="utf-carousel-logo-item"> <a href="javascript:void(0);"  title="javascript:void(0)"><img src="images/1.png" alt=""></a> </div>
								<div class="utf-carousel-logo-item"> <a href="javascript:void(0);"  title="javascript:void(0)"><img src="images/2.png" alt=""></a> </div>
								<div class="utf-carousel-logo-item"> <a href="javascript:void(0);"  title="javascript:void(0)"><img src="images/3.png" alt=""></a> </div>
								<div class="utf-carousel-logo-item"> <a href="javascript:void(0);"  title="javascript:void(0)"><img src="images/4.png" alt=""></a> </div>
								<div class="utf-carousel-logo-item"> <a href="javascript:void(0);"  title="javascript:void(0)"><img src="images/5.png" alt=""></a> </div>
								<div class="utf-carousel-logo-item"> <a href="javascript:void(0);"  title="javascript:void(0)"><img src="images/1.png" alt=""></a> </div>
								<div class="utf-carousel-logo-item"> <a href="javascript:void(0);"  title="javascript:void(0)"><img src="images/2.png" alt=""></a> </div>
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