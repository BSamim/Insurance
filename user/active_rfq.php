<?php
require_once("header.php");
require_once("sidebar.php");
require_once("../database.php");
$date = date("Y-m-d");
//Read Data
$queryToGetActiveQuotes = "SELECT * FROM quotes WHERE effective_date >= '$date'";
$results = db::getRecords($queryToGetActiveQuotes);
?>

<!-- Dashboard Content -->
<div class="utf-dashboard-content-container-aera" data-simplebar>
  <div id="dashboard-titlebar" class="utf-dashboard-headline-item">
    <div class="row">
      <div class="col-xl-12">
        <h3>Active Quotes</h3>
        <nav id="breadcrumbs">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li>Active Quotes</li>
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
            <h3>Active Quote List</h3>
          </div>
          <div class="content">
            <ul class="utf-dashboard-box-list">
              <?php
              if ($results) {
                foreach ($results as $result) {
              ?>
                  <li>
                    <div class="utf-job-listing width-adjustment">
                      <div class="utf-job-listing-details">
                        <div class="utf-job-listing-description">
                          <h3 class="utf-job-listing-title"><a href="#"><?php echo $result['business_name']; ?></a></h3>
                          <div class="utf-job-listing-footer">
                            <ul>
                              <li><i class="icon-material-outline-date-range"></i><?php echo $result['time_stamp']; ?></li>
                              <li><i class="icon-feather-briefcase"></i><?php echo $result['business_type']; ?></li>
                              <li><i class="icon-material-outline-location-on"></i><?php echo $result['city']; ?>, <?php echo $result['state']; ?></li>
                            </ul>
                            <a href="">Document.pdf</a>
                            <p><?php echo $result['description']; ?></p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <ul class="dashboard-task-info">
                      <li><a href="chat.php"><span>Chat</span></a></li>
                      <li><span><?php echo $result['effective_date']; ?></span></li>
                    </ul>
                    <div class="utf-buttons-to-right">
                      <a href="#small-dialog" class="popup-with-zoom-anim button green ripple-effect ico" title="Edit Bids" data-tippy-placement="top"><i class="icon-feather-edit"></i></a>
                      <a href="#" class="button red ripple-effect ico" title="Remove Bids" data-tippy-placement="top"><i class="icon-feather-trash-2"></i></a>
                    </div>
                  </li>
              <?php
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
                  <a href="#small-dialog" class="popup-with-zoom-anim button green ripple-effect ico" title="Edit Bids" data-tippy-placement="top"><i class="icon-feather-edit"></i></a>
                  <a href="#" class="button red ripple-effect ico" title="Remove Bids" data-tippy-placement="top"><i class="icon-feather-trash-2"></i></a>
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
                  <a href="#small-dialog" class="popup-with-zoom-anim button green ripple-effect ico" title="Edit Bids" data-tippy-placement="top"><i class="icon-feather-edit"></i></a>
                  <a href="#" class="button red ripple-effect ico" title="Remove Bids" data-tippy-placement="top"><i class="icon-feather-trash-2"></i></a>
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