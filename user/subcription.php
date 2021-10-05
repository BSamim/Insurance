<?php
require_once("header.php");
require_once("sidebar.php");
?>
<style>
    .Zebra_DatePicker .dp_daypicker th {
    background: #FFCC33;
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
  <div class="row"> 
    <div class="col-xl-12">
      <div class="row"> 
        <div class="col-xl-12">
          <div class="dashboard-box"> 
            <div class="headline">
              <h3>Subscription</h3>
            </div>
            <div class="content with-padding padding-bottom-10">
              <div class="row">
                
                <div class="col-xl-6 col-md-6 col-sm-6">
                  <div class="utf-submit-field">
                    <h5>Name</h5>
                    <input type="text" class="utf-with-border" placeholder="Name">
                  </div>
                </div>
                <div class="col-xl-6 col-md-6 col-sm-6">
                  <div class="utf-submit-field">
                    <h5>Price</h5>
                    <input type="text" class="utf-with-border" placeholder="Price">
                  </div>
                </div>

                <div class="col-xl-12 col-md-12 col-sm-12">
                  <div class="utf-submit-field">
                    <h5>Duration</h5>
                    <input type="text" class="utf-with-border" placeholder="Duration">
                  </div>
                </div>
                 
                
                 
                 
                 
                
               
                
                <div class="col-xl-12 col-md-12 col-sm-12">
                  <div class="utf-submit-field">
                    <h5>Description</h5>
                    <textarea cols="40" rows="2" class="utf-with-border" placeholder=""></textarea>                    
                  </div>
                </div>
              </div>
            </div>        
          </div>
        </div>  

      </div>
    </div>	
  </div>
  <div class="utf-centered-button">
    <a href="#" class="button utf-ripple-effect-dark utf-button-sliding-icon margin-top-0">Buy  Now<i class="icon-feather-plus"></i></a>			
  </div>

 <?php
  require_once("dashboard_footer.php");
?>