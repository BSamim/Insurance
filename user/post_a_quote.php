<?php
  require_once("header.php");
  require_once("sidebar.php");
?>

<!-- Dashboard Content -->
<div class="utf-dashboard-content-container-aera" data-simplebar>
 <div id="dashboard-titlebar" class="utf-dashboard-headline-item">
  <div class="row">
   <div class="col-xl-12">	
    <h3>Post a Quote</h3>
    <nav id="breadcrumbs">
     <ul>
       <li><a href="index.php">Home</a></li>
       <li><a href="dashboard.php">Dashboard</a></li>
       <li>Post a Quote</li>
     </ul>
   </nav>
 </div>
</div>		
</div>	
<div class="utf-dashboard-content-inner-aera"> 
  <div class="row"> 
    <div class="col-xl-12">
      <!-- About List Start --> 
      <div class="section margin-top-65 padding-bottom-55">
       <div class="container">
        <div class="row">
          <div class="col-xl-12 col-md-12">
            <div class="utf-section-headline-item  margin-top-0 margin-bottom-40">
              <h3>Our Vision & Mission</h3>
              <div class="utf-headline-display-inner-item">Vision & Mission</div>
            </div>
            <p>Lorem Ipsum is simply dummy text of printing and type setting industry. Lorem Ipsum been industry standard dummy text ever since, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions.</p>
            <blockquote class="margin-top-20 margin-bottom-20">Lorem Ipsum is simply dummy text of printing and type setting industry. Lorem Ipsum been industry standard dummy text ever since, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the with the release of Letraset sheets containing Lorem Ipsum passages.</blockquote>
            <ul class="list-2">
             <li>Morbi mattis ullamcorper velit. Phasellus gravida semper nisi nullam vel sem.</li>
             <li>Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet.</li>
             <li>Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus.</li>
             <li>Donec mollis hendrerit risus. Phasellus nec sem in justo pellentesque facilisis.</li>
           </ul>
         </div>          
       </div>
     </div>
   </div>
   <!-- About List End --> 
 </div>	
</div>
<div class="utf-centered-button">
  <a href="quote_detail.php" class="button utf-ripple-effect-dark utf-button-sliding-icon margin-top-0">Enter Quote Detail<i class="icon-feather-plus"></i></a>			
</div>

<?php
  require_once("dashboard_footer.php");
?>