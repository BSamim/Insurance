<?php
require_once("header.php");
require_once("sidebar.php");
?>

<!-- Dashboard Content -->
<div class="utf-dashboard-content-container-aera" data-simplebar>
 <div id="dashboard-titlebar" class="utf-dashboard-headline-item">
  <div class="row">
   <div class="col-xl-12">	
    <h3>Dashboard</h3>
    <nav id="breadcrumbs">
     <ul>
       <li><a href="index.php">Home</a></li>
       <li>Dashboard</li>
     </ul>
   </nav>
 </div>
</div>		
</div>
<div class="utf-dashboard-content-inner-aera">   
  <div class="notification success closeable">
    <p>You are Currently Signed in as <strong>John Williams</strong> Has Been Approved!</p>
    <a class="close" href="#"></a> 
  </div>	
  <div class="utf-funfacts-container-aera">
    <div class="fun-fact" data-fun-fact-color="#efa80f">
     <div class="fun-fact-icon"><i class="icon-feather-heart"></i></div>
     <div class="fun-fact-text"> 
      <h4>549</h4>
      <span>Intrested Qoutes</span>
    </div>            
  </div>
  <div class="fun-fact" data-fun-fact-color="#0fc5bf">
    <div class="fun-fact-icon"><i class="icon-brand-telegram-plane"></i></div>
    <div class="fun-fact-text"> 
      <h4>120</h4>
      <span>Active</span>
    </div>            
  </div>
  <div class="fun-fact" data-fun-fact-color="#f02727">
    <div class="fun-fact-icon"><i class="icon-feather-trending-up"></i></div>
    <div class="fun-fact-text"> 
      <h4>2250</h4>
      <span>Inactive</span>
    </div>            
  </div>
</div>

<div class="row">
  <div class="col-xl-12 col-md-12 col-sm-12"> 
    <div class="dashboard-box main-box-in-row">
      <div class="headline">
        <h3>User Statistics</h3>
        <div class="sort-by">
          <select class="selectpicker hide-tick">
           <option>This Week</option>
           <option>This Month</option>
           <option>Last 6 Months</option>                    
           <option>This Year</option>
         </select>
       </div>
     </div>
     <div class="content"> 
      <div class="chart">
        <canvas id="canvas" width="80" height="38"></canvas>
      </div>
    </div>
  </div>            
</div>	
</div>	

<div class="utf-dashboard-footer-spacer-aera"></div>
<div class="utf-small-footer margin-top-15">
  <div class="utf-small-footer-copyrights">Copyright &copy; 2021 All Rights Reserved.</div>
</div>        
</div>
</div>    
<!-- Dashboard Content End -->
</div>
</div>
<!-- Wrapper / End --> 

<!-- Leave a Review for Freelancer Popup -->
<div id="small-dialog" class="zoom-anim-dialog mfp-hide dialog-with-tabs"> 
  <div class="utf-signin-form-part">
    <ul class="utf-popup-tabs-nav-item">
      <li class="modal-title">User Add Notes</li>
    </ul>
    <div class="utf-popup-container-part-tabs"> 
      <div class="utf-popup-tab-content-item" id="tab2"> 
        <form method="post" id="leave-review-form">
          <textarea class="utf-with-border" placeholder="Add Notes" name="message2" id="message2" cols="7" required></textarea>
        </form>
        <button class="button full-width utf-button-sliding-icon ripple-effect" type="submit" form="leave-review-form">Submit Your Note <i class="icon-feather-chevron-right"></i></button>
      </div>
    </div>
  </div>
</div>
<!-- Leave a Review Popup / End -->

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

<!-- documentation: http://www.chartjs.org/docs/latest --> 
<script src="js/chart.min.js"></script>
<script>
  Chart.defaults.global.defaultFontFamily = "Nunito";

  var config = {
   type: 'line',
   data: {
    labels: ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sept", "Oct", "Nov", "Dec"],
    datasets: [{
     label: "View User",
     backgroundColor: 'rgba(255,138,0,0.08)',
     borderColor: '#ff8a00',
     borderWidth: "3",
     data: [799,630,636,644,722,680,799,722,836,644,722,780],
     pointRadius: 4,
     titleFontSize: 18,
     pointHoverRadius: 4,
     pointHitRadius: 10,
     pointBackgroundColor: "#fff",
     pointHoverBackgroundColor: "#fff",
     pointBorderWidth: "3",
   }]
 },
 options: {
  responsive: true,
  tooltips: {
    backgroundColor: '#333',
    titleFontSize: 15,
    titleFontColor: '#fff',
    bodyFontColor: '#fff',
    bodyFontSize: 13,
    displayColors: false,
    xPadding: 10,
    yPadding: 10,
    intersect: false
  },

  legend: { display: false },
  title:  { display: false },

  scales: {
   x: {
    display: true,
    scaleLabel: {
     display: true,
     labelString: 'Month'
   }
 },
 y: {
  type: 'category',
  position: 'left',
  display: true,
  scaleLabel: {
   display: true,
   labelString: 'Request State'
 },
 reverse: true
}
}
}
};

window.onload = function() {
	var ctx = document.getElementById('canvas').getContext('2d');
	window.myLine = new Chart(ctx, config);
};
</script>
</body>
</html>