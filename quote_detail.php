<?php
require_once("header.php");
?>

<!-- Dashboard Content -->
<div class="utf-dashboard-content-container-aera" data-simplebar>
  <div id="dashboard-titlebar" class="utf-dashboard-headline-item">
    <div class="row">
      <div class="col-xl-12">
        <h3 data-aos="fade-right" data-aos-duration="2000">Quote Detail</h3>
        <nav id="breadcrumbs">
          <ul data-aos="fade-left" data-aos-duration="2000">
            <li><a href="index.php">Home</a></li>
            <li><a href="post.php">Need Insurance</a></li>
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
            <div class="dashboard-box" style="box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);">
              <div class="headline">
                <h3>Quote Detail</h3>
              </div>
              <div class="content with-padding padding-bottom-10">
                <div class="row">
                  <div class="col-xl-6 col-md-6 col-sm-6">
                    <div class="utf-submit-field">
                      <h5>Gross sales of the company</h5>
                      <input type="text" class="utf-with-border" placeholder="Gross sales of the company">
                    </div>
                  </div>
                  <div class="col-xl-6 col-md-6 col-sm-6">
                    <div class="utf-submit-field">
                      <h5>Effective Date</h5>
                      <input type="date" class="utf-with-border" placeholder="Last Name">
                    </div>
                  </div>
                  <div class="col-xl-6 col-md-6 col-sm-6">
                    <div class="utf-submit-field">
                      <h5>Dollar Limit</h5>
                      <input type="text" class="utf-with-border" placeholder="Dollar Limit">
                    </div>
                  </div>
                  <div class="col-xl-6 col-md-6 col-sm-6">
                    <div class="utf-submit-field">
                      <h5>Need by Date</h5>
                      <input type="date" class="utf-with-border" placeholder="Need by Date">
                    </div>
                  </div>
                  <div class="col-xl-6 col-md-6 col-sm-6">
                    <div class="utf-submit-field">
                      <h5>City</h5>
                      <input type="text" class="utf-with-border" placeholder="City">
                    </div>
                  </div>
                  <div class="col-xl-6 col-md-6 col-sm-6">
                    <div class="utf-submit-field">
                      <h5>State</h5>
                      <input type="text" class="utf-with-border" placeholder="State">
                    </div>
                  </div>
                  <!--<div class="col-xl-6 col-md-6 col-sm-6">-->
                  <!--  <div class="utf-submit-field">-->
                  <!--    <h5>Insurance Category</h5>-->
                  <!--    <select class="selectpicker utf-with-border" data-size="7" title="Select Category">-->
                  <!--      <option>Auto insurance </option>-->
                  <!--      <option>Home insurance</option>-->
                  <!--      <option>Counseling</option>-->
                  <!--      <option>Motorbike insurance</option>-->
                  <!--      <option>Life insurance</option>-->
                  <!--      <option>commercial insurance</option>-->
                  <!--      <option>Travel insurance</option>-->
                  <!--      <option>Health insurance</option>-->
                    
                  <!--    </select>-->
                  <!--  </div>-->
                  <!--</div>-->
                  <!--<div class="col-xl-6 col-md-6 col-sm-6">-->
                  <!--  <div class="utf-submit-field">-->
                  <!--    <h5>Location</h5>-->
                  <!--    <div class="utf-input-with-icon">-->
                  <!--      <input class="utf-with-border" type="text" placeholder="Type Address">-->
                  <!--      <i class="icon-material-outline-location-on"></i>-->
                  <!--    </div>-->
                  <!--  </div>-->
                  <!--</div>-->
                  <div class="col-xl-12 col-md-12 col-sm-12">
                    <div class="utf-submit-field">
                      <h5>Upload File</h5>
                      <div class="uploadButton margin-top-15 margin-bottom-30">
                        <input class="uploadButton-input" type="file" accept="image/*, application/pdf" id="upload" multiple />
                        <label class="uploadButton-button ripple-effect" for="upload">Upload Resume</label>
                        <span class="uploadButton-file-name">Upload Resume (Docx, Doc, PDF) File.</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-12 col-md-12 col-sm-12">
                    <div class="utf-submit-field">
                      <h5>Description of Operations</h5>
                      <textarea cols="40" rows="2" class="utf-with-border" placeholder="Career Description..."></textarea>
                    </div>
                  </div>
                  <div class="utf-centered-button">
      <a href="#" class="button utf-ripple-effect-dark utf-button-sliding-icon ">Submit<i class="icon-feather-plus"></i></a>
    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
<?php
require_once("footer.php");
?>