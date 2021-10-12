<?php
require_once("header.php");
require_once("sidebar.php");
$_id = $_SESSION['ins_vendor_id'];
//Get Interested Quote ID
$queryToGetInterestedQuoteId = "SELECT * FROM interested_quotes WHERE vendor_id = '$_id'";
$data = db::getRecords($queryToGetInterestedQuoteId);
?>
<style>
  .utf-buttons-to-right {
    opacity: 1;
  }
</style>

<!-- Dashboard Content -->
<div class="utf-dashboard-content-container-aera" data-simplebar>
  <div id="dashboard-titlebar" class="utf-dashboard-headline-item">
    <div class="row">
      <div class="col-xl-12">
        <h3>Post Forum</h3>
        <nav id="breadcrumbs">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li>Post Forum</li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
  <div class="utf-dashboard-content-inner-aera">
    <div class="row">
      <div class="col-xl-12">
        <div class="dashboard-box margin-top-0">
          <div class="headline">
            <h3>Posts</h3>
          </div>
          <div class="content">
            <ul class="utf-dashboard-box-list">
              <?php
              $Interested_quote_id = '';
              if ($data) {
                foreach ($data as $row) {
                  $Interested_quote_id = $row['quote_id'];
                  //Read Data
                  $queryToGetInterestedQuotes = "SELECT * FROM quotes WHERE id = '$Interested_quote_id'";
                  $result = db::getRecord($queryToGetInterestedQuotes);
                  if($result){
              ?>
                  <li>
                    <div class="utf-job-listing width-adjustment">
                      <div class="utf-job-listing-details">
                        <div class="utf-job-listing-description">
                          <h3 class="utf-job-listing-title"><a href="#"><?php echo $result['business_name']; ?></a></h3>
                          <div class="utf-job-listing-footer">
                            <ul>
                              <li><i class="icon-line-awesome-tasks"></i><?php echo $result['insurance_type']; ?></li>
                              <li><i class="icon-material-outline-date-range"></i><?php echo $result['time_stamp']; ?></li>
                              <li><i class="icon-feather-briefcase"></i><?php echo $result['business_type']; ?></li>
                              <li><i class="icon-material-outline-location-on"></i><?php echo $result['city']; ?>, <?php echo $result['state']; ?></li>
                              <li><i class="icon-line-awesome-dollar"></i><?php echo $result['gross_sales']; ?></li>
                            </ul>
                            <a href="files/<?php echo $result['file']; ?>" download>Download Attachment</a>
                            <p><?php echo $result['description']; ?></p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <ul class="dashboard-task-info">
                      <li><a href="chat.php"><span>Chat</span></a></li>
                    </ul>
                    <ul class="dashboard-task-info">
                      <li><span><b>Effective Date: </b><?php echo $result['effective_date']; ?></span></li>
                    </ul>
                    <div class="utf-buttons-to-right">
                      <a href="vendor_action.php?remove_interested_quote_liked=<?php echo $result['id']; ?>&vendor=<?php echo $_id; ?>" class="button red ripple-effect ico" title="Interested" data-tippy-placement="top"><i class="icon-material-outline-favorite"></i></a>
                    </div>
                  </li>
              <?php
                  }
                }
              }
              ?>
              <!-- <li>
                <div class="utf-job-listing width-adjustment">
                  <div class="utf-job-listing-details">
                    <div class="utf-job-listing-description">
                      <h3 class="utf-job-listing-title"><a href="#">Commercial Insurance</a></h3>
                      <div class="utf-job-listing-footer">
                        <ul>
                          <li><i class="icon-material-outline-date-range"></i> 12 Jan, 2021 12:30 PM</li>
                          <li><i class="icon-feather-briefcase"></i> Commercial Insurance</li>
                          <li><i class="icon-material-outline-location-on"></i> 2767 Concord Street, Charlotte</li>
                        </ul>
                        <a href="">Document.pdf</a>
                        <p>Switching car insurance companies is a great way to help you get the most for your money.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <ul class="dashboard-task-info">
                  <li><a href="chat.php"><span>Chat</span></a></li>
                  <li><span>Efected Date</span></li>
                </ul>
                <div class="utf-buttons-to-right">
                  <a href="#" class="button red ripple-effect ico" title="Interested" data-tippy-placement="top"><i class="icon-material-outline-favorite"></i></a>
                </div>
              </li>
              <li>
                <div class="utf-job-listing width-adjustment">
                  <div class="utf-job-listing-details">
                    <div class="utf-job-listing-description">
                      <h3 class="utf-job-listing-title"><a href="#">Commercial Insurance</a></h3>
                      <div class="utf-job-listing-footer">
                        <ul>
                          <li><i class="icon-material-outline-date-range"></i> 12 Jan, 2021 12:30 PM</li>
                          <li><i class="icon-feather-briefcase"></i> Commercial Insurance</li>
                          <li><i class="icon-material-outline-location-on"></i> 2767 Concord Street, Charlotte</li>
                        </ul>
                        <a href="">Document.pdf</a>
                        <p>Switching car insurance companies is a great way to help you get the most for your money.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <ul class="dashboard-task-info">
                  <li><a href="chat.php"><span>Chat</span></a></li>
                  <li><span>Efected Date</span></li>
                </ul>
                <div class="utf-buttons-to-right">
                  <a href="#" class="button red ripple-effect ico" title="Interested" data-tippy-placement="top"><i class="icon-material-outline-favorite"></i></a>
                </div>
              </li> -->
            </ul>
          </div>
        </div>
      </div>
    </div>

    <?php
    require_once("dashboard_footer.php");
    ?>