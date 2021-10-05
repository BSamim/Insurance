<?php
  require_once("header.php");
  require_once("sidebar.php");
?> 

<!-- Dashboard Content -->
<div class="utf-dashboard-content-container-aera" data-simplebar>
 <div id="dashboard-titlebar" class="utf-dashboard-headline-item">
  <div class="row">
   <div class="col-xl-12">	
    <h3>My Profile</h3>
    <nav id="breadcrumbs">
     <ul>
       <li><a href="index.php">Home</a></li>
       <li><a href="dashboard.php">Dashboard</a></li>
       <li>My Profile</li>
     </ul>
   </nav>
 </div>
</div>		
</div>
<div class="utf-dashboard-content-inner-aera"> 
  <div class="row"> 
    <div class="col-xl-12">
      <div class="dashboard-box margin-top-0 margin-bottom-30"> 
        <div class="headline">
          <h3>My Profile</h3>
        </div>
        <div class="content with-padding padding-bottom-0">
          <div class="row">
            <div class="col">
              <div class="row">
               <div class="col-xl-12">
                <div class="row">
                 <div class="col-xl-5 col-md-3 col-sm-4">
                  <div class="utf-avatar-wrapper" data-tippy-placement="top" title="Change Profile Picture"> 
                    <img class="profile-pic" src="images/user-avatar-placeholder.png" alt="" />
                    <div class="upload-button"></div>
                    <input class="file-upload" type="file" accept="image/*"/>
                  </div>
                </div>
                <div class="col-xl-7 col-md-9 col-sm-8"> 
                 <div class="utf-submit-field">
                  <h5>Your Name</h5>
                  <input type="text" class="utf-with-border" value="John Williams">
                </div>
                <div class="utf-submit-field">
                  <h5>Phone Number</h5>
                  <input type="text" class="utf-with-border" value="(+22) 1201 123-456">
                </div>
                <div class="utf-submit-field">
                  <h5>Email Address</h5>
                  <input type="text" class="utf-with-border" value="demo@example.com">
                </div>
                <div class="utf-submit-field">
                  <h5>Company name</h5>
                 <input type="text" class="utf-with-border" value="Company name">
                </div>
                <a href="javascript:void(0);" class="button ripple-effect big margin-top-10 margin-bottom-20">Save Changes</a>
              </div>
            </div>
          </div>
        </div>
          </div>	
        </div>
      </div>
      
    </div>
  </div>			
</div>          
</div>

<?php
  require_once("dashboard_footer.php");
?>