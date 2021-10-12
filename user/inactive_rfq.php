<?php
require_once("header.php");
require_once("sidebar.php");
//Read Data
$queryToGetActiveQuotes = "SELECT * FROM quotes WHERE quote_status = 'inactive' OR effective_date < '$date'";
$results = db::getRecords($queryToGetActiveQuotes);
?>

<!-- Dashboard Content -->
<div class="utf-dashboard-content-container-aera" data-simplebar>
  <div id="dashboard-titlebar" class="utf-dashboard-headline-item">
    <div class="row">
      <div class="col-xl-12">
        <h3>Inactive Quote</h3>
        <nav id="breadcrumbs">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li>Inactive Quote</li>
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
            <h3>Inactive Quote List</h3>
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
                      <li><a href="chat.php?quote_id=<?php echo $result['id']; ?>"><span>Chat</span></a></li>
                    </ul>
                    <ul class="dashboard-task-info">
                      <li><span ><b>Effective Date: </b><?php echo $result['effective_date']; ?></span></li>
                    </ul>
                    <div class="utf-buttons-to-right">
                    <a href="user_action.php?activate_quote=<?php echo $result['id']; ?>" class="button green ripple-effect ico" title="Activate" data-tippy-placement="top"><i class="icon-feather-check-circle"></i></a>
                    <a href="user_action.php?del_inactive_quote=<?php echo $result['id']; ?>" class="button red ripple-effect ico" title="Remove" data-tippy-placement="top"><i class="icon-feather-trash-2"></i></a>
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
                  <a class="btn btn-success" style="background: #ff8a00;color: white;padding: 5px 10px 5px 10px;border-radius: 12px;">Activate</a>
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
                  <a class="btn btn-success" style="background: #ff8a00;color: white;padding: 5px 10px 5px 10px;border-radius: 12px;">Activate</a>
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