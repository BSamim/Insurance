<?php
require_once("header.php");
require_once("sidebar.php");
$queryToGetSubsc="SELECT * FROM subscription";
$data = db::getRecords($queryToGetSubsc);
?>
<style>
.Zebra_DatePicker .dp_daypicker th {
  background: #FFCC33;
}
.pricing_list{
  list-style-type: none;
  margin: 0;
  padding: 0;
}
.icon-box:hover .pricing_list>li, .icon-box:hover .price{
  color: #fff;

}
</style>

<!-- Dashboard Content -->
<div class="utf-dashboard-content-container-aera" data-simplebar>
 <div id="dashboard-titlebar" class="utf-dashboard-headline-item">
  <div class="row">
   <div class="col-xl-12">	
    <h3>Subscription</h3>
    <nav id="breadcrumbs">
     <ul>
       <li><a href="index.php">Home</a></li>

       <li>Subscription</li>
     </ul>
   </nav>
 </div>
</div>		
</div>	
<div class="utf-dashboard-content-inner-aera"> 
  <div class="section padding-top-65 padding-bottom-50">
    <div class="container">
      <div class="row">
        <div class="col-xl-12"> 
          <div class="utf-section-headline-item centered margin-top-0 margin-bottom-40">
            <h3 data-aos="zoom-in-down" data-aos-duration="1000">Our Subscription plans</h3>
            <div class="utf-headline-display-inner-item">Subscription</div>
            <p  data-aos="zoom-out-up" data-aos-duration="1000"  class="utf-slogan-text">Four easy steps to compare quotes from 30+ insurance companies in five minutes or less</p>
          </div>
        </div>
        <?php
        if ($data) {
          foreach ($data as $row) {
        ?>
        <div class="col-xl-4 col-md-6 col-sm-12" data-aos="fade-down" data-aos-duration="1000"> 
          <div class="icon-box with-line" data-aos="zoom-in-down"> 
            <div class="" >
              <div class=""><img src="../admin/uploads/<?php echo $row['image']?>"></div>
            </div>
            <h3 style="margin-top: 35px;"><?php echo $row['heading']?></h3>
            <h4 style="margin:13px 0;" class="price"><?php echo $row['price']?>$</h2>
            <p><?php echo $row['dcp']?></p>
            <div class="utf-centered-button " style="margin-top:15px;">
              <a href="#" class="button utf-ripple-effect-dark utf-button-sliding-icon margin-top-0">Buy  Now<i class="icon-feather-plus"></i></a>      
            </div>
          </div>
        </div>
        <?php 
          }
        }
        ?>
        <!-- <div class="col-xl-4 col-md-6 col-sm-12" data-aos="fade-up" data-aos-duration="1000"> 
          <div class="icon-box" data-aos="zoom-in-up"> 
            <div class="">
              <div class=""><div class=""><img src="images/7.png"></div></div>
            </div>
            <h3 style="margin-top: 30px;">Lorem ipsum Plan Two</h3>
            <h2 style="margin:13px 0;" class="price">20$</h2>
            <ul class="pricing_list">
              <li>lorem ipsum doller sit amit</li>
              <li>lorem ipsum doller sit amit</li>
              <li>lorem ipsum doller sit amit</li>
              <li>lorem ipsum doller sit amit</li>
            </ul>
            <div class="utf-centered-button " style="margin-top:15px;">
              <a href="#" class="button utf-ripple-effect-dark utf-button-sliding-icon margin-top-0">Buy  Now<i class="icon-feather-plus"></i></a>      
            </div>
           
          </div>
        </div>
        <div class="col-xl-4 col-md-6 col-sm-12"  data-aos="fade-right" data-aos-duration="1000"> 
          <div class="icon-box"  data-aos="flip-left" data-aos-duration="1000" > 
            <div class="">
              <div class=""><div class=""><img src="images/8.png"></div></div>
            </div>
            <h3 style="margin-top: 14px;">Lorem ipsum Plan three</h3>
            <h2 style="margin:13px 0;" class="price">30$</h2>
            <ul class="pricing_list">
              <li>lorem ipsum doller sit amit</li>
              <li>lorem ipsum doller sit amit</li>
              <li>lorem ipsum doller sit amit</li>
              <li>lorem ipsum doller sit amit</li>
            </ul>
            <div class="utf-centered-button " style="margin-top:15px;">
              <a href="#" class="button utf-ripple-effect-dark utf-button-sliding-icon margin-top-0">Buy  Now<i class="icon-feather-plus"></i></a>      
            </div>
          </div>
        </div> -->
      </div>
    </div>
  </div>
</div>

<?php
require_once("dashboard_footer.php");
?>