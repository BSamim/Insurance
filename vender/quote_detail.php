<?php
require_once("header.php");
require_once("sidebar.php");
?>

<!-- Dashboard Content -->
<div class="utf-dashboard-content-container-aera" data-simplebar>
 <div id="dashboard-titlebar" class="utf-dashboard-headline-item">
  <div class="row">
   <div class="col-xl-12">	
    <h3>Quote Detail</h3>
    <nav id="breadcrumbs">
     <ul>
       <li><a href="index.php">Home</a></li>
       <li><a href="dashboard.php">Dashboard</a></li>
       <li>Quote Detail</li>
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
              <h3>Quote Detail</h3>
            </div>
            <div class="content with-padding padding-bottom-10">
              <div class="row">
                <div class="col-xl-6 col-md-6 col-sm-6">
                  <div class="utf-submit-field">
                    <h5>First Name</h5>
                    <input type="text" class="utf-with-border" placeholder="First Name">
                  </div>
                </div>
                <div class="col-xl-6 col-md-6 col-sm-6">
                  <div class="utf-submit-field">
                    <h5>Last Name</h5>
                    <input type="text" class="utf-with-border" placeholder="Last Name">
                  </div>
                </div>
                <div class="col-xl-6 col-md-6 col-sm-6">
                  <div class="utf-submit-field">
                    <h5>Email Address</h5>
                    <input type="email" class="utf-with-border" placeholder="Email Address">
                  </div>
                </div>
                <div class="col-xl-6 col-md-6 col-sm-6">
                  <div class="utf-submit-field">
                    <h5>Phone Number</h5>
                    <input type="text" class="utf-with-border" placeholder="Phone Number">
                  </div>
                </div>
                <div class="col-xl-6 col-md-6 col-sm-6">
                  <div class="utf-submit-field">
                    <h5>Job Category</h5>
                    <select class="selectpicker utf-with-border" data-size="7" title="Select Category">
                      <option>Accounting and Finance</option>
                      <option>Clerical & Data Entry</option>
                      <option>Counseling</option>
                      <option>Court Administration</option>
                      <option>Human Resources</option>
                      <option>Investigative</option>
                      <option>IT and Computers</option>
                      <option>Law Enforcement</option>
                      <option>Management</option>
                      <option>Miscellaneous</option>
                      <option>Public Relations</option>
                    </select>
                  </div>
                </div>
                <div class="col-xl-6 col-md-6 col-sm-6">
                  <div class="utf-submit-field">
                    <h5>Location</h5>
                    <div class="utf-input-with-icon">
                      <input class="utf-with-border" type="text" placeholder="Type Address">
                      <i class="icon-material-outline-location-on"></i> 
                    </div>
                  </div>
                </div>
                <div class="col-xl-12 col-md-12 col-sm-12">
                  <div class="utf-submit-field">
                    <h5>Upload Resume</h5>
                    <div class="uploadButton margin-top-15 margin-bottom-30">
                      <input class="uploadButton-input" type="file" accept="image/*, application/pdf" id="upload" multiple/>
                      <label class="uploadButton-button ripple-effect" for="upload">Upload Resume</label>
                      <span class="uploadButton-file-name">Upload Resume (Docx, Doc, PDF) File.</span> 
                    </div>                      
                  </div>
                </div>
                <div class="col-xl-12 col-md-12 col-sm-12">
                  <div class="utf-submit-field">
                    <h5>Description</h5>
                    <textarea cols="40" rows="2" class="utf-with-border" placeholder="Career Description..."></textarea>                    
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
    <a href="#" class="button utf-ripple-effect-dark utf-button-sliding-icon margin-top-0">Submit<i class="icon-feather-plus"></i></a>			
  </div>

 <?php
  require_once("dashboard_footer.php");
?>