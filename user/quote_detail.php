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

    <form action="user_action.php" method="POST" enctype="multipart/form-data">
      <div class="row">
        <div class="col-xl-12">
          <div class="row">
            <div class="col-xl-12">
              <div class="dashboard-box">
                <div class="headline">
                  <h3>Request for Appetite</h3>
                </div>
                <div class="content with-padding padding-bottom-10">
                  <div class="row">

                    <div class="col-xl-6 col-md-6 col-sm-6">
                      <div class="utf-submit-field">
                        <h5>Business Name</h5>
                        <input type="text" name="business_name" required class="utf-with-border" placeholder="Business Name">
                      </div>
                    </div>
                    <div class="col-xl-6 col-md-6 col-sm-6">
                      <div class="utf-submit-field">
                        <h5>Effective Date</h5>
                        <input type="date" name="effective_date" required class="utf-with-border" placeholder="Date">
                      </div>
                    </div>
                    <div class="col-xl-6 col-md-6 col-sm-6">
                      <div class="utf-submit-field">
                        <h5>Gross sales of the company</h5>
                        <input type="text" name="gross_sales" required class="utf-with-border" placeholder="Annual Sales USD">
                      </div>
                    </div>
                    <div class="col-xl-6 col-md-6 col-sm-6">
                      <div class="utf-submit-field">
                        <h5>Type of Business</h5>
                        <input type="text" name="business_type" required class="utf-with-border" placeholder="IE:Oil and Gass, Habitational, Construction">
                      </div>
                    </div>
                    
                    <div class="col-xl-6 col-md-6 col-sm-6">
                      <div class="utf-submit-field">
                        <h5>City </h5>
                        <input type="text" name="city" required class="utf-with-border" placeholder="City">
                      </div>
                    </div>
                    <div class="col-xl-6 col-md-6 col-sm-6">
                      <div class="utf-submit-field">
                        <h5> State</h5>
                        <input type="text" name="state" required class="utf-with-border" placeholder=" State">
                      </div>
                    </div>


                    <div class="col-xl-12 col-md-12 col-sm-6">
                      <div class="utf-submit-field">
                        <h5> Coverages</h5>
                        <select name="insurance_type" required class="form-control">
                          <option>Auto</option>
                          <option>Gt</option>
                          <option>WC</option>
                          <option>Property</option>
                          <option>Umberella</option>
                          <option>Management Liability</option>
                          <option>Inland Marine</option>
                          <option>Control of well</option>
                          <option>Cyber</option>
                          <option>Pollution</option>
                        </select>
                      </div>
                    </div>


                    <div class="col-xl-12 col-md-12 col-sm-12">
                      <div class="utf-submit-field">
                        <h5>Upload Attachment</h5>
                        <div class="uploadButton margin-top-15 margin-bottom-30">
                          <input class="uploadButton-input" required name="file" type="file" accept="image/*, application/pdf" id="upload" multiple />
                          <label class="uploadButton-button ripple-effect" for="upload">Upload Attachment</label>
                          <span class="uploadButton-file-name">Upload Attachment</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-12 col-md-12 col-sm-12">
                      <div class="utf-submit-field">
                        <h5>Key Underwriting Information</h5>
                        <textarea cols="40" name="description" rows="2" class="utf-with-border" placeholder="Enter Details"></textarea>
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
        <button type="submit" name="get_quote" class="button utf-ripple-effect-dark utf-button-sliding-icon margin-top-0">Submit<i class="icon-feather-plus"></i></button>
      </div>

    </form>

    <?php
    require_once("dashboard_footer.php");
    ?>